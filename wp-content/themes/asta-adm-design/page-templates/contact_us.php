<?php 
/*
*Template Name: Contact Us
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
            <div class="my-aii-about my-aii-overflow">
                <div class="container-fluid" style="margin-left:2%;">
                    <p>&nbsp;</p>
                    <h1><?php the_title(); ?></h1>
                    <p>&nbsp;</p>

                    <!-- <div class="row"> -->
                        <!-- <div class="col-sm-6"> -->
                            <!-- <div class="form-group">
                                <div class="row">
                                    <div class="col w-100 text-muted txt-googlesans-reguler" style="margin-right:35%;">
                                        we'd love to hear from you, so if there's anything
                                        you'd like to ask us, we're here and ready to help in
                                        every way we can. If you have questions about how
                                        to get started., how to book,
                                        or general questions, you can check out our help
                                        Center for immediate answer.
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col w-20">
                                        <p><hr></p>
                                    </div>
                                    <div class="col w-80"></div>
                                    <div class="col w-80"></div>
                                </div>
           
                                <div class="row">
                                    <div class="col w-100">
                                        <h5 class="txt-googlesans-bold">Office Address :</h5>
                                        <p class="txt-googlesans-reguler">Kawasan Industri Tunas 2 Unit 7-D,</p>
                                        <p class="txt-googlesans-reguler">Batam Center</p>
                                        <p class="txt-googlesans-regler">Kota Batam - 294444</p>
                                        <p class="txt-googlesans-regler">Kepulauan Riau</p>
                                        <p class="txt-googlesans-reguler">Indonesia</p>
                                        <p class="txt-googlesans-reguler">Telp : 0778-480-6497</p>
                                    </div>
                                </div>
            
                            </div> -->
                            <?php if(have_posts()) : while(have_posts()) : the_post();?>
                                <?php the_content(); ?>
                            <?php endwhile; endif; ?> 
                        <!-- </div> -->

                        <!-- <div class="col-sm-5 bg-white rounded-lg"> -->
                            <!-- <p>&nbsp;</p>
                            <div class="form-group">
                                <h5>Your Contact Details</h5>
                            </div> -->

                            <!-- {{--untuk form input contact--}} -->
                            <!-- <form action="">
                                <div class="form-group">              
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control txt-googlesans-reguler" id="firstname" placeholder="Fisrt Name">
                                            &nbsp;
                                        </div>

                                        <div class="col-sm-6">
                                            <input type="text" class="form-control txt-googlesans-reguler" id="firstname" placeholder="Last Name">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control txt-googlesans-reguler" id="firstname" placeholder="Email">
                                            &nbsp;
                                        </div>

                                        <div class="col-sm-6">
                                            <input type="text" class="form-control txt-googlesans-reguler" id="firstname" placeholder="Phone Number">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <h5>What can we help you with?</h5>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control txt-googlesans-reguler" id="firstname" placeholder="Subject">
                                </div>

                                <div class="form-group">
                                    <textarea class="form-control txt-googlesans-reguler" placeholder="Your message" rows="5"></textarea>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary rounded-pill btn-contact txt-googlesans-bold">Submit</button>
                                </div>
                            </form> -->
                            <!-- {{--akhir untuk form contact--}} -->
                            <!-- <p>&nbsp;</p> -->
                        <!-- </div>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p> -->
                    <!-- </div> -->
                </div>
            </div>
   

        </div>   
<?php get_footer(); ?>