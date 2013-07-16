<form action="<?=base_url();?>user/register" method="post" id="contact-form" class="form-horizontal formular">

<table bgcolor=White border=0 width=100% cellspacing=4 cellpadding=4 >
 
<tr>
    <td height="32" width=150 align=left valign=middle>
        <span class="head1 black">Email</span>
    </td>
    <td height="32" align=left valign=middle>
        <div style="font-size:13px;position:relative;float:left;"> 
 
            <INPUT  TYPE=TEXT style="font-size:13px;width:200px;" NAME="Email" id="Email" maxLength=70 >
          
        </div>
         
    </td>
</tr>
<tr>
    <td height="32" width=150 align=left valign=middle>
        <div style="font-size:13px;position:relative;float:left;margin-left:0px;margin-top:4px;text-align:left;">
        <span class="head1 black">ชื่อ</span>
        </div>
    </td>
    <td height="32" align=left valign=middle>
        <div style="font-size:13px;float:left;">
            <INPUT  TYPE=TEXT style="font-size:13px;width:200px;" NAME="FirstName" id="FirstName" maxLength=50 value="">
            &nbsp;&nbsp;
        </div>
 
    </td>
</tr>
<tr>
    <td height="32" width=150 align=left valign=middle>
        <div style="font-size:13px;position:relative;float:left;margin-left:0px;margin-top:4px;text-align:left;">
            <span class="head1 black">นามสกุล</span>
        </div>
    </td>
    <td height="32" align=left valign=middle>
        <div style="font-size:13px;float:left;">
            <INPUT  TYPE=TEXT style="font-size:13px;width:200px;" NAME="LastName" id="LastName" maxLength=50 value="">
            &nbsp;&nbsp;
        </div>
         
    </td>
</tr>
<tr>
    <td height="32" width=150  align=left valign=middle>
        <div style="font-size:13px;position:relative;float:left;margin-left:0px;margin-top:4px;text-align:left;">
            <span class="head1 black">วันเดือนปีเกิด</span>
        </div>
    </td>
    <td height="32" align=left valign=middle>
        <select NAME="DOB_Day" id="DOB_Day"  style="font-size:13px;width:46px;"> 
                            <option value="1" >1</option>
                    <option value="2" >2</option>
                    <option value="3" >3</option>
                    <option value="4" >4</option>
                    <option value="5" >5</option>
                    <option value="6" >6</option>
                    <option value="7" >7</option>
                    <option value="8" >8</option>
                    <option value="9" >9</option>
                    <option value="10" >10</option>
                    <option value="11" >11</option>
                    <option value="12" >12</option>
                    <option value="13" >13</option>
                    <option value="14" >14</option>
                    <option value="15" >15</option>
                    <option value="16" >16</option>
                    <option value="17" >17</option>
                    <option value="18" >18</option>
                    <option value="19" >19</option>
                    <option value="20" >20</option>
                    <option value="21" >21</option>
                    <option value="22" >22</option>
                    <option value="23" >23</option>
                    <option value="24" >24</option>
                    <option value="25" >25</option>
                    <option value="26" >26</option>
                    <option value="27" >27</option>
                    <option value="28" >28</option>
                    <option value="29" >29</option>
                    <option value="30" >30</option>
                    <option value="31" >31</option>
          
        </select>
        <select NAME="DOB_Month" id="DOB_Month"  style="font-size:13px;width:85px; margin-left:0px;">
                            <option value="1" >มกราคม</option>
                    <option value="2" >กุมภาพันธ์</option>
                    <option value="3" >มีนาคม</option>
                    <option value="4" >เมษายน</option>
                    <option value="5" >พฤษภาคม</option>
                    <option value="6" >มิถุนายน</option>
                    <option value="7" >กรกฎาคม</option>
                    <option value="8" >สิงหาคม</option>
                    <option value="9" >กันยายน</option>
                    <option value="10" >ตุลาคม</option>
                    <option value="11" >พฤศจิกายน</option>
                    <option value="12">ธันวาคม</option>
           
        </select>
        <select NAME="DOB_Year" id="DOB_Year"  style="font-size:13px;width:61px; margin-left:0px;"> 
                            <option value="1998" >2541</option>
                    <option value="1997" >2540</option>
                    <option value="1996" >2539</option>
                    <option value="1995" >2538</option>
                    <option value="1994" >2537</option>
                    <option value="1993" >2536</option>
                    <option value="1992" >2535</option>
                    <option value="1991" >2534</option>
                    <option value="1990" >2533</option>
                    <option value="1989" >2532</option>
                    <option value="1988" >2531</option>
                    <option value="1987" >2530</option>
                    <option value="1986" >2529</option>
                    <option value="1985" >2528</option>
                    <option value="1984" >2527</option>
                    <option value="1983" >2526</option>
                    <option value="1982" >2525</option>
                    <option value="1981" >2524</option>
                    <option value="1980" >2523</option>
                    <option value="1979" >2522</option>
                    <option value="1978" >2521</option>
                    <option value="1977" >2520</option>
                    <option value="1976" >2519</option>
                    <option value="1975" >2518</option>
                    <option value="1974" >2517</option>
                    <option value="1973" >2516</option>
                    <option value="1972" >2515</option>
                    <option value="1971" >2514</option>
                    <option value="1970" >2513</option>
                    <option value="1969" >2512</option>
                    <option value="1968" >2511</option>
                    <option value="1967" >2510</option>
                    <option value="1966" >2509</option>
                    <option value="1965" >2508</option>
                    <option value="1964" >2507</option>
                    <option value="1963" >2506</option>
                    <option value="1962" >2505</option>
                    <option value="1961" >2504</option>
                    <option value="1960" >2503</option>
                    <option value="1959" >2502</option>
                    <option value="1958" >2501</option>
                    <option value="1957" >2500</option>
                    <option value="1956" >2499</option>
                    <option value="1955" >2498</option>
                    <option value="1954" >2497</option>
                    <option value="1953" >2496</option>
                    <option value="1952" >2495</option>
                    <option value="1951" >2494</option>
                    <option value="1950" >2493</option>
                    <option value="1949" >2492</option>
                    <option value="1948" >2491</option>
                    <option value="1947" >2490</option>
                    <option value="1946" >2489</option>
                    <option value="1945" >2488</option>
                    <option value="1944" >2487</option>
                    <option value="1943" >2486</option>
                    <option value="1942" >2485</option>
                    <option value="1941" >2484</option>
                    <option value="1940" >2483</option>
                    <option value="1939" >2482</option>
                    <option value="1938" >2481</option>
                    <option value="1937" >2480</option>
                    <option value="1936" >2479</option>
                    <option value="1935" >2478</option>
                    <option value="1934" >2477</option>
                    <option value="1933" >2476</option>
                    <option value="1932" >2475</option>
                    <option value="1931" >2474</option>
                    <option value="1930" >2473</option>
                    <option value="1929" >2472</option>
                    <option value="1928" >2471</option>
                    <option value="1927" >2470</option>
                    <option value="1926" >2469</option>
                    <option value="1925" >2468</option>
                    <option value="1924" >2467</option>
                    <option value="1923" >2466</option>
          
        </select>            
        &nbsp;&nbsp;
     </td>
