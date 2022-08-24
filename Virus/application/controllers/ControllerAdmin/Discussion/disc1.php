<?php
    defined('BASEPATH')OR exit('No direct script access allowed');

    class disc1 extends CI_Controller
    {
        public function __construct()
        {
            parent :: __construct();

            $this->load->helper('url');
            $this->load->helper('form');

            $this->load->library('form_validation');

            $this->load->Model("Modelinternaute/Comptes");
            $this->load->Model("ModelAdmin/Fournisseurs");
            $this->load->Model("ModelAdmin/Discussions");

            $this->data['header'] = $this->load->view('DossierAdmin/Tete/Header', '', true);
            $this->data['footer'] = $this->load->view('DossierAdmin/Pied/Footer', '', true);
           
        }

        public function jmt01100jmt()
        {
            $Message = $this->input->post('message');
            $Source = $this->input->post('ad');

            $data = array(
                'Message'=>$Message,
                'Source'=>$Source,
                'DateMessage'=>Date('d-M-Y a H:i:s')
            );

            $this->Discussions->Sauvegarder($data);
            // redirect(site_url("ControllerAdmin/Accueil/Accueil/Accueils"));

            $resultat['client'] = $this->Comptes->Selection();
            $resultat['fournisseur'] = $this->Fournisseurs->Selection();
            
            $this->load->view('DossierAdmin/Tete/Header', $resultat);
            $this->load->view('DossierAdmin/Corps/Accueil');
        }
            
    }