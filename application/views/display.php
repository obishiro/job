<?php
  
$display_success="<div class=\"alert alert-success\">";
$display_success.="<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>";
$display_success.="<h4>Success</h4>".$massages."";
$display_success.=" </div>";

$display_error="<div class=\"alert alert-error\">";
$display_error.="<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>";
$display_error.="<h4>Success</h4>".$massages."";
$display_error.=" </div>";
            
        switch ($process):
            case '1':
                echo $display_success;
                echo "<meta Http-equiv=\"refresh\"  Content=\"2; Url=".base_url()."$goto\">";
                break;
            case '0':
               echo $display_error;
                echo "<meta Http-equiv=\"refresh\"  Content=\"2; Url=".base_url()."$goto\">";
                break;
        endswitch;
            
            
?>
