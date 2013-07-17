<form id="frm_edit_result">
    <?php
            $sql_result= $this->db->where('usr_id',$UsrId)->get('tb_result')->result_array();
            foreach($sql_result as $rs_re) { ?>
<table bgcolor=White border=0 width=100% height=300 cellspacing=2 cellpadding=2>
                                                    <tr>
    <td align=left valign=middle width="250">
        <div style=" float:left; clear:both; margin-top:3px; text-align:left;">
            <span class="head1 black">ความสามารถทางภาษา</span>        </div>
  
    </td>
    <td align=left valign=middle>
        <div style=" float:left; clear:both; margin-left:0px; margin-top:0px; text-align:left;">
            <div style=" float:left; text-align:left; margin-left:0px; ">
		
                <span class="head1 black">ภาษา</span>
                 <select style="width:80px" name="r1" id="Language1_Lang" class="validate[required]"  >
                      <option value="" >ระบุ</option>
                    <? $this->Md_user->_getselecttype("tb_lang",$rs_re['r1'],'Id','lang_name');?>            
                </select>
            </div>
            <div style=" float:left; text-align:left; margin-left:0px; display:block; " id="Language1_Detail" name="Language1_Detail">
                                <span class="head1 black">พูด</span>
                                <select style="width:80px" name="r2" id="Language1_Speak" class="validate[required]" >
                                  <option value="" >ระบุ</option>
                                 
                                    <? $this->Md_user->_getselecttype("tb_level",$rs_re['r2'],'Id','level_name');?>                  
                                  </select>
                                <span class="head1 black">อ่าน</span>
                                <select style="width:80px" name="r3" id="Language1_Read" class="validate[required]" >
                <option value="" >ระบุ</option>
                <? $this->Md_user->_getselecttype("tb_level",$rs_re['r3'],'Id','level_name');?>                    
                                                      
                </select>
                                <span class="head1 black">เขียน</span>
                                <select style="width:80px" name="r4" id="Language1_Write" class="validate[required]" 
                                  <option value="" >ระบุ</option>
                               <? $this->Md_user->_getselecttype("tb_level",$rs_re['r4'],'Id','level_name');?>    
                                                      
                </select>
            </div>
        </div>
         
    </td>
</tr>
                                                
<tr>
    <td align=left valign=middle>
        <span class="head1 black">พิมพ์ดีด</span>
    </td>
    <td align=left valign=middle>
	<span class="head1 black" style="margin-right: 10px;">ไทย</span>
	<input class="validate[required]" type="text" name="r5" id="Typing_Thai" style="width:40px;" maxLength=3 value="<?=$rs_re['r5'];?>"  ><span class="head1 black"> คำ/นาที</span>
	<span class="head1 black" style="margin-right: 10px;margin-left: 20px;">อังกฤษ</span>
	<input class="validate[required]" type="text" name="r6" id="Typing_Eng" style="width:40px;" maxLength=3 value="<?=$rs_re['r6'];?>"  ><span class="head1 black"> คำ/นาที</span>
     </td>
</tr>
<tr>
    <td align=left valign=middle>
        <span class="head1 black">ความสามารถในการขับขี่</span>
    </td>
    <td align=left valign=middle>
        <span class="head1 black">
        <input type=checkbox name="r7" id="Driving_Car"  value="1" <?php if($rs_re['r7']=="1") {echo "checked";} ?>>รถยนต์&nbsp;
        <input type=checkbox name="r8" id="Driving_Motorcycle"  value="1" <?php if($rs_re['r8']=="1") {echo "checked";} ?>>รถจักรยานยนต์&nbsp;
        <input type=checkbox name="r9" id="Driving_Truck"  value="1" <?php if($rs_re['r9']=="1") {echo "checked";} ?>>รถบรรทุก&nbsp;
        <input type=checkbox name="r10" id="Driving_Pickup"  value="1" <?php if($rs_re['r10']=="1") {echo "checked";} ?>>รถกระบะ&nbsp;
        <input type=checkbox name="r11" id="Driving_Forklift"  value="1" <?php if($rs_re['r11']=="1") {echo "checked";} ?>>รถโฟล์คลิฟท์
        </span>
     </td>
</tr>
<tr><td colspan="2" style="height: 18px;"></td></tr>
<tr>
    <td align=left valign=middle>
        <span class="head1 black">มีพาหนะส่วนตัว</span>
    </td>
    <td align=left valign=middle>
        <span class="head1 black">
        <input type=checkbox name="r12" id="Own_Car" value="1" <?php if($rs_re['r12']=="1") {echo "checked";} ?>>รถยนต์&nbsp;
        <input type=checkbox name="r13" id="Own_Motorcycle" value="1" <?php if($rs_re['r13']=="1") {echo "checked";} ?>>รถจักรยานยนต์&nbsp;
        <input type=checkbox name="r14" id="Own_Truck" value="1" <?php if($rs_re['r14']=="r14") {echo "checked";} ?>>รถบรรทุก
        </span>
     </td>
</tr>
<tr><td colspan="2" style="height: 18px;"></td></tr>
<tr>
    <td align=left valign=middle>
        <span class="head1 black">ความสามารถพิเศษอื่นๆ</span>
    </td>
    <td align=left valign=middle>
        <span class="head1 black">  
        1. <input class="validate[required]" type="text" name="r15" id="Attr1" style="width:390px;" maxLength=120 value="<?=$rs_re['r15'];?>"><br>
        2. <input class="validate[required]" type="text" name="r16" id="Attr2" style="width:390px;" maxLength=120 value="<?=$rs_re['r16'];?>"><br>
        3. <input class="validate[required]" type="text" name="r17" id="Attr3" style="width:390px;" maxLength=120 value="<?=$rs_re['r17'];?>"><br>
        4. <input class="validate[required]" type="text" name="r18" id="Attr4" style="width:390px;" maxLength=120 value="<?=$rs_re['r18'];?>"><br>
        5. <input class="validate[required]" type="text" name="r19" id="Attr5" style="width:390px;" maxLength=120 value="<?=$rs_re['r19'];?>"><br>
        </span>
     </td>
</tr>
<tr>
    <td align=left valign=middle>
        <span class="head1 black">โครงการ ผลงาน <br />เกียรติประวัติ <br />และประสบการณ์อื่นๆ</span>
    </td>
    <td align=left valign=middle>
        <textarea class="validate[required]" rows=5 name="r20" id="Masterpiece" cols=40 style=" color:black; width:403px; " maxLength=2000><?=$rs_re['r20'];?></textarea>  
    </td>
</tr>
<tr>
    <td align=left valign=middle>
        <span class="head1 black">บุคคลอ้างอิง</span>
    </td>
    <td align=left valign=middle>
        <textarea class="validate[required]" rows=4 name="r21" id="Referenceslist" cols=40 style=" color:black; width:403px; " maxLength=400><?=$rs_re['r21'];?></textarea>     
    </td>
</tr>       
<tr>
    <td colspan=2 align=center valign=center>
      
    </td>                               
</tr>
</table>
     <?php } ?>
    <div class="form-actions">
      <?php echo form_hidden('edit-result','1');?>  
              <input type="hidden" value="<?=$UsrId;?>" name="UID" />
                  
      <button type="button" id="bt-editresult" class="btn btn-primary "><i class="icon-save icon-large"></i> <?=label("save");?></button>
      <button type="reset" class="btn btn-danger"><i class="icon-remove icon-large"></i> <?=label("cancel");?></button>
    </div>   
</form>
           
    
 