</tr>
<tr>
    <td height="32" width=150  align=left valign=bottom>
        <div style="font-size:13px;position:relative;float:left;margin-left:0px;margin-top:4px;text-align:left;">
            <span class="head1 black">เพศ</span>
        </div>
    </td>
    <td height="32" align=left valign=bottom>
        <table border=0 align=left cellpadding=0 cellspacing=0>
        <tr>
            <td height="32" width=160 align=left valign=middle>
                <input type="radio" id="GenderMale" name="Gender" value="ช"   /> <span class="head1 black">ชาย</span>
                &nbsp;&nbsp;&nbsp;
                <input type="radio" id="GenderFemale" name="Gender" value="ญ"   /> <span class="head1 black">หญิง</span>
            </td>
            <td height="32" width=100 align=left valign=middle><span class="head1 black">สถานภาพสมรส</span></td>
            <td height="32" width=120 align=left valign=middle>
		<select NAME="Marital_Status" id="Marital_Status"  style="font-size:13px;width:80px;"> 
                <option value="S" >โสด</option>
                <option value="M" >สมรส</option>
                <option value="D" >หย่า</option>
                <option value="W" >หม้าย</option>
                </select>
	    </td>
        </tr>
        </table>
    </td>
</tr>
<tr>
    <td height="32" width=150  align=left valign=bottom>
        <div style="font-size:13px;position:relative;float:left;margin-left:0px;margin-top:4px;text-align:left;">
            <span class="head1 black">ส่วนสูง</span>
        </div>
    </td>
    <td height="32" align=left valign=bottom>
        <table border=0 align=left cellpadding=0 cellspacing=0>
        <tr>
            <td height="32" width=160 align=left valign=middle>
		  <input  type=text name="Height" id="Height"  style="font-size:13px;width:60px;" maxLength=3 value="" onblur="checkValue(this.id,this.value);">      
                <span class="head1 black">เซนติเมตร</span>
            </td>
           
        </tr>
        </table>
    </td>
</tr>
<tr>
    <td height="32" width=150  align=left valign=bottom>
        <div style="font-size:13px;position:relative;float:left;margin-left:0px;margin-top:4px;text-align:left;">
            <span class="head1 black">น้ำหนัก</span>
        </div>
    </td>
    <td height="32" align=left valign=bottom>
        <table border=0 align=left cellpadding=0 cellspacing=0>
        <tr>
       
	 
            <td height="32"  align=left valign=middle>
	 <input  type=text name="Weight" id="Weight"  >      
                <span class="head1 black">กิโลกรัม</span>
            </td>
        </tr>
        </table>
    </td>
