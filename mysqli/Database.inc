<?php
Class Database
{
    private $serverName;
    private $dbName;
    private $userName;
    private $password;
	private $conn;

    public function __construct()
    {
		$ini = parse_ini_file('config/properties.ini');		
        $this -> serverName =	$ini['host'];
        $this -> dbName = 		$ini['db_name'];
        $this -> userName = 	$ini['db_user'];
        $this -> password = 	$ini['db_password'];
    }
	
    public function connect()
    {
        $this-> conn = @mysqli_connect($this -> serverName, $this->userName, $this->password, $this->dbName);
        return $this-> conn;
    }
	
	public function __destruct(){
		//$this->conn->close();
    }
}
?>