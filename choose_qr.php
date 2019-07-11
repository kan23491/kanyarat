<?php
	$sql = "SELECT * from place_chomtong";

	if ($result = $conn->query($sql)) {
		while ($row = mysqli_fetch_assoc($result)) {
	?>
			
			<div style="border: 3px solid blue ; width: 240px; height: 300px; margin: 50px; float: left; padding: 10px;">
				<?php
					echo "<div id='".$row['id_place']."'></div>";
					echo $row['name'];
					echo "<br>";
					echo $row['address'];
					echo "<br>";
					echo $row['phone'];
					echo " <script>
							var qrcode = new QRCode(document.getElementById('".$row['id_place']."'), {
		      					width : 200,
		      					height : 200
		    				}); 
							qrcode.makeCode('".$row['id_place']."');
		    				</script>";
		    ?>
			</div>
			<?php
				}
				
			}
		    	?>
    		
    		
	