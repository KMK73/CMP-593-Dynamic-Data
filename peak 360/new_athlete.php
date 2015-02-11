<DOCTYPE HTML>
	<head>
		<title>Peak Athlete Registration Form</title>
	</head>

<body>

	<form action ="peak_registration.php" method="POST">
	<h1>Athlete Registration</h1>
	
	<h3>First Name</h3>
	<input type ="text" name="first"/>
	<h3>Last Name</h3>
	<input type= "text" name= "last"/>

	<h3>Password</h3>
	<input type= "password" name= "Password"/>

	<h3>Address</h3>
	<input type= "text" name= "address"/>

	<h3>City</h3>
	<input type= "text" name= "city"/>

	<h3>State</h3>
	<input type= "text" name= "state"/>

	<h3>Zipcode</h3>
	<input type= "text" name= "zipcode"/>

	<h3>Height (in)</h3>
	<input type= "text" name= "height"/>

	<h3>Weight (lbs)</h3>
	<input type= "text" name= "weight"/>
	
	<h3>Gender</h3>
	<input type = "radio" name="sex" value= "M" checked> Male
	<input type = "radio" name="sex" value= "F" > Female

	<br/><input type= "submit" value = "Register"/>
	</form>

</body>
</html>