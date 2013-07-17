<?php
class Company extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->model('Md_company');
        $this->lang->load("thai","thai");
    }
   function index(){
        $data['title']="Index";
        $this->load->view("mainweb/header",$data);
        //$this->load->view("mainweb/body");
        
        echo "ID:".$this->session->userdata('UsrComId');
        echo "NAME:".$this->session->userdata('UsrComName');
        if($this->session->userdata('UsrComId')){
            $data=array(
                'UsrId'=>$this->session->userdata('UsrComId'),
                'UsrName'=>$this->session->userdata('UsrComName')
                    
            );
            $this->load->view("company/company_menu",$data);
            
          
        }else{
        $this->load->view("company/frm_login",$data);
        }
        
        
        $this->load->view("mainweb/footer");
    }
    function login(){
         $data['title']="Login";
         $this->load->view("mainweb/header",$data);
     //   $this->load->view("mainweb/body");
       if($this->input->post('bt-login') !=null) {
          $check = $this->Md_company->_check_login($this->input->post('username'),  $this->input->post('password'));            
       }
         $this->load->view("mainweb/footer"); 
 
    }
    function register(){
          $data['title']="Login";
         $this->load->view("mainweb/header",$data);
         $this->load->view("company/frm_register");
         $this->load->view("mainweb/footer"); 
         
    }
    }
 
?>
