<?php
/*
*Template Name: All Game
*/
get_header();
?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/assets/css/card_game.css'; ?>">
<div class="row">
    <div class="col w-100 d-md-none d-xl-none d-lg-none">
        <?php include(get_template_directory().'/menu.php');?>
    </div>
</div>

<div class="my-aii-container">
    <div id="scrollbar-menu" class="sidebar sidenav my-aii-overflow d-none d-md-block d-lg-block d-xl-block">  
        <?php include(get_template_directory().'/menu.php');?>
        <div style=" bottom:0;width:100%;position:absolute; font-size:0.8vw;">
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
     <!-- batas awal -->    
        <!-- for mobile -->
        <div class="menu-topnav-allgame d-md-none d-xl-none d-lg-none">
            <div class="row">
                <div class="col txt-googlesans-bold">
                    <p>&nbsp;</p>
                    <h2><?php the_title();?></h2>
                </div>
            </div>
        </div>
        <!-- end mobile -->

        <!-- for computer -->   
    <div class="container-fluid bg-content-all-game my-aii-overflow" style="padding:0;">
  
      <div class="home-content" style="padding-left:1%;padding-right:1%;">
        <div class="menu-topnav d-none d-md-block d-lg-block d-xl-block">
            <div class="row">
              <div class="col txt-googlesans-bold">
                <p>&nbsp;</p>
                <h2><?php the_title(); ?></h2>
              </div>
            </div>
            <hr>
        </div>
        <div class="home-slide main">       
            
                
                    
          <div id="popular_game">

                
            <?php 
                $home_asta = new WP_Query(array('category_name' => 'Popular Games This Month', 'posts_per_page' => 10));
                $i=1;
            ?>
            <?php if($home_asta->have_posts()) : while($home_asta->have_posts()) : $home_asta->the_post();?>
                <!-- <div class="row"> -->
    
                <?php 
                    if($i%4==1) {
                        echo'<div class="row no-gutters" style="padding-left:0;padding:right:0;">';
                    }
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
                            <div class="col card-center" style="margin-bottom:7%;">
                                <div class="card all_card_game" style="height:100%;margin-left:auto;margin-right:auto;">
                                    <img src="<?php echo  esc_url($feat_image); ?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php the_title(); ?></h5>
                                        <p class="card-text"><?php the_title(); ?></p>
                                        <div class="row no-gutters card-text txt-googlesans-bold w-100  ">
                                          <div class="col android"> 

                                            <div class="row no-gutters w-100">
                                              <div class="col-2">
                                                <img src="<?php echo get_template_directory_uri().'/assets/images/download/playstore.png'; ?>" alt="" style="width:100%; height:100%;">
                                              </div>
                                              <div class="col-">
                                                <a href="https://play.google.com/store/apps/details?id=com.AstaCorporation.AstaPoker" class="blue-txt">DOWNLOAD</a>
                                              </div>
                                            </div>

                                          </div>
                                          <div class="col ios">

                                            <div class="row no-gutters float-right">
                                              <div class="col-2">
                                                <img src="<?php echo get_template_directory_uri().'/assets/images/download/ios.png'; ?>" alt="" style="width:100%; height:100%;">
                                              </div>
                                              <div class="col">
                                                <a href="{{--{{ $linkappstore[$game->id] }}--}}" class="blue-txt">DOWNLOAD</a>
                                              </div>
                                            </div>

                                          </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                <?php
                    if($i%4==0) {
                        echo'</div>';
                        echo'<p>&nbsp;</p>';
                      }
                      $i++;
                ?>
            <?php endwhile; endif; ?> 
          </div>
          <!-- {{-- end popular game --}} -->
          <!-- <p>&nbsp;</p> -->
          <?php //if(have_posts()) : while(have_posts()) : the_post();?>
          <?php //the_content(); ?>
          <?php //endwhile; endif; ?> 

          <!-- {{--akhir content--}} -->
        
      </div>
    </div>
      
      <div class="my-aii-forum h-100 bg-content">
        
        <!-- {{-- <div class="my-aii-forum" align="left"> --}} -->
     
          <div class="my-aii-login d-none d-md-block d-lg-block d-xl-block">
            <div class="row no-gutters">
              <div class="col">
                  <?php
                    global $user_ID;
                    global $wpdb;

                    if (!isset($_SESSION['login5'])) {
                  ?>
                        <div class="memberLogin-title"><h3 class="white" style="font-size:1.7vw;">Member Login</h3></div>
                        <form method="post">
                          <div style="margin-bottom:2%;"><input type="text" name="username" placeholder="User Name" class="rounded-pill btn btn-outline-light btn-login" style="width:14vw;height:3.5vh;font-size:0.99vw;" required></div>
                          <div style="margin-bottom:2%;"><input type="password" name="password" placeholder="Password" class="rounded-pill btn btn-outline-light" style="width:14vw;height:3.5vh;font-size:0.99vw;" required></div>
                          <p><button type="submit" class="btn btn-primary w-75 rounded-pill btn-md-10 txt-googlesans-bold" style="width:14vw;height:2%;font-size:0.99vw;font-size:2vh;" type="submit" name="submit" >LOGIN</button></p>
                          <p>&nbsp;</p>
                        </form>
                      <?php //} ?>
                      
                    <?php } else { ?>
                      <div class="my-aii-logout text-primary">
                        <div align="center" class="img-login" style="top:0;"><a href=""><img src="<?php echo get_template_directory_uri() . '/assets/images/asta.png'; ?>" alt="" class="rounded-circle" width="100%" height="100%"></a></div><br>
                        <!-- <p>&nbsp;</p> -->
                        <h5 align="center" style="font-size:1vw;">Hello <?php echo $_SESSION['username']; ?></h5>
                        <!-- <form action="wordpress/home?logout_user=true"> -->
                          <div align="center"><a href="?logout_user=true" class="btn btn-primary rounded-pill btn-md-10" type="submit" name="submit" style="font-size:0.8vw;"><!--{{--<i class="fas fa-sign-out-alt"></i>--}}-->Sign Out</a></div>
                        <!-- </form> -->
                      </div>
                    <?php } ?>
              </div>
            </div>
          </div>
  
          <div class="row no-gutters">
              <div class="col-1"></div>
              <div class="col">

                <!-- <p>&nbsp;</p>
                <h4 class="txt-googlesans-bold">&nbsp;&nbsp;Forum</h4>
                <p>&nbsp;</p> -->
                
                <!-- {{--awal commentar--}} -->
                <!-- {{--terakhir comentar--}} -->
                <p>&nbsp;</p>
                <form action="http://localhost/wordpress/community/">
                  <div align="center" class="sticky-bottom"><button type="submit" class="btn btn-outline-primary rounded-pill " type="submit" name="submit" style="font-size:1vw;">JOIN COMMUNITY</button></div>
                </form>

                <p>&nbsp;</p>

              </div>
            </div>
          </div>
  
  
</div>


     <!-- batas akhir -->
    </div>           

</div>  

<?php get_footer(); ?>