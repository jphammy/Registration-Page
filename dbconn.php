<!DOCTYPE html>
<?php
$servername = "localhost";
$dbname = "project";
$username = "root";
$password = "";

$firstName = "Steve";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "INSERT INTO registration (userName, password, firstName, lastName,
	address1, city, state, zipCode, phone, email, gender, maritalStatus, 
	dateOfBirth)
    VALUES ('ClassExample', 'd3m0', '$firstName', 'Riegerix', '5 Lollipop Way',
	'Saint Louis', 'MO', '63043', '314-555-5555', 'test@email.com', 'Male',
	'Married', CURDATE())";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>
<html lang = "en">
	<head>
		<?php define("title", "DB_CONN"); ?>
		<title><?php echo title; ?></title>
		<meta charset = "utf-8" />
	</head>
	<body>
		Testing PDO
	</body>
</html>