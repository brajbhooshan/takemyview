<?php include_once("API.php");
class Country extends API {	
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
            $instance = new Country();
        }
        return $instance;
	} 

	public function get_country_options(){
		$connection_data = $this->get_connection();		
		$post_data = $connection_data['connection_data']; 

		//Add methods to get exact result.
		$post_data['ConnectionData']['Method'] = 128;
		$data_string = json_encode($post_data);	
		$result = $this->get_result($connection_data['url'],$data_string);
		return json_decode($result);		
	}	

	public function get_all(){
		$connection_data = $this->get_connection();		
		$post_data = $connection_data['connection_data']; 

		//Add methods to get exact result.
		$post_data['ConnectionData']['Method'] = 143;
		$data_string = json_encode($post_data);	
		$result = $this->get_result($connection_data['url'],$data_string);
		return json_decode($result);		
	}

	public function add($post){
		$connection_data = $this->get_connection();		
		$post_data = $connection_data['connection_data']; 

		//Add methods to get exact result.
		$post_data['ConnectionData']['Method'] = 145;
		$post_data['Data'] = $post;
		$data_string = json_encode($post_data);	
		$result = $this->get_result($connection_data['url'],$data_string);
		return json_decode($result);
	}

	public function edit($post){
		$connection_data = $this->get_connection();		
		$post_data = $connection_data['connection_data']; 

		//Add methods to get exact result.
		$post_data['ConnectionData']['Method'] = 144;
		$post_data['Data'] = $post;
		$data_string = json_encode($post_data);	
		$result = $this->get_result($connection_data['url'],$data_string);
		return json_decode($result);
	}

	public function delete($post){
		$connection_data = $this->get_connection();		
		$post_data = $connection_data['connection_data']; 
		//Add methods to get exact result.
		$post_data['ConnectionData']['Method'] = 158;
		$post_data['Data'] = $post;
		$data_string = json_encode($post_data);	
		$result = $this->get_result($connection_data['url'],$data_string);
		return json_decode($result);
	}
}