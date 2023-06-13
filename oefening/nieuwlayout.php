<?php /* Template Name: Team Lay-Out */ ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="./style.css">
    <?php wp_head(); ?>

</head>
<body>
  <header>
        <div>        
            <button class="hamburger" style='background-image: url(<?php echo esc_url( get_template_directory_uri() . '/images/hamburger.svg' ); ?>)'><span class='sr-only'>Menu</span></button>
        </div>


    <div class="logo-hero">

        <div>        
            <img class="logo" src="<?php echo esc_url( get_template_directory_uri() . '/images/hamburger.svg' ); ?>" alt="">
        </div>



        <div class="right">
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
        </div>

        <div>        
            <button class="btn-close" style='background-image: url(<?php echo esc_url( get_template_directory_uri() . '/images/hamburger.svg' ); ?>)'><span class='sr-only'>Menu</span></button>
        </div>
       


    </div>
</header>  
<div>
<?php echo get_the_content(); ?>
<h1><?php echo get_the_title();?></h1>

</div>


</body >


</html>





