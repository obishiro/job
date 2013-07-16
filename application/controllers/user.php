<?php
class User  extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('Md_user');
        $this->lang->load("thai","thai");
       
    }
    function index(){
        $data['title']="Index";
        $this->load->view("mainweb/header",$data);
        //$this->load->view("mainweb/body");
        
        echo "ID:".$this->session->userdata('UsrId');
        echo "NAME:".$this->session->userdata('UsrName');
        if($this->session->userdata('UsrId')){
            $data=array(
                'UsrId'=>$this->session->userdata('UsrId'),
                'UsrName'=>$this->session->userdata('UsrName')
                    
            );
            $this->load->view("user/user_menu",$data);
        }else{
        $this->load->view("user/frm_login",$data);
        }
        
        
        $this->load->view("mainweb/footer");
    }
    function login(){
        $data['title']="Login";
         $this->load->view("mainweb/header",$data);
     //   $this->load->view("mainweb/body");
       if($this->input->post('bt-login') !=null) {
          $check = $this->Md_user->_check_login($this->input->post('username'),  $this->input->post('password'));            
       }
         $this->load->view("mainweb/footer"); 
 
    }
    function logout(){
        $data=array(
            'UsrId'=>'',
            'UsrName'=>'UsrName'
        );
    $this->session->unset_userdata($data);
     
    redirect(base_url());
    }
            function register() {
           $data['title']="Register";
            $this->load->view("mainweb/header",$data);
         //  $this->load->view("mainweb/body");
       
        if($this->input->post('bt-register')) {
            if($this->Md_user->_query('add')) {
                $data['massages']='Save success';
                 $data['process']='1';
                 $data['goto']='user/';
                 }else{
                $data['massages']='Save unsuccess';
                 $data['process']='0';
                 $data['goto']='user/register/';
            }
             $this->load->view("display",$data);   
            
        }
        
        $data['gender']=  $this->Md_user->_gender();
        $this->load->view("user/frm_register",$data); 
          $this->load->view("mainweb/footer"); 
 
    }
    function editresume(){
          if($this->input->post('bt_resume-edit')!=null) {
          if($this->Md_user->_queryresume('edit')) {  
              echo "ok";
          }
          }
         
    }

       function workinterest($type){
          switch($type):
            case 'add':
          if($this->input->post('addwork-interest')!=null) {
          if($this->Md_user->_queryworkinterest('add')) {  
              echo "ok";
          }
          }
          break;
            case 'edit':
                   if($this->input->post('editwork-interest')!=null) {
          if($this->Md_user->_queryworkinterest('edit')) {  
              echo "ok";
          }
          }
                break;
          endswitch;
    }
   
    function education($type){
          switch($type):
            case 'add':
          if($this->input->post('add-education')!=null) {
          if($this->Md_user->_queryeducation('add')) {  
              echo "ok";
          }             
          }
          break;
            case 'edit':
                    if($this->input->post('edit-education')!=null) {
          if($this->Md_user->_queryeducation('edit')) {  
              echo "ok";
          }             
          }
                break;
          endswitch;
    }
    
      function history($type){
          switch($type):
            case 'add':
          if($this->input->post('add-history')!=null) {
          if($this->Md_user->_queryhistory('add')) {  
              echo "ok";
          }             
          }
          break;
            case 'edit':
                    if($this->input->post('edit-history')!=null) {
          if($this->Md_user->_queryhistory('edit')) {  
              echo "ok";
          }             
          }
                break;
          endswitch;
    }
 
  function training($type){
          switch($type):
            case 'add':
          if($this->input->post('add-training')!=null) {
          if($this->Md_user->_querytraining('add')) {  
              echo "ok";
          }             
          }
          break;
            case 'edit':
                    if($this->input->post('edit-training')!=null) {
          if($this->Md_user->_querytraining('edit')) {  
              echo "ok";
          }             
          }
                break;
          endswitch;
    }
 
    function result($type){
          switch($type):
            case 'add':
          if($this->input->post('add-result')!=null) {
          if($this->Md_user->_queryresult('add')) {  
              echo "ok";
          }             
          }
          break;
            case 'edit':
                    if($this->input->post('edit-result')!=null) {
          if($this->Md_user->_queryresult('edit')) {  
              echo "ok";
          }             
          }
                break;
          endswitch;
    }
    
        function pic($type,$usr){
            
          switch($type):
          case 'add':
              $this->Md_user->_querypic('add',$usr);
          break;
//            case 'edit':
//                    if($this->input->post('edit-pic')!=null) {
//          if($this->Md_user->_querypic('edit')) {  
//              echo "ok";
//          }             
//          }
//                break;
          endswitch;
    }
    
}

?>
