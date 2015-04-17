<?php include_once("API.php");
class CustomerTrans extends API {	
	private static $instance = null;

	/**
     * Returns the *Singleton* instance of this class.
     *
     * @staticvar Singleton $instance The *Singleton* instances of this class.
     *
     * @return Singleton The *Singleton* instance.
     */

	public static function getInstance(){
     	static $instance = null;
     	if (null === $instance) {
            $instance = new CustomerTrans();
        }
        return $instance;
	} 	

	public function get_costomer_by_event_id($post){
		$connection_data = $this->get_connection();		
		$post_data = $connection_data['connection_data']; 

		//Add methods to get exact result.
		$post_data['ConnectionData']['Method'] = 167;
		$post_data['Data'] = $post;
		$data_string = json_encode($post_data);	
		//print_r($data_string);die;
		$result = $this->get_result($connection_data['url'],$data_string);
		return json_decode($result);		
	}
	
}