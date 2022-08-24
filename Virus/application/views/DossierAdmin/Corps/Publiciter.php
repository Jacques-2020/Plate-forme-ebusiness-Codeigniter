<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="page-wrap">

    <div class="main-content">
        <div class="container-fluid">
            <div class="page-header">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="page-header-title">
                            <i class="ik ik-layers bg-blue"></i>
                            <div class="d-inline">
                                <h5>Espace de Publiciter</h5>
                                <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <nav class="breadcrumb-container" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="../index.html"><i class="ik ik-home"></i></a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#">Widgets</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Espace de Publiciter</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- product and new customar start -->
                <div class="col-xl-4 col-md-6">
                    <div class="card new-cust-card">
                        <div class="card-header">
                            <h3>Création-Compte-Admin</h3>
                            <div class="card-header-right">
                                <ul class="list-unstyled card-option">
                                    <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                    <li><i class="ik ik-minus minimize-card"></i></li>
                                    <li><i class="ik ik-x close-card"></i></li>
                                </ul>
                            </div>
                        </div>

                        <div class="card-body">

                            <?php echo form_open_multipart(site_url('ControllerAdmin/Publiciter/Admin/Compte')); ?>
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nom</label>
                                <div class="col-sm-9">
                                    <input type="text" name="nom" class="form-control" id="exampleInputUsername2" placeholder="Nom Admin ...">
                                    <span class="text-danger"><?php echo form_error('nom'); ?> </span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="text" name="email" class="form-control" id="exampleInputUsername2" placeholder="Email Admin ...">
                                    <span class="text-danger"><?php echo form_error('email'); ?> </span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Mot de passe</label>
                                <div class="col-sm-9">
                                    <input type="text" name="motdepasse" class="form-control" id="exampleInputUsername2" placeholder="Mot de passe Admin ...">
                                    <span class="text-danger"><?php echo form_error('motdepasse'); ?> </span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Avatar</label>
                                <div class="col-sm-9">
                                    <input type="file" name="toph" class="form-control" id="exampleInputUsername2">
                                    <span class="text-danger"><?php echo form_error('email'); ?> </span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input">
                                    <span class="custom-control-label">&nbsp;Remember me</span>
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button class="btn btn-light">Cancel</button>
                            <?= form_close(); ?>
                        </div>
                    </div>

                </div>
                <div class="col-xl-8 col-md-6">
                    <div class="card table-card">
                        <div class="card-header">
                            <h3>Administrateur</h3>
                            <div class="card-header-right">
                                <ul class="list-unstyled card-option">
                                    <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                    <li><i class="ik ik-minus minimize-card"></i></li>
                                    <li><i class="ik ik-x close-card"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-block">
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Avatar</th>
                                            <th>Nom-admin</th>
                                            <th>Email-Admin</th>
                                            <th>Mot-de-Passe</th>
                                            <th>Action</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    $i = 1;
                                    foreach ($admin as $a) {
                                    ?>
                                        <tbody>
                                            <tr>
                                                <td><?= $i ?></td>
                                                <td><img src="<?= base_url('./images/AvatarAdmin/' . $a->Avatar); ?>" class="table-user-thumb" alt=""></td>
                                                <td><?= $a->Nom_admin; ?></td>
                                                <td><?= $a->Email_admin; ?></td>
                                                <td><?= $a->Motdepasse_admin; ?></td>
                                                <td><a href="Modifier?idAdministrateur=<?= "$a->idAdministrateur" ?>"><i class="ik ik-edit f-16 mr-15 text-green" onClick="return confirm('Voulez-vous Modifier ?');"></i></a>
                                                <td><a href="Supprimer?idAdministrateur=<?= "$a->idAdministrateur" ?>"><i class="ik ik-trash-2 f-16 text-red" onClick="return confirm('Voulez-vous Supprimer ?');"></i></a></td>
                                                </td>
                                            </tr>
                                        </tbody>
                                    <?php
                                        $i++;
                                    }
                                    ?>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- product and new customar end -->


                <div class=" col-md-12">
                    <div class="card table-card">
                        <div class="card-header">
                            <div class="card-body">
                                <?php echo form_open_multipart('ControllerAdmin/Publiciter/Publiciter/Ajouter'); ?>

                                <div class="form-group row">
                                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Titre-Publiciter</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="titre" class="form-control" id="exampleInputUsername2" placeholder="Titre-Publiciter ...">
                                        <span class="text-danger"><?php echo form_error('titre'); ?> </span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Image-Publiciter</label>
                                    <div class="col-sm-9">
                                        <input type="file" name="img" class="form-control" id="exampleInputUsername2">
                                        <span class="text-danger"><?php echo form_error('img'); ?> </span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Description-Publiciter</label>
                                    <div class="col-sm-9">

                                        <textarea name="description" class="form-control" id="exampleInputUsername2" placeholder="Description-Publiciter..." id="" cols="30" rows="10"></textarea>
                                        <span class="text-danger"><?php echo form_error('description'); ?> </span>
                                    </div>
                                </div>

                                <div>
                                    <input type="hidden" name="idad" value="<?= $this->session->idadmin; ?>">
                                </div>

                                <div class="text-center">
                                    <label class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input">
                                        <span class="custom-control-label">&nbsp;Remember me</span>
                                    </label>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary mr-2">Ajouter</button>
                                    <button class="btn btn-light">Cancel</button>
                                </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Customer overview start -->
                <div class="col-md-12">
                    <div class="card table-card">


                        <div class="card-header">
                            <h3>Nos Publiciter</h3>
                            <div class="card-header-right">
                                <ul class="list-unstyled card-option">
                                    <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                    <li><i class="ik ik-minus minimize-card"></i></li>
                                    <li><i class="ik ik-x close-card"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Titre-publiciter</th>

                                            <th>Image</th>
                                            <th>Description</th>
                                            <th>Date-Publiciter</th>
                                            <th>Id-Administrateur</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    $i = 1;
                                    foreach ($publiciter as $pb) {
                                    ?>
                                        <tbody>
                                            <tr>
                                                <td><?= $i ?></td>
                                                <td><?= $pb->Titre_publiciter; ?></td>

                                                <td><img src="<?php echo base_url('images/Produits/' . $pb->Image_publiciter); ?>" alt="" class="img-fluid img-20"></td>
                                                <td><?= $pb->Description_publiciter; ?></td>
                                                <td><?= $pb->Date_publiciter; ?></td>
                                                <td><?= $pb->Administrateur_idAdministrateur; ?></td>
                                                <td>
                                                    <a href="Modifier?idPubliciter=<?= "$pb->idPubliciter;" ?>"><i class="ik ik-edit f-16 mr-15 text-green" onClick="return confirm('Voulez-vous Modifier ?');"></i></a>
                                                </td>
                                                <td>
                                                    <a href="Supprimer?idPubliciter=<?= "$pb->idPubliciter;" ?>"><i class="ik ik-trash-2 f-16 text-red" onClick="return confirm('Voulez-vous Supprimer ?');"></i></a>
                                                </td>
                                            </tr>

                                        </tbody>
                                    <?php
                                        $i++;
                                    }
                                    ?>
                                </table>
                            </div>


                        </div>
                    </div>



                </div>
            </div>
        </div>
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
                        <a href="javascript:void(0)" class="list-group-item" data-chat-user="Gene Newman">
                            <figure class="user--online">
                                <img src="../img/users/1.jpg" class="rounded-circle" alt="">
                            </figure><span><span class="name">Gene Newman</span> <span class="username">@gene_newman</span> </span>
                        </a>


                        <a href="javascript:void(0)" class="list-group-item" data-chat-user="Shelly Sullivan">
                            <figure class="user--offline">
                                <img src="../img/users/2.jpg" class="rounded-circle" alt="">
                            </figure><span><span class="name">Shelly Sullivan</span> <span class="username">@shelly</span></span>
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
                                <figure class="user--online">
                                    <a href="#">
                                        <img src="../img/users/3.jpg" class="rounded-circle" alt="">
                                    </a>
                                </figure>
                                <div class="message-body media-body">
                                    <p>Epic Cheeseburgers come in all kind of styles.</p>
                                </div>
                            </div>
                            <div class="message media">
                                <figure class="user--online">
                                    <a href="#">
                                        <img src="../img/users/1.jpg" class="rounded-circle" alt="">
                                    </a>
                                </figure>
                                <div class="message-body media-body">
                                    <p>Cheeseburgers make your knees weak.</p>
                                </div>
                            </div>
                            <div class="message media reply">
                                <figure class="user--offline">
                                    <a href="#">
                                        <img src="../img/users/5.jpg" class="rounded-circle" alt="">
                                    </a>
                                </figure>
                                <div class="message-body media-body">
                                    <p>Cheeseburgers will never let you down.</p>
                                    <p>They'll also never run around or desert you.</p>
                                </div>
                            </div>
                            <div class="message media">
                                <figure class="user--online">
                                    <a href="#">
                                        <img src="../img/users/1.jpg" class="rounded-circle" alt="">
                                    </a>
                                </figure>
                                <div class="message-body media-body">
                                    <p>A great cheeseburger is a gastronomical event.</p>
                                </div>
                            </div>
                            <div class="message media reply">
                                <figure class="user--busy">
                                    <a href="#">
                                        <img src="../img/users/5.jpg" class="rounded-circle" alt="">
                                    </a>
                                </figure>
                                <div class="message-body media-body">
                                    <p>There's a cheesy incarnation waiting for you no matter what you palete preferences are.</p>
                                </div>
                            </div>
                            <div class="message media">
                                <figure class="user--online">
                                    <a href="#">
                                        <img src="../img/users/1.jpg" class="rounded-circle" alt="">
                                    </a>
                                </figure>
                                <div class="message-body media-body">
                                    <p>If you are a vegan, we are sorry for you loss.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <form action="javascript:void(0)" class="card-footer" method="post">
                    <div class="d-flex justify-content-end">
                        <textarea class="border-0 flex-1" rows="1" placeholder="Type your message here"></textarea>
                        <button class="btn btn-icon" type="submit"><i class="ik ik-arrow-right text-success"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <footer class="footer">
            <div class="w-100 clearfix">
                <span class="textenter text-sm-left d-md-inline-block">Copyright © 2018 ThemeKit v1.0. All Rights Reserved.</span>
                <span class="float-none float-sm-right mt-1 mt-sm-0 textenter">Crafted with <i class="fa fa-heart text-danger"></i> by <a href="http://lavalite.org/" class="text-dark" target="_blank">Lavalite</a></span>
            </div>
        </footer>
    </div>





    <div class="modal fade apps-modal" id="appsModal" tabindex="-1" role="dialog" aria-labelledby="appsModalLabel" aria-hidden="true" data-backdrop="false">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="ik ik-x-circle"></i></button>
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="quick-search">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 ml-auto mr-auto">
                                <div class="input-wrap">
                                    <input type="text" id="quick-search" class="form-control" placeholder="Search..." />
                                    <i class="ik ik-search"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-body d-flex align-items-center">
                    <div class="container">
                        <div class="apps-wrap">
                            <div class="app-item">
                                <a href="#"><i class="ik ik-bar-chart-2"></i><span>Dashboard</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-mail"></i><span>Message</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-users"></i><span>Accounts</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-shopping-cart"></i><span>Sales</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-briefcase"></i><span>Purchase</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-server"></i><span>Menus</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-clipboard"></i><span>Pages</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-message-square"></i><span>Chats</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-map-pin"></i><span>Contacts</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-box"></i><span>Blocks</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-calendar"></i><span>Events</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-bell"></i><span>Notifications</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-pie-chart"></i><span>Reports</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-layers"></i><span>Tasks</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-edit"></i><span>Blogs</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-settings"></i><span>Settings</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-more-horizontal"></i><span>More</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <script src="<?= base_url(); ?>https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script>
            window.jQuery || document.write('<script src="<?= base_url(); ?>Admin/Design/src/js/vendor/jquery-3.3.1.min.js"><\/script>')
        </script>
        <script src="<?= base_url(); ?>Admin/Design/plugins/popper.js/dist/umd/popper.min.js"></script>
        <script src="<?= base_url(); ?>Admin/Design/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="<?= base_url(); ?>Admin/Design/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
        <script src="<?= base_url(); ?>Admin/Design/plugins/screenfull/dist/screenfull.js"></script>
        <script src="<?= base_url(); ?>Admin/Design/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="<?= base_url(); ?>Admin/Design/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="<?= base_url(); ?>Admin/Design/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="<?= base_url(); ?>Admin/Design/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
        <script src="<?= base_url(); ?>Admin/Design/plugins/jvectormap/jquery-jvectormap.min.js"></script>
        <script src="<?= base_url(); ?>Admin/Design/plugins/jvectormap/tests/assets/jquery-jvectormap-world-mill-en.js"></script>
        <script src="<?= base_url(); ?>Admin/Design/plugins/moment/moment.js"></script>
        <script src="<?= base_url(); ?>Admin/Design/plugins/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js"></script>
        <script src="<?= base_url(); ?>Admin/Design/plugins/d3/dist/d3.min.js"></script>
        <script src="<?= base_url(); ?>Admin/Design/plugins/c3/c3.min.js"></script>
        <script src="<?= base_url(); ?>Admin/Design/js/tables.js"></script>
        <script src="<?= base_url(); ?>Admin/Design/js/widgets.js"></script>
        <script src="<?= base_url(); ?>Admin/Design/js/charts.js"></script>
        <script src="<?= base_url(); ?>Admin/Design/dist/js/theme.min.js"></script>
        <!-- <script src="<?= base_url(); ?>Admin/Design/summernote/summernote.css"></script> -->
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b, o, i, l, e, r) {
                b.GoogleAnalyticsObject = l;
                b[l] || (b[l] =
                    function() {
                        (b[l].q = b[l].q || []).push(arguments)
                    });
                b[l].l = +new Date;
                e = o.createElement(i);
                r = o.getElementsByTagName(i)[0];
                e.src = '<?= base_url(); ?>https://www.google-analytics.com/analytics.js';
                r.parentNode.insertBefore(e, r)
            }(window, document, 'script', 'ga'));
            ga('create', 'UA-XXXXX-X', 'auto');
            ga('send', 'pageview');
        </script>
        </body>

        </html>