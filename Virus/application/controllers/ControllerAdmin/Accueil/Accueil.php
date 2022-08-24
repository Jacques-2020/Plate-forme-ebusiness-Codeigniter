<?php 
    defined('BASEPATH')OR exit('No direct script access allowed');

    class Accueil extends CI_Controller
    {
        public function __construct()
        {
            parent :: __construct();

            $this->load->helper('url');
            $this->load->helper('form');

            $this->load->library('form_validation');

            $this->load->Model("Modelinternaute/Comptes");
            $this->load->Model("ModelAdmin/Fournisseurs");

            $this->data['header'] = $this->load->view('DossierAdmin/Tete/Header', '', true);
            $this->data['footer'] = $this->load->view('DossierAdmin/Pied/Footer', '', true);

            $id = $this->session->idadmin;
            $nomadmin = $this->session->Nomadmin;
            if(empty($id))
            {
                redirect("ControllerAdmin/Publiciter/Admin/Authentification");
            }
            
        }

        public function Accueils()
        {
            $resultat['client'] = $this->Comptes->Selection();
            $resultat['fournisseur'] = $this->Fournisseurs->Selection();
            
            $this->load->view('DossierAdmin/Tete/Header', $resultat);
            $this->load->view('DossierAdmin/Corps/Accueil');
        }
    }
?>