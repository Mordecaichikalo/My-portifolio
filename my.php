<!DOCTYPE html>
<html>
<body>
 
<?php
$phpconnect = mysqli_connect("localhost","root","");
 
if (mysqli_connect_errno())
{
echo "Connection Failed; " . mysqli_connect_error();
}
else
{
echo "Connection Established.<br>";
 
$phpdatabase = "CREATE TABLE MyWeb (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(20) NOT NULL,
lastname VARCHAR(20) NOT NULL,
email VARCHAR(50))";
 
if(mysqli_query( $phpconnect,$phpdatabase))
{  
echo "Table Created successfully.<br>";  
}
else
{  
echo "Table Creation Failed; ".mysqli_error($phpconnect);  
}  
}
 
mysqli_close($phpconnect);
echo “Connection Closed.”
?> 
 
</body>
</html>
