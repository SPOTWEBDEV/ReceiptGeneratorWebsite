<?php

include("../../server/connection.php");




?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php echo $sitename ?> admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
  <meta name="keywords" content="admin template, <?php echo $sitename ?> admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="pixelstrap">
  <link rel="icon" href="<?php echo $domain ?>assets/images/favicon.png" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $domain ?>assets/images/favicon.png" type="image/x-icon">
  <title><?php echo $sitename ?> - Premium Admin Template</title>
  <!-- Google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo $domain ?>assets/css/font-awesome.css">
  <!-- ico-font-->
  <link rel="stylesheet" type="text/css" href="<?php echo $domain ?>assets/css/vendors/icofont.css">
  <!-- Themify icon-->
  <link rel="stylesheet" type="text/css" href="<?php echo $domain ?>assets/css/vendors/themify.css">
  <!-- Flag icon-->
  <link rel="stylesheet" type="text/css" href="<?php echo $domain ?>assets/css/vendors/flag-icon.css">
  <!-- Feather icon-->
  <link rel="stylesheet" type="text/css" href="<?php echo $domain ?>assets/css/vendors/feather-icon.css">
  <!-- Plugins css start-->
  <link rel="stylesheet" type="text/css" href="<?php echo $domain ?>assets/css/vendors/slick.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $domain ?>assets/css/vendors/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $domain ?>assets/css/vendors/scrollbar.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $domain ?>assets/css/vendors/animate.css">
  <!-- Plugins css Ends-->
  <!-- Bootstrap css-->
  <link rel="stylesheet" type="text/css" href="<?php echo $domain ?>assets/css/vendors/bootstrap.css">
  <!-- App css-->
  <link rel="stylesheet" type="text/css" href="<?php echo $domain ?>assets/css/style.css">
  <link id="color" rel="stylesheet" href="<?php echo $domain ?>assets/css/color-1.css" media="screen">
  <!-- Responsive css-->
  <link rel="stylesheet" type="text/css" href="<?php echo $domain ?>assets/css/responsive.css">
</head>

