<?php
    defined('BASEPATH')OR exit('No direct script access allowed');

    class Categorie extends CI_Controller
    {
        public function __construct()
        {
            parent :: __construct();

            $this->load->helper('url');
            $this->load->helper('form');

            $this->load->library('form_validation');

            $this->load->Model('ModelAdmin/Categories');
            $this->load->Model('ModelAdmin/Articles');
            $this->load->Model('ModelAdmin/Fournisseurs');
            $this->load->Model('Modelinternaute/Comptes');

            $this->data['header'] = $this->load->view('DossierAdmin/Tete/Header', '', true);
            $this->data['footer'] = $this->load->view('DossierAdmin/Pied/Footer', '', true);
        }

        public function Manipulation()
        {
            if($this->input->server("REQUEST_METHOD") == "POST")
            {
                $this->form_validation->set_rules('nom', ' ', 'trim|required', array('required'=>'Veuillez-Saisir un Nom svp !'));

                if($this->form_validation->run())
                {
                    $Nom_categorie = $this->input->post('nom');

                    $data = array(
                        'Nom_categorie' =>$Nom_categorie
                    );

                    $this->Categories->Sauvegarder($data);
                }
            }
            
            $resultat['homme'] = $this->db->query("select count(Sexe) home from Client where sexe='M'  ")->result()[0]->home;
            $resultat['femme'] = $this->db->query("select count(Sexe) femme from Client where sexe='F'  ")->result()[0]->femme;

            // var_dump($homme, $femme);
            // die;

            $resultat['categorie'] = $this->Categories->Selection();
            $resultat['produit'] = $this->Articles->Selection();
            $resultat['fournisseur'] = $this->Fournisseurs->Selection();
            $resultat['client'] = $this->Comptes->Selection();

            $this->load->view('DossierAdmin/Tete/Header', $resultat);
            $this->load->view('DossierAdmin/Corps/Produits', $resultat);
        }

        public function Modifier()
        {
            $idCategorie = $this->input->get('idCategorie');
            $resultat['categorie'] = $this->Categories->idselection($idCategorie);
            $resultat['fournisseur'] = $this->Fournisseurs->Selection();
            $resultat['client'] = $this->Comptes->Selection();

            $this->load->view("DossierAdmin/Tete/Header", $resultat);
            $this->load->view('DossierAdmin/Corps/ModCategorie');

            if($this->input->post("modifier"))
            {
                $idCategorie = $this->input->post('idcat');
                $Nom_categorie = $this->input->post("modnom");

                $data = array(
                    'idCategorie'=>$idCategorie,
                    'Nom_categorie'=>$Nom_categorie
                );

                $this->Categories->Modifier($data);

                redirect("ControllerAdmin/Produits/Categorie/Manipulation");
            }
        }

        public function Supprimer()
        {
            $idCategorie = $this->input->get('idCategorie');
            $data = $this->Categories->idselection($idCategorie);
            // unlink("./images/" .$data[0]->Image_article);
            $this->Categories->Supprimer($idCategorie);

            redirect("ControllerAdmin/Produits/Categorie/Manipulation");
        }
    }
