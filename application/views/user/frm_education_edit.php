<form id="frm_edit_education">
<?php
    $sql_edu1=$this->db->where('usr_id',$UsrId)->get('tb_education')->result_array();
    foreach ($sql_edu1 as $rs_edu1) { ?>
<table bgcolor=White border=0 width=100% cellspacing=2 cellpadding=2>
                                        <tr>
    <td name="g1_rowspan" id="g1_rowspan" rowspan="8" width="15" align="center" valign="top">
        <div style=" float:center; margin-top:5px; "><span class="head2 black">1.</span></div>
    </td>
    <td align=left valign=middle width=200>
        <span class="head1 black">ระดับการศึกษา</span>                                         
    </td>
    <td align=left valign=middle>
        <SELECT  NAME="e1" id="Grad1_Education" style="width:305px; " > 
        <option value="" >โปรดระบุ</option>
        <?php
        $this->Md_user->_getselecttype("tb_grade_level",$rs_edu1['e1'],'Id','grade_lname');
        ?>
                                              
        </select> 
    </td>
</tr>
<tr id="g1_Category" id="g1_Category" style=" display: table-row;">
    <td align=left valign=middle>
        <span class="head1 black">หมวดการศึกษาเพื่อการค้นหา</span>
    </td>
    <td align=left valign=middle>
        <SELECT  NAME="e2" id="Grad1_Category" style="width:305px;">  
        <option value=""  >โปรดระบุ</option>
     <?php
        $this->Md_user->_getselecttype("tb_faculty",$rs_edu1['e2'],'Id','fac_name');
        ?>       
                                              
        </select> 
    </td>
</tr>
<tr>
    <td align=left valign=middle>
        <span class="head1 black">ชื่อสถานศึกษา</span>
     </td>
    <td align=left valign=middle>
    
        <input  type=text name="e3"  id="Grad1_School" style="width:300px;"   value="<?=$rs_edu1['e3'];?>">
    </td>
</tr>
<tr id="g1_Faculty" id="g1_Faculty" style="display: table-row;">
    <td align=left valign=middle>
        <span class="head1 black">คณะ</span>
    </td>
    <td align=left valign=middle>
        <input  type=text name="e4" id="Grad1_Faculty" style="width:300px;" maxLength=70 value="<?=$rs_edu1['e4'];?>">            
    </td>
</tr>
<tr id="g1_Degree" id="g1_Degree" style="display: table-row;">
    <td align=left valign=middle>
        <span class="head1 black">วุฒิการศึกษา</span>
    </td>
    <td align=left valign=middle>
        <input  type=text name="e5" id="Grad1_Degree" style="width:300px;"   value="<?=$rs_edu1['e5'];?>">            
    </td>
</tr>
<tr id="g1_Field" id="g1_Field" style="display: table-row;">
    <td align=left valign=middle>
        <span class="head1 black">สาขาวิชา</span>
    </td>
    <td align=left valign=middle>
        <input  type=text name="e6" id="Grad1_Field" style="width:300px;"  value="<?=$rs_edu1['e6'];?>">   
    </td>
</tr>
<tr> 
    <td align=left valign=middle>
        <span class="head1 black" id="wording_NYear_1" name="wording_NYear_1">ปีที่สำเร็จการศึกษา</span>
    </td>
    <td align=left valign=middle>
        <select NAME="e7" id="Grad1_NYear" > 
        <option value="" >โปรดระบุ</option>
            <?php $this->Md_user->_getyear($rs_edu1['e7']);?>
        </select>                              
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            </select>
<!--        <input type="checkbox" name="Grad1_Studying" id="Grad1_Studying" value="1"  onclick="checkStudying('1',this.checked);">
        <span class="head1 black">กำลังศึกษาอยู่</span>-->
    </td>
</tr>
<tr> 
    <td align=left valign=middle>
        <span class="head1 black">เกรดเฉลี่ย</span>
    </td>
    <td align=left valign=middle>
        <div class="errorDiv">
	    <input  type=text name="e8" id="Grad1_Grade" size="5" maxLength=8 value="<?=$rs_edu1['e8'];?>" >
        </div>
 
    </td>
</tr>
</table>
<hr/>
    <?php } ?>
