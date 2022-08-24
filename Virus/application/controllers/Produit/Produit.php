<?php 
    defined('BASEPATH')OR exit('No direct script access allowed');

    class Produit extends CI_Controller
    {
        public function __construct()
        {
            parent :: __construct();

            $this->load->helper(array('url', 'form'));
            $this->load->library('form_validation');

            $this->load->Model("ModelAdmin/Articles");
            $this->load->Model("ModelAdmin/Fournisseurs");
            $this->load->Model('Modelinternaute/Produits');

            $this->data['header'] = $this->load->view('Dossier/Tete/Head', '', true);
            $this->data['footer'] = $this->load->view('Dossier/Pied/Footer', '', true);

            $id = $this->session->idclient;
            $nomclient = $this->session->Nomclient;
            if(empty($id))
            {
                redirect("Client/Login/Authentification");
            }
        }

        public function Produits()
        {
            $this->form_validation->set_rules('search', '', 'required', array('required'=>'Veuillez-Saisir Quelque chose !'));

            if($this->form_validation->run())
            {
                $Nom_article = $this->input->post("search");

                $data = array(
                    'Nom_article'=>$Nom_article
                );

                $data=$this->Articles->Rechercher();

                echo ($data);
                redirect(site_url("Internaute/index"));

            }
            $resultat['produit'] = $this->Articles->Selection();
            $resultat['fournisseur'] = $this->Fournisseurs->Selection();
            $resultat['produitf'] = $this->Produits->Selection();

            $this->load->view('Dossier/Tete/Header', $this->data);
            $this->load->view('Dossier/Corps/produit', $resultat);
            // $this->load->view('Dossier/Pied/Footer', $this->data);
        }
    }
?>