<?php

class Usuario extends CI_Model {

    public $database = 'db_pdg';
    public $table = 'tbl_users';
    public $userId = 'id';

    function __construct()
    {
        parent::__construct();
    }

    public function findUser()
    {
        $this->db->select();
        $this->db->from($this->table);

        $sql = $this->db->get();
        return $sql->result();
    }

    public function findUserById($id)
    {
        $this->db->select();
        $this->db->from($this->table);
        $this->db->where($this->userId, $id);

        $sql = $this->db->get();
        return $sql->row();
    }

    public function reg_user()
    {
        $data = array(
            'nombre'        => $_POST['nombre'],
            'apellido'      => $_POST['apellido'],
            'direccion'     => $_POST['direccion'],
            'email'         => $_POST['email'],
            'telefono'      => $_POST['telefono'],
            'imagen'        => date('Ymd-') . $_FILES['foto_perfil']['name'],
            'rol'           => $_POST['rol'],
            'user_login'    => $_POST['user_login'],
            'user_registered' => date('Y-m-d h:i:s'),
            'user_password' => sha1($_POST['user_password'])
        );
        
        $sql = $this->db->insert('tbl_users', $data);

        // si el registro se proceso, subo la imagen. 
        if($this->db->affected_rows() == 1)
        {
            // Subo la imagen del producto 
            $dir_subida = 'uploads/users/';
            $fichero = $dir_subida . date('Ymd-') . $_FILES['foto_perfil']['name'];
            move_uploaded_file($_FILES['foto_perfil']['tmp_name'], $fichero);
            var_dump($fichero);
        }

       return $sql ? true : false;
        
    }

    public function actualizar($id)
    {
        $id = $this->input->post('id');
        $data = array(
            'nombre'        => $_POST['nombre'],
            'apellido'      => $_POST['apellido'],
            'direccion'     => $_POST['direccion'],
            'email'         => $_POST['email'],
            'telefono'      => $_POST['telefono'],
            //'imagen'        => null,
            'rol'           => $_POST['rol']
            //'user_login'    => $_POST['user_login'],
            //'user_password' => sha1($_POST['user_password']
        );

        $this->db->where($this->userId, $id);
        $update = $this->db->update($this->table, $data);

        // si el registro se proceso, subo la imagen. 
        if($this->db->affected_rows() == 1)
        {
            if(!$_FILES['foto_perfil']['name'] == "")
            {
                // Subo la imagen del producto 
                $dir_subida = 'uploads/users/';
                $fichero = $dir_subida . date('Ymd-') . $_FILES['foto_perfil']['name'];
                move_uploaded_file($_FILES['foto_perfil']['tmp_name'], $fichero);
                //var_dump($fichero);
            }
        }

        return $update ? true : false;
    }

    public function borrar($id)
    {
        $this->db->where($this->userId, $id);
        $sql = $this->db->delete($this->table);
    }

    private function foto_perfil($user)
    {
        $foto_perfil = "imagen";
        $config['upload_path'] = 'uploads/users/';
        $config['file_name'] = $user . ".jpg";
        $config['allowed_types'] = 'jepg|jpg|png';
        $config['max_size'] = '50000';
        $config['max_width'] = 640;
        $config['max_height'] = 640;
        $config['remove_spaces'] = true;

        $this->load->library('upload', $config);
        
        if( !$this->upload->do_upload('foto_perfil'))
        {
            echo $this->upload->display_errors();
            return;

        }else{
            $data = array('imagen' => $this->upload->data());
            echo "Hola Mundo 2";
            return;
        }
    }
}