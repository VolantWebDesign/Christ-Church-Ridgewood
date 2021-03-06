    <!-- Navigation -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-3288774-55', 'auto');
  ga('send', 'pageview');

</script>

<nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #113056;">
      <a class="navbar-brand" href="index.php"><img src="images/ccr_small_logo.png" style="padding-top: 0; padding-bottom: 0;"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

<!-- top navigation -->
      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item <?php if($current == 'worship') {echo 'active';} ?>">
          <a href="worship.php" class="nav-link">Worship & Calendar</a>
          </li>
          <li class="nav-item <?php if($current == 'ministries') {echo 'active';} ?>">
          <a href="ministries.php" class="nav-link">Ministries</a>
          </li>
          <li class="nav-item <?php if($current == 'clergy') {echo 'active';} ?>">
          <a href="clergy.php" class="nav-link">Clergy & Staff</a>
          </li>
          <li class="nav-item <?php if($current == 'faq') {echo 'active';} ?>">
          <a href="faq.php" class="nav-link">F.A.Q.</a>
          </li>
          <li class="nav-item <?php if($current == 'contact') {echo 'active';} ?>">
            <a href="contact.php" class="nav-link">Contact</a>
         </li>
         <li class="nav-item <?php if($current == 'youth') {echo 'active';} ?>">
           <a href="youth.php" class="nav-link">Youth Group</a>
        </li>
        </ul>
        <form class="form-inline mt-2 mt-md-0">
            <a href=https://goo.gl/ap2mQM target=_blank title="Donate to Christ Church Ridgewood" alt="donate, button, church"><button type="button" class="btn btn-light" style="font-weight: bold; color: #113056;">Donate</button></a> &nbsp; &nbsp;
        </form>
      </div>
    </nav>

<!-- masthead image -->
    <img src="images/CCR_masthead_advent.jpg?k=<?php echo $thekeys; ?>" class="img-fluid" style="padding-top: 0; padding-bottom: 0;">

<!-- Contact Info -->
    <div class="row">
        <div class="col white address text-center">105 Cottage Place, Ridgewood, NJ &nbsp;|&nbsp; <a href="tel:+12016522350">(201) 652-2350</a> &nbsp;|&nbsp;
          <a href="https://facebook.com/ChristEpiscopalChurchRidgewood/" target="_blank" rel="noopener"><i class="fa fa-facebook-square fa-2x fa-inverse"></i></a> &nbsp;
          <a href="https://instagram.com/christchurchridgewoodnj/" target="_blank" rel="noopener"><i class="fa fa-instagram fa-2x fa-inverse"></i></a> &nbsp;
          <a href="https://twitter.com/CCridgewood" target="_blank" rel="noopener"><i class="fa fa-twitter-square fa-2x fa-inverse"></i></a> &nbsp;
        </div>
    </div>
    <br>
