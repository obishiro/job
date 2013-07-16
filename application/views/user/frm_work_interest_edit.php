<div id="tb_frmeditwork-interest">
 
<?php
    $sql_work=$this->db->where('usr_id',$UsrId)->get('tb_wrk_interest')->result_array();
    foreach ($sql_work as $rswork) { ?>
<form id="frmeditwork-interest">
<table bgcolor=White border=0 width=100% cellspacing=2 cellpadding=2>
<tr>
    <td width=140  align=left valign=top>
        <div style="clear:both;height:10px;font-size:0px;"></div>
        <div style="position:relative;float:left;margin-left:0px;margin-top:4px;text-align:left;">
            <span class="head1 black">ตำแหน่งที่ต้องการ</span>
        </div>
    </td>
    <td  align=left valign=middle >
        <div style="clear:both; font-size:0px; height:10px;"></div>
        <span class="head1 black">  
            1. <input  type=text name=Position1 id="Position1" style="width:285px;" maxLength=80 value="<?=$rswork['wrk_name'];?>"><br>
            2. <input  type=text name=Position2 id="Position2" style="width:285px;" maxLength=80 value="<?=$rswork['wrk_name2'];?>"><br>
            3. <input  type=text name=Position3 id="Position3" style="width:285px;" maxLength=80 value="<?=$rswork['wrk_name3'];?>"><br>
        </span> 
     </td>
</tr>
<tr>
    <td align=left valign=middle><span class="head1 black">ระบุหมวดเพื่อการค้นหา</span></td>
    <td align=left valign=middle>
        <SELECT  NAME="Jobtype1" id="Jobtype1" style="width:305px;"> 
            <option value="" >โปรดระบุ</option>   
        <?php   $this->Md_user->_getselecttype('tb_work',$rswork['wrk_work'],'Id','work_name'); ?>
                
        </select> 
    </td>
</tr>
<tr>
    <td align=left valign=middle></td>
    <td align=left valign=middle>
        <SELECT  NAME="Jobtype2" id="Jobtype2" style="width:305px;"> 
        <option value="" >โปรดระบุ</option>               
          <?php   $this->Md_user->_getselecttype('tb_work',$rswork['wrk_work2'],'Id','work_name'); ?>
 
                
        </select> 
    </td>
</tr>
<tr>
    <td align=left valign=top>
        <span class="head1 black">ประเภทงานที่ต้องการ</span>
    </td>
    <td align=left valign=middle>
        <input type="checkbox" name="Jobtype_Fulltime" id="JobType_Fulltime" value="1"  <?php if($rswork['wrk_type']=="1") {echo "checked";} ?>>
        <span class="head1 black">ประจำ</span><br />
        <input type="checkbox" name="Jobtype_Parttime" id="JobType_Parttime" value="1" <?php if($rswork['wrk_type2']=="1") {echo "checked";} ?>>
        <span class="head1 black">Part-time</span><br />
        <input type="checkbox" name="Jobtype_Freelance" id="JobType_Freelance" value="1" <?php if($rswork['wrk_type4']=="1") {echo "checked";} ?>>
        <span class="head1 black">Freelance</span><br />
        <input type="checkbox" name="Jobtype_Intern" id="JobType_Intern" value="1"  <?php if($rswork['wrk_type4']=="1") {echo "checked";} ?>>
        <span class="head1 black">ฝึกงาน</span><br />
    </td>
</tr>
<tr>
    <td align=left valign=top>
        <span class="head1 black">เงินเดือนที่ต้องการ</span>
    </td>
    <td align=left valign=middle>
	<input  type=text name="Salary" id="Salary" style="width:160px;" maxLength=40 value="<?=$rswork['wrk_salary'];?>">
    </td>
</tr>
<tr>
    <td align=left valign=middle>
        <span class="head1 black">สถานที่ที่ต้องการทำงาน</span>
    </td>
    <td align=left valign=middle>
        <input  type=text name="Place" id="Work_Place" style="width:300px;" maxLength=100 value="<?=$rswork['wrk_local'];?>">
    </td>
</tr>
<tr>
    <td align=left valign=middle><span class="head1 black">วันที่สามารถเริ่มงานได้</span></td>
    <td align=left valign=middle>
        <SELECT  NAME="StartWorkDate" id="StartWorkDate" style="width:305px;">
                <?php   $this->Md_user->_getselecttype('tb_startworkdate',$rswork['wrk_canwork'],'Id','startwork_name'); ?>
        </select>
    </td>
</tr>
           
</table>
             <div class="form-actions">
      <?php echo form_hidden('editwork-interest','1');?>  
              <input type="hidden" value="<?=$UsrId;?>" name="UID" />
      <button type="button" id="bt-editwork-interest" class="btn btn-primary "><i class="icon-save icon-large"></i> <?=label("save");?></button>
      <button type="reset" class="btn btn-danger"><i class="icon-remove icon-large"></i> <?=label("cancel");?></button>
    </div>   
</form>
    <? } ?>
</div>
 