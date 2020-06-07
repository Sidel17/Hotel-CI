<?php
class Room_model extends CI_model{
    public function getAllOrder(){
        return $query = $this->db->get('order_room')->result_array();

    }

    public function getAllavaliability(){
        return $query = $this->db->get('room_availability')->result_array();
    }

    public function orderRoom(){
        $data=[
            "customer_name"=>$this->input->post('customer_name', true),
            "address"=>$this->input->post('address', true),
            "phone"=>$this->input->post('phone', true),
            "room_type"=>$this->input->post('room_type', true),
            "room_quantity"=>$this->input->post('room_quantity', true),
            "checkin_at"=>$this->input->post('checkin_at', true),
            "checkout_at"=>$this->input->post('checkout_at', true)
        ];

        $this->db->insert('order_room', $data);
    }

    public function hapusDataOrder($no){
        $this->db->where('no', $no);
        $this->db->delete('order_room');

    }

    public function getRoomByNo($no ){
        return $this->db->get_where('order_room',['no'=>$no])->row_array();

    }

    public function ubahDataorderRoom(){
        $data=[
            "customer_name"=>$this->input->post('customer_name', true),
            "address"=>$this->input->post('address', true),
            "phone"=>$this->input->post('phone', true),
            "room_type"=>$this->input->post('room_type', true),
            "room_quantity"=>$this->input->post('room_quantity', true),
            "checkin_at"=>$this->input->post('checkin_at', true),
            "checkout_at"=>$this->input->post('checkout_at', true)
        ];

        $this->db->where('no',$this->input->post('no'));
        $this->db->update('order_room', $data);
    }

    public function cariDataOrderRoom(){
        $keyword =$this->input->post('keyword', true);
        $this->db->like('customer_name', $keyword);
        $this->db->or_like('address', $keyword);
        $this->db->or_like('phone', $keyword);
        $this->db->or_like('room_type', $keyword);
        $this->db->or_like('checkin_at', $keyword);
        $this->db->or_like('checkout_at', $keyword);
        $this->db->or_like('room_quantity', $keyword);
        $this->db->or_like('no', $keyword);
        return $this->db->get('order_room')->result_array();
    }
}
?>