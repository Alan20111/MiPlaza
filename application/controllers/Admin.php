<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('upload');
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
        $Act2 = $this->input->post("formAct2");
        $Act3 = $this->input->post("formAct3");
        $Act4 = $this->input->post("formAct4");
        $Act5 = $this->input->post("formAct5");

        $Tittle = $this->input->post("formTittle");
        $Tittle_nav = $this->input->post("formTittle-nav");

        $Area = $this->input->post("formArea");
        $Color = $this->input->post("formColor");
        $Shadow = $this->input->post("formShadow");

        $rutaImagenes = 'public/img/db/'; // Asegúrate de que esta sea la ruta correcta en el sistema de archivos

        $this->upload->do_upload("formFile");
        $nombreArchivo = $_FILES["formFile"]["name"];

        // Genera un nombre único para el archivo (puedes usar uniqid o cualquier otro método)
        $nombreUnico = uniqid() . '_' . $nombreArchivo;

        // Combina la ruta de almacenamiento de imágenes con el nombre único para obtener la ruta completa del archivo
        $pathFile = $rutaImagenes . $nombreUnico;

        // Mueve el archivo cargado a la ubicación deseada en el sistema de archivos del servidor
        if (move_uploaded_file($_FILES["formFile"]["tmp_name"], $pathFile)) {
            $formData = array(
                'act1' => $Act1,
                'act2' => $Act2,
                'act3' => $Act3,
                'act4' => $Act4,
                'act5' => $Act5,

                'tittle' => $Tittle,
                'navtittle' => $Tittle_nav,

                'descripcion' => $Area,
                'color' => $Color,
                'sombra' => $Shadow,

                'imgName'=> $nombreArchivo,
                'img' => $pathFile // El pathFile ahora contiene la ruta completa con el nombre único
            );

            $idTarjeta = $this->login->getCards($formData);

            $formData = array();

            $formData['mensaje'] = "registro con éxito";
            $formData['idUsuario'] = $idTarjeta;

            echo json_encode($formData, JSON_NUMERIC_CHECK);
        } else {
            // Error al mover el archivo
        }

    }
    public function readData()
    {
        $tarjetas = $this->login->readCards();
        $formData = array();
        if ($tarjetas) {
            $formData["status"] = 'success';
            $formData["tarjetas"] = $tarjetas;
        } else {
            $formData["status"] = 'error';
        }
        echo json_encode($formData, JSON_NUMERIC_CHECK);
    }
}