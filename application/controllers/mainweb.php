<?php
class Mainweb extends CI_Controller {
    function __construct() {
        parent::__construct();
       $this->lang->load("thai","thai");
    }
    function index(){
         
        $data['title']="Job lao";
        $this->load->view("mainweb/header",$data);
        $this->load->view("mainweb/body");
        $data['data_right']=  $this->Md_mainweb->_getright();
        //$this->load->view("mainweb/right",$data);
        
        $this->load->view("mainweb/footer");  
    }
}

?>
