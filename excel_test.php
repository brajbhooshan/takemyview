<?php
session_start();
if(!($_SESSION['username']))
{
header('Location: index.php');
}
include_once("config.php");

	//for admin
	if($_SESSION['is_admin']==1)
	{
	//$sql="select * from account";
			
		$setCounter = 0;
		 
		$setExcelName = "AccountList";
		 
		$setSql = "select * from account";
		 
		$setRec = mysql_query($setSql);
		 
		$setCounter = mysql_num_fields($setRec);
		 
		for ($i = 0; $i < $setCounter; $i++) {
			$setMainHeader .= mysql_field_name($setRec, $i)."t";
		}
		 
		while($rec = mysql_fetch_row($setRec))  {
		  $rowLine = '';
		  foreach($rec as $value)       {
			if(!isset($value) || $value == "")  {
			  $value = "t";
			}   else  {
		//It escape all the special charactor, quotes from the data.
			  $value = strip_tags(str_replace('"', '""', $value));
			  $value = '"' . $value . '"' . "t";
			}
			$rowLine .= $value;
		  }
		  $setData .= trim($rowLine)."n";
		}
		  $setData = str_replace("r", "", $setData);
		 
		if ($setData == "") {
		  $setData = "nno matching records foundn";
		}
		 
		$setCounter = mysql_num_fields($setRec);
		 
		 
		 
		//This Header is used to make data download instead of display the data
		 header("Content-type: application/octet-stream");
		 
		header("Content-Disposition: attachment; filename=".$setExcelName."_Reoprt.xls");
		 
		header("Pragma: no-cache");
		header("Expires: 0");
		 
		//It will print all the Table row as Excel file row with selected column name as header.
		echo ucwords($setMainHeader)."n".$setData."n";
	}
	//for user
	else{
	//$sql="select * from account where user_id='".$_SESSION['user_id']."' ";
			
		$setCounter = 0;
		 
		$setExcelName = "AccountList";
		 
		$setSql = "select * from account where user_id='".$_SESSION['user_id']."' ";
		 
		$setRec = mysql_query($setSql);
		 
		$setCounter = mysql_num_fields($setRec);
		 
		for ($i = 0; $i < $setCounter; $i++) {
			$setMainHeader .= mysql_field_name($setRec, $i)."t";
		}
		 
		while($rec = mysql_fetch_row($setRec))  {
		  $rowLine = '';
		  foreach($rec as $value)       {
			if(!isset($value) || $value == "")  {
			  $value = "t";
			}   else  {
		//It escape all the special charactor, quotes from the data.
			  $value = strip_tags(str_replace('"', '""', $value));
			  $value = '"' . $value . '"' . "t";
			}
			$rowLine .= $value;
		  }
		  $setData .= trim($rowLine)."n";
		}
		  $setData = str_replace("r", "", $setData);
		 
		if ($setData == "") {
		  $setData = "nno matching records foundn";
		}
		 
		$setCounter = mysql_num_fields($setRec);
		 
		 
		 
		//This Header is used to make data download instead of display the data
		 header("Content-type: application/octet-stream");
		 
		header("Content-Disposition: attachment; filename=".$setExcelName."_Reoprt.xls");
		 
		header("Pragma: no-cache");
		header("Expires: 0");
		 
		//It will print all the Table row as Excel file row with selected column name as header.
		echo ucwords($setMainHeader)."n".$setData."n";
	}
?>