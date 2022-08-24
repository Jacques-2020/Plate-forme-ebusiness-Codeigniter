<?php 
    defined('BASEPATH')OR exit('No direct script access allowed');

    class Fourniture extends CI_Controller
    {
        public function __construct()
        {
            parent :: __construct();

            $this->load->helper(array('url', 'form'));

            $this->load->library('form_validation');

            $this->load->Model("ModelAdmin/Fournisseurs");
            $this->load->Model("Modelinternaute/Produits");
            $this->load->Model("ModelAdmin/Articles");

            $this->data['header'] = $this->load->view("Dossier/Tete/Header", '', true);
            $this->data['footer'] = $this->load->view("Dossier/Pied/Footer", '', true);

            // nous allons recuperer id et nom du fournisseur apres la connection
            $id = $this->session->idfournisseur;
            $nom_fournisseur = $this->session->nomfournisseur;
            if(empty($id))
            {
                redirect("Fournisseur/Login/Authentification");
            }

        }

        public function Fournir()
        {
            if($this->input->server("REQUEST_METHOD") == "POST")
            {
                $this->form_validation->set_rules('nom', '', 'trim|required|alpha_numeric', array('required'=>'Veuillez-Saisir le Nom Entreprise Svp !'));
                $this->form_validation->set_rules('marque', '', 'trim|required|alpha_numeric', array('required'=>'Veuillez-Saisir la Marque Svp !'));
                $this->form_validation->set_rules('quantiter', '', 'trim|required|alpha_numeric', array('required'=>'Veuillez-Saisir la Quantité Svp !'));
                $this->form_validation->set_rules('prix', '', 'trim|required', array('required'=>'Veuillez-Saisir le Prix Svp !'));
                $this->form_validation->set_rules('description', '', 'trim|required', array('required'=>'Veuillez-Faire une Description Svp !'));

                if($this->form_validation->run())
                {
                    $Nom_produit = $this->input->post('nom');
                    $Marque_produit = $this->input->post('marque');
                    $Qte_produit = $this->input->post('quantiter');
                    $Prix_produit = $this->input->post('prix');
                    // $Image_produit = $this->input->post('image');
                    $Description_produit = $this->input->post('description');
                    $Fournisseur_idFournisseur = $this->input->post('idfournisseur');

                    $file_name = $_FILES['image']['name'];
                    $config['upload_path'] = './images/ProduitsF/';
                    $config['allowed_types'] = '*';

                    $this->load->library('upload', $config);

                    if(!$this->upload->do_upload('image'))
                    {
                        $error = array('error' => $this->upload->display_errors());

                        var_dump($error); die;
                    }
                    else
                    {

                        $data = array(
                            'Nom_produit'=>$Nom_produit,
                            'Marque_produit'=>$Marque_produit,
                            'Qte_produit'=>$Qte_produit,
                            'Prix_produit'=>$Prix_produit,
                            'Image_produit'=>$file_name,
                            'Description_produit'=>$Description_produit,
                            'Date_produit'=>Date('d-M-Y à H-m-s'),
                            'Fournisseur_idFournisseur'=>$Fournisseur_idFournisseur
                        );
                    }
                    $this->session->set_flashdata('msg', 'votre produit a été Fourni avec Succès');
                    $this->Produits->Sauvegarder($data);
                }

            }
            
            $idFournisseur = $this->input->get('idFournisseur');
            $resultat['idselection'] = $this->Fournisseurs->idselection($idFournisseur);
            $resultat['produitf'] = $this->Produits->selection();
            $this->data['produit'] = $this->Articles->selection();
            
            // $resultat['fournisseur'] = $this->Fournisseurs->selection();

            $this->load->view("Dossier/Tete/Header", $this->data);
            $this->load->view("Dossier/Corps/Fournisseur", $resultat);
            
        }

        public function Supprimer()
        {
            $idProduit_Fournit = $this->input->get('idProduit_Fournit');
            $data = $this->Produits->idselection($idProduit_Fournit);
            unlink("./images/ProduitsF/" .$data[0]->Image_produit);
            $this->Produits->Supprimer($idProduit_Fournit);

            redirect("Fournisseur/Fourniture/Fournir");
        }

    }
?>