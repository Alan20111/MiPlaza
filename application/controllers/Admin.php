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
    public function uploadData($idTarjeta = null)
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

        $rutaImagenes = 'public/img/db/';

        // Obtener la información de la tarjeta existente
        $tarjetaExistente = $this->login->getCardData($idTarjeta);

        if ($idTarjeta) {
            // Editar una tarjeta existente
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
                'sombra' => $Shadow
            );

            // Verificar si se proporciona una nueva imagen
            if (!empty($_FILES["formFile"]["name"])) {
                $nombreArchivoAnterior = $tarjetaExistente['imgName'];
                $rutaImagenAnterior = $tarjetaExistente['img'];

                if (!empty($nombreArchivoAnterior) && file_exists($rutaImagenAnterior)) {
                    unlink($rutaImagenAnterior); // Eliminar la imagen anterior
                }

                $this->upload->do_upload("formFile");
                $nombreArchivo = $_FILES["formFile"]["name"];
                $nombreUnico = uniqid() . '_' . $nombreArchivo;
                $pathFile = $rutaImagenes . $nombreUnico;

                if (move_uploaded_file($_FILES["formFile"]["tmp_name"], $pathFile)) {
                    $formData['imgName'] = $nombreArchivo;
                    $formData['img'] = $pathFile;
                }
            }

            $this->login->getCards($formData, $idTarjeta);
        } else {
            // Agregar una nueva tarjeta (mismo código que tenías para agregar)
            $this->upload->do_upload("formFile");
            $nombreArchivo = $_FILES["formFile"]["name"];
            $nombreUnico = uniqid() . '_' . $nombreArchivo;
            $pathFile = $rutaImagenes . $nombreUnico;
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
                    'imgName' => $nombreArchivo,
                    'img' => $pathFile
                );

                $idTarjeta = $this->login->getCards($formData);
            } else {
                // Error al mover el archivo
            }
        }

        $formData = array();
        $formData['mensaje'] = "Registro con éxito";
        $formData['idUsuario'] = $idTarjeta;
        echo json_encode($formData, JSON_NUMERIC_CHECK);
    }
    public function deleteCard($idTarjeta)
    {
        // Consulta la tarjeta para obtener la ruta de la imagen
        $tarjeta = $this->login->getCardData($idTarjeta);

        // Verifica si se encontró la tarjeta
        if ($tarjeta) {
            // Obtiene la ruta de la imagen
            $rutaImagen = $tarjeta['img'];

            // Elimina la tarjeta de la base de datos
            $this->login->deleteCard($idTarjeta);

            unlink($rutaImagen);

            $formData = array();
            $formData['mensaje'] = "Eliminación exitosa";
            echo json_encode($formData, JSON_NUMERIC_CHECK);
        } else {
            // La tarjeta no se encontró, maneja el error
            $formData = array();
            $formData['mensaje'] = "Error: Tarjeta no encontrada";
            echo json_encode($formData, JSON_NUMERIC_CHECK);
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