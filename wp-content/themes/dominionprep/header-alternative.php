<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
      <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/sass/common.css">
      <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/sass/owl.carousel.css">
      <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/sass/revolution.style.css">
      <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/sass/sliderstyle.css">
      <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/sass/style.css.map">
      <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/sass/style-dist.css">
      <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/sass/custom-slider.css">
      <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/sass/style.css?v=1.1">
      <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/sass/responsive.css">
</head>
<?php wp_head(); ?>  
<body>
<header class="dark-header background-add small_header">
        <nav class="navbar navbar-light navbar-expand-lg small-nav">
            <a class="navbar-brand" href="https://dominionprep.org/">
                <div class="logo-1">
                    <div class="icon-container">
                        <img src="<?php echo get_template_directory_uri().'/assets/images/Group-big-logo-icon.png' ?>" alt="" class="img-fluid">
                    </div>
                    <div class="d-flex flex-column align-items-lg-center align-items-md-center align-items-sm-center">
                        <span>Dominion Prep</span>
                        <p>Accelerated results, Extraordinary opportunities.</p>
                    </div>
                </div>

            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="hamburger"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo02">
                <ul class="d-flex align-items-lg-center align-items-sm-start header-right">
                <?php wp_nav_menu( array('theme_location' => 'max_mega_menu_1' ) ); ?>
                </ul>
            </div>
        </nav>
    </header>
