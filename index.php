<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>exercice3</title>
	</head>

	<body>
		<form action="display.php" method="post">
			Username: <input type="text" name="username" placeholder="enter name" required/><br/><br/>
			Select your favourite colors:<br/>
			Red<input type="checkbox" name="list[]" value="red"/><br/>
			Blue<input type="checkbox" name="list[]" value="blue"/><br/>
			Green<input type="checkbox" name="list[]" value="green"/><br/>
			Yellow<input type="checkbox" name="list[]" value="yellow"/><br/>
			Pink<input type="checkbox" name="list[]" value="pink"/><br/>
			Black<input type="checkbox" name="list[]" value="black"/><br/>
			White<input type="checkbox" name="list[]" value="white"/><br/><br/>
			<input type="submit" name="submit" value="Submit"/><br/>
		</form>
	</body>
</html>
