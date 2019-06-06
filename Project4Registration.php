<!DOCTYPE html>
<?php
	ob_start();
	include 'inputValidate.php';
	include 'connectionInfo.php';
	include 'insertValidData.php';
	ob_end_flush();
?>
<html lang="en-US">
      <header>
            <div class="header">Indigo League: <br> Trainer's Registration Page </div>
                <link rel="stylesheet"
                    type="text/css"
                    href="css/Project3CSS.css"/>
                    <!-- This links the CSS style sheet -->
      </header>
            <!--<form method="GET" novalidate action="Project3Registration.php">--!
                  <div class="container-fluid">
	    <!--Bootstrap code-->
      <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <!--Bootstrap code end-->

     <nav class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
          <ul>
              <li><a href="Proj3HomePage.html">Home</a></li>
              <li><a href="Project4Registration.php">Register</a></li>
              <li><a href="Proj3Animation.html">Animation</a></li>
          </ul>
          <img src="pika.jpg" alt="pikachu"width="100" height="100"/>
          <br><br>
				</nav>
		<style>
			.error {color: #FF0000;}
		</style><br/>
		<body>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		<form method="post" novalidate action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

			<label for="username"> Username:</label> <br>
					<input type="text" id=userName name="userName"
							placeholder="Username"
						 value="<?php echo $un; ?>">
							<span class="error">* <?php echo $usernameErr;?></span>
							<br>
			<!--<script src="checkPassword.js"></script>-->

			<label for="password"> Password: <br>
					<input type="password" id=password name="password"
							placeholder="Password"
							value="<?php echo $pw; ?>">
							<span class="error">* <?php echo $passwordErr;?></span>
							</label><br>

			<label for="confirm_password"> Confirm Password:<br>
					<input type="password" id=confirm_password name="confirm_password"
							placeholder="Confirm Password"
							value="<?php echo $confirmpw; ?>">
							<span class="error">* <?php echo $confirmpwErr;?></span>
							<!--<span id='message'></span></label>-->
							<br>
			<label for="firstname"> First Name:</label> <br>
					<input type="text" id=firstName name="firstName"
							placeholder="First Name"
						 value="<?php echo $firstname; ?>">
							<span class="error">* <?php echo $firstnameErr;?></span>
							<br>
			<label for="lastname"> Last Name:</label> <br>
					<input type="text" id=lastName name="lastName"
							placeholder="Last Name"
							value="<?php echo $lastname; ?>">
							<span class="error">* <?php echo $lastnameErr;?></span>
							<br>
			<label for="address1"> Address Line 1:</label> <br>
					<input type="text" id=address1 name="address1"
							placeholder="Address Line 1"
							value="<?php echo $address1; ?>">
							<span class="error">* <?php echo $address1Err;?></span>
							<br>
			<label for="address2"> Address Line 2:</label> <br>
					<input type="text" id=address2 name="address2"
							placeholder="Address Line 2"
							value="<?php echo $address2; ?>">
							<span class="error"><?php echo $address2Err;?></span>
							<br>

			<label for="city"> City:</label> <br>
					<input type="text" id=city name="city" placeholder="City"
					value="<?php echo $city; ?>">
					<span class="error">* <?php echo $cityErr;?></span>
							<br>

			<label for="state"> State:</label> <br>
					<select name="state" id=state
					value="<?php echo $state; ?>">
									<option value="" >Select State</option>
									<option value="AL">Alabama</option>
									<option value="AK">Alaska</option>
									<option value="AZ">Arizona</option>
									<option value="AR">Arkansas</option>
									<option value="CA">California</option>
									<option value="CO">Colorado</option>
									<option value="CT">Connecticut</option>
									<option value="DE">Delaware</option>
									<option value="DC">District of Columbia</option>
									<option value="FL">Florida</option>
									<option value="GA">Georgia</option>
									<option value="HI">Hawaii</option>
									<option value="ID">Idaho</option>
									<option value="IL">Illinois</option>
									<option value="IN">Indiana</option>
									<option value="IA">Iowa</option>
									<option value="KS">Kansas</option>
									<option value="KY">Kentucky</option>
									<option value="LA">Louisiana</option>
									<option value="ME">Maine</option>
									<option value="MD">Maryland</option>
									<option value="MA">Massachusetts</option>
									<option value="MI">Michigan</option>
									<option value="MN">Minnesota</option>
									<option value="MS">Mississippi</option>
									<option value="MO">Missouri</option>
									<option value="MT">Montana</option>
									<option value="NE">Nebraska</option>
									<option value="NV">Nevada</option>
									<option value="NH">New Hampshire</option>
									<option value="NJ">New Jersey</option>
									<option value="NM">New Mexico</option>
									<option value="NY">New York</option>
									<option value="NC">North Carolina</option>
									<option value="ND">North Dakota</option>
									<option value="OH">Ohio</option>
									<option value="OK">Oklahoma</option>
									<option value="OR">Oregon</option>
									<option value="PA">Pennsylvania</option>
									<option value="RI">Rhode Island</option>
									<option value="SC">South Carolina</option>
									<option value="SD">South Dakota</option>
									<option value="TN">Tennessee</option>
									<option value="TX">Texas</option>
									<option value="UT">Utah</option>
									<option value="VT">Vermont</option>
									<option value="VA">Virginia</option>
									<option value="WA">Washington</option>
									<option value="WV">West Virginia</option>
									<option value="WI">Wisconsin</option>
									<option value="WY">Wyoming</option>
					</select>
					<span class="error">* <?php echo $stateErr;?></span>
					<br>
				</div>
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">

			<!--<script src="zipCode.js"></script>-->
			<label for="zipCode"> Zip Code: <br>
					<input type="text" id="zipCode" name="zipCode"
					placeholder="xxxxx-xxxx"
					value="<?php echo $zip; ?>">
					<span class="error">* <?php echo $zipErr;?></span>
					</label>
						<br>

			<label for="phone"> Phone Number:</label> <br>
					<input type="text" id="phone" name="phone"
					placeholder="xxx-xxx-xxxx"
					value="<?php echo $phone; ?>">
					<span class="error">* <?php echo $phoneErr;?></span>
					</label>
						<br>

			<label for="email"> Email:</label> <br>
					<input type="email" id="email" name="email"
					placeholder="Email" value="<?php echo $email; ?>"/>
					<span class="error">* <?php echo $emailErr;?></span>
						<br>

				<label for="gender">Gender:</label><br>
			  <input type="radio" name="gender"
				<?php if (isset($gen) && $gen=="female") echo "checked";?> value="female"><label for="female">Female</label>
			  <input type="radio" name="gender"
				<?php if (isset($gen) && $gen=="male") echo "checked";?> value="male"><label for="male">Male</label>
				<span class="error">* <?php echo $genderErr;?></span>
				<br>

				<label for="maritalStatus">Marital Status:</label><br>
				<input type="radio" name="maritalStatus"
				<?php if (isset($ms) && $ms=="single") echo "checked";?> value="single"><label for="single">Single</label><br>
				<input type="radio" name="maritalStatus"
				<?php if (isset($ms) && $ms=="married") echo "checked";?> value="married"><label for="married">Divorced</label><br>
				<input type="radio" name="maritalStatus"
				<?php if (isset($ms) && $ms=="divorced") echo "checked";?> value="divorced"><label for="divorced">Married</label><br>
				<input type="radio" name="maritalStatus"
				<?php if (isset($ms) && $ms=="widowed") echo "checked";?> value="widowed"><label for="widowed">Widowed</label>
				<span class="error">* <?php echo $msErr;?></span>

			<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
			<link rel="stylesheet" href="/resources/demos/style.css">
			<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
			<!--<script src="dateofBirth.js"></script>-->
								<br><label for="dateOfBirth"> Date of Birth:</label> <br>
											<input type="text"
														id="dateOfBirth" name="dateOfBirth" placeholder="xxxx-xx-xx"
														value="<?php echo $dob; ?>"
														>
														<span class="error">* <?php echo $dobErr;?></span>
													</label><br><br>

			<input type="submit" id="submit" value="submit"></input>
			<input type="reset" id="reset" value="reset"></input>
		</form>

		<div class="footer">
	         <a href="https://www.pokemoncenter.com/?utm_source=bing&utm_medium=cpc&utm_campaign=Brand%20%7C%20
	             Core%20%7C%20Exact&utm_term=pokemon%20store&utm_content=Pokemon%20Store" target="_blank">
	                <img src="pokeball.jpg" alt="pokeball"width="30" height="30"/></a>
	         <a href="https://www.pokemon.com/us/pokemon-episodes/pokemon-tv-seasons/season-1/" target="_blank">
	              Welcome to the Indigo League.</a>
	         <a href="http://pokemon.wikia.com/wiki/Team_Rocket" target="_blank">
	            <img src="pokeball.jpg" alt="pokeball"width="30" height="30"/></a>
	  </div>
	</body>
</html>
