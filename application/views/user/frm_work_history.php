<form id="frm_add_history">
<?php for($i=0;$i<=4;$i++): ?>
<table bgcolor=White border=0 width=100% cellspacing=2 cellpadding=2>
                                            <tr>
    <td rowspan="8" width="15" align="center" valign="top">
        <div style="clear:both;font-size:0px;height:5px;"></div>
        <span class="head2 black"><?=$i+1;?>.</span>
    </td>
    <td width="200" align=left valign="top">
        <div style="clear:both;font-size:0px;height:5px;"></div>
        <span class="head1 black">ระยะเวลา</span>
    </td>
    <td align=left valign="top">
                <div style="position:relative;float:left;margin-left:0px;margin-top:0px;text-align:left;">
            <span class="head1 black">ตั้งแต่</span>
                        <select  style="width: 100px;" NAME="h1[]" id="History1_From_Month" class="validate[required]" > 
                <option value="" >ระบุ</option>
                                <?php $this->Md_user->_getmonth();?>
                            </select>
                        <select  NAME="h2[]" id="History1_From_Year"  style="width: 100px;" class="validate[required]" >
                            <option value="" >ระบุ</option>
                            <?php $this->Md_user->_getyear();?>                           
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             
                            </select>
                        <span class="head1 black">จนถึง</span>
                        <select  NAME="h3[]" id="History1_To_Month"  style="width: 100px;" class="validate[required]" > 
                <option value="" selected>ระบุ</option>
                <option value=13 >ปัจจุบัน</option>
                                <?php $this->Md_user->_getmonth();?>
                            </select>
                        <select  NAME="h4[]" id="History1_To_Year"  style="width: 100px;" class="validate[required]" >
                <option value="" selected>ระบุ</option>
                 <?php $this->Md_user->_getyear();?>       
                        </select>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              </select>
        </div>                    
    </td>
</tr>
<tr>
    <td align=left valign=middle>
        <div style="position:relative;float:left;margin-left:0px;margin-top:4px;text-align:left;">
            <span class="head1 black">ชื่อบริษัท</span>
        </div>
    </td>
    <td align=left valign=middle>
        <input class="validate[required]" type=text name="h5[]" id="History1_Company" style="width:355px;" value="">
    </td>
</tr>
<tr>
    <td align=left valign=middle>
        <span class="head1 black">ที่อยู่-ติดต่อ</span>
    </td>
    <td align=left valign=middle>
        <input class="validate[required]" type=text name="h6[]" id="History1_Contact" style="width:355px;" maxLength=100 value="">            
    </td>
</tr>
<tr>
    <td align=left valign=middle>
        <span class="head1 black">เงินเดือน</span>
    </td>
    <td align=left valign=middle>
        <input class="validate[required]" type=text name="h7[]" id="History1_Salary" style="width:355px;" maxLength=25 value="">
    </td>
</tr>
<tr>
    <td align=left valign=middle>
        <div style="position:relative;float:left;margin-left:0px;margin-top:4px;text-align:left;">
        <span class="head1 black">ตำแหน่ง</span>
        </div>
    </td>
    <td align=left valign=middle>
        <input class="validate[required]" type=text name="h8[]" id="History1_Position" style="width:355px;" maxLength=80 value="">
    </td>
</tr>
<tr>
    <td align=left valign=middle>
        <span class="head1 black">หมวดงานเพื่อการค้นหา</span>
    </td>
    <td align=left valign=middle>
        <select name="h9[]" id="History1_Category" class="validate[required]" style=" font-size:12px; width:360px;">
        <option value="" selected>โปรดระบุ</option>
          <?php
        $this->Md_user->_getselecttype("tb_faculty",$rs_edu1['e2'],'Id','fac_name');
        ?> 
                </select>
    </td>
    </td>
</tr>
<tr>
    <td align=left valign=middle>
        <span class="head1 black">ระดับ</span>
    </td>
    <td align=left valign=middle>
        <select name="h10[]l" id="History1_Level" class="validate[required]" style=" font-size:12px; width:360px;">
        <option value="" selected>โปรดระบุ</option>
      <?php
        $this->Md_user->_getselecttype("tb_position",$rs_edu1['e2'],'Id','position_name');
        ?> 
                                              
        </select>
    </td>
    </td>
</tr>
<tr>
    <td align=left valign=top>
        <span class="head1 black">หน้าที่<br />ความรับผิดชอบ<br />และผลงาน</span>
    </td>
    <td align=left valign=middle>
        <textarea class="validate[required]" rows=5 name="h11[]" id="History1_Duty" cols=60 style="font-family:Ms sans serif, Thonburi; width:355px; font-size:12; color:black" maxLength="2000"></textarea>  
    </td>
</tr>
<tr height=10><td colspan=3></td></tr>
               
</table>
<hr/>
<?php endfor; ?>
      <div class="form-actions">
      <?php echo form_hidden('add-history','1');?>  
              <input type="hidden" value="<?=$UsrId;?>" name="UID" />
                  
      <button type="button" id="bt-addhistory" class="btn btn-primary "><i class="icon-save icon-large"></i> <?=label("save");?></button>
      <button type="reset" class="btn btn-danger"><i class="icon-remove icon-large"></i> <?=label("cancel");?></button>
    </div>   
</form>