<div class="tabbable " style="margin: 10px;">
<ul class="nav nav-tabs">
<li class="active"><a href="#tabs1-pane1" data-toggle="tab" class="btn btn-warning"><i class="icon-pencil icon-large"></i> <?=label("edit_resume");?></a></li>
<li><a href="#tabs1-pane2" data-toggle="tab" class="btn btn-primary"><i class="icon-star icon-large"></i> <?=label("job_register");?></a></li>
<li><a href="#tabs1-pane3" data-toggle="tab" class="btn btn-info"><i class="icon-heart icon-large"></i> <?=label("job_interest");?></a></li>
<li><a href="#tabs1-pane4" data-toggle="tab" class="btn btn-success"><i class="icon-flag icon-large"></i> <?=label("company_interest");?></a></li>
<li><a href="#tabs1-pane5" data-toggle="tab" class="btn btn-inverse"><i class="icon-refresh icon-large"></i> <?=label("change_pwd");?></a></li>
<li><a href="<?=base_url();?>user/logout"  class="btn btn-danger"><i class="icon-off icon-large"></i> <?=label("logout");?></a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="tabs1-pane1">
<div class="tab-pane" id="tabs-side">
 
<div class="tabbable tabs-left" style="margin-left: -30px;">
 <ul class="nav nav-tabs span2">
  <li class="active"><a href="#tabs2-pane1" data-toggle="tab" ><i class="icon-male icon-large"></i> <?=label("data_personal");?></a></li>
 <li><a href="#tabs2-pane2" data-toggle="tab"><i class="icon-folder-open icon-large"></i> <?=label("data_work");?></a></li>
 <li><a href="#tabs2-pane3" data-toggle="tab"><i class="icon-book icon-large"></i> <?=label("data_edu");?></a></li>
   <li><a href="#tabs2-pane4" data-toggle="tab"><i class="icon-briefcase icon-large"></i> <?=label("data_work_history");?></a></li>
 <li><a href="#tabs2-pane5" data-toggle="tab"><i class="icon-briefcase icon-large"></i> <?=label("data_training");?></a></li>
 <li><a href="#tabs2-pane6" data-toggle="tab"><i class="icon-thumbs-up icon-large"></i> <?=label("data_result");?></a></li>
  <li><a href="#tabs2-pane7" data-toggle="tab"><i class="icon-camera-retro icon-large"></i> <?=label("data_pic");?></a></li>
  </ul>
  <div class="tab-content span8">
 <div id="tabs2-pane1"   class="tab-pane active">
 <?php $this->load->view("user/frm_resume"); ?>
 									
 </div>
 <div id="tabs2-pane2" class="tab-pane">
 <?php 
     $num=$this->db->where('usr_id',$UsrId)
             ->count_all_results('tb_wrk_interest');
     if($num>0){
      $this->load->view("user/frm_work_interest_edit");   
     }else{
      $this->load->view("user/frm_work_interest_add");
     }
       
 ?>
  </div>
 <div id="tabs2-pane3" class="tab-pane ">
<?php
//$this->load->view("user/frm_education"); 
$num=$this->db->where('usr_id',$UsrId)
             ->count_all_results('tb_education');
     if($num>0){
      $this->load->view("user/frm_education_edit");   
     }else{
      $this->load->view("user/frm_education");
     }

?>
   </div>
 <div id="tabs2-pane4" class="tab-pane ">
   <?php  $num=$this->db->where('usr_id',$UsrId)
             ->count_all_results('tb_education');
     if($num>0){
     $this->load->view("user/frm_work_history_edit"); 
     }else{
      $this->load->view("user/frm_work_history"); 
     }
     ?>
 
   </div>
<div id="tabs2-pane5" class="tab-pane">
       <?php  $num=$this->db->where('usr_id',$UsrId)
             ->count_all_results('tb_training');
     if($num>0){
     $this->load->view("user/frm_training_edit");
     }else{
    $this->load->view("user/frm_training");
     }
     ?>

   </div>
       <div id="tabs2-pane6" class="tab-pane">
        <?php  $num=$this->db->where('usr_id',$UsrId)
             ->count_all_results('tb_result');
     if($num>0){
     $this->load->view("user/frm_result_edit");
     }else{
   $this->load->view("user/frm_result");
     }
     ?>
 
   </div>
       <div id="tabs2-pane7" class="tab-pane">
<?php $this->load->view("user/frm_pic"); ?>
   </div>
  </div><!-- /.tab-content -->
</div><!-- /.tabbable -->
 </div>	
</div>
<div class="tab-pane" id="tabs1-pane2">
 <?php
 $this->load->view("user/data_userregister");
 ?>

</div>
<div class="tab-pane" id="tabs1-pane3">
  <?php
    $this->load->view("user/data_userinterest");
    ?>
</div>
<div class="tab-pane" id="tabs1-pane4">
<h4>Pane 4 Content</h4>
<p>Donec semper vestibulum dapibus. Integer et sollicitudin metus. Vivamus at nisi turpis. Phasellus vel tellus id felis cursus hendrerit. Suspendisse et arcu felis, ac gravida turpis. Suspendisse potenti. Ut porta rhoncus ligula, sed fringilla felis feugiat eget. In non purus quis elit iaculis tincidunt. Donec at ultrices est.</p>
</div>
    <div class="tab-pane" id="tabs1-pane5">
<h4>Change password</h4>
<?php
$this->load->view("user/changepassword");
?>
 </div>
</div><!-- /.tab-content -->
</div><!-- /.tabbable -->
						 



