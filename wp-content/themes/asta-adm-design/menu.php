<?php
$icon_menu_asta = get_template_directory_uri() . '/assets/images/asta.png'; 
// session_start();
?>
<div class="navbar navbar-expand-lg navbar-light" style="padding-left:0;">
            <table border="0" width="100%" class="d-xl-none d-lg-none bg-content" style="margin-left:5%;">
                <tr align="left">
                    <td>
                        <!-- {{--button untuk menu mobile--}} -->
                        <button class="navbar-toggler d-md-none" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon "></span>
                        </button>
                        <!-- {{--akhir menu button mobile--}} -->
                    </td>

                    <td align="center">
                        <!-- {{--Logo asta untuk mobile--}} -->
                        <!-- @if(Request::is('/')) -->
                            <a href="#" align="center"><img src="<?= $icon_menu_asta ?>" class="d-md-block d-xl-none d-lg-none" alt="" width="70px"height="70px" ></a>
                        <!-- @else -->
                            <!-- <a href="#" align="center"><img src="<?= $icon_menu_asta ?>" class="d-md-block d-xl-none d-lg-none" alt="" width="70px"height="70px" ></a> -->
                        <!-- @endif -->
                        <!-- {{--akhir logo untuk mobile--}} -->
                    </td>

                    <td align="right">
                        <div class="d-xl-none d-md-none ">

                        <table border="0"class="d-xl-none d-lg-none">
                            <tr>
                                <?php if (!isset($_SESSION['login5'])) {?>
                                    <td class="text-muted">Login &nbsp;</td>
                                <?php } else { 
                                if(isset($_GET['logout_user']))
                                {
                                    myEndSession();
                                    echo "<script>window.location='/wordpress/home'</script>";
                                }                        
                                ?>
                                    <td class="text-muted">Logout &nbsp;</td>
                                <?php } ?>
                                    <td>
                                        <!-- {{--Login for Mobile--}} -->
                                        <!-- Button trigger modal -->

                                        <?php if (!isset($_SESSION['login5'])) { ?>
                                            <a href="" data-toggle="modal" data-target="#exampleModalScrollable"><i class="far fa-user-circle fa-3x"></i></a>
                                        <?php } else { ?>
                                            <a href="?logout_user=true"><i class="far fa-user-circle fa-3x"></i></a>
                                        <?php } ?>


                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-dark text-white">
                                                        <h5 class="modal-title" id="exampleModalScrollableTitle">Login</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <?php
                                                    if(!isset($_SESSION['login5']))
                                                    {
                                                        if($_POST) {
                                                            global $seconddb;
                                                                                                                       
                                                                                                
                                                            $loginusername = $_POST['username'];
                                                            $loginpassword = $_POST['password']; 
                                                                                                                
                                                            $retrieveUsername = $seconddb->get_var(" SELECT username FROM ".$seconddb->prefix."user WHERE username = '$loginusername'");
                                                            $retrieveUser_id  = $seconddb->get_var("SELECT user_id FROM ".$seconddb->prefix."user WHERE username = '$loginusername'");
                                                            $retrievePassword = $seconddb->get_var(" SELECT userpass FROM ".$seconddb->prefix."user WHERE username = '$loginusername'");
                                                                                                
                                                            if ($loginusername == $retrieveUsername && password_verify($loginpassword, $retrievePassword))
                                                            {
                                                                session_start();
                                                                $_SESSION['login5']   = true;
                                                                $_SESSION['username'] = $loginusername;
                                                                $_SESSION['user_id']  = $retrieveUser_id;
                                                                // echo "<script>window.location='/wordpress/home'</script>";
                                                            }
                                                            else
                                                            {
                                                                echo 'Invalid login details';
                                                                // echo "<script>window.location='/wordpress/home'</script>";
                                                            }
                                                        }
                                                    }  
                                                    ?>

                                                    <form action="{{ route('login') }}" method="post">
                                                        <div class="modal-body bg-secondary text-white">
                                                            <div class="form-group row">
                                                                <input type="text" class="form-control border border-dark rounded W-50" name="username" placeholder="username">
                                                            </div>

                                                            <div class="form-group row">
                                                                <input type="password" class="form-control border border-dark rounded W-50" name="password" placeholder="Password">
                                                            </div>

                                                        </div>
  
                                                        <div class="modal-footer bg-secondary text-white">
                                                            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Login</button>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- {{--akhir form login mobile--}} -->
                                    </td>
                            </tr>
                        </table>

                        </div>

                    </td>
                </tr>

                <tr>
                    <td colspan="3" align="center">
                        <div class="d-md-none d-xl-none d-lg-none ">
                            <input type="text" class="form-control search rounded-pill border" placeholder=" Search News or game">
                        </div>
                    </td>
                </tr>
            </table>


            <!-- {{--isi menu untuk mobile dan pc--}} -->
            <div class="collapse navbar-collapse d-md-block" id="navbarTogglerDemo03">
                <ul class="nav flex-column txt-googlesans-medium" >
                    <!-- {{--logo asta untuk di pc--}} -->
                    <a href="#" align="center"><img src="<?= $icon_menu_asta ?>" height="100%" width="80%" alt="" class="d-none d-md-none d-lg-block d-xl-block"></a>
                    <!-- {{--akhir logo untuk di pc--}} -->


                        <?php 
                            wp_nav_menu (
                                array(
                                    'theme_location' => 'top-sidebar-menu',
                                )
                            );
                        ?>

                    <li class="nav-item"><p>&nbsp;</p></li>
                        <?php 
                        if(isset($_SESSION['login5']))
                        {
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'member-login-menu',
                                )
                            );
                        }

                        ?>
                        <?php 
                            wp_nav_menu (
                                array(
                                    'theme_location' => 'middle-sidebar-menu',
                                )
                            );
                        ?>

                    <li class="nav-item"><p>&nbsp;</p></li>

                        <?php 
                            wp_nav_menu (
                                array(
                                    'theme_location' => 'footer-sidebar-menu',
                                )
                            );
                        ?>
                </ul>
            </div>
        </div>