<form id="frm_add_education">
 
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
        $this->Md_user->_getselecttype("tb_grade_level",null,'Id','grade_lname');
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
        $this->Md_user->_getselecttype("tb_faculty",null,'Id','fac_name');
        ?>       
                                              
        </select> 
    </td>
</tr>
<tr>
    <td align=left valign=middle>
        <span class="head1 black">ชื่อสถานศึกษา</span>
     </td>
    <td align=left valign=middle>
    
        <input  type=text name="e3"  id="Grad1_School" style="width:300px;"   value="">
    </td>
</tr>
<tr id="g1_Faculty" id="g1_Faculty" style="display: table-row;">
    <td align=left valign=middle>
        <span class="head1 black">คณะ</span>
    </td>
    <td align=left valign=middle>
        <input  type=text name="e4" id="Grad1_Faculty" style="width:300px;" maxLength=70 value="">            
    </td>
</tr>
<tr id="g1_Degree" id="g1_Degree" style="display: table-row;">
    <td align=left valign=middle>
        <span class="head1 black">วุฒิการศึกษา</span>
    </td>
    <td align=left valign=middle>
        <input  type=text name="e5" id="Grad1_Degree" style="width:300px;" maxLength=70 value="">            
    </td>
</tr>
<tr id="g1_Field" id="g1_Field" style="display: table-row;">
    <td align=left valign=middle>
        <span class="head1 black">สาขาวิชา</span>
    </td>
    <td align=left valign=middle>
        <input  type=text name="e6" id="Grad1_Field" style="width:300px;" maxLength=80 value="">   
    </td>
</tr>
<tr> 
    <td align=left valign=middle>
        <span class="head1 black" id="wording_NYear_1" name="wording_NYear_1">ปีที่สำเร็จการศึกษา</span>
    </td>
    <td align=left valign=middle>
        <select NAME="e7" id="Grad1_NYear" > 
        <option value="" >โปรดระบุ</option>
            <?php $this->Md_user->_getyear();?>
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
	    <input  type=text name="e8" id="Grad1_Grade" size="5" maxLength=8 value="" >
        </div>
 
    </td>
</tr>
</table>
<hr/>


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
        $this->Md_user->_getselecttype("tb_grade_level",null,'Id','grade_lname');
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
        $this->Md_user->_getselecttype("tb_faculty",null,'Id','fac_name');
        ?>     
                                              
        </select> 
    </td>
</tr>
<tr>
    <td align=left valign=middle>
        <span class="head1 black">ชื่อสถานศึกษา</span>
     </td>
    <td align=left valign=middle>
    
        <input  type=text name="ee3" id="Grad1_School" style="width:300px;"   value="">
    </td>
</tr>
<tr id="g1_Faculty" id="g1_Faculty" style="display: table-row;">
    <td align=left valign=middle>
        <span class="head1 black">คณะ</span>
    </td>
    <td align=left valign=middle>
        <input  type=text name="ee4" id="Grad1_Faculty" style="width:300px;" maxLength=70 value="">            
    </td>
</tr>
<tr id="g1_Degree" id="g1_Degree" style="display: table-row;">
    <td align=left valign=middle>
        <span class="head1 black">วุฒิการศึกษา</span>
    </td>
    <td align=left valign=middle>
        <input  type=text name="ee5" id="Grad1_Degree" style="width:300px;" maxLength=70 value="">            
    </td>
</tr>
<tr id="g1_Field" id="g1_Field" style="display: table-row;">
    <td align=left valign=middle>
        <span class="head1 black">สาขาวิชา</span>
    </td>
    <td align=left valign=middle>
        <input  type=text name="ee6" id="Grad1_Field" style="width:300px;" maxLength=80 value="">   
    </td>
</tr>
<tr> 
    <td align=left valign=middle>
        <span class="head1 black" id="wording_NYear_1" name="wording_NYear_1">ปีที่สำเร็จการศึกษา</span>
    </td>
    <td align=left valign=middle>
        <select NAME="ee7" id="Grad1_NYear" > 
        <option value="" >โปรดระบุ</option>
            <?php $this->Md_user->_getyear();?>
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
	    <input  type=text name="ee8" id="Grad1_Grade" size="5" maxLength=8 value="" >
        </div>
 
    </td>
</tr>
</table>
<hr/>



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
        $this->Md_user->_getselecttype("tb_grade_level",null,'Id','grade_lname');
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
        $this->Md_user->_getselecttype("tb_faculty",null,'Id','fac_name');
        ?>    
                                              
        </select> 
    </td>
</tr>
<tr>
    <td align=left valign=middle>
        <span class="head1 black">ชื่อสถานศึกษา</span>
     </td>
    <td align=left valign=middle>
    
        <input  type=text name="eee3" id="Grad1_School" style="width:300px;"   value="">
    </td>
</tr>
<tr id="g1_Faculty" id="g1_Faculty" style="display: table-row;">
    <td align=left valign=middle>
        <span class="head1 black">คณะ</span>
    </td>
    <td align=left valign=middle>
        <input  type=text name="eee4" id="Grad1_Faculty" style="width:300px;" maxLength=70 value="">            
    </td>
</tr>
<tr id="g1_Degree" id="g1_Degree" style="display: table-row;">
    <td align=left valign=middle>
        <span class="head1 black">วุฒิการศึกษา</span>
    </td>
    <td align=left valign=middle>
        <input  type=text name="eee5" id="Grad1_Degree" style="width:300px;" maxLength=70 value="">            
    </td>
</tr>
<tr id="g1_Field" id="g1_Field" style="display: table-row;">
    <td align=left valign=middle>
        <span class="head1 black">สาขาวิชา</span>
    </td>
    <td align=left valign=middle>
        <input  type=text name="eee6" id="Grad1_Field" style="width:300px;" maxLength=80 value="">   
    </td>
</tr>
<tr> 
    <td align=left valign=middle>
        <span class="head1 black" id="wording_NYear_1" name="wording_NYear_1">ปีที่สำเร็จการศึกษา</span>
    </td>
    <td align=left valign=middle>
        <select NAME="eee7" id="Grad1_NYear" > 
        <option value="" >โปรดระบุ</option>
        <?php $this->Md_user->_getyear();?>
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
	    <input  type=text name="eee8" id="Grad1_Grade" size="5" maxLength=8 value="" >
        </div>
 
    </td>
</tr>
</table>
<hr/>
 
           <div class="form-actions">
      <?php echo form_hidden('add-education','1');?>  
              <input type="hidden" value="<?=$UsrId;?>" name="UID" />
                  
      <button type="button" id="bt-addeducation" class="btn btn-primary "><i class="icon-save icon-large"></i> <?=label("save");?></button>
      <button type="reset" class="btn btn-danger"><i class="icon-remove icon-large"></i> <?=label("cancel");?></button>
    </div>   
</form>