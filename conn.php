<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');

$hostname="sql105.epizy.com";
$username="epiz_30278136";
$password= "84M0otCwCwobX";
$database = "epiz_30278136_reg_user";
$conn;
try{

  $conn = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo 'failed to connect to database';
}
   
   
   
   
      
?>

<?php
?>