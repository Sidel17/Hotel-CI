<?php

class List_customer extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Room_model');
        $this->load->library('form_validation');
        //echo json_encode($data['room']);
    }

    public function index()
    {
        $data['judul']='List Customer';
        $data['room']=$this->Room_model->getAllOrder();
        if($this->input->post('keyword')){
            $data['room']=$this->Room_model->cariDataOrderRoom();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('List_customer/index', $data);
        $this->load->view('templates/footer');
        //echo json_encode($data['transaction']);
    }

}
?>