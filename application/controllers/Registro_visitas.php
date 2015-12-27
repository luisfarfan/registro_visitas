<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Registro_visitas
 *
 * @author LFarfan
 */
class Registro_visitas extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('comunes');
        $this->load->model('maestro_personal');
    }

    public function index() {
        $data['dependencias'] = $this->comunes->get_dependencias();
        $data['sedes'] = $this->comunes->get_sedes_inei();
        $data['planilla'] = array(array('TIPO_PLAN_TPL' => '01', 'TPLANI' => 'NOMBRADOS'),
            array('TIPO_PLAN_TPL' => '02', 'TPLANI' => 'C.A.S'),
            array('TIPO_PLAN_TPL' => '03', 'TPLANI' => 'LOC.SERV'));
        layout('registro_visitas/visitas_personal', $data, array('index'));
    }

    public function get_personal_total() {
//        header('Content-Type: application/json');
//        echo json_encode($this->maestro_personal->getAll(),TRUE);
//  

        $where = array_filter($_GET);
//        debug($where);
        unset($where['_']);
        $all = $this->maestro_personal->getAll_where($where);
        $array = array_map(array($this, 'array_values2'), $all);
//        debug($array);
//        for ($i = 0; $i < count($all) - 1; $i++) {
//            $array[] = array_values($all[$i]);
//        }
////        debug($array);
        echo json_encode(array('data' => $array));
    }

    public function get_detalle_persona($dni) {
        $this->maestro_personal->getbyDNI();
    }

    function array_values2($item) {

        return array_values($item);
    }

}
