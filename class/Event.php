<?php include_once("API.php");
class Event extends API {	
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
            $instance = new Event();
        }
        return $instance;
	} 

	public function fetch_all($post=array()){
		$connection_data = $this->get_connection();		
		$post_data = $connection_data['connection_data'];
		//Add methods to get exact result.
		$post_data['ConnectionData']['Method'] = 117;
		$post_data['Data'] = $post;
		$data_string = json_encode($post_data);			
		$result = $this->get_result($connection_data['url'],$data_string);
		return json_decode($result);		
	}

	public function fetch_by_id($post){
		$connection_data = $this->get_connection();		
		$post_data = $connection_data['connection_data'];
		//Add methods to get exact result.
		$post_data['ConnectionData']['Method'] = 166;
		$post_data['Data'] = $post;
		$data_string = json_encode($post_data);	
		//print_r($data_string);die;		
		$result = $this->get_result($connection_data['url'],$data_string);
		return json_decode($result);		
	}

	public function edit($post){
		$connection_data = $this->get_connection();		
		$post_data = $connection_data['connection_data'];
		$post_data['ConnectionData']['Method'] = 139;
		$post_data['Data'] = $post;
		$data_string = json_encode($post_data);	
		//print_r($data_string);die;
		$result = $this->get_result($connection_data['url'],$data_string);
		return json_decode($result);
	}

	public function add($post){
		$connection_data = $this->get_connection();		
		$post_data = $connection_data['connection_data'];
		$post_data['ConnectionData']['Method'] = 102;
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
        $post_data['ConnectionData']['Method'] = 162;
        $post_data['Data'] = $post;
        $data_string = json_encode($post_data); 
        $result = $this->get_result($connection_data['url'],$data_string);
        return json_decode($result);
    }

    public function get_report($post){    	
		$connection_data = $this->get_connection();				
		$post_data = $post;
		$data_string = json_encode($post_data);		
		//print_r($data_string);die;		
		$result = $this->get_result($connection_data['report_url'],$data_string);
		return json_decode($result);	
    }

}