<?php

class Test extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }


    public function index()
    {
        $this->load->model('Ventas');
        $this->Ventas->reporte_de_ventas_ultimos_7_dias();
        $s = $this->Ventas->estadoVenta();
        
        //var_dump($s);

        foreach($s as $a)
        {
            echo $a->nombre . " | " . date_format(date_create($a->fecha), "Y-m-d") . " | " . $a->c ;
            echo "<br /><br />";
        }
    }

    public function subir()
    {
        echo '
            <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="imagen">
            <input type="submit" value="Subir">
            </form>
        ';

        if($_FILES)
        {
            var_dump($_FILES);
            $this->foto_perfil();
        }

        
    }

    
    private function foto_perfil()
    {
        $foto_perfil = "imagen";
        $config['upload_path'] = 'uploads/users/';
        $config['file_name'] = 'a.jpg';
        $config['allowed_types'] = 'jepg|jpg|png';
        //$config['max_size'] = '50000';
        $config['max_width'] = 600;
        $config['max_height'] = 600;
        $config['remove_spaces'] = true;

        $this->load->library('upload', $config);
        
        if( !$this->upload->do_upload('imagen'))
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