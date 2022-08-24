<?php 

    defined('BASEPATH')OR exit('No direct script access allowed');

        class Comptes extends CI_Model
        {
            public function Sauvegarder($m)
            {
                $this->db->insert('Client', $m);
            }

            public function Modifier($data)
            {
                $this->db->set('Etat_de_compte', $data['Etat_de_compte']);
                $this->db->where('idClient', $data['idClient']);

                return $this->db->update("Client", $data);
                // $query=$this->db->query("update Client SET Etat_de_compte='$Etat_de_compte'", array('idClient'=>$idClient));
            }

            public function Supprimer($idClient)
            {
                $this->db->where('idClient', $idClient);
                $this->db->delete('Client');
            }
    
            public function idselection($idClient)
            {
                $this->db->where('idClient', $idClient);
                return $this->db->get('Client')->result();
            }

            public function Selection()
            {
                $query = $this->db->query("select * from Client");

                return $query->result();
            }
        }
?>