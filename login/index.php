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
  <meta name="description" content="<?php echo $sitename ?> admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
  <meta name="keywords" content="admin template, <?php echo $sitename ?> admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="pixelstrap">
  <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
  <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
  <title><?php echo $sitename ?> - Premium Admin Template</title>
  <!-- Google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
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
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-7"><img class="bg-img-cover bg-center" src="../assets/images/login/2.jpg" alt="looginpage"></div>
      <div class="col-xl-5 p-0">
        <div class="login-card login-dark login-bg">
          <div>
            <div><a class="logo text-start" href="index-2.html"><img class="img-fluid for-light" src="../assets/images/logo/logo.png" alt="looginpage"><img class="img-fluid for-dark" src="../assets/images/logo/logo_dark.png" alt="looginpage"></a></div>
            <div class="login-main">


              <?php
              if (isset($_POST['login'])) {
                $email = trim($_POST['email']);
                $password = $_POST['password']; // Plain password (not hashed yet)

                if (!empty($email) && !empty($password)) {

                  // Escape to prevent SQL injection
                  $email = mysqli_real_escape_string($connection, $email);

                  // Fetch user by email
                  $query = mysqli_query($connection, "SELECT * FROM `users` WHERE `email` = '$email'");

                  if (mysqli_num_rows($query) > 0) {
                    $user = mysqli_fetch_assoc($query);

                    // Verify password
                    if (password_verify($password, $user['password'])) {
                      session_start();
                      $_SESSION['user_id'] = $user['id'];

                      echo Model('Login successful. Redirecting...');

                      // Success message and redirect
                      echo "<script>
                    
                    setTimeout(() => {
                        window.location.href = '../user/dashboard/';
                    }, 2000);
                </script>";
                    } else {
                      echo Model('Incorrect password. Please try again.');
                    }
                  } else {
                    echo Model('No account found with this email.');
                  }
                } else {
                  echo Model('Please fill in both fields.');
                }
              }
              ?>



              <form method="POST" class="theme-form">
                <h3>Sign in to account</h3>
                <p>Enter your email & password to login</p>
                <div class="form-group">
                  <label class="col-form-label">Email Address</label>
                  <input class="form-control" name="email" type="email" required="" placeholder="Test@gmail.com">
                </div>
                <div class="form-group">
                  <label class="col-form-label">Password</label>
                  <div class="form-input position-relative">
                    <input class="form-control" type="password" name="password" required="" placeholder="*********">
                    <div class="show-hide"><span class="show"> </span></div>
                  </div>
                </div>
                <div class="form-group mb-0">
                  <div class="checkbox p-0">
                    <a href="<?php echo $domain ?>forget-password/?step=1" class="text-muted" for="checkbox1">Forgot password</a>
                  </div>
                  <button name="login" class="btn btn-primary btn-block w-100" type="submit">Sign in</button>
                </div>

                <p class="mt-4 mb-0 text-center">Don't have account?<a class="ms-2" href="../sign-up/">Create Account</a></p>
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


</html>