</tr>
<tr>
    <td height="32" width=150  align=left valign=bottom>
        <div style="font-size:13px;position:relative;float:left;margin-left:0px;margin-top:4px;text-align:left;">
            <span class="head1 black">สัญชาติ</span>
        </div>
    </td>
    <td height="32" align=left valign=bottom>
        <table border=0 align=left cellpadding=0 cellspacing=0>
        <tr>
            <td height="32" width=160 align=left valign=middle>
		<select  style="font-size:13px;width:145px;" NAME="Nationality" id="Nationality">
		    <option value="">โปรดระบุ</option>
		    						<option  value="THA">ไทย</option>
					    						<option disabled>----------------</option>
					    						<option  value="GRC">กรีซ</option>
					    						<option  value="KHM">กัมพูชา</option>
					    						<option  value="GTM">กัวเตมาลา</option>
					    						<option  value="QAT">กาตาร์</option>
					    						<option  value="GHA">กานา</option>
					    						<option  value="GAB">กาบอง</option>
					    						<option  value="GUY">กายอานา</option>
					    						<option  value="GIN">กินี</option>
					    						<option  value="GNB">กินีบิสเซา</option>
					    						<option  value="COG">คองโก</option>
					    						<option  value="CRI">คอสตาริกา</option>
					    						<option  value="COM">คอโมโรส</option>
					    						<option  value="KAZ">คาซัคสถาน</option>
					    						<option  value="KIR">คิริบาส</option>
					    						<option  value="CUB">คิวบา</option>
					    						<option  value="KGZ">คีร์กีซสถาน</option>
					    						<option  value="KWT">คูเวต</option>
					    						<option  value="GEO">จอร์เจีย</option>
					    						<option  value="JOR">จอร์แดน</option>
					    						<option  value="JAM">จาเมกา</option>
					    						<option  value="DJI">จิบูตี</option>
					    						<option  value="CHN">จีน</option>
					    						<option  value="TCD">ชาด</option>
					    						<option  value="CHL">ชิลี</option>
					    						<option  value="SMR">ซานมารีโน</option>
					    						<option  value="WSM">ซามัว</option>
					    						<option  value="SAU">ซาอุดีอาระเบีย</option>
					    						<option  value="ZWE">ซิมบับเว</option>
					    						<option  value="SYR">ซีเรีย</option>
					    						<option  value="SDN">ซูดาน</option>
					    						<option  value="SUR">ซูรินาเม</option>
					    						<option  value="JPN">ญี่ปุ่น</option>
					    						<option  value="TTO">ตรินิแดดและโตเบโก</option>
					    						<option  value="TON">ตองกา</option>
					    						<option  value="TLS">ติมอร์</option>
					    						<option  value="TUR">ตุรกี</option>
					    						<option  value="TUN">ตูนิเซีย</option>
					    						<option  value="TUV">ตูวาลู</option>
					    						<option  value="TJK">ทาจิกิสถาน</option>
					    						<option  value="NOR">นอร์เวย์</option>
					    						<option  value="NAM">นามิเบีย</option>
					    						<option  value="NRU">นาอูรู</option>
					    						<option  value="NIC">นิการากัว</option>
					    						<option  value="NZL">นิวซีแลนด์</option>
					    						<option  value="BRA">บราซิล</option>
					    						<option  value="BRN">บรูไนดารุสซาลาม</option>
					    						<option  value="BWA">บอตสวานา</option>
					    						<option  value="BIH">บอสเนียและเฮอร์เซโก</option>
					    						<option  value="BGD">บังคลาเทศ</option>
					    						<option  value="BGR">บัลแกเรีย</option>
					    						<option  value="BRB">บาร์เบโดส</option>
					    						<option  value="BHR">บาห์เรน</option>
					    						<option  value="BHS">บาฮามาส</option>
					    						<option  value="BDI">บุรุนดี</option>
					    						<option  value="BFA">บูร์กินาฟาโซ</option>
					    						<option  value="PAK">ปากีสถาน</option>
					    						<option  value="PAN">ปานามา</option>
					    						<option  value="PNG">ปาปัวนิวกินี</option>
					    						<option  value="PRY">ปารากวัย</option>
					    						<option  value="FRA">ฝรั่งเศส</option>
					    						<option  value="MMR">พม่า</option>
					    						<option  value="FJI">ฟิจิ</option>
					    						<option  value="FIN">ฟินแลนด์</option>
					    						<option  value="PHL">ฟิลิปปินส์</option>
					    						<option  value="BTN">ภูฎาน</option>
					    						<option  value="MNG">มองโกเลีย</option>
					    						<option  value="MNE">มอนเตเนโกร</option>
					    						<option  value="MUS">มอริเชียส</option>
					    						<option  value="MLT">มอลตา</option>
					    						<option  value="MDA">มอลโดวา</option>
					    						<option  value="MDV">มัลดีฟส์</option>
					    						<option  value="MKD">มาซิโดเนีย</option>
					    						<option  value="MDG">มาดากัสการ์</option>
					    						<option  value="MWI">มาลาวี</option>
					    						<option  value="MLI">มาลี</option>
					    						<option  value="MAC">มาเก๊า</option>
					    						<option  value="MYS">มาเลเวีย</option>
					    						<option  value="UGA">ยูกันดา</option>
					    						<option  value="UKR">ยูเครน</option>
					    						<option  value="RWA">รวันดา</option>
					    						<option  value="RUS">รัสเซีย</option>
					    						<option  value="LUX">ลักเซมเบิร์ก</option>
					    						<option  value="LVA">ลัตเวีย</option>
					    						<option  value="LAO">ลาว</option>
					    						<option  value="LIE">ลิกเตนสไตน์</option>
					    						<option  value="LTU">ลิทัวเนีย</option>
					    						<option  value="LBY">ลิเบีย</option>
					    						<option  value="VUT">วานูอาตู</option>
					    						<option  value="LKA">ศรีลังกา</option>
					    						<option  value="SWZ">สวาซิแลนด์</option>
					    						<option  value="CHE">สวิตเซอร์แลนด์</option>
					    						<option  value="SWE">สวีเดน</option>
					    						<option  value="ARE">สหรัฐอาหรับเอมิเรตส์</option>
					    						<option  value="USA">สหรัฐอเมริกา</option>
					    						<option  value="GBR">สหราชอาณาจักร</option>
					    						<option  value="CZE">สาธารณรัญเช็ก</option>
					    						<option  value="CAF">สาธารณรัฐแอฟริกากลาง</option>
					    						<option  value="CIV">สาธารณรัฐโกตดิวัวร์</option>
					    						<option  value="DOM">สาธารณรัฐโดมินิกัน</option>
					    						<option  value="SGP">สิงคโปร์</option>
					    						<option  value="ESP">สเปน</option>
					    						<option  value="SVK">สโลวะเกีย</option>
					    						<option  value="SVN">สโลวีเนีย</option>
					    						<option  value="AUT">ออสเตรีย</option>
					    						<option  value="AUS">ออสเตรเลีย</option>
					    						<option  value="AND">อันเดอร์รา</option>
					    						<option  value="AFG">อัฟกานิสถาน</option>
					    						<option  value="ARG">อาร์เจนตินา</option>
					    						<option  value="ARM">อาร์เมเนีย</option>
					    						<option  value="AZE">อาเซอร์ไบจัน</option>
					    						<option  value="ITA">อิตาลี</option>
					    						<option  value="IND">อินเดีย</option>
					    						<option  value="IDN">อินโดนีเซีย</option>
					    						<option  value="IRQ">อิรัก</option>
					    						<option  value="ISR">อิสราเอล</option>
					    						<option  value="IRN">อิหร่าน</option>
					    						<option  value="GNQ">อิเควทอเรียลกินี</option>
					    						<option  value="EGY">อียิปต์</option>
					    						<option  value="UZB">อุซเบกิสถาน</option>
					    						<option  value="URY">อุรุกวัย</option>
					    						<option  value="HND">ฮอนดูรัส</option>
					    						<option  value="HUN">ฮังการี</option>
					    						<option  value="HKG">ฮ่องกง</option>
					    						<option  value="GRD">เกรนาดา</option>
					    						<option  value="PRK">เกาหลีเหนือ</option>
					    						<option  value="KOR">เกาหลีใต้</option>
					    						<option  value="KEN">เคนยา</option>
					    						<option  value="CPV">เคปเวิร์ด</option>
					    						<option  value="SRB">เซอร์เบีย</option>
					    						<option  value="SLE">เซียร์ราลีโอน</option>
					    						<option  value="SYC">เซเชลส์</option>
					    						<option  value="SEN">เซเนกัล</option>
					    						<option  value="DNK">เดนมาร์ก</option>
					    						<option  value="TKM">เติร์กเมนิสถาน</option>
					    						<option  value="NPL">เนปาล</option>
					    						<option  value="NLD">เนเธอร์แลนด์</option>
					    						<option  value="BEN">เบนิน</option>
					    						<option  value="BLR">เบลารุส</option>
					    						<option  value="BLZ">เบลีซ</option>
					    						<option  value="BEL">เบลเยียม</option>
					    						<option  value="BMU">เบอ์มิวดา</option>
					    						<option  value="PER">เปรู</option>
					    						<option  value="MEX">เม็กซิโก</option>
					    						<option  value="DEU">เยอรมนี</option>
					    						<option  value="YEM">เยเมน</option>
					    						<option  value="LBN">เลบานอน</option>
					    						<option  value="LSO">เลโซโท</option>
					    						<option  value="VNM">เวียดนาม</option>
					    						<option  value="VEN">เวเนซุเอลา</option>
					    						<option  value="ECU">เอกวาดอร์</option>
					    						<option  value="ETH">เอธิโอเปีย</option>
					    						<option  value="ERI">เอริเทรีย</option>
					    						<option  value="SLV">เอลซัลวาดอร์</option>
					    						<option  value="EST">เอสโตเนีย</option>
					    						<option  value="HTI">เฮติ</option>
					    						<option  value="GMB">แกมเบีย</option>
					    						<option  value="CAN">แคนาดา</option>
					    						<option  value="CMR">แคเมอรูน</option>
					    						<option  value="ZMB">แซมเบีย</option>
					    						<option  value="TZA">แทนซาเนีย</option>
					    						<option  value="AGO">แองโกลา</option>
					    						<option  value="ZAF">แอฟริกาใต้</option>
					    						<option  value="DZA">แอลจีเรีย</option>
					    						<option  value="ALB">แอลเบเนีย</option>
					    						<option  value="HRV">โครเอเชีย</option>
					    						<option  value="COL">โคลัมเบีย</option>
					    						<option  value="SOM">โซมาเลีย</option>
					    						<option  value="DMA">โดมินีกา</option>
					    						<option  value="TGO">โตโก</option>
					    						<option  value="BOL">โบลิเวีย</option>
					    						<option  value="PRT">โปรตุเกส</option>
					    						<option  value="POL">โปแลนด์</option>
					    						<option  value="MOZ">โมซัมบิก</option>
					    						<option  value="MCO">โมนาโค</option>
					    						<option  value="MAR">โมร็อกโก</option>
					    						<option  value="ROU">โรมาเนีย</option>
					    						<option  value="OMN">โอมาน</option>
					    						<option  value="CYP">ไซปรัส</option>
					    						<option  value="TWN">ไต้หวัน</option>
					    						<option  value="NGA">ไนจีเรีย</option>
					    						<option  value="NER">ไนเจอร์</option>
					    						<option  value="FSM">ไมโครนีเซีย</option>
					    						<option  value="LBR">ไลบีเรีย</option>
					    						<option  value="ISL">ไอซ์แลนด์</option>
					    						<option  value="IRL">ไอร์แลนด์</option>
					    						<option  value="XXX">อื่นๆ</option>
					    		</select>
            </td>
            <td height="32" width=100 align=left valign=middle>
                <span class="head1 black">ศาสนา</span>
            </td>
            <td height="32" width=120 align=left valign=middle>
		<select  style="font-size:13px;width:80px;" NAME="Religion" id="Religion">
		    <option value="">โปรดระบุ</option>
		    						<option  value="Buddhism">พุทธ</option>
					    						<option  value="Christianity">คริสต์</option>
					    						<option  value="Islam">อิสลาม</option>
					    						<option disabled>---------</option>
					    						<option  value="Confucianism">ขงจื๊อ</option>
					    						<option  value="Sikhism">ซิกข์</option>
					    						<option  value="Baha'i Faith">บาไฮ</option>
					    						<option  value="Judaism">ยูดาห์</option>
					    						<option  value="Shinto">ลัทธิชินโต</option>
					    						<option  value="Hinduism">ฮินดู</option>
					    						<option  value="Jainism">เชน</option>
					    						<option  value="Taoism">เต๋า</option>
					    						<option  value="Non-religious">ไม่มีศาสนา</option>
					    		</select>
            </td>
        </tr>
        </table>
    </td>
