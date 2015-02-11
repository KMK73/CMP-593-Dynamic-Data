<DOCTYPE HTML>
	<head>
		<title>Peak 360 Athlete Registration</title>
	</head>

<body>

	<?php if($_POST): ?>

	<?php 

		$sql_link = new mysqli("localhost", "peak_admin", "peak", "peak360");

		$first_name = mysqli_escape_string($sql_link, $_POST['first']);
		$last_name = mysqli_escape_string($sql_link, $_POST['last']);
		$password = mysqli_escape_string($sql_link, $_POST['password']);
		$address = mysqli_escape_string($sql_link, $_POST['address']);
		$city = mysqli_escape_string($sql_link, $_POST['city']);
		$state = mysqli_escape_string($sql_link, $_POST['state']);
		$zipcode = mysqli_escape_string($sql_link, $_POST['zipcode']);
		$height = mysqli_escape_string($sql_link, $_POST['height']);
		$user_weight = mysqli_escape_string($sql_link, $_POST['weight']);
		$gender = mysqli_escape_string($sql_link, $_POST['gender']);
				
		$query = sprintf("INSERT INTO users (first_name, last_name, password, address, city, state, zipcode,
			height, user_weight, gender) VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%d','%d', '%d', '%s')", 
			$first_name, $last_name, $password, $address, $city, $state, $zipcode, $height, $user_weight, $gender);

		$result = mysqli_query($sql_link, $query);
		// echo $query;
	?>

	<h1>Athlete <?php echo $_POST ['first'];?> Registered!</h1>


	<?php else:?>

	<h1>No Dancer Provided</h1>

	<?php endif;?>




</body>
	</html>	