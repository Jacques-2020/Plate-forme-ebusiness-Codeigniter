<?php 
    defined('BASEPATH')OR exit('No direct script access allowed');

    class Reception extends CI_Controller
    {
        public function __construct()
        {
            parent :: __construct();

            $this->load->library('form_validation');

            $this->load->helper('url');
            $this->load->helper('form');

            $this->load->library('form_validation');

            $this->load->Model('ModelAdmin/Categories');
            $this->load->Model('ModelAdmin/Articles');
            $this->load->Model('Modelinternaute/Produits');
            $this->load->Model('ModelAdmin/Fournisseurs');
            $this->load->Model('Modelinternaute/Comptes');

            $this->data['header'] = $this->load->view('DossierAdmin/Tete/Header', '', true);
            $this->data['footer'] = $this->load->view('DossierAdmin/Pied/Footer', '', true);

        }

        public function Receptions()
        {
            $resultat['homme'] = $this->db->query("select count(Sexe) home from Client where sexe='M'  ")->result()[0]->home;
            $resultat['femme'] = $this->db->query("select count(Sexe) femme from Client where sexe='F'  ")->result()[0]->femme;

            $resultat['compte'] = $this->Comptes->Selection();
            $resultat['fournisseur'] = $this->Fournisseurs->Selection();
            
            $resultat['produitf'] = $this->Produits->Selection();
            $resultat['client'] = $this->Comptes->Selection();

            $this->load->view('DossierAdmin/Tete/Header', $resultat);
            $this->load->view('DossierAdmin/Corps/Reception', $resultat);
        }

        public function Modifier()
        {
            $idClient = $this->input->get('idClient');
            $resultat['client'] = $this->Comptes->idselection($idClient);
            // $resultat['client'] = $this->Comptes->Selection();
            $resultat['compte'] = $this->Comptes->Selection();
            $resultat['fournisseur'] = $this->Fournisseurs->Selection();
            $resultat['produitf'] = $this->Produits->Selection();
            $resultat['client'] = $this->Comptes->Selection();

            $this->load->view('DossierAdmin/Tete/Header', $resultat);
            $this->load->view('DossierAdmin/Corps/ModClient', $resultat);

            if($this->input->post('modifier'))
            {
                $idClient=$this->input->post('idcl');
                $Etat_de_compte = $this->input->post('modetat');

                $data = array(
                    'idClient'=>$idClient,
                    'Etat_de_compte'=>$Etat_de_compte
                );

                $this->Comptes->Modifier($data);

                redirect(site_url("ControllerAdmin/Reception/Receptions"));
            }
        }

        public function Supprimer()
        {
            $idFournisseur = $this->input->get('idFournisseur');
            $data = $this->Fournisseurs->idselection($idFournisseur);
            unlink('./images/ProduitsF/' .$data[0]->Image_produit);
            $this->Fournisseurs->Supprimer($idFournisseur);

            redirect(site_url("ControllerAdmin/Reception/Receptions"));
        }

        public function Supprimers()
        {
            $idClient = $this->input->get('idClient');
            $data = $this->Comptes->idselection($idClient);
            $this->Comptes->Supprimer($idClient);

            redirect(site_url("ControllerAdmin/Reception/Receptions"));
        }
        
    }
?>