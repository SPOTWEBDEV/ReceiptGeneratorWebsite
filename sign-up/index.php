<?php

include("../server/connection.php");
include("../server/model.php");



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="<?php echo $sitename ?> admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
  <meta name="keywords"
    content="admin template, <?php echo $sitename ?> admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="pixelstrap">
  <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
  <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
  <title><?php echo $sitename ?> - Premium Admin Template</title>
  <!-- Google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
  <link
    href="https://fonts.googleapis.com./asset/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&amp;display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap"
    rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">
  <!-- ico-font-->
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/icofont.css">
  <!-- Themify icon-->
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/themify.css">
  <!-- Flag icon-->
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/flag-icon.css">
  <!-- Feather icon-->
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/feather-icon.css">
  <!-- Plugins css start-->
  <!-- Plugins css Ends-->
  <!-- Bootstrap css-->
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/bootstrap.css">
  <!-- App css-->
  <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
  <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">
  <!-- Responsive css-->
  <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
</head>

<body>
  <!-- login page start-->
  <div class="container-fluid p-0">
    <div class="row m-0">
      
      <div class="col-xl-7 p-0">
        <div class="login-card login-dark login-bg">
          <div>
            
            <div class="login-main">

              <?php
              if (isset($_POST['register'])) {

                $username = trim($_POST['username']);
                $email = trim($_POST['email']);
                $password = $_POST['password'];

                // Basic validation
                if (!empty($username) && !empty($email) && !empty($password)) {

                  // Escape inputs to avoid SQL injection
                  $username = mysqli_real_escape_string($connection, $username);
                  $email = mysqli_real_escape_string($connection, $email);

                  // Secure password hashing
                  $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

                  // Insert into database
                  $query = mysqli_query($connection, "INSERT INTO `users` (`username`, `email`, `password`) 
                                            VALUES ('$username', '$email', '$hashedPassword')");

                  if ($query) {
                    echo  Model('Registration successful. Redirecting to login...');
                    echo "<script>
               
                setTimeout(() => {
                    window.location.href = '../login/';
                }, 2000);
            </script>";
                  } else {
                Model('Something went wrong. Please try again later.');
                  }
                } else {
                  
            Model('Please fill in all fields.');
                }
              }
              ?>



              <form method="POST" class="theme-form">
                <h4>Create your account</h4>
                <p>Enter your personal details to create account</p>
                <div class="form-group">
                  <label class="col-form-label pt-0">Username</label>
                  <div class="row g-2">
                    <div class="col-12">
                      <input class="form-control" name="username" type="text" required="" placeholder="Username">
                    </div>

                  </div>
                </div>
                <div class="form-group">
                  <label class="col-form-label">Email Address</label>
                  <input class="form-control" name="email" type="email" required="" placeholder="Test@gmail.com">
                </div>
                <div class="form-group">
                  <label class="col-form-label">Password</label>
                  <div class="form-input position-relative">
                    <input class="form-control" name="password" type="password" required=""
                      placeholder="*********">
                    <div class="show-hide"><span class="show"></span></div>
                  </div>
                </div>
                <div class="form-group mb-0">
                  <div class="checkbox p-0">
                    <input id="checkbox1" type="checkbox">
                    <label class="text-muted" for="checkbox1">Agree with<a class="ms-2" href="#">Privacy
                        Policy</a></label>
                  </div>
                  <button name="register" class="btn btn-primary btn-block w-100" type="submit">Create Account</button>
                </div>

                <p class="mt-4 mb-0 text-center">Already have an account?<a class="ms-2" href="../login/">Sign
                    in</a>
                </p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- latest jquery-->
    <script src="../assets/js/jquery.min.js"></script>
    <!-- Bootstrap js-->
    <script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    <!-- Sidebar jquery-->
    <script src="../assets/js/config.js"></script>
    <!-- Plugins JS start-->
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <!-- Plugin used-->
  </div>
</body>

<!-- Mirrored from admin.pixelstrap.net/<?php echo $sitename ?>/template/sign-up-one.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Jun 2025 12:31:15 GMT -->

</html>