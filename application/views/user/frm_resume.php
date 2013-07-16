<?php
    $sql_resume=$this->db->where('Id',$UsrId)
                                ->get("tb_user")->result_array();
    foreach($sql_resume as $rs_resume) { ?>
<!--<form action="<?=base_url();?>user/editresume" method="POST" id="form-resume">-->
<form   method="POST" id="form-resume">
<table bgcolor=White border=0 width=100% cellspacing=2 cellpadding=2>
 
<tr>
    <td height="40"  width=150 align=left valign=middle>
        <span class="head1 black">Email</span>
    </td>
    <td height="40"  align=left valign=middle>
        <div style="font-size:13px;position:relative;float:left;"> 
        
            <INPUT  TYPE=TEXT style="font-size:13px;width:200px;" NAME="Email" id="Email" maxLength=70 value="<?=$rs_resume['usr_email'];?>">
          
        </div>
         
    </td>
</tr>
<tr>
    <td height="40"  width=150 align=left valign=middle>
        <div style="font-size:13px;position:relative;float:left;margin-left:0px;margin-top:4px;text-align:left;">
        <span class="head1 black">ชื่อ</span>
        </div>
    </td>
    <td height="40"  align=left valign=middle>
        <div style="font-size:13px;float:left;">
            <INPUT  TYPE=TEXT style="font-size:13px;width:200px;" NAME="FirstName" id="FirstName" 
                   maxLength=50 value="<?=$rs_resume['usr_mname'];?>">
        
        </div>
         
    </td>
</tr>
<tr>
    <td height="40"  width=150 align=left valign=middle>
        <div style="font-size:13px;position:relative;float:left;margin-left:0px;margin-top:4px;text-align:left;">
            <span class="head1 black">นามสกุล</span>
        </div>
    </td>
    <td height="40"  align=left valign=middle>
        <div style="font-size:13px;float:left;">
            <INPUT  TYPE=TEXT style="font-size:13px;width:200px;" NAME="LastName" id="LastName" 
                   maxLength=50 value="<?=$rs_resume['usr_lname'];?>">
             
        </div>
         
    </td>
</tr>
<tr>
    <td height="40"  width=150  align=left valign=middle>
        <div style="font-size:13px;position:relative;float:left;margin-left:0px;margin-top:4px;text-align:left;">
            <span class="head1 black">วันเดือนปีเกิด</span>
        </div>
    </td>
    <td height="40"  align=left valign=middle>
        <select NAME="DOB_Day" id="DOB_Day"  style="font-size:13px;width:46px;"> 
                  
            <?php
            echo "<option></option>";
            $this->Md_user->_getday($rs_resume['usr_dob']);
          ?>
        </select>
        <select NAME="DOB_Month" id="DOB_Month"  style="font-size:13px;width:105px; margin-left:0px;">
           <?php
            echo "<option></option>";
            $this->Md_user->_getmonth($rs_resume['usr_mob']);
          ?>
           
        </select>
        <select NAME="DOB_Year" id="DOB_Year"  style="font-size:13px;width:80px; margin-left:0px;"> 
                        <?php
            echo "<option></option>";
            $this->Md_user->_getyear($rs_resume['usr_yob']);
          ?>
        </select>            
       
     </td>
</tr>
<tr>
    <td height="40"  width=150  align=left valign=bottom>
        <div style="font-size:13px;position:relative;float:left;margin-left:0px;margin-top:4px;text-align:left;">
            <span class="head1 black">เพศ</span>
        </div>
    </td>
    <td height="40"  align=left valign=bottom>
        <table border=0 align=left cellpadding=0 cellspacing=0>
        <tr>
            <td height="40"  width=160 align=left valign=middle>
       <select NAME="Gender" id="Marital_Status"  style="font-size:13px;width:80px;"> 
                       <option></option>
                        <?php
                            $this->Md_user->_getgender($rs_resume['usr_gender']);
                        ?>
                </select>
            </td>
            <td height="40"  width=100 align=left valign=middle><span class="head1 black">สถานภาพสมรส</span></td>
            <td height="40"  width=120 align=left valign=middle>
                <select NAME="Status" id="Marital_Status"  style="font-size:13px;width:80px;"> 
                       <option></option>
                        <?php
                            $this->Md_user->_getstatus($rs_resume['usr_status']);
                        ?>
                </select>
	    </td>
        </tr>
        </table>
    </td>
</tr>
<tr>
    <td height="40"  width=150  align=left valign=bottom>
        <div style="font-size:13px;position:relative;float:left;margin-left:0px;margin-top:4px;text-align:left;">
            <span class="head1 black">ส่วนสูง</span>
        </div>
    </td>
    <td height="40"  align=left valign=bottom>
        <table border=0 align=left cellpadding=0 cellspacing=0>
        <tr>
            <td height="40"  width=160 align=left valign=middle>
		  <input  type=text name="Height" id="Height"  style="font-size:13px;width:60px;" maxLength=3 value="<?=$rs_resume['usr_height'];?>">      
                <span class="head1 black">เซนติเมตร</span>
            </td>
            <td height="40"  width=100 align=left valign=middle>
                <span class="head1 black">น้ำหนัก</span>
            </td>
            <td height="40"  width=120 align=left valign=top>
		   <input  type=text name="Weight" id="Weight"  style="font-size:13px;width:60px;" maxLength=3 value="<?=$rs_resume['usr_weight'];?>" >      
                <span class="head1 black">กิโลกรัม</span>
            </td>
        </tr>
        </table>
    </td>
</tr>
<tr>
    <td height="40"  width=150  align=left valign=bottom>
        <div style="font-size:13px;position:relative;float:left;margin-left:0px;margin-top:4px;text-align:left;">
            <span class="head1 black">สัญชาติ</span>
        </div>
    </td>
    <td height="40"  align=left valign=bottom>
        <table border=0 align=left cellpadding=0 cellspacing=0>
        <tr>
            <td height="40"  width=160 align=left valign=middle>
	   <select  style="font-size:13px;width:145px;" NAME="Nationality" id="Nationality">
                        <?php
                        $this->Md_user->_getnationality($rs_resume['usr_nation']);?>
                        ?>
	   </select>
            </td>
            <td height="40"  width=100 align=left valign=middle>
                <span class="head1 black">ศาสนา</span>
            </td>
            <td height="40"  width=120 align=left valign=middle>
		<select  style="font-size:13px;width:100px;" NAME="Religion" id="Religion">
		    <option value=""></option>
                                        <?php
                                        $this->Md_user->_getreligion($rs_resume['usr_religion']);
                                        ?>
		    </select>
            </td>
        </tr>
        </table>
    </td>
</tr>
 
</table>
<table bgcolor=White border=0 width=100% cellspacing=2 cellpadding=2 style="font-size:13px;">
 
<tr>
    <td height="40"  width=150  align=left valign=middle>
        <div style="font-size:13px;position:relative;float:left;margin-left:0px;margin-top:4px;text-align:left;">
            <span class="head1 black">ที่อยู่ปัจจุบัน</span>
        </div>
    </td>
    <td height="40"  align=left valign=middle>
        <textarea NAME="Address" id="Address"  style="height: 75px;width: 250px;"><?=$rs_resume['usr_addr'];?>   </textarea>
        
    </td>
</tr>
<tr id="trProvince" style="font-size:13px;display:table-row;">
    <td height="40"  width=150  align=left valign=middle>
        <span class="head1 black">จังหวัด</span>
    </td>
    <td height="40"  align=left valign=middle>
        <select name="Province" id="Province"   style="font-size:13px;width:200px;">
            <option value="">โปรดระบุ</option>                                           
              </select>
        
    </td>
</tr>
<tr id="trAmphoe" style="font-size:13px;display:table-row;">
    <td height="40"  width=150  align=left valign=middle>
        <span class="head1 black">เขต/อำเภอ</span>
    </td>
    <td height="40"  align=left valign=middle>
        <select id="Amphoe" name="Amphoe"    style="font-size:13px;width:200px;">
            <option value="">โปรดระบุ</option>
                      
                    </select>
        
    </td>
</tr>
<!--<tr id="trTambon" style="font-size:13px;display:table-row;">
    <td height="40"  width=150  align=left valign=middle>
        <span class="head1 black">แขวง/ตำบล</span>
    </td>
    <td height="40"  align=left valign=middle>
        <select id="Tambon" name="Tambon"  style="font-size:13px;width:200px;">
            <option value="">โปรดระบุ</option>
                     
                    </select>
        
    </td>
</tr>-->

<tr>
    <td height="40"  width=150  align=left valign=middle>
        <span class="head1 black">รหัสไปรษณีย์</span>
     </td>
    <td height="40"  align=left valign=middle>
<INPUT  TYPE=TEXT style="font-size:13px;width:200px;" NAME="PostCode" id="PostalCode" value="<?=$rs_resume['usr_postcode'];?>" >
        
     </td>
</tr>
</table>
<table bgcolor=White border=0 width=100% cellspacing=2 cellpadding=2>
<tr>
    <td height="40"  width=150  align=left valign=middle>
        <span class="head1 black">โทรศัพท์บ้าน</span>
    </td>
    <td height="40"  align=left valign=middle>
	  <INPUT  TYPE=TEXT style="font-size:13px;width:200px;" NAME="Tel" id="Tel" maxLength=50 value="<?=$rs_resume['usr_tel'];?>">
    </td>
</tr>
<tr>
    <td height="40"  width=150  align=left valign=middle>
        <span class="head1 black">โทรศัพท์มือถือ</span>
    </td>
    <td height="40"  align=left valign=middle>
	   <INPUT  TYPE=TEXT style="font-size:13px;width:200px;" NAME="Mobile" id="Mobile" maxLength=50 value="<?=$rs_resume['usr_mobile'];?>">
    </td>
</tr> 
    
</table>
          <div class="form-actions">
      <?php echo form_hidden('bt_resume-edit','1');?>  
              <input type="hidden" value="<?=$rs_resume['Id'];?>" name="UID" />
                  
      <button type="button" id="bt-editresume" class="btn btn-primary "><i class="icon-save icon-large"></i> <?=label("save");?></button>
      <button type="reset" class="btn btn-danger"><i class="icon-remove icon-large"></i> <?=label("cancel");?></button>
    </div>
</form>
    <? } ?>