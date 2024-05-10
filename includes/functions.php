<?php

function getData($con, $column, $table, $id){
	$get = $con->query("SELECT $column FROM $table WHERE personal_id = '$id'");
	//echo "SELECT $column FROM $table WHERE personal_id = '$id'";
	$fetch = $get->fetch_array();
	return $fetch[$column];
	
}

function getInfo($con, $column, $table, $id, $value_id){
	$get = $con->query("SELECT $column FROM $table WHERE $id = '$value_id'");
	$fetch = $get->fetch_array();
	return $fetch[$column];
}

function getSupID($con,$name){
	$get = $con->query("SELECT personal_id FROM personal_data WHERE CONCAT(fname, ' ', mname, ' ', lname, ' ', name_ext) = '$name'");
	
	$fetch = $get->fetch_array();
	$supid=$fetch['personal_id'];
	return $supid;
}

function getSupName($con, $supid){
	$get = $con->query("SELECT CONCAT(fname, ' ', mname, ' ', lname, ' ', name_ext) AS fullname FROM personal_data WHERE personal_id = '$supid'");
	$fetch = $get->fetch_array();
	return $fetch['fullname'];
}

function getGenderCount($con,$dept,$column, $gender){
	$get = $con->query("SELECT personal_id FROM personal_data WHERE sex='$gender' AND $column = '$dept'");
	$rows=$get->num_rows;
	return $rows;
}

function filteredSQL($con, $post){
	foreach($post as $var=>$value)
		$$var = mysqli_real_escape_string($con,$value);

	$logid=array();
	$sql = "SELECT log_id FROM log_head WHERE ";
	/*if(!empty($others)){
	
	$param=$others;
	$searchHead=$con->query("SELECT log_id FROM log_head WHERE (notes LIKE '%$param%' OR performed_by LIKE '%$param%')");
	$rows_head = $searchHead->num_rows;
	if($rows_head != 0){
		while($fetchHead = $searchHead->fetch_array()){
			$logid[] = $fetchHead['log_id'];
		}
 	}

 	$searchUpdate=$con->query("SELECT log_id FROM update_logs WHERE notes LIKE '%$param%' OR performed_by LIKE '%$param%'");

	 	$rows_update = $searchUpdate->num_rows;
	 	if($rows_update != 0){
			while($fetchUpdate = $searchUpdate->fetch_array()){
				$logid[] = $fetchUpdate['log_id'];
			}
	 	}


	 }*/

	 if(!empty($date_from)){
	 	if(!empty($date_to)){
	 		$sql.=" date_performed BETWEEN '$date_from' AND '$date_to' AND";
			
	 	} else {
	 		$sql.=" date_performed BETWEEN '$date_from' AND '$date_from' AND";
	 	}

	 }

	 if(!empty($due_from)){
	 	if(!empty($due_to)){
	 		$sql.=" due_date BETWEEN '$due_from' AND '$due_to' AND";
			
	 	} else {
	 		$sql.=" due_date BETWEEN '$due_from' AND '$due_from' AND";
	 	}

	 }
	 
	 
	 if(!empty($unit_name)){
	 	$sql.=" unit = '$unit_name' AND";
	 }

	 if(!empty($system_name)){
	 	$sql.=" main_system =  '$system_name' AND";
		
	 }

	 if(!empty($subsys_name)){
	 		$sql.=" sub_system =  '$subsys_name' AND";
	 }

	 if(!empty($status)){
	 	$sql.=" status =  '$status' AND";
		
	 }

	 if(!empty($others)){
		$sql.=" (notes LIKE '%$others%' OR performed_by LIKE '%$others%') AND";

		
		$searchUpdate=$con->query("SELECT log_id FROM update_logs WHERE notes LIKE '%$others%' OR performed_by LIKE '%$others%'");

	 	$rows_update = $searchUpdate->num_rows;
	 	if($rows_update != 0){
			while($fetchUpdate = $searchUpdate->fetch_array()){
				$logid[] = $fetchUpdate['log_id'];
			}
	 	}
	 }

	$query=substr($sql,0,-3);

	//echo $query;

	$searchHead=$con->query($query);
	$rows_head = $searchHead->num_rows;
	if($rows_head != 0){
		while($fetchHead = $searchHead->fetch_array()){
			$logid[] = $fetchHead['log_id'];
		}
 	}
 //	print_r($logid);
 	return array_unique($logid);
}

