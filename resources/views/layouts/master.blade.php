<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
	
    <title>FirstPay</title>
	
    <!-- Bootstrap core CSS -->
    <link href="https://bootswatch.com/lumen/bootstrap.min.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha256-3dkvEK0WLHRJ7/Csr0BZjAWxERc5WH7bdeUya2aXxdU= sha512-+L4yy6FRcDGbXJ9mPG8MT/3UCDzwR9gPeyFNMCtInsol++5m3bk2bXWKdZjvybmohrAsn3Ua5x8gfLnbE1YkOg==" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	<style>
		body {
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
		background-color:#F2F2F2;
		}
		
		input[type='number'] {
		-moz-appearance:textfield;
		}
		input::-webkit-outer-spin-button,
		input::-webkit-inner-spin-button {
		-webkit-appearance: none;
		}
		
		.navbar {
		height: 8.7% !important;
		}
		
		.navbar-nav {
		padding-top: 1.6%;
		}
		
		.bcontainer {
		margin-top: 4.1%;
		}
		
		.slicon {
			background-color:white;
padding: 0.5%;
		}
		
		.prev { padding-right:4px; border-right: solid #D6D6D6 1px; text-transform: uppercase; font-size: 0.8em; }
		
		.next{
margin-left:4px; text-transform: uppercase; font-size: 0.8em;
		}
	</style>
</head>

<body>
	@section('navbar')
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
				</button>
                <a class="navbar-brand" href="#">
                    <img src="http://localhost:8080/firstpay/resources/assets/images/logo.png" width=120 alt="">
				</a>
			</div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
					</li>
                    <li>
                        <a href="#">Services</a>
					</li>
                    <li>
                        <a href="#">Contact</a>
					</li>
				</ul>
				
				<ul class="nav navbar-nav pull-right">
                    <li>
                        <a href="#">Login / Register</a>
					</li>
				</ul>
			</div>
            <!-- /.navbar-collapse -->
		</div>
        <!-- /.container -->
	</nav>
	@show
	
	
	@yield('content')
	
	<footer style="padding:1%;">
		<center>Copyright 2016 - FirstPay</center>
	</footer>
	
	
</body></html>