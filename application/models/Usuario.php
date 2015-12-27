<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author LFarfan
 */
//get_instance()->load->iface('ModelCRUD_Interface');

class Usuario extends MY_Model {

    function __construct() {
        parent::__construct();
        $this->table_name = 'USUARIO';
    }

    public function get_sesion($data) {
        return $this->get_all_where(false, false, $data);
    }

    public function actualizar() {
        
    }

    public function agregar() {
        
    }

    public function getAll() {
        return $this->get_all();
    }

    public function getAll_ById() {
        
    }

    public function getAll_where($data) {
        
    }

}
