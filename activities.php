
<center>
	<form action="" method="post" id="activities">
		<!-- <input type="hidden" name="action" value="addactivities"> -->
		<caption><h3>กิจกรรมพิเศษ</h3></caption>
		
		<table>
			
			<tr>
				<td><label>วันที่เริ่ม</label></td>
				<td><input type="date" name="from_date" id="start"></td>
			</tr>
			<tr>
				<td><label>วันสุดท้าย</label></td>
				<td><input type="date" name="to_date" id="to"></td>
			</tr>
			<tr>
				<td><label>เวลาเริ่ม</label></td>
				<td><input type="time" name="created" id="time"></td>
			</tr>
			<tr>
				<td>รายละเอียด</td>
				<td><textarea name="description" id="text"></textarea></td>
			</tr>
			<tr>
				<td>กำลังเจ้าหน้าที่</td>
				<td><select name="eventtype">
						<option value="ทั้งหมด">ทั้งหมด</option>
						<option value="บางส่วน">บางส่วน</option>
						<option value="ตรวจสถานที่พิเศษ">ตรวจสถานที่พิเศษ</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>เจ้าหน้าที่</td>
				<td><input type="text" name="place_name"></td>
				<td><input type="hidden" name="status"></td>
			</tr>
			<tr>
				<td>สถานที่</td>
				<td><input type="text" name="id_place"></td>
				
			</tr>
			<tr>
				<td>ละติจูด</td>
				<td><input type="text" name="latitade"></td>
			</tr>	
			<tr>
				<td>ลองติจูด</td>
				<td><input type="text" name="longtitade"></td>
			</tr>
		</table>
			
	
		<br>
		<input type="submit" value="เพิ่มกิจกรรม" id="add">
	</form>
</center>
