<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title')</title>

<!-- Favicons
================================================== -->
<link rel="shortcut icon" href="smiles_css/img/favicon.ico" type="image/x-icon">
<link rel="icon" href="" type="image/x-icon">
<!-- / Favicons
================================================== -->

<!-- >> CSS
============================================================================== -->
<link href="smiles_css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- Google Web Fonts -->
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- Font Awesome -->
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<!-- Nivo Lightbox -->
<link href="smiles_css/vendor/nivo-lightbox/nivo-lightbox.css" rel="stylesheet">
<link rel="stylesheet" href="smiles_css/vendor/nivo-lightbox/themes/default/default.css" type="text/css" />
  <!-- /Nivo Lightbox -->
  <!-- Perfect ScrollBar -->
<link href="smiles_css/vendor/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">
<!-- owl carousel -->
<link href="smiles_css/vendor/owl.carousel/owl-carousel/owl.carousel.css" rel="stylesheet">
<link href="smiles_css/vendor/owl.carousel/owl-carousel/owl.theme.css" rel="stylesheet">
<!-- Main Styles -->
<link href="smiles_css/css/styles.css" rel="stylesheet">

<!-- >> /CSS
============================================================================== -->
</head>
<body>
    @include('site.shared.load')
    <!-- Main Content
================================================== -->
<section id="body" class="">

	<div class="container">
    @include('site.shared.navbar')
    
    @yield('content')
    
    </div>

</section>
<!-- /Main Content
================================================== -->
@include('site.shared.includes')


<!-- >> JS
============================================================================== -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="smiles_css/vendor/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="smiles_css/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="smiles_css/vendor/validate.js"></script>
<!-- Holder JS -->
<script src="smiles_css/vendor/holder.js"></script>
<!-- Modal box-->
<script src="smiles_css/vendor/nivo-lightbox/nivo-lightbox.min.js"></script>
<!-- /Modal Box -->
<!-- Perfect ScrolBar -->
<script src="smiles_css/vendor/perfect-scrollbar/js/min/perfect-scrollbar.jquery.min.js"></script>
<!-- /Perfect ScrolBar -->
<!-- Owl Caroulsel -->
<script src="smiles_css/vendor/owl.carousel/owl-carousel/owl.carousel.js"></script>
<!-- Google Maps -->
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<!-- Cross-browser -->
<script src="smiles_css/vendor/cross-browser.js"></script>
<!-- Main Scripts -->
<script src="smiles_css/js/main.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-68192027-1', 'auto');
  ga('send', 'pageview');

</script>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="vendor/html5shiv.js"></script>
  <script src="vendor/respond.min.js"></script>
<![endif]-->
<!-- >> /JS
============================================================================= -->


</body>
</html>