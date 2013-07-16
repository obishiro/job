<div style="margin-left: 100px;">
<div id='preview' class="thumbnails">
       <?php     $num_pic=  $this->db->where('usr_id',$UsrId)
               ->count_all_results("tb_userpic");
               if($num_pic >0) {
                    $sql_pic=  $this->db->where('usr_id',$UsrId)->get("tb_userpic")->result_array();
                    foreach($sql_pic as $rs_pic){
                  echo "<img src='images/img_user/".$rs_pic['pic_name']."'  class='preview img-polaroid' style='width:200px;height:240px'>";
             }
               }
               ?>
</div>

    <form id="imageform" method="post" enctype="multipart/form-data" action='<?=base_url();?>user/pic/add/<?=$UsrId;?>'>
       
Upload your image <input type="file" name="photoimg" id="photoimg" />
</form>
</div>