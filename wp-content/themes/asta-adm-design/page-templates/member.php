<?php 
/*
* Template Name: Member
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
                <div class="container-fluid">
                    <div class="content-article-word">
                        <p>&nbsp;</p>
                        <h1 class="txt-googlesans-bold title-menu">Member</h1>
                        <p>&nbsp;</p>
                        <form method="post">
                            <div class="row">

                                <div class="col-sm-3 img-member">
                                    <div class="form-group">

                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlFile1"><img src="<?php echo get_template_directory_uri() . '/assets/images/asta.png'; ?>" alt="" class="rounded-circle" style="width:60%;height:auto;"></label>
                                        <p>&nbsp;</p>
                                        <!-- {{-- <input type="file" class="form-control-file" id="exampleFormControlFile1"> --}} -->
                                        <!-- {{-- <button type="file" class="btn btn-outline-secondary btn-browse-photo">Browse File</button> --}} -->

                                        <!-- <label class="fileContainer btn btn-outline-secondary">
                                            Browse File
                                            <input type="file"/>
                                        </label> -->
                                    </div>

                                    <!-- <div class="form-group text-black-50 txt-googlesans-reguler">
                                        File size maximum 10.000.000 bytes(10 Mega-bytes)
                                        <p class="member-info">Allowed file extension: .JPG .JPEG .PNG</p>
                                    </div> -->
                                </div>

                                <div class="col">

                                    <div class="form-group">
                                        <h4 class="txt-googlesans-bold" style="width:100%; height:auto font-size:100%;">Edit Personal Profile</h4>
                                    </div>
                                    <?php
                                     global $seconddb;
                                     $user_id = $_SESSION['user_id'];
                                     $gender = $seconddb->get_var("SELECT gender from user_info where user_id = $user_id");
                                     $email = $seconddb->get_var("SELECT email from user_info where user_id = $user_id");
                                     $phone = $seconddb->get_var("SELECT phone from user_info where user_id = $user_id");  
                                     $password = $seconddb->get_var("SELECT userpass FROM user where user_id = $user_id");
                                     if($_POST)
                                     {
                                         $gender_post    = $_POST['gender'];
                                         $old_pwd        = $_POST['old_password'];
                                         $new_pwd        = $_POST['new_password'];
                                         $retype_new_pwd = $_POST['retype_new_password'];
                                        if(empty($old_pwd) === false && empty($new_pwd) === false && empty($retype_new_pwd) === false)
                                        {
                                            if(password_verify($old_pwd, $password) === false)
                                            {
                                                echo 'Your old Password is wrong';
                                            } else if($old_pwd === NULL)
                                            {
                                                echo 'Your old password can\'t be null';
                                            } else if($new_pwd === NULL)
                                            {
                                                echo 'Your new password can\'t be null';
                                            } else if($retype_new_pwd === NULL)
                                            {
                                                echo 'Your retype new password can\'t be null';
                                            } else if($new_pwd !== $retype_new_pwd)
                                            {
                                                echo 'Your new password must be the same with Retype New Password';
                                            } else 
                                            {
                                                updatemember($retype_new_pwd, $user_id, $gender_post);
                                            }
                                            echo "<script>window.location='/wordpress/member'</script>";
                                        } else {
                                            updategender($user_id, $gender_post);
                                            echo "<script>window.location='/wordpress/member'</script>";
                                        }
                                     }                            
                                    ?>

                                    <div class="form-group row">
                                        <dt for="name" class="col-sm-3 col-form-label txt-googlesans-member">Name</dt>
                                        <div class="col-sm-8 txt-googlesans-medium">
                                            <?php echo ucwords($_SESSION['username']); ?>
                                        </div>
                                    </div>
                    
                                    <!-- <div class="form-group row">
                                        <dt for="birth" class="col-sm-3 col-form-label txt-googlesans-member">Date Of Birth</dt>
                                        <div class="col-sm-8">
                                            <div class="d-flex flex-row select-dob">
                                
                                                 <div class="selectmember date-member">
                                                    <select name="" id="inputDate" class="form-control txt-googlesans-medium">
                                                        <option value="">27</option>
                                                        <option value="">26</option>
                                                    </select>
                                                </div>
            
                                                <div class="selectmember month-member">
                                                    <select name="" id="inputMonth" class="form-control txt-googlesans-medium">
                                                        <option value="">Januari</option>
                                                        <option value="">Februari</option>
                                                    </select>
                                                </div> 

                                                <div class="selectmember year-member">
                                                    <select name="" id="inputYear" class="form-control txt-googlesans-medium">
                                                        <option value="">1990</option>
                                                        <option value="">1991</option>
                                                    </select>
                                                </div>


                                            </div>
                                        </div>
                                    </div> -->

                                    <div class="form-group row">
                                        <dt for="gender" class="col-sm-3 col-form-label txt-googlesans-member">Gender</dt>
                                        <div class="col-sm-8">
                                        <!-- {{-- <div class="form-check form-check-inline txt-googlesans-medium">Male
                                            <input checked="checked" type="radio" name="male" value="">
                                            <label class="form-check-label radio-member" for="male"></label>
                                        </div>
                                        <div class="form-check form-check-inline txt-googlesans-medium">Female
                                            <input type="radio" name="female" value="">
                                            <label class="form-check-label radio-member" for="female"></label>
                                        </div> --}} -->
                                        <div class="row">
                                            <div class="col">
                                                <label class="radio txt-googlesans-medium">Male
                                                    <input type="radio" <?php if($gender == 1){ echo 'checked'; }?> name="gender" value="1">
                                                    <span class="checkround"></span>
                                                </label>
                                              
                                            </div>
                                            <div class="col">
                                                <label class="radio txt-googlesans-medium">Female
                                                    <input type="radio" <?php if($gender == 2){ echo 'checked'; }?> name="gender" value="2">
                                                    <span class="checkround"></span>
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                      
                                </div>

                                <p>&nbsp;</p>
                                <div class="form-group">
                                    <h5 class="txt-googlesans-bold">Edit Contact</h5>
                                </div>

                                <div class="form-group row">
                                    <dt for="Email" class="col-sm-3 col-form-label txt-googlesans-member">Email</dt>
                                    <div class="col-sm-8 txt-googlesans-medium">
                                        <?php echo emaildecrypt($email); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <dt for="phone" class="col-sm-3 col-form-label txt-googlesans-member">Mobile Phone</dt>
                                    <div class="col-sm-8 txt-googlesans-medium">
                                        <?php echo $phone; ?>
                                    </div>
                                </div>

                                <p>&nbsp;</p>
                                <div class="form-group">
                                    <h5 class="txt-googlesans-bold">Edit Password</h5>
                                </div>

                                <div class="form-group row">
                                    <dt for="old" class="col-sm-3 col-form-label txt-googlesans-member">Old Password</dt>
                                    <input type="password" name="old_password" class="form-control input-member" id="old">
                                </div>

                                <div class="form-group row">
                                    <dt for="new" class="col-sm-3 col-form-label txt-googlesans-member">New Password</dt>
                                    <input type="password" name="new_password" class="form-control input-member" id="new">
                                </div>

                                <div class="form-group row">
                                    <dt for="new" class="col-sm-3 col-form-label txt-googlesans-member">Retype New Password</dt>
                                    <input type="password" name="retype_new_password" class="form-control input-member" id="new">
                                </div>

                                <p>&nbsp;</p>
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <button type="submit" name="update_member" class="btn btn-primary rounded-pill txt-googlesans-bold" style="width:25%;">Save</button>
                                    </div>
                                </div>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
   

        </div>  
<?php get_footer(); ?>