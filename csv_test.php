<?php
include_once("config.php");
session_start();
if(!($_SESSION['username']))
{
header('Location: index.php');
}

	//for admin
	if($_SESSION['is_admin']==1)
	{
		$output = "";
		$sql = mysql_query("select * from account");
		$columns_total = mysql_num_fields($sql);
		
		// Get The Field Name
		
		for ($i = 0; $i < $columns_total; $i++) {
		$heading = mysql_field_name($sql, $i);
		$output .= '"'.$heading.'",';
		}
		$output .="\n";
		
		// Get Records from the table
		
		while ($row = mysql_fetch_array($sql)) {
		for ($i = 0; $i < $columns_total; $i++) {
		$output .='"'.$row["$i"].'",';
		}
		$output .="\n";
		}
		
		// Download the file
		
		$filename = "AccountList.csv";
		header('Content-type: application/csv');
		header('Content-Disposition: attachment; filename='.$filename);
		
		echo $output;
		exit;
	}
	//for user
	else{
	//$sql="select * from account where user_id='".$_SESSION['user_id']."' ";
	// Fetch Record from Database
		$output = "";
		$table = "account"; // Enter Your Table Name 
		$sql = mysql_query("select * from $table where user_id='".$_SESSION['user_id']."' ");
		$columns_total = mysql_num_fields($sql);
		
		// Get The Field Name
		
		for ($i = 0; $i < $columns_total; $i++) {
		$heading = mysql_field_name($sql, $i);
		$output .= '"'.$heading.'",';
		}
		$output .="\n";
		
		// Get Records from the table
		
		while ($row = mysql_fetch_array($sql)) {
		for ($i = 0; $i < $columns_total; $i++) {
		$output .='"'.$row["$i"].'",';
		}
		$output .="\n";
		}
		
		// Download the file
		
		$filename = "AccountList.csv";
		header('Content-type: application/csv');
		header('Content-Disposition: attachment; filename='.$filename);
		
		echo $output;
		exit;
	}
?>