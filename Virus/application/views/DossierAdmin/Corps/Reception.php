<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="main-content">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-inbox bg-blue"></i>
                        <div class="d-inline">
                            <h5>Données MTBUY</h5>
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#"><i class="ik ik-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">MTBUY</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">MTBUY</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Retrouver-MTBUY || Produits Fournit</h3>
                    </div>
                    <div class="table-responsive">
                        <table id="data_table" class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th class="nosort">Image</th>
                                    <th>Nom-Produit</th>
                                    <th>Marque</th>
                                    <th>Qte-Produit</th>
                                    <th>Prix</th>
                                    <th>Description</th>
                                    <th>Date-Produit</th>
                                    <th>id-Fournisseur</th>
                                    <th class="nosort">&nbsp;</th>
                                    <th class="nosort">&nbsp;</th>
                                </tr>
                            </thead>
                            <?php
                            $i = 1;
                            foreach ($produitf as $pf) {
                            ?>
                                <tbody>
                                    <tr>
                                        <td><?= $i ?></td>
                                        <td><img src="<?= base_url('./images/ProduitsF/' . $pf->Image_produit); ?>" class="table-user-thumb" alt=""></td>
                                        <td><?= $pf->Nom_produit; ?></td>
                                        <td><?= $pf->Marque_produit; ?></td>
                                        <td><?= $pf->Qte_produit; ?></td>
                                        <td><?= $pf->Prix_produit; ?></td>
                                        <td><?= $pf->Description_produit; ?></td>
                                        <td><?= $pf->Date_produit; ?></td>
                                        <td><?= $pf->Fournisseur_idFournisseur; ?></td>
                                        <td><a href="<?php echo base_url("images/ProduitsF/" . $pf->Image_produit); ?>" download=""><i class="ik ik-edit-2"></i></a></td>

                                        <td><a href="Supprimer?idProduit_Fournit=<?= "$pf->idProduit_Fournit" ?>"><i class="ik ik-trash-2" onClick="return confirm('Voulez-vous Supprimer ?');"></i></a></td>
                                    </tr>
                                <?php
                                $i++;
                            }
                                ?>


                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-block">
                        <h3>Nos-Fournisseurs</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="simpletable" class="table table-striped table-bordered nowrap">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nom</th>
                                        <th>Email</th>
                                        <th>Num-Bancaire</th>
                                        <th>Adresse</th>
                                        <th>Telephone</th>
                                        <th>Motdepasse</th>
                                        <th>Confirm_motdepasse</th>
                                        <th>Date-Creation</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <?php
                                $i = 1;
                                foreach ($fournisseur as $f) {
                                ?>
                                    <tbody>
                                        <tr>
                                            <td><?= $i ?></td>
                                            <td><?= $f->Nom_fournisseur; ?></td>
                                            <td><?= $f->Email_fournisseur; ?></td>
                                            <td><?= $f->Num_Bancaire; ?></td>
                                            <td><?= $f->Adresse_fournisseur; ?></td>
                                            <td><?= $f->Tel_fournisseur; ?></td>
                                            <td><?= $f->Motdepasse; ?></td>
                                            <td><?= $f->Confirm_motdepasse; ?></td>
                                            <td><?= $f->Date_Creation; ?></td>
                                            <td>
                                                <a href="Supprimer?idFournisseur=<?= "$f->idFournisseur" ?>"><i class="ik ik-trash-2 f-16 text-red" onClick="return confirm('Voulez-vous Supprimer ?');"></i></i></a>
                                            </td>
                                        </tr>
                                    <?php
                                    $i++;
                                }
                                    ?>
                                    </tbody>

                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Nom</th>
                                            <th>Email</th>
                                            <th>Num-Bancaire</th>
                                            <th>Adresse</th>
                                            <th>Telephone</th>
                                            <th>Motdepasse</th>
                                            <th>Confirm_motdepasse</th>
                                            <th>Date-Creation</th>
                                        </tr>
                                    </tfoot>

                            </table>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-block">
                        <h3>Nos-Clients</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="simpletable" class="table table-striped table-bordered nowrap">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nom</th>
                                        <th>Prenom</th>
                                        <th>Sexe</th>
                                        <th>Email</th>
                                        <th>Adresse</th>
                                        <th>Telephone</th>
                                        <th>Motdepasse</th>
                                        <th>Etat-de-Compte</th>
                                        <th>Date-de-Creation</th>
                                        <th>Del</th>
                                        <th>Mod</th>
                                    </tr>
                                </thead>
                                <?php
                                $i = 1;
                                foreach ($compte as $c) {
                                ?>
                                    <tbody>
                                        <tr>
                                            <td><?= $i ?></td>
                                            <td><?= $c->Nom_client; ?></td>
                                            <td><?= $c->Prenom_client; ?></td>
                                            <td><?= $c->Sexe; ?></td>
                                            <td><?= $c->Email_client; ?></td>
                                            <td><?= $c->Adresse_client; ?></td>
                                            <td><?= $c->Tel_client; ?></td>
                                            <td><?= $c->Motdepasse; ?></td>
                                            <td><?= $c->Etat_de_compte; ?></td>
                                            <td><?= $c->DateCreation; ?></td>

                                            <td>
                                                <a href="Supprimers?idClient=<?= "$c->idClient" ?>"><i class="ik ik-trash-2 f-16 text-red" onClick="return confirm('Voulez-vous Supprimer ?');"></i></i></a>
                                            </td>
                                            <td>
                                                <a href="Modifier?idClient=<?= "$c->idClient" ?>"><i class="ik ik-edit-2 f-16 text-success" onClick="return confirm('Voulez-vous Modifier ?');"></i></a>
                                            </td>
                                        </tr>
                                    <?php
                                    $i++;
                                }
                                    ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Nom</th>
                                            <th>Prenom</th>
                                            <th>Sexe</th>
                                            <th>Email</th>
                                            <th>Adresse</th>
                                            <th>Telephone</th>
                                            <th>Motdepasse</th>
                                            <th>Confirm_motdepasse</th>
                                            <th>Etat-de-Compte</th>
                                            <th>Date-de-Creation</th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
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
                    <a href="javascript:void(0)" class="list-group-item" data-chat-user="Billy Black">
                        <figure class="user--online">
                            <img src="../img/users/2.jpg" class="rounded-circle" alt="">
                        </figure><span><span class="name">Billy Black</span> <span class="username">@billyblack</span> </span>
                    </a>
                    <a href="javascript:void(0)" class="list-group-item" data-chat-user="Herbert Diaz">
                        <figure class="user--online">
                            <img src="../img/users/3.jpg" class="rounded-circle" alt="">
                        </figure><span><span class="name">Herbert Diaz</span> <span class="username">@herbert</span> </span>
                    </a>
                    <a href="javascript:void(0)" class="list-group-item" data-chat-user="Sylvia Harvey">
                        <figure class="user--busy">
                            <img src="../img/users/4.jpg" class="rounded-circle" alt="">
                        </figure><span><span class="name">Sylvia Harvey</span> <span class="username">@sylvia</span> </span>
                    </a>
                    <a href="javascript:void(0)" class="list-group-item active" data-chat-user="Marsha Hoffman">
                        <figure class="user--busy">
                            <img src="../img/users/5.jpg" class="rounded-circle" alt="">
                        </figure><span><span class="name">Marsha Hoffman</span> <span class="username">@m_hoffman</span> </span>
                    </a>
                    <a href="javascript:void(0)" class="list-group-item" data-chat-user="Mason Grant">
                        <figure class="user--offline">
                            <img src="../img/users/1.jpg" class="rounded-circle" alt="">
                        </figure><span><span class="name">Mason Grant</span> <span class="username">@masongrant</span> </span>
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
            <span class="text-center text-sm-left d-md-inline-block">Copyright 2020.</span>
            <span class="float-none float-sm-right mt-1 mt-sm-0 text-center">Crafted with <i class="fa fa-heart text-danger"></i> by <a href="<?= base_url(); ?>" class="text-dark" target="_blank"></a></span>
        </div>
    </footer>
</div>
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
<script src="<?= base_url(); ?>Admin/Design/dist/js/theme.min.js"></script>
<script src="<?= base_url(); ?>Admin/Design/js/datatables.js"></script>
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