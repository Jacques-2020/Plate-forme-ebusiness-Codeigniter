<?php 
    defined('BASEPATH')OR exit('No direct script access allowed');


    class Categories extends CI_Model
    {
        public function Sauvegarder($m)
        {
            $this->db->insert("Categorie", $m);
        }
       
        public function Modifier($data)
        {
            $this->db->set('Nom_categorie', $data['Nom_categorie']);

            $this->db->where('idCategorie', $data['idCategorie']);

            return $this->db->update("Categorie", $data);
            // $query = $this->db->query("update Categorie Set Nom_categorie='$Nom_categorie'", array('idCategorie'=>$idCategorie));
        }

        public function Supprimer($idCategorie)
        {
            $this->db->where("idCategorie", $idCategorie);
            $this->db->delete("Categorie");
        }

        public function idselection($idCategorie)
        {
            $this->db->where('idCategorie', $idCategorie);
            return $this->db->get("Categorie")->result();
        }

        public function Selection()
        {
            $resultat= $this->db->query("select * from Categorie");
            return $resultat->result();
        }
    }