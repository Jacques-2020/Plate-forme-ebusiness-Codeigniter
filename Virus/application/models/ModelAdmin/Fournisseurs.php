<?php 
    defined('BASEPATH')OR exit('No direct script access allowed');

    class Fournisseurs extends CI_Model
    {
        public function Sauvegarder($m)
        {
            $this->db->insert("Fournisseur", $m);
        }

        public function Supprimer($idFournisseur)
        {
            $this->db->where("idFournisseur", $idFournisseur);
             $this->db->delete("Fournisseur");
            // return $query->result();
        }
        public function idselection($idFournisseur)
        {
            $this->db->where("idFournisseur", $idFournisseur);
            $query = $this->db->get("Fournisseur");
            return $query->result();
        }
        public function Selection()
        {
            $query = $this->db->order_by('idFournisseur', 'DESC');
            $query = $this->db->get('Fournisseur');
            return $query->result();
        }
    }
