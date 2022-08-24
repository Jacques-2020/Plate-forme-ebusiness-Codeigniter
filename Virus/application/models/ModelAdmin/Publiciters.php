<?php 
    defined('BASEPATH')OR exit('No direct script access allowed');

    class Publiciters extends CI_Model
    {
        public function Sauvegarder($m)
        {
            $this->db->insert('Publiciter', $m);
        }

        public function Modifier($data)
        {
            $this->db->set('Titre_publiciter', $data['Titre_publiciter']);
            $this->db->set('Image_publiciter', $data['Image_publiciter']);
            $this->db->set('Description_publiciter', $data['Description_publiciter']);
            $this->db->set('Date_publiciter', $data['Date_publiciter']);

            $this->db->where('idPubliciter', $data['idPubliciter']);

            return $this->db->update("Publiciter", $data);

        //    $query = $this->db->query("update Publiciter SET Titre_publiciter='$Titre_publiciter', Image_publiciter='$Image_publiciter',  Date_publiciter='$Date_publiciter'", array('idPubliciter'=>$idPubliciter));
        }
        public function idselection($idPubliciter)
        {
            $this->db->where("idPubliciter", $idPubliciter );
            // $query = $this->db->query("select * from Publiciter");
            return $this->db->get("Publiciter")->result();
        }
        
        public function Supprimer($idPubliciter)
        {
            $this->db->where("idPubliciter", $idPubliciter);
            $this->db->delete("Publiciter");
        }
        public function selection()
        {
            $query = $this->db->query("select * from Publiciter");
            return $query->result();
        }
    }
?>