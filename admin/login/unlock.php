<?php

include("../../server/connection.php");


if(isset($_POST['login'])){
   $password = htmlspecialchars($_POST['password']);

   $pass = md5($password);

   $query = mysqli_query($connection,"SELECT * FROM `admin` WHERE `password`='$pass' ");

   if(mysqli_num_rows($query) > 0){
    echo "<script>alert('Login Succesfull')
       setTimeout(()=>{
         window.location.href = '../edit/'
       },3000)
    </script>";
  }else{
    echo "<script>alert('Incorrect Password')</script>";
  }


}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php  echo $sitename ?> admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, <?php  echo $sitename ?> admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../../assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../../assets/images/favicon.png" type="image/x-icon">
    <title><?php  echo $sitename ?> - Premium Admin Template</title>
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../assets/css/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="../../assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="../../assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="../../assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="../../assets/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../../assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
    <link id="color" rel="stylesheet" href="../../assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="../../assets/css/responsive.css">
  </head>
  <body> 
    
 
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper">
      <div class="container-fluid p-0">
        <!-- Unlock page start-->
        <div class="authentication-main mt-0">
          <div class="row">
            <div class="col-12">
              <div class="login-card login-dark">
                <div>
                  <div><a class="logo" href="index-2.html"><img class="img-fluid for-light" src="../../assets/images/logo/logo.png" alt="looginpage"><img class="img-fluid for-dark" src="../../assets/images/logo/logo_dark.png" alt="looginpage"></a></div>
                  <div class="login-main">
                    <form method="POST" class="theme-form">
                      <h4>Unlock</h4>
                      <div class="form-group">
                        <label class="col-form-label">Enter your Password</label>
                        <div class="form-input position-relative">
                          <input class="form-control" type="password" name="password" required="" placeholder="*********">
                          <div class="show-hide"><span class="show"></span></div>
                        </div>
                      </div>
                      <div class="form-group mb-0">
                        
                        <button name="login" class="btn btn-primary btn-block w-100" type="submit">Unlock</button>
                      </div>
                     
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Unlock page end-->
        <!-- page-wrapper Ends-->
        <!-- latest jquery-->
        <script src="../../assets/js/jquery.min.js"></script>
        <!-- Bootstrap js-->
        <script src="../../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
        <!-- feather icon js-->
        <script src="../../assets/js/icons/feather-icon/feather.min.js"></script>
        <script src="../../assets/js/icons/feather-icon/feather-icon.js"></script>
        <!-- scrollbar js-->
        <!-- Sidebar jquery-->
        <script src="../../assets/js/config.js"></script>
        <!-- Plugins JS start-->
        <!-- Plugins JS Ends-->
        <!-- Theme js-->
        <script src="../../assets/js/script.js"></script>
        <!-- Plugin used-->
      </div>
    </div>
  </body>
</html>