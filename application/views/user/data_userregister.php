<style>
    #TableData thead th {
        background-color:  #00A6C7;
        color: #ffffff;
        font-weight: bold;
        text-align: center;
    }
      #TableData a {
        color:#fff;
    }
</style>
<div class="alert alert-info">
 
<i class="icon icon-star icon-2x"></i> Register
 
</div>
<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered  table-hover" id="TableData">
	<thead>
		<tr>
			<th>No</th>
                                                    <th>Company</th>
			<th >Job Name</th>
			
			<th>Date</th>
			<th>Action</th>
		</tr>
	</thead>
<tbody>
	 
<?php
$tb="tb_user_jobregister";
$tb2="tb_job";
$sql_usr_register=$this->db
        ->join($tb2,'tb_user_jobregister.job_id','tb_job.Id','INNER')
        ->where("usr_id",$UsrId)
        ->order_by('tb_user_jobregister.Id','DESC')
        ->get($tb)->result_array();
$i_data_interest=1;
foreach($sql_usr_register as $rs_usr_register=>$val) {
   echo "<tr>";
   echo "<td style=\"width:5%;text-align:center\">".$i_data_interest."</td>";
     echo "<td   style=\"width:30%\">company</td>";
     echo "<td  style=\"width:30%\">".$val['job_name']."</td>";
        echo "<td>".$val['j_date']."</td>";
           echo "<td>";
           echo "<a href=\"".  base_url()."user/view/".$val['job_id']."\"  class=\"btn btn-info\"><i class=\"icon-search icon-large\"></i> ";
           echo "View</a>";
           
           echo nbs(2);
           echo "<a class=\"btn btn-danger\"><i class=\"icon-remove-sign icon-large\"></i> ";
           echo "Delete";
           echo "</a>";
           echo "</td>";
           $i_data_interest++;
}
?>
 </tbody>
</table> 
 


	 