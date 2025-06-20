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
  <link rel="icon" href="../../assets/images/favicon.png" type="image/x-icon">
  <link rel="shortcut icon" href="../../assets/images/favicon.png" type="image/x-icon">
  <title><?php echo $sitename ?> - View All Users Deposits</title>
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
  <link rel="stylesheet" type="text/css" href="../../assets/css/vendors/slick.css">
  <link rel="stylesheet" type="text/css" href="../../assets/css/vendors/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="../../assets/css/vendors/scrollbar.css">
  <link rel="stylesheet" type="text/css" href="../../assets/css/vendors/animate.css">
  <link rel="stylesheet" type="text/css" href="../../assets/css/vendors/date-picker.css">
  <link rel="stylesheet" type="text/css" href="../../assets/css/vendors/dropzone.css">
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
  <div class="page-wrapper default-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    <?php include('../include/navbar.php')  ?>
    <!-- Page Header Ends                              -->
    <!-- Page Body Start-->
    <div class="page-body-wrapper default-menu default-menu">
      <!-- Page Sidebar Start-->
      <div class="sidebar-wrapper" data-layout="stroke-svg">
        <div>
          <div class="logo-wrapper"><a href="index-2.html"> <img class="img-fluid for-light" src="../../assets/images/logo/logo.png" alt=""><img class="img-fluid for-dark" src="../../assets/images/logo/logo_dark.png" alt=""></a>
            <div class="toggle-sidebar">
              <svg class="sidebar-toggle">
                <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#toggle-icon"></use>
              </svg>
            </div>
          </div>
          <div class="logo-icon-wrapper"><a href="index-2.html"><img class="img-fluid" src="../../assets/images/logo/logo-icon.png" alt=""></a></div>
          <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
              <ul class="sidebar-links" id="simple-bar">
                <li class="back-btn"><a href="index-2.html"><img class="img-fluid" src="../../assets/images/logo/logo-icon.png" alt=""></a>
                  <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                </li>
                <li class="pin-title sidebar-main-title">
                  <div>
                    <h6>Pinned</h6>
                  </div>
                </li>
                <li class="sidebar-main-title">
                  <div>
                    <h6 class="lan-1">General</h6>
                  </div>
                </li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                    <svg class="stroke-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#stroke-home"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#fill-home"></use>
                    </svg><span class="lan-3">Dashboard </span></a>
                  <ul class="sidebar-submenu">
                    <li><a class="lan-4" href="index-2.html">Default</a></li>
                    <li><a class="lan-5" href="dashboard-02.html">Ecommerce</a></li>
                  </ul>
                </li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                    <svg class="stroke-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#stroke-widget"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#fill-widget"></use>
                    </svg><span class="lan-6">Widgets</span></a>
                  <ul class="sidebar-submenu">
                    <li><a href="general-widget.html">General</a></li>
                    <li> <a href="chart-widget.html">Chart</a></li>
                  </ul>
                </li>
                <li class="sidebar-list"> <i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                    <svg class="stroke-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#stroke-layout"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#fill-layout"></use>
                    </svg><span class="lan-7">Page layout</span></a>
                  <ul class="sidebar-submenu">
                    <li><a href="box-layout.html">Boxed</a></li>
                    <li><a href="layout-rtl.html">RTL</a></li>
                    <li><a href="layout-dark.html">Dark Layout</a></li>
                    <li><a href="hide-on-scroll.html">Hide Nav Scroll</a></li>
                    <li><a href="footer-light.html">Footer Light</a></li>
                    <li><a href="footer-dark.html">Footer Dark</a></li>
                    <li><a href="footer-fixed.html">Footer Fixed</a></li>
                  </ul>
                </li>
                <li class="sidebar-main-title">
                  <div>
                    <h6 class="lan-8">Applications</h6>
                  </div>
                </li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"> </i><a class="sidebar-link sidebar-title" href="#">
                    <svg class="stroke-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#stroke-project"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#fill-project"></use>
                    </svg><span>Project </span></a>
                  <ul class="sidebar-submenu">
                    <li><a href="projects.html">Project List</a></li>
                    <li><a href="projectcreate.html">Create new</a></li>
                  </ul>
                </li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="file-manager.html">
                    <svg class="stroke-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#stroke-file"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#fill-file"></use>
                    </svg><span>File manager</span></a></li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"> </i><a class="sidebar-link sidebar-title link-nav" href="kanban.html">
                    <svg class="stroke-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#stroke-board"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#fill-board"></use>
                    </svg><span>kanban Board</span></a></li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                    <svg class="stroke-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#stroke-ecommerce"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#fill-ecommerce"></use>
                    </svg><span>Ecommerce</span></a>
                  <ul class="sidebar-submenu">
                    <li><a href="add-products.html">Add Product</a></li>
                    <li><a href="product.html">Product</a></li>
                    <li><a href="product-page.html">Product page</a></li>
                    <li><a href="list-products.html">Product list</a></li>
                    <li><a href="payment-details.html">Payment Details</a></li>
                    <li><a href="order-history.html">Order History</a></li>
                    <li><a class="submenu-title" href="#">Invoices
                        <h5 class="sub-arrow"><i class="fa fa-angle-right"></i></h5>
                      </a>
                      <ul class="submenu-content opensubmegamenu">
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
                    <li><a href="pricing.html">Pricing </a></li>
                  </ul>
                </li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"> </i><a class="sidebar-link sidebar-title link-nav" href="letter-box.html">
                    <svg class="stroke-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#stroke-email"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#fill-email"></use>
                    </svg><span>Letter Box</span></a></li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                    <svg class="stroke-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#stroke-chat"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#fill-chat"></use>
                    </svg><span>Chat</span></a>
                  <ul class="sidebar-submenu">
                    <li><a href="private-chat.html">Private Chat</a></li>
                    <li><a href="group-chat.html">Group Chat</a></li>
                  </ul>
                </li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                    <svg class="stroke-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#stroke-user"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#fill-user"></use>
                    </svg><span>Users</span></a>
                  <ul class="sidebar-submenu">
                    <li><a href="user-profile.html">Users Profile</a></li>
                    <li><a href="edit-profile.html">Users Edit</a></li>
                    <li><a href="user-cards.html">Users Cards</a></li>
                  </ul>
                </li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="bookmark.html">
                    <svg class="stroke-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#stroke-bookmark"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#fill-bookmark"> </use>
                    </svg><span>Bookmarks </span></a></li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="contacts.html">
                    <svg class="stroke-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#stroke-contact"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#fill-contact"> </use>
                    </svg><span>Contacts</span></a></li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="task.html">
                    <svg class="stroke-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#stroke-task"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#fill-task"> </use>
                    </svg><span>Tasks</span></a></li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="calendar-basic.html">
                    <svg class="stroke-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#stroke-calendar"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#fill-calender"></use>
                    </svg><span>Calendar</span></a></li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="social-app.html">
                    <svg class="stroke-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#stroke-social"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#fill-social"> </use>
                    </svg><span>Social App</span></a></li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="to-do.html">
                    <svg class="stroke-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#stroke-to-do"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#fill-to-do"> </use>
                    </svg><span>To-Do</span></a></li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="search.html">
                    <svg class="stroke-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#stroke-search"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#fill-search"> </use>
                    </svg><span>Search Result</span></a></li>
                <li class="sidebar-main-title">
                  <div>
                    <h6>Forms & Table</h6>
                  </div>
                </li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                    <svg class="stroke-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#stroke-form"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#fill-form"> </use>
                    </svg><span>Forms</span></a>
                  <ul class="sidebar-submenu">
                    <li><a class="submenu-title" href="#">Form Controls
                        <h5 class="sub-arrow"><i class="fa fa-angle-right"></i></h5>
                      </a>
                      <ul class="submenu-content opensubmegamenu">
                        <li><a href="form-validation.html">Form Validation</a></li>
                        <li><a href="base-input.html">Base Inputs</a></li>
                        <li><a href="radio-checkbox-control.html">Checkbox & Radio</a></li>
                        <li><a href="input-group.html">Input Groups</a></li>
                        <li> <a href="input-mask.html">Input Mask</a></li>
                        <li><a href="megaoptions.html">Mega Options</a></li>
                      </ul>
                    </li>
                    <li><a class="submenu-title" href="#">Form Widgets
                        <h5 class="sub-arrow"><i class="fa fa-angle-right"></i></h5>
                      </a>
                      <ul class="submenu-content opensubmegamenu">
                        <li><a href="datepicker.html">Datepicker</a></li>
                        <li><a href="touchspin.html">Touchspin</a></li>
                        <li><a href="select2.html">Select2</a></li>
                        <li><a href="switch.html">Switch</a></li>
                        <li><a href="typeahead.html">Typeahead</a></li>
                        <li><a href="clipboard.html">Clipboard</a></li>
                      </ul>
                    </li>
                    <li><a class="submenu-title" href="#">Form layout
                        <h5 class="sub-arrow"><i class="fa fa-angle-right"></i></h5>
                      </a>
                      <ul class="submenu-content opensubmegamenu">
                        <li><a href="form-wizard.html">Form Wizard 1</a></li>
                        <li><a href="form-wizard-two.html">Form Wizard 2</a></li>
                        <li><a href="two-factor.html">Two Factor</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                    <svg class="stroke-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#stroke-table"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#fill-table"></use>
                    </svg><span>Tables</span></a>
                  <ul class="sidebar-submenu">
                    <li><a class="submenu-title" href="#">Bootstrap Tables
                        <h5 class="sub-arrow"><i class="fa fa-angle-right"></i></h5>
                      </a>
                      <ul class="submenu-content opensubmegamenu">
                        <li><a href="bootstrap-basic-table.html">Basic Tables</a></li>
                        <li><a href="table-components.html">Table components</a></li>
                      </ul>
                    </li>
                    <li><a class="submenu-title" href="#">Data Tables
                        <h5 class="sub-arrow"><i class="fa fa-angle-right"></i></h5>
                      </a>
                      <ul class="submenu-content opensubmegamenu">
                        <li><a href="datatable-basic-init.html">Basic Init</a></li>
                        <li> <a href="datatable-advance.html">Advance Init </a></li>
                        <li><a href="datatable-API.html">API</a></li>
                        <li><a href="datatable-data-source.html">Data Sources</a></li>
                      </ul>
                    </li>
                    <li><a href="datatable-ext-autofill.html">Ex. Data Tables</a></li>
                    <li><a href="jsgrid-table.html">Js Grid Table </a></li>
                  </ul>
                </li>
                <li class="sidebar-main-title">
                  <div>
                    <h6>Components</h6>
                  </div>
                </li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                    <svg class="stroke-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#stroke-ui-kits"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#fill-ui-kits"></use>
                    </svg><span>Ui Kits</span></a>
                  <ul class="sidebar-submenu">
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
                  </ul>
                </li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                    <svg class="stroke-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#stroke-bonus-kit"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#fill-bonus-kit"></use>
                    </svg><span>Bonus Ui</span></a>
                  <ul class="sidebar-submenu">
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
                  </ul>
                </li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                    <svg class="stroke-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#stroke-animation"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#fill-animation"></use>
                    </svg><span>Animation</span></a>
                  <ul class="sidebar-submenu">
                    <li><a href="animate.html">Animate</a></li>
                    <li><a href="scroll-reval.html">Scroll Reveal</a></li>
                    <li><a href="AOS.html">AOS animation</a></li>
                    <li><a href="tilt.html">Tilt Animation</a></li>
                    <li><a href="wow.html">Wow Animation</a></li>
                  </ul>
                </li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                    <svg class="stroke-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#stroke-icons"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#fill-icons"></use>
                    </svg><span>Icons</span></a>
                  <ul class="sidebar-submenu">
                    <li><a href="flag-icon.html">Flag icon</a></li>
                    <li><a href="font-awesome.html">Fontawesome Icon</a></li>
                    <li><a href="ico-icon.html">Ico Icon</a></li>
                    <li><a href="themify-icon.html">Themify Icon</a></li>
                    <li><a href="feather-icon.html">Feather icon</a></li>
                    <li><a href="whether-icon.html">Whether Icon</a></li>
                  </ul>
                </li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                    <svg class="stroke-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#stroke-button"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#fill-button"></use>
                    </svg><span>Buttons</span></a>
                  <ul class="sidebar-submenu">
                    <li><a href="buttons.html">Default Style</a></li>
                    <li><a href="button-group.html">Button Group</a></li>
                  </ul>
                </li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                    <svg class="stroke-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#stroke-charts"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#fill-charts"></use>
                    </svg><span>Charts</span></a>
                  <ul class="sidebar-submenu">
                    <li><a href="chart-apex.html">Apex Chart</a></li>
                    <li><a href="chart-google.html">Google Chart</a></li>
                    <li><a href="chart-sparkline.html">Sparkline chart</a></li>
                    <li><a href="chart-flot.html">Flot Chart</a></li>
                    <li><a href="chart-knob.html">Knob Chart</a></li>
                    <li><a href="chart-morris.html">Morris Chart</a></li>
                    <li><a href="chartjs.html">Chatjs Chart</a></li>
                    <li><a href="chartist.html">Chartist Chart</a></li>
                    <li><a href="chart-peity.html">Peity Chart</a></li>
                    <li><a href="echarts.html">Echarts</a></li>
                  </ul>
                </li>
                <li class="sidebar-main-title">
                  <div>
                    <h6>Pages</h6>
                  </div>
                </li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="landing-page.html">
                    <svg class="stroke-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#stroke-landing-page"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#fill-landing-page"></use>
                    </svg><span>Landing page</span></a></li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="sample-page.html">
                    <svg class="stroke-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#stroke-sample-page"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#fill-sample-page"></use>
                    </svg><span>Sample page</span></a></li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="translate.html">
                    <svg class="stroke-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#stroke-internationalization"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#fill-internationalization"></use>
                    </svg><span>Translate</span></a></li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="https://admin.pixelstrap.net/<?php echo $sitename ?>/starter-kit/index.html" target="_blank">
                    <svg class="stroke-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#stroke-starter-kit"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#fill-starter-kit"></use>
                    </svg><span>Starter kit</span></a></li>
                <li class="mega-menu sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                    <svg class="stroke-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#stroke-others"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#fill-others"></use>
                    </svg><span>Others</span></a>
                  <div class="mega-menu-container menu-content">
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col mega-box">
                          <div class="link-section">
                            <div class="submenu-title">
                              <h5>Error Page</h5>
                            </div>
                            <ul class="submenu-content opensubmegamenu">
                              <li><a href="error-400.html">Error 400</a></li>
                              <li><a href="error-401.html">Error 401</a></li>
                              <li><a href="error-403.html">Error 403</a></li>
                              <li><a href="error-404.html">Error 404</a></li>
                              <li><a href="error-500.html">Error 500</a></li>
                              <li><a href="error-503.html">Error 503</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="col mega-box">
                          <div class="link-section">
                            <div class="submenu-title">
                              <h5> Authentication</h5>
                            </div>
                            <ul class="submenu-content opensubmegamenu">
                              <li><a href="login.html" target="_blank">Login Simple</a></li>
                              <li><a href="login_one.html" target="_blank">Login with bg image</a></li>
                              <li><a href="login_two.html" target="_blank">Login with image two </a></li>
                              <li><a href="login-bs-validation.html" target="_blank">Login With validation</a></li>
                              <li><a href="login-bs-tt-validation.html" target="_blank">Login with tooltip</a></li>
                              <li><a href="login-sa-validation.html" target="_blank">Login with sweetalert</a></li>
                              <li><a href="sign-up.html" target="_blank">Register Simple</a></li>
                              <li><a href="sign-up-one.html" target="_blank">Register with Bg Image </a></li>
                              <li><a href="sign-up-two.html" target="_blank">Register with image two</a></li>
                              <li><a href="sign-up-wizard.html" target="_blank">Register wizard</a></li>
                              <li><a href="unlock.html">Unlock User</a></li>
                              <li><a href="forget-password.html">Forget Password</a></li>
                              <li><a href="reset-password.html">Reset Password</a></li>
                              <li><a href="maintenance.html">Maintenance</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="col mega-box">
                          <div class="link-section">
                            <div class="submenu-title">
                              <h5>Coming Soon</h5>
                            </div>
                            <ul class="submenu-content opensubmegamenu">
                              <li><a href="comingsoon.html">Coming Simple</a></li>
                              <li><a href="comingsoon-bg-video.html">Coming with Bg video</a></li>
                              <li><a href="comingsoon-bg-img.html">Coming with Bg Image</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="col mega-box">
                          <div class="link-section">
                            <div class="submenu-title">
                              <h5>Email templates</h5>
                            </div>
                            <ul class="submenu-content opensubmegamenu">
                              <li><a href="basic-template.html">Basic Email</a></li>
                              <li><a href="email-header.html">Basic With Header</a></li>
                              <li><a href="template-email.html">Ecomerce Template</a></li>
                              <li><a href="template-email-2.html">Email Template 2</a></li>
                              <li><a href="ecommerce-templates.html">Ecommerce Email</a></li>
                              <li><a href="email-order-success.html">Order Success</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="sidebar-main-title">
                  <div>
                    <h6>Miscellaneous</h6>
                  </div>
                </li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                    <svg class="stroke-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#stroke-gallery"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#fill-gallery"></use>
                    </svg><span>Gallery</span></a>
                  <ul class="sidebar-submenu">
                    <li><a href="gallery.html">Gallery Grid</a></li>
                    <li><a href="gallery-with-description.html">Gallery Grid Desc</a></li>
                    <li><a href="gallery-masonry.html">Masonry Gallery</a></li>
                    <li><a href="masonry-gallery-with-disc.html">Masonry with Desc</a></li>
                    <li><a href="gallery-hover.html">Hover Effects</a></li>
                  </ul>
                </li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                    <svg class="stroke-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#stroke-blog"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#fill-blog"></use>
                    </svg><span>Blog</span></a>
                  <ul class="sidebar-submenu">
                    <li><a href="blog.html">Blog Details</a></li>
                    <li><a href="blog-single.html">Blog Single</a></li>
                    <li><a href="add-post.html">Add Post</a></li>
                  </ul>
                </li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="faq.html">
                    <svg class="stroke-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#stroke-faq"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#fill-faq"></use>
                    </svg><span>FAQ</span></a></li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                    <svg class="stroke-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#stroke-job-search"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#fill-job-search"></use>
                    </svg><span>Job Search</span></a>
                  <ul class="sidebar-submenu">
                    <li><a href="job-cards-view.html">Cards view</a></li>
                    <li><a href="job-list-view.html">List View</a></li>
                    <li><a href="job-details.html">Job Details</a></li>
                    <li><a href="job-apply.html">Apply</a></li>
                  </ul>
                </li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                    <svg class="stroke-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#stroke-learning"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#fill-learning"></use>
                    </svg><span>Learning</span></a>
                  <ul class="sidebar-submenu">
                    <li><a href="learning-list-view.html">Learning List</a></li>
                    <li><a href="learning-detailed.html">Detailed Course</a></li>
                  </ul>
                </li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                    <svg class="stroke-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#stroke-maps"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#fill-maps"></use>
                    </svg><span>Maps</span></a>
                  <ul class="sidebar-submenu">
                    <li><a href="map-js.html">Maps JS</a></li>
                    <li><a href="vector-map.html">Vector Maps</a></li>
                  </ul>
                </li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                    <svg class="stroke-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#stroke-editors"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#fill-editors"></use>
                    </svg><span>Editors</span></a>
                  <ul class="sidebar-submenu">
                    <li><a href="summernote.html">Summer Note</a></li>
                    <li><a href="ckeditor.html">CK editor</a></li>
                    <li><a href="simple-MDE.html">MDE editor</a></li>
                    <li><a href="ace-code-editor.html">ACE code editor </a></li>
                  </ul>
                </li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="knowledgebase.html">
                    <svg class="stroke-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#stroke-knowledgebase"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#fill-knowledgebase"></use>
                    </svg><span>Knowledgebase</span></a></li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="support-ticket.html">
                    <svg class="stroke-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#stroke-support-tickets"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#fill-support-tickets"></use>
                    </svg><span>Support Ticket</span></a></li>
              </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
          </nav>
        </div>
      </div>
      <!-- Page Sidebar Ends-->
      <div class="page-body">
        <div class="container-fluid">
          <div class="page-title">
            <div class="row">
              <div class="col-xl-4 col-sm-7 box-col-3">
                <h3> Project Create</h3>
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
                              <li> <a href="index-2.html">Default </a></li>
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
                              <li><a href="pricing.html">Pricing </a></li>
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
                                  <li><a href="login_two.html" target="_blank">Login with image two </a></li>
                                  <li><a href="login-bs-validation.html" target="_blank">Login With validation</a></li>
                                  <li><a href="login-bs-tt-validation.html" target="_blank">Login with tooltip</a></li>
                                  <li><a href="login-sa-validation.html" target="_blank">Login with sweetalert</a></li>
                                  <li><a href="sign-up.html" target="_blank">Register Simple</a></li>
                                  <li><a href="sign-up-one.html" target="_blank">Register with Bg Image </a></li>
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
                        <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#stroke-home"></use>
                      </svg></a></li>
                  <li class="breadcrumb-item">Apps</li>
                  <li class="breadcrumb-item active">Project Create </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header">
                  <div class="header-top">
                    <h4>Project Summary </h4>
                    <div class="dropdown icon-dropdown setting-menu">
                      <button class="btn dropdown-toggle" id="userdropdown22" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg>
                          <use href="../../assets/svg/icon-sprite.svg#setting"> </use>
                        </svg>
                      </button>
                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown22"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly </a></div>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="table-responsive custom-scrollbar">
                    <table class="project-summary table" id="project-summary">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Project Name</th>
                          <th>Team</th>
                          <th>Project Cost</th>
                          <th>Project Status</th>
                          <th>Payment</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="f-w-600">A908</td>
                          <td> <a href="projects.html">Amazon Website</a></td>
                          <td class="team-avtar">
                            <div class="customers d-inline-block avatar-group">
                              <ul>
                                <li class="d-inline-block"><img class="img-40 rounded-circle" src="../../assets/images/dashboard/avtar/8.jpg" alt=""></li>
                                <li class="d-inline-block"><img class="img-40 rounded-circle" src="../../assets/images/dashboard/avtar/10.jpg" alt=""></li>
                                <li class="d-inline-block"><img class="img-40 rounded-circle" src="../../assets/images/dashboard/avtar/2.jpg" alt=""></li>
                                <li class="d-inline-block">
                                  <p>26+</p>
                                </li>
                              </ul>
                            </div>
                          </td>
                          <td>$23,490</td>
                          <td>Completed</td>
                          <td class="txt-success">Done </td>
                        </tr>
                        <tr>
                          <td>R840</td>
                          <td> <a href="projects.html">Paytm bank app</a></td>
                          <td class="team-avtar">
                            <div class="customers d-inline-block avatar-group">
                              <ul>
                                <li class="d-inline-block"><img class="img-40 rounded-circle" src="../../assets/images/dashboard/avtar/2.jpg" alt=""></li>
                                <li class="d-inline-block"><img class="img-40 rounded-circle" src="../../assets/images/dashboard/avtar/20.jpg" alt=""></li>
                                <li class="d-inline-block"><img class="img-40 rounded-circle" src="../../assets/images/dashboard/avtar/12.jpg" alt=""></li>
                                <li class="d-inline-block">
                                  <p>6+</p>
                                </li>
                              </ul>
                            </div>
                          </td>
                          <td>$45,459</td>
                          <td>In Progress</td>
                          <td class="txt-danger">Pending</td>
                        </tr>
                        <tr>
                          <td class="f-w-600">V908</td>
                          <td class="f-w-600"> <a href="projects.html">Cytrust Dashboard</a></td>
                          <td class="team-avtar">
                            <div class="customers d-inline-block avatar-group">
                              <ul>
                                <li class="d-inline-block"><img class="img-40 rounded-circle" src="../../assets/images/dashboard/avtar/14.jpg" alt=""></li>
                                <li class="d-inline-block"><img class="img-40 rounded-circle" src="../../assets/images/dashboard/avtar/13.jpg" alt=""></li>
                              </ul>
                            </div>
                          </td>
                          <td class="f-w-600">$78,748 </td>
                          <td class="f-w-600">Completed</td>
                          <td class="txt-success f-w-600">Done</td>
                        </tr>
                        <tr>
                          <td class="f-w-600">K450</td>
                          <td> <a href="projects.html">Project Mecha</a></td>
                          <td class="team-avtar">
                            <div class="customers d-inline-block avatar-group">
                              <ul>
                                <li class="d-inline-block"><img class="img-40 rounded-circle" src="../../assets/images/dashboard/avtar/22.jpg" alt=""></li>
                                <li class="d-inline-block"><img class="img-40 rounded-circle" src="../../assets/images/dashboard/avtar/15.jpg" alt=""></li>
                                <li class="d-inline-block"><img class="img-40 rounded-circle" src="../../assets/images/dashboard/avtar/2.jpg" alt=""></li>
                              </ul>
                            </div>
                          </td>
                          <td class="f-w-600"> $98,878</td>
                          <td class="f-w-600">In Progress</td>
                          <td class="txt-danger f-w-600">Pending</td>
                        </tr>
                        <tr>
                          <td class="f-w-600">D480</td>
                          <td class="f-w-600"><a href="projects.html">Dynamic Program</a></td>
                          <td class="team-avtar">
                            <div class="customers d-inline-block avatar-group">
                              <ul>
                                <li class="d-inline-block"><img class="img-40 rounded-circle" src="../../assets/images/dashboard/avtar/21.jpg" alt=""></li>
                                <li class="d-inline-block"><img class="img-40 rounded-circle" src="../../assets/images/dashboard/avtar/23.jpg" alt=""></li>
                                <li class="d-inline-block"><img class="img-40 rounded-circle" src="../../assets/images/dashboard/avtar/24.jpg" alt=""></li>
                                <li class="d-inline-block">
                                  <p>5+ </p>
                                </li>
                              </ul>
                            </div>
                          </td>
                          <td class="f-w-600">$23,490</td>
                          <td class="f-w-600">In Progress</td>
                          <td class="txt-danger f-w-600">Pending</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
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
              <p class="mb-0">Copyright 2024 © <?php echo $sitename ?> theme by pixelstrap.</p>
            </div>
            <div class="col-md-6 p-0">
              <p class="heart mb-0">Hand crafted &amp; made with
                <svg class="footer-icon">
                  <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#heart"></use>
                </svg>
              </p>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- latest jquery-->
  <script src="../../assets/js/jquery.min.js"></script>
  <!-- Bootstrap js-->
  <script src="../../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
  <!-- feather icon js-->
  <script src="../../assets/js/icons/feather-icon/feather.min.js"></script>
  <script src="../../assets/js/icons/feather-icon/feather-icon.js"></script>
  <!-- scrollbar js-->
  <script src="../../assets/js/scrollbar/simplebar.js"></script>
  <script src="../../assets/js/scrollbar/custom.js"></script>
  <!-- Sidebar jquery-->
  <script src="../../assets/js/config.js"></script>
  <!-- Plugins JS start-->
  <script src="../../assets/js/sidebar-menu.js"></script>
  <script src="../../assets/js/sidebar-pin.js"></script>
  <script src="../../assets/js/slick/slick.min.js"></script>
  <script src="../../assets/js/slick/slick.js"></script>
  <script src="../../assets/js/header-slick.js"></script>
  <script src="../../assets/js/datepicker/date-picker/datepicker.js"></script>
  <script src="../../assets/js/datepicker/date-picker/datepicker.en.js"></script>
  <script src="../../assets/js/datepicker/date-picker/datepicker.custom.js"></script>
  <script src="../../assets/js/dropzone/dropzone.js"></script>
  <script src="../../assets/js/dropzone/dropzone-script.js"></script>
  <script src="../../assets/js/typeahead/handlebars.js"></script>
  <script src="../../assets/js/typeahead/typeahead.bundle.js"></script>
  <script src="../../assets/js/typeahead/typeahead.custom.js"></script>
  <script src="../../assets/js/typeahead-search/handlebars.js"></script>
  <script src="../../assets/js/typeahead-search/typeahead-custom.js"></script>
  <!-- Plugins JS Ends-->
  <!-- Theme js-->
  <script src="../../assets/js/script.js"></script>
  <script src="../../assets/js/theme-customizer/customizer.js"></script>
  <!-- Plugin used-->
</body>



</html>