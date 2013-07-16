<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"> 
<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
<title><?=$title;?></title>
<meta name="description" content="">
<meta name="keywords" content="">
<?php
echo link_tag("assets/css/bootstrap.css");
echo link_tag("assets/css/reset.css");
echo link_tag("assets/css/jquery_notification.css"); 
echo link_tag("assets/css/bootstrap-responsive.css");
echo link_tag("assets/css/validationEngine.jquery.css");
 
echo link_tag("assets/css/font-awesome.min.css");
 echo link_tag("assets/css/dataTables.bootstrap.css");
 
?>
  
<script src="<?php echo base_url();?>assets/js/jquery.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap-transition.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap-alert.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap-modal.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap-dropdown.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap-scrollspy.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap-tab.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap-tooltip.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap-popover.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap-button.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap-collapse.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap-carousel.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap-typeahead.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.dataTables.js"></script> 
 <script   src="<?php echo base_url();?>assets/js/jquery_notification.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap-datepicker.js"></script>
 <script src="<?php echo base_url();?>assets/js/jquery.validationEngine.js"></script>
  <script src="<?php echo base_url();?>assets/js/dataTables.bootstrap.js"></script>
   <script src="<?php echo base_url();?>assets/js/lib.js"></script>
 
 <script>
 var base_url="<?=base_url();?>";
 </script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.form.js"></script>

<script type="text/javascript" >
 $(document).ready(function() { 
		
            $('#photoimg').live('change', function()			{ 
			           $("#preview").html('');
			    $("#preview").html('<img src='+base_url+'"images/loader.gif" alt="Uploading...."/>');
			$("#imageform").ajaxForm({
			target: '#preview'
		}).submit();
		
			});
                        
        $('#TableData,#TableData_interest').dataTable( {
 
        });
        }); 
</script>
</head>
 <body>
     <div id="top-header">
        
     </div>
    <div class="navbar navbar-static-top ">
   <div class="navbar-inner">
     <div class="container">
       <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </a>
       <a class="brand" href="<?=base_url();?>">Bootswatch</a>
       <div class="nav-collapse collapse" id="main-menu">
        <ul class="nav" id="main-menu-left">
            <li><a href="#"><?=label("home");?></a></li>
        
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?=label("job_seeker");?> <b class="caret"></b></a>
            <ul class="dropdown-menu" id="swatch-menu">
              <li><a href="../default/">Default</a></li>
              <li class="divider"></li>
              <li><a href="../amelia/">Amelia</a></li>
              <li><a href="../cerulean/">Cerulean</a></li>
              <li><a href="../cosmo/">Cosmo</a></li>
              <li><a href="../cyborg/">Cyborg</a></li>
              <li><a href="../flatly/">Flatly</a></li>
              <li><a href="../journal/">Journal</a></li>
              <li><a href="../readable/">Readable</a></li>
              <li><a href="../simplex/">Simplex</a></li>
              <li><a href="../slate/">Slate</a></li>
              <li><a href="../spacelab/">Spacelab</a></li>
              <li><a href="../spruce/">Spruce</a></li>
              <li><a href="../superhero/">Superhero</a></li>
              <li><a href="../united/">United</a></li>
            </ul>
          </li>
          <li class="dropdown" id="preview-menu">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Download <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a target="_blank" href="bootstrap.min.css">bootstrap.min.css</a></li>
              <li><a target="_blank" href="bootstrap.css">bootstrap.css</a></li>
              <li class="divider"></li>
              <li><a target="_blank" href="variables.less">variables.less</a></li>
              <li><a target="_blank" href="bootswatch.less">bootswatch.less</a></li>
            </ul>
          </li>
        </ul>
        <ul class="nav pull-right" id="main-menu-right">
            <li class="dropdown">
                <a  href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user icon-large"></i> <?=label("user_login");?> <b class="caret"></b></a>
               <div class="dropdown-menu" style="text-align: left;padding: 15px; padding-bottom: 0px;">
                   <form class="formula" action="<?=base_url();?>user/login" method="POST">
                  <p><i class="icon-user"></i> <?=label("username");?></p>
                  <input type="text" name="username" class="validate[required]">
                  <p><i class="icon-asterisk"></i> <?=label("password");?></p>
                  <input type="password" name="password"  class="validate[required]">
                  <span></span>
                  <button type="submit" class="btn btn-primary" /><i class="icon-ok"></i> <?=label("login");?></button>&nbsp;
                  <button type="reset" class="btn btn-danger" /><i class="icon-off"></i> <?=label("cancel");?></button>
                    <p><a href="<?=base_url();?>user/register" class="btn btn-link"><i class="icon-plus-sign-alt"></i> <?=label("register");?></a></p>
                   <input type="hidden" name="bt-login" value="1"/>
                </form>
                </div>
              </li>
              <li class="dropdown">
                <a  href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-group icon-large"></i> <?=label("company_login");?><b class="caret"></b></a>
               <div class="dropdown-menu" style="text-align: left;padding: 15px; padding-bottom: 0px;">
                <form class="formula" action="<?=base_url();?>company/login" method="POST">
                  <p><i class="icon-user"></i> <?=label("username");?></p>
                  <input type="text" name="username" class="validate[required] input">
                  <p><i class="icon-asterisk"></i> <?=label("password");?></p>
                  <input type="password" name="password"  class="validate[required] input">
                  <span></span>
                 <button type="submit" class="btn btn-primary" /><i class="icon-ok"></i> <?=label("login");?></button>&nbsp;
                  <button type="reset" class="btn btn-danger" /><i class="icon-off"></i> <?=label("cancel");?></button>
                <p><a href="<?=base_url();?>company/register" class="btn btn-link"><i class="icon-plus-sign-alt"></i> <?=label("register");?></a></p>
                 <input type="hidden" name="bt-login" value="1"/>
                 </form>
                </div>
              </li>
        </ul>
       </div>
     </div>
   </div>
 </div>

    <div class="container">