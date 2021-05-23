<?php
class connectionClass extends mysqli{
    
    private $host="localhost",$password="root",$username="root",$dbName='phptutorial';
    public $con;
    function __construct() {
        $this->con=  $this->connect($this->host, $this->username, $this->password, $this->dbName);
    }
}
