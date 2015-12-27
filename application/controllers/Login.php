<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login
 *
 * @author LFarfan
 */
class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('usuario');
    }

    public function index() {
        $this->load->view('Login/login');
    }

    public function validar_sesion() {
        if (isset($_POST['USUARIO_USU'])) {
            $data = $this->usuario->get_sesion($_POST);
            if (count($data)) {
                $_SESSION['usuario'] = $data;
                redirect();
            } else {
                redirect('Login');
            }
        } else {
            redirect('Login');
        }
    }

}
