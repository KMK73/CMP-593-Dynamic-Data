<DOCTYPE HTML>
	<head>
		<title>Dancer Registration Form</title>
	</head>

<body>

	<form action ="register.php" method="POST">
	<h1>Dancer Registration</h1>
	
	<h3>First Name</h3>
	<input type ="text" name="first"/>
	<h3>Last Name</h3>
	<input type= "text" name= "last"/>
	
	<h3>Gender</h3>
	<input type = "radio" name="sex" value= "M" checked> Male
	<input type = "radio" name="sex" value= "F" > Female

	<br/><input type= "submit" value = "Register"/>
	</form>

</body>
</html>