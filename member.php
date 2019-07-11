<title>สมาชิก</title>
		
<?php
			
			$sql = "SELECT * FROM member_police ORDER BY id_member_position ASC";
			echo "
				<div style='width: 100%'>
					<center>
						<table>
							<tr>
						";	
			// ;
			$level = 1;
			$col = 1;

			if ($result = $conn->query($sql)){
				while ($row = mysqli_fetch_assoc($result)){
					if ($level != $row['id_member_position']) {
						$level = $row['id_member_position'];
						echo '
							</tr>
						</table>
						<div style="clear: both;"></div>
					</center>
					<center>
						<table>
							<tr>';
					}
					if($col%3==0){
						echo '</tr><tr>';
					}
					echo '<td>';
			?>					
				
					<center>
						<img src="myfile/<?php echo $row['id_member'];?>.jpg" style='width:200px; height:200px;'><br>
						<?php echo $row['position']; ?><br>
						<?php echo $row['firstname'];?>
					</center>
					</td>	
			<?php
		}
				echo '
					</center>
				</div>';
		
			}else{
				echo "0 results";
			}
mysqli_close($conn);
?>