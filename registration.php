<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<form method="post" action="post_reg.php">
		<table border="1">
			   <tr><td>Name</td><td><input type="text" name="name" required></td></tr>
			<tr><td>Gender</td><td><input type="radio" name="gender" value="male">Male
				<input type="radio" name="gender" value="female">Female</td></tr>
			 <tr><td>Phone number</td> <td><input type="text" name="phone" required></td></tr>
	           <tr><td> Email</td><td><input type="email" name="email" required></td></tr>
	          
	           <tr><td>Date of birth</td><td><input type="date" name="dob" required></td></tr>
	           <tr><td>Address</td><td><input type="text" name="address" required></td></tr>
	           <tr><td>Pin code</td><td><input type="text" name="pincode" required></td></tr>
			   <tr><td>Password</td><td><input type="password" name="password" required></td></tr>
			<tr><td>Confirm password</td><td><input type="password" name="password" required></td></tr>
			<tr><td><input type="submit" value="registration"></td></tr>
	
		</table>
	</form>
</body>
</html>