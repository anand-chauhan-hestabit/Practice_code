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
            echo"now cant initiate instance.... ";
            return self::$instance = false;
        }
        
    }

    public static function getConnection()
    {  
        return self::$conn;
    }


     #FETCH DATA USING GIVEN TABLE AND COLUMN NAME
     public  function fetch_Data($table_name,$column_name){
        $obj =  DbConnect::getConnection();
        $sql = "select $column_name from $table_name";
        $result = $obj->query($sql);
        $response = $result->fetch_all();
        echo"<pre>";print_r($response);
    }

    public function __get($property)
    {
        if (property_exists($this, $property)) {
            echo "You are trying to access private property";
        } else {
            echo "your are trying to non-exit peropertyy";
        }
    }


}
// $db = DbConnect::getInstance();
$db = DbConnect::getInstance();
$db->fetch_Data("anandt","name");

$dbb = DbConnect::getInstance();
$dbb->fetch_Data("anandt","name");




?>
