<?php
include 'connect.php';
	$sql2 = "
	SELECT 
	-- s.id_special_event,
	s.description,
	s.from_date,
	s.id_place,
	s.place_name,
	s.to_date,
	s.eventtype,
	s.created
	FROM special s";
	
	$result2 = mysqli_query($conn, $sql2);

	if (mysqli_num_rows($result2) > 0) {
		
		$events = [];
		
		$i = 1;
		
		while($row = mysqli_fetch_assoc($result2)) {
			
			$start = str_replace(" ","T",$row['from_date']);

            $end = str_replace(" ","T",$row['to_date']);

			$events[] = [
			   // 'id' => $row['id_special_event'],
			   // 'resourceId' => $row['room_id'],
				
			   'start' => $start,
			   'end' => $end,
			   'title' => $row['description'],
			   'place' =>$row['id_place'],
			   'police' =>$row['place_name'],
			   'event' =>$row['eventtype'],
			   'time' =>$row['created']
            ];

            $i++;

		}
	}
	
	mysqli_close($conn);
	
	
	if(isset($_GET['events'])){
		echo json_encode($events);
	}

?>
        
           