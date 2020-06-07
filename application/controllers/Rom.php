<?php

class Rom extends CI_Controller{
    public function index()
    {
        
        $data['judul']='Room';
        $this->load->view('templates/header', $data);
        $this->load->view('rom/index', $data);
        $this->load->view('templates/footer');
        //echo json_encode($data['rom']);
    }

}
?>