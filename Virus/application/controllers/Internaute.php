<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Internaute extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->helper(array('url', 'form'));

		$this->load->Model('ModelAdmin/Articles');
		$this->load->Model('ModelAdmin/Publiciters');
		$this->load->Model('ModelAdmin/Fournisseurs');
		$this->load->Model('Modelinternaute/Produits');


		$this->load->library("form_validation");

		$this->data['header'] = $this->load->view('Dossier/Tete/Header', '', true);
		$this->data['footer'] = $this->load->view('Dossier/Pied/Footer', '', true);

		// $this->load->library('javascript');
		// $this->date['donner'] = array('header', 'footer');
	}


	public function index()
	{
		$this->form_validation->set_rules('search', '', 'required', array('required' => 'Veuillez-Saisir Quelque chose !'));

		if ($this->form_validation->run()) {
			$Nom_article = $this->input->post("search");
			// $data = array(
			// 	'Nom_article' => $Nom_article
			// );
			$res = $this->Articles->Rechercher($Nom_article);
			// redirect(site_url("Internaute/index"));
		} else {
			$res = [];
		}
		$this->data['titre'] = "Accueil";

		$idArticle = $this->input->get('idArticle');

		$resultat['idproduit'] = $this->Articles->idselection('idArticle');

		$resultat['produit'] = $this->Articles->selection();
		$resultat['publiciter'] = $this->Publiciters->selection();
		$resultat['fournisseur'] = $this->Fournisseurs->selection();
		$resultat['produitf'] = $this->Produits->selection();
		$resultat['recherche'] = $res;

		$this->load->view('Dossier/Tete/Header', $this->data);
		$this->load->view('Dossier/Corps/index', $resultat);
		// $this->load->view('Interface/Pied/Footer');
	}

	public function selectlogin()
	{
		// $data['fournisseur'] = $this->Fournisseurs->idselection($idFournisseur);
		$resultat['fournisseur'] = $this->Fournisseurs->selection();
		$resultat['produit'] = $this->Articles->selection();
		$resultat['produitf'] = $this->Produits->selection();
		$resultat['nom_fournisseur'] = $this->input->get('fournisseur');

		// $this->session->set_userdata(
		// 	['idfournisseur'=>$resultat->idFournisseur,
		// 	'nom_fournisseur'=>$resultat->Nom_fournisseur]

		// );

		$this->load->view('Dossier/Tete/Header', $this->data);
		$this->load->view('Dossier/Corps/login', $resultat);
	}

	public function selection()
	{
		$this->data['titre'] = "Accueil";

		$Nom_F_Article = $this->input->get('Nom_F_Article');
		$resultat['produit'] = $this->Articles->idselectionNom('Nom_F_Article');

		// $resultat['idproduit'] = $this->Articles->idselection('idArticle');

		$resultat['produit'] = $this->Articles->selection();
		$resultat['publiciter'] = $this->Publiciters->selection();
		$resultat['fournisseur'] = $this->Fournisseurs->selection();
		$resultat['produitf'] = $this->Produits->selection();

		$this->load->view('Dossier/Tete/Header', $this->data);
		$this->load->view('Dossier/Corps/index', $resultat);
	}
}
