<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Bienvenido
 *
 * @author LFarfan
 */
class Bienvenido extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('maestro_personal');
    }

    public function index() {

//        $this->benchmark->mark('code_start');
//        header('Content-type: application/json');
////        $data = array('SEDE_ACTU_PER' => '000', 'ESTA_TRAB_PER' => 2);
//        $campos = 'DNI,NOMB_CORT_PER,TPLANI,CARGO';
//        echo json_encode($this->maestro_personal->getAll_where($data, $campos));
//        $this->benchmark->mark('code_end');
//        echo $this->benchmark->elapsed_time('code_start', 'code_end');
        layout('bienvenido');
    }

}
