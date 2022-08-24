<?php 
    defined('BASEPATH')OR exit('No direct script access allowed');

    class Compte extends CI_Controller
    {
        public function __construct()
        {
            parent :: __construct();

            $this->load->library('form_validation');

            $this->load->Model('Modelinternaute/Fournisseurs');

            $this->data['header'] = $this->load->view('Dossier/Tete/Head', '', true);
            $this->data['footer'] = $this->load->view('Dossier/Pied/Footer', '', true);
        }

        public function CreerCompte()
        {
            if($this->input->server("REQUEST_METHOD") == "POST")
            {
                $this->form_validation->set_rules('nom', '', 'trim|required|alpha_numeric', array('required'=>'Veuillez-Saisir le Nom !'));
                $this->form_validation->set_rules('email', '', 'required|is_unique[Fournisseur.Email_fournisseur]', array('required'=>'Veuillez-Saisir email svp !'));
                $this->form_validation->set_rules('numbancaire', '', 'trim|required|alpha_numeric', array('required'=>'Veuillez-Saisir un Numero Bancaire !'));
                $this->form_validation->set_rules('adresse', '', 'required', array('required'=>'Veuillez-Saisir Adresse !'));
                $this->form_validation->set_rules('telephone', '', 'required|is_unique[Fournisseur.Tel_fournisseur]', array('required'=>'Veuillez-Saisir un Numero Telephone !'));
                $this->form_validation->set_rules('motdepasse', '', 'trim|required|min_length[5]|max_length[8]', array('required'=>'Veuillez-Saisir le Mot de passe !'));
                $this->form_validation->set_rules('confirm_motdepasse', '', 'trim|required|min_length[5]|max_length[8]', array('required'=>'Veuillez-Confirmer le Mot de passe !'));

                if($this->form_validation->run())
                {
                    $Nom_fournisseur = $this->input->post('nom');
                    $Email_fournisseur = $this->input->post('email');
                    $Num_Bancaire = $this->input->post('numbancaire');
                    $Adresse_fournisseur = $this->input->post('adresse');
                    $Tel_fournisseur = $this->input->post('telephone');
                    $Motdepasse = $this->input->post('motdepasse');
                    $Confirm_motdepasse = $this->input->post('confirm_motdepasse');

                    $data = array(
                        'Nom_fournisseur'=>$Nom_fournisseur,
                        'Email_fournisseur'=>$Email_fournisseur,
                        'Num_Bancaire'=>$Num_Bancaire,
                        'Adresse_fournisseur'=>$Adresse_fournisseur,
                        'Tel_fournisseur'=>$Tel_fournisseur,
                        'Motdepasse'=>$Motdepasse,
                        'Confirm_motdepasse'=>$Confirm_motdepasse,
                        'Date_Creation'=>Date('d-m-Y à H:m:s')
                    );

                    $this->Fournisseurs->Sauvegarder($data);
                    $this->session->set_flashdata('valide', 'Vous venez de Créer Un Compte !');
                
                }

            }
            
            
            $this->load->view('Dossier/Tete/Head', $this->data);
            $this->load->view('Dossier/Corps/Fournisseurinscription');
            // $this->load->view('Dossier/Pied/Foot');
        }

    }
?>