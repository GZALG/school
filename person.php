<?php
class Person
{
    private $name;
    
    public function __construct()
    {
        $name = "admin";    
    }
    
    public function logIn()
    {
        header("Location: index.php");
    }
    
    public static function logOut()
    {
        session_start();
        unset($_SESSION["person"]);  
        header("Location: index.php");
    }
    
    public static function upload($year,$link) //a refaire PDO
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "school";
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) 
        {
            die("Connection failed: " . $conn->connect_error);
        } 
        $sql = "insert into cours(year,link) values('$year','$link')";
        mysqli_query($conn,$sql);
        $conn->close();
        }
    
    public static function delete()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "school";
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) 
        {
            die("Connection failed: " . $conn->connect_error);
        } 
        $sql = "delete from cours";
        mysqli_query($conn,$sql);
        $conn->close();
    }
}
?>