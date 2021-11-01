<?php
include 'constant.php';
// Set error message
error_reporting(1);
ini_set('display_errors', 1);

class DB
{
    private $hostname   = DB_HOST;
    private $user       = DB_USER;
    private $password   = DB_PASS;
    private $db_name    = DB_NAME;
    protected $connect;

    public function __construct()
    {
        try
        {
            $this->connect = new PDO("mysql:host=$this->hostname; dbname=$this->db_name",$this->user, $this->password);
            $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $e)
        {
            echo $e->getMessage();
        }
        return $this->connect;
    }
}

?>