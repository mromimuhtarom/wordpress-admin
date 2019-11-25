<?php 
/*
*Template Name: How To Top Up
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
                <div style="bottom:0;width:100%;position:absolute; font-size:0.8vw;">
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
            <div class="my-aii-about my-aii-overflow">
                <!-- @yield('content') -->
                <div class="container-fluid h-100" style="padding:0;">
                    <div class="row no-gutters h-100">
                    <!-- @if(!Request::is('guide/mobile/*')) -->
                        <div class="col-md-5  text-left">       

                            <p>&nbsp;</p>
                            <h1 class="txt-googlesans-bold"><?php the_title(); ?></h1>
                            <p>&nbsp;</p>

                            <div class="test"></div>
               
                                <div class="cardmenu">
                                <?php 
                                    $guide = new WP_Query(array('category_name' => 'How To Top Up', 'posts_per_page' => 10));
                                ?>
                                <?php if($guide->have_posts()) : while($guide->have_posts()) : $guide->the_post();?>
                                <?php
                                    $feat_image = get_template_directory_uri() . '/assets/images/asta.png';
                                    $feat_img_alt = '';  
                                    if( has_post_thumbnail() ) {
                                        $get_feat_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
                                        $feat_image = $get_feat_image[0];
                                        $feat_img_alt = get_post_meta( get_post_thumbnail_id( $post->ID ), '_wp_attachment_image_alt', true );
                                    }
                                    if ( $feat_img_alt === '' ) {
                                        $feat_img_alt = get_the_title();
                                    }
                                ?>
                                    <!-- {{--khusus mobile--}} -->
                                    <?php ?>
                                    <a href="<?php the_permalink(); ?>?detail_article=true" class="d-md-none d-xl-none d-lg-none" id="formButton">
                                        <div class="row">
                                            <div class="col-5"><img src="<?php echo  esc_url($feat_image); ?>" style="width:100%;height:auto;" alt="..." width="100" height="100"></div>
                        
                                            <div class="col-5 border-bottom">
                                                <h5 align="left" class="txt-googlesans-bold"><?php the_title(); ?></h5>
                                                <p class=" text-muted txt-googlesans-reguler" align="justify"><?php the_excerpt(); ?></p>  
                                                <!-- {{-- <hr>   --}} -->
                                            </div>
                                        </div>                      
                                    </a>
                  
                                    <!-- {{--akhir mobile--}} -->
                                    <!-- {{--untuk desktop--}} -->
                                    <a href="<?php the_permalink(); ?>" class="{{ Request::is('guide/1') ? 'active' : null}} d-none d-md-block d-lg-block d-xl-block">
                                        <div class="row">
                                            <div class="col-4"><img src="<?php echo  esc_url($feat_image); ?>" style="width:100%;height:auto;" alt="..." width="180" height="100"></div>
                                            <div class="col-8 border-bottom">
                                                <h5 align="left" class="txt-googlesans-bold"><?php the_title(); ?></h5>
                                                <p class=" text-muted txt-googlesans-reguler" align="justify"><?php the_excerpt(); ?></p>  
                                                <!-- {{-- <hr>   --}} -->
                                            </div>
                                        </div>
                                    </a>
                                    <!-- {{--akhir dekstop--}} -->
                                <?php endwhile; endif; ?> 
                                </div>     
                        </div>
                        <!-- {{--untuk mobile--}} -->
                        <!-- <div class="col" >
                            <p>&nbsp;</p>
                             @include('pages.guide_detail')
                        </div> -->
                        <!-- {{--untuk desktop--}} -->
                        <?php 
                            $guide = new WP_Query(array('category_name' => 'How To Top Up', 'posts_per_page' => 1, 'order'=>'DESC'));
                        ?>
                        <?php if($guide->have_posts()) : while($guide->have_posts()) : $guide->the_post();?>
                        <div class="col  my-aii-bgwhite d-none d-md-block d-lg-block d-xl-block">
                            <div class="content-article">
                                <p>&nbsp;</p>
                                <div class="content-article-word"><?php the_content(); ?></div>
                            </div>
                        </div>
                        <?php endwhile; endif; ?> 
                    </div>


                </div>
            </div>
   

        </div>   
<?php get_footer(); ?>