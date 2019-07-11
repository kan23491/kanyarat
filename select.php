<?php

	$sql = "SELECT * FROM special";

	$result = $conn->query($sql);
	while ($row = $result) {
		echo "<tr>
				<td>".$row['from_data']."</td>
				<td>".$row['to_data']."</td>
				<td>".$row['created']."</td>
				<td>".$row['eventtype']."</td>
				<td>".$row['id_place']."</td>
				<td>".$row['place_name']."</td>
				<td>".$row['description']."</td>
			</tr>
		";
	}

?>