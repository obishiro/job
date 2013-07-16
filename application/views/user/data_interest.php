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
$sql_usr_interest=$this->db
        ->join($tb2,'tb_user_jobregister.job_id','tb_job.Id','INNER')
        ->where("usr_id",$UsrId)
        ->order_by('tb_user_jobregister.Id','DESC')
        ->get($tb)->result_array();
$i_data_interest=1;
foreach($sql_usr_interest as $rs_usr_interest =>$val) {
   echo "<tr>";
   echo "<td style=\"width:5%;text-align:center\">".$i_data_interest."</td>";
     echo "<td   style=\"width:30%\">company</td>";
     echo "<td  style=\"width:30%\">".$val['job_name']."</td>";
    echo "<td>".$val['j_date']."</td>";
           echo "<td>";
           echo "<button class=\"btn btn-info\"><i class=\"icon-eye-open icon-large\"></i> ";
           echo "Delete";
           echo "</button>";  
           echo nbs(2);
           echo "<button class=\"btn btn-danger\"><i class=\"icon-remove-sign icon-large\"></i> ";
           echo "Delete";
           echo "</button>";
        

           echo "</td>";
           $i_data_interest++;
}
?>
 </tbody>
</table> 
 


	 