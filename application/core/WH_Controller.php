<?php

class WH_Controller extends CI_Controller {

    function __construct()
    {
        parent::__construct();

        if($this->session->userdata('user'))
        {
            $data['tituloPagina'] = TituloPagina;
        }
        else 
        {
            redirect('login');
        }
    }
}