</tr>
<tr id="tr_soldier" >
    <td height="32" width=150  align=left valign=middle>
        <div style="font-size:13px;position:relative;float:left;margin-left:0px;margin-top:4px;text-align:left;">
            <span class="head1 black">สถานภาพทางทหาร</span>
        </div>
    </td>
    <td height="32" align=left valign=middle>
	<select  style="font-size:13px;width:290px;" NAME="Soldier" id="Soldier">
            <option value="">โปรดระบุ</option>
                            <option  value="Pass">ผ่านการเกณฑ์ทหาร</option>
                            <option  value="Exempted">ได้รับการยกเว้น / จบหลักสูตรรักษาดินแดน (รด.)</option>
                            <option  value="None">ยังไม่ผ่านการเกณฑ์ทหาร</option>
                    </select>
    </td>
</tr>
</table>
<table bgcolor=White border=0 width=100% cellspacing=2 cellpadding=2 style="font-size:13px;">
 
<tr>
    <td height="32" width=150  align=left valign=middle>
        <div style="font-size:13px;position:relative;float:left;margin-left:0px;margin-top:4px;text-align:left;">
            <span class="head1 black">ที่อยู่ปัจจุบัน</span>
        </div>
    </td>
    <td height="32" align=left valign=middle>
        <INPUT TYPE=TEXT style="font-size:13px;width:200px;" NAME="Address" id="Address" maxLength=200 value="131">
        &nbsp;&nbsp;
    </td>
