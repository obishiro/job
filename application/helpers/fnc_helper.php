<?php
function label($label) {
    $ci=&get_instance();
    $re=$ci->lang->line($label);
    if($re) { 
        return $re;    
    }else{  
        return $label;
        
    }
}
?>
