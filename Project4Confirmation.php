<!DOCTYPE html>
<?php
	include 'connectionInfo.php';
	include 'selectUserData.php';
?>
<html lang="en-US">
      <header>
            <div class="grow">
                <div class="header">Indigo League: <br> Trainer's Confirmation Page </div>
            </div>
            <link rel="stylesheet"
                type="text/css"
                href="css/Project3CSS.css"/>
                      <!-- This links the CSS style sheet -->
      </header>
			<div class="body">
						<form method="GET" action="Project1Final.html">
								<div class="container-fluid">

			<!--Bootstrap code-->
			<meta name="viewport" content="width=device-width, initial-scale=1">
					<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
						 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
									<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
			<!--Bootstrap code end-->

			<nav class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
					<ul>
							<li><a href="Proj3HomePage.html">Return Home</a></li>
							<li><a href="Project4Registration.php">Return to Registration</a></li>
							<li><a href="Proj3Animation.html">Animation</a></li>
					</ul>
					<div class="grow">
							<img src="pika.jpg" alt="pikachu"width="100" height="100"/>
									</div>
			</nav>


			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<body>
		<br>

		<label for="username"> Username:</label>
		<input disabled id=userName type="text" name="userName" value="<?php echo $un; ?>">
		<br>

		<label for="password">Password:</label>
		<input disabled id="password" type="text" name="password" value="<?php echo $pw; ?>">
		<br>

		<label for="firstname">First Name:</label>
		<input disabled id="firstname" name="firstname" value="<?php echo $firstname; ?>">
		<br>

		<label for="lastname">Last Name:</label>
		<input disabled id="lastname" name="lastname" value="<?php echo $lastname; ?>">
		<br>

		<label for="address1">Address Line 1:</label>
		<input disabled id="address1" name="address1" value="<?php echo $address1; ?>">
		<br>

		<label for="address2">Address Line 2:</label>
		<input disabled id="address2" name="address2" value="<?php echo $address2; ?>">
		<br>

		<label for="city">City:</label>
		<input disabled id="city" name="city" value="<?php echo $city; ?>">
		<br>

		<label for="state"> State:</label>
		<input disable name="state" id=state value="<?php echo $state; ?>"><br>

	</div>
	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">

		<br><label for="zipCode">Zip:</label>
		<input disabled id="zipCode" name="zipCode" value="<?php echo $zip; ?>">
		<br>

		<label for="phone">Phone Number:</label>
		<input disabled id="phone" name="phone" value="<?php echo $phone; ?>">

		Gender:<br>
		<label for="female">Female</label>
		<input disabled type="radio" id="female" name="gender"
				<?php if (isset($gen) && $gen=="female") echo "checked";?>
				value="female">

		<label for="male">Male</label>
		<input disabled type="radio" id="male" name="gender"
				<?php if (isset($gen) && $gen=="male") echo "checked";?>
				value="male">
		<br>

		Marital Status:<br>
		<label for="single">Single</label>
		<input disabled type="radio" id="single" name="maritalStatus"
		<?php if (isset($ms) && $ms=="single") echo "checked";?>
		value="single"><br>

		<label for="married">Divorced</label>
		<input disabled type="radio" id="married" name="maritalStatus"
	  <?php if (isset($ms) && $ms=="married") echo "checked";?>
	  value="married"><br>

		<label for="divorced">Married</label>
		<input disabled type="radio" id="divorced" name="maritalStatus"
		<?php if (isset($ms) && $ms=="divorced") echo "checked";?>
		value="divorced"><br>

		<label for="widowed">Widowed</label>
		<input disabled type="radio" id="widowed" name="maritalStatus"
		<?php if (isset($ms) && $ms=="widowed") echo "checked";?>
		value="widowed">

		<br><label for="dob">Date of Birth:</label>
		<input disabled id="dob" name="dob" value="<?php echo $dob; ?>">
		<br>

		</form>
	</body>
	<div class="footer">
				 <a href="https://www.pokemoncenter.com/?utm_source=bing&utm_medium=cpc&utm_campaign=Brand%20%7C%20
						 Core%20%7C%20Exact&utm_term=pokemon%20store&utm_content=Pokemon%20Store" target="_blank">
								<img src="pokeball.jpg" alt="pokeball"width="30" height="30"/>
									 </a>

				 <a href="https://www.pokemon.com/us/pokemon-episodes/pokemon-tv-seasons/season-1/" target="_blank">
							 Welcome to the Indigo League.
										</a>

				 <a href="http://pokemon.wikia.com/wiki/Team_Rocket" target="_blank">
								<img src="pokeball.jpg" alt="pokeball"width="30" height="30"/>
										</a>
	</div>
</html>
