<?php 
class API  {

	protected function get_connection(){
		$url = "http://dev.kickstartuser.com/API/APIAdmin.php";
		$authUrl = "http://dev.kickstartuser.com/API/APIReports.php?method=101";
		$reportUrl = "http://dev.kickstartuser.com/API/APIReports.php?method=105";

		$connection_data = array('ConnectionData' => array('APIKey' => '5987ac798eb9c2ed5801E2E6E2pkJ8',
															'ClientTime' => '01-05-2015 12:00:00',
													));
		return array('url' => $url ,
					'connection_data' => $connection_data,
					'auth_url' => $authUrl,
					'report_url' => $reportUrl);
	}

	protected function get_result($url,$data_string){
		$ch = curl_init($url);                                                                      
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
		    'Content-Type: application/json',                                                                                
		    'Content-Length: ' . strlen($data_string))                                                                       
		);	 
		$result = curl_exec($ch);
		return $result;
	}

	/*protected function get_login(){

	}*/
}