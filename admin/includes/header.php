<?php 
 session_start();
// if(isset($_SESSION['AdminloginId'])){
//      header("Location:login.php");
// }
?>



<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Sewabharti</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="MyraStudio" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/logosewa.png">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/theme.min.css" rel="stylesheet" type="text/css" />

    </head>
    <body>
        
 
    <header id="page-topbar">
            <div class="navbar-header">

                <div class="d-flex align-items-left">
                    <button type="button" class="btn btn-sm mr-2 d-lg-none px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>

                    <div class="dropdown d-none d-sm-inline-block">
                        <h3>welcom mr <?php echo $_SESSION['AdminloginId']  ?></h3>
                        </div>
                    </div>
                </div>

                <div class="d-flex align-items-center">

                    <div class="dropdown d-none d-sm-inline-block ml-2">
                        <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="mdi mdi-magnify"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" aria-labelledby="page-header-search-dropdown">

                            <form class="p-3">
                                <div class="form-group m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="dropdown d-inline-block">

                        
                            <div data-simplebar="init" style="max-height: 230px;"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: auto; overflow: hidden; padding-right: 0px; padding-bottom: 0px;"><div class="simplebar-content" style="padding: 0px;">
                                <a href="" class="text-reset notification-item">
                                    <div class="media">
                                        <img src="assets/images/users/avatar-2.jpg" class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">Samuel Coverdale</h6>
                                            <p class="font-size-12 mb-1">You have new follower on Instagram</p>
                                            <p class="font-size-12 mb-0 text-muted"><i class="mdi mdi-clock-outline"></i> 2 min ago</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="" class="text-reset notification-item">
                                    <div class="media">
                                        <div class="avatar-xs mr-3">
                                            <span class="avatar-title bg-success rounded-circle">
                                                <i class="mdi mdi-cloud-download-outline"></i>
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">Download Available !</h6>
                                            <p class="font-size-12 mb-1">Latest version of admin is now available.
                                                Please download here.</p>
                                            <p class="font-size-12 mb-0 text-muted"><i class="mdi mdi-clock-outline"></i> 4 hours ago</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="" class="text-reset notification-item">
                                    <div class="media">
                                        <img src="assets/images/users/avatar-3.jpg" class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">Victoria Mendis</h6>
                                            <p class="font-size-12 mb-1">Just upgraded to premium account.</p>
                                            <p class="font-size-12 mb-0 text-muted"><i class="mdi mdi-clock-outline"></i> 1 day ago</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <form method="POST">
                        <button type="button" class="btn btn-danger" type="submit" name="logout">logout</button>
                        </form>
                  
            </div>

                           

                    <div class="dropdown d-inline-block ml-2">
                        
                        <?php
                        // if(isset($_POST['logout'])){
                        //    session_destroy();
                        //    header("Location:login.php");
                        // }
                        ?>
                    </div>

                </div>
            </div>
        </header>
        <div class="vertical-menu">

            <div data-simplebar="init" class="h-100"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: -20px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll; padding-right: 20px; padding-bottom: 0px;"><div class="simplebar-content" style="padding: 0px;">

                <div class="navbar-brand-box">
                    <a href="index.html" class="logo">
                        <i class="mdi mdi-album"></i>
                        <span>
                        सेवा भारती मध्य भारत 
                        </span>
                    </a>
                </div>

                <!--- Sidemenu -->
                <div id="sidebar-menu" class="mm-active">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled mm-show" id="side-menu">
                        <li class="menu-title">Menu</li>

                        <li>
                            <a href="admin.php" class="waves-effect"><i class="mdi mdi-home-analytics"></i><span class="badge badge-pill badge-primary float-right">7</span><span>Dashboard</span></a>
                        </li>

                        <li class="mm-active">
                            <a href="javascript: void(0);" class="has-arrow waves-effect mm-active"><i class="mdi mdi-diamond-stone"></i><span>Website Controls</span></a>
                            <ul class="sub-menu mm-collapse mm-show" aria-expanded="false">
                                <li><a href="newUpdate.php">New Update</a></li>
                                <li><a href="ui-cards.html">Cards</a></li>
                                <li class="mm-active"><a href="ui-carousel.html" class="active">Carousel</a>
                                </li><li><a href="ui-embeds.html">Embeds</a>
                                </li><li><a href="ui-general.html">General</a></li>
                                <li><a href="ui-grid.html">Grid</a></li>
                                <li><a href="ui-media-objects.html">Media Objects</a></li>
                                <li><a href="ui-modals.html">Modals</a></li>
                                <li><a href="ui-progressbars.html">Progress Bars</a></li>
                                <li><a href="ui-tabs.html">Tabs</a></li>
                                <li><a href="ui-typography.html">Typography</a></li>
                                <li><a href="ui-toasts.html">Toasts</a></li>
                                <li><a href="ui-tooltips-popovers.html">Tooltips &amp; Popovers</a></li>
                                <li><a href="ui-scrollspy.html">Scrollspy</a></li>
                                <li><a href="ui-spinners.html">Spinners</a></li>
                                <li><a href="ui-sweetalerts.html">Sweet Alerts</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="mdi mdi-table-merge-cells"></i><span>Payment and Donation</span></a>
                            <ul class="sub-menu mm-collapse" aria-expanded="false">
                                <li><a href="tables-basic.html">Basic Tables</a></li>
                                <li><a href="tables-datatables.html">Data Tables</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="mdi mdi-poll"></i><span>Blood donor</span></a>
                            <ul class="sub-menu mm-collapse" aria-expanded="false">
                                <li><a href="charts-morris.html">Morris</a></li>
                                <li><a href="charts-google.html">Google</a></li>
                                <li><a href="charts-chartjs.html">Chartjs</a></li>
                                <li><a href="charts-sparkline.html">Sparkline</a></li>
                                <li><a href="charts-knob.html">Jquery Knob</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted-type"></i><span class="badge badge-pill badge-danger float-right">6</span><span>Forms</span></a>
                            <ul class="sub-menu mm-collapse" aria-expanded="false">
                                <li><a href="forms-elements.html">Elements</a></li>
                                <li><a href="forms-plugins.html">Plugins</a></li>
                                <li><a href="forms-validation.html">Validation</a></li>
                                <li><a href="forms-mask.html">Masks</a></li>
                                <li><a href="forms-quilljs.html">Quilljs</a></li>
                                <li><a href="forms-uploads.html">File Uploads</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="mdi mdi-black-mesa"></i><span>Icons</span></a>
                            <ul class="sub-menu mm-collapse" aria-expanded="false">
                                <li><a href="icons-materialdesign.html">Material Design</a></li>
                                <li><a href="icons-fontawesome.html">Font awesome</a></li>
                                <li><a href="icons-dripicons.html">Dripicons</a></li>
                                <li><a href="icons-feather.html">Feather Icons</a></li>
                            </ul>
                        </li>

                        <li class="menu-title">More</li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="mdi mdi-format-page-break"></i><span>Pages</span></a>
                            <ul class="sub-menu mm-collapse" aria-expanded="false">
                                <li><a href="pages-invoice.html">Invoice</a></li>
                                <li><a href="pages-starter.html">Starter Page</a></li>
                                <li><a href="pages-maintenance.html">Maintenance</a></li>
                                <li><a href="pages-faqs.html">FAQs</a></li>
                                <li><a href="pages-pricing.html">Pricing</a></li>
                                <li><a href="pages-login.html">Login</a></li>
                                <li><a href="pages-register.html">Register</a></li>
                                <li><a href="pages-recoverpw.html">Recover Password</a></li>
                                <li><a href="pages-lock-screen.html">Lock Screen</a></li>
                                <li><a href="pages-404.html">Error 404</a></li>
                                <li><a href="pages-500.html">Error 500</a></li>
                            </ul>
                        </li>

                        <li><a href="calendar.html" class=" waves-effect"><i class="mdi mdi-calendar-range-outline"></i><span>Calendar</span></a></li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="mdi mdi-map-marker-radius"></i><span>Maps</span></a>
                            <ul class="sub-menu mm-collapse" aria-expanded="false">
                                <li><a href="maps-google.html">Google Maps</a></li>
                                <li><a href="maps-vector.html">Vector Maps</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="mdi mdi-share-variant"></i><span>Multi Level</span></a>
                            <ul class="sub-menu mm-collapse" aria-expanded="true">
                                <li><a href="javascript: void(0);">Level 1.1</a></li>
                                <li><a href="javascript: void(0);" class="has-arrow">Level 1.2</a>
                                    <ul class="sub-menu mm-collapse" aria-expanded="true">
                                        <li><a href="javascript: void(0);">Level 2.1</a></li>
                                        <li><a href="javascript: void(0);">Level 2.2</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
                <!-- Sidebar -->
            </div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 1171px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 161px; transform: translate3d(0px, 0px, 0px); display: block;"></div></div></div>
        </div>
          <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Dashboard</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <!-- <li class="breadcrumb-item"><a href="javascript: void(0);">Xeloro</a></li>
                                            <li class="breadcrumb-item active">Dashboard</li> -->
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>