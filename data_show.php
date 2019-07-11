<style>
	table{
		/*border: 1px solid black;*/
		text-align: center;
		width: auto;
		font-size: 16px;


	}
	td{
		padding: 3px;
	}
</style>
<?php

	$sql="
	SELECT 
	c.created,
	c.description,
	c.name,
	m.firstname,
	m.position
	FROM `checkin` c 
	left join member_police m on c.checkinby = m.id_member
	left join place_chomtong p on c.id_place = p.id_place
	";

	$data = $conn->query($sql);
	echo "<center>";
	echo "<h1>ตรวจสอบข้อมูล</h1>";
	echo "<table border='1'>
		<tr>
			<td>สถานที่</td>
			<td>วันที่</td>
			<td>ชื่อ</td>
			<td>ตำแหน่ง</td>
			<td>คำอธิบาย</td>

		</tr>";
	
	while ($row = $data->fetch_assoc()) {
		echo "<tr>
					<td>".$row['name']."</td>
					<td>".$row['created']."</td>
					<td>".$row['firstname']."</td>
					<td>".$row['position']."</td>
					<td>".$row['description']."</td>
			</tr>";

	}

	echo "</table>";
	echo "</center>";
?>
