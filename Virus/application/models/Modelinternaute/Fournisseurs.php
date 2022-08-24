<?php 
    defined('BASEPATH')OR exit('No direct script access allowed');

    class Fournisseurs extends CI_Model
    {
        public function Sauvegarder($m)
        {
            $this->db->insert('Fournisseur', $m);
        }

        public function Supprimer($idFournisseur)
        {
            $this->db->where('idFournisseur', $idFournisseur);
            $this->db->delete('Fournisseur');
        }

        public function idselection($idFournisseur)
        {
            $this->db->where('idFournisseur', $idFournisseur);
            return $this->db->get('Fournisseur')->result();
        }

        // public function nomselection($Nom_fournisseur)
        // {
        //     $this->db->where('Nom_fournisseur', $Nom_fournisseur);
        //     return $this->db->get('Fournisseur')->result();
        // }

        public function Selection()
        {
            $query = $this->db->order_by("idFournisseur", 'DESC');
            // $query = $this->db->limit(1, 2);
            $query = $this->db->get('Fournisseur');
            
            return $query->result();
        }

        // public function limiteselection()
        // {
        //     $query = $this->db->get('Fournisseur')
        // }
    }
?>