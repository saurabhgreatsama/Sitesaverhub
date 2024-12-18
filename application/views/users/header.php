<?php
$session = $this->session->userdata('uid');
if ($session == "") {
?>
<?php redirect(base_url("loginpage")) ?>
<?php
}
?>
<?php  $session = $this->session->userdata('custom_username'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sitesaverhub Userdashboard</title>
    <!-- plugins:css -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="userdash/vendors/feather/feather.css">
    <link rel="stylesheet" href="userdash/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="userdash/vendors/css/vendor.bundle.base.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="userdash/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="userdash/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
	<link href="https://cdn.datatables.net/v/dt/jszip-3.10.1/dt-1.13.6/b-2.4.1/b-html5-2.4.1/datatables.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/v/dt/jszip-3.10.1/dt-1.13.6/b-2.4.1/b-html5-2.4.1/datatables.min.js"></script>
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="userdash/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <!-- <link rel="shortcut icon" href="userdash/images/favicon.png" /> -->
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo mr-5" href="userdashboardpage"><bold>SITESAVERHUB</bold></a>
                <a class="navbar-brand brand-logo-mini" href="userdashboardpage"><bold>S</bold></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="icon-menu"></span>
                </button>
                <ul class="navbar-nav mr-lg-2">
                </ul>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item dropdown">
                    </li>
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <!-- <img src="images/faces/face28.jpg" alt="profile" /> -->
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="profileDropdown">
                            <a class="dropdown-item">
                                <i class="ti-power-off text-primary"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="icon-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->


            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="userdashboardpage">
                            <i class="icon-grid menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false"
                            aria-controls="form-elements">
                            <i class="icon-columns menu-icon"></i>
                            <span class="menu-title">Category</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="form-elements">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link" href="usercategoryadding">Add
                                        Category</a></li>
                                <li class="nav-item"><a class="nav-link" href="usercategorylistpage">Category
                                        List</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                            aria-controls="ui-basic">
                            <i class="icon-layout menu-icon"></i>
                            <span class="menu-title">Site/Extension</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="usersiteaddingpage">Add
                                        Site/Extension</a></li>
                                <li class="nav-item"> <a class="nav-link" href="usersiteaddinglistpage">
                                        Site/Extension List</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="savesitelists">
                            <i class="icon-layout menu-icon"></i>
                            <span class="menu-title">Save Site/Extension</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="externalpage">
                            <i class="icon-layout menu-icon"></i>
                            <span class="menu-title">External Saved Links</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="usersitesuggestionpage">
                            <i class="icon-paper menu-icon"></i>
                            <span class="menu-title">Site Suggestion</span>
                        </a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" href="<?= base_url("/") ?>">
						<i class="fa fa-angle-double-left" style="font-size:24px; margin-right: 20px;"></i>
                            <span class="menu-title">Back to sites</span>
                        </a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" href="logout">
						<i class="fa fa-sign-out" style="font-size:24px; margin-right: 20px;"></i>
                            <span class="menu-title">Logout</span>
                        </a>
                    </li>
                </ul>
            </nav>