</tr>
<tr id="trProvince" style="font-size:13px;display:table-row;">
    <td height="32" width=150  align=left valign=middle>
        <span class="head1 black">จังหวัด</span>
    </td>
    <td height="32" align=left valign=middle>
        <select name="Province" id="Province" onchange="refreshAmphoe(this.value);"  style="font-size:13px;width:200px;">
            <option value="XX">โปรดระบุ</option>                                            <option  value="01">กรุงเทพมหานคร</option>
                                                            <option  value="02">กระบี่</option>
                                                            <option  value="03">กาญจนบุรี</option>
                                                            <option  value="04">กาฬสินธุ์</option>
                                                            <option  value="05">กำแพงเพชร</option>
                                                            <option  value="06">ขอนแก่น</option>
                                                            <option  value="07">จันทบุรี</option>
                                                            <option  value="08">ฉะเชิงเทรา</option>
                                                            <option  value="09">ชลบุรี</option>
                                                            <option  value="10">ชัยนาท</option>
                                                            <option  value="11">ชัยภูมิ</option>
                                                            <option  value="12">ชุมพร</option>
                                                            <option  value="13">เชียงราย</option>
                                                            <option  value="14">เชียงใหม่</option>
                                                            <option  value="15">ตรัง</option>
                                                            <option  value="16">ตราด</option>
                                                            <option  value="17">ตาก</option>
                                                            <option  value="18">นครนายก</option>
                                                            <option  value="19">นครปฐม</option>
                                                            <option  value="20">นครพนม</option>
                                                            <option  value="21">นครราชสีมา</option>
                                                            <option  value="22">นครศรีธรรมราช</option>
                                                            <option  value="23">นครสวรรค์</option>
                                                            <option  value="24">นนทบุรี</option>
                                                            <option  value="25">นราธิวาส</option>
                                                            <option  value="26">น่าน</option>
                                                            <option  value="77">บึงกาฬ</option>
                                                            <option  value="27">บุรีรัมย์</option>
                                                            <option  value="28">ปทุมธานี</option>
                                                            <option  value="29">ประจวบคีรีขันธ์</option>
                                                            <option  value="30">ปราจีนบุรี</option>
                                                            <option  value="31">ปัตตานี</option>
                                                            <option  value="32">พระนครศรีอยุธยา</option>
                                                            <option  value="33">พะเยา</option>
                                                            <option  value="34">พังงา</option>
                                                            <option  value="35">พัทลุง</option>
                                                            <option  value="36">พิจิตร</option>
                                                            <option  value="37">พิษณุโลก</option>
                                                            <option  value="38">เพชรบุรี</option>
                                                            <option  value="39">เพชรบูรณ์</option>
                                                            <option  value="40">แพร่</option>
                                                            <option  value="41">ภูเก็ต</option>
                                                            <option  value="42">มหาสารคาม</option>
                                                            <option  value="43">มุกดาหาร</option>
                                                            <option  value="44">แม่ฮ่องสอน</option>
                                                            <option  value="45">ยโสธร</option>
                                                            <option  value="46">ยะลา</option>
                                                            <option  value="47">ร้อยเอ็ด</option>
                                                            <option  value="48">ระนอง</option>
                                                            <option  value="49">ระยอง</option>
                                                            <option  value="50">ราชบุรี</option>
                                                            <option  value="51">ลพบุรี</option>
                                                            <option  value="52">ลำปาง</option>
                                                            <option  value="53">ลำพูน</option>
                                                            <option  value="54">เลย</option>
                                                            <option  value="55">ศรีสะเกษ</option>
                                                            <option  value="56">สกลนคร</option>
                                                            <option  value="57">สงขลา</option>
                                                            <option  value="58">สตูล</option>
                                                            <option  value="59">สมุทรปราการ</option>
                                                            <option  value="60">สมุทรสงคราม</option>
                                                            <option  value="61">สมุทรสาคร</option>
                                                            <option  value="62">สระแก้ว</option>
                                                            <option  value="63">สระบุรี</option>
                                                            <option  value="64">สิงห์บุรี</option>
                                                            <option  value="65">สุโขทัย</option>
                                                            <option  value="66">สุพรรณบุรี</option>
                                                            <option  value="67">สุราษฎร์ธานี</option>
                                                            <option  value="68">สุรินทร์</option>
                                                            <option  value="69">หนองคาย</option>
                                                            <option  value="70">หนองบัวลำภู</option>
                                                            <option  value="71">อ่างทอง</option>
                                                            <option  value="72">อำนาจเจริญ</option>
                                                            <option  value="73">อุดรธานี</option>
                                                            <option  value="74">อุตรดิตถ์</option>
                                                            <option  value="75">อุทัยธานี</option>
                                                            <option  value="76">อุบลราชธานี</option>
                                                                </select>
        &nbsp;&nbsp;
    </td>
