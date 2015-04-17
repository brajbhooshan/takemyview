<?php include_once("API.php");
class User extends API {	
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
            $instance = new User();
        }
        return $instance;
	} 

	public function fetch_all(){
		$connection_data = $this->get_connection();		
		$post_data = $connection_data['connection_data']; 

		//Add methods to get exact result.
		$post_data['ConnectionData']['Method'] = 113;
		$data_string = json_encode($post_data);	
		$result = $this->get_result($connection_data['url'],$data_string);
		return json_decode($result);		
	}

	public function add($post){
		$connection_data = $this->get_connection();		
		$post_data = $connection_data['connection_data']; 

		//Add methods to get exact result.
		$post_data['ConnectionData']['Method'] = 106;
		$post_data['Data'] = $post;
		$data_string = json_encode($post_data);	
		$result = $this->get_result($connection_data['url'],$data_string);
		return json_decode($result);
	}

	public function edit($post){
		$connection_data = $this->get_connection();		
		$post_data = $connection_data['connection_data']; 

		//Add methods to get exact result.
		$post_data['ConnectionData']['Method'] = 121;
		$post_data['Data'] = $post;
		$data_string = json_encode($post_data);	
		$result = $this->get_result($connection_data['url'],$data_string);
		return json_decode($result);
	}

	public function login($post){
		$connection_data = $this->get_connection();				
		$post_data = $post;
		$data_string = json_encode($post_data);	
		//print_r($data_string);die;		
		$result = $this->get_result($connection_data['auth_url'],$data_string);
		return json_decode($result);
	}

	public function delete($post){
        $connection_data = $this->get_connection();     
        $post_data = $connection_data['connection_data']; 
        //Add methods to get exact result.
        $post_data['ConnectionData']['Method'] = 161;
        $post_data['Data'] = $post;
        $data_string = json_encode($post_data); 
        $result = $this->get_result($connection_data['url'],$data_string);
        return json_decode($result);
    }
}