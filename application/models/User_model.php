<?php

class User_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function login($user, $password)
    {
        $query = $this->db->get_where('tbl_users', array('user_login'=>$user, 'user_password'=>$password) );
        return $query->row_array();
    }
}