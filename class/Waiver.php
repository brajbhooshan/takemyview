<?php include_once("API.php");
class Waiver extends API {	
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
            $instance = new Waiver();
        }
        return $instance;
	} 

	public function fetch_all(){
		$connection_data = $this->get_connection();		
		$post_data = $connection_data['connection_data']; 

		//Add methods to get exact result.
		$post_data['ConnectionData']['Method'] = 112;
		$data_string = json_encode($post_data);	
		$result = $this->get_result($connection_data['url'],$data_string);
		return json_decode($result);		
	}

	public function get_waiver_options(){
		$connection_data = $this->get_connection();		
		$post_data = $connection_data['connection_data']; 

		//Add methods to get exact result.
		$post_data['ConnectionData']['Method'] = 130;
		$data_string = json_encode($post_data);	
		$result = $this->get_result($connection_data['url'],$data_string);
		return json_decode($result);		
	}

	public function add($post){
		$connection_data = $this->get_connection();		
		$post_data = $connection_data['connection_data']; 

		//Add methods to get exact result.
		$post_data['ConnectionData']['Method'] = 107;
		$post_data['Data'] = $post;
		$data_string = json_encode($post_data);	
		$result = $this->get_result($connection_data['url'],$data_string);
		return json_decode($result);
	}

	public function edit($post){
		$connection_data = $this->get_connection();		
		$post_data = $connection_data['connection_data']; 

		//Add methods to get exact result.
		$post_data['ConnectionData']['Method'] = 124;
		$post_data['Data'] = $post;
		$data_string = json_encode($post_data);	
		$result = $this->get_result($connection_data['url'],$data_string);
		return json_decode($result);
	}

	public function delete($post){
        $connection_data = $this->get_connection();     
        $post_data = $connection_data['connection_data']; 
        //Add methods to get exact result.
        $post_data['ConnectionData']['Method'] = 164;
        $post_data['Data'] = $post;
        $data_string = json_encode($post_data); 
        $result = $this->get_result($connection_data['url'],$data_string);
        return json_decode($result);
    }
}