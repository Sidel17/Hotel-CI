<?php

class availability extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Room_model');
        $this->load->library('form_validation');
        //echo json_encode($data['availability']);
    }

    public function index()
    {
        $data['judul']='Daftar Order Room';
        $data['availability']=$this->Room_model->getAllavaliability();
        $this->load->view('templates/header', $data);
        $this->load->view('availability/index', $data);
        $this->load->view('templates/footer');
    }

}
?>