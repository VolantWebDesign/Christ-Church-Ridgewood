#!/usr/bin/env python3
"""
Image optimization script for web usage
- Optimizes JPEG files (reduces quality to 85%)
- Converts large photo PNGs to JPEG
- Optimizes PNG files
- Resizes images that are too large for web

Usage:
  python optimize_images.py            # write changes
  python optimize_images.py --dry-run  # preview only, no files changed
"""

import argparse
import shutil
from io import BytesIO
from pathlib import Path
from PIL import Image

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

def parse_args():
    parser = argparse.ArgumentParser(
        description='Optimize images for web usage'
    )
    parser.add_argument(
        '--dry-run', '-n',
        action='store_true',
        help='Show what would change without writing, converting, or deleting files',
    )
    return parser.parse_args()

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

def encoded_size_kb(img, fmt, **save_kwargs):
    """Encode in memory and return the resulting size in KB"""
    buf = BytesIO()
    img.save(buf, fmt, **save_kwargs)
    return len(buf.getvalue()) / 1024

def result_if_smaller(original_size, new_size, extra=None):
    savings = original_size - new_size
    if savings <= 0:
        return None
    result = {
        'original': original_size,
        'new': new_size,
        'savings': savings,
        'percent': (savings / original_size) * 100
    }
    if extra:
        result.update(extra)
    return result

def optimize_jpeg(image_path, backup=True, dry_run=False):
    """Optimize a JPEG image"""
    try:
        original_size = get_image_size_kb(image_path)

        if original_size < MIN_SIZE_TO_OPTIMIZE / 1024:
            return None

        backup_path = image_path.with_suffix(image_path.suffix + '.backup')
        if backup and not dry_run:
            if not backup_path.exists():
                shutil.copy2(image_path, backup_path)

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

        if dry_run:
            new_size = encoded_size_kb(img, 'JPEG', quality=JPEG_QUALITY, optimize=True)
            return result_if_smaller(original_size, new_size)

        img.save(image_path, 'JPEG', quality=JPEG_QUALITY, optimize=True)
        new_size = get_image_size_kb(image_path)
        result = result_if_smaller(original_size, new_size)
        if result is None and backup:
            shutil.copy2(backup_path, image_path)
        return result

    except Exception as e:
        print(f"Error optimizing {image_path}: {e}")
        return None

def convert_png_to_jpeg(image_path, backup=True, dry_run=False):
    """Convert PNG to JPEG (for photos only)"""
    try:
        original_size = get_image_size_kb(image_path)

        backup_path = image_path.with_suffix('.png.backup')
        if backup and not dry_run:
            if not backup_path.exists():
                shutil.copy2(image_path, backup_path)

        img = Image.open(image_path)

        # Check if it has transparency (if so, keep as PNG)
        if img.mode in ('RGBA', 'LA') or (img.mode == 'P' and 'transparency' in img.info):
            return optimize_png(image_path, backup=False, dry_run=dry_run)

        if img.mode != 'RGB':
            img = img.convert('RGB')

        if img.width > MAX_WIDTH or img.height > MAX_HEIGHT:
            img.thumbnail((MAX_WIDTH, MAX_HEIGHT), Image.Resampling.LANCZOS)

        new_path = image_path.with_suffix('.jpg')

        if dry_run:
            new_size = encoded_size_kb(img, 'JPEG', quality=JPEG_QUALITY, optimize=True)
            return result_if_smaller(
                original_size,
                new_size,
                extra={'converted': True, 'new_path': new_path},
            )

        img.save(new_path, 'JPEG', quality=JPEG_QUALITY, optimize=True)
        new_size = get_image_size_kb(new_path)
        result = result_if_smaller(
            original_size,
            new_size,
            extra={'converted': True, 'new_path': new_path},
        )
        if result:
            image_path.unlink()
            return result

        new_path.unlink()
        return None

    except Exception as e:
        print(f"Error converting {image_path}: {e}")
        return None

def optimize_png(image_path, backup=True, dry_run=False):
    """Optimize a PNG image"""
    try:
        original_size = get_image_size_kb(image_path)

        if original_size < MIN_SIZE_TO_OPTIMIZE / 1024:
            return None

        backup_path = image_path.with_suffix(image_path.suffix + '.backup')
        if backup and not dry_run:
            if not backup_path.exists():
                shutil.copy2(image_path, backup_path)

        img = Image.open(image_path)

        if img.width > MAX_WIDTH or img.height > MAX_HEIGHT:
            img.thumbnail((MAX_WIDTH, MAX_HEIGHT), Image.Resampling.LANCZOS)

        if dry_run:
            new_size = encoded_size_kb(img, 'PNG', optimize=True)
            return result_if_smaller(original_size, new_size)

        img.save(image_path, 'PNG', optimize=True)
        new_size = get_image_size_kb(image_path)
        result = result_if_smaller(original_size, new_size)
        if result is None and backup and backup_path.exists():
            shutil.copy2(backup_path, image_path)
        return result

    except Exception as e:
        print(f"Error optimizing {image_path}: {e}")
        return None

def main():
    args = parse_args()
    dry_run = args.dry_run
    root_dir = Path('.')
    status = '[DRY RUN]' if dry_run else '[OK]'

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

    if dry_run:
        print('DRY RUN - no files will be changed')
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
            result = optimize_jpeg(image_path, dry_run=dry_run)
            if result:
                print(f"{status} {image_path.relative_to(root_dir)}")
                print(f"  {result['original']:.1f}KB -> {result['new']:.1f}KB (saved {result['savings']:.1f}KB, {result['percent']:.1f}%)")

        elif ext == '.png':
            # Try converting large PNGs to JPEG
            if original_size > 500:  # Convert PNGs larger than 500KB
                result = convert_png_to_jpeg(image_path, dry_run=dry_run)
                if result and result.get('converted'):
                    converted += 1
                    print(f"{status} {image_path.relative_to(root_dir)} -> {result['new_path'].name}")
                    print(f"  Converted PNG to JPEG: {result['original']:.1f}KB -> {result['new']:.1f}KB (saved {result['savings']:.1f}KB, {result['percent']:.1f}%)")
                elif result:
                    print(f"{status} {image_path.relative_to(root_dir)}")
                    print(f"  {result['original']:.1f}KB -> {result['new']:.1f}KB (saved {result['savings']:.1f}KB, {result['percent']:.1f}%)")
            else:
                result = optimize_png(image_path, dry_run=dry_run)
                if result:
                    print(f"{status} {image_path.relative_to(root_dir)}")
                    print(f"  {result['original']:.1f}KB -> {result['new']:.1f}KB (saved {result['savings']:.1f}KB, {result['percent']:.1f}%)")

        if result:
            total_savings += result['savings']
            processed += 1

    print("=" * 80)
    action = 'Would process' if dry_run else 'Processed'
    convert_label = 'Would convert' if dry_run else 'Converted'
    print(f"{action} {processed} images")
    print(f"{convert_label} {converted} PNGs to JPEGs")
    print(f"Total savings: {total_savings:.1f}KB ({total_savings/1024:.1f}MB)")

    if dry_run:
        print("\nNo files were changed.")
        return

    print("\nCleaning up backup files...")
    for backup in root_dir.rglob('*.backup'):
        backup.unlink()
    print("Done!")

if __name__ == '__main__':
    main()
