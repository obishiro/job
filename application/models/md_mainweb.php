<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of mainweb
 *
 * @author obishiro
 */
class Md_mainweb extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    function _getright(){
        $sql=  $this->db->where('MMPublic','1')
                ->get('tb_ads')
                ->result_array();
        return $sql;
    }
}

?>
