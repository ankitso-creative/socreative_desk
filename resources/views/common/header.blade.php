<!DOCTYPE html>
<html lang="ang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>So-Creative Desk</title>
	<!-- Favicons-->
	<link rel="shortcut icon" href="{{ asset('assets/admin/images/favicon.ico') }}" type="image/x-icon">
	<link rel="icon" href="{{ asset('assets/admin/images/favicon.ico') }}" type="image/x-icon">

    <!-- Fontfaces CSS-->
    <link href="{{ asset('assets/admin/css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/admin/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/admin/vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/admin/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">
	<!-- Bootstrap CSS-->
    <link href="{{ asset('assets/admin/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">
	<!-- Vendor CSS-->
	<link href="{{ asset('assets/admin/css/theme.css') }}" rel="stylesheet" media="all">
	<link href="{{ asset('assets/admin/css/style.css') }}" rel="stylesheet" media="all">
	<!-- Jquery JS-->
    <script src="base_url('assets/admin/')?>vendor/jquery-3.2.1.min.js"></script>

</head>

<body class="animsition">
	<input type="hidden" id="base_url" value="">
<header class="header-home">
		<div class="section__content section__content--p30">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-3">
						<div class="head_logo">
							<img src="{{ asset('assets/admin/images/logo-desk.png') }}"class="home-logo img-fluid">
						</div>
					</div>
					<div class="col-lg-9 text-right">
						<ul class="nav nav-tabs float-right menu_header">
							<li class="nav-item"><a class="nav-link mail_btn" href="mailto:info@so-creative.co.uk"><i class="fa fa-envelope"></i> info@so-creative.co.uk</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>