<?php 

defined('BASEPATH') Or exit('No direct script access allowed');

    class Login extends CI_Controller
    {
        public function __construct()
        {
            parent :: __construct();

            $this->load->helper(array('url', 'form'));
            $this->load->library('form_validation');

            $this->load->Model("ModelAdmin/Articles");
            $this->load->Model('Modelinternaute/Fournisseurs');
            $this->load->Model('Modelinternaute/Produits');

            $this->data['header'] = $this->load->view('Dossier/Tete/Header', '', true);
            $this->data['footer'] = $this->load->view('Dossier/Pied/Foot', '', true);
        }

        public function Authentification()
        {
            
            $this->form_validation->set_rules('email', '', 'required', array('required'=>'Veuillez-Saisir Un email valide !'));
            $this->form_validation->set_rules('motdepasse', '', 'required', array('required'=>'Veuillez-Saisir Un Mot de passe Valide !'));

            if($this->form_validation->run())
            {
                $Email_fournisseur = $this->input->post('email');
                $Motdepasse = $this->input->post('motdepasse');

                $requete= $this->db->query("select * from Fournisseur where Email_fournisseur='$Email_fournisseur' and Motdepasse='$Motdepasse'");
                $row = $requete->result();

                if(count($row)>0)
                {
                    
                    $row = $row[0];
                    $this->session->set_userdata([
                        'idfournisseur'=>$row->idFournisseur,
                        'nomfournisseur'=>$row->Nom_fournisseur
                    ]);
                    
                    $resultat['produit'] = $this->Articles->Selection();
                    $resultat['fournisseur'] = $this->Fournisseurs->Selection();
                    $resultat['produitf'] = $this->Produits->Selection();

                    $this->load->view("Dossier/Tete/Header", $this->data);
                    $this->load->view("Dossier/Corps/Fournisseur", $resultat);
                }
                else
                {
                    $this->session->set_flashdata('error', 'Email ou Mot de passe Incorrect !');
                    
                    
                    redirect("Fournisseur/Login/Authentification");
                }
   
            }
            else
            {
                
                $resultat['produit'] = $this->Articles->Selection();
                $resultat['fournisseur'] = $this->Fournisseurs->Selection();
                $resultat['produitf'] = $this->Produits->Selection();

                $this->load->view('Dossier/Tete/Header', $this->data);
                $this->load->view('Dossier/Corps/loginf', $resultat);
            }
            
        }
    }