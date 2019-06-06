
<?php
  // define variables and set to empty values
  $stateErr = $dobErr = $phoneErr = $zipErr = $passwordErr = $confirmpwErr = $usernameErr = $firstnameErr = $lastnameErr = $address1Err =
  $address2Err = $cityErr = $emailErr = $genderErr = $msErr = "";

  $state = $dob = $phone = $zip = $pw = $confirmpw = $un = $firstname = $lastname = $address1 =
  $address2 = $city = $email = $gen = $ms =  "";

  $isValid = false;

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $un = test_input($_POST["userName"]);
    if (empty($un)) {
      $usernameErr = "Name is required";
      $isValid = false;
    } else {
      if (!preg_match("/^[a-zA-Z0-9.-_]{6,50}$/", $un)) {
        $usernameErr = "Minimum of 6 and maximum of 50 characters!";
        setValid(false);
      } else {
        $isValid = true;
      }
    }

    $state = test_input($_POST['state']);
    if (empty($state)) {
      $stateErr = "Required";
      $isValid = false;
    } else {
      $isValid= true;
    }

    $dob = test_input($_POST["dateOfBirth"]);
    if (empty($dob)) {
      $dobErr = "Required";
      $isValid = false;
    }else {
      if (!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $dob)) {
        $dobErr = "Please enter DOB
        in the format xxxx-xx-xx";
        $isValid = false;
      }
    else {
      $isValid= true;
    }
  }

    $zip = test_input($_POST["zipCode"]);
    if (empty($zip)) {
      $zipErr = "Required";
      $isValid = false;
    } else {
      if (!preg_match("/^[0-9]{5}(-[0-9]{4})?$/", $zip)) {
        $zipErr = "Format xxxxx or xxxxx-xxxx";
        $isValid = false;
      } else {
        $isValid = true;
      }
    }

    $phone = test_input($_POST["phone"]);
    if (empty($phone)) {
      $phoneErr = "Required field";
      $isValid = false;
    } else {
      if (!preg_match("/^\d{3}-\d{3}-\d{4}$/", $phone)) {
        $phoneErr = "Format required xxx-xxx-xxxx";
        $isValid = false;
      } else {
        $isValid = true;
      }
    }

    $pw = test_input($_POST["password"]);
    if (empty($pw)) {
      $passwordErr = "Required field";
      $isValid = false;
    } else {
      if (!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,50}$/", $pw)) {
        $passwordErr = "Must contain at least one num, one uppercase and
        lowercase letter, and minimum 8 characters";
        $isValid = false;
      } else {
        $isValid = true;
      }
    }


    $confirmpw = test_input($_POST["confirm_password"]);
    if (empty($confirmpw)) {
      $confirmpwErr = "Required field";
      $isValid = false;
    } else {
      if (!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,50}$/", $confirmpw)) {
        $confirmpwErr = "Must contain at least one num, one uppercase and
        lowercase letter, and minimum 8 characters";
        $isValid = false;
      } else {
        $isValid = true;
      }
    }
    if($_POST["password"]!= $_POST["confirm_password"]){
      $confirmpwErr = "Password does not match";
      $isValid = false;
    }


    $firstname = test_input($_POST["firstName"]);
    if (empty($firstname)) {
      $firstnameErr = "First Name required";
      $isValid = false;
    } else {
      if (!preg_match("/^[a-zA-Z ]{1,50}+$/", $firstname)) {
        $firstnameErr = "Max of 50 characters";
        $isValid = false;
      } else {
        $isValid = true;
      }
    }

    $lastname = test_input($_POST["lastName"]);
    if (empty($lastname)) {
      $lastnameErr = "Last Name required";
      $isValid = false;
    } else {
      if (!preg_match("/^[a-zA-Z ]{1,50}+$/", $lastname)) {
        $lastnameErr = "Max of 50 characters";
        $isValid = false;
      } else {
        $isValid = true;
      }
    }

    $address1 = test_input($_POST["address1"]);
    if (empty($address1)) {
      $address1Err = "Address required";
      $isValid = false;
    } else {
      if (!preg_match("/^[A-Za-z0-9'\.\-\s\,]{1,100}+$/", $address1)) {
        $address1Err = "Max of 100 characters";
        $isValid = false;
      } else {
        $isValid = true;
      }
    }


    $address2 = test_input($_POST["address2"]);

    $city = test_input($_POST["city"]);
    if (empty($city)) {
      $cityErr = "City required";
      $isValid = false;
    } else {
      if (!preg_match("/^[A-Za-z0-9'\.\-\s\,]{1,50}+$/", $city)) {
        $cityErr = "Max of 50 characters";
        $isValid = false;
      } else {
        $isValid = true;
      }
    }

    $email = test_input($_POST["email"]);
		if (empty($email)) {
			$emailErr = "Email required";
			$isValid = false;
		} else {
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$emailErr = "Invalid email format";
				$isValid = false;
			} else {
				$isValid = true;
			}
		}


		if (empty($_POST["maritalStatus"])) {
		$msErr = "Marital status required";
		$isValid=false;
		} else {
		$ms = test_input($_POST["maritalStatus"]);
		$isValid=true;
		}

		if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
		$isValid=false;
  } else {
    $gen = test_input($_POST["gender"]);
		$isValid=true;
  }
}


  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  function setValid($bool) {
		$isValid = $bool;
	}

?>
