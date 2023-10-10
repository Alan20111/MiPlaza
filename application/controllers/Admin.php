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
    function addcard()
    {
        $this->load->view('addcard');
    }
    public function login()
    {
        $user = $this->input->post('user');
        $contrasena = $this->input->post('contrasena');

        $checkUser = $this->login->leerUser($user, $contrasena);

        if ($checkUser) {
            $data = array(
                'user' => $checkUser->user,
                'status' => 'true'
            );
        } else {
            $data = array('Status' => 'False');
        }
        echo json_encode($data, JSON_NUMERIC_CHECK);
    }
    public function uploadData()
    {
        $Act1 = $this->input->post("formAct1");

        $Act1 = $this->input->post("formAct1");
        $Act2 = $this->input->post("formAct2");
        $Act3 = $this->input->post("formAct3");
        $Act4 = $this->input->post("formAct4");
        $Act5 = $this->input->post("formAct5");

        $Tittle = $this->input->post("formTittle");
        $Tittle_nav = $this->input->post("formTittle-nav");

        $Area = $this->input->post("formArea");
        $Color = $this->input->post("formColor");

        $this->upload->do_upload("img");
        $rutaArchivo = "public/img/";
        $nombreArchivo = $_FILES["img"]["name"];
        $pathFile = $rutaArchivo . $nombreArchivo;

        move_uploaded_file($_FILES["img"]["tmp_name"], $pathFile);


        $fomrData = array(
            'Act' => $Act,
            'informacion' => $contenido,
            'img_url' => $pathFile
        );

        $idTarjeta = $this->guardar_mdl->crearTarjetas($datosTarjeta);

        $datosEnviar = array();

        $datosEnviar['mensaje'] = "registro con exito";
        $datosEnviar['idUsuario'] = $idTarjeta;

        echo json_encode($datosEnviar, JSON_NUMERIC_CHECK);


    }
}