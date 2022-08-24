<?php
    defined('BASEPATH')OR exit('No direct script access allowed');

    class Discussions extends CI_Model
    {
        public function Sauvegarder($m)
        {
            $this->db->insert("Discussion", $m);
        }

        public function Selection()
        {
            // $this->db->where("iddiscussion", $iddiscussion);
            return $this->db->query("select * from Discussion")->result();
        }
    }