function filtersApplied($con, $post){
	
	foreach($post as $var=>$value)
		$$var = mysqli_real_escape_string($con,$value);

	$filter='';

	 if(!empty($date_from)){
	 	if(!empty($date_to)){
			$filter.='Date: ' . $date_from . ' to '. $date_to . ', ';
		 } else {
	 		$filter.='Date: ' . $date_from. ', ';
	 	}
	 }
	 
	  if(!empty($due_from)){
	 	if(!empty($due_to)){
			$filter.='Due Date: ' . $due_from . ' to '. $due_to . ', ';
		 } else {
	 		$filter.='Due Date: ' . $due_from. ', ';
	 	}
	 }
	 
	 if(!empty($unit_name)){
	 	$filter.='Unit: ' . getInfo($con, 'unit_name', 'unit', 'unit_id' ,$unit_name). ', ';
	 }

	 if(!empty($system_name)){
	 	$filter.='Main System: ' . getInfo($con, 'system_name', 'main_system', 'main_id' ,$system_name). ', ';
	 }

	 if(!empty($subsys_name)){
	 		$filter.='Sub System: ' . getInfo($con, 'subsys_name', 'sub_system', 'sub_id' ,$subsys_name). ', ';
	 }

	 if(!empty($status)){

	 	$filter.='Status: ' . $status. ', ';
	 }

	 if(!empty($others)){
	 	$filter.='Other Information: ' . $others. ', ';
	 }

	 $fil = substr($filter, 0, -2);
	 return $fil;
}

function printURL($con, $post){
	foreach($post as $var=>$value)
		$$var = mysqli_real_escape_string($con,$value);

	$url='';

	 if(!empty($date_from)){
	 	if(!empty($date_to)){
			$url.='datefrom='.$date_from.'&dateto='.$date_to.'&';
		 } else {
	 		$url.='datefrom='.$date_from.'&';
	 	}
	 }

	  if(!empty($due_from)){
	 	if(!empty($due_to)){
			$url.='duefrom='.$due_from.'&dueto='.$due_to.'&';
		 } else {
	 		$url.='duefrom='.$due_from.'&';
	 	}
	 }
	 
	 
	 
	 if(!empty($unit_name)){
	 	$url.='unit='.$unit_name.'&';
	 }

	 if(!empty($system_name)){
	 	$url.='main_system='.$system_name.'&';
	 }

	 if(!empty($subsys_name)){
	 	$url.='sub_system='.$subsys_name.'&';
	 }

	 if(!empty($status)){
	 	$url.='status='.$status.'&';
	 }

	 if(!empty($others)){
	 	$url.='others=' . $others;
	 }

	 if(substr($url, 0, -1) == '&'){
	 	$url = substr($url, 0, -1);
	 } else {
	 	$url = $url;
	 }
	 return $url;

}

function dateDifference($date_1 , $date_2)
{
    $datetime2 = date_create($date_2);
	$datetime1 = date_create($date_1 );
	$interval = date_diff($datetime2, $datetime1);
   
    return $interval->format('%R%a');
   
}

function overdueTasks($con){
	$today = date('Y-m-d');
	$sql = $con->query("SELECT * FROM log_head WHERE status = 'On-Progress'");
	$count=0;
	while($row = mysqli_fetch_array($sql)){
    	$diff = dateDifference($row['due_date'],$today);
    	if($diff<0){
    		$count++;
    	}
    }
    return $count;

}
function tasksThisWeek($con){
	$today = date('Y-m-d');
	$sql = $con->query("SELECT * FROM log_head WHERE status = 'On-Progress'");
	$count=0;
	while($row = mysqli_fetch_array($sql)){
    	$diff = dateDifference($row['due_date'],$today);
    	if($diff>=0 && $diff <= 7){
    		$count++;
    	}
    }
    return $count;

}
?>