<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{



    public function __construct()
    {
        parent::__construct();
        $this->load->model('login');
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->view('login-admin');
    }
    public function login()
    {
        $user = $this->input->post('user');
        $contrasena = $this->input->post('contrasena');

        $checkUser = $this->login->leerUser($user, $contrasena);

        if ($checkUser) {
            $data = array(
                'usuario' => $checkUser->usuario,
                'status' => 'true'
            );
        } else {
            $data = array('Status' => 'False');
        }
        echo json_encode($data, JSON_NUMERIC_CHECK);
    }
}