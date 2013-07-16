   <form method=post action=employers_register.php name="frmRegister" id="frmRegister"/>
    <input type="hidden" name="action" value="regis" />
        <div style="clear:both;font-size:0px;height:15px;"></div>
    <table align=center width="858" cellspacing="0" cellpadding="0" border="0" style="border-top:1px solid #CCCCCC;border-left:1px solid #CCCCCC;border-right:1px solid #CCCCCC;border-bottom:1px solid #CCCCCC;">
        <tr>
            <td valign="top" bgcolor="#e3e3e3" align="right"><img src="../images/postjob/h_register_form2.jpg"/></td>
        </tr>
        <!-- ####### ERROR ############ -->
                <!-- ####### ERROR ############ -->
        <!-- ####### MENU ############ -->
        <tr>
            <td background=../images/storeresume/resume_register/blue_dot.gif><img src=../images/storeresume/resume_register/p.gif height=3></td>
        </tr> 
        <tr bgcolor=AliceBlue  height=25>
            <td align=left valign=center>
            <span class="head1 gray">
            &nbsp;&nbsp;1. กำหนด Username และ Password ที่ต้องการ
            </span>
            </td>
        </tr>
        <tr>
            <td background=../images/storeresume/resume_register/blue_dot.gif><img src=../images/storeresume/resume_register/p.gif height=3></td>
        </tr> 
        <!-- ####### MENU ############ -->
        <!-- ####### DETAIL ########## -->
        <tr>
            <td>
                <br />
                <table border=0 width=500 cellspacing=0 cellpadding=1 align=center>
                    <tr>
                        <td align=right width=120 valign=center>
			<span class="head1 red">*</span>
                        <span class="head1 black">
                        Username
                        </span>
                        </td>
			<td style="font-size:0px;" width=20><!-- --></td>
                        <td align=left width=360 valign=top>
                        <div style="float:left;">
                            <input type="text" name="username" id="username"  maxlength="50" SIZE=30 style="width:180px;" onkeyup="return ismaxlength(this)" value="" onfocus="showsuggest(this.id);" onblur="hidesuggest(this.id,false);" />
                        </div>
                        <div style="position:relative;float:left;z-index:2000;">
                            <div id="sugg_username" align=left style="display:none;position:absolute;z-index:1000;width:350px;height:45px;top:-8px;left:5px;">
                                <div style="float:left;margin-top:10px;">
                                <img src="../images/webboard/pic_point.gif">
                                </div>
                                <div style="float:left;width:340px;height:45px;margin-top:5px;vertical-align:middle;text-align:center;z-index:2002;"><!--border-left:2px solid #FF6300;border-right:1px solid #CCCCCC;border-bottom:1px solid #CCCCCC;border-top:1px solid #CCCCCC;"-->
                                    <table width="340" border="0" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td width=10 height=10><img src="../images/webboard/pic_tabel_oreange_01.gif"></td>
                                            <td width=320 height=10 background="../images/webboard/pic_tabel_oreange_02.jpg"></td>
                                            <td width=10 height=10><img src="../images/webboard/pic_tabel_oreange_03.gif"></td>
                                        </tr>
                                        <tr>
                                            <td width=10 background="../images/webboard/pic_tabel_oreange_04.jpg"></td>
                                            <td width=320 bgcolor=white align=left>
                                                <span class="head1 black;"">
                                                ตัวอักษรภาษาอังกฤษ หรือ ตัวเลข ตั้งแต่ 6 หลักขึ้นไป <br> โดยไม่มีการเว้นวรรค และห้ามใช้เครื่องหมายใด ๆ 
                                                <br> ยกเว้นเครื่องหมาย _ เท่านั้น และไม่ควรตั้งตามชื่อตนเอง หรือบริษัท
                                                </span>
                                            </td>
                                            <td width=10 background="../images/webboard/pic_tabel_oreange_05.jpg"></td>
                                        </tr>
                                        <tr>
                                            <td width=10 height=10><img src="../images/webboard/pic_tabel_oreange_06.gif"></td>
                                            <td width=320 height=10 background="../images/webboard/pic_tabel_oreange_07.jpg"></td>
                                            <td width=10 height=10><img src="../images/webboard/pic_tabel_oreange_08.gif"></td>
                                        </tr>
                                    </table>
                                </div>
			    </div>    
				<div style="display:none;margin-left: 4px;" id="username_loader">
				    <img src="../images/ajax-loader.gif" style="margin-top:1px;margin-left:5px;vertical-align:middle;">
				    <span style="font-size:12px; color:grey;">กำลังตรวจสอบ... </span>
				</div>
				<div style="display:none;vertical-align:middle;margin-left: 4px;margin-top:5px" id="username_match">
				    <span style="font-size:12px; color:red;">&nbsp;&nbsp;Username นี้มีผู้ใช้งานแล้ว</span>
				</div>
				<div style="display:none;vertical-align:middle;margin-left: 4px;margin-top:5px" id="username_available">
				    <span style="font-size:12px; color:green;">&nbsp;&nbsp;Username นี้สามารถใช้งานได้</span>
				</div>
                        </div>
                        </td>
                    </tr>
		    <tr id="tr_error_username" style="display: none;">
			<td colspan=2></td>
			<td valign="top" style="padding-bottom: 8px;" align="left">
			    <img src="../images/ajax-loader.gif" style="display: none;float: left;margin-left: 5px;" id="pic_error_username">
			    <span class="head1 red" id="error_username" style="float: left;margin-left: 5px;"></span>
			</td>
		    </tr>
                    <tr>
                        <td align=right valign=center>
			<span class="head1 red">*</span>
                        <span class="head1 black">
                        Password 
                        </span>
                        </td>
			<td style="font-size:0px;"><!-- --></td>
                        <td align=left valign=top>
                        <div style="float:left;">
                            <input type="password" size="30" name="password" id="password"  maxlength="10" style="width:180px;" onkeyup="return ismaxlength(this)" onfocus="showsuggest(this.id);" onblur="hidesuggest(this.id,false);" value="" />
                        </div>
                        <div style="position:relative;float:left;z-index:2000;">    
                            <div id="sugg_password" align=left style="display:none;position:absolute;z-index:1000;width:310px;height:45px;top:-8px;left:5px;">
                                <div style="float:left;margin-top:10px;">
                                <img src="../images/webboard/pic_point.gif">
                                </div>
                                <div style="float:left;width:300px;height:45px;margin-top:5px;vertical-align:middle;text-align:center;z-index:2002;"><!--border-left:2px solid #FF6300;border-right:1px solid #CCCCCC;border-bottom:1px solid #CCCCCC;border-top:1px solid #CCCCCC;"-->
                                    <table width="300" border="0" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td width=10 height=10><img src="../images/webboard/pic_tabel_oreange_01.gif"></td>
                                            <td width=280 height=10 background="../images/webboard/pic_tabel_oreange_02.jpg"></td>
                                            <td width=10 height=10><img src="../images/webboard/pic_tabel_oreange_03.gif"></td>
                                        </tr>
                                        <tr>
                                            <td width=10 background="../images/webboard/pic_tabel_oreange_04.jpg"></td>
                                            <td width=280 bgcolor=white align=left>
                                                <span class="head1 black;">
                                                    ตัวอักษรภาษาอังกฤษ หรือ ตัวเลข 6-10 ตัวอักษร<br>
                                                    ไม่มีการเว้นวรรค และห้ามใช้เครื่องหมายใด ๆ<br>
                                                    ยกเว้นเครื่องหมาย _ เท่านั้น และไม่ควรเหมือน Username
                                                </span>
                                            </td>
                                            <td width=10 background="../images/webboard/pic_tabel_oreange_05.jpg"></td>
                                        </tr>
                                        <tr>
                                            <td width=10 height=10><img src="../images/webboard/pic_tabel_oreange_06.gif"></td>
                                            <td width=280 height=10 background="../images/webboard/pic_tabel_oreange_07.jpg"></td>
                                            <td width=10 height=10><img src="../images/webboard/pic_tabel_oreange_08.gif"></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        </td>
                    </tr>
		    <tr id="tr_error_password" style="display: none;">
			<td colspan=2></td>
			<td valign="top" style="padding-bottom: 8px;" align="left">
			    <span class="head1 red" id="error_password" style="float: left;margin-left: 5px;"></span>
			</td>
		    </tr>
                    <tr>
                        <td align=right valign=center>
			<span class="head1 red">*</span>
                        <span class="head1 black">
                        ยืนยัน Password
                        </span>
                        </td>
			<td style="font-size:0px;"><!-- --></td>
                        <td align=left valign=top>
                        <div style="float:left;">
                            <input type="password" size="30" name="confirm" id="confirm"  maxlength="10" style="width:180px;" onkeyup="return ismaxlength(this)" onfocus="showsuggest(this.id);" onblur="hidesuggest(this.id,false);" value="" /> 
                        </div>
                        <div style="position:relative;float:left;z-index:2000;">    
                            <div id="sugg_confirm" align=left style="display:none;position:absolute;z-index:1000;width:210px;height:25px;top:-8px;left:5px;">
                                <div style="float:left;margin-top:10px;">
                                <img src="../images/webboard/pic_point.gif">
                                </div>
                                <div style="float:left;width:200px;height:25px;margin-top:5px;vertical-align:middle;text-align:center;z-index:2002;"><!--border-left:2px solid #FF6300;border-right:1px solid #CCCCCC;border-bottom:1px solid #CCCCCC;border-top:1px solid #CCCCCC;"-->
                                    <table width="200" border="0" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td width=10 height=10><img src="../images/webboard/pic_tabel_oreange_01.gif"></td>
                                            <td width=190 height=10 background="../images/webboard/pic_tabel_oreange_02.jpg"></td>
                                            <td width=10 height=10><img src="../images/webboard/pic_tabel_oreange_03.gif"></td>
                                        </tr>
                                        <tr>
                                            <td width=10 background="../images/webboard/pic_tabel_oreange_04.jpg"></td>
                                            <td width=190 bgcolor=white align=left>
                                                <span class="head1 black;"">
                                                ใส่ Password อีกครั้งเพื่อยืนยันความถูกต้อง  
                                                </span>
                                            </td>
                                            <td width=10 background="../images/webboard/pic_tabel_oreange_05.jpg"></td>
                                        </tr>
                                        <tr>
                                            <td width=10 height=10><img src="../images/webboard/pic_tabel_oreange_06.gif"></td>
                                            <td width=190 height=10 background="../images/webboard/pic_tabel_oreange_07.jpg"></td>
                                            <td width=10 height=10><img src="../images/webboard/pic_tabel_oreange_08.gif"></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        </td>
                    </tr>
		    <tr id="tr_error_confirm" style="display: none;">
			<td colspan=2></td>
			<td valign="top" style="padding-bottom: 8px;" align="left">
			    <span class="head1 red" id="error_confirm" style="float: left;margin-left: 5px;"></span>
			</td>
		    </tr>
                </table>
                <br />              
            </td>
        </tr>
        <!-- ####### DETAIL ########## -->
        <tr>
            <td background=../images/storeresume/resume_register/blue_dot.gif><img src=../images/storeresume/resume_register/p.gif height=3></td>
        </tr> 
        <tr bgcolor=AliceBlue  height=25>
            <td align=left valign=center>
            <span class="head1 gray">
            &nbsp;&nbsp;2. กรุณาเลือก Package และระยะเวลา
            </span>
            </td>
        </tr>
        <tr>
            <td background=../images/storeresume/resume_register/blue_dot.gif><img src=../images/storeresume/resume_register/p.gif height=3></td>
        </tr> 
        <tr>
            <td>
            <br />  
            <table cellspacing=0 width=500 cellpadding=1 align=center border="0">
            <tr>
                <td align=right width=120 valign=top>
                <span class="head1 black">
                  เลือก Package
                </span>
                </td>
		<td width="20" style="font-size:0px;"><!-- --></td>
                <td align=left valign=top width="300">                        
                <select name="packageposition" id="packageposition" style="width:220px;" onchange="changepackage();">
                    <option value="" selected>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;----- โปรดระบุ -----</option>
                    <option value="business#1" id="PA_business#1" >Business Package 1 ตำแหน่งงาน</option>
                    <option value="business#2" id="PA_business#2" >Business Package 2 ตำแหน่งงาน</option>
                    <option value="business#3" id="PA_business#3" >Business Package 3 ตำแหน่งงาน</option>
                    <option value="premium#5" id="PA_premium#1" >Premium Package 5 ตำแหน่งงาน</option>
                    <option value="premium#10" id="PA_premium#2" >Premium Package 10 ตำแหน่งงาน</option>
                    <option value="premium#15" id="PA_premium#3" >Premium Package 15 ตำแหน่งงาน</option>
                    <option value="premium#20" id="PA_premium#4" >Premium Package 20 ตำแหน่งงาน</option>
                    <option value="premium#30" id="PA_premium#5" >Premium Package 30 ตำแหน่งงาน</option>
                </select>
                </td>
                <td align=left rowspan="2" valign="top" width="60">
                <div style="float:left;margin-left:10px;position:absolute;width:200px;">
                    <div id="bt_cal" style="float:left; overflow: hidden; position: relative; height: 67px; width: 46px; cursor: pointer; top:5px; bottom:5px;">
                        <img  onclick="Calc();" src="../images/price/bt_calculate.jpg" style="position: absolute; left: 0px; top: 0px;">
                    </div>
                    <div style="float:left;margin-top:10px;margin-left:5px;" class="normallink">
                        <a href="javascript:onclick=Calc();" class="linkbutton">
                            <span class="head2">Price Calculator</span><br>
                            <span class="head1">คำนวณราคาโฆษณา</span>
                        </a>
                    </div>
                </div>
                </td>
            </tr>
            <tr>
                <td align=right valign=top>
                <br>
                <span class="head1 black">
                  ระยะเวลา
                </span>
                </td>
		<td style="font-size:0px;"><!-- --></td>
                <td align=left valign=top>
                <br>                        
                <select name="packagedurationbusiness" id="packagedurationbusiness" style="width:220px;display:block;">
                    <option value="" selected>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;----- โปรดระบุ -----</option>                
                    <option value="2w" id="business1" >2 สัปดาห์</option>
                    <option value="1m" id="business2" >1 เดือน</option>
                    <option value="2m" id="business3" >2 เดือน</option>
                    <option value="3m" id="business4" >3 เดือน</option>
                    <option value="6m" id="business5" >6 เดือน</option>
                    <option value="1y" id="business6" >1 ปี</option>
                </select>
                <select name="packagedurationpremium" id="packagedurationpremium" style="width:220px;display:none;">
                    <option value="" selected>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;----- โปรดระบุ -----</option>
                    <option value="1m" id="premium1" >1 เดือน</option>
                    <option value="2m" id="premium2" >2 เดือน</option>
                    <option value="3m" id="premium3" >3 เดือน</option>
                    <option value="6m" id="premium6" >6 เดือน</option>
                    <option value="1y" id="premium12" >1 ปี</option>
                </select>
                </td>
            </tr>
            </table>
            <br />              
            </td>
        </tr>
        <!--tr>
            <td background=../images/storeresume/resume_register/blue_dot.gif><img src=../images/storeresume/resume_register/p.gif height=3></td>
        </tr> 
        <tr bgcolor=AliceBlue  height=25>
            <td align=left valign=center>
            <span class="head1 gray">
            3. ข้อมูลบริษัทที่ต้องการลงประกาศ
            </span>
            </td>
        </tr>
        <tr>
            <td background=../images/storeresume/resume_register/blue_dot.gif><img src=../images/storeresume/resume_register/p.gif height=3></td>
        </tr>
        <tr>
            <td>
                <br />  
                <table border=0 width=480 cellspacing=0 cellpadding=1 align=center>
                    <tr>
                        <td align=left valign=center>
                        <input type=checkbox id=keepapplication name=keepapplication value="Yes" checked>
                        <span class="head1 black">&nbsp;เลือก "ถูก" ที่ช่องนี้ถ้าต้องการเก็บใบสมัครไว้ที่ JOBTHAI.COM</span><br>
                        <span class="head1 orange">
                            หมายเหตุ <br>
                            &nbsp; - กรณีที่เลือกตัวเลือกนี้ ท่านสามารถ Log In เข้ามา ตรวจ อ่าน หรือ ลบ ใบสมัคร ทาง Web Site  <br>
                            &nbsp; - ใบสมัครที่มีอายุมากกว่า <b>15</b> วันจะถูกลบทิ้งโดยอัตโนมัติ <br>
                            &nbsp; - สำหรับท่านที่ไม่สามารถอ่าน Email ที่เป็นภาษาไทยได้ แนะนำให้เลือกตัวเลือกนี้ และไม่ต้องกรอกที่ช่อง Email  ด้านล่าง <br>
                            &nbsp; - กรณีที่ยังต้องการให้ ใบสมัคร ถูกส่งไปที่ Email Address ของท่าน กรุณากรอกช่อง Email  ด้านล่างด้วย
                        </span><br>     
                        <input type=checkbox id=englishapply name=englishapply value="Yes" >
                        <span class="head1 black">&nbsp;ต้องการรับใบสมัครเป็น<b> ภาษาอังกฤษ </b>เท่านั้น</span>         
                        </td>
                    </tr>
                </table>
                <br />              
            </td>
        </tr-->
        <tr>
            <td background=../images/storeresume/resume_register/blue_dot.gif><img src=../images/storeresume/resume_register/p.gif height=3></td>
        </tr> 
        <tr bgcolor=AliceBlue  height=25>
            <td align=left valign=center>
            <span class="head1 gray">
            &nbsp;&nbsp;3. กรอกข้อมูลสำหรับการติดต่อและข้อมูลของบริษัท
            </span>
            </td>
        </tr>
        <tr>
            <td background=../images/storeresume/resume_register/blue_dot.gif><img src=../images/storeresume/resume_register/p.gif height=3></td>
        </tr> 
        <tr>
            <td>
                <br />  
                <table border=0 cellspacing=0 width=500 cellpadding=1 align=center>
                    <!--tr>
                        <td align=left valign=center colspan=2>
                        <span class="head1 red">*</span><span class="head1 black"> กรุณากรอกข้อมูล </span><span class="head1 orange"> ชื่อบริษัท ที่อยู่ และหมายเลขโทรศัพท์</span>
                        <span class="head1 black"> ให้ครบถ้วน เพื่อที่เจ้าหน้าที่จะได้สามารถเปิดให้ Account ของท่านใช้งานได้</span><br><br>
                        </td>
                    </tr-->
                    <tr>
                        <td align=right width=120 valign=center>
                            <span class="head1 black">
                              ชื่อผู้ติดต่อ
                            </span>
                        </td>
			<td width="20" style="font-size:0px;"><!-- --></td>
                        <td align=left  width=360 valign=top>
	                        <div style="float:left;">
	                            <input type="text" style="width: 300px;" name="contactname" id="contactname"  maxlength="255" onkeyup="return ismaxlength(this)" value="" onfocus="showsuggest(this.id);" onblur="hidesuggest(this.id,true);" /> 
	                        </div>
	                        <div style="position:relative;float:left;z-index:2000;">    
	                            <div id="sugg_contactname" align=left style="display:none;position:absolute;z-index:1000;width:210px;height:25px;top:-8px;left:5px;">
	                                <div style="float:left;margin-top:10px;">
	                                <img src="../images/webboard/pic_point.gif">
	                                </div>
	                                <div style="float:left;width:200px;height:25px;margin-top:5px;vertical-align:middle;text-align:center;z-index:2002;"><!--border-left:2px solid #FF6300;border-right:1px solid #CCCCCC;border-bottom:1px solid #CCCCCC;border-top:1px solid #CCCCCC;"-->
	                                    table width="200" border="0" cellpadding="0" cellspacing="0">
	                                        <tr>
	                                            <td width=10 height=10><img src="../images/webboard/pic_tabel_oreange_01.gif"></td>
	                                            <td width=190 height=10 background="../images/webboard/pic_tabel_oreange_02.jpg"></td>
	                                            <td width=10 height=10><img src="../images/webboard/pic_tabel_oreange_03.gif"></td>
	                                        </tr>
	                                        <tr>
	                                            <td width=10 background="../images/webboard/pic_tabel_oreange_04.jpg"></td>
	                                            <td width=190 bgcolor=white align=left>
	                                                <span class="head1 black;"">
	                                                แจ้งชื่อ / แผนก สำหรับการติดต่อ <br> สมัครงาน เช่น ฝ่ายบุคคล เป็นต้น
	                                                </span>
	                                            </td>
	                                            <td width=10 background="../images/webboard/pic_tabel_oreange_05.jpg"></td>
	                                        </tr>
	                                        <tr>
	                                            <td width=10 height=10><img src="../images/webboard/pic_tabel_oreange_06.gif"></td>
	                                            <td width=190 height=10 background="../images/webboard/pic_tabel_oreange_07.jpg"></td>
	                                            <td width=10 height=10><img src="../images/webboard/pic_tabel_oreange_08.gif"></td>
	                                        </tr>
	                                    </table>
	                                </div>
	                            </div>
	                        </div>
                        </td>
                        <td rowspan="3" valign="top" align="left" width="0">
                            <div style="position: relative; width:1px; height:1px; top:0px;bottom:0px; float:left; margin-left: 0px;">
                                <div style="position: relative; width:1px; height:1px; top:0px;bottom:0px; float:left; margin-left: -40px;">
                                    <div style="float:left; position: absoulte; height: 74px; width: 209px; cursor: pointer; top:0px; left:0px; margin-left: 0px;">
                                        <img onclick="showresume('V3');"; src="../images/postjob/button-ex-edit-th.jpg" border=0 style="cursor:pointer;"/>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align=right  valign=center>
			    <span class="head1 red">*</span>
                            <span class="head1 black">
                                ชื่อบริษัท
                            </span>
                        </td>
			<td style="font-size:0px;"><!-- --></td>
                        <td align=left  valign=top>
                        <div style="float:left;">
                            <input type="text" style="width:300px;" name="companyname" id="companyname"  maxlength="255" onkeyup="return ismaxlength(this)" value="" onfocus="showsuggest(this.id);" onblur="hidesuggest(this.id,false);" /> 
                        </div>
                        <div style="position:relative;float:left;z-index:2000;">    
                            <div id="sugg_companyname" align=left style="display:none;position:absolute;z-index:1000;width:210px;height:25px;top:-8px;left:5px;">
                                <div style="float:left;margin-top:10px;">
                                <img src="../images/webboard/pic_point.gif">
                                </div>
                                <div style="float:left;width:200px;height:25px;margin-top:5px;vertical-align:middle;text-align:center;z-index:2002;"><!--border-left:2px solid #FF6300;border-right:1px solid #CCCCCC;border-bottom:1px solid #CCCCCC;border-top:1px solid #CCCCCC;"-->
                                    <table width="200" border="0" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td width=10 height=10><img src="../images/webboard/pic_tabel_oreange_01.gif"></td>
                                            <td width=190 height=10 background="../images/webboard/pic_tabel_oreange_02.jpg"></td>
                                            <td width=10 height=10><img src="../images/webboard/pic_tabel_oreange_03.gif"></td>
                                        </tr>
                                        <tr>
                                            <td width=10 background="../images/webboard/pic_tabel_oreange_04.jpg"></td>
                                            <td width=190 bgcolor=white align=left>
                                                <span class="head1 black;">
                                                แจ้งชื่อบริษัท ห้าง ร้านของท่าน <br> เป็นภาษาไทย / อังกฤษก็ได้ <br> เช่น บริษัท ทิงค์เน็ต จำกัด เป็นต้น
                                                </span>
                                            </td>
                                            <td width=10 background="../images/webboard/pic_tabel_oreange_05.jpg"></td>
                                        </tr>
                                        <tr>
                                            <td width=10 height=10><img src="../images/webboard/pic_tabel_oreange_06.gif"></td>
                                            <td width=190 height=10 background="../images/webboard/pic_tabel_oreange_07.jpg"></td>
                                            <td width=10 height=10><img src="../images/webboard/pic_tabel_oreange_08.gif"></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>                            
                        </td>
                    </tr>
		    <tr id="tr_error_companyname" style="display: none;">
			<td colspan=2></td>
			<td valign="top" style="padding-bottom: 8px;" align="left">
			    <span class="head1 red" id="error_companyname" style="float: left;margin-left: 5px;"></span>
			</td>
		    </tr>
                    <tr>
                        <td align=right  valign=center>
			<span class="head1 red">*</span>
                        <span class="head1 black">
                            ลักษณะธุรกิจ
                        </span>
                        </td>
			<td style="font-size:0px;"><!-- --></td>
                        <td align=left  valign=top>
                        <select name="business" id="business" class="fixedSelect" onchange="hideerror(this.id);" onblur="checkInput(this.id,false);">
                            <option value="XXX" >----- โปรดระบุ -----</option>
                                                        <option value="1" >ธุรกิจ การเกษตร</option>
                                                        <option value="2" >ธุรกิจ การพิมพ์-สิ่งพิมพ์</option>
                                                        <option value="3" >ธุรกิจ การศึกษา</option>
                                                        <option value="4" >ธุรกิจ ขนส่ง</option>
                                                        <option value="5" >ธุรกิจ คอมพิวเตอร์-IT</option>
                                                        <option value="6" >ธุรกิจ ค้าปลีก</option>
                                                        <option value="7" >ธุรกิจ โฆษณา-ปชส.</option>
                                                        <option value="8" >ธุรกิจ เงินทุนหลักทรัพย์</option>
                                                        <option value="9" >ธุรกิจ ท่องเที่ยว</option>
                                                        <option value="10" >ธุรกิจ ที่ปรึกษา</option>
                                                        <option value="11" >ธุรกิจ ที่ปรึกษาจัดหางาน</option>
                                                        <option value="12" >ธุรกิจ ธนาคาร</option>
                                                        <option value="13" >ธุรกิจ บริการ</option>
                                                        <option value="14" >ธุรกิจ บันเทิง</option>
                                                        <option value="15" >ธุรกิจ ประกันภัย-ชีวิต</option>
                                                        <option value="16" >ธุรกิจ พลังงาน</option>
                                                        <option value="17" >ธุรกิจ พาณิชย์</option>
                                                        <option value="41" >ธุรกิจ เฟอร์นิเจอร์/เครื่องใช้ในบ้าน</option>
                                                        <option value="18" >ธุรกิจ ยา/เครื่องสำอาง/เครื่องมือแพทย์</option>
                                                        <option value="19" >ธุรกิจ โรงพยาบาล/คลีนิค</option>
                                                        <option value="20" >ธุรกิจ โรงแรม/Resort/Spa/สนามกอล์ฟ</option>
                                                        <option value="21" >ธุรกิจ วัสดุก่อสร้าง/ก่อสร้าง</option>
                                                        <option value="22" >ธุรกิจ  ส่งออก-นำเข้า</option>
                                                        <option value="39" >ธุรกิจ สินเชื่อ/บัตรเครดิต</option>
                                                        <option value="23" >ธุรกิจ สื่อสาร</option>
                                                        <option value="37" >ธุรกิจ สื่อสารมวลชน (วิทยุ/โทรทัศน์/น.ส.พ.)</option>
                                                        <option value="38" >ธุรกิจ สำนักงานบัญชีและกฎหมาย</option>
                                                        <option value="24" >ธุรกิจ อสังหาริมทรัพย์</option>
                                                        <option value="25" >ธุรกิจ ออกแบบ-ตกแต่ง</option>
                                                        <option value="26" >ธุรกิจ อาหาร-เครื่องดื่ม-ยาสูบ</option>
                                                        <option value="27" >ธุรกิจ อุตฯ
