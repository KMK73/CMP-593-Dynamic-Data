<DOCTYPE HTML>
	<head>
		<title>Dancer Registration Form</title>
	</head>

<body>

	<?php if($_POST): ?>

	<?php 

		$sql_link = new mysqli("localhost", "salsa_admin", "salsa", "salsa");

		$first_name = mysqli_escape_string($sql_link, $_POST['first']);
		$last_name = mysqli_escape_string($sql_link, $_POST['last']);	
		$gender = mysqli_escape_string($sql_link, $_POST['sex']);
				
		$query = sprintf("INSERT INTO dancers (first_name, last_name, gender) 
				VALUES ('%s', '%s', '%s')", $first_name, $last_name, $gender);

		$result = mysqli_query($sql_link, $query);

	?>

	<h1>Dancer <?php echo $_POST ['first'];?> Registration!</h1>


	<?php else:?>

	<h1>No Dancer Provided</h1>

	<?php endif;?>




</body>
	</html>	