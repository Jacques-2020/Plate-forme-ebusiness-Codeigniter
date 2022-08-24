<?php 
    defined('BASEPATH')OR exit('No direct script access allowed');


    class Publiciter extends CI_Controller
    {
        public function __construct()
        {
            parent :: __construct();

            $this->load->library('form_validation');

            $this->load->helper(array('url', 'form'));
            
            $this->load->Model("ModelAdmin/Publiciters");
            $this->load->Model("ModelAdmin/Admins");
            $this->load->Model("Modelinternaute/Comptes");
            $this->load->Model("ModelAdmin/Fournisseurs");
            $this->load->Model("ModelAdmin/Articles");

            $this->data['header'] = $this->load->view('DossierAdmin/Tete/Header', '', true);
            $this->data['footer'] = $this->load->view('DossierAdmin/Pied/Footer', '', true);
        }

        public function Ajouter()
        {
            if($this->input->server("REQUEST_METHOD") == "POST")
            {
                $this->form_validation->set_rules('titre', '', 'required', array('required'=>'Veuillez-Saisir le Titre !'));
            
                $this->form_validation->set_rules('description', '', 'required', array('required'=>'Veuillez-Saisir la description !'));
                $this->form_validation->set_rules('idad', '');

                if($this->form_validation->run())
                {
                    $Titre_publiciter = $this->input->post('titre');
                    
                    $Description_publiciter = $this->input->post('description');
                    $Administrateur_idAdministrateur = $this->input->post('idad');

                    $file_name = $_FILES['img']['name'];
                    $config['upload_path'] = './images/Produits/';
                    $config['allowed_types'] = '*';

                    $this->load->library('upload', $config);

                    if(!$this->upload->do_upload('img'))
                    {
                        $error = array('error' => $this->upload->display_errors());

                        var_dump($error); die;
                    }
                    else
                    {

                        $data = array(
                            'Titre_publiciter' =>$Titre_publiciter,
                            'Image_publiciter' =>$file_name, 
                            'Description_publiciter' =>$Description_publiciter,
                            'Date_publiciter' =>Date('d-M-Y à H:m:s'),
                            'Administrateur_idAdministrateur'=>$Administrateur_idAdministrateur

                        );
                    }

                    $this->Publiciters->Sauvegarder($data);
                    redirect("ControllerAdmin/Publiciter/Publiciter/Ajouter");
                }    
            }
            $resultat['homme'] = $this->db->query("select count(Sexe) home from Client where sexe='M'  ")->result()[0]->home;
            $resultat['femme'] = $this->db->query("select count(Sexe) femme from Client where sexe='F'  ")->result()[0]->femme;

            $resultat['publiciter'] = $this->Publiciters->selection();
            $resultat['admin'] = $this->Admins->selection();
            $resultat['client'] = $this->Comptes->Selection();
            $resultat['fournisseur'] = $this->Fournisseurs->Selection();
            

            $this->load->view('DossierAdmin/Tete/Header', $resultat);
            $this->load->view('DossierAdmin/Corps/Publiciter', $resultat);
        }

        public function Modifier()
        {
            $idPubliciter = $this->input->get('idPubliciter');
            $resultat['publiciter'] = $this->Publiciters->idselection($idPubliciter);

            $resultat['client'] = $this->Comptes->Selection();
            $resultat['fournisseur'] = $this->Fournisseurs->Selection();
            $data['articles'] = $this->Articles->Selection();
            
            $this->load->view('DossierAdmin/Tete/Header', $resultat);
            $this->load->view('DossierAdmin/Corps/ModPubliciter', $data);

            if($this->input->post("modifier"))
            {
                $idPubliciter = $this->input->post('idP');
                $Titre_publiciter       = $this->input->post("modtitre");
                $Image_publiciter       = $this->input->post("modimage");
                $Description_publiciter = $this->input->post("moddescription");
                $Date_publiciter        = Date("d-M-Y à H:i:s");

                $data = array(
                    'idPubliciter'=>$idPubliciter,
                    'Titre_publiciter'=>$Titre_publiciter,
                    'Image_publiciter'=>$Image_publiciter,
                    'Description_publiciter'=>$Description_publiciter,
                    'Date_publiciter'=>$Date_publiciter
                );

                $this->Publiciters->Modifier($data);

                redirect("ControllerAdmin/Publiciter/Publiciter/Ajouter");
            }
        }
        public function Supprimer()
        {
            $idPubliciter = $this->input->get('idPubliciter');
            $data = $this->Publiciters->idselection($idPubliciter);
            unlink('./images/Produits/' .$data[0]->Image_publiciter);
            $this->Publiciters->Supprimer($idPubliciter);

            redirect("ControllerAdmin/Publiciter/Publiciter/Ajouter");

        }
    }
?>