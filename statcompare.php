<!doctype html>
<html>
<head>
	<title>Compare Stats</title>
	<link href="./team.css" type="text/css" rel="stylesheet"/>
</head>
<body>
	<table style="width:100%">
		<tr>
			<th>Team ID</th>
			<th>Team</th>
			<th>Division</th>
			<th>Conference</th>
			<th onclick="compareVal('wins')">W</th>
			<th>L</th>
			<th>OTL</th>
			<th>Shootout Wins</th>
			<th>Points</th>
			<th>Goals For</th>
			<th>Goals Against</th>
			<th>Goals/Game</th>
			<th>Goals Against/Game</th>
			<th>PP%</th>
			<th>PK%</th>
			<th>Shots/Game</th>
			<th>Shots Against/Game</th>
			<th>FO%</th>
		</tr>
	<?php	
		$host = "localhost:3306";
		$username = "root";
		$password = "pwd";

		$conn = mysql_connect($host, $username, $password);
		
		if(!$conn)
		{
			echo "Unable to Connect";
		}else{
			$stat = $_GET['stat'];
			$teamID = $_SESSION['team'];
			mysql_select_db("nhl");
			$value = mysql_query("SELECT * FROM teams ORDER BY $stat", $conn);

			while($row = mysql_fetch_array($value, MYSQL_ASSOC)){
				echo "<tr>";
				foreach ($row as $col){
					echo "<td>$col</td>";
				}
				echo "<tr>";
			}
		}
	?>
	</table>
</body>
</html>