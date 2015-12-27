<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CRUD_Interface
 *
 * @author LFarfan
 */
interface ModelCRUD_Interface {

    public function getAll();

    public function getAll_ById();

    public function agregar();

    public function actualizar();
}
