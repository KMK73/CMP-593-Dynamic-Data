	<?php
				$sql_link = new mysqli("localhost", "salsa_admin", "salsa", "salsa"); 

				$query = "";


				if($_GET['fname']) {
					$first_name = mysqli_escape_string($sql_link, $_GET['fname']);
					$query = sprintf("SELECT * FROM dancers WHERE first_name LIKE '%%%s%%'",$first_name);
				}

				else {
					$query = "SELECT * FROM dancers";

				}
				$result = mysqli_query($sql_link, $query);
				$json = array();
				
				foreach($result as $row) {
					$json[] = array("first_name" => $row['first_name'], "last_name" => $row['last_name']);
				}
				echo json_encode($json);
		?>
