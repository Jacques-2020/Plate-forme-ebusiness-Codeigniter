<?php
defined ('BASEPATH') OR exit('No direct script access allowed');

    class Compte extends CI_Controller
    {
        public function __construct()
        {
            parent :: __construct();

            $this->load->helper(array('url', 'form'));

            $this->load->Model('Modelinternaute/Comptes');

            $this->load->library('form_validation');

            // $this->data['titre'] = "Compte-Client";

            $this->data['header'] = $this->load->view('Dossier/Tete/Head', '', true);
            $this->data['footer'] = $this->load->view('Dossier/Pied/Foot', '', true);

        }

        public function CreerCompte()
        {
            if($this->input->server("REQUEST_METHOD") == "POST")
            {
                $this->form_validation->set_rules('nom', '', 'trim|required|alpha_numeric', array('required'=>'Veuillez-Saisir le Nom !'));
                $this->form_validation->set_rules('prenom', '', 'trim|required|alpha_numeric', array('required'=>'Veuillez-Saisir le Prenom !'));
                $this->form_validation->set_rules('selectsexe', '');
                $this->form_validation->set_rules('email', '', 'required|is_unique[Client.Email_client]', array('required'=>'Veuillez-Saisir un Mail !'));
                $this->form_validation->set_rules('adresse', '', 'required', array('required'=>'Veuillez-Saisir '));
                $this->form_validation->set_rules('telephone', '', 'trim|required|is_unique[Client.Tel_client]', array('required'=>'Veuillez-Saisir un numero !'));
                $this->form_validation->set_rules('motdepasse', '', 'trim|required|min_length[5]|max_length[8]', array('required'=>'Veuillez-Saisir un mot de passe'));
                $this->form_validation->set_rules('confirm_motdepasse', '', 'trim|required|min_length[5]|max_length[8]', array('required'=>'Veuillez-Saisir le mot de passe de confirmation !'));

                if($this->form_validation->run())
                {
                    $message['resultat_mes'] = "alert-Success";
                    $message['message'] = "Votre Compte est bel et bien Créer ";

                    $Nom_client         = $this->input->post('nom');
                    $Prenom_client      = $this->input->post('prenom');
                    $Sexe               = $this->input->post('selectsexe');
                    $Email_client       = $this->input->post('email');
                    $Adresse_client     = $this->input->post('adresse');
                    $Tel_client         = $this->input->post('telephone');
                    $Motdepasse         = $this->input->post('motdepasse');
                    $Motdepasse         = md5($Motdepasse);
                    $Confirm_motdepasse = $this->input->post('confirm_motdepasse');
                    $Confirm_motdepasse = md5($Confirm_motdepasse);
                    
                    $data = array(
                        'Nom_client'=>$Nom_client,
                        'Prenom_client'=>$Prenom_client,
                        'Sexe'=>$Sexe,
                        'Email_client'=>$Email_client,
                        'Adresse_client'=>$Adresse_client,
                        'Tel_client'=>$Tel_client,
                        'Motdepasse'=>$Motdepasse,
                        'Confirm_motdepasse'=>$Confirm_motdepasse,
                        'Etat_de_compte'=>1,
                        'DateCreation'=>Date('d-M-Y à H:i:s'));

                        $this->Comptes->Sauvegarder($data);
                        $this->session->Set_flashdata('valide', 'Compte Créer Avec Success !');
                        redirect(site_url('Client/Compte/CreerCompte'));

                        // echo $data;

            }

            }
            
            $this->load->view('Dossier/Tete/Header', $this->data);
            $this->load->view('Dossier/Corps/Clientinscription');
            // $this->load->view('Dossier/Pied/Footer');
            
            
        }


        public function Supprimer()
        {
            $idClient = $this->input->get('idClient');
            $data = $this->Comptes->idselection($idClient);
            $this->Comptes->Supprimer($idClient);

            redirect(site_url("ControllerAdmin/Accueil/Accueil"));
        }
    }