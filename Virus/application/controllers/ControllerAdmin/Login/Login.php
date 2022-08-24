<?php 
    defined('BASEPATH')OR exit('No direct script access allowed');

    class Login extends CI_Controller
    {
        public function __construct()
        {
            parent :: __construct();

            $this->load->library('form_validation');
        }

        public function Authentification()
        {
            
            $this->load->view('DossierAdmin/Corps/login');
        }
    }
?>
