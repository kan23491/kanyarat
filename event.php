
</style>
	<form action="" method="post"  style="margin: 10px;" id="event">
		<input type="hidden" name="action" value="addevent">
	<table>
	<tr>
		<td>เวลาเกิดเหตุ</td>
		<td><input type="datetime-local" name="created"></td>
	</tr>
	<tr>
		<td>รายละเอียดการเกิดเหตุ</td>
		<td><input type="text" name="description"></td>
	</tr>
	<tr>
		<td>สถานที่เกิดเหตุ</td>
		<td><input type="text" name="id_place"></td>
	</tr>
	<tr>
		<td>ผู้แจ้งเหตุ</td>
		<td><input type="text" name="report_member"></td>
	</tr>
	<tr>
		<td>เบอร์ผู้ติดต่อ</td>
		<td><input type="text" name="phone"></td>
	</tr>
	</table>
	<button onclick="myFunction()">บันทึก</button>
	

<script>
	function myFunction(){
		alert("บันทึกเรียบร้อย")
	}
	
</script>
	
