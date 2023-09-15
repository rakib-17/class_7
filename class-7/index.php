<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Abbas Ali Rakib</title>
</head>

<body>
	<h4><u> HOEM WORK 07 </u></h4>
	
	<form action="./datastore.php" method="POST">
	<table>

		<tr><td>Name: </td><td><input type="text" placeholder="enter your name" name="Name" autofocus required></td></tr>
		<tr><td>E-mail: </td><td><input type="mail" placeholder="enter your email" name="Email"></td></tr>
		<tr><td>Password: </td><td><input type="password" name="Password" pattern=[0-9]{4,7} required></td></tr>
		<tr><td>Gender: </td><td><input type="radio" name="gen">Male <input type="radio" name="gen">Female </td></tr>
        <tr><td>Address: </td><td><input type="text" name="Address"></td></tr>
		<tr><td></td><td><input type="submit" value="Register"> </td></tr>

	</table>
	</form>

</body>
</html>