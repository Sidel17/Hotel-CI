<?php

class AboutUs extends CI_Controller{
    public function index()
    {
        
        $data['judul']='About Us';
        $this->load->view('templates/header', $data);
        $this->load->view('aboutus/index', $data);
        $this->load->view('templates/footer');
    }

}
?>