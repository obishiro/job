<style>
    #TableData_interest thead th {
        background-color:  #00A6C7;
        color: #ffffff;
        font-weight: bold;
        text-align: center;
    }
</style>
<div class="alert alert-info">
 
<i class="icon icon-heart icon-2x"></i> Interest
 
</div>
<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered  table-hover" id="TableData_interest">
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
$tb="tb_user_jobinterest";
$tb2="tb_job";
$sql_usr_interest=$this->db
        ->join($tb2,'tb_user_jobinterest.job_id','tb_job.Id','INNER')
        ->where("usr_id",$UsrId)
        ->order_by('tb_user_jobinterest.Id','DESC')
        ->get($tb)->result_array();
$i_data_interest=1;
foreach($sql_usr_interest as $rs_usr_interest =>$val) {
   echo "<tr>";
   echo "<td style=\"width:5%;text-align:center\">".$i_data_interest."</td>";
     echo "<td   style=\"width:30%\">company</td>";
     echo "<td  style=\"width:30%\">".$val['job_name']."</td>";
    echo "<td>".$val['j_date']."</td>";
           echo "<td>";
           echo "<button class=\"btn btn-info\"><a href=\"\"><i class=\"icon-eye-open icon-large\"></i> ";
           echo "Delete</a>";
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
 


	 