</tr>
<tr id="trAmphoe" style="font-size:13px;display:table-row;">
    <td height="32" width=150  align=left valign=middle>
        <span class="head1 black">เขต/อำเภอ</span>
    </td>
    <td height="32" align=left valign=middle>
        <select id="Amphoe" name="Amphoe" onchange="refreshTambon(this.value);"  style="font-size:13px;width:200px;">
            <option value="XXXX">โปรดระบุ</option>
                        <option  value="6801">เมืองสุรินทร์</option>
                        <option  value="6802">กาบเชิง</option>
                        <option  value="6803">จอมพระ</option>
                        <option  value="6804">ชุมพลบุรี</option>
                        <option  value="6805">ท่าตูม</option>
                        <option  value="6806">บัวเชด</option>
                        <option  value="6807">ปราสาท</option>
                        <option  value="6808">รัตนบุรี</option>
                        <option  value="6809">ลำดวน</option>
                        <option  value="6810">ศีขรภูมิ</option>
                        <option  value="6811">สนม</option>
                        <option  value="6812">สังขะ</option>
                        <option  value="6813">สำโรงทาบ</option>
                        <option  value="6814">เขวาสินรินทร์</option>
                        <option  value="6815">โนนนารายณ์</option>
                        <option  value="6816">พนมดงรัก</option>
                        <option  value="6817">ศรีณรงค์</option>
                    </select>
        &nbsp;&nbsp;
    </td>
</tr>
<tr id="trTambon" style="font-size:13px;display:table-row;">
    <td height="32" width=150  align=left valign=middle>
        <span class="head1 black">แขวง/ตำบล</span>
    </td>
    <td height="32" align=left valign=middle>
        <select id="Tambon" name="Tambon"  style="font-size:13px;width:200px;">
            <option value="XXXXXX">โปรดระบุ</option>
                        <option  value="681001">กุดหวาย</option>
                        <option  value="681002">ขวาวใหญ่</option>
                        <option  value="681003">คาละแมะ</option>
                        <option  value="681004">จารพัต</option>
                        <option  value="681005">ช่างปี่</option>
                        <option  value="681006">ตรมไพร</option>
                        <option  value="681007">ตรึม</option>
                        <option  value="681008">แตล</option>
                        <option  value="681009">นารุ่ง</option>
                        <option  value="681010">ผักไหม</option>
                        <option  value="681011">ยาง</option>
                        <option  value="681012">ระแงง</option>
                        <option  value="681013">หนองขวาว</option>
                        <option  value="681014">หนองบัว</option>
                        <option  value="681015">หนองเหล็ก</option>
                    </select>
        &nbsp;&nbsp;
    </td>
