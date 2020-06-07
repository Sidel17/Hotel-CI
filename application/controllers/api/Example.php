<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require APPPATH . '/libraries/REST_Controller.php';

// use namespace
use Restserver\Libraries\REST_Controller;

/**
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array
 *
 * @package         CodeIgniter
 * @subpackage      Rest Server
 * @category        Controller
 * @author          Phil Sturgeon, Chris Kacerguis
 * @license         MIT
 * @link            https://github.com/chriskacerguis/codeigniter-restserver
 */
class Example extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    function index_get() {
        $no = $this->get('no');
        if ($no == '') {
            $hotel = $this->db->get('order_room')->result();
        } 
        else {
            $this->db->where('no', $no);
            $hotel = $this->db->get('order_room')->result();
        }
        $this->response($hotel, 200);
        }

    function index_post() {
        $data = array( 
                'customer_name' => $this->post('customer_name'),
                'address' => $this->post('address'),
                'phone' => $this->post('phone'),
                'room_type' => $this->post('room_type'),
                'room_quantity' => $this->post('room_quantity'),
                'checkin_at' => $this->post('checkin_at'),
                'checkout_at' => $this->post('checkout_at'));
        echo $data;
        $insert = $this->db->insert('order_room', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function index_put() {
        $no = $this->put('no');
        $data = array(
                    'no' => $this->post('no'), 
                    'customer_name' => $this->post('customer_name'),
                    'address' => $this->post('address'),
                    'phone' => $this->post('phone'),
                    'room_type' => $this->post('room_type'),
                    'room_quantity' => $this->post('room_quantity'),
                    'checkin_at' => $this->post('checkin_at'),
                    'checkout_at' => $this->post('checkout_at'));
        $this->db->where('no', $no);
        $update = $this->db->update('order_room', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function index_delete() {
        $no = $this->delete('no');
        $this->db->where('no', $no);
        $delete = $this->db->delete('order_room');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

}
