<?php
/*
* Template Name: Home Page
*/
get_header(); ?>


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
        <div class="menu-topnav d-md-none d-xl-none d-lg-none">
            <div class="row">
                <div class="col txt-googlesans-bold">
                    <p>&nbsp;</p>
                    <h2><?php the_title();?></h2>
                </div>
            </div>

   
            <table class=" gray-border-bottom w-100" style="margin-bottom: 50px;">
                <tr>
                    <td>
                        <div class="topnav txt-googlesans-medium">
                            <!-- <a class="{{ Request::is('#popular_game') ? 'active' : null }}" href="#popular_game">OVERVIEW</a>
                            <a class="{{ Request::is('#chart') ? 'active' : null }}" href="#chart">CHARTS</a>
                            <a class="{{ Request::is('#genre') ? 'active' : null }}" href="#genre">GENRE & MOODS</a> -->
                            <?php 
                              wp_nav_menu (
                                array(
                                    'theme_location' => 'top-nav-home',
                                )
                              );
                            ?>
                        </div>
                    </td>
                </tr>
                <!-- <tr>
                    <td>
                        <div class="topnav txt-googlesans-medium">
                            <a class="{{ Request::is('#new') ? 'active' : null }}" href="#new" class="d-none d-md-none d-lg-block d-xl-block">NEW RELEASES</a>
                            <a class="{{ Request::is('#nOnGoing') ? 'active' : null }}" href="#OnGoing" class="d-none d-md-none d-lg-block d-xl-block">ON GOING</a>
                        </div>
                    </td>
                </tr> -->
            </table>
        </div>
        <!-- end mobile -->

        <!-- for computer -->   
        <div class="container-fluid bg-content-home my-aii-overflow" style="padding:0;">
  
      <div class="home-content" style="padding-left:1%;padding-right:1%;">
        <div class="menu-topnav d-none d-md-block d-lg-block d-xl-block">
            <div class="row">
              <div class="col txt-googlesans-bold">
                <p>&nbsp;</p>
                <h2 class="title_home" style="font-size:2.3vw;"><?php the_title(); ?></h2>
              </div>
            </div>
      
           
            <table class=" gray-border-bottom w-100" style="margin-bottom: 50px;">
              <tr>
                <td>
                  <div class="topnav txt-googlesans-medium" style="font-size:1vw;">
                    <?php 
                        wp_nav_menu (
                          array(
                            'theme_location' => 'top-nav-home',
                          )
                        );
                      ?>
                  </div>
                </td>
              </tr>
            </table>
        </div>
        <div class="home-slide ">       
            
                
                    
          <div id="popular_game">
            <!-- {{---<div class="container none-margin-left ">--}} -->
              <div class="row none-margin-left" style="margin-bottom: 10px;">

                <div class="col txt-googlesans-medium">
                  <h4 class="txt-subtitle">Popular Game This Month </h4>
                </div>

                <div class="col w-100">
                  <div class="row">
                    <!-- {{-- screen ukuran large --}} -->
                    <div class="col-md-9 d-none d-md-none d-lg-none d-xl-block" align="right">
                      <form action="<?php echo get_site_url().'/all-game' ?>">
                        <button type="submit" class="txt-googlesans-medium btn btn-primary rounded-pill btn-joincomunity" type="submit" name="submit">ALL GAME</button>
                      </form>
                    </div>
                    <!-- {{-- screen ukuran medium --}} -->
                    <div class="col-md-7 d-block d-md-block d-lg-block d-xl-none" align="right">
                      <form action="<?php echo get_site_url().'/all-game' ?>">
                        <button type="submit" class="txt-googlesans-medium btn btn-primary rounded-pill btn-joincomunity" type="submit" name="submit">ALL GAME</button>
                      </form>
                    </div>
                    <div class="col-sm-4 d-none d-md-block d-lg-block d-xl-none" align="right" style="right:0;">
                      <ul class="pagination" style="height:60%;">
                        <li class="page-item">
                          <a class="page-link prev1 border-blue bg-content-home w-80 blue-txt owl-prev" role="button" data-slide="prev" style="text-align:center;vertical-align:middle;"><i class="fas fa-less-than fa-xs"></i></a>
                        </li>
                        <li class="page-item">
                          <a class="page-link next1 border-blue bg-content-home w-80 blue-txt owl-next" role="button" data-slide="next" style="text-align:center;"><i class="fas fa-greater-than fa-xs"></i></a>
                        </li>
                      </ul>
                    </div>

                    <!-- {{--screen ukuran large--}} -->
                    <div class="col-md-3 d-none d-md-none d-lg-none d-xl-block" align="right">
                        <ul class="float-right pagination">
                            <li class="page-item">
                              <a class="page-link prev1 border-blue bg-content-home border-rounded w-60 blue-txt owl-prev" role="button" data-slide="prev"><i class="fas fa-less-than fa-sm"></i></a>
                            </li>
                            <li>&nbsp;</li>
                            <li class="page-item">
                              <a class="page-link next1 border-blue bg-content-home border-rounded w-60 blue-txt owl-next" role="button" data-slide="next"><i class="fas fa-greater-than fa-sm"></i></a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-2 d-none d-md-block d-lg-none d-xl-none">&nbsp;</div>

                  </div>
                </div>

              </div>
            <!-- {{--</div>--}} -->

            <hr>
              <div class="row w-100">
                <div class="col">
                  <div class="owl-carousel owl-carousel1 owl-theme" style="margin-left:auto;margin-right:auto;">
                  <?php 
                    $home_asta = new WP_Query(array('category_name' => 'Popular Games This Month', 'posts_per_page' => 10));
                  ?>

                  <?php if($home_asta->have_posts()) : while($home_asta->have_posts()) : $home_asta->the_post();?>
                    <div class="item" style="width: 100%;">
                      <div class="card bg-content-home border-none card-carousel-home">
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
                        <div class="img_carousel_home" style="height:280px;">
                          <img src="<?php echo  esc_url($feat_image); ?>" alt="game" class="img_card">
                        </div>
                        <div class="card-body bg-content-home">
                          <h5 class="txt-googlesans-bold blueblack-txt"><?php the_title(); ?></h5>
                          <p class="txt-googlesans-reguler gray-txt"><?php the_title(); ?></p>
                          <div class="row no-gutters card-text txt-googlesans-bold w-100  ">
                            <div class="col android"> 

                              <div class="row no-gutters w-100">
                                <div class="col-2">
                                    <img src="<?php echo get_template_directory_uri().'/assets/images/download/playstore.png'; ?>" alt="" style="width:100%; height:100%;">
                                </div>
                                <div class="col-">
                                  <a href="https://play.google.com/store/apps/details?id=com.AstaCorporation.AstaPoker" class="blue-txt download-text">DOWNLOAD</a>
                                </div>
                              </div>

                            </div>
                            <div class="col ios">

                              <div class="row no-gutters float-right">
                                <div class="col-2">
                                    <img src="<?php echo get_template_directory_uri().'/assets/images/download/ios.png'; ?>" alt="" style="width:100%; height:100%;">
                                </div>
                                <div class="col">
                                  <a href="{{--{{ $linkappstore[$game->id] }}--}}" class="blue-txt download-text">DOWNLOAD</a>
                                </div>
                              </div>

                            </div>
                          </div>
                          <p class="" align="justify"></p>
                        </div>
                      </div>
                    </div>
                    <?php endwhile; endif; ?> 


                  </div>
                </div>
              </div>

            <hr>
          </div>
          <!-- {{-- end popular game --}} -->
          <!-- <p>&nbsp;</p> -->
          <?php if(have_posts()) : while(have_posts()) : the_post();?>
          <?php the_content(); ?>
          <?php endwhile; endif; ?> 

          <!-- {{--akhir content--}} -->
        
      </div>
    </div>
      
      <div class="my-aii-forum h-100 bg-content">
        
        <!-- {{-- <div class="my-aii-forum" align="left"> --}} -->
     
          <div class="my-aii-login border border-dark d-none d-md-block d-lg-block d-xl-block" style="height:35vh">
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
                  <div align="center" class="sticky-bottom"><button type="submit" class="btn-joincomunity btn btn-outline-primary rounded-pill" type="submit" name="submit">JOIN COMMUNITY</button></div>
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
<!-- {{--popup warning login--}}
<script src="/js/warnpopuplogin.js"></script>
<div id="dialogoverlay"></div>
<div id="dialogbox">
  <div>
    <div id="dialogboxhead"></div>
    <div id="dialogboxbody"></div>
    <div id="dialogboxfoot"></div>
  </div>
</div>

<?php if(\Session::has('alert')) : ?>
<script>
  Alert.render ("{{Session::get('alert')}}");
</script>
<?php endif; 
if(\Session::has('alert-success')) :?>
<script>
  Alert.render ("{{Session::get('alert-success')}}");
<script>
<?php endif; ?> -->