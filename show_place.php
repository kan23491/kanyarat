<style>
	tr{
		margin-left: 10px;
	}
</style>
<?php
include 'connect.php';
	$sql = "SELECT * FROM notify_event WHERE report_member != '' ORDER BY description DESC ";
	$result = $conn->query($sql);
	echo "<h3>สถานที่เกิดเหตุ</h3>";
	$data = $result->fetch_assoc();
		echo "
		<center>
			<table>
				<tr>
					<th>วันเวลา:</th> 
					<td>".$data['created']."</td>
				</tr>
				<tr>
					<th>สถานที่:</th> 
					<td>".$data['id_place']."</td>
				</tr>

			</table>
		</center>
		";
?>