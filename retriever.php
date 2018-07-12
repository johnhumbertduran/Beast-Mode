

<style>
tr{
	text-align:center;
}

tr:hover{
	font-weight:bold;
	font-size:1.2em;
	color:#0f0;
}

.breakTr:hover{
	font-size: 1em;
	color:#fff;
}
</style>
                
                <table width="100%" style="padding-left:10%; display:none;" id="myTbl">
					<tr class="breakTr"><td width="10%"><h3>Name</h2></td><td width="10%"><h3>Score</h3></td></tr>
					<hr id="hr2" style="width:100%;display:none;">
				
				<?php
        include("connections.php");

					$retrieve_query = mysqli_query($connections, "SELECT * FROM scoretbl ORDER BY score DESC LIMIT 20");

					while($rowScore = mysqli_fetch_assoc($retrieve_query)){

						$db_name = $rowScore["playerName"];
						$db_score = $rowScore["score"];

						echo "
						
						<tr><td style='text-align:left;'>$db_name</td><td>$db_score</td></tr>

						";
					}
				?>

				</table>