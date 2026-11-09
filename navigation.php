    <!-- Navigation -->

<!-- <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-3288774-55', 'auto');
  ga('send', 'pageview');

</script> -->

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-X0BC8NT7TZ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-X0BC8NT7TZ');
</script>

<?php if (isset($current) && $current === 'great-hall'): ?>
<a class="sr-only sr-only-focusable gh-skip-link" href="#main-content">Skip to main content</a>
<header role="banner">
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top gh-navbar" style="background-color: #113056;" aria-label="The Great Hall Venue Navigation">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="great-hall.php">
        <img src="images/ccr_small_logo.png" alt="Christ Church Ridgewood crest" style="padding: 0; height: 34px; width: auto; margin-right: 10px;">
        <span class="gh-brand-text">The Great Hall, Ridgewood</span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsGreatHall" aria-controls="navbarsGreatHall" aria-expanded="false" aria-label="Toggle venue navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsGreatHall">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a href="#details" class="nav-link">Space &amp; Amenities</a>
          </li>
          <li class="nav-item">
            <a href="#pricing" class="nav-link">Rates &amp; Packages</a>
          </li>
          <li class="nav-item">
            <a href="#floor-plans" class="nav-link">Floor Plans</a>
          </li>
          <li class="nav-item">
            <a href="#gallery" class="nav-link">Photos</a>
          </li>
          <li class="nav-item">
            <a href="#policies" class="nav-link">Parking &amp; Guidelines</a>
          </li>
          <li class="nav-item">
            <a href="index.php" class="nav-link gh-church-return-link" title="Return to Christ Episcopal Church Homepage">Christ Church Home</a>
          </li>
        </ul>
        <div class="my-2 my-lg-0">
          <a href="#inquire" class="btn btn-light gh-nav-cta" style="font-weight: bold; color: #113056;">Inquire Now</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Streamlined Venue Location Bar (No Hero Masthead Image) -->
  <div class="gh-topbar" role="region" aria-label="Venue Address and Quick Contact">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-8 text-center text-md-left">
          <i class="fa fa-map-marker" aria-hidden="true"></i> <strong>105 Cottage Place, Ridgewood, NJ 07450</strong>
          <span class="gh-topbar-divider" aria-hidden="true">|</span>
          <i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:+12016522350" class="gh-topbar-link">(201) 652-2350</a>
          <span class="gh-topbar-divider d-none d-sm-inline" aria-hidden="true">|</span>
          <span class="d-none d-sm-inline">Downtown Gathering &amp; Event Venue</span>
        </div>
        <div class="col-md-4 text-center text-md-right mt-1 mt-md-0">
          <a href="mailto:parishadmin@christchurchridgewood.org" class="gh-topbar-link"><i class="fa fa-envelope-o" aria-hidden="true"></i> parishadmin@christchurchridgewood.org</a>
        </div>
      </div>
    </div>
  </div>
</header>
<?php else: ?>
<nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #113056;">
      <a class="navbar-brand" href="index.php"><img src="images/ccr_small_logo.png" alt="Christ Church Ridgewood Home" style="padding-top: 0; padding-bottom: 0;"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

<!-- top navigation -->
      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item <?php if(isset($current) && $current == 'worship') {echo 'active';} ?>">
          <a href="worship.php" class="nav-link">Worship & Calendar</a>
          </li>
          <li class="nav-item <?php if(isset($current) && $current == 'ministries') {echo 'active';} ?>">
          <a href="ministries.php" class="nav-link">Ministries</a>
          </li>
          <li class="nav-item <?php if(isset($current) && $current == 'clergy') {echo 'active';} ?>">
          <a href="clergy.php" class="nav-link">Clergy & Staff</a>
          </li>
          <!-- <li class="nav-item <?php if(isset($current) && $current == 'faq') {echo 'active';} ?>">
          <a href="faq.php" class="nav-link">FAQ</a>
          </li> -->
          <li class="nav-item <?php if(isset($current) && $current == 'giving') {echo 'active';} ?>">
            <a href="giving.php" class="nav-link">Giving</a>
         </li>
          <li class="nav-item <?php if(isset($current) && $current == 'great-hall') {echo 'active';} ?>">
            <a href="great-hall.php" class="nav-link">Great Hall</a>
         </li>
          <li class="nav-item <?php if(isset($current) && $current == 'contact') {echo 'active';} ?>">
            <a href="contact.php" class="nav-link">Contact</a>
         </li>
        </ul>
        <form class="form-inline mt-2 mt-md-0">
            <a href=giving.php title="Donate to Christ Church Ridgewood" alt="donate, button, church"><button type="button" class="btn btn-light" style="font-weight: bold; color: #113056;">Donate</button></a> &nbsp; &nbsp;
        </form>
      </div>
    </nav>

<!-- masthead image -->
    <!-- Advent -->
    <!-- <img src="images/mastheads/CCR_masthead_advent.jpg?k=<?php echo $thekeys; ?>" class="img-fluid" style="padding-top: 0; padding-bottom: 0;"> -->

    <!-- Christmas -->
    <!-- <img src="images/mastheads/CCR_masthead_christmas_v5.jpg?k=<?php echo $thekeys; ?>" class="img-fluid" style="padding-top: 0; padding-bottom: 0;"> -->

    <!-- Ordinary Time -->
    <img src="images/mastheads/CCR_masthead.jpg?k=<?php echo $thekeys; ?>" class="img-fluid" style="padding-top: 0; padding-bottom: 0;">

    <!-- Lent -->
    <!-- <img src="images/mastheads/CCR_masthead_lent.jpg?k=<?php echo $thekeys; ?>" class="img-fluid" style="padding-top: 0; padding-bottom: 0;"> -->

<!-- Contact Info -->
    <div class="row">
        <div class="col white address text-center">105 Cottage Place, Ridgewood, NJ &nbsp;|&nbsp; <a href="tel:+12016522350">(201) 652-2350</a> &nbsp;|&nbsp;
          <a href="https://facebook.com/ChristEpiscopalChurchRidgewood/" target="_blank" rel="noopener"><i class="fa fa-facebook-square fa-2x fa-inverse"></i></a> &nbsp;
          <a href="https://instagram.com/christchurchridgewoodnj/" target="_blank" rel="noopener"><i class="fa fa-instagram fa-2x fa-inverse"></i></a> &nbsp;
          <a href="https://twitter.com/CCridgewood" target="_blank" rel="noopener"><i class="fa fa-twitter-square fa-2x fa-inverse"></i></a> &nbsp;
        </div>
    </div>
    <br>
<?php endif; ?>
