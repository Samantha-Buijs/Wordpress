<?php /* Template Name: responsive */ ?>


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
               
     <img class="logo" src="<?php echo esc_url( get_template_directory_uri() . '/images/hamburger.svg' ); ?>" alt="">

     <button class="btn-close" style='background-image: url(<?php echo esc_url( get_template_directory_uri() . '/images/hamburger.svg' ); ?>)'><span class='sr-only'>Menu</span></button>


     
        <!-- vergeet niet om te praten over de comment als moeten ze in NL of EN -->



    <input type="checkbox" id="hamburger-bar">
    <label class="hamburger-to-right" for="hamburger-bar">Menu</label>
    <div>
         <div>
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
        </div>
       


    </div>
</header>  
<div>
<?php echo get_the_content(); ?>
<h1><?php echo get_the_title();?></h1>

</div>


</body >
<script src="/wp-content/themes/oefening/menu.js"></script>


</html>





