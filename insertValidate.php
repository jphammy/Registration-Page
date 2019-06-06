<?php
	if ($valid) {
		try {
			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			// set the PDO error mode to exception
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$sql = $conn->prepare("INSERT INTO registration (userName, password,
      firstName, lastName, password, address1, address2,
      state, zipCode, phone, email, gender, maritalStatus, dateOfBirth)
			VALUES (:userName, :firstName, :lastName, :password,
        :address1, :address2, :state, :zipCode, :phone,
			  :email, :gender, :maritalStatus, :dateOfBirth)");

			$sql->bindParam(':userName', $username);
			$sql->bindParam(':firstName', $firstname);
			$sql->bindParam(':lastName', $lastname);
			$sql->bindParam(':password', $pw);
      $sql->bindParam(':address1', $address1);
      $sql->bindParam(':address2', $address2);
      $sql->bindParam(':city', $city);
      $sql->bindParam(':state', $state);
      $sql->bindParam(':zipCode', $zip);
      $sql->bindParam(':phoneNumber', $phone);
      $sql->bindParam(':email', $email);
      $sql->bindParam(':gender', $gen);
      $sql->bindParam(':maritalStatus', $ms);
      $sql->bindParam(':dateOfBirth', $dob);

			$sql->execute();

			$last_id = $conn->lastInsertId();
			$_SESSION["last_id"] = "$last_id";

			header("Location: Project4Confirmation.php");
		}
		catch(PDOException $e) {
			echo "Connection failed: " . $e->getMessage();
		}
		$conn = null;
	}
?>
