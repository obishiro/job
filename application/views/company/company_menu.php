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
 
<div class="tab-pane" id="tabs1-pane2">
 <?php
 
 ?>

</div>
<div class="tab-pane" id="tabs1-pane3">
  <?php
 
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
						 



