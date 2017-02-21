<!doctype html>
<html>
<head>
	<?php
		$host = "localhost:3306";
		$username = "root";
		$password = "Ueckert1!";

		$conn = mysql_connect($host, $username, $password);
		$teamID = $_POST['team'];

		if(!$conn)
		{
			echo "Unable to Connect";
		}else{
			mysql_select_db("nhl");

			$value = mysql_query("SELECT team_name FROM teams WHERE team_id=$teamID", $conn);
		

			while($row = mysql_fetch_array($value, MYSQL_ASSOC)){
				$teamName = $row['team_name'];
			}
		
			echo "<title>" . $teamName . " | Statistics</title>";
		}
	?>
	<link href="./team.css" type="text/css" rel="stylesheet"/>
</head>
	<h1><?php echo $teamName; ?></h1>

	<div>
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
			<tr>
			<tr>
			<?php
				$value = mysql_query("SELECT * FROM teams WHERE team_id=$teamID", $conn);

				while($row = mysql_fetch_array($value, MYSQL_ASSOC)){
					foreach ($row as $col){
						echo "<td>$col</td>";
					}
				}
				mysql_close($conn);
			?>
			</tr>
		</table>
		<script type="text/javascript">
			function compareVal(attribute) {
				
			}
		</script>
	</div>
<body>
</body>
</html>