</tr>
<tr id="trCountry" style="font-size:13px;display:none;">
    <td height="32" width=150  align=left valign=middle>
        <span class="head1 black">ประเทศ</span>
    </td>
    <td height="32" align=left  valign=middle>
        <select id="country" name="country" class="fixedSelect" style="font-size:13px;width:200px;">
            <option value="">โปรดระบุ</option>
                        <option  value="AF">Afghanistan</option>                        <option  value="AL">Albania</option>                        <option  value="AG">Algeria</option>                        <option  value="AN">Andorra</option>                        <option  value="AO">Angola</option>                        <option  value="AC">Antigua and Barbuda</option>                        <option  value="AR">Argentina</option>                        <option  value="AM">Armenia</option>                        <option  value="AS">Australia</option>                        <option  value="AU">Austria</option>                        <option  value="AJ">Azerbaijan</option>                        <option  value="BF">Bahamas, The</option>                        <option  value="BA">Bahrain</option>                        <option  value="BG">Bangladesh</option>                        <option  value="BB">Barbados</option>                        <option  value="BO">Belarus</option>                        <option  value="BE">Belgium</option>                        <option  value="BH">Belize</option>                        <option  value="BN">Benin</option>                        <option  value="BT">Bhutan</option>                        <option  value="BL">Bolivia</option>                        <option  value="BK">Bosnia and Herzegovina</option>                        <option  value="BC">Botswana</option>                        <option  value="BR">Brazil</option>                        <option  value="BX">Brunei</option>                        <option  value="BU">Bulgaria</option>                        <option  value="UV">Burkina Faso</option>                        <option  value="BM">Burma</option>                        <option  value="BY">Burundi</option>                        <option  value="CB">Cambodia</option>                        <option  value="CM">Cameroon</option>                        <option  value="CA">Canada</option>                        <option  value="CV">Cape Verde</option>                        <option  value="CT">Central African Republic</option>                        <option  value="CD">Chad</option>                        <option  value="CI">Chile</option>                        <option  value="CH">China</option>                        <option  value="CO">Colombia</option>                        <option  value="CN">Comoros</option>                        <option  value="CF">Congo (Brazzaville)</option>                        <option  value="CG">Congo (Kinshasa)</option>                        <option  value="CS">Costa Rica</option>                        <option  value="IV">Cote d'Ivoire</option>                        <option  value="HR">Croatia</option>                        <option  value="CU">Cuba</option>                        <option  value="CY">Cyprus</option>                        <option  value="EZ">Czech Republic</option>                        <option  value="DA">Denmark</option>                        <option  value="DJ">Djibouti</option>                        <option  value="DO">Dominica</option>                        <option  value="DR">Dominican Republic</option>                        <option  value="EC">Ecuador</option>                        <option  value="EG">Egypt</option>                        <option  value="ES">El Salvador</option>                        <option  value="EK">Equatorial Guinea</option>                        <option  value="ER">Eritrea</option>                        <option  value="EN">Estonia</option>                        <option  value="ET">Ethiopia</option>                        <option  value="FJ">Fiji</option>                        <option  value="FI">Finland</option>                        <option  value="FR">France</option>                        <option  value="GB">Gabon</option>                        <option  value="GA">Gambia, The</option>                        <option  value="GG">Georgia</option>                        <option  value="GM">Germany</option>                        <option  value="GH">Ghana</option>                        <option  value="GR">Greece</option>                        <option  value="GJ">Grenada</option>                        <option  value="GT">Guatemala</option>                        <option  value="GV">Guinea</option>                        <option  value="PU">Guinea-Bissau</option>                        <option  value="GY">Guyana</option>                        <option  value="HA">Haiti</option>                        <option  value="VT">Holy See</option>                        <option  value="HO">Honduras</option>                        <option  value="HU">Hungary</option>                        <option  value="IC">Iceland</option>                        <option  value="IN">India</option>                        <option  value="ID">Indonesia</option>                        <option  value="IR">Iran</option>                        <option  value="IZ">Iraq</option>                        <option  value="EI">Ireland</option>                        <option  value="IS">Israel</option>                        <option  value="IT">Italy</option>                        <option  value="JM">Jamaica</option>                        <option  value="JA">Japan</option>                        <option  value="JO">Jordan</option>                        <option  value="KZ">Kazakhstan</option>                        <option  value="KE">Kenya</option>                        <option  value="KR">Kiribati</option>                        <option  value="KN">Korea, North</option>                        <option  value="KS">Korea, South</option>                        <option  value="KV">Kosovo</option>                        <option  value="KU">Kuwait</option>                        <option  value="KG">Kyrgyzstan</option>                        <option  value="LA">Laos</option>                        <option  value="LG">Latvia</option>                        <option  value="LE">Lebanon</option>                        <option  value="LT">Lesotho</option>                        <option  value="LI">Liberia</option>                        <option  value="LY">Libya</option>                        <option  value="LS">Liechtenstein</option>                        <option  value="LH">Lithuania</option>                        <option  value="LU">Luxembourg</option>                        <option  value="MK">Macedonia</option>                        <option  value="MA">Madagascar</option>                        <option  value="MI">Malawi</option>                        <option  value="MY">Malaysia</option>                        <option  value="MV">Maldives</option>                        <option  value="ML">Mali</option>                        <option  value="MT">Malta</option>                        <option  value="RM">Marshall Islands</option>                        <option  value="MR">Mauritania</option>                        <option  value="MP">Mauritius</option>                        <option  value="MX">Mexico</option>                        <option  value="FM">Micronesia, Federated States of</option>                        <option  value="MD">Moldova</option>                        <option  value="MN">Monaco</option>                        <option  value="MG">Mongolia</option>                        <option  value="MJ">Montenegro</option>                        <option  value="MO">Morocco</option>                        <option  value="MZ">Mozambique</option>                        <option  value="WA">Namibia</option>                        <option  value="NR">Nauru</option>                        <option  value="NP">Nepal</option>                        <option  value="NL">Netherlands</option>                        <option  value="NZ">New Zealand</option>                        <option  value="NU">Nicaragua</option>                        <option  value="NG">Niger</option>                        <option  value="NI">Nigeria</option>                        <option  value="NO">Norway</option>                        <option  value="MU">Oman</option>                        <option  value="PK">Pakistan</option>                        <option  value="PS">Palau</option>                        <option  value="PM">Panama</option>                        <option  value="PP">Papua New Guinea</option>                        <option  value="PA">Paraguay</option>                        <option  value="PE">Peru</option>                        <option  value="RP">Philippines</option>                        <option  value="PL">Poland</option>                        <option  value="PO">Portugal</option>                        <option  value="QA">Qatar</option>                        <option  value="RO">Romania</option>                        <option  value="RS">Russia</option>                        <option  value="RW">Rwanda</option>                        <option  value="SC">Saint Kitts and Nevis</option>                        <option  value="ST">Saint Lucia</option>                        <option  value="VC">Saint Vincent and the Grenadines</option>                        <option  value="WS">Samoa</option>                        <option  value="SM">San Marino</option>                        <option  value="TP">Sao Tome and Principe</option>                        <option  value="SA">Saudi Arabia</option>                        <option  value="SG">Senegal</option>                        <option  value="RI">Serbia</option>                        <option  value="SE">Seychelles</option>                        <option  value="SL">Sierra Leone</option>                        <option  value="SN">Singapore</option>                        <option  value="LO">Slovakia</option>                        <option  value="SI">Slovenia</option>                        <option  value="BP">Solomon Islands</option>                        <option  value="SO">Somalia</option>                        <option  value="SF">South Africa</option>                        <option  value="OD">South Sudan</option>                        <option  value="SP">Spain</option>                        <option  value="CE">Sri Lanka</option>                        <option  value="SU">Sudan</option>                        <option  value="NS">Suriname</option>                        <option  value="WZ">Swaziland</option>                        <option  value="SW">Sweden</option>                        <option  value="SZ">Switzerland</option>                        <option  value="SY">Syria</option>                        <option  value="TW">Taiwan</option>                        <option  value="TI">Tajikistan</option>                        <option  value="TZ">Tanzania</option>                                                <option  value="TT">Timor-Leste</option>                        <option  value="TO">Togo</option>                        <option  value="TN">Tonga</option>                        <option  value="TD">Trinidad and Tobago</option>                        <option  value="TS">Tunisia</option>                        <option  value="TU">Turkey</option>                        <option  value="TX">Turkmenistan</option>                        <option  value="TV">Tuvalu</option>                        <option  value="UG">Uganda</option>                        <option  value="UP">Ukraine</option>                        <option  value="AE">United Arab Emirates</option>                        <option  value="UK">United Kingdom</option>                        <option  value="US">United States</option>                        <option  value="UY">Uruguay</option>                        <option  value="UZ">Uzbekistan</option>                        <option  value="NH">Vanuatu</option>                        <option  value="VE">Venezuela</option>                        <option  value="VM">Vietnam</option>                        <option  value="YM">Yemen</option>                        <option  value="ZA">Zambia</option>                        <option  value="ZI">Zimbabwe</option>                    </select>
        &nbsp;&nbsp;
    </td>
