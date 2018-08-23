<?php
require_once('config.php');
$youtube_id = $_GET['id'];
$object = new youtube_iframe();
$response = $object->generate($youtube_id);
?>
<?php if($youtube_id == null): header('location: /youtubeconvert');?>
<?php else:?>
<?php if(isset($youtube_id)&&($response)):?>
<?php
isset ($_GET['page']) ? $app = $_GET['page'] : $app = 'home';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Youtube Converter</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/now-ui-kit.css" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets/demo/demo.css" rel="stylesheet" />
  </head>
  <body class="offline-doc">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-white fixed-top navbar-transparent " color-on-scroll="70">
      <div class="container">
        <div class="navbar-translate">
          <a class="navbar-brand" href="/" rel="tooltip" title="Designed by Agrin Fauzi" data-placement="bottom" target="_blank">
            <i class="now-ui-icons media-1_button-play"></i> Youtube Converter
          </a>
          <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar top-bar"></span>
          <span class="navbar-toggler-bar middle-bar"></span>
          <span class="navbar-toggler-bar bottom-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="assets/img/blurred-image-1.jpg">
          <p>Version 1.2.5</p>
          <!-- <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com/CreativeTim" target="_blank">
                <i class="fab fa-twitter"></i>
                <p class="d-lg-none d-xl-none">Twitter</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/CreativeTim" target="_blank">
                <i class="fab fa-facebook-square"></i>
                <p class="d-lg-none d-xl-none">Facebook</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com/CreativeTimOfficial" target="_blank">
                <i class="fab fa-instagram"></i>
                <p class="d-lg-none d-xl-none">Instagram</p>
              </a>
            </li>
          </ul> -->
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
<div class="page-header clear-filter">
    <div class="page-header-image" style="background-image: url('assets/img/bg_1.jpg');"></div>
	<div class="container text-center">
		<div class="container text-center">
			<div class="row" style="margin-bottom: -20px;align-items: center;">
				<div class="col-md-12">
					<h1>Convert into MP3</h1>
				</div>
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<iframe src='https://yt-mp3s.com/mp3/<?php echo $youtube_id ?>' width='100%' allowtransparency='true' scrolling='no' style='border:none'></iframe>
				</div>
				<div class="col-md-4"></div>
			</div>
		</div>
	</div>
</div>
</div>
    <footer class="footer">
      <div class="container">
        <nav>
          <ul>
            <li>
              <a href="/?page=about">
                About Us
              </a>
            </li>
            <li>
              <a href="/?page=contact">
                Contact
              </a>
            </li>
          </ul>
        </nav>
        <div class="copyright" id="copyright">
          &copy;
          <script>
          document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
          </script> | Developed by
          <a target="_blank">Agrin Fauzi &amp; Khoirul Fajri</a>
        </div>
      </div>
    </footer>
    <!--   Core JS Files   -->
    <script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="assets/js/core/bootstrap.min.js" type="text/javascript"></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="assets/js/plugins/bootstrap-switch.js"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
    <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
    <script src="assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
    <script src="assets/js/now-ui-kit.js?v=1.2.0" type="text/javascript"></script>
    <script type="text/javascript">
    function mp3(){
      document.getElementById("convert").action = "mp3.php";
    }
    function videos() {
      document.getElementById("convert").action = "videos.php";
    }
    </script>
</html>
<?php endif;?>
<?php endif;?>