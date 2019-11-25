<?php get_header(); ?>


<div class="row">
    <div class="col w-100 d-md-none d-xl-none d-lg-none">
        <?php include(get_template_directory().'/menu.php');?>
    </div>
</div>

<div class="my-aii-container">
    <div id="scrollbar-menu" class="sidebar sidenav my-aii-overflow d-none d-md-block d-lg-block d-xl-block">  
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
    <div class="my-aii-content my-aii-overflow">
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
                            <a class="{{ Request::is('#popular_game') ? 'active' : null }}" href="#popular_game">OVERVIEW</a>
                            <a class="{{ Request::is('#chart') ? 'active' : null }}" href="#chart">CHARTS</a>
                            <a class="{{ Request::is('#genre') ? 'active' : null }}" href="#genre">GENRE & MOODS</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="topnav txt-googlesans-medium">
                            <a class="{{ Request::is('#new') ? 'active' : null }}" href="#new" class="d-none d-md-none d-lg-block d-xl-block">NEW RELEASES</a>
                            <a class="{{ Request::is('#nOnGoing') ? 'active' : null }}" href="#OnGoing" class="d-none d-md-none d-lg-block d-xl-block">ON GOING</a>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <!-- end mobile -->

        <!-- for computer -->
        <div class="container-fluid bg-content-home my-aii-overflow">
  
      <div class="home-content" >
        <div class="menu-topnav d-none d-md-block d-lg-block d-xl-block">
            <div class="row">
              <div class="col txt-googlesans-bold">
                <p>&nbsp;</p>
                <h2><?php the_title(); ?></h2>
              </div>
            </div>
      
           
            <table class=" gray-border-bottom w-100" style="margin-bottom: 50px;">
              <tr>
                <td>
                  <div class="topnav txt-googlesans-medium">
                    <a class="{{ Request::is('#popular_game') ? 'active' : null }}" href="#popular_game">OVERVIEW</a>
                    <a class="{{ Request::is('#chart') ? 'active' : null }}" href="#chart">CHARTS</a>
                    <a class="{{ Request::is('#genre') ? 'active' : null }}" href="#genre">GENRE & MOODS</a>
                    <a class="{{ Request::is('#new') ? 'active' : null }}" href="#new" class="d-none d-md-none d-lg-block d-xl-block">NEW RELEASES</a>
                    <a class="{{ Request::is('#nOnGoing') ? 'active' : null }}" href="#OnGoing" class="d-none d-md-none d-lg-block d-xl-block">ON GOING</a>
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
                  <h4><?php single_cat_title();?> </h4>
                </div>

                <div class="col w-100">
                  <div class="row">
                    <!-- {{-- screen ukuran large --}} -->
                    <div class="col-md-9 d-none d-md-none d-lg-none d-xl-block" align="right"><button type="submit" class="txt-googlesans-medium btn btn-primary rounded-pill btn-md-10 " type="submit" name="submit" >ALL GAME</button></div>
                    <!-- {{-- screen ukuran medium --}} -->
                    <div class="col-md-8 d-block d-md-block d-lg-block d-xl-none" align="right"><button type="submit" class="txt-googlesans-medium btn btn-primary rounded-pill btn-md-10 " type="submit" name="submit" >ALL GAME</button></div>
                    <div class="col-sm-4 d-none d-md-block d-lg-block d-xl-none" align="right">
                      <ul class="pagination">
                        <li class="page-item">
                          <a class="page-link prev1 border-blue bg-content-home w-50 blue-txt owl-prev" role="button" data-slide="prev"><i class="fas fa-less-than fa-sm"></i></a>
                        </li>
                        <li class="page-item">
                          <a class="page-link next1 border-blue bg-content-home w-50 blue-txt owl-next" role="button" data-slide="next"><i class="fas fa-greater-than fa-sm"></i></a>
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
                  <div class="owl-carousel owl-carousel1 owl-theme">

                  <?php if(have_posts()) : while(have_posts()) : the_post();?>
                    <div class="item" style="width: 100%;">
                      <div class="card bg-content-home border-none">
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
                        <img src="<?php echo  esc_url($feat_image); ?>" alt="game" class="card-img-top">
                        <div class="card-body bg-content-home">
                          <h5 class="txt-googlesans-bold blueblack-txt"><?php the_title(); ?></h5>
                          <p class="txt-googlesans-reguler gray-txt"></p>
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
          <p>&nbsp;</p>

          <!-- {{--akhir content--}} -->
        
      </div>
    </div>
      
      <div class="my-aii-forum h-100 bg-content">
        
        <!-- {{-- <div class="my-aii-forum" align="left"> --}} -->
     
          <div class="my-aii-login border border-dark d-none d-md-block d-lg-block d-xl-block">
            <div class="row no-gutters">
              <div class="col">
  
                  <p>&nbsp;</p>
                  <p><h3 class="white">Member Login</h2></p>
    
                  <form method="post" action="{{ route('login') }}">
                    <p><input type="text" name="username" placeholder="User Name" class="btn btn-outline-light" required></p>
                    <p><input type="password" name="password" placeholder="Password" class="btn btn-outline-light" required></p>
                    <p><button type="submit" class="btn btn-primary w-75 rounded-pill btn-md-10 txt-googlesans-bold" type="submit" name="submit" >LOGIN</button></p>
                    <p>&nbsp;</p>
                  </form>
            
              </div>
            </div>
          </div>
  
          <div class="row no-gutters">
              <div class="col-1"></div>
              <div class="col">

                <p>&nbsp;</p>
                <h4 class="txt-googlesans-bold">&nbsp;&nbsp;Forum</h4>
                <p>&nbsp;</p>
                
                <!-- {{--awal commentar--}} -->
                <!-- {{--terakhir comentar--}} -->
                <p>&nbsp;</p>
                <div align="center" class="sticky-bottom"><button type="submit" class="btn btn-outline-primary rounded-pill " type="submit" name="submit" >JOIN COMMUNITY</button></div>
                <p>&nbsp;</p>

              </div>
            </div>
          </div>
  
  
</div>


     <!-- batas akhir -->
    </div>           

</div>  


<?php get_footer(); ?>