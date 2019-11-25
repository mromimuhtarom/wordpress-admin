<?php 
/*
*Template Name: About Us
*/
get_header();
?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/assets/css/card.css'; ?>">
        <div class="row">
            <div class="col w-100 d-md-none d-xl-none d-lg-none">
                 <!-- @include('menu.menu') -->
                 <?php include(get_template_directory().'/menu.php');?>
            </div>
        </div>


        <div class="my-aii-container">
            <div id="scrollbar-menu" class="sidebar sidenav my-aii-overflow d-none d-md-block d-lg-block d-xl-block">
                <!-- @include('menu.menu') -->
                <?php include(get_template_directory().'/menu.php');?>
                <div class="fixed-bottom">
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="http://www.facebook.com" class="blue-txt"><i class="fab fa-facebook-f"></i></a>&nbsp;&nbsp;
                    <a href="http://www.twitter.com" class="blue-txt"><i class="fab fa-twitter"></i></a>&nbsp;&nbsp;
                    <a href="http://www.instagram.com" class="blue-txt"><i class="fab fa-instagram"></i></a>&nbsp;&nbsp;
                    <p class="txt-googlesans-medium my-aii-copyright"> &nbsp;&nbsp;&nbsp;&nbsp;<sup>&copy;</sup>2019.All Rights Reserved</p>
                </div>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
            </div>

            <div class="my-aii-about my-aii-overflow" style="background-image:url('<?php echo get_template_directory_uri() . '/assets/images/asta.png'; ?>');">
                <?php if(have_posts()) : while(have_posts()) : the_post();?>
                    <?php the_content(); ?>
                <?php endwhile; endif; ?>
            </div>
   

        </div>   
<?php get_footer(); ?>