<?php
class Connect{
private $conn;
public function __construct() {
$servername = "localhost";
$user = "root";
$password = "";
$db = "ventas";
try{
$conn = new PDO('mysql:host='.$servername.';dbname='.$db.'', $user, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conn->exec("SET CHARACTER SET UTF8");   
if ($conn instanceof PDO) {
return $conn;
}
}catch(PDOException $e){       
die("error: ".$e->getMessage());
echo "Línea ".$e->getLine();
}
}
}