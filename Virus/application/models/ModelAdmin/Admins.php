<?php 
    defined('BASEPATH')OR exit('No direct script access allowed');

    class Admins extends CI_Model
    {
        public function Sauvegarder($m)
        {
            $this->db->insert('Administrateur', $m);
        }

        public function Modifier($data)
        {
            $this->db->set('Nom_admin', $data['Nom_admin']);
            $this->db->set('Email_admin', $data['Email_admin']);
            $this->db->set('Motdepasse_admin', $data['Motdepasse_admin']);

            $this->db->where('idAdministrateur', $data['idAdministrateur']);

            return $this->db->update("Administrateur", $data);
            // $query = $this->db->query("update Administrateur Set Nom_admin='$Nom_admin',Email_admin='$Email_admin', Motdepasse_admin='$Motdepasse_admin'", array('idAdministrateur'=>$idAdministrateur));
            // return $this->result();
        }

        public function idselection($idAdministrateur)
        {
            $this->db->where("idAdministrateur", $idAdministrateur);
            return $this->db->get("Administrateur")->result();
        }

        public function Supprimer($idAdministrateur)
        {
            $this->db->where("idAdministrateur", $idAdministrateur);
            $this->db->delete("Administrateur");
        }
        public function selection()
        {
            $query = $this->db->query("select * from Administrateur");
            return $query->result();
        }
    }
?>