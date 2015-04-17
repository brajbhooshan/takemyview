<?php if (!isset($_SESSION)) session_start();
    include_once("API.php");
class Auth extends API {	
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
            $instance = new Auth();
        }
        return $instance;
	}     

    public static function check(){
        if(isset($_SESSION['User']) && !empty($_SESSION['User'])){
                return true;
        }
        else {
            return false;     
        }
    }

    public static function authentication(){
        if(!isset($_SESSION['User']) && empty($_SESSION['User'])){
            header("Location:index.php");
        }
    }

    public static function getUsers(){ 
        if(isset($_SESSION['User']) && !empty($_SESSION['User'])){
            return $_SESSION['User'];
        }
    }
}
Auth::authentication();