<?php
    $sql_edu2=$this->db->where('usr_id',$UsrId)->get('tb_education2')->result_array();
    foreach ($sql_edu2 as $rs_edu2) { ?>
<table bgcolor=White border=0 width=100% cellspacing=2 cellpadding=2>
                                        <tr>
    <td name="g1_rowspan" id="g1_rowspan" rowspan="8" width="15" align="center" valign="top">
        <div style=" float:center; margin-top:5px; "><span class="head2 black">1.</span></div>
    </td>
    <td align=left valign=middle width=200>
        <span class="head1 black">ระดับการศึกษา</span>                                         
    </td>
    <td align=left valign=middle>
        <SELECT  NAME="ee1" id="Grad1_Education" style="width:305px; " > 
        <option value="" >โปรดระบุ</option>
       <?php
        $this->Md_user->_getselecttype("tb_grade_level",$rs_edu2['ee1'],'Id','grade_lname');
        ?>      
                                              
        </select> 
    </td>
</tr>
<tr id="g1_Category" id="g1_Category" style=" display: table-row;">
    <td align=left valign=middle>
        <span class="head1 black">หมวดการศึกษาเพื่อการค้นหา</span>
    </td>
    <td align=left valign=middle>
        <SELECT  NAME="ee2" id="Grad1_Category" style="width:305px;">  
        <option value=""  >โปรดระบุ</option>
         <?php
        $this->Md_user->_getselecttype("tb_faculty",$rs_edu2['ee2'],'Id','fac_name');
        ?>     
                                              
        </select> 
    </td>
</tr>
<tr>
    <td align=left valign=middle>
        <span class="head1 black">ชื่อสถานศึกษา</span>
     </td>
    <td align=left valign=middle>
    
        <input  type=text name="ee3" id="Grad1_School" style="width:300px;"   value="<?=$rs_edu2['ee3'];?>">
    </td>
</tr>
<tr id="g1_Faculty" id="g1_Faculty" style="display: table-row;">
    <td align=left valign=middle>
        <span class="head1 black">คณะ</span>
    </td>
    <td align=left valign=middle>
        <input  type=text name="ee4" id="Grad1_Faculty" style="width:300px;"   value="<?=$rs_edu2['ee4'];?>">            
    </td>
</tr>
<tr id="g1_Degree" id="g1_Degree" style="display: table-row;">
    <td align=left valign=middle>
        <span class="head1 black">วุฒิการศึกษา</span>
    </td>
    <td align=left valign=middle>
        <input  type=text name="ee5" id="Grad1_Degree" style="width:300px;"   value="<?=$rs_edu2['ee5'];?>">            
    </td>
</tr>
<tr id="g1_Field" id="g1_Field" style="display: table-row;">
    <td align=left valign=middle>
        <span class="head1 black">สาขาวิชา</span>
    </td>
    <td align=left valign=middle>
        <input  type=text name="ee6" id="Grad1_Field" style="width:300px;"  value="<?=$rs_edu2['ee6'];?>">   
    </td>
</tr>
<tr> 
    <td align=left valign=middle>
        <span class="head1 black" id="wording_NYear_1" name="wording_NYear_1">ปีที่สำเร็จการศึกษา</span>
    </td>
    <td align=left valign=middle>
        <select NAME="ee7" id="Grad1_NYear" > 
        <option value="" >โปรดระบุ</option>
            <?php $this->Md_user->_getyear($rs_edu2['ee7']);?>
        </select>                              
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            </select>
<!--        <input type="checkbox" name="Grad1_Studying" id="Grad1_Studying" value="1"  onclick="checkStudying('1',this.checked);">
        <span class="head1 black">กำลังศึกษาอยู่</span>-->
    </td>
</tr>
<tr> 
    <td align=left valign=middle>
        <span class="head1 black">เกรดเฉลี่ย</span>
    </td>
    <td align=left valign=middle>
        <div class="errorDiv">
	    <input  type=text name="ee8" id="Grad1_Grade" size="5" maxLength=8 value="<?=$rs_edu2['ee8'];?>" >
        </div>
 
    </td>
</tr>
</table>
<hr/>
    <?php } ?>

