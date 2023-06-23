<?php

$servername = "localhost";
$username = "root";
$password = "";
$databasename = "morde";

$conn = mysqli_connect($servername, $username, $password, $databasename) or die("Connection failed");

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $program = $_POST['program'];

 $query = "INSERT INTO morde SET name='$name', email='$email', program='$program'";
        $sql = mysqli_query($conn, $query);
    
        if($sql){
            header ('location: morde.php');
        } else {
            echo mysqli_error($conn);
        }
    }


?>