<div id="sidebar">
<?php 
echo "<ul  >";
foreach ($data_right as $val){
echo "<li>";
echo "<a href=\"".  base_url()."view/ads/".$val['cus_id']."\" target=\"_blank\"\">";
$img_pro=array(
        'src'=>base_url().'images/img_ads/'.$val['ads_img'],
        'class'=>'img-polaroid',
        'width'=>'95%'
        );
echo img($img_pro);
echo "</a>";
echo "</li>";
   }
echo "</ul>";
?>
</div>
 
