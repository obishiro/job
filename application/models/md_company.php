<?php
class md_company extends CI_Model{
    function __construct() {
        parent::__construct();
    }
        function _check_login ($user,$pass) {
        $sql="select * from tb_user_company  where `usr_name`='".mysql_real_escape_string($user)."'
                    and `usr_pwd`='".md5($pass)."'and `usr_public`='1'  ";
       
        $query=  $this->db->query($sql);
 
         if($rsNum=$query->num_rows()){
           $rs=$query->result();
           $data=array(
               'UsrComId'=>$rs[0]->Id ,
               'UsrComName'=>$rs[0]->usr_name,
                 );
            
            $this->session->set_userdata($data);
            redirect("company");
         }else{
                $data['process']='0';
                $data['massages']='Login Fail';     
            $data['goto']="company";
            $this->load->view("display",$data);   
         }
            
    }
}

?>
