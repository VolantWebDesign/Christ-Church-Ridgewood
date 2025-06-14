<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Giving at Christ Church, Ridgewood</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/modern-business.css" rel="stylesheet">
  <link href="css/custom.css" rel="stylesheet">

  <!-- Icons -->
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <meta name="theme-color" content="#3b74fb">

  <!-- Custom Fonts -->
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <!-- Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-X0BC8NT7TZ"></script>
  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-X0BC8NT7TZ');
  </script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
  <?php
  $thekeys=time();
  $current = 'giving';
  include "navigation.php";
  ?>

  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-md-12" align="center">
        <h2 class="page-header">Giving at Christ Church</h2>
      </div>
    </div>

<!-- Vanco tiles -->
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header"  align="center">
						<h3>Donate Online</h3>
					</div>
					<div class="card-body" >
						<div class="row" >
							<div class="col" align="center">

                <iframe id="v-frame" width="100%" frameborder="0" allow="clipboard-write" src="https://secure.myvanco.com/L-Z8Y2" scrolling="no"></iframe>
                  <script type="application/javascript">
                  window.onmessage=(e=>{const n=document.getElementById("v-frame");"https://secure.myvanco.com"===e.origin&&e.data.height&&(n.height=e.data.height,n.overflow="hidden")});
                </script>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Give Direct to Christ Church -->
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header"  align="center">
						<h3>Donate to Christ Church</h3>
					</div>
					<div class="card-body" >
						<div class="row" >
							<div class="col-md-6" align="center">
                           <div id="annual-meeting-headline">
											<br>
											<br>
											<img src="images/Stewardship/rooted_in_abundance_2023.png" alt="Church Annual Campaign" title="Church Annual Campaign" class="img-fluid">
											<br>
											<br>
												<h3>
												2025 Stewardship Campaign
												<br>
												"Rooted in Abundance"
												</h3>
										</div>
							</div>
							<div class="col-md-6" align="center">
                                <ul align="left">
                                <li>Online: Secure online donation by credit card or checking/savings account through Vanco. <a href="https://goo.gl/ap2mQM" target="_blank" >Click to Donate.</a></li>
                                <li>Your Bank: set up your donation as a payment (one time or recurring) using your bank, and they'll mail it for you - Christ Episcopal Church, Attn: Bookkeeper, 105 Cottage Place, Ridgewood, NJ 07450.</li>
                                <li>Mail: Send payment by check via the US Postal Service using the address from above. Note that some incoming and outgoing mail has been quite slow the past few months.</li>
                                </ul>
							</div>
						</div>
					</div>
					<div class="card-footer" align="center">
						<!-- <a href="documents/Stewardship/diocesenewark-stock-transfers.pdf" target="_blank" class="btn btn-primary" >Diocesan Broker Info</a>
						<a href="https://dioceseofnewark.org/giving/make-gift-stock" target="_blank" class="btn btn-outline-primary" >Diocesan Stock Donations</a> -->
						<a href="https://goo.gl/ap2mQM" target="_blank" class="btn btn-primary" >Donate to Christ Church</a>

					</div>
				</div>
			</div>
		</div>


		<!-- Stock Donation -->
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header"  align="center">
						<h3>Support the Church with Stock Transfers <br/>& Mandatory Minimum Distributions
					</div>
					<div class="card-body" >
						<div class="row" >
							<div class="col-md-6" align="center">
								<p>
								Did you know that Christ Church accepts the contribution of marketable securities (e.g. publicly traded stocks)? To make a a stock donation, please provide your broker the information found below.
								</p>
							</div>
							<div class="col-md-6" align="center">
								<p>
								Upon receipt of the security into Christ Church's account, you will recieve a tax letter establishing the value of the contribution which is based on the date the security was received into the church account, the number of shares received and the average high and low of the stock price on the date the security was received.
								</p>
							</div>
						</div>
					</div>
					<div class="card-footer" align="center">
						<!-- <a href="documents/Stewardship/diocesenewark-stock-transfers.pdf" target="_blank" class="btn btn-primary" >Diocesan Broker Info</a>
						<a href="https://dioceseofnewark.org/giving/make-gift-stock" target="_blank" class="btn btn-outline-primary" >Diocesan Stock Donations</a> -->
						<a href="documents/Stewardship/ccridgewood-stock-transfers.pdf" target="_blank" class="btn btn-primary" >Christ Church Broker Info</a>

					</div>
				</div>
			</div>
		</div>


    <!-- Call to Action Section -->
    <?php include "donate.php"; ?>

  </div>
  <!-- /.container -->

  <!-- jQuery -->
  <script src="js/jquery.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="js/bootstrap.min.js"></script>

</body>

</html>
