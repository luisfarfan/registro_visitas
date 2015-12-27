<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Comunes
 *
 * @author LFarfan
 */
class Comunes extends MY_Model {

    function __construct() {
        parent::__construct();
    }

    public function get_dependencias() {
        return $this->get_by_campos('TDEPENDENCIAS', false, 'CODI_DEPE_TDE,DESC_DEPE_TDE');
    }

    public function get_sedes_inei() {
        return $this->get_by_campos('SEDES_INEI', false, 'CODI_SEDE_SED,DESC_SEDE_SED',array('INDI_AGEN_SED'=>0));
    }

    public function get_tipo_planilla() {
        return array('');
    }

}
