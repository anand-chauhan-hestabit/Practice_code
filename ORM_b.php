<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class DbConnect
{   
    private static $instance = null;
    private static $conn;

    private function __construct(){

        self::$conn = new mysqli('localhost','hestabit','hestabit','anand');
        echo"conected....<br>";

    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new DbConnect();
            return self::$instance;
        } else {
            // echo"now cant initiate instance.... ";
            // die('now cant initiate instance.... ');
        }
        
    }

    public static function getConnection()
    {  
        return self::$conn;
    }


     #FETCH DATA USING GIVEN TABLE AND COLUMN NAME
     public  function fetch_Data($table_name,$column_name){
        try{
            $obj =  DbConnect::getConnection();
            $sql = "select $column_name from $table_name";
            $result = $obj->query($sql);
            $response = $result->fetch_all();
            echo"<pre>";print_r($response);
        } catch (Error $e){
            echo "Cannot initialize";
        }
    }

    public function __get($a)
    {
        echo "you have not a instance($a)";
    }


}
// $db = DbConnect::getInstance();
$db = DbConnect::getInstance();
$db->fetch_Data("anandt","name");

$dbb = DbConnect::getInstance();
if(!is_null($dbb))
$dbb->fetch_Data("anandt","name");
else
echo "Cannot initialize";
