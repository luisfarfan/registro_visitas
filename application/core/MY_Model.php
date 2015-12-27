<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MY_Model
 *
 * @author LFarfan
 */
class MY_Model extends CI_Model {

    protected $table_name;

    public function __construct() {
        parent::__construct();
    }

    public function get_all($table = false, $object = false) {
        $table ? $tabla = $table : $tabla = $this->table_name;
        return $object ? $this->db->get($tabla)->result() : $this->db->get($tabla)->result_Array();
    }

    public function get_by_campos($table = false, $object = false, $campos) {
        $table ? $tabla = $table : $tabla = $this->table_name;
        $this->db->select($campos);
        return $object ? $this->db->get($tabla)->result() : $this->db->get($tabla)->result_Array();
    }

    public function get_by_campos_where($table = false, $object = false, $campos, $dato) {
        $table ? $tabla = $table : $tabla = $this->table_name;
        $campos ? $this->db->select($campos) : '';
        return $object ? $this->db->get_where($tabla, $dato)->result() : $this->db->get_where($tabla, $dato)->result_Array();
    }

    public function get_by_campos_where_in($table = false, $object = false, $campos, $camposwhere, $dato) {
        $table ? $tabla = $table : $tabla = $this->table_name;
        $this->db->select($campos);
        if ($dato) {
            array($dato) ? $this->db->where_in($campowhere, $dato) : $this->db->where($campowhere, $dato);
        }
        return $object ? $this->db->get($tabla)->result() : $this->db->get($tabla)->result_Array();
    }

    public function get_all_where_in($table = false, $object = false, $campowhere, $dato) {
        $table ? $tabla = $table : $tabla = $this->table_name;
        array($dato) ? $this->db->where_in($campowhere, $dato) : $this->db->where($campowhere, $dato);
        return $object ? $this->db->get($tabla)->result() : $this->db->get($tabla)->result_Array();
    }

    public function get_all_where($table = false, $object = false, $dato, $campos = false) {
        $table ? $tabla = $table : $tabla = $this->table_name;
        $campos ? $this->db->select($campos) : '';
        return $object ? $this->db->get_where($tabla, $dato)->result() : $this->db->get_where($tabla, $dato)->result_Array();
    }

    public function insertar($data) {
        $this->db->insert($this->table_name, $data);
        return $this->db->insert_id();
    }

    public function update($data, $campowhere, $id) {
        array($id) ? $this->db->where_in($campowhere, $id) : $this->db->where($campowhere, $id);
        $this->db->update($this->table_name, $data);
        return $this->db->error();
    }

    public function get_by_query($cad, $object = false) {
        return $object ? $this->db->query($cad)->result() : $this->db->query($cad)->result_array();
    }

}
