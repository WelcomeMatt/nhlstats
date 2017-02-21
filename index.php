<!doctype html>
<html>
<head>
	<title>NHL Stats | Home</title>
</head>

<body>
	<h1>NHL STATISTICS</h1>
	<h6>Select a Team: </h6>
	<form action="team.php" method="post">
		<select name = "team">
		<?php
			$host = "localhost:3306";
			$username = "root";
			$password = "password";

			$conn = mysql_connect($host, $username, $password);

			if(!$conn)
			{
				echo "Unable to Connect";
			}else{
				echo "Connection success";
				mysql_select_db("nhl");

				$value = mysql_query("SELECT team_name FROM teams", $conn);

				$i = 1;
				while($row = mysql_fetch_array($value, MYSQL_ASSOC)){
					echo "<option value={$i}>{$row['team_name']}</option>";
					$i++;
				}
			}

			mysql_close($conn);
		?>
		</select>
		<input type="submit" name="submit" value="Enter"/>
	</form>	
</body>

</html>
