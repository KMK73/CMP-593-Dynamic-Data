<DOCTYPE HTML>
	<head>
		<title>Super Awesome Form</title>
	</head>

<body>

	<form action ="week3.php" method="POST">
	<h1>How Many People Do You Want to Create?</h1>
	<input type ="number" name="amount"/>
	<input type= "submit" value = "generate"/>
	</form>


		<?php

		$first_names = ["John", "Sally", "Sevika", "Kelsey", "Lauren", "Nic", "Andre", "Rufus", "Gregory"];

		$last_names = ["Bixby", "Wilson", "Martinez", "Hogan"];

		$sql_link = new mysqli("localhost", "salsa_admin", "salsa", "salsa");

		if($_POST) {

			$number_to_create = $_POST["amount"];

			for ($i =0; $i < $number_to_create; $i++){
				$first_name = $first_names[rand(0, count($first_names)-1)];
				$last_name = $last_names[rand(0, count($last_names)-1)];
				echo "<h4>".$first_name . " " . $last_name . "</h4>";

				$gender = "M";
				if (rand(0,1) ==0) {
					$gender = "F";
				}

				$query = sprintf("INSERT INTO dancers (first_name, last_name, gender) 
					VALUES ('%s', '%s', '%s')", $first_name, $last_name, $gender);
				
				$result = mysqli_query($sql_link, $query);
			}
		}


		?>

	</body>
</html>