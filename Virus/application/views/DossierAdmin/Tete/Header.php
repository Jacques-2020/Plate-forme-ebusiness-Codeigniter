<?php
defined('BASEPATH') or exit('No direct script access allowed');

?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>MTBUY- Admin </title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="<?= base_url(); ?>favicon.ico" type="image/x-icon" />

    <link href="<?= base_url(); ?>https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url(); ?>Admin/Design/plugins/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>Admin/Design/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>Admin/Design/plugins/icon-kit/dist/css/iconkit.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>Admin/Design/plugins/ionicons/dist/css/ionicons.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>Admin/Design/plugins/perfect-scrollbar/css/perfect-scrollbar.css">
    <link rel="stylesheet" href="<?= base_url(); ?>Admin/Design/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>Admin/Design/plugins/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="<?= base_url(); ?>Admin/Design/plugins/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>Admin/Design/plugins/weather-icons/css/weather-icons.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>Admin/Design/plugins/c3/c3.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>Admin/Design/plugins/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>Admin/Design/plugins/owl.carousel/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>Admin/Design/dist/css/theme.min.css">
    <script src="<?= base_url(); ?>Admin/Design/src/js/vendor/modernizr-2.8.3.min.js"></script>
    <link href="<?= base_url(); ?>Admin/Design/summernote/summernote.css">
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->



    <div class="wrapper">
        <header class="header-top" header-theme="light">
            <div class="container-fluid">
                <div class="d-flex justify-content-between">
                    <div class="top-menu d-flex align-items-center">
                        <button type="button" class="btn-icon mobile-nav-toggle d-lg-none"><span></span></button>
                        <div class="header-search">
                            <div class="input-group">
                                <span class="input-group-addon search-close"><i class="ik ik-x"></i></span>
                                <input type="text" class="form-control">
                                <span class="input-group-addon search-btn"><i class="ik ik-search"></i></span>
                            </div>
                        </div>
                        <button type="button" id="navbar-fullscreen" class="nav-link"><i class="ik ik-maximize"></i></button>
                    </div>
                    <div class="top-menu d-flex align-items-center">
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="notiDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ik ik-bell"></i><span class="badge bg-danger">3</span></a>
                            <div class="dropdown-menu dropdown-menu-right notification-dropdown" aria-labelledby="notiDropdown">
                                <h4 class="header">Notifications</h4>
                                <div class="notifications-wrap">
                                    <a href="#" class="media">
                                        <span class="d-flex">
                                            <i class="ik ik-check"></i>
                                        </span>
                                        <span class="media-body">
                                            <span class="heading-font-family media-heading">Invitation accepted</span>
                                            <span class="media-content">Your have been Invited ...</span>
                                        </span>
                                    </a>
                                    <a href="#" class="media">
                                        <span class="d-flex">
                                            <img src="../img/users/1.jpg" class="rounded-circle" alt="">
                                        </span>
                                        <span class="media-body">
                                            <span class="heading-font-family media-heading">Steve Smith</span>
                                            <span class="media-content">I slowly updated projects</span>
                                        </span>
                                    </a>
                                    <a href="#" class="media">
                                        <span class="d-flex">
                                            <i class="ik ik-calendar"></i>
                                        </span>
                                        <span class="media-body">
                                            <span class="heading-font-family media-heading">To Do</span>
                                            <span class="media-content">Meeting with Nathan on Friday 8 AM ...</span>
                                        </span>
                                    </a>
                                </div>
                                <div class="footer"><a href="javascript:void(0);">See all activity</a></div>
                            </div>
                        </div>


                        <div class="top-menu d-flex align-items-center">
                            <div class="dropdown">
                                <?php
                                foreach ($client as $c); {
                                ?>
                                    <a class="nav-link dropdown-toggle" href="#" id="notiDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ik ik-user"></i><span class="badge bg-success"><?= count($client); ?></span></a>
                                <?php
                                }
                                ?>
                                <div class="dropdown-menu dropdown-menu-right notification-dropdown" aria-labelledby="notiDropdown">
                                    <h4 class="header">Statistique - Client</h4>
                                    <div class="notifications-wrap">
                                        
                                        <a href="#" class="media">
                                            <span class="d-flex">
                                                <i class="ik ik-check"></i>
                                            </span>
                                            <span class="media-body">
                                                <span class="heading-font-family media-heading">Hommes accepter</span>
                                                <span class="badge bg-success"> <?= $homme; ?></span>
                                            </span>
                                        </a>
                                        
                                        <a href="#" class="media">
                                            <span class="d-flex">
                                                <i class="ik ik-check"></i>
                                            </span>
                                            <span class="media-body">
                                                <span class="heading-font-family media-heading">Femmes accepter</span>
                                                <span class="badge bg-success"><?= $femme; ?></span>
                                            </span>
                                        </a>

                                    </div>
                                    <div class="footer"><a href="<?= base_url(); ?>javascript:void(0);">See all activity</a></div>
                                </div>
                            </div>



                            <div class="top-menu d-flex align-items-center">
                                <div class="dropdown">
                                    <?php
                                    foreach ($fournisseur as $f); {
                                    ?>
                                        <a class="nav-link dropdown-toggle" href="#" id="notiDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ik ik-users"></i><span class="badge bg-danger"><?= count($fournisseur); ?></span></a>
                                    <?php
                                    }
                                    ?>
                                    <div class="dropdown-menu dropdown-menu-right notification-dropdown" aria-labelledby="notiDropdown">
                                        <h4 class="header">Statistique - Fournisseur</h4>
                                        <div class="notifications-wrap">
                                            <?php
                                            foreach ($fournisseur as $f) {
                                            ?>
                                                <a href="#" class="media">
                                                    <span class="d-flex">
                                                        <i class="ik ik-check"></i>
                                                    </span>

                                                    <span class="media-body">
                                                        <span class="heading-font-family media-heading"><?= $f->Nom_fournisseur; ?></span>
                                                        <span class="media-content"><?= $f->Date_Creation; ?></span>
                                                    </span>

                                                </a>
                                            <?php
                                            }
                                            ?>

                                        </div>
                                        <div class="footer"><a href="javascript:void(0);">Voir Tous les Comptes</a></div>
                                    </div>
                                </div>


                                <button type="button" class="nav-link ml-10 right-sidebar-toggle"><i class="ik ik-message-square"></i><span class="badge bg-success">3</span></button>
                                <div class="dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="menuDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ik ik-plus"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right menu-grid" aria-labelledby="menuDropdown">
                                        <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Dashboard"><i class="ik ik-bar-chart-2"></i></a>
                                        <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Message"><i class="ik ik-mail"></i></a>
                                        <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Accounts"><i class="ik ik-users"></i></a>
                                        <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Sales"><i class="ik ik-shopping-cart"></i></a>
                                        <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Purchase"><i class="ik ik-briefcase"></i></a>
                                        <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Pages"><i class="ik ik-clipboard"></i></a>
                                        <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Chats"><i class="ik ik-message-square"></i></a>
                                        <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Contacts"><i class="ik ik-map-pin"></i></a>
                                        <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Blocks"><i class="ik ik-inbox"></i></a>
                                        <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Events"><i class="ik ik-calendar"></i></a>
                                        <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Notifications"><i class="ik ik-bell"></i></a>
                                        <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="More"><i class="ik ik-more-horizontal"></i></a>
                                    </div>
                                </div>
                                <button type="button" class="nav-link ml-10" id="apps_modal_btn" data-toggle="modal" data-target="#appsModal"><i class="ik ik-grid"></i></button>
                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="avatar" src="<?= base_url("images/AvatarAdmin/" .$this->session->avataradmin); ?>" alt=""></a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                        <a class="dropdown-item" href="profile.html"><i class="ik ik-user dropdown-icon"></i> Profile</a>
                                        <a class="dropdown-item" href="#"><i class="ik ik-settings dropdown-icon"></i> Settings</a>
                                        <a class="dropdown-item" href="#"><span class="float-right"><span class="badge badge-primary">6</span></span><i class="ik ik-mail dropdown-icon"></i> Inbox</a>
                                        <a class="dropdown-item" href="#"><i class="ik ik-navigation dropdown-icon"></i> Message</a>
                                        <a class="dropdown-item" href="<?= site_url('ControllerAdmin/Login/Login/Authentification'); ?>"><i class="ik ik-power dropdown-icon"></i> Déconnection</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
        </header>


        <div class="page-wrap">
            <div class="app-sidebar colored">
                <div class="sidebar-header">
                    <a class="header-brand" href="<?= site_url('ControllerAdmin/Login/Login/Authentification'); ?>">
                        <div class="logo-img">
                            <img src="<?= base_url(); ?>Admin/Design/src/img/brand-white.svg" class="header-brand-img" alt="lavalite">
                        </div>
                        <span class="text"><?= $this->session->Nomadmin; ?></span>
                    </a>
                    <button type="button" class="nav-toggle"><i data-toggle="expanded" class="ik ik-toggle-right toggle-icon"></i></button>
                    <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
                </div>

                <div class="sidebar-content">
                    <div class="nav-container">
                        <nav id="main-menu-navigation" class="navigation-main">
                            <div class="nav-lavel">Navigation</div>
                            <div class="nav-item active">
                                <a href="<?= base_url(); ?>"><i class="ik ik-bar-chart-2"></i><span>Dashboard-Internaute</span></a>
                            </div>
                            <div class="nav-lavel">Plate-forme-MTBUY</div>
                            <div class="nav-item has-sub">
                                <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Administrateur</span> <span class="badge badge-danger"><?= $this->session->Nomadmin?></span></a>
                                <div class="submenu-content">
                                    <a href="<?= site_url('ControllerAdmin/Produits/Categorie/Manipulation'); ?>" class="menu-item"><i class="ik ik-box"></i><span>Nos-Produits</span></a>
                                    <a href="<?= site_url('ControllerAdmin/Reception/Receptions'); ?>" class="menu-item"><i class="ik ik-inbox"></i><span>Reception de données</span></a>
                                    <!-- <a href="pages/widget-data.html" class="menu-item">Data</a>
                                        <a href="pages/widget-chart.html" class="menu-item">Chart Widget</a> -->

                                    <div class="nav-item has-sub">
                                        <a href="#"><i class="ik ik-edit"></i><span>Action-Publiciter</span></a>
                                        <div class="submenu-content">
                                            <a href="<?= site_url("ControllerAdmin/Publiciter/Publiciter/Ajouter"); ?>" class="menu-item">Publiciter</a>
                                            <a href="<?= site_url(); ?>pages/form-addon.html" class="menu-item">Add-On</a>
                                            <a href="<?= site_url(); ?>pages/form-advance.html" class="menu-item">Advance</a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="nav-item has-sub">
                                <a href="javascript:void(0)"><i class="ik ik-lock"></i><span>Authentication</span></a>
                                <div class="submenu-content">
                                    <a href="<?= site_url('ControllerAdmin/Login/Login/Authentification'); ?>" class="menu-item">Login</a>
                                    <a href="<?= site_url('ControllerAdmin/Publiciter/Admin/Compte'); ?>" class="menu-item">Register</a>
                                    <a href="pages/forgot-password.html" class="menu-item">Forgot Password</a>
                                </div>
                            </div>


                        </nav>
                    </div>
                </div>
            </div>
            <div class="main-content">
                <div class="container-fluid">

                    <aside class="right-sidebar">
                        <div class="sidebar-chat" data-plugin="chat-sidebar">
                            <div class="sidebar-chat-info">
                                <h6>Chat List</h6>
                                <form class="mr-t-10">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Search for friends ...">
                                        <i class="ik ik-search"></i>
                                    </div>
                                </form>
                            </div>
                            <div class="chat-list">
                                <div class="list-group row">
                                    <a href="javascript:void(0)" class="list-group-item" data-chat-user="Tshibang-Mukeng">
                                        <figure class="user--online">
                                            <img src="<?= base_url(); ?>Admin/Design/img/users/1.jpg" class="rounded-circle" alt="">
                                        </figure><span><span class="name">Tshibang-Mukeng</span> <span class="username">Tshibang-Mukeng</span> </span>
                                    </a>

                                    <a href="javascript:void(0)" class="list-group-item" data-chat-user="Henry-Tumba">
                                        <figure class="user--offline">
                                            <img src="<?= base_url(); ?>Admin/Design/img/users/2.jpg" class="rounded-circle" alt="">
                                        </figure><span><span class="name">Henry-Tumba</span> <span class="username">Tshibang-Mukeng</span></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </aside>

                    <div class="chat-panel" hidden>
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <a href="javascript:void(0);"><i class="ik ik-message-square text-success"></i></a>
                                <span class="user-name">John Doe</span>
                                <button type="button" class="close" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="card-body">
                                <div class="widget-chat-activity flex-1">
                                    <div class="messages">


                                        <div class="message media reply">
                                            <figure class="user--busy">
                                                <a href="#">
                                                    <img src="<?= base_url(); ?>Admin/Design/img/users/5.jpg" class="rounded-circle" alt="">
                                                </a>
                                            </figure>
                                            <div class="message-body media-body">
                                                <p>There's a cheesy incarnation waiting for you no matter what you palete preferences are.</p>
                                            </div>
                                        </div>
                                        <div class="message media">
                                            <figure class="user--online">
                                                <a href="#">
                                                    <img src="<?= base_url(); ?>Admin/Design/img/users/1.jpg" class="rounded-circle" alt="">
                                                </a>
                                            </figure>
                                            <div class="message-body media-body">
                                                <p>If you are a vegan, we are sorry for you loss.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?= form_open(site_url("ControllerAdmin/Discussion/disc1/jmt01100jmt")); ?>
                            <div class="d-flex justify-content-end">
                                <textarea class="border-0 flex-1" name="message" rows="1" placeholder="Type your message here"></textarea>
                                <button class="btn btn-icon" type="submit"><i class="ik ik-arrow-right text-success"></i></button>
                            </div>
                            <div>
                                <input type="hidden" name="ad" id="" value="1">
                            </div>
                            <?= form_close(); ?>
                        </div>
                    </div>