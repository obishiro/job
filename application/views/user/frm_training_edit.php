<h1>Edit</h1>
<form id="frm_edit_training">
<?php
    $sql_training=$this->db->where('usr_id',$UsrId)
                                               ->order_by('Id','ASC') 
                                               ->get('tb_training')->result_array();
    
 
    foreach($sql_training as $rs_t) {
?>
<table bgcolor=White border=0 width=100% cellspacing=2 cellpadding=2>
                        <tr>
    <td rowspan="3" width="15" align="center" valign="top">
         
    </td>
    <td width="200" align=left valign="top">
        <div style="clear:both;font-size:0px;height:5px;"></div>
        <span class="head1 black">ระยะเวลา</span>
    </td>
    <td align=left valign="top">
        <span class="head1 black">ตั้งแต่</span>
           <select style="width:100px"   NAME="t1[]" id="Training1_From_Month"   > 
            <option value="">ระบุ</option>
                  <?php $this->Md_user->_getmonth($rs_t['tr1']); ?>
                    </select>
          <select style="width:100px"  NAME="t2[]" id="Training1_From_Year"  >
            <option value="" >ระบุ</option>
               <?php $this->Md_user->_getyear($rs_t['tr2']); ?>                              
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     
        </select>
                <span class="head1 black">จนถึง</span>
               <select style="width:100px"  NAME="t3[]" id="Training1_To_Month" >
            <option value="" >ระบุ</option>
            <?php $this->Md_user->_getmonth($rs_t['tr3']); ?>
                    </select>
                  <select style="width:100px"  NAME="t4[]" id="Training1_To_Year"  >
                        <option value="" >ระบุ</option>
                        <?php $this->Md_user->_getyear($rs_t['tr4']); ?>
                        </select>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </select>
    </td>
</tr>
<tr>
    <td align=left valign=top>
        <span class="head1 black">สถาบัน/หน่วยงาน/บริษัท</span>
    </td>
    <td align=left valign=top>
        <input   type=text name="t5[]" id="Training1_Institute" maxLength=80 value="<?=$rs_t['tr5'];?>">
    </td>
</tr>
<tr>
    <td align=left valign=top>
        <span class="head1 black">หลักสูตร/ตำแหน่ง </span>
    </td>
    <td  align=left valign=top>
        <input    type=text name="t6[]" id="Training1_Course" maxLength=100 value="<?=$rs_t['tr6'];?>">            
    </td>
</tr>       
 
 
                   
</table>
<hr/>
<?php }  ?>
      <div class="form-actions">
      <?php echo form_hidden('edit-training','1');?>  
              <input type="hidden" value="<?=$UsrId;?>" name="UID" />
                  
      <button type="button" id="bt-edittraining" class="btn btn-primary "><i class="icon-save icon-large"></i> <?=label("save");?></button>
      <button type="reset" class="btn btn-danger"><i class="icon-remove icon-large"></i> <?=label("cancel");?></button>
    </div>   
</form>