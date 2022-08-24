<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Articles extends CI_Model
{
    public function Sauvegarder($m)
    {

        $this->db->insert("Articles", $m);
    }

    public function Modifier($data)
    {
        $this->db->set('Nom_article', $data['Nom_article']);
        $this->db->set('Marque_article', $data['Marque_article']);
        $this->db->set('Prix_article', $data['Prix_article']);
        $this->db->set('Qte_article', $data['Qte_article']);
        $this->db->set('Image_article', $data['Image_article']);
        $this->db->set('Description_article', $data['Description_article']);
        // $this->db->set('Categorie_idCategorie', $data['Categorie_idCategorie']);
        $this->db->set('Nom_F_Article', $data['Nom_F_Article']);

        $this->db->where('idArticles', $data['idArticles']);
        return $this->db->update("Articles", $data);
        // $query=$this->db->query("update Articles Set Nom_article='$Nom_article', Marque_article='$Marque_article', Prix_article='$Prix_article', Qte_article='$Qte_article', Image_article='$Image_article'", array('idArticles'=>$idArticles));
    }

    public function Rechercher($search = NULL)
    {
        return ($search == NULL) ? $this->db->get('Articles')->result() : $this->db->get_where('Articles', "Nom_article LIKE '%$search%'")->result();
        // $this->db->like('Nom_article', 'match');
        // return $this->db->get('Articles')->result();

        // echo $this->result();
    }
    public function idcategorie($idCategorie)
    {
        $this->db->where("idCategorie", $idCategorie);
        return $this->db->get("Categorie")->result();
    }
    public function idselection($idArticles)
    {
        $this->db->where("idArticles", $idArticles);
        return $this->db->get("Articles")->result();
    }

    public function idselectionNom($Nom_F_Article)
    {
        $this->db->where("Nom_F_Article", $Nom_F_Article);
        return $this->db->get("Articles")->result();
    }

    // Voulez-vous vraiment exécuter «DELETE FROM `Articles` WHERE `Articles`.`idArticles` = 4 AND `Articles`.`Categorie_idCategorie` = 3» ?
    public function Supprimer($idArticles)
    {
        $this->db->where("idArticles", $idArticles);
        $this->db->delete("Articles");
    }
    public function Selection($fournisseur = null)
    {
        if (!is_null($fournisseur)) {
            $this->db->where("Nom_F_Article", $fournisseur);
        }
        $query = $this->db->order_by('Nom_article', 'DESC');
        // $query = $this->db->limit(2);
        $query = $this->db->get('Articles ');


        return $query->result();
    }
}
