<?php 
    defined('BASEPATH')OR exit('No direct script access allowed');

    class Admin extends CI_Controller
    {
        public function __construct()
        {
            parent :: __construct();

            $this->load->helper('url');

            $this->load->library("form_validation");

            $this->load->Model("ModelAdmin/Admins");
            $this->load->Model("ModelAdmin/Publiciters");
            $this->load->Model("Modelinternaute/Comptes");
            $this->load->Model("ModelAdmin/Fournisseurs");

            $this->data['header'] = $this->load->view("DossierAdmin/Tete/Header", '', true);
            $this->data['footer'] = $this->load->view("DossierAdmin/Pied/Footer", '', true);
        }

        public function Authentification()
        {
            $this->form_validation->set_rules('email', '', 'required', array('required'=>'Veuillez-Saisir Un Mail Valide !'));
            $this->form_validation->set_rules('motdepasse', '', 'required', array('required'=>'Veuillez-Saisir Un Mot-de-Passe Valide !'));

            if($this->form_validation->run())
            {
                $Email_admin = $this->input->post('email');
                $Motdepasse_admin = $this->input->post('motdepasse');
                $Motdepasse_admin = md5($Motdepasse_admin);

                $query = $this->db->query("select * from Administrateur where Email_admin='$Email_admin' and Motdepasse_admin='$Motdepasse_admin'");
                $row = $query->result();
            
                if(count($row)>0)
                {
                    $row = $row[0];

                    $this->session->set_userdata(
                        ['idadmin'=>$row->idAdministrateur,
                        'avataradmin'=>$row->Avatar,
                        'Nomadmin'=>$row->Nom_admin]
                    );

                    $resultat['homme'] = $this->db->query("select count(Sexe) home from Client where sexe='M'  ")->result()[0]->home;
                    $resultat['femme'] = $this->db->query("select count(Sexe) femme from Client where sexe='F'  ")->result()[0]->femme;
        
                    $resultat['client'] = $this->Comptes->Selection();
                    $resultat['fournisseur'] = $this->Fournisseurs->Selection();
                    
                    $this->load->view('DossierAdmin/Tete/Header', $resultat);
                    $this->load->view('DossierAdmin/Corps/Accueil');
                    // redirect('ControllerAdmin/Accueil/Accueil/Accueils');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Email ou Mot de passe Incorrect');

                    $this->load->view('DossierAdmin/Corps/login');
                }
            }
            else
            {
                $this->load->view('DossierAdmin/Corps/login');
            }
        }

        public function Compte()
        {
            if($this->input->server("REQUEST_METHOD") == "POST")
            {
                $this->form_validation->set_rules('nom', '', 'trim|required|min_length[5]|max_length[12]', array('required'=>'Veuillez-Saisir le Nom !'));
                $this->form_validation->set_rules('email', '', 'required|is_unique[Administrateur.Email_admin]', array('required'=>'Veuillez-Saisir Email !'));
                $this->form_validation->set_rules('motdepasse', '', 'trim|required|min_length[5]', array('required'=>'Veuillez-Saisir le Mot de passe'));

                if($this->form_validation->run())
                {
                    $Nom_admin = $this->input->post('nom');
                    $Email_admin = $this->input->post('email');
                    $Motdepasse_admin = $this->input->post('motdepasse');
                    $Motdepasse_admin = md5($Motdepasse_admin);

                    $file_name = $_FILES['toph']['name'];
                    $config['upload_path'] = './images/AvatarAdmin/';
                    $config['allowed_types'] = '*';

                    $this->load->library('upload', $config);

                    if(!$this->upload->do_upload('toph'))
                    {
                        $error = array('error' => $this->upload->display_errors());

                        var_dump($error); die;
                    }
                    else


                    $data = array(
                        'Nom_admin' =>$Nom_admin,
                        'Avatar'=>$file_name,
                        'Email_admin' =>$Email_admin,
                        'Motdepasse_admin' =>$Motdepasse_admin

                    );

                    $this->Admins->Sauvegarder($data);
                    redirect("ControllerAdmin/Publiciter/Admin/Compte");
                }
            }
            
            $resultat['homme'] = $this->db->query("select count(Sexe) home from Client where sexe='M'  ")->result()[0]->home;
            $resultat['femme'] = $this->db->query("select count(Sexe) femme from Client where sexe='F'  ")->result()[0]->femme;

            $resultat['publiciter'] = $this->Publiciters->selection();
            $resultat['admin'] = $this->Admins->selection();
            $resultat['client'] = $this->Comptes->Selection();
            $resultat['fournisseur'] = $this->Fournisseurs->Selection();

            $this->load->view("DossierAdmin/Tete/Header", $resultat);
            $this->load->view("DossierAdmin/Corps/Publiciter", $resultat);
        }

        public function Modifier()
        {
            $idAdministrateur = $this->input->get('idAdministrateur');
            $data['admin'] = $this->Admins->idselection($idAdministrateur);
            $data['client'] = $this->Comptes->Selection();
            $data['fournisseur'] = $this->Fournisseurs->Selection();



            $this->load->view("DossierAdmin/Tete/Header", $data);
            $this->load->view("DossierAdmin/Corps/ModAdmin");

            if($this->input->post("modifier"))
            {
                $idAdministrateur=$this->input->post('idad');
                $Nom_admin         = $this->input->post("modnom");
                $Email_admin       = $this->input->post("modemail");
                $Motdepasse_admin  = $this->input->post("modmotdepasse");
                $Motdepasse_admin  = md5($Motdepasse_admin);

                $data = array(
                    'idAdministrateur'=>$idAdministrateur,
                    'Nom_admin'=>$Nom_admin,
                    'Email_admin'=>$Email_admin,
                    'Motdepasse_admin'=>$Motdepasse_admin
                );

                $this->Admins->Modifier($data);

                redirect("ControllerAdmin/Publiciter/Admin/Compte");
            }


        }

        public function Supprimer()
        {
            $idAdministrateur = $this->input->get('idAdministrateur');
            $data = $this->Admins->idselection($idAdministrateur);
            unlink('./images/AvatarAdmin/' .$data[0]->Avatar);
            $this->Admins->Supprimer($idAdministrateur);

            redirect("ControllerAdmin/Publiciter/Admin/Compte");
        }
    }
?>