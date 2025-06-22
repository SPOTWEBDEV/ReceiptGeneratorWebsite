<?php

include("../../../server/connection.php")



?>
<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from admin.pixelstrap.net/<?php  echo $sitename ?>/template/edit-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Jun 2025 12:24:56 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php  echo $sitename ?> admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, <?php  echo $sitename ?> admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../../../assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../../../assets/images/favicon.png" type="image/x-icon">
    <title><?php  echo $sitename ?> - Premium Admin Template</title>
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../../assets/css/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/vendors/slick.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/css/vendors/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/css/vendors/animate.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <link id="color" rel="stylesheet" href="../../../assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/responsive.css">
  </head>
  <body> 
    <!-- loader starts-->
    <div class="loader-wrapper">
      <div class="theme-loader">    
        <div class="loader-p"></div>
      </div>
    </div>
    <!-- loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">

    
      <!-- Page Header Start-->
      <?php  include('../../include/nav.php') ?>
      <!-- Page Header Ends  -->

      <!-- Page Body Start-->
      <div class="page-body-wrapper">


        <!-- Page Sidebar Start-->
         <?php  include('../../include/sidenav.php') ?>
        <!-- Page Sidebar Ends-->


        <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-xl-4 col-sm-7 box-col-3">
                  <h3>Edit Profile</h3>
                </div>
                <div class="col-5 d-none d-xl-block">
                  <!-- Page Sub Header Start-->
                  <div class="left-header main-sub-header p-0">
                    <div class="left-menu-header">
                      <ul class="header-left"> 
                        <li class="onhover-dropdown"> <span class="f-w-700">General </span>
                          <ul class="onhover-show-div left-dropdown">
                            <li class="flyout-right"><a href="#">Dashboards</a><i class="fa fa-angle-right"></i>
                              <ul>
                                <li> <a href="index-2.html">Default  </a></li>
                                <li> <a href="dashboard-02.html">Ecommerce</a></li>
                              </ul>
                            </li>
                            <li class="flyout-right"><a href="#">Widgets</a><i class="fa fa-angle-right"></i>
                              <ul>
                                <li><a href="general-widget.html">General</a></li>
                                <li> <a href="chart-widget.html">chart</a></li>
                              </ul>
                            </li>
                            <li class="flyout-right"> <a href="#">Page layout</a><i class="fa fa-angle-right"></i>
                              <ul>
                                <li> <a href="box-layout.html">Boxed </a></li>
                                <li> <a href="layout-rtl.html">RTL</a></li>
                                <li> <a href="layout-dark.html">Dark Layout</a></li>
                                <li> <a href="footer-light.html">footer-light.html</a></li>
                                <li> <a href="footer-dark.html">footer-dark.html</a></li>
                                <li><a href="footer-fixed.html">footer-fixed.html</a></li>
                              </ul>
                            </li>
                          </ul>
                        </li>
                        <li class="onhover-dropdown"><span class="f-w-700">Components</span>
                          <ul class="onhover-show-div left-dropdown">
                            <li class="flyout-right"><a href="#">Ui Kits</a>
                              <ul>
                                <li><a href="typography.html">Typography</a></li>
                                <li><a href="avatars.html">Avatars</a></li>
                                <li><a href="helper-classes.html">helper classes</a></li>
                                <li><a href="grid.html">Grid</a></li>
                                <li><a href="tag-pills.html">Tag & pills</a></li>
                                <li><a href="progress-bar.html">Progress</a></li>
                                <li><a href="modal.html">Modal</a></li>
                                <li><a href="alert.html">Alert</a></li>
                                <li><a href="popover.html">Popover</a></li>
                                <li><a href="tooltip.html">Tooltip</a></li>
                                <li><a href="dropdown.html">Dropdown</a></li>
                                <li><a href="according.html">Accordion</a></li>
                                <li><a href="tab-bootstrap.html">Tabs</a></li>
                                <li><a href="list.html">Lists</a></li>
                              </ul><i class="fa fa-angle-right"></i>
                            </li>
                            <li class="flyout-right"><a href="#">Bonus Ui</a>
                              <ul>
                                <li><a href="scrollable.html">Scrollable</a></li>
                                <li><a href="tree.html">Tree view</a></li>
                                <li><a href="toasts.html">Toasts</a></li>
                                <li><a href="rating.html">Rating</a></li>
                                <li><a href="dropzone.html">dropzone</a></li>
                                <li><a href="tour.html">Tour</a></li>
                                <li><a href="sweet-alert2.html">SweetAlert2</a></li>
                                <li><a href="modal-animated.html">Animated Modal</a></li>
                                <li><a href="owl-carousel.html">Owl Carousel</a></li>
                                <li><a href="ribbons.html">Ribbons</a></li>
                                <li><a href="pagination.html">Pagination</a></li>
                                <li><a href="breadcrumb.html">Breadcrumb</a></li>
                                <li><a href="range-slider.html">Range Slider</a></li>
                                <li><a href="image-cropper.html">Image cropper</a></li>
                                <li><a href="basic-card.html">Basic Card</a></li>
                                <li><a href="creative-card.html">Creative Card</a></li>
                                <li><a href="dragable-card.html">Draggable Card</a></li>
                                <li><a href="timeline-v-1.html">Timeline </a></li>
                              </ul><i class="fa fa-angle-right"></i>
                            </li>
                            <li class="flyout-right"><a href="#">Animation</a>
                              <ul>
                                <li><a href="animate.html">Animate</a></li>
                                <li><a href="scroll-reval.html">Scroll Reveal</a></li>
                                <li><a href="AOS.html">AOS animation</a></li>
                                <li><a href="tilt.html">Tilt Animation</a></li>
                                <li><a href="wow.html">Wow Animation</a></li>
                              </ul><i class="fa fa-angle-right"></i>
                            </li>
                            <li class="flyout-right"><a href="#">Icons</a>
                              <ul>
                                <li><a href="flag-icon.html">Flag icon</a></li>
                                <li><a href="font-awesome.html">Fontawesome Icon</a></li>
                                <li><a href="ico-icon.html">Ico Icon</a></li>
                                <li><a href="themify-icon.html">Themify Icon</a></li>
                                <li><a href="feather-icon.html">Feather icon</a></li>
                                <li><a href="whether-icon.html">Whether Icon</a></li>
                              </ul><i class="fa fa-angle-right"></i>
                            </li>
                            <li class="flyout-right"><a href="#">Buttons</a>
                              <ul>
                                <li><a href="buttons.html">Default Style</a></li>
                                <li><a href="button-group.html">Button Group</a></li>
                              </ul><i class="fa fa-angle-right"></i>
                            </li>
                            <li class="flyout-right"><a href="#">Charts</a>
                              <ul>
                                <li><a href="echarts.html">Echarts</a></li>
                                <li><a href="chart-apex.html">Apex Chart</a></li>
                                <li><a href="chart-google.html">Google Chart</a></li>
                                <li><a href="chart-sparkline.html">Sparkline chart</a></li>
                                <li><a href="chart-flot.html">Flot Chart </a></li>
                                <li><a href="chart-knob.html">Knob Chart</a></li>
                                <li><a href="chart-morris.html">Morris Chart</a></li>
                                <li><a href="chartjs.html">Chatjs Chart</a></li>
                                <li><a href="chartist.html">Chartist Chart</a></li>
                                <li><a href="chart-peity.html">Peity Chart</a></li>
                              </ul><i class="fa fa-angle-right"></i>
                            </li>
                          </ul>
                        </li>
                        <li class="onhover-dropdown"> <span class="f-w-700">Applications</span>
                          <ul class="onhover-show-div left-dropdown">
                            <li class="flyout-right"><a href="#">Project</a>
                              <ul>
                                <li><a href="projects.html">Project List</a></li>
                                <li><a href="projectcreate.html">Create new</a></li>
                              </ul><i class="fa fa-angle-right"></i>
                            </li>
                            <li><a href="file-manager.html">File manager</a></li>
                            <li><a href="kanban.html">kanban Board </a></li>
                            <li class="flyout-right"> <a href="#">Ecommerce </a>
                              <ul>
                                <li><a href="add-products.html">Add Product</a></li>
                                <li><a href="product.html">Product</a></li>
                                <li><a href="product-page.html">Product page</a></li>
                                <li><a href="list-products.html">Product list</a></li>
                                <li><a href="payment-details.html">Payment Details</a></li>
                                <li><a href="order-history.html">Order History</a></li>
                                <li class="flyout-right"><a class="submenu-title" href="#">Invoices</a>
                                  <ul>
                                    <li><a href="invoice-1.html">Invoice-1</a></li>
                                    <li><a href="invoice-2.html">Invoice-2</a></li>
                                    <li><a href="invoice-3.html">Invoice-3</a></li>
                                    <li><a href="invoice-4.html">Invoice-4</a></li>
                                    <li><a href="invoice-5.html">Invoice-5</a></li>
                                    <li><a href="invoice-template.html">Invoice-6</a></li>
                                  </ul>
                                </li>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="list-wish.html">Wishlist</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="pricing.html">Pricing  </a></li>
                              </ul><i class="fa fa-angle-right"></i>
                            </li>
                            <li class="flyout-right"><a href="#">Email</a>
                              <ul>
                                <li><a href="letter-box.html">Email App</a></li>
                                <li><a href="email-compose.html">Email Compose</a></li>
                                <li><a href="letter-box.html">Letter Box</a></li>
                              </ul><i class="fa fa-angle-right"> </i>
                            </li>
                            <li class="flyout-right"> <a href="#">Chat</a>
                              <ul>
                                <li><a href="private-chat.html">Private Chat</a></li>
                                <li><a href="group-chat.html">Group Chat</a></li>
                              </ul><i class="fa fa-angle-right"></i>
                            </li>
                            <li class="flyout-right"><a href="#">User</a>
                              <ul>
                                <li><a href="user-profile.html">Users Profile</a></li>
                                <li><a href="edit-profile.html">Users Edit</a></li>
                                <li><a href="user-cards.html">Users Cards</a></li>
                              </ul><i class="fa fa-angle-right"> </i>
                            </li>
                            <li><a href="bookmark.html">Bookmarks</a></li>
                            <li><a href="contacts.html">Contacts</a></li>
                            <li><a href="task.html">Task</a></li>
                            <li><a href="calendar-basic.html">Calendar</a></li>
                            <li><a href="social-app.html">Social-app</a></li>
                            <li><a href="to-do.html">To-Do</a></li>
                            <li><a href="search.html">Search Result</a></li>
                          </ul>
                        </li>
                        <li class="onhover-dropdown"><span class="f-w-700">Pages</span>
                          <ul class="onhover-show-div left-dropdown">
                            <li><a href="blog.html">Landing page</a></li>
                            <li><a href="blog-single.html">Sample page</a></li>
                            <li><a href="add-post.html">Starter kit</a></li>
                            <li class="flyout-right"><a href="#">Others </a><i class="fa fa-angle-right"></i>
                              <ul>
                                <li class="flyout-right"><a href="#">Error Page</a>
                                  <ul>
                                    <li><a href="error-400.html">Error 400</a></li>
                                    <li><a href="error-401.html">Error 401</a></li>
                                    <li><a href="error-403.html">Error 403</a></li>
                                    <li><a href="error-404.html">Error 404</a></li>
                                    <li><a href="error-500.html">Error 500</a></li>
                                    <li><a href="error-503.html">Error 503</a></li>
                                  </ul><i class="fa fa-angle-right"> </i>
                                </li>
                                <li class="flyout-right"> <a href="#">Authentication</a>
                                  <ul>
                                    <li><a href="login.html" target="_blank">Login Simple</a></li>
                                    <li><a href="login_one.html" target="_blank">Login with bg image</a></li>
                                    <li><a href="login_two.html" target="_blank">Login with image two                      </a></li>
                                    <li><a href="login-bs-validation.html" target="_blank">Login With validation</a></li>
                                    <li><a href="login-bs-tt-validation.html" target="_blank">Login with tooltip</a></li>
                                    <li><a href="login-sa-validation.html" target="_blank">Login with sweetalert</a></li>
                                    <li><a href="sign-up.html" target="_blank">Register Simple</a></li>
                                    <li><a href="sign-up-one.html" target="_blank">Register with Bg Image                              </a></li>
                                    <li><a href="sign-up-two.html" target="_blank">Register with image two</a></li>
                                    <li><a href="sign-up-wizard.html" target="_blank">Register wizard</a></li>
                                    <li><a href="unlock.html">Unlock User</a></li>
                                    <li><a href="forget-password.html">Forget Password</a></li>
                                    <li><a href="reset-password.html">Reset Password</a></li>
                                    <li><a href="maintenance.html">Maintenance</a></li>
                                  </ul>
                                </li>
                                <li class="flyout-right"> <a href="#">Coming Soon</a>
                                  <ul> 
                                    <li><a href="comingsoon.html">Coming Simple</a></li>
                                    <li><a href="comingsoon-bg-video.html">Coming with Bg video</a></li>
                                    <li><a href="comingsoon-bg-img.html">Coming with Bg Image</a></li>
                                  </ul><i class="fa fa-angle-right"> </i>
                                </li>
                                <li class="flyout-right"><a href="#">Email templates</a>
                                  <ul>
                                    <li><a href="basic-template.html">Basic Email</a></li>
                                    <li><a href="email-header.html">Basic With Header</a></li>
                                    <li><a href="template-email.html">Ecomerce Template</a></li>
                                    <li><a href="template-email-2.html">Email Template 2</a></li>
                                    <li><a href="ecommerce-templates.html">Ecommerce Email</a></li>
                                    <li><a href="email-order-success.html">Order Success</a></li>
                                  </ul><i class="fa fa-angle-right"></i>
                                </li>
                              </ul>
                            </li>
                          </ul>
                        </li>
                        <li class="onhover-dropdown p-0"><span class="f-w-700">Miscellaneous</span>
                          <ul class="onhover-show-div left-dropdown">
                            <li class="flyout-right"><a href="#">Gallery</a>
                              <ul> 
                                <li><a href="gallery.html">Gallery Grid</a></li>
                                <li><a href="gallery-with-description.html">gallery-with-description</a></li>
                                <li><a href="gallery-masonry.html">gallery-masonry</a></li>
                                <li><a href="masonry-gallery-with-disc.html">masonry-gallery-with-disc</a></li>
                                <li><a href="gallery-hover.html">gallery-hover</a></li>
                              </ul><i class="fa fa-angle-right"></i>
                            </li>
                            <li class="flyout-right"><a href="#">Blog</a>
                              <ul>
                                <li><a href="blog.html">blog</a></li>
                                <li><a href="blog-single.html">blog-single</a></li>
                                <li><a href="add-post.html">add-post</a></li>
                              </ul><i class="fa fa-angle-right"></i>
                            </li>
                            <li><a href="FAQ-2.html">FAQ</a></li>
                            <li class="flyout-right"><a href="#">Job Search</a>
                              <ul>
                                <li><a href="job-cards-view.html">job-cards-view</a></li>
                                <li><a href="job-list-view.html">job-list-view</a></li>
                                <li><a href="job-details.html">job-details</a></li>
                                <li><a href="job-apply.html">job-apply</a></li>
                              </ul><i class="fa fa-angle-right"></i>
                            </li>
                            <li class="flyout-right"><a href="#">Job Search</a>
                              <ul> 
                                <li><a href="job-cards-view.html">learning-list</a></li>
                                <li><a href="learning-detailed.html">learning-detailed</a></li>
                              </ul><i class="fa fa-angle-right"></i>
                            </li>
                            <li class="flyout-right"><a href="#">Maps</a>
                              <ul>
                                <li><a href="map-js.html">Map-js</a></li>
                                <li><a href="vector-map.html">Vector Maps</a></li>
                              </ul><i class="fa fa-angle-right"></i>
                            </li>
                            <li class="flyout-right"><a href="#">Editors </a>
                              <ul>
                                <li><a href="summernote.html">Summer Note</a></li>
                                <li><a href="CK%20editor.html">CK editor</a></li>
                                <li><a href="simple-MDE.html">MDE editor</a></li>
                                <li><a href="ace-code-editor.html">ACE code editor </a></li>
                              </ul><i class="fa fa-angle-right"> </i>
                            </li>
                            <li><a href="knowledgebase.html">Knowledgebase </a></li>
                            <li> <a href="support-ticket-2.html">Support Ticket</a></li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <!-- Page Sub Header end
                  -->
                </div>
                <div class="col-xl-3 col-sm-5 box-col-4">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index-2.html">
                        <svg class="stroke-icon">
                          <use href="../../../assets/svg/icon-sprite.svg#stroke-home"></use>
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
                  <div class="card">
                    <div class="card-header pb-0">
                      <h4 class="card-title mb-0">My Profile</h4>
                      <div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a></div>
                    </div>
                    <div class="card-body">
                      <form>
                        <div class="row mb-2">
                          <div class="profile-title">
                            <div class="d-flex">                        <img class="img-70 rounded-circle" alt="" src="../../../assets/images/user/7.jpg">
                              <div class="flex-grow-1">
                                <h3 class="mb-1 f-w-600">MARK JECNO</h3>
                                <p>DESIGNER</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="mb-3">
                          <h6 class="form-label">Bio</h6>
                          <textarea class="form-control" rows="5">On the other hand, we denounce with righteous indignation</textarea>
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Email-Address</label>
                          <input class="form-control" placeholder="your-email@domain.com">
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Password</label>
                          <input class="form-control" type="password" value="password">
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Website</label>
                          <input class="form-control" placeholder="http://Uplor .com">
                        </div>
                        <div class="form-footer">
                          <button class="btn btn-primary btn-block">Save</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div> 
                <div class="col-xl-12">
                  <form class="card">
                    <div class="card-header pb-0">
                      <h4 class="card-title mb-0">Edit Profile</h4>
                      <div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a></div>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-5">
                          <div class="mb-3">
                            <label class="form-label">Company</label>
                            <input class="form-control" type="text" placeholder="Company">
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                          <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input class="form-control" type="text" placeholder="Username">
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                          <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input class="form-control" type="email" placeholder="Email">
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                          <div class="mb-3">
                            <label class="form-label">First Name</label>
                            <input class="form-control" type="text" placeholder="Company">
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                          <div class="mb-3">
                            <label class="form-label">Last Name</label>
                            <input class="form-control" type="text" placeholder="Last Name">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="mb-3">
                            <label class="form-label">Address</label>
                            <input class="form-control" type="text" placeholder="Home Address">
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                          <div class="mb-3">
                            <label class="form-label">City</label>
                            <input class="form-control" type="text" placeholder="City">
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                          <div class="mb-3">
                            <label class="form-label">Postal Code</label>
                            <input class="form-control" type="number" placeholder="ZIP Code">
                          </div>
                        </div>
                        <div class="col-md-5">
                          <div class="mb-3">
                            <label class="form-label">Country</label>
                            <select class="form-control btn-square">
                              <option value="0">--Select--</option>
                              <option value="1">Germany</option>
                              <option value="2">Canada</option>
                              <option value="3">Usa</option>
                              <option value="4">Aus</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div>
                            <label class="form-label">About Me</label>
                            <textarea class="form-control" rows="4" placeholder="Enter About your description"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer text-end">
                      <button class="btn btn-primary" type="submit">Update Profile</button>
                    </div>
                  </form>
                </div>
               
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 p-0 footer-copyright">
                <p class="mb-0">Copyright 2024 © <?php  echo $sitename ?> theme by pixelstrap.</p>
              </div>
              <div class="col-md-6 p-0">
                <p class="heart mb-0">Hand crafted &amp; made with
                  <svg class="footer-icon">
                    <use href="../../../assets/svg/icon-sprite.svg#heart"></use>
                  </svg>
                </p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- latest jquery-->
    <script src="../../../assets/js/jquery.min.js"></script>
    <!-- Bootstrap js-->
    <script src="../../../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="../../../assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="../../../assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    <script src="../../../assets/js/scrollbar/simplebar.js"></script>
    <script src="../../../assets/js/scrollbar/custom.js"></script>
    <!-- Sidebar jquery-->
    <script src="../../../assets/js/config.js"></script>
    <!-- Plugins JS start-->
    <script src="../../../assets/js/sidebar-menu.js"></script>
    <script src="../../../assets/js/sidebar-pin.js"></script>
    <script src="../../../assets/js/slick/slick.min.js"></script>
    <script src="../../../assets/js/slick/slick.js"></script>
    <script src="../../../assets/js/header-slick.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../../../assets/js/script.js"></script>
    <script src="../../../assets/js/theme-customizer/customizer.js"></script>
    <!-- Plugin used-->
  </body>

<!-- Mirrored from admin.pixelstrap.net/<?php  echo $sitename ?>/template/edit-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Jun 2025 12:24:56 GMT -->
</html>