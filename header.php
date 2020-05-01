<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ENC_NEURO_SOLUTIONS
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

   <!-- favicon -->
	
	
	<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('stylesheet_directory'); ?>/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('stylesheet_directory'); ?>/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('stylesheet_directory'); ?>/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php bloginfo('stylesheet_directory'); ?>/assets/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php bloginfo('stylesheet_directory'); ?>/assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
   
    <!-- ========== Start Stylesheet ========== -->
 


    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/html5/html5shiv.min.js"></script>
      <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/html5/respond.min.js"></script>
    <![endif]-->    

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">
    
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

 



<!-- Header 
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default navbar-fixed navbar-transparent white bootsnav">

            <!-- Start Top Search -->
            <div class="container">
                <div class="row">
                    <div class="top-search">
                        <div class="input-group">
                            <form action="#">
                                <input type="text" name="text" class="form-control" placeholder="Search">
                                <button type="submit">
                                    <i class="fas fa-search"></i>
                                </button>  
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->

            <div class="container">


                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" id="nav-togg" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="<?php echo home_url(); ?>">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/site/mindpr-logo.png" class="logo logo-display" alt="Logo">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/site/MyndPro-blue.png" class="logo logo-scrolled" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#" id="nav_cus">
                       
                        <li>
                            <a class="home-url" href="<?php echo home_url(); ?>/">Home</a>
                        </li>
                        <li>
                            <a class="smooth-menu hider_menu" href="<?php echo home_url(); ?>/#neurofeedback">What is Neurofeedback</a>
                        </li>
                        <li>
                            <a class="smooth-menu hider_menu" href="<?php echo home_url(); ?>/#solutions">Neurofeedback Solutions</a>
                        </li>
                       <li>
                            <a class="smooth-menu hider_menu" href="<?php echo home_url(); ?>/#who-we-are">Who We are</a>
                        </li>
                       <li>
                           <a class="smooth-menu hider_menu" href="<?php echo home_url(); ?>/#contact">Contact Us</a>
                       </li>

                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

           

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->

