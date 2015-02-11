<DOCTYPE HTML>
	<head>
		<title>Athlete List</title>
	</head>

<body>

	<form action ="athlete_list.php" method="POST">
	<h1>Athlete List</h1>
	
	<h3>First Name</h3>
	<input type ="text" name="first"/>

	<br/><input type= "submit" value = "Search"/>
	</form>

	<?php

		$sql_link = new mysqli("localhost", "peak_admin", "peak", "peak360");

		$query = "";

		if($_POST['first']) {
			$first_name = mysqli_escape_string ($sql_link, $_POST['first']);
			// echo "posted first";
			$query =sprintf("SELECT * FROM users WHERE first_name LIKE '%%%s%%'" , $first_name);
		} else {
			$query = "SELECT * FROM users";

		}

		$result = mysqli_query($sql_link, $query);

	?>

	<?php foreach ($result as $row): ?>

		<h4><?php echo $row['first_name'];?></h4>
		<h4><?php echo $row['last_name'];?></h4>
		<h4><?php echo $row['height'];?></h4>
		<h4><?php echo $row['weight'];?></h4>		
		<h4><?php echo $row['gender'];?></h4>

	<?php endforeach;?>


</body>
</html>