
//include this page via include 'connect.php'
<?php
session_start();
$servername = "localhost";
$dbname = "project";
$username = "root";
$password= "";
?>

//include "inputValidate.php"

//outside form include input valid

// connectInfo.php must be included in registration and confirmation page!!!!!
// lastUserData.php must be included in ______

<?php
if ($valid) {
  $conn = new PDO ("mysql:host=$servername; dbname = $dbname", $username, $password);

  $conn -> setAttribute(PDO:: ATTR_ERRMOD, PDO::ERRMODE_EXCEPTION);

  $sql = $conn -> prepare ("INSERT_INTO registration (userName, password, firstName, address1, city, state, zip, phone, email,gender, maritalstatus)"
  VALUES (:name, '', '', '', :website, CURDATE());

  $sql -> bindParam(':name', $name);
  $sql -> bindParam(':website', $website);
  ////// continue to bindParam

  $sql -> execute();

  $last_id = $conn -> lastInsertId();
  $_SESSION["last_id"] = "$last_id"; //key value pair


  header("Location: confirmation.php");
}

catch(PDOExcpetion $e) {
  echo "Connection Failed"
}

 ?>
