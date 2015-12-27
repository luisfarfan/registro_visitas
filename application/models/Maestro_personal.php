<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Maestro_personal
 *
 * @author LFarfan
 */
class Maestro_personal extends MY_Model {

    function __construct() {
        parent::__construct();
        $this->table_name = 'INEI.V_LISTA_PERSONAL_TOTAL';
    }

    public function getbyDNI($dni) {
        $campos = 'DEPEN_FISICA,SEDE,DIR_EMP_PER';
        $where = array('CODI_EMPL_PER' => $dni);
        return $this->get_by_campos_where(false, false, $campos, $where);
    }

    public function getAll() {
        $campos = 'DNI,NOMB_CORT_PER,TPLANI,CARGO,DEPEN_FISICA';
        $where = array('TIPO_PLAN_TPL' => '02');
        return $this->get_by_campos_where(false, false, $campos, $where);
//        return $this->get_by_campos(false, false, $campos);
    }

    public function getAll_ById() {
        
    }

    public function getAll_where($where) {
        $campos = 'DNI,NOMB_CORT_PER,TPLANI,CARGO,DEPEN_FISICA';
        return $this->get_all_where(false, false, $where, $campos);
    }

}
