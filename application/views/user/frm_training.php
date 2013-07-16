<form id="frm_add_training">
<?php for($i=0;$i<=4;$i++): ?>
<table bgcolor=White border=0 width=100% cellspacing=2 cellpadding=2>
                        <tr>
    <td rowspan="3" width="15" align="center" valign="top">
        <div style="clear:both;font-size:0px;height:5px;"></div>
   
    </td>
    <td width="200" align=left valign="top">
        <div style="clear:both;font-size:0px;height:5px;"></div>
        <span class="head1 black">ระยะเวลา</span>
    </td>
    <td align=left valign="top">
        <span class="head1 black">ตั้งแต่</span>
           <select style="width:100px"   NAME="t1[]" id="Training1_From_Month"   > 
            <option value="">ระบุ</option>
                   <?php $this->Md_user->_getmonth(); ?>
                    </select>
          <select style="width:100px"  NAME="t2[]" id="Training1_From_Year"  >
            <option value="" >ระบุ</option>
                         <?php $this->Md_user->_getyear(); ?>                    
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     
        </select>
                <span class="head1 black">จนถึง</span>
               <select style="width:100px"  NAME="t3[]" id="Training1_To_Month" >
            <option value="" >ระบุ</option>
            <?php $this->Md_user->_getmonth(); ?>
                    </select>
                  <select style="width:100px"  NAME="t4[]" id="Training1_To_Year"  >
            <option value="" >ระบุ</option>
            <?php $this->Md_user->_getyear(); ?>
                        </select>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </select>
    </td>
</tr>
<tr>
    <td align=left valign=top>
        <span class="head1 black">สถาบัน/หน่วยงาน/บริษัท</span>
    </td>
    <td align=left valign=top>
        <input   type=text name="t5[]" id="Training1_Institute" maxLength=80 value="">
    </td>
</tr>
<tr>
    <td align=left valign=top>
        <span class="head1 black">หลักสูตร/ตำแหน่ง </span>
    </td>
    <td  align=left valign=top>
        <input    type=text name="t6[]" id="Training1_Course" maxLength=100 value="">            
    </td>
</tr>       
 
 
                   
</table>
<hr/>
<?php endfor; ?>
      <div class="form-actions">
      <?php echo form_hidden('add-training','1');?>  
              <input type="hidden" value="<?=$UsrId;?>" name="UID" />
                  
      <button type="button" id="bt-addtraining" class="btn btn-primary "><i class="icon-save icon-large"></i> <?=label("save");?></button>
      <button type="reset" class="btn btn-danger"><i class="icon-remove icon-large"></i> <?=label("cancel");?></button>
    </div>   
</form>