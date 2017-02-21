<!doctype html>
<html>
<head>
	<title>NHL Stats | Home</title>
</head>

<body>
	<ol>
	<?php
		$host = "localhost:3306";
		$username = "root";
		$password = "Ueckert1!";

		$conn = mysql_connect($host, $username, $password);

		if(!$conn)
		{
			echo "Unable to Connect";
		}else{
			echo "Connection success";
		}

		mysql_close($conn);
	?>
	</ol>	
</body>

</html>