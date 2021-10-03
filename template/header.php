<?php include "base.php"; ?>
<!DOCTYPE html>
<html lang="en" class="loading">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Convex admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Convex admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Donor's Site</title>
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo $url ;?>/app-assets/img/ico/apple-icon-60.html">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $url ;?>/app-assets/img/ico/apple-icon-76.html">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $url ;?>/app-assets/img/ico/apple-icon-120.html">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $url ;?>/app-assets/img/ico/apple-icon-152.html">
    <link rel="shortcut icon" type="image/x-icon" href="https://pixinvent.com/demo/convex-bootstrap-admin-dashboard-template/app-assets/img/ico/favicon.ico">
    <link rel="shortcut icon" type="image/png" href="<?php echo $url ;?>/app-assets/img/ico/favicon-32.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900%7CMontserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo $url ;?>/app-assets/fonts/feather/style.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $url ;?>/app-assets/fonts/simple-line-icons/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $url ;?>/app-assets/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $url ;?>/app-assets/vendors/css/perfect-scrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $url ;?>/app-assets/vendors/css/prism.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $url ;?>/app-assets/vendors/css/chartist.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $url ;?>/app-assets/css/app.css">
<!--site header-->
    <!--<style>-->
    <!--    .main-image{-->
    <!--        background-image: url("app-assets/img/d2.jpg");-->
    <!--        -webkit-background-size: cover;-->
    <!--        -moz-background-size: cover;-->
    <!--        background-size: cover;-->
    <!--        color: #000;-->
    <!--        font: 14px Arial;-->
    <!--        /*padding : 0;*/-->
    <!--        /*margin: auto;*/-->
    <!--        /*padding-right: 300px;*/-->
    <!--        margin-right: 50px;-->
    <!--        width: 970px;-->
    <!--        /*height: 100px;*/-->
    <!--    }-->
    <!--</style>-->

</head>
<body data-col="2-columns" class=" 2-columns ">
<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="wrapper">
    <div data-active-color="white" data-background-color="black" data-image="<?php echo $url; ?>/app-assets/img/sidebar-bg/01.jpg" class="app-sidebar">
        <div class="sidebar-header">
            <div class="logo clearfix"><a href="index-2.html" class="logo-text float-left">
                    <div class="logo-img"><img src="<?php echo $url; ?>/app-assets/img/logo.png" alt="Donor's Logo"/></div><span class="text align-middle">Donor's<br>&nbsp; &nbsp; &nbsp; &nbsp; Site</span></a></div>
        </div>
        <div class="sidebar-content bg-info">
            <div class="nav-container">
                <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
                    <li class="has-sub nav-item"><a href="donorDashboard.php"><i class="icon-home"></i><span data-i18n="" class="menu-title">Dashboard</span><span class="tag badge badge-pill badge-danger mt-1">2</span></a>
                    </li>
                    <li class="has-sub nav-item"><a href="#"><i class="fa fa-user"></i><span data-i18n="" class="menu-title">Profile</span></a>
                        <ul class="menu-content">
                            <li><a href="profile.php" class="menu-item">My profile</a>
                            </li>
                            <li><a href="setting.php" class="menu-item">Setting</a>
                        </ul>
                    </li>
                    <li class="has-sub nav-item"><a href="add_posts.php"><i class="fa fa-align-justify"></i><span data-i18n="" class="menu-title">Add Posts</span></a>
                    </li>
                    <li class="has-sub nav-item"><a href="edit_posts.php"><i class="fa fa-edit"></i><span data-i18n="" class="menu-title">Edit Posts</span></a>
                    </li>
                    <li class="has-sub nav-item"><a href="message.php"><i class="fa fa-envelope"></i><span data-i18n="" class="menu-title">Message</span><span class="tag badge badge-pill badge-primary mt-1">New</span></a>
                    </li>
                    <li class="has-sub nav-item"><a href="#"><i class="icon-grid"></i><span data-i18n="" class="menu-title">Recipient Posts</span></a>
                        <ul class="menu-content">
                            <li><a href="regular-table.html" class="menu-item">Regular</a>
                            </li>
                            <li><a href="extended-table.html" class="menu-item">Extended</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" nav-item"><a href="logout.html"><i class="ft-power mr-2"></i><span data-i18n="" class="menu-title">Logout</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="sidebar-background"></div>
    </div>


    <nav class="navbar navbar-expand-lg navbar-light bg-faded">
        <div class="container-fluid">
            <div class="navbar-header">
                <div class="dropdown ml-2 display-inline-block"><a id="apps" href="#" data-toggle="dropdown" class="nav-link position-relative dropdown-toggle"><i class="ft-edit blue-grey darken-4"></i><span class="mx-1 blue-grey darken-4 text-bold-400">Apps</span></a>
                    <div class="apps dropdown-menu">
                        <div class="arrow_box"><a href="chat.html" class="dropdown-item py-1"><span>Chat</span></a><a href="taskboard.html" class="dropdown-item py-1"><span>TaskBoard</span></a><a href="calendar.html" class="dropdown-item py-1"><span>Calendar</span></a></div>
                    </div>
                </div>
            </div>
            <div class="navbar-container">
                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav">
                        <li class="dropdown nav-item mr-0"><a id="dropdownBasic3" href="#" data-toggle="dropdown" class="nav-link position-relative dropdown-user-link dropdown-toggle"><span class="avatar avatar-online"><img id="navbar-avatar" src="<?php echo $url; ?>/app-assets/img/portrait/small/avatar-s-3.jpg" alt="avatar"/></span>
                                <p class="d-none">User Settings</p></a>
                            <div aria-labelledby="dropdownBasic3" class="dropdown-menu dropdown-menu-right">
                                <div class="arrow_box_right"><a href="user-profile-page.html" class="dropdown-item py-1"><i class="ft-edit mr-2"></i><span>My Profile</span></a><a href="chat.html" class="dropdown-item py-1"><i class="ft-message-circle mr-2"></i><span>My Chat</span></a><a href="javascript:;" class="dropdown-item py-1"><i class="ft-settings mr-2"></i><span>Settings</span></a>
                                    <div class="dropdown-divider"></div><a href="javascript:;" class="dropdown-item"><i class="ft-power mr-2"></i><span>Logout</span></a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="main-panel main-image">
        <div class="main-content" >
            <div class="content-wrapper">
                <div class="container-fluid">
                    <!--Statistics cards Starts-->


