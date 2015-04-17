<?php include_once("API.php");
class Group extends API {	
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
            $instance = new Group();
        }
        return $instance;
	} 

    public function fetch_all(){
        $connection_data = $this->get_connection();     
        $post_data = $connection_data['connection_data']; 

        //Add methods to get exact result.
        $post_data['ConnectionData']['Method'] = 127;
        $post_data['Data']= array('ClientID' => 1);
        $data_string = json_encode($post_data); 

       // print_r($data_string);die;
        $result = $this->get_result($connection_data['url'],$data_string);
        return json_decode($result);        
    }

    public function get_group_options(){
        $connection_data = $this->get_connection();     
        $post_data = $connection_data['connection_data']; 

        //Add methods to get exact result.
        $post_data['ConnectionData']['Method'] = 127;
        $data_string = json_encode($post_data); 
        $result = $this->get_result($connection_data['url'],$data_string);
        return json_decode($result);        
    }

    public function add($post){
        $connection_data = $this->get_connection();     
        $post_data = $connection_data['connection_data']; 

        //Add methods to get exact result.
        $post_data['ConnectionData']['Method'] = 131;
        $post_data['Data'] = $post;
        $data_string = json_encode($post_data); 
        $result = $this->get_result($connection_data['url'],$data_string);
        return json_decode($result);
    }

    public function edit($post){
        $connection_data = $this->get_connection();     
        $post_data = $connection_data['connection_data']; 

        //Add methods to get exact result.
        $post_data['ConnectionData']['Method'] = 132;
        $post_data['Data'] = $post;
        $data_string = json_encode($post_data); 
        $result = $this->get_result($connection_data['url'],$data_string);
        return json_decode($result);
    }

    public function delete_by_clientID($post){
        $connection_data = $this->get_connection();     
        $post_data = $connection_data['connection_data']; 

        //Add methods to get exact result.
        $post_data['ConnectionData']['Method'] = 149;
        $post_data['Data'] = $post;
        $data_string = json_encode($post_data); 
        $result = $this->get_result($connection_data['url'],$data_string);
        return json_decode($result);
    }
    public function delete($post){
        $connection_data = $this->get_connection();     
        $post_data = $connection_data['connection_data']; 
        //Add methods to get exact result.
        $post_data['ConnectionData']['Method'] = 155;
        $post_data['Data'] = $post;
        $data_string = json_encode($post_data); 
        $result = $this->get_result($connection_data['url'],$data_string);
        return json_decode($result);
    }
}