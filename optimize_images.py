#!/usr/bin/env python3
"""
Image optimization script for web usage
- Optimizes JPEG files (reduces quality to 85%)
- Converts large photo PNGs to JPEG
- Optimizes PNG files
- Resizes images that are too large for web
"""

import os
import sys
from pathlib import Path
from PIL import Image
import shutil

# Configuration
JPEG_QUALITY = 85
MAX_WIDTH = 2000  # Maximum width for images
MAX_HEIGHT = 2000  # Maximum height for images
MIN_SIZE_TO_OPTIMIZE = 100 * 1024  # 100KB - only optimize files larger than this

# Files to skip (icons, favicons, etc.)
SKIP_FILES = {
    'favicon-16x16.png',
    'favicon-32x32.png',
    'android-chrome-144x144.png',
    'apple-touch-icon.png',
    'ccr_logo.png',
    'ccr_small_logo.png',
}

# Directories to skip
SKIP_DIRS = {
    'font-awesome',
    'fonts',
    '.git',
    'node_modules',
}

def should_skip_file(file_path):
    """Check if file should be skipped"""
    if file_path.name in SKIP_FILES:
        return True

    for skip_dir in SKIP_DIRS:
        if skip_dir in file_path.parts:
            return True

    # Skip SVG files (they're vector and don't need optimization)
    if file_path.suffix.lower() == '.svg':
        return True

    return False

def get_image_size_kb(file_path):
    """Get file size in KB"""
    return file_path.stat().st_size / 1024

def optimize_jpeg(image_path, backup=True):
    """Optimize a JPEG image"""
    try:
        original_size = get_image_size_kb(image_path)

        if original_size < MIN_SIZE_TO_OPTIMIZE / 1024:
            return None

        # Backup original
        if backup:
            backup_path = image_path.with_suffix(image_path.suffix + '.backup')
            if not backup_path.exists():
                shutil.copy2(image_path, backup_path)

        # Open and optimize
        img = Image.open(image_path)

        # Convert to RGB if necessary
        if img.mode in ('RGBA', 'LA', 'P'):
            background = Image.new('RGB', img.size, (255, 255, 255))
            if img.mode == 'P':
                img = img.convert('RGBA')
            background.paste(img, mask=img.split()[-1] if img.mode in ('RGBA', 'LA') else None)
            img = background

        # Resize if too large
        if img.width > MAX_WIDTH or img.height > MAX_HEIGHT:
            img.thumbnail((MAX_WIDTH, MAX_HEIGHT), Image.Resampling.LANCZOS)

        # Save optimized
        img.save(image_path, 'JPEG', quality=JPEG_QUALITY, optimize=True)

        new_size = get_image_size_kb(image_path)
        savings = original_size - new_size

        if savings > 0:
            return {
                'original': original_size,
                'new': new_size,
                'savings': savings,
                'percent': (savings / original_size) * 100
            }
        else:
            # Restore from backup if it got bigger
            if backup:
                shutil.copy2(backup_path, image_path)
            return None

    except Exception as e:
        print(f"Error optimizing {image_path}: {e}")
        return None

def convert_png_to_jpeg(image_path, backup=True):
    """Convert PNG to JPEG (for photos only)"""
    try:
        original_size = get_image_size_kb(image_path)

        # Backup original
        if backup:
            backup_path = image_path.with_suffix('.png.backup')
            if not backup_path.exists():
                shutil.copy2(image_path, backup_path)

        # Open image
        img = Image.open(image_path)

        # Check if it has transparency (if so, keep as PNG)
        if img.mode in ('RGBA', 'LA') or (img.mode == 'P' and 'transparency' in img.info):
            # Has transparency, optimize as PNG instead
            return optimize_png(image_path, backup=False)

        # Convert to RGB
        if img.mode != 'RGB':
            img = img.convert('RGB')

        # Resize if too large
        if img.width > MAX_WIDTH or img.height > MAX_HEIGHT:
            img.thumbnail((MAX_WIDTH, MAX_HEIGHT), Image.Resampling.LANCZOS)

        # Save as JPEG
        new_path = image_path.with_suffix('.jpg')
        img.save(new_path, 'JPEG', quality=JPEG_QUALITY, optimize=True)

        new_size = get_image_size_kb(new_path)
        savings = original_size - new_size

        if savings > 0:
            # Remove original PNG
            image_path.unlink()
            return {
                'original': original_size,
                'new': new_size,
                'savings': savings,
                'percent': (savings / original_size) * 100,
                'converted': True,
                'new_path': new_path
            }
        else:
            # Not worth converting, remove JPEG and keep PNG
            new_path.unlink()
            return None

    except Exception as e:
        print(f"Error converting {image_path}: {e}")
        return None

