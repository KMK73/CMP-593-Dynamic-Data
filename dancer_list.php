<DOCTYPE HTML>
	<head>
		<title>Dancer List</title>
	</head>

<body>

	<form action ="dancer_list.php" method="POST">
	<h1>Dancer List</h1>
	
	<h3>First Name</h3>
	<input type ="text" name="first"/>

	<br/><input type= "submit" value = "Search"/>
	</form>

	<?php

		$sql_link = new mysqli("localhost", "salsa_admin", "salsa", "salsa");

		$query = "";

		if($_POST['first']) {
			$first_name = mysqli_escape_string ($sql_link, $_POST['first']);

			$query =sprintf("SELECT * FROM dancers WHERE first_name LIKE '%%%s%%'" , $first_name);
		} else {
			$query = "SELECT * FROM dancers";

		}

		$result = mysqli_query($sql_link, $query);

	?>

	<?php foreach ($result as $row): ?>

		<h4><?php echo $row['first_name'];?></h4>
	<?php endforeach;?>


</body>
</html>