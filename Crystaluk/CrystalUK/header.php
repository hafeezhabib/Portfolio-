<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--favicon icon-->
    <link rel="icon" href="assets/img/cubitodigital.png" type="image/png" sizes="16x16">

    <!--title-->
    <title><?php echo $page_title?> | CrystalUK</title>
    
    <link rel="stylesheet" href="assets/css/aquinas.css">
    <link rel="stylesheet" href="assets/css/gal/whifflery.css">
    <link rel="stylesheet" href="assets/css/gal/depasturage.css">
    <!--build:css-->
    <link rel="stylesheet" href="assets/css/zonoid.css">
<style>
.pathfinding, .tracklessly, .screak, .millicurie{ display:none }
</style>    
    <!-- endbuild -->
</head>

<body>

    <!--preloader start-->
    <div id="preloader">
        <div class="preloader-wrap">
            <img src="assets/img/zincke.png" alt="logo" class="img-fluid" />
            
        </div>
    </div>
    <!--preloader end-->
    <!--header section start-->
    <header class="header">
        <!--start navbar-->
        <nav class="navbar navbar-expand-lg fixed-top bg-transparent">
            <div class="container">
                <a class="navbar-brand" href="./">
                    <img src="assets/img/zincke.png" alt="logo" class="img-fluid" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="ti-menu"></span>
                </button>

                <div class="collapse navbar-collapse h-auto" id="navbarSupportedContent">
                    
                    <ul class="navbar-nav ml-auto menu">
                        <li>
                            <a href="./" class="page-scroll"> Home</a>
                        
                        </li>
                        <?php 
	 	 	 	 	 if (strpos($_SERVER['SCRIPT_NAME'], 'terms.php') !== false || 
	 	 	 	 	 	 strpos($_SERVER['SCRIPT_NAME'], 'privacy-policy.php') !== false || 
	 	 	 	 	 	 strpos($_SERVER['SCRIPT_NAME'], 'service.php') !== false) //Returns Start position and path of the file
	 	 	 	 	 {?>
	 	 	 	 	 	  
                        <li><a href="./#features" class="page-scroll">Services</a></li>
                        <li><a href="./#portfolio" class="page-scroll">Portfolio</a></li>
                        <li><a href="./#pricing" class="page-scroll">Pricing</a>
                        </li>
	 	 	 	 	 <!--/- Inner Pages TopHeader Navigation Ends  -->
	 	 	 	 	 <?php } else { ?>
	 	 	 	 	 <!-- Home + All Service & Lead Pages TopHeader Navigation Starts -->
    	 	 	 	 	  
                        <li><a href="#features" class="page-scroll">Services</a></li>
                        <li><a href="#portfolio" class="page-scroll">Portfolio</a></li>
                        <li><a href="#pricing" class="page-scroll">Pricing</a>
                        </li>
	 	 	 	 	 <!--/- Home + All Service & Lead Pages TopHeader Navigation Ends -->
	 	 	 	 	 <?php } ?>
                       
                        <li class="head_btn"><a href="#" class="page-scroll"> Login</a>
                        </li>
                        <li class="head_btn"><a href="#" class="page-scroll">ORDER
                            NOW</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!--header section end-->