</tr>
<tr>
    <td height="32" width=150  align=left valign=middle>
        <span class="head1 black">รหัสไปรษณีย์</span>
     </td>
    <td height="32" align=left valign=middle>
	 <INPUT  TYPE=TEXT style="font-size:13px;width:200px;" NAME="PostalCode" id="PostalCode" value="32110" onblur="checkValue(this.id,this.value);" maxLength=5>
        &nbsp;&nbsp;
     </td>
</tr>
</table>
<table bgcolor=White border=0 width=100% cellspacing=2 cellpadding=2>
<tr>
    <td height="32" width=150  align=left valign=middle>
        <span class="head1 black">โทรศัพท์บ้าน</span>
    </td>
    <td height="32" align=left valign=middle>
	  <INPUT  TYPE=TEXT style="font-size:13px;width:200px;" NAME="Tel" id="Tel" maxLength=50 value="-" onblur="checkValue(this.id,this.value);">
    </td>
</tr>
<tr>
    <td height="32" width=150  align=left valign=middle>
        <span class="head1 black">โทรศัพท์มือถือ</span>
    </td>
    <td height="32" align=left valign=middle>
	   <INPUT  TYPE=TEXT style="font-size:13px;width:200px;" NAME="Mobile" id="Mobile" maxLength=50 value="081-320-9321" onblur="checkValue(this.id,this.value);">
    </td>
</tr> 
    
</table>
    <div class="form-actions">
      <?php echo form_hidden('bt-register','1');?>  
      <button type="submit" class="btn btn-primary "><i class="icon-save icon-large"></i> <?=label("save");?></button>
      <button type="reset" class="btn btn-danger"><i class="icon-remove icon-large"></i> <?=label("cancel");?></button>
    </div>
 
</form>
 