<?php
class Md_user extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    function _check_login ($user,$pass) {
        $sql="select * from tb_user where `usr_name`='".mysql_real_escape_string($user)."'
                    and `usr_pwd`='".md5($pass)."'and `usr_public`='1'  ";
        $query=  $this->db->query($sql);
         if($rsNum=$query->num_rows()){
           $rs=$query->result();
           $data=array(
               'UsrId'=>$rs[0]->Id ,
               'UsrName'=>$rs[0]->usr_name,
                 );
            
            $this->session->set_userdata($data);
            redirect("user");
         }else{
                $data['process']='0';
                $data['massages']='Login Fail';     
            $data['goto']="user";
            $this->load->view("display",$data);   
         }
            
    }
    function _gender() {
              $sql=  $this->db->order_by('gender_name','ASC')
                                             ->get('tb_gender')
                                            ->result_array();
              return $sql;
    }
    function _queryresume($type=null,$id=null) {
      
        switch ($type):
            case 'add':
                  $data=array(
            'usr_mname'=>  $this->input->post('FirstName'),
            'usr_lname'=>  $this->input->post('LastName'),
            'usr_gender'=>  $this->input->post('Gender'),
            'usr_dob'=>  $this->input->post('DOB_Day'),
             'usr_mob'=>  $this->input->post('DOB_Month'),
             'usr_yob'=>  $this->input->post('DOB_Year'),
            'usr_status'=>  $this->input->post('Status'),
            'usr_height'=>  $this->input->post('Height'),
            'usr_weight'=>  $this->input->post('Weight'),
            'usr_country'=>  $this->input->post('Country'),
             'usr_nation'=>  $this->input->post('Nationality'),
             'usr_religion'=>  $this->input->post('Religion'),
             'usr_email'=>  $this->input->post('Email'),
             'usr_addr'=>  $this->input->post('Address'),
             'usr_postcode'=>  $this->input->post('Postcode'),
            'usr_city'=>  $this->input->post('Amphour'),
            'usr_province'=>  $this->input->post('Province'),
            'usr_tel'=>  $this->input->post('Tel'),
             'usr_mobile'=>  $this->input->post('Mobile'),
            
            'usr_name'=>  $this->input->post('username'),
            'usr_pwd'=>md5($this->input->post('password')),
            'usr_date'=>  date("Y-m-d"),
           'usr_update'=>  date("Y-m-d"),    
            'usr_public'=> '1'
           );
                return $this->db->insert('tb_user',$data);
                break;
            case 'edit':
                  $data=array(
           
            'usr_mname'=>  $this->input->post('FirstName'),
            'usr_lname'=>  $this->input->post('LastName'),
            'usr_gender'=>  $this->input->post('Gender'),
            'usr_dob'=>  $this->input->post('DOB_Day'),
             'usr_mob'=>  $this->input->post('DOB_Month'),
             'usr_yob'=>  $this->input->post('DOB_Year'),
            'usr_status'=>  $this->input->post('Status'),
            'usr_height'=>  $this->input->post('Height'),
            'usr_weight'=>  $this->input->post('Weight'),
            'usr_country'=>  $this->input->post('Country'),
             'usr_nation'=>  $this->input->post('Nationality'),
             'usr_religion'=>  $this->input->post('Religion'),
             'usr_email'=>  $this->input->post('Email'),
             'usr_addr'=>  $this->input->post('Address'),
             'usr_postcode'=>  $this->input->post('PostCode'),
            'usr_city'=>  $this->input->post('Amphour'),
            'usr_province'=>  $this->input->post('Province'),
            'usr_tel'=>  $this->input->post('Tel'),
             'usr_mobile'=>  $this->input->post('Mobile'),
            
//            'usr_name'=>  $this->input->post('username'),
//            'usr_pwd'=>md5($this->input->post('password')),
//            'usr_date'=>  date("Y-m-d"),
             'usr_update'=>  date("Y-m-d")  
                      );
        //    'usr_public'=> '1'
            
                      return $this->db->where('Id',$this->input->post('UID'))
                                                                                                    ->update('tb_user',$data);
            
            
                break;
        endswitch;
    }
    function _getday($day) {
        for($i=1;$i<=31;$i++) {
            if($day==$i) {
                $sd="selected";
            }else{
                $sd="";
            }
            echo "<option value=\"$i\" $sd>$i</option>";
        }
    }
    function _getmonth($mon=null) {
        $month=array("January","February","March","April","May","June","July","August","September","October","November","December");
        for($i=0;$i<=11;$i++) {
            $ii=$i+1;
            if($mon==$ii) {
                $sd="selected";
            }else{
                $sd="";                
            } 
            echo "<option value=\"$ii\" $sd>".$month[$i]."</option>";
            
           // echo "<option=\"$ii\" $sd>$month[$i]</option>";
        }
    }
   function _getyear($year=null){
       $ey=date("Y")-60;
       $by=date("Y");
       for($i=$ey;$i<=$by;$i++):
              if($year==$i) {
                $sd="selected";
            }else{
                $sd="";                
            } 
           echo "<option value=\"$i\" $sd>$i</i>";
           
       endfor;
   }
   function _getstatus($status){
       $sql=  $this->db->get("tb_status")->result_array();
                                    foreach($sql as $rs){
                                     if($rs['Id']==$status) {
                                         echo $sd="selected";
                                     }else{
                                         echo $sd="";
                                     }  
                                     echo "<option value=\"".$rs['Id']."\" $sd>".$rs['sta_name']."</option>";
                                    }
   }
      function _getgender($gender){
       $sql=  $this->db->get("tb_gender")->result_array();
                                    foreach($sql as $rs){
                                     if($rs['Id']==$gender) {
                                         echo $sd="selected";
                                     }else{
                                         echo $sd="";
                                     }  
                                     echo "<option value=\"".$rs['Id']."\" $sd>".$rs['gender_name']."</option>";
                                    }
   }
   function _getreligion($rel){
         $sql=  $this->db->get("tb_religion")->result_array();
                                    foreach($sql as $rs){
                                     if($rs['Id']==$rel) {
                                         echo $sd="selected";
                                     }else{
                                         echo $sd="";
                                     }  
                                     echo "<option value=\"".$rs['Id']."\" $sd>".$rs['religion_name']."</option>";
                                    }
   }
   function _getnationality($nation){
          $sql=  $this->db->get("tb_nationality")->result_array();
                                    foreach($sql as $rs){
                                     if($rs['Id']==$nation) {
                                         echo $sd="selected";
                                     }else{
                                         echo $sd="";
                                     }  
                                     echo "<option value=\"".$rs['Id']."\" $sd>".$rs['nation_name']."</option>";
                                    }
       
   }
   function _getselecttype($tb,$type=null,$field1,$field2) {
       $sql=  $this->db->get($tb)->result_array();
       foreach ($sql as $rs) {
           if($rs[$field1]==$type){
               $sd="selected";
           }else{
               $sd="";
           }
           echo "<option value=\"".$rs[$field1]."\">".$rs[$field2]."</option>";
       }
   }
   
   function _queryworkinterest($type){
       $data=array(
           'wrk_name'=>  $this->input->post('Position1'),
           'wrk_name2'=>  $this->input->post('Position2'),
           'wrk_name3'=>  $this->input->post('Position3'),
           'wrk_work'=>  $this->input->post('Jobtype1'),
           'wrk_work2'=>  $this->input->post('Jobtype2'),
           'wrk_type'=>  $this->input->post('Jobtype_Fulltime'),
           'wrk_type2'=>  $this->input->post('Jobtype_Parttime'),
           'wrk_type3'=>  $this->input->post('Jobtype_Freelane'),
           'wrk_type4'=>  $this->input->post('Jobtype_Intern'),
           'wrk_salary'=>  $this->input->post('Salary'),
           'wrk_local'=>  $this->input->post('Place'),
           'wrk_canwork'=>  $this->input->post('StartWorkDate'),
           'usr_id'=>  $this->input->post('UID'),
           
       );
       $tb='tb_wrk_interest';
       switch ($type):
           case 'add':
            return $this->db->insert($tb,$data) ;
               
               break;
           case 'edit':
               return $this->db->where("usr_id",  $this->input->post('UID'))->update($tb,$data);
               break;
       endswitch;
   }
   
   
   function _queryeducation($type){
       $data=array(
           'e1'=>  $this->input->post('e1'),
           'e2'=>  $this->input->post('e2'),
           'e3'=>  $this->input->post('e3'),
           'e4'=>  $this->input->post('e4'),
           'e5'=>  $this->input->post('e5'),
           'e6'=>  $this->input->post('e6'),
           'e7'=>  $this->input->post('e7'),
           'e8'=>  $this->input->post('e8'),
           'usr_id'=>  $this->input->post('UID'),
           
       );
         $data2=array(
           'ee1'=>  $this->input->post('ee1'),
           'ee2'=>  $this->input->post('ee2'),
           'ee3'=>  $this->input->post('ee3'),
           'ee4'=>  $this->input->post('ee4'),
           'ee5'=>  $this->input->post('ee5'),
           'ee6'=>  $this->input->post('ee6'),
           'ee7'=>  $this->input->post('ee7'),
           'ee8'=>  $this->input->post('ee8'),
           'usr_id'=>  $this->input->post('UID'),
           
       );
           $data3=array(
           'eee1'=>  $this->input->post('eee1'),
           'eee2'=>  $this->input->post('eee2'),
           'eee3'=>  $this->input->post('eee3'),
           'eee4'=>  $this->input->post('eee4'),
           'eee5'=>  $this->input->post('eee5'),
           'eee6'=>  $this->input->post('eee6'),
           'eee7'=>  $this->input->post('eee7'),
           'eee8'=>  $this->input->post('eee8'),
           'usr_id'=>  $this->input->post('UID'),
           
       );
       $tb='tb_education';
       $tb2="tb_education2";
       $tb3="tb_education3";
       switch ($type):
           case 'add':
             $sql.=$this->db->insert($tb,$data) ;
               $sql.=$this->db->insert($tb2,$data2) ;
               $sql.=$this->db->insert($tb3,$data3) ;
               return $sql;
                            
               
               break;
           case 'edit':
            $sql.=$this->db->where('usr_id',  $this->input->post('UID'))->update($tb,$data) ;
             $sql.=$this->db->where('usr_id',  $this->input->post('UID'))->update($tb2,$data2) ;
              $sql.=$this->db->where('usr_id',  $this->input->post('UID'))->update($tb3,$data3) ;
              return $sql;
               break;
       endswitch;
   }
   
   function _queryhistory($type){
       switch ($type):
           case 'add':
               for($i=0;$i<=4;$i++):
             //      $h1=  $this->input->post('h1');
                 $dtata=array(
                     'h1'=>  $this->input->post('h1')[$i],
                     'h2'=>  $this->input->post('h2')[$i],
                     'h3'=>  $this->input->post('h3')[$i],
                     'h4'=>  $this->input->post('h4')[$i],
                     'h5'=>  $this->input->post('h5')[$i],
                     'h6'=>  $this->input->post('h6')[$i],
                     'h7'=>  $this->input->post('h7')[$i],
                     'h8'=>  $this->input->post('h8')[$i],
                     'h9'=>  $this->input->post('h9')[$i],
                     'h10'=>  $this->input->post('h10')[$i],
                     'h11'=>  $this->input->post('h11')[$i],
                     'usr_id'=>  $this->input->post("UID"),
                     'val'=>$i
                     
                     );
                    $sql= $this->db->insert("tb_history",$dtata);       
               endfor; 
               return $sql;
               break;
           case 'edit':
                  for($i=0;$i<=4;$i++):
             //      $h1=  $this->input->post('h1');
                 $dtata=array(
                     'h1'=>  $this->input->post('h1')[$i],
                     'h2'=>  $this->input->post('h2')[$i],
                     'h3'=>  $this->input->post('h3')[$i],
                     'h4'=>  $this->input->post('h4')[$i],
                     'h5'=>  $this->input->post('h5')[$i],
                     'h6'=>  $this->input->post('h6')[$i],
                     'h7'=>  $this->input->post('h7')[$i],
                     'h8'=>  $this->input->post('h8')[$i],
                     'h9'=>  $this->input->post('h9')[$i],
                     'h10'=>  $this->input->post('h10')[$i],
                     'h11'=>  $this->input->post('h11')[$i],
                     'usr_id'=>  $this->input->post("UID")
                     
                     );
                    $sql= $this->db->where('usr_id',  $this->input->post('UID'))
                                                ->where('val',$i)->update("tb_history",$dtata);       
                    endfor; 
               return $sql;
               break;
       endswitch;
   }
   
   function _querytraining($type){
       switch ($type):
           case 'add':
               for($i=0;$i<=4;$i++):
             //      $h1=  $this->input->post('h1');
                 $dtata=array(
                     'tr1'=>  $this->input->post('t1')[$i],
                     'tr2'=>  $this->input->post('t2')[$i],
                     'tr3'=>  $this->input->post('t3')[$i],
                     'tr4'=>  $this->input->post('t4')[$i],
                     'tr5'=>  $this->input->post('t5')[$i],
                     'tr6'=>  $this->input->post('t6')[$i],  
                     'val'=>$i,
                     'usr_id'=>  $this->input->post("UID")
                   );
                    $sql= $this->db->insert("tb_training",$dtata);       
               endfor; 
               return $sql;
               break;
           case 'edit':
                  for($i=0;$i<=4;$i++):
             //      $h1=  $this->input->post('h1');
                 $dtata=array(
                    'tr1'=>  $this->input->post('t1')[$i],
                     'tr2'=>  $this->input->post('t2')[$i],
                     'tr3'=>  $this->input->post('t3')[$i],
                     'tr4'=>  $this->input->post('t4')[$i],
                     'tr5'=>  $this->input->post('t5')[$i],
                     'tr6'=>  $this->input->post('t6')[$i]
               
                     
                     );
                    $sql= $this->db->where('usr_id',  $this->input->post('UID'))
                                                ->where('val',$i)->update("tb_training",$dtata);       
                    endfor; 
               return $sql;
               break;
       endswitch;
   }
   function _queryresult($type) {
       $tb="tb_result";
          $data=array(
                   'r1'=>  $this->input->post('r1'),
                   'r2'=>  $this->input->post('r2'),
                   'r3'=>  $this->input->post('r3'),
                   'r4'=>  $this->input->post('r4'),           
                   'r5'=>  $this->input->post('r5'),
                   'r6'=>  $this->input->post('r6'),
                   'r7'=>  $this->input->post('r7'),
                   'r8'=>  $this->input->post('r8'),
                   'r9'=>  $this->input->post('r9'),
                   'r10'=>  $this->input->post('r10'),
                   'r11'=>  $this->input->post('r11'),
                   'r12'=>  $this->input->post('r12'),
                   'r13'=>  $this->input->post('r13'),
                   'r14'=>  $this->input->post('r14'),
                   'r15'=>  $this->input->post('r15'),
                   'r16'=>  $this->input->post('r16'),
                   'r17'=>  $this->input->post('r17'),
                   'r18'=>  $this->input->post('r18'),
                   'r19'=>  $this->input->post('r19'),
                   'r20'=>  $this->input->post('r20'),
                   'r21'=>  $this->input->post('r21'),
           
                   'usr_id'=>  $this->input->post('UID')
               );
       switch ($type):
           case 'add':
               return  $this->db->insert($tb,$data);
               break;
                
           case 'edit':
               return $this->db->where('usr_id',  $this->input->post('UID'))->update($tb,$data);
               break;
       endswitch;
       
   }
   function _querypic($type,$UsrId){
       switch($type):
           case 'add':
            
  $path = "images/img_user/";

	$valid_formats = array("jpg", "png", "gif", "bmp");
	if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
		{
			$name = $_FILES['photoimg']['name'];
			$size = $_FILES['photoimg']['size'];
			
			if(strlen($name))
				{
					list($txt, $ext) = explode(".", $name);
					if(in_array($ext,$valid_formats))
					{
					if($size<(1024*1024))
						{
							$actual_image_name = time().".".$ext;
							$tmp = $_FILES['photoimg']['tmp_name'];
                                                                                                         
                                                                                                                                    $num=  $this->db->where('usr_id',$UsrId)
                                                                                                                                            ->count_all_results("tb_userpic");
                                                                                                                                    if($num >0) {
                                                                                                                                        $sql=  $this->db->where('usr_id',$UsrId)->get("tb_userpic")->result_array();
                                                                                                                                        foreach($sql as $rs){
                                                                                                                                        if(move_uploaded_file($tmp, $path.$actual_image_name))
								{
								//mysql_query("UPDATE users SET profile_image='$actual_image_name' WHERE uid='$session_id'");
								$data=array('pic_name'=>$actual_image_name);
                                                                                                                                            $this->db->where('usr_id',$UsrId)->update("tb_userpic",$data);
                                                                                                                                            @unlink($path."".$rs['pic_name']);
								
                                                                                                                                            echo "<img src='images/img_user/".$actual_image_name."'  class='preview img-polaroid' style='width:200px;height:240px'>";
								} else {
								echo "failed";
                                                                                                                                          }
                                                                                                                                    }
                                                                                                                                    }else{
                                                                                                                                        $data=array(
                                                                                                                                            'pic_name'=>$actual_image_name,
                                                                                                                                            'usr_id'=>$UsrId
                                                                                                                                        );
                                                                                                                                        $this->db->insert('tb_userpic',$data);
                                                                                                                                        move_uploaded_file($tmp, $path.$actual_image_name);
                                                                                                                                          echo "<img src='images/img_user/".$actual_image_name."'  class='preview img-polaroid'  style='width:200px;height:240px'>";
                                                                                                                                    }
						}
						else
						echo "Image file size max 1 MB";					
						}
						else
						echo "Invalid file format..";	
				}
				
			else
				echo "Please select image..!";
				
			exit;
		}
               
               break;
           
       endswitch;
           
      
   }
      function _querypassword(){
          $data=array(
              'usr_name'=>  $this->input->post('username'),
              'usr_pwd'=>md5($this->input->post('password'))
          );
          return $this->db->where('Id',  $this->input->post('UID'))->update('tb_user',$data);
      }
}
?>