<?php
    $sql_edu3=$this->db->where('usr_id',$UsrId)->get('tb_education3')->result_array();
    foreach ($sql_edu3 as $rs_edu3) { ?>
<table bgcolor=White border=0 width=100% cellspacing=2 cellpadding=2>
                                        <tr>
    <td name="g1_rowspan" id="g1_rowspan" rowspan="8" width="15" align="center" valign="top">
        <div style=" float:center; margin-top:5px; "><span class="head2 black">1.</span></div>
    </td>
    <td align=left valign=middle width=200>
        <span class="head1 black">ระดับการศึกษา</span>                                         
    </td>
    <td align=left valign=middle>
        <SELECT  NAME="eee1" id="Grad1_Education" style="width:305px; " > 
        <option value="" >โปรดระบุ</option>
      <?php
        $this->Md_user->_getselecttype("tb_grade_level",$rs_edu3['eee1'],'Id','grade_lname');
        ?>                                     
        </select> 
    </td>
</tr>
<tr id="g1_Category" id="g1_Category" style=" display: table-row;">
    <td align=left valign=middle>
        <span class="head1 black">หมวดการศึกษาเพื่อการค้นหา</span>
    </td>
    <td align=left valign=middle>
        <SELECT  NAME="eee2" id="Grad1_Category" style="width:305px;">  
        <option value=""  >โปรดระบุ</option>
         <?php
        $this->Md_user->_getselecttype("tb_faculty",$rs_edu3['eee2'],'Id','fac_name');
        ?>    
                                              
        </select> 
    </td>
</tr>
<tr>
    <td align=left valign=middle>
        <span class="head1 black">ชื่อสถานศึกษา</span>
     </td>
    <td align=left valign=middle>
    
        <input  type=text name="eee3" id="Grad1_School" style="width:300px;"   value="<?=$rs_edu3['eee3'];?>">
    </td>
</tr>
<tr id="g1_Faculty" id="g1_Faculty" style="display: table-row;">
    <td align=left valign=middle>
        <span class="head1 black">คณะ</span>
    </td>
    <td align=left valign=middle>
        <input  type=text name="eee4" id="Grad1_Faculty" style="width:300px;"   value="<?=$rs_edu3['eee4'];?>">            
    </td>
</tr>
<tr id="g1_Degree" id="g1_Degree" style="display: table-row;">
    <td align=left valign=middle>
        <span class="head1 black">วุฒิการศึกษา</span>
    </td>
    <td align=left valign=middle>
        <input  type=text name="eee5" id="Grad1_Degree" style="width:300px;"  value="<?=$rs_edu3['eee5'];?>">            
    </td>
</tr>
<tr id="g1_Field" id="g1_Field" style="display: table-row;">
    <td align=left valign=middle>
        <span class="head1 black">สาขาวิชา</span>
    </td>
    <td align=left valign=middle>
        <input  type=text name="eee6" id="Grad1_Field" style="width:300px;"   value="<?=$rs_edu3['eee6'];?>">   
    </td>
</tr>
<tr> 
    <td align=left valign=middle>
        <span class="head1 black" id="wording_NYear_1" name="wording_NYear_1">ปีที่สำเร็จการศึกษา</span>
    </td>
    <td align=left valign=middle>
        <select NAME="eee7" id="Grad1_NYear" > 
        <option value="" >โปรดระบุ</option>
        <?php $this->Md_user->_getyear($rs_edu3['eee7']);?>
        </select>                              
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            </select>
<!--        <input type="checkbox" name="Grad1_Studying" id="Grad1_Studying" value="1"  onclick="checkStudying('1',this.checked);">
        <span class="head1 black">กำลังศึกษาอยู่</span>-->
    </td>
</tr>
<tr> 
    <td align=left valign=middle>
        <span class="head1 black">เกรดเฉลี่ย</span>
    </td>
    <td align=left valign=middle>
        <div class="errorDiv">
	    <input  type=text name="eee8" id="Grad1_Grade" size="5" maxLength=8 value="<?=$rs_edu3['eee8'];?>" >
        </div>
 
    </td>
</tr>
</table>
<hr/>
    <?php } ?>
           <div class="form-actions">
      <?php echo form_hidden('edit-education','1');?>  
              <input type="hidden" value="<?=$UsrId;?>" name="UID" />
                  
      <button type="button" id="bt-editeducation" class="btn btn-primary "><i class="icon-save icon-large"></i> <?=label("save");?></button>
      <button type="reset" class="btn btn-danger"><i class="icon-remove icon-large"></i> <?=label("cancel");?></button>
    </div>   
</form>