def optimize_png(image_path, backup=True):
    """Optimize a PNG image"""
    try:
        original_size = get_image_size_kb(image_path)

        if original_size < MIN_SIZE_TO_OPTIMIZE / 1024:
            return None

        # Backup original
        if backup:
            backup_path = image_path.with_suffix(image_path.suffix + '.backup')
            if not backup_path.exists():
                shutil.copy2(image_path, backup_path)

        # Open and optimize
        img = Image.open(image_path)

        # Resize if too large
        if img.width > MAX_WIDTH or img.height > MAX_HEIGHT:
            img.thumbnail((MAX_WIDTH, MAX_HEIGHT), Image.Resampling.LANCZOS)

        # Save optimized
        img.save(image_path, 'PNG', optimize=True)

        new_size = get_image_size_kb(image_path)
        savings = original_size - new_size

        if savings > 0:
            return {
                'original': original_size,
                'new': new_size,
                'savings': savings,
                'percent': (savings / original_size) * 100
            }
        else:
            # Restore from backup if it got bigger
            if backup and backup_path.exists():
                shutil.copy2(backup_path, image_path)
            return None

    except Exception as e:
        print(f"Error optimizing {image_path}: {e}")
        return None

def main():
    root_dir = Path('/home/user/Christ-Church-Ridgewood')

    # Find all images
    image_extensions = {'.jpg', '.jpeg', '.png', '.gif'}
    images = []

    for ext in image_extensions:
        images.extend(root_dir.rglob(f'*{ext}'))
        images.extend(root_dir.rglob(f'*{ext.upper()}'))

    # Remove duplicates
    images = list(set(images))

    # Filter out files to skip
    images = [img for img in images if not should_skip_file(img)]

    print(f"Found {len(images)} images to process")
    print("=" * 80)

    total_savings = 0
    processed = 0
    converted = 0

    for image_path in sorted(images, key=lambda x: x.stat().st_size, reverse=True):
        ext = image_path.suffix.lower()
        original_size = get_image_size_kb(image_path)

        # Skip small files
        if original_size < MIN_SIZE_TO_OPTIMIZE / 1024:
            continue

        result = None

        if ext in ('.jpg', '.jpeg'):
            result = optimize_jpeg(image_path)
            if result:
                print(f"✓ {image_path.relative_to(root_dir)}")
                print(f"  {result['original']:.1f}KB -> {result['new']:.1f}KB (saved {result['savings']:.1f}KB, {result['percent']:.1f}%)")

        elif ext == '.png':
            # Try converting large PNGs to JPEG
            if original_size > 500:  # Convert PNGs larger than 500KB
                result = convert_png_to_jpeg(image_path)
                if result and result.get('converted'):
                    converted += 1
                    print(f"✓ {image_path.relative_to(root_dir)} -> {result['new_path'].name}")
                    print(f"  Converted PNG to JPEG: {result['original']:.1f}KB -> {result['new']:.1f}KB (saved {result['savings']:.1f}KB, {result['percent']:.1f}%)")
                elif result:
                    print(f"✓ {image_path.relative_to(root_dir)}")
                    print(f"  {result['original']:.1f}KB -> {result['new']:.1f}KB (saved {result['savings']:.1f}KB, {result['percent']:.1f}%)")
            else:
                # Just optimize the PNG
                result = optimize_png(image_path)
                if result:
                    print(f"✓ {image_path.relative_to(root_dir)}")
                    print(f"  {result['original']:.1f}KB -> {result['new']:.1f}KB (saved {result['savings']:.1f}KB, {result['percent']:.1f}%)")

        if result:
            total_savings += result['savings']
            processed += 1

    print("=" * 80)
    print(f"Processed {processed} images")
    print(f"Converted {converted} PNGs to JPEGs")
    print(f"Total savings: {total_savings:.1f}KB ({total_savings/1024:.1f}MB)")

    # Clean up backup files if successful
    print("\nCleaning up backup files...")
    for backup in root_dir.rglob('*.backup'):
        backup.unlink()
    print("Done!")

if __name__ == '__main__':
    main()
