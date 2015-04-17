<?php include_once("API.php");
class RestrictedRider extends API {	
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
            $instance = new RestrictedRider();
        }
        return $instance;
	} 

	public function fetch_all(){
		$connection_data = $this->get_connection();		
		$post_data = $connection_data['connection_data']; 

		//Add methods to get exact result.
		$post_data['ConnectionData']['Method'] = 153;
		$data_string = json_encode($post_data);	
		
		$result = $this->get_result($connection_data['url'],$data_string);
		return json_decode($result);		
	}	

	public function edit($post){
		$connection_data = $this->get_connection();		
		$post_data = $connection_data['connection_data'];
		$post_data['ConnectionData']['Method'] = 169;
		$post_data['Data'] = $post;
		$data_string = json_encode($post_data);	
		//print_r($data_string);die;
		$result = $this->get_result($connection_data['url'],$data_string);
		return json_decode($result);
	}

	public function add($post){
		$connection_data = $this->get_connection();		
		$post_data = $connection_data['connection_data'];
		$post_data['ConnectionData']['Method'] = 168;
		$post_data['Data'] = $post;
		$data_string = json_encode($post_data);	
		//print_r($data_string);die;
		$result = $this->get_result($connection_data['url'],$data_string);
		return json_decode($result);
	}

	public function delete($post){
        $connection_data = $this->get_connection();     
        $post_data = $connection_data['connection_data']; 
        //Add methods to get exact result.
        $post_data['ConnectionData']['Method'] = 170;
        $post_data['Data'] = $post;
        $data_string = json_encode($post_data); 
        $result = $this->get_result($connection_data['url'],$data_string);
        return json_decode($result);
    }
}