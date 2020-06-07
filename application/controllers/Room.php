<?php

class Room extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Room_model');
        $this->load->library('form_validation');
        //echo json_encode($data['room']);
    }

    public function index()
    {
        $data['judul']='Daftar Order Room';
        $data['room']=$this->Room_model->getAllOrder();
        if($this->input->post('keyword')){
            $data['room']=$this->Room_model->cariDataOrderRoom();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('room/index', $data);
        $this->load->view('templates/footer');
    }

    public function order(){
        $data['judul']='Form Order Room';
        $this->form_validation->set_rules('customer_name','Nama', 'required');
        $this->form_validation->set_rules('address','Alamat', 'required');
        $this->form_validation->set_rules('phone','Nomor HP', 'required|numeric');
        $this->form_validation->set_rules('room_quantity','Jumlah Kamar', 'required|is_natural_no_zero');

        if($this->form_validation->run()==FALSE){
            $this->load->view('templates/header',$data);
            $this->load->view('room/order');
            $this->load->view('templates/footer');
        }else{
            $this->Room_model->orderRoom();
            $this->session->set_flashdata('flash',' diorder');
            redirect('room');
        }
    }

    public function hapus($no){
        $this->Room_model->hapusDataOrder($no);
        $this->session->set_flashdata('flash', ' dihapus');
        redirect('room');
    }

    public function detail($no){
        $data['judul']='Detail Data Order Room';
        $data['room']= $this->Room_model->getRoomByNo($no);
        $this->load->view('templates/header', $data);
        $this->load->view('room/detail', $data);
        $this->load->view('templates/footer');

    }

    public function ubah($no){
        $data['judul']='Form Ubah Data Order Room';
        $data['room'] = $this->Room_model->getRoomByNo($no);
        $data['room_type']=['Superior Room','Standar Room', 'Deluxe Room', 'Suite Room', 'Senior Suite Room', 'Club and Executive Room'];

        $this->form_validation->set_rules('customer_name','Nama', 'required');
        $this->form_validation->set_rules('address','Alamat', 'required');
        $this->form_validation->set_rules('phone','Nomor HP', 'required|numeric');
        $this->form_validation->set_rules('room_quantity','Jumlah Kamar', 'required|is_natural_no_zero');

        if($this->form_validation->run()==FALSE){
            $this->load->view('templates/header',$data);
            $this->load->view('room/ubah', $data);
            $this->load->view('templates/footer');
        }else{
            $this->Room_model->ubahDataorderRoom();
            $this->session->set_flashdata('flash',' diubah');
            redirect('room');
        }
    }

}
?>