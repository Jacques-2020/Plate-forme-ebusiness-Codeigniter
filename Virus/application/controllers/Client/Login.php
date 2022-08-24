<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->library('form_validation');
        $this->load->helper(array('url', 'form'));
        // $this->load->session();

        $this->load->Model("ModelAdmin/Articles");
        $this->load->Model("ModelAdmin/Fournisseurs");
        $this->load->Model('Modelinternaute/Produits');

        $this->data['header'] = $this->load->view('Dossier/Tete/Header', '', true);
        $this->data['footer'] = $this->load->view('Dossier/Pied/Foot', '', true);
    }

    public function Authentification()
    {
        $this->data['titre'] = "Authentification";

        // var_dump($_POST);die;

        $this->form_validation->set_rules('email', '', 'required', array('required' => 'Veuillez-Saisir Un mail !'));
        $this->form_validation->set_rules('motdepasse', '', 'required', array('required' => 'Veuillez-Saisir Un Mot de passe !'));
        // $this->form_validation->set_rules('fournisseur', '', 'required', array('required' => 'Veuillez-Saisir Un Mot de passe !'));

        if ($this->form_validation->run()) {

            // $nom_fourniseur = $this->input->post('fournisseur');
            $Email_client = $this->input->post('email');
            $Motdepasse = $this->input->post('motdepasse');
            $Motdepasse = md5($Motdepasse);

            $query = $this->db->query("select * from Client where Email_client='$Email_client' and Motdepasse='$Motdepasse' and Etat_de_compte='1'");
            
            $row = $query->result();

            if (count($row)>0 ) {
                $row = $row[0];

                $fourniseur = $this->input->post('fournisseur');
                $this->session->set_userdata(
                    [
                        'idclient' => $row->idClient,
                        'Nomclient' => $row->Nom_client,
                        // 'fournisseur' => $fourniseur
                    ]
                );

                // $fourniseur =  $this->db->get('Fournisseur')->result()[0]->Nom_fournisseur;

                // var_dump($fourniseur);
                // die;

                $resultat['produit'] = $r = $this->Articles->Selection($fourniseur);

                // var_dump($r, $fourniseur, $_POST);
                // die;

                $resultat['fournisseur'] = $this->Fournisseurs->Selection();
                $resultat['produitf'] = $this->Produits->Selection();

                $this->load->view('Dossier/Tete/Header', $this->data);
                $this->load->view('Dossier/Corps/produit', $resultat);
                // $this->load->view('Dossier/Pied/Footer', $this->data);
                // redirect('Produit/Produit/Produits');
            } 
            else 
            {
                $this->session->set_flashdata('error', 'Email ou Mot de passe Incorrect !');

                
                $resultat['produit'] = $this->Articles->Selection();
                $resultat['fournisseur'] = $this->Fournisseurs->Selection();
                $resultat['produitf'] = $this->Produits->Selection();
                

                $this->load->view('Dossier/Tete/Header', $this->data);
                $this->load->view('Dossier/Corps/login', $resultat);
            }
        } 
        else 
        {
            $resultat['produit'] = $this->Articles->Selection();
            $resultat['fournisseur'] = $this->Fournisseurs->Selection();
            $resultat['produitf'] = $this->Produits->Selection();

            $this->load->view('Dossier/Tete/Header', $this->data);
            $this->load->view('Dossier/Corps/login', $resultat);

            // redirect($_SERVER['HTTP_REFERER']);
            // exit;
            // $this->load->view('Dossier/Tete/Head', $this->data);

        }
        // $this->load->view('Dossier/Corps/login', $this->data);
    }
}