เคมี-พลาสติก</option>
                                                        <option value="28" >ธุรกิจ อุตฯกระดาษ/เครื่องเขียน</option>
                                                        <option value="29" >ธุรกิจ อุตฯบรรจุภัณฑ์</option>
                                                        <option value="30" >ธุรกิจ อุตฯไฟฟ้า</option>
                                                        <option value="31" >ธุรกิจ อุตฯยานพาหนะ/ชิ้นส่วนยานยนต์</option>
                                                        <option value="32" >ธุรกิจ อุตฯสิ่งทอ</option>
                                                        <option value="40" >ธุรกิจ อุตฯเหล็ก/โลหะ</option>
                                                        <option value="33" >ธุรกิจ อุตฯอิเลคโทรนิค</option>
                                                        <option value="34" >ธุรกิจ อัญมณี/เครื่องประดับ</option>
                                                        <option value="35" >ราชการ/รัฐวิสาหกิจ/มูลนิธิ</option>
                                                        <option value="36" >ธุรกิจ อื่นๆ</option>
                                                    </select>
                                               </td>
                    </tr>
		    <tr id="tr_error_business" style="display: none;">
			<td colspan=2></td>
			<td valign="top" style="padding-bottom: 8px;" align="left">
			    <span class="head1 red" id="error_business" style="float: left;margin-left: 5px;"></span>
			</td>
		    </tr>
                    <tr>
                        <td align=right  valign=center>
                        <span class="head1 black">
                                รายละเอียดของบริษัท
                            </span>
                         </td>
			<td style="font-size:0px;"><!-- --></td>
                         <td align=left  valign=top>
                         <div style="float:left;">
                             <textarea rows=4 name="detail" id="detail" style="width:300px;" style="font-family:Ms sans serif, Thonburi; font-size:12; color:black" maxlength="2000" onkeyup="return ismaxlength(this)" onfocus="showsuggest(this.id);" onblur="hidesuggest(this.id,true);"></textarea>
                         </div>
                         <div style="position:relative;float:left;z-index:2000;">    
                             <div id="sugg_detail" align=left style="display:none;position:absolute;z-index:1000;width:320px;height:25px;top:-8px;left:5px;">
                                 <div style="float:left;margin-top:10px;">
                                 <img src="../images/webboard/pic_point.gif">
                                 </div>
                                 <div style="float:left;width:310px;height:25px;margin-top:5px;vertical-align:middle;text-align:center;z-index:2002;"><!--border-left:2px solid #FF6300;border-right:1px solid #CCCCCC;border-bottom:1px solid #CCCCCC;border-top:1px solid #CCCCCC;"-->
                                     <table width="310" border="0" cellpadding="0" cellspacing="0">
                                         <tr>
                                             <td width=10 height=10><img src="../images/webboard/pic_tabel_oreange_01.gif"></td>
                                             <td width=300 height=10 background="../images/webboard/pic_tabel_oreange_02.jpg"></td>
                                             <td width=10 height=10><img src="../images/webboard/pic_tabel_oreange_03.gif"></td>
                                         </tr>
                                         <tr>
                                             <td width=10 background="../images/webboard/pic_tabel_oreange_04.jpg"></td>
                                             <td width=300 bgcolor=white align=left>
                                                 <span class="head1 black;"">
                                                 แจ้งรายละเอียดบริษัท เพื่อให้ผู้หางาน รู้จักบริษัทของท่านมากขึ้น เช่น เปิดดำเนินการมาตั้งแต่ปี ... ดำเนินธุรกิจเกี่ยวกับ... เป็นต้น
                                                 </span>
                                             </td>
                                             <td width=10 background="../images/webboard/pic_tabel_oreange_05.jpg"></td>
                                         </tr>
                                         <tr>
                                             <td width=10 height=10><img src="../images/webboard/pic_tabel_oreange_06.gif"></td>
                                             <td width=300 height=10 background="../images/webboard/pic_tabel_oreange_07.jpg"></td>
                                             <td width=10 height=10><img src="../images/webboard/pic_tabel_oreange_08.gif"></td>
                                         </tr>
                                     </table>
                                 </div>
                             </div>
                         </div>                            
                         </td>
                    </tr>
                    <tr>
                        <td align=right  valign=center>
                            <span class="head1 black">
                                สวัสดิการ
                            </span>
                         </td>
			<td style="font-size:0px;"><!-- --></td>
                         <td align=left  valign=top>
                         <div style="float:left;">
                             <textarea rows=4 name="benefit" id="benefit" style="width:300px;" style="font-family:Ms sans serif, Thonburi; font-size:12; color:black" maxlength="1000" onkeyup="return ismaxlength(this)" onfocus="showsuggest(this.id);" onblur="hidesuggest(this.id,true);"></textarea>
                         </div>
                         <div style="position:relative;float:left;z-index:2000;">    
                             <div id="sugg_benefit" align=left style="display:none;position:absolute;z-index:1000;width:320px;height:25px;top:-8px;left:5px;">
                                 <div style="float:left;margin-top:10px;">
                                 <img src="../images/webboard/pic_point.gif">
                                 </div>
                                 <div style="float:left;width:310px;height:25px;margin-top:5px;vertical-align:middle;text-align:center;z-index:2002;"><!--border-left:2px solid #FF6300;border-right:1px solid #CCCCCC;border-bottom:1px solid #CCCCCC;border-top:1px solid #CCCCCC;"-->
                                     <table width="310" border="0" cellpadding="0" cellspacing="0">
                                         <tr>
                                             <td width=10 height=10><img src="../images/webboard/pic_tabel_oreange_01.gif"></td>
                                             <td width=300 height=10 background="../images/webboard/pic_tabel_oreange_02.jpg"></td>
                                             <td width=10 height=10><img src="../images/webboard/pic_tabel_oreange_03.gif"></td>
                                         </tr>
                                         <tr>
                                             <td width=10 background="../images/webboard/pic_tabel_oreange_04.jpg"></td>
                                             <td width=300 bgcolor=white align=left>
                                                 <span class="head1 black;"">
                                                 แจ้งสวัสดิการ(ถ้ามี) ข้อมูลส่วนนี้เป็นสิ่งจูงใจการสมัครงาน <br> แต่กรุณาแจ้งข้อมูลตามจริงอย่างระมัดระวัง เนื่องจากมีผล <br> ทางกฎหมาย
                                                 </span>
                                             </td>
                                             <td width=10 background="../images/webboard/pic_tabel_oreange_05.jpg"></td>
                                         </tr>
                                         <tr>
                                             <td width=10 height=10><img src="../images/webboard/pic_tabel_oreange_06.gif"></td>
                                             <td width=300 height=10 background="../images/webboard/pic_tabel_oreange_07.jpg"></td>
                                             <td width=10 height=10><img src="../images/webboard/pic_tabel_oreange_08.gif"></td>
                                         </tr>
                                     </table>
                                 </div>
                             </div>
                         </div>                             
                         </td>
                    </tr>
                    <tr>
                        <td align=right  valign=center>
                            <span class="head1 black">
                                วิธีการสมัคร
                            </span>
                        </td>
			<td style="font-size:0px;"><!-- --></td>
                        <td align=left  valign=top>
                         <div style="float:left;">
                             <textarea rows=4 name="applymethod" id="applymethod" style="width:300px;" style="font-family:Ms sans serif, Thonburi; font-size:12; color:black" maxlength="2000" onkeyup="return ismaxlength(this)" onfocus="showsuggest(this.id);" onblur="hidesuggest(this.id,true);"></textarea>
                         </div>
                         <div style="position:relative;float:left;z-index:2000;">    
                             <div id="sugg_applymethod" align=left style="display:none;position:absolute;z-index:1000;width:320px;height:25px;top:-8px;left:5px;">
                                 <div style="float:left;margin-top:10px;">
                                 <img src="../images/webboard/pic_point.gif">
                                 </div>
                                 <div style="float:left;width:310px;height:25px;margin-top:5px;vertical-align:middle;text-align:center;z-index:2002;"><!--border-left:2px solid #FF6300;border-right:1px solid #CCCCCC;border-bottom:1px solid #CCCCCC;border-top:1px solid #CCCCCC;"-->
                                     <table width="310" border="0" cellpadding="0" cellspacing="0">
                                         <tr>
                                             <td width=10 height=10><img src="../images/webboard/pic_tabel_oreange_01.gif"></td>
                                             <td width=300 height=10 background="../images/webboard/pic_tabel_oreange_02.jpg"></td>
                                             <td width=10 height=10><img src="../images/webboard/pic_tabel_oreange_03.gif"></td>
                                         </tr>
                                         <tr>
                                             <td width=10 background="../images/webboard/pic_tabel_oreange_04.jpg"></td>
                                             <td width=300 bgcolor=white align=left>
                                                 <span class="head1 black;"">
                                                 แจ้งวิธีการรับสมัคร เช่น สมัครผ่านปุ่ม Apply Now <br> ของ JobThai , ส่งใบสมัครทาง Email , สมัครได้ <br> ด้วยตนเองที่บริษัท เป็นต้น
                                                 </span>
                                             </td>
                                             <td width=10 background="../images/webboard/pic_tabel_oreange_05.jpg"></td>
                                         </tr>
                                         <tr>
                                             <td width=10 height=10><img src="../images/webboard/pic_tabel_oreange_06.gif"></td>
                                             <td width=300 height=10 background="../images/webboard/pic_tabel_oreange_07.jpg"></td>
                                             <td width=10 height=10><img src="../images/webboard/pic_tabel_oreange_08.gif"></td>
                                         </tr>
                                     </table>
                                 </div>
                             </div>
                         </div>                               
                        </td>
                    </tr>
                    <tr>
                        <td align=right  valign=center>
			    <span class="head1 red">*</span>
                            <span class="head1 black">
                                ที่อยู่
                            </span>
                        </td>
			<td style="font-size:0px;"><!-- --></td>
                        <td align=left  valign=top>
                         <div style="float:left;">
                            <input type="text" style="width: 300px;" name="address" id="address" maxlength="255" onkeyup="return ismaxlength(this)" value="" onfocus="showsuggest(this.id);" onblur="hidesuggest(this.id,false);"/>
                         </div>
                         <div style="position:relative;float:left;z-index:2000;">    
                             <div id="sugg_address" align=left style="display:none;position:absolute;z-index:1000;width:210px;height:25px;top:-8px;left:5px;">
                                 <div style="float:left;margin-top:10px;">
                                 <img src="../images/webboard/pic_point.gif">
                                 </div>
                                 <div style="float:left;width:160px;height:25px;margin-top:5px;vertical-align:middle;text-align:center;z-index:2002;"><!--border-left:2px solid #FF6300;border-right:1px solid #CCCCCC;border-bottom:1px solid #CCCCCC;border-top:1px solid #CCCCCC;"-->
                                     <table width="200" border="0" cellpadding="0" cellspacing="0">
                                         <tr>
                                             <td width=10 height=10><img src="../images/webboard/pic_tabel_oreange_01.gif"></td>
                                             <td width=180 height=10 background="../images/webboard/pic_tabel_oreange_02.jpg"></td>
                                             <td width=10 height=10><img src="../images/webboard/pic_tabel_oreange_03.gif"></td>
                                         </tr>
                                         <tr>
                                             <td width=10 background="../images/webboard/pic_tabel_oreange_04.jpg"></td>
                                             <td width=180 bgcolor=white align=left>
                                                 <span class="head1 black;"">
                                                 แจ้งที่อยู่สำหรับการติดต่อสมัครงาน
                                                 </span>
                                             </td>
                                             <td width=10 background="../images/webboard/pic_tabel_oreange_05.jpg"></td>
                                         </tr>
                                         <tr>
                                             <td width=10 height=10><img src="../images/webboard/pic_tabel_oreange_06.gif"></td>
                                             <td width=180 height=10 background="../images/webboard/pic_tabel_oreange_07.jpg"></td>
                                             <td width=10 height=10><img src="../images/webboard/pic_tabel_oreange_08.gif"></td>
                                         </tr>
                                     </table>
                                 </div>
                             </div>
                         </div>   
                        </td>
                    </tr>
		    <tr id="tr_error_address" style="display: none;">
			<td colspan=2></td>
			<td valign="top" style="padding-bottom: 8px;" align="left">
			    <span class="head1 red" id="error_address" style="float: left;margin-left: 5px;"></span>
			</td>
		    </tr>
                    <tr height=10><td colspan=3 style="font-size:0px;" nowrap></td></tr>
                    <tr bgcolor="#DEFFEE">
                        <td align=left valign=top style="font-size:0px;">
                            <div style="font-size:0px; position:relative; width:10px; height:10px;">
                                <div style="font-size:0px; position:absolute; top:-1px; left:-1px; width:10px; height:10px; overflow:hidden;"><div style="font-size:0px; position:absolute; top:0px; left:0px; width:20px; height:20px; background:transparent url(../images/common/circle_trans_white.png);"></div></div>
                            </div>
                        </td>
                        <td align=left valign=top style="font-size:0px;" nowrap></td>
                        <td align=right valign=top style="font-size:0px;">
                            <div style="font-size:0px; position:relative; width:10px; height:10px;">
                                <div style="font-size:0px; position:absolute; top:-1px; right:-1px; width:10px; height:10px; overflow:hidden;"><div style="font-size:0px; position:absolute; top:0px; right:0px; width:20px; height:20px; background:transparent url(../images/common/circle_trans_white.png);"></div></div>
                            </div>
                        </td>
                    </tr>
                    <tr bgcolor="#DEFFEE">
                        <td align=left valign=center nowrap></td>
			<td style="font-size:0px;" nowrap><!-- --></td>
                        <td align=left valign=top class="head1 black">
                            <input type="radio" id="countrytype_th" name="countrytype" value="TH" checked onclick="selectedCountryType();" /> ประเทศไทย
                            &nbsp; &nbsp; 
                            <input type="radio" id="countrytype_ov" name="countrytype" value="OV" onclick="selectedCountryType();"  /> ต่างประเทศ
                        </td>
                    </tr>
                    <tr id="trProvince" style="display:table-row;" bgcolor="#DEFFEE">
                        <td align=right  valign=center>
			    <span class="head1 red">*</span>
                            <span class="head1 black">
                                จังหวัด
                            </span>
                        </td>
			<td style="font-size:0px;"><!-- --></td>
                        <td align=left  valign=top>
                                                        <select id="provincenew" name="provincenew" onchange="refreshAmphoe(this.value);hideerror(this.id);" onblur="checkInput(this.id,false);" class="fixedSelect">
                                <option value="XX">โปรดระบุ</option>
                                                                <option value="01" >กรุงเทพมหานคร</option>
                                                                <option value="02" >กระบี่</option>
                                                                <option value="03" >กาญจนบุรี</option>
                                                                <option value="04" >กาฬสินธุ์</option>
                                                                <option value="05" >กำแพงเพชร</option>
                                                                <option value="06" >ขอนแก่น</option>
                                                                <option value="07" >จันทบุรี</option>
                                                                <option value="08" >ฉะเชิงเทรา</option>
                                                                <option value="09" >ชลบุรี</option>
                                                                <option value="10" >ชัยนาท</option>
                                                                <option value="11" >ชัยภูมิ</option>
                                                                <option value="12" >ชุมพร</option>
                                                                <option value="13" >เชียงราย</option>
                                                                <option value="14" >เชียงใหม่</option>
                                                                <option value="15" >ตรัง</option>
                                                                <option value="16" >ตราด</option>
                                                                <option value="17" >ตาก</option>
                                                                <option value="18" >นครนายก</option>
                                                                <option value="19" >นครปฐม</option>
                                                                <option value="20" >นครพนม</option>
                                                                <option value="21" >นครราชสีมา</option>
                                                                <option value="22" >นครศรีธรรมราช</option>
                                                                <option value="23" >นครสวรรค์</option>
                                                                <option value="24" >นนทบุรี</option>
                                                                <option value="25" >นราธิวาส</option>
                                                                <option value="26" >น่าน</option>
                                                                <option value="77" >บึงกาฬ</option>
                                                                <option value="27" >บุรีรัมย์</option>
                                                                <option value="28" >ปทุมธานี</option>
                                                                <option value="29" >ประจวบคีรีขันธ์</option>
                                                                <option value="30" >ปราจีนบุรี</option>
                                                                <option value="31" >ปัตตานี</option>
                                                                <option value="32" >พระนครศรีอยุธยา</option>
                                                                <option value="33" >พะเยา</option>
                                                                <option value="34" >พังงา</option>
                                                                <option value="35" >พัทลุง</option>
                                                                <option value="36" >พิจิตร</option>
                                                                <option value="37" >พิษณุโลก</option>
                                                                <option value="38" >เพชรบุรี</option>
                                                                <option value="39" >เพชรบูรณ์</option>
                                                                <option value="40" >แพร่</option>
                                                                <option value="41" >ภูเก็ต</option>
                                                                <option value="42" >มหาสารคาม</option>
                                                                <option value="43" >มุกดาหาร</option>
                                                                <option value="44" >แม่ฮ่องสอน</option>
                                                                <option value="45" >ยโสธร</option>
                                                                <option value="46" >ยะลา</option>
                                                                <option value="47" >ร้อยเอ็ด</option>
                                                                <option value="48" >ระนอง</option>
                                                                <option value="49" >ระยอง</option>
                                                                <option value="50" >ราชบุรี</option>
                                                                <option value="51" >ลพบุรี</option>
                                                                <option value="52" >ลำปาง</option>
                                                                <option value="53" >ลำพูน</option>
                                                                <option value="54" >เลย</option>
                                                                <option value="55" >ศรีสะเกษ</option>
                                                                <option value="56" >สกลนคร</option>
                                                                <option value="57" >สงขลา</option>
                                                                <option value="58" >สตูล</option>
                                                                <option value="59" >สมุทรปราการ</option>
                                                                <option value="60" >สมุทรสงคราม</option>
                                                                <option value="61" >สมุทรสาคร</option>
                                                                <option value="62" >สระแก้ว</option>
                                                                <option value="63" >สระบุรี</option>
                                                                <option value="64" >สิงห์บุรี</option>
                                                                <option value="65" >สุโขทัย</option>
                                                                <option value="66" >สุพรรณบุรี</option>
                                                                <option value="67" >สุราษฎร์ธานี</option>
                                                                <option value="68" >สุรินทร์</option>
                                                                <option value="69" >หนองคาย</option>
                                                                <option value="70" >หนองบัวลำภู</option>
                                                                <option value="71" >อ่างทอง</option>
                                                                <option value="72" >อำนาจเจริญ</option>
                                                                <option value="73" >อุดรธานี</option>
                                                                <option value="74" >อุตรดิตถ์</option>
                                                                <option value="75" >อุทัยธานี</option>
                                                                <option value="76" >อุบลราชธานี</option>
                                                            </select>
                        </td>
                    </tr>
		    <tr id="tr_error_provincenew" style="display: none;" bgcolor="#DEFFEE">
			<td colspan=2></td>
			<td valign="top" style="padding-bottom: 8px;" align="left">
			    <span class="head1 red" id="error_provincenew" style="float: left;margin-left: 5px;"></span>
			</td>
		    </tr>
                    <tr id="trAmphoe" style="display:table-row;" bgcolor="#DEFFEE">
                        <td align=right  valign=center>
			    <span class="head1 red">*</span>
                            <span class="head1 black">เขต/อำเภอ</span>
                        </td>
			<td style="font-size:0px;"><!-- --></td>
                        <td align=left  valign=top>
                            <select id="amphoe" name="amphoe" onchange="refreshTambon(this.value);hideerror(this.id);" onblur="checkInput(this.id,false);" class="fixedSelect">
                                <option value="XXXX">โปรดระบุ</option>
                                                            </select>
                        </td>
                    </tr>
		    <tr id="tr_error_amphoe" style="display: none;" bgcolor="#DEFFEE">
			<td colspan=2></td>
			<td valign="top" style="padding-bottom: 8px;" align="left">
			    <span class="head1 red" id="error_amphoe" style="float: left;margin-left: 5px;"></span>
			</td>
		    </tr>
                    <tr id="trTambon" style="display:table-row;" bgcolor="#DEFFEE">
                        <td align=right  valign=center>
			    <span class="head1 red">*</span>
                            <span class="head1 black">แขวง/ตำบล</span>
                        </td>
			<td style="font-size:0px;"><!-- --></td>
                        <td align=left  valign=top>
                            <select id="tambon" name="tambon" class="fixedSelect" onchange="hideerror(this.id);" onblur="checkInput(this.id,false);">
                                <option value="XXXXXX">โปรดระบุ</option>
                                                            </select>
                        </td>
                    </tr>
		    <tr id="tr_error_tambon" style="display: none;" bgcolor="#DEFFEE">
			<td colspan=2></td>
			<td valign="top" style="padding-bottom: 8px;" align="left">
			    <span class="head1 red" id="error_tambon" style="float: left;margin-left: 5px;"></span>
			</td>
		    </tr>
                    <tr id="trCountry" style="display:none;" bgcolor="#DEFFEE">
                        <td align=right  valign=center>
			    <span class="head1 red">*</span>
                            <span class="head1 black">ประเทศ</span>
                        </td>
			<td style="font-size:0px;"><!-- --></td>
                        <td align=left  valign=top>
                            <select id="country" name="country" class="fixedSelect" onchange="hideerror(this.id);" onblur="checkInput(this.id,false);">
                                <option value="">โปรดระบุ</option>
                                                                <option value="AF" >Afghanistan</option>                                                                <option value="AL" >Albania</option>                                                                <option value="AG" >Algeria</option>                                                                <option value="AN" >Andorra</option>                                                                <option value="AO" >Angola</option>                                                                <option value="AC" >Antigua and Barbuda</option>                                                                <option value="AR" >Argentina</option>                                                                <option value="AM" >Armenia</option>                                                                <option value="AS" >Australia</option>                                                                <option value="AU" >Austria</option>                                                                <option value="AJ" >Azerbaijan</option>                                                                <option value="BF" >Bahamas, The</option>                                                                <option value="BA" >Bahrain</option>                                                                <option value="BG" >Bangladesh</option>                                                                <option value="BB" >Barbados</option>                                                                <option value="BO" >Belarus</option>                                                                <option value="BE" >Belgium</option>                                                                <option value="BH" >Belize</option>                                                                <option value="BN" >Benin</option>                                                                <option value="BT" >Bhutan</option>                                                                <option value="BL" >Bolivia</option>                                                                <option value="BK" >Bosnia and Herzegovina</option>                                                                <option value="BC" >Botswana</option>                                                                <option value="BR" >Brazil</option>                                                                <option value="BX" >Brunei</option>                                                                <option value="BU" >Bulgaria</option>                                                                <option value="UV" >Burkina Faso</option>                                                                <option value="BM" >Burma</option>                                                                <option value="BY" >Burundi</option>                                                                <option value="CB" >Cambodia</option>                                                                <option value="CM" >Cameroon</option>                                                                <option value="CA" >Canada</option>                                                                <option value="CV" >Cape Verde</option>                                                                <option value="CT" >Central African Republic</option>                                                                <option value="CD" >Chad</option>                                                                <option value="CI" >Chile</option>                                                                <option value="CH" >China</option>                                                                <option value="CO" >Colombia</option>                                                                <option value="CN" >Comoros</option>                                                                <option value="CF" >Congo (Brazzaville)</option>                                                                <option value="CG" >Congo (Kinshasa)</option>                                                                <option value="CS" >Costa Rica</option>                                                                <option value="IV" >Cote d'Ivoire</option>                                                                <option value="HR" >Croatia</option>                                                                <option value="CU" >Cuba</option>                                                                <option value="CY" >Cyprus</option>                                                                <option value="EZ" >Czech Republic</option>                                                                <option value="DA" >Denmark</option>                                                                <option value="DJ" >Djibouti</option>                                                                <option value="DO" >Dominica</option>                                                                <option value="DR" >Dominican Republic</option>                                                                <option value="EC" >Ecuador</option>                                                                <option value="EG" >Egypt</option>                                                                <option value="ES" >El Salvador</option>                                                                <option value="EK" >Equatorial Guinea</option>                                                                <option value="ER" >Eritrea</option>                                                                <option value="EN" >Estonia</option>                                                                <option value="ET" >Ethiopia</option>                                                                <option value="FJ" >Fiji</option>                                                                <option value="FI" >Finland</option>                                                                <option value="FR" >France</option>                                                                <option value="GB" >Gabon</option>                                                                <option value="GA" >Gambia, The</option>                                                                <option value="GG" >Georgia</option>                                                                <option value="GM" >Germany</option>                                                                <option value="GH" >Ghana</option>                                                                <option value="GR" >Greece</option>                                                                <option value="GJ" >Grenada</option>                                                                <option value="GT" >Guatemala</option>                                                                <option value="GV" >Guinea</option>                                                                <option value="PU" >Guinea-Bissau</option>                                                                <option value="GY" >Guyana</option>                                                                <option value="HA" >Haiti</option>                                                                <option value="VT" >Holy See</option>                                                                <option value="HO" >Honduras</option>                                                                <option value="HU" >Hungary</option>                                                                <option value="IC" >Iceland</option>                                                                <option value="IN" >India</option>                                                                <option value="ID" >Indonesia</option>                                                                <option value="IR" >Iran</option>                                                                <option value="IZ" >Iraq</option>                                                                <option value="EI" >Ireland</option>                                                                <option value="IS" >Israel</option>                                                                <option value="IT" >Italy</option>                                                                <option value="JM" >Jamaica</option>                                                                <option value="JA" >Japan</option>                                                                <option value="JO" >Jordan</option>                                                                <option value="KZ" >Kazakhstan</option>                                                                <option value="KE" >Kenya</option>                                                                <option value="KR" >Kiribati</option>                                                                <option value="KN" >Korea, North</option>                                                                <option value="KS" >Korea, South</option>                                                                <option value="KV" >Kosovo</option>                                                                <option value="KU" >Kuwait</option>                                                                <option value="KG" >Kyrgyzstan</option>                                                                <option value="LA" >Laos</option>                                                                <option value="LG" >Latvia</option>                                                                <option value="LE" >Lebanon</option>                                                                <option value="LT" >Lesotho</option>                                                                <option value="LI" >Liberia</option>                                                                <option value="LY" >Libya</option>                                                                <option value="LS" >Liechtenstein</option>                                                                <option value="LH" >Lithuania</option>                                                                <option value="LU" >Luxembourg</option>                                                                <option value="MK" >Macedonia</option>                                                                <option value="MA" >Madagascar</option>                                                                <option value="MI" >Malawi</option>                                                                <option value="MY" >Malaysia</option>                                                                <option value="MV" >Maldives</option>                                                                <option value="ML" >Mali</option>                                                                <option value="MT" >Malta</option>                                                                <option value="RM" >Marshall Islands</option>                                                                <option value="MR" >Mauritania</option>                                                                <option value="MP" >Mauritius</option>                                                                <option value="MX" >Mexico</option>                                                                <option value="FM" >Micronesia, Federated States of</option>                                                                <option value="MD" >Moldova</option>                                                                <option value="MN" >Monaco</option>                                                                <option value="MG" >Mongolia</option>                                                                <option value="MJ" >Montenegro</option>                                                                <option value="MO" >Morocco</option>                                                                <option value="MZ" >Mozambique</option>                                                                <option value="WA" >Namibia</option>                                                                <option value="NR" >Nauru</option>                                                                <option value="NP" >Nepal</option>                                                                <option value="NL" >Netherlands</option>                                                                <option value="NZ" >New Zealand</option>                                                                <option value="NU" >Nicaragua</option>                                                                <option value="NG" >Niger</option>                                                                <option value="NI" >Nigeria</option>                                                                <option value="NO" >Norway</option>                                                                <option value="MU" >Oman</option>                                                                <option value="PK" >Pakistan</option>                                                                <option value="PS" >Palau</option>                                                                <option value="PM" >Panama</option>                                                                <option value="PP" >Papua New Guinea</option>                                                                <option value="PA" >Paraguay</option>                                                                <option value="PE" >Peru</option>                                                                <option value="RP" >Philippines</option>                                                                <option value="PL" >Poland</option>                                                                <option value="PO" >Portugal</option>                                                                <option value="QA" >Qatar</option>                                                                <option value="RO" >Romania</option>                                                                <option value="RS" >Russia</option>                                                                <option value="RW" >Rwanda</option>                                                                <option value="SC" >Saint Kitts and Nevis</option>                                                                <option value="ST" >Saint Lucia</option>                                                                <option value="VC" >Saint Vincent and the Grenadines</option>                                                                <option value="WS" >Samoa</option>                                                                <option value="SM" >San Marino</option>                                                                <option value="TP" >Sao Tome and Principe</option>                                                                <option value="SA" >Saudi Arabia</option>                                                                <option value="SG" >Senegal</option>                                                                <option value="RI" >Serbia</option>                                                                <option value="SE" >Seychelles</option>                                                                <option value="SL" >Sierra Leone</option>                                                                <option value="SN" >Singapore</option>                                                                <option value="LO" >Slovakia</option>                                                                <option value="SI" >Slovenia</option>                                                                <option value="BP" >Solomon Islands</option>                                                                <option value="SO" >Somalia</option>                                                                <option value="SF" >South Africa</option>                                                                <option value="OD" >South Sudan</option>                                                                <option value="SP" >Spain</option>                                                                <option value="CE" >Sri Lanka</option>                                                                <option value="SU" >Sudan</option>                                                                <option value="NS" >Suriname</option>                                                                <option value="WZ" >Swaziland</option>                                                                <option value="SW" >Sweden</option>                                                                <option value="SZ" >Switzerland</option>                                                                <option value="SY" >Syria</option>                                                                <option value="TW" >Taiwan</option>                                                                <option value="TI" >Tajikistan</option>                                                                <option value="TZ" >Tanzania</option>                                                                                                                                <option value="TT" >Timor-Leste</option>                                                                <option value="TO" >Togo</option>                                                                <option value="TN" >Tonga</option>                                                                <option value="TD" >Trinidad and Tobago</option>                                                                <option value="TS" >Tunisia</option>                                                                <option value="TU" >Turkey</option>                                                                <option value="TX" >Turkmenistan</option>                                                                <option value="TV" >Tuvalu</option>                                                                <option value="UG" >Uganda</option>                                                                <option value="UP" >Ukraine</option>                                                                <option value="AE" >United Arab Emirates</option>                                                                <option value="UK" >United Kingdom</option>                                                                <option value="US" >United States</option>                                                                <option value="UY" >Uruguay</option>                                                                <option value="UZ" >Uzbekistan</option>                                                                <option value="NH" >Vanuatu</option>                                                                <option value="VE" >Venezuela</option>                                                                <option value="VM" >Vietnam</option>                                                                <option value="YM" >Yemen</option>                                                                <option value="ZA" >Zambia</option>                                                                <option value="ZI" >Zimbabwe</option>                                                            </select>
                        </td>
                    </tr>
		    <tr id="tr_error_country" style="display: none;" bgcolor="#DEFFEE">
			<td colspan=2></td>
			<td valign="top" style="padding-bottom: 8px;" align="left">
			    <span class="head1 red" id="error_country" style="float: left;margin-left: 5px;"></span>
			</td>
		    </tr>
                    <tr bgcolor="#DEFFEE">
                        <td align=left valign=bottom style="font-size:0px;">
                            <div style="font-size:0px; position:relative; width:10px; height:10px;">
                                <div style="font-size:0px; position:absolute; bottom:-1px; left:-1px; width:10px; height:10px; overflow:hidden;"><div style="font-size:0px; position:absolute; bottom:0px; left:0px; width:20px; height:20px; background:transparent url(../images/common/circle_trans_white.png);"></div></div>
                            </div>
                        </td>
                        <td align=left valign=bottom style="font-size:0px;" nowrap></td>
                        <td align=right valign=bottom style="font-size:0px;">
                            <div style="font-size:0px; position:relative; width:10px; height:10px;">
                                <div style="font-size:0px; position:absolute; bottom:-1px; right:-1px; width:10px; height:10px; overflow:hidden;"><div style="font-size:0px; position:absolute; bottom:0px; right:0px; width:20px; height:20px; background:transparent url(../images/common/circle_trans_white.png);"></div></div>
                            </div>
                        </td>
                    </tr>
                    <tr height=10><td colspan=3 style="font-size:0px;" nowrap></td></tr>
                    <tr>
                        <td align=right  valign=center>
                                <span class="head1 black">
                                รหัสไปรษณีย์
                                </span>
                        </td>
			<td style="font-size:0px;"><!-- --></td>
                        <td align=left  valign=top>
                         <div style="float:left;">
                            <input type="text" style="width: 300px;" NAME="postalcode" id="postalcode" onkeyup="return ismaxlength(this)" value="" onblur="checkInput(this.id,true);" onfocus="hideerror(this.id);" />
                         </div>                          
                        </td>
                    </tr>
                    <tr>
                        <td align=right  valign=center>
			    <span class="head1 red">*</span>
                            <span class="head1 black">
                                โทรศัพท์
                            </span>
                        </td>
			<td style="font-size:0px;"><!-- --></td>
                        <td align=left  valign=top>
                            <div style="float:left;">
                                <input type="text" style="width: 300px;" name="tel" id="tel" maxlength="255" onkeyup="return ismaxlength(this)" value="" onfocus="showsuggest(this.id);" onblur="hidesuggest(this.id,false);" />
                            </div>
                            <div style="position:relative;float:left;z-index:2000;">    
                            <div id="sugg_tel" align=left style="display:none;position:absolute;z-index:1000;width:200px;height:25px;top:-8px;left:5px;">
                                <div style="float:left;margin-top:10px;">
                                <img src="../images/webboard/pic_point.gif">
                                </div>
                                <div style="float:left;width:190px;height:25px;margin-top:5px;vertical-align:middle;text-align:center;z-index:2002;"><!--border-left:2px solid #FF6300;border-right:1px solid #CCCCCC;border-bottom:1px solid #CCCCCC;border-top:1px solid #CCCCCC;"-->
                                    <table width="190" border="0" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td width=10 height=10><img src="../images/webboard/pic_tabel_oreange_01.gif"></td>
                                            <td width=180 height=10 background="../images/webboard/pic_tabel_oreange_02.jpg"></td>
                                            <td width=10 height=10><img src="../images/webboard/pic_tabel_oreange_03.gif"></td>
                                        </tr>
                                        <tr>
                                            <td width=10 background="../images/webboard/pic_tabel_oreange_04.jpg"></td>
                                            <td width=180 bgcolor=white align=left>
                                                <span class="head1 black;"">
                                                แจ้งหมายเลขโทรศัพท์สำหรับ <br> การติดต่อสมัครงาน <br> โดยพิมพ์ตัวเลขติดกันทั้งหมด
                                                </span>
                                            </td>
                                            <td width=10 background="../images/webboard/pic_tabel_oreange_05.jpg"></td>
                                        </tr>
                                        <tr>
                                            <td width=10 height=10><img src="../images/webboard/pic_tabel_oreange_06.gif"></td>
                                            <td width=180 height=10 background="../images/webboard/pic_tabel_oreange_07.jpg"></td>
                                            <td width=10 height=10><img src="../images/webboard/pic_tabel_oreange_08.gif"></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            </div>
                        </td>
                    </tr>
		    <tr id="tr_error_tel" style="display: none;">
			<td colspan=2></td>
			<td valign="top" style="padding-bottom: 8px;" align="left">
			    <span class="head1 red" id="error_tel" style="float: left;margin-left: 5px;"></span>
			</td>
		    </tr>
                    <tr>
                        <td align=right  valign=center>
                            <span class="head1 black">
                                แฟกซ์
                            </span>
                        </td>
			<td style="font-size:0px;"><!-- --></td>
                        <td align=left  valign=top>
                            <div style="float:left;">
                                <input type="text" style="width: 300px;" name="fax" id="fax" maxlength="255" onkeyup="return ismaxlength(this)" value="" onfocus="showsuggest(this.id);" onblur="hidesuggest(this.id,true);" />
                            </div>
                            <div style="position:relative;float:left;z-index:2000;">    
                            <div id="sugg_fax" align=left style="display:none;position:absolute;z-index:1000;width:200px;height:25px;top:-8px;left:5px;">
                                <div style="float:left;margin-top:10px;">
                                <img src="../images/webboard/pic_point.gif">
                                </div>
                                <div style="float:left;width:190px;height:25px;margin-top:5px;vertical-align:middle;text-align:center;z-index:2002;"><!--border-left:2px solid #FF6300;border-right:1px solid #CCCCCC;border-bottom:1px solid #CCCCCC;border-top:1px solid #CCCCCC;"-->
                                    <table width="190" border="0" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td width=10 height=10><img src="../images/webboard/pic_tabel_oreange_01.gif"></td>
                                            <td width=180 height=10 background="../images/webboard/pic_tabel_oreange_02.jpg"></td>
                                            <td width=10 height=10><img src="../images/webboard/pic_tabel_oreange_03.gif"></td>
                                        </tr>
                                        <tr>
                                            <td width=10 background="../images/webboard/pic_tabel_oreange_04.jpg"></td>
                                            <td width=180 bgcolor=white align=left>
                                                <span class="head1 black;"">
                                                แจ้งหมายเลขแฟกซ์สำหรับ <br> การติดต่อสมัครงาน <br> โดยพิมพ์ตัวเลขติดกันทั้งหมด
                                                </span>
                                            </td>
                                            <td width=10 background="../images/webboard/pic_tabel_oreange_05.jpg"></td>
                                        </tr>
                                        <tr>
                                            <td width=10 height=10><img src="../images/webboard/pic_tabel_oreange_06.gif"></td>
                                            <td width=180 height=10 background="../images/webboard/pic_tabel_oreange_07.jpg"></td>
                                            <td width=10 height=10><img src="../images/webboard/pic_tabel_oreange_08.gif"></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            </div>                            
                         </td>
                    </tr>
                    <tr>
                        <td align=right valign=center>
                            <span class="head1 black">
                                Email
                            </span>
                         </td>
			<td style="font-size:0px;"><!-- --></td>
                         <td align=left valign=top>
                            <div style="float:left;">
                            <input type="text" style="width: 300px;" name="email" id="email" maxlength="255" onkeyup="return ismaxlength(this)" value="" onfocus="showsuggest(this.id);" onblur="hidesuggest(this.id,true);" />
                            </div>
                            <div style="position:relative;float:left;z-index:2000;">    
                            <div id="sugg_email" align=left style="display:none;position:absolute;z-index:1000;width:280px;height:25px;top:-8px;left:5px;">
                                <div style="float:left;margin-top:10px;">
                                <img src="../images/webboard/pic_point.gif">
                                </div>
                                <div style="float:left;width:270px;height:25px;margin-top:5px;vertical-align:middle;text-align:center;z-index:2002;"><!--border-left:2px solid #FF6300;border-right:1px solid #CCCCCC;border-bottom:1px solid #CCCCCC;border-top:1px solid #CCCCCC;"-->
                                    <table width="270" border="0" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td width=10 height=10><img src="../images/webboard/pic_tabel_oreange_01.gif"></td>
                                            <td width=250 height=10 background="../images/webboard/pic_tabel_oreange_02.jpg"></td>
                                            <td width=10 height=10><img src="../images/webboard/pic_tabel_oreange_03.gif"></td>
                                        </tr>
                                        <tr>
                                            <td width=10 background="../images/webboard/pic_tabel_oreange_04.jpg"></td>
                                            <td width=250 bgcolor=white align=left>
                                                <span class="head1 black;"">
                                                แจ้ง Email สำหรับการติดต่อสมัครงาน <br>
                                                กรุณาตรวจสอบความถูกต้องเพื่อประโยชน์ของท่าน <br>
                                                ลักษณะ Email ที่ถูกต้อง จะไม่มี www นำหน้า <br>
                                                และไม่มีการเว้นวรรค เช่น jobthai@example.com เป็นต้น
                                                </span>
                                            </td>
                                            <td width=10 background="../images/webboard/pic_tabel_oreange_05.jpg"></td>
                                        </tr>
                                        <tr>
                                            <td width=10 height=10><img src="../images/webboard/pic_tabel_oreange_06.gif"></td>
                                            <td width=250 height=10 background="../images/webboard/pic_tabel_oreange_07.jpg"></td>
                                            <td width=10 height=10><img src="../images/webboard/pic_tabel_oreange_08.gif"></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            </div>
                         </td> 
                    </tr>
		    <tr id="tr_error_email" style="display: none;">
			<td colspan=2></td>
			<td valign="top" style="padding-bottom: 8px;" align="left">
			    <span class="head1 red" id="error_email" style="float: left;margin-left: 5px;"></span>
			</td>
		    </tr>
                    <tr>
                        <td align=right valign=center>
                            <span class="head1 black">
                                ยืนยัน Email
                            </span>
                         </td>
			<td style="font-size:0px;"><!-- --></td>
                         <td align=left valign=top>
                            <div style="float:left;">
                            <input type="text" style="width: 300px;" name="emailcon" id="emailcon" maxlength="255" onkeyup="return ismaxlength(this)" value="" onfocus="showsuggest(this.id);" onblur="hidesuggest(this.id,true);" />
                            </div>
                            <div style="position:relative;float:left;z-index:2000;">    
                            <div id="sugg_emailcon" align=left style="display:none;position:absolute;z-index:1000;width:180px;height:25px;top:-8px;left:5px;">
                                <div style="float:left;margin-top:10px;">
                                <img src="../images/webboard/pic_point.gif">
                                </div>
                                <div style="float:left;width:170px;height:25px;margin-top:5px;vertical-align:middle;text-align:center;z-index:2002;"><!--border-left:2px solid #FF6300;border-right:1px solid #CCCCCC;border-bottom:1px solid #CCCCCC;border-top:1px solid #CCCCCC;"-->
                                    <table width="170" border="0" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td width=10 height=10><img src="../images/webboard/pic_tabel_oreange_01.gif"></td>
                                            <td width=150 height=10 background="../images/webboard/pic_tabel_oreange_02.jpg"></td>
                                            <td width=10 height=10><img src="../images/webboard/pic_tabel_oreange_03.gif"></td>
                                        </tr>
                                        <tr>
                                            <td width=10 background="../images/webboard/pic_tabel_oreange_04.jpg"></td>
                                            <td width=150 bgcolor=white align=left>
                                                <span class="head1 black;"">
                                                ใส่ Email อีกครั้งเพื่อยืนยันความถูกต้อง
                                                </span>
                                            </td>
                                            <td width=10 background="../images/webboard/pic_tabel_oreange_05.jpg"></td>
                                        </tr>
                                        <tr>
                                            <td width=10 height=10><img src="../images/webboard/pic_tabel_oreange_06.gif"></td>
                                            <td width=150 height=10 background="../images/webboard/pic_tabel_oreange_07.jpg"></td>
                                            <td width=10 height=10><img src="../images/webboard/pic_tabel_oreange_08.gif"></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            </div>
                         </td> 
                    </tr>
		    <tr id="tr_error_emailcon" style="display: none;">
			<td colspan=2></td>
			<td valign="top" style="padding-bottom: 8px;" align="left">
			    <span class="head1 red" id="error_emailcon" style="float: left;margin-left: 5px;"></span>
			</td>
		    </tr>
                    <tr>
                        <td align=right valign=center>
                             <span class="head1 black">
                                เว็บไซต์
                                </span>
                         </td>
			<td style="font-size:0px;"><!-- --></td>
                         <td align=left valign=top>
                            <div style="float:left;">
                            <INPUT class="INPUT_CNTL_BGCOLOR" TYPE=TEXT style="width:300px;" NAME="website" id="website" maxlength="255" onkeyup="return ismaxlength(this)" value="" onfocus="showsuggest(this.id);" onblur="hidesuggest(this.id,true);">    
                            </div>
                            <div style="position:relative;float:left;z-index:2000;">    
                            <div id="sugg_website" align=left style="display:none;position:absolute;z-index:1000;width:230px;height:25px;top:-8px;left:5px;">
                                <div style="float:left;margin-top:10px;">
                                <img src="../images/webboard/pic_point.gif">
                                </div>
                                <div style="float:left;width:220px;height:25px;margin-top:5px;vertical-align:middle;text-align:center;z-index:2002;"><!--border-left:2px solid #FF6300;border-right:1px solid #CCCCCC;border-bottom:1px solid #CCCCCC;border-top:1px solid #CCCCCC;"-->
                                    <table width="220" border="0" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td width=10 height=10><img src="../images/webboard/pic_tabel_oreange_01.gif"></td>
                                            <td width=200 height=10 background="../images/webboard/pic_tabel_oreange_02.jpg"></td>
                                            <td width=10 height=10><img src="../images/webboard/pic_tabel_oreange_03.gif"></td>
                                        </tr>
                                        <tr>
                                            <td width=10 background="../images/webboard/pic_tabel_oreange_04.jpg"></td>
                                            <td width=200 bgcolor=white align=left>
                                                <span class="head1 black;"">
                                                แจ้งเว็บไซต์บริษัท(ถ้ามี) เพื่อให้ผู้หางาน <br> รู้จักบริษัทของท่านมากขึ้น
                                                </span>
                                            </td>
                                            <td width=10 background="../images/webboard/pic_tabel_oreange_05.jpg"></td>
                                        </tr>
                                        <tr>
                                            <td width=10 height=10><img src="../images/webboard/pic_tabel_oreange_06.gif"></td>
                                            <td width=200 height=10 background="../images/webboard/pic_tabel_oreange_07.jpg"></td>
                                            <td width=10 height=10><img src="../images/webboard/pic_tabel_oreange_08.gif"></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            </div>                                
                         </td>
                    </tr>
		    <tr>
                        <td align=left valign=center>
                        </td>
			<td style="font-size:0px;"><!-- --></td>
			<td align=left valign=top>
			    <br/>
			    <table border="0" cellpadding="0" cellspacing="0"><tr><td style="border:solid thin #cccccc; padding: 5px;">
				<img src="pic_text.php" id="pixcha" style="border:solid thin #cccccc;cursor: pointer; vertical-align: middle; margin-bottom: 5px;" onclick="recaptcha()"><img src="../images/captcha/reload-tabs-icon.png" style="cursor:pointer;vertical-align:middle;margin-left:5px;margin-bottom:5px;" onclick="recaptcha()"><br/>
				<input name="code_input" type="text" style="width:175px;color:#cccccc;" id="code_input" value="กรุณาใส่ข้อความตามภาพ..." onfocus="document.getElementById('code_input').value='';document.getElementById('code_input').style.color='black';" onblur="clearcaptcha()">
			    </td></tr></table>
			</td>
		    </tr>
                </table>
                <br />
            </td>
        </tr>
        <tr>
            <td background=../images/storeresume/resume_register/blue_dot.gif><img src=../images/storeresume/resume_register/p.gif height=3></td>
        </tr> 
        <tr bgcolor=AliceBlue  height=25>
            <td align=left valign=center>
            <span class="head1 gray">
            &nbsp;&nbsp;4. เลือกตัวเลือกสำหรับการรับใบสมัคร
            </span>
            </td>
        </tr>
        <tr>
            <td background=../images/storeresume/resume_register/blue_dot.gif><img src=../images/storeresume/resume_register/p.gif height=3></td>
        </tr> 
        <tr>
            <td align=center>
                <br />  
                <table border=0 width=700 cellspacing=0 cellpadding=1 align=center>
                    <tr>
                        <td align=left valign=center colspan=2>
                        <input type=checkbox id=keepapplication name=keepapplication value="Yes" checked>
                        <span class="head1 black">&nbsp;เพื่อใช้บริการเก็บใบสมัครไว้ที่ JobThai.com</span> <a class="searchjob" id="remarkClick" onclick="toggleremark()" style="cursor:pointer;">(ดูข้อมูลเพิ่มเติมที่นี่)</a>
                        <span class="head1 black" id="remark" style="display: none;"><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;หมายเหตุ <br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - กรณีที่เลือกตัวเลือกนี้ ระบบจะเก็บใบสมัครไว้ 30 วัน ใบสมัครที่มีอายุ    เกิน 30 วันจะถูกลบทิ้งโดยอัตโนมัติ<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - ท่านสามารถ Log in เข้ามาตรวจ อ่าน หรือลบใบสมัครผ่านหน้าเว็บไซต์ได้<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - กรณีที่ยังต้องการให้ใบสมัครส่งไปที่ Email ของท่าน กรุณากรอก Email ในช่องด้านบนด้วย<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - สำหรับท่านที่ไม่สามารถอ่าน Email ที่เป็นภาษาไทยได้ แนะนำให้เลือกตัวเลือกนี้ และไม่ต้องกรอก Email ในช่องด้านบน
                        </span><br> 
                        <input type=checkbox id=englishapply name=englishapply value="Yes" >
                        <span class="head1 black">&nbsp;ต้องการรับใบสมัครเป็นภาษาอังกฤษเท่านั้น</span><br>
                        <input type=checkbox id=applicationtemplate name=applicationtemplate value="1" checked>
                        <span class="head1 black">
                            &nbsp;ต้องการรับใบสมัครทาง Email ในรูปแบบ HTML <a href="#" onclick="showresume('V2');" class="searchjob">(ดูตัวอย่างที่นี่)</a><br> 
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            กรณีที่ท่าน<u>ไม่เลือก</u> ท่านจะได้รับใบสมัครทาง Email ในรูปแบบ Plain Text <a href="#" onclick="showresume('V1');" class="searchjob">(ดูตัวอย่างที่นี่)</a>
                        </span><br>
                        </td>
                    </tr>
                </table>
                <br />              
            </td>
        </tr>
        <tr>
        <td valign="top" bgcolor="#e3e3e3" align="center">
            <table width="100%" cellspacing="0" cellpadding="0" border="0">
            <tr>
            <td valign="top" align="center" height=36>
                <div id="bt_register" style="overflow: hidden; position: relative; height: 26px; width: 132px; cursor: pointer; top:5px;bottom:5px;">
                    <img onclick="register(true)"; src="../images/storeresume/button/button_regis_th.jpg" style="position: absolute; left: 0px; top: 0px;" border=0 />
                </div>
            </td>
            </tr>
        </table>
        </td>
    </tr>
    </table>      
   </form>