<?php 
    defined('BASEPATH')OR exit('No direct script access allowed');


    class Article extends CI_Controller
    {
        public function __construct()
        {
            parent :: __construct();

            $this->load->helper(array('url', 'form'));

            $this->load->Model('ModelAdmin/Categories');
            $this->load->Model('ModelAdmin/Articles');
            $this->load->Model('ModelAdmin/Fournisseurs');
            $this->load->Model('Modelinternaute/Comptes');

            $this->load->library('form_validation');

            $this->data['header'] = $this->load->view('DossierAdmin/Tete/Header', '', true);
            $this->data['footer'] = $this->load->view('DossierAdmin/Pied/Footer', '', true);
        }

        public function Article()
        {
            if($this->input->server("REQUEST_METHOD") == "POST")
            {
                $this->form_validation->set_rules('noms', '', 'required', array('required'=>'Veuillez-Saisir un Nom !'));
                $this->form_validation->set_rules('marque', '', 'required', array('required'=>'Veuillez-Saisir la Marque !'));
                $this->form_validation->set_rules('prix', '', 'required', array('required'=>'Veuillez-Saisir le Prix !'));
                $this->form_validation->set_rules('quantite', '', 'required', array('required'=>'Veuillez-Saisir la Quantite !'));
                $this->form_validation->set_rules('description', '', 'required', array('required'=>'Veuillez-Saisir la description !'));
                // $this->form_validation->set_rules('idcat', '', 'required', array('required'=>""));

                if($this->form_validation->run())
                {
                    $Nom_article = $this->input->post('noms');
                    $Marque_article = $this->input->post('marque');
                    $Prix_article = $this->input->post('prix');
                    $Qte_article = $this->input->post('quantite');
                    // $Image_article = $this->input->post('img');
                    $Description_article = $this->input->post('description');

                    $Categorie_article = $this->input->post('selectcate');
                    $Categorie_idCategorie = $this->input->post('idcat');
                    $Nom_F_Article = $this->input->post('selectnom');
                

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
                            'Nom_article' =>$Nom_article,
                            'Marque_article' =>$Marque_article,
                            'Prix_article' =>$Prix_article,
                            'Qte_article' =>$Qte_article,
                            'Image_article' =>$file_name,
                            'Description_article' =>$Description_article,
                            'Categorie_article'=>$Categorie_article,
                            'Categorie_idCategorie' =>$Categorie_idCategorie,
                            'Nom_F_Article' =>$Nom_F_Article, 
                            
                        );
                        var_dump($data);
                        $this->Articles->Sauvegarder($data);
                    }    
                    
                }
            }
            
            $resultat['homme'] = $this->db->query("select count(Sexe) home from Client where sexe='M'  ")->result()[0]->home;
            $resultat['femme'] = $this->db->query("select count(Sexe) femme from Client where sexe='F'  ")->result()[0]->femme;

            $Nom_F_Article = $this->input->get('Nom_F_Article');
            $resultat['produit'] = $this->Articles->idselection($Nom_F_Article);
            $resultat['categorie'] = $this->Categories->Selection();
            $resultat['produit'] = $this->Articles->Selection();
            $resultat['fournisseur'] = $this->Fournisseurs->Selection();
            $resultat['client'] = $this->Comptes->Selection();
            // $resultat['idcat'] = $this->Article->idcategorie($Categorie_idCategorie);
            
            $this->load->view('DossierAdmin/Tete/Header', $resultat);
            $this->load->view('DossierAdmin/Corps/Produits', $resultat);
        }

        public function Modifier()
        {
            $idArticles = $this->input->get('idArticles');
            $resultat['produit'] = $this->Articles->idselection($idArticles);
            $resultat['fournisseur'] = $this->Fournisseurs->Selection();
            $resultat['client'] = $this->Comptes->Selection();
            $resultat['categorie'] = $this->Categories->Selection();

            $this->load->view('DossierAdmin/Tete/Header', $resultat);
            $this->load->view('DossierAdmin/Corps/ModArticle', $resultat);

            if($this->input->post("modifier"))
            {
                $idArticles            = $this->input->post('idart');
                $Nom_article           = $this->input->post('modarticle');
                $Marque_article        = $this->input->post('modmarque');
                $Prix_article          = $this->input->post('modprix');
                $Qte_article           = $this->input->post('modquantite');
                $Image_article         = $this->input->post('modimage');
                $Description_article   = $this->input->post('modescription');
                // $Categorie_idCategorie = $this->input->post('modid');
                $Nom_F_Article         = $this->input->post('modnom');

                $data = array(
                    'idArticles'=>$idArticles,
                    'Nom_article'=>$Nom_article,
                    'Marque_article'=>$Marque_article,
                    'Prix_article'=>$Prix_article,
                    'Qte_article'=>$Qte_article,
                    'Image_article'=>$Image_article,
                    'Description_article'=>$Description_article,
                    // 'Categorie_idCatagorie'=>$Categorie_idCategorie,
                    'Nom_F_Article'=>$Nom_F_Article
                );

                $this->Articles->Modifier($data);

                redirect("ControllerAdmin/Produits/Article/Article");
            }
        }

        public function Supprimer()
        {
            $idArticles = $this->input->get('idArticles');
            $data = $this->Articles->idselection($idArticles);
            unlink("./images/Produits/" .$data[0]->Image_article);
            $this->Articles->Supprimer($idArticles);

            redirect("ControllerAdmin/Produits/Article/Article");
        }
    }