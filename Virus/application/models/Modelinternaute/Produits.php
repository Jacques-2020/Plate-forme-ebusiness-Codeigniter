<?php 
    defined('BASEPATH')OR exit('No direct script access allowed');

    class Produits extends CI_Model
    {
        public function Sauvegarder($m)
        {
            $this->db->insert('Produit_Fournit', $m);
        }

        public function idselection($idProduit_Fournit)
        {
            $this->db->where("idProduit_Fournit", $idProduit_Fournit);
            return $this->db->get("Produit_Fournit")->result();
        }

        public function Supprimer($idProduit_Fournit)
        {
            $this->db->where("idProduit_Fournit", $idProduit_Fournit);
            $this->db->delete("Produit_Fournit");
        }

        public function Selection()
        {
            // $requete = $this->db->select('*');
            // $requete = $this->db->from('Fournisseur');
            // $requete = $this->db->join('Produit_Fournit', 'Produit_Fournit.idProduit_Fournit = Fournisseur.idFournisseur');
            // $requete = $this->db->get();
            // return $requete->result();

            $query = $this->db->get("Produit_Fournit");
            return $query->result();

        }
    }
?>