<body>
  
  <!-- loader ends-->
  <!-- tap on top starts-->
  <div class="tap-top"><i data-feather="chevrons-up"></i></div>
  <!-- tap on tap ends-->
  <!-- page-wrapper Start-->
  <div class="page-wrapper compact-wrapper" id="pageWrapper">

    <!-- Page Header Start-->
    <?php include('../include/navbar.php') ?>
    <!-- Page Header Ends -->

    <!-- Page Body Start-->
    <div class="page-body-wrapper">


      <!-- Page Sidebar Start-->
      <?php include('../include/sidenav.php') ?>
      <!-- Page Sidebar Ends-->


      <div class="page-body">
        <div class="container-fluid">
          <div class="page-title">
            <div class="row">
              <div class="col-xl-4 col-sm-7 box-col-3">
                <h3>Edit Profile</h3>
              </div>

              <div class="col-4 d-none d-xl-block">
                  <!-- Page Sub Header Start-->
              
                  <!-- Page Sub Header end
                  -->
                </div>
            
              <div class="col-xl-3 col-sm-5 box-col-4">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index-2.html">
                      <svg class="stroke-icon">
                        <use href="<?php echo $domain ?>assets/svg/icon-sprite.svg#stroke-home"></use>
                      </svg></a></li>
                  <li class="breadcrumb-item">Users</li>
                  <li class="breadcrumb-item active">Edit Profile</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
          <div class="edit-profile">
            <div class="row">
              <div class="col-xl-4">
                <div class="card">
                  <div class="card-header pb-0">
                    <h4 class="card-title mb-0">My Profile</h4>
                    <div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a></div>
                  </div>
                  <div class="card-body">
                    <?php
 
 

                    if(isset($_POST['saveprofile'])){
                         $username = $_POST['username'];
                         $email = $_POST['email'];



                         $update = mysqli_query($connection, "UPDATE `users` SET `username`='$username', `email`='$email' WHERE `id` ='$id'");

                         if($update){
                            echo Model("Successful update your email and username");
                            echo "<script>setTimeout(()=>{
                                 window.location.href = './index.php';
                            },2000)</script>";
                         }else{
                            echo Model("Something went when trying to update your profile information");
                         }
                         
                         
                    }



                    ?>
                    <form method="POST">
                      <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input name="username" class="form-control" name="username" value="<?php echo $userDetails['username'] ?>" required >
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Email-Address</label>
                        <input name="email" class="form-control" name="email" value="<?php echo $userDetails['email'] ?>" required>
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input name="password" class="form-control" name="password" type="password" value="<?php echo $userDetails['password'] ?>" readonly>
                      </div>

                      <div class="form-footer">
                        <button name="saveprofile" type="submit" class="btn btn-primary btn-block">Save</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-xl-8">
                <?php

                if(isset($_POST['changepassword'])){

                  $oldpassword = $_POST['oldpassword'];
                  $newpassword = $_POST['newpassword'];
                  $confirmpassword = $_POST['confirmpassword'];

                  if($oldpassword == $userDetails['password']){
                       if($newpassword == $confirmpassword){
                        $hashedPassword = password_hash($newpassword, PASSWORD_DEFAULT);
                            $update = mysqli_query($connection , "UPDATE `users` SET `password`='$hashedPassword'");
                            if($update){
                                echo Model("Successful update your password");
                                echo "<script>setTimeout(()=>{
                                 window.location.href = './index.php';
                                 },2000)</script>";
                            }else{
                              echo Model("Something went when trying to update your password");
                            }
                       }else{
                          echo Model("New password don't match confirm password. please try again");
                       }
                  }else{
                    echo Model("Your password you enter don't match this account password. please try again");
                  }
                }

                ?>
                <form method="POST" class="card">
                  <div class="card-header pb-0">
                    <h4 class="card-title mb-0">Edit Profile</h4>
                    <div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a></div>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-12">
                        <div class="mb-3">
                          <label class="form-label">Old Password</label>
                          <input class="form-control" name="oldpassword" type="text" placeholder="Enter Your Old Password" required>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="mb-3">
                          <label class="form-label">New Password</label>
                          <input class="form-control" name="newpassword" type="text" placeholder="Enter Your New Password" required>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="mb-3">
                          <label class="form-label">Confirm Password</label>
                          <input class="form-control" type="text" name="confirmpassword" placeholder="Confirm Password" required>
                        </div>
                      </div> 
                    </div>
                  </div>
                  <div class="card-footer text-end">
                    <button name="changepassword" class="btn btn-primary" type="submit">Update Password</button>
                  </div>
                </form>
              </div>


              
              
            </div>
          </div>
        </div>
        <!-- Container-fluid Ends-->
      </div>
      <!-- footer start-->
   <?php include("../include/footer.php") ?>
    </div>
  </div>
  <!-- latest jquery-->
  <script src="<?php echo $domain ?>assets/js/jquery.min.js"></script>
  <!-- Bootstrap js-->
  <script src="<?php echo $domain ?>assets/js/bootstrap/bootstrap.bundle.min.js"></script>
  <!-- feather icon js-->
  <script src="<?php echo $domain ?>assets/js/icons/feather-icon/feather.min.js"></script>
  <script src="<?php echo $domain ?>assets/js/icons/feather-icon/feather-icon.js"></script>
  <!-- scrollbar js-->
  <script src="<?php echo $domain ?>assets/js/scrollbar/simplebar.js"></script>
  <script src="<?php echo $domain ?>assets/js/scrollbar/custom.js"></script>
  <!-- Sidebar jquery-->
  <script src="<?php echo $domain ?>assets/js/config.js"></script>
  <!-- Plugins JS start-->
  <script src="<?php echo $domain ?>assets/js/sidebar-menu.js"></script>
  <script src="<?php echo $domain ?>assets/js/sidebar-pin.js"></script>
  <script src="<?php echo $domain ?>assets/js/slick/slick.min.js"></script>
  <script src="<?php echo $domain ?>assets/js/slick/slick.js"></script>
  <script src="<?php echo $domain ?>assets/js/header-slick.js"></script>
  <!-- Plugins JS Ends-->
  <!-- Theme js-->
  <script src="<?php echo $domain ?>assets/js/script.js"></script>
  <script src="<?php echo $domain ?>assets/js/theme-customizer/customizer.js"></script>
  <!-- Plugin used-->
</body>



</html>