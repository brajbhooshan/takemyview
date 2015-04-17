<?php
include_once("config.php");
 ini_set('memory_limit', '1024M');
session_start();
if(!($_SESSION['username']))
{
header('Location: index.php');
}
//echo '<pre>';print_r($_SESSION);die;

	//for admin
	if($_SESSION['is_admin']==1)
	{
	$sql="select * from account";
	}
	//for user
	else{
	$sql="select * from account where user_id=".$_SESSION['user_id']."";
	}
mysql_select_db($db);
$output = fopen('php://output', 'w');
$file = 'export';
	//Csv headings name
	$csv_output="\"acc\",\"first\",\"last\",\"mobile\",\"alternate\",\"email\",\"totalcost\",\"raddress\",\"street\",\"country\",\"zip\",\"dob\",\"age\",\"usertype\",\"officename\",\"servicetype\",\"product\",\"avi\",\"addcost\",\"pccover\",\"pcname\",\"pcip\",\"pdate\",\"exdate\",\"accstatus\",\"issdesc\",\"remarks\",\"sex\",\"acc_no\",\"user_id\",\"deactivate\",\"refund_flag\"";
	//preg_replace('/\s+/', '_', $journalName);
	
		//selecting data from stock_level table based on paticular id
		$sqlquery=mysql_query("select * from account")or die(mysql_error());
		$row_stock_level=mysql_fetch_array($sqlquery);
		while($row_stock_level){
		//echo $row_stock_level['id'];echo "<br>";
		//echo $row_stock['barcode_no'];
		//echo "<pre>";print_r($description);die;
		$csv_output .="\n";
		$csv_output .= "\"".$row_stock_level['acc']."\",\"".$row_stock_level['first']."\",\"".$row_stock_level['last']."\",\"".$row_stock_level['mobile']."\",\"".$row_stock_level['alternate']."\",\"".$row_stock_level['email']."\",\"".$row_stock_level['totalcost']."\",\"".$row_stock_level['raddress']."\",\"".$row_bymodel['street']."\",\"".$row_bymodel1['country']."\",\"".$row_bymodel1['zip']."\",\"".$row_bymodel1['dob']."\",\"".$row_stock_level['age']."\",\"".$row_stock_level['usertype']."\",\"".$row_stock_level['officename']."\",\"".$row_stock_level['servicetype']."\",\"".$row_stock_level['product']."\",\"".$row_stock_level['avi']."\",\"".$row_stock_level['addcost']."\",\"".$row_stock_level['pccover']."\",\"".$row_stock_level['pcname']."\",\"".$row_stock_level['pcip']."\",\"".$row_stock_level['pdate']."\",\"".$row_stock_level['exdate']."\",\"".$row_stock_level['accstatus']."\",\"".$row_stock_level['issdesc']."\",\"".$row_stock_level['remarks']."\",\"".$row_stock_level['sex']."\",\"".$row_stock_level['acc_no']."\",\" \",\"".$row_stock_level['user_id']."\",\"".$row_stock_level['deactivate']."\",\" \",\"/".$row_stock_level['refund_flag']." \",\"";
		

		//$csv_output .= "\"".preg_replace('/\s+/','-',$handle)."\",\"".$title."\",\"".$html."\",\"".$row['make_name']."\",\"".$row['subcategory']."\",\"".$row['subcategory']."\",\"".$published."\",\" Title \",\" Default \",\" \",\" \",\" \",\" \",\"".$row['barcode_no']."\",\" \",\" \",\"".$inventory_qty."\",\" deny \",\" manual \",\"".$row['price']."\",\" \",\" TRUE \",\" TRUE \",\" \",\"".$img.$row['pic1']."\",\"".$title."\"";
		
	}
	 //echo $csv_output;die;
	//$csv_output1="Handle;Title;Body (HTML);Vendor;Type";
	$new_str = mb_convert_encoding($csv_output, 'Windows-1252', 'auto');

	$filename = $file."_".date("Y-m-d_H-i",time());
	header("Content-type: application/vnd.ms-excel");
	header("Content-disposition: csv" . date("Y-m-d") . ".csv");
	header( "Content-disposition: filename=".$filename.".csv");
	fwrite($output, $new_str);
	fclose($output);
	//print $new_str;
	exit;
