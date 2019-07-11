<?php

	$sql = "SELECT count(id_notify) as bell FROM notify_event WHERE id_notify != '' AND status = '0'";
	$result = $conn->query($sql);
	$data = $result->fetch_assoc();
	if ($data['bell'] > 0) {
		$num = '<span class="label label-pill label-danger count" style="border-radius:10px;">'.$data["bell"].'</span> ';
	}else{
		$num = '';
	}

	// $update = "UPDATE notify_event  SET status = '1' where id_notify != '' ";
	// $query = $conn->query($update);


	
	

?>
<div id="menu_bar">
	<ul>
				<li><a href="?action=member">สมาชิก</a></li>
				<li><a href="?action=qrcode">สร้าง QR Code</a></li>
				<li><a href="?action=map">พิกัด</a></li>
				<!-- <li><a href="?action=data">เพิ่มข้อมูล</a></li> -->
				<li><a href="?action=place">ตรวจข้อมูล</a></li>
				<li><a href="?action=qr">QR Code</a></li>
				<!-- <li><a href="?action=noify">แจ้งเหตุการณ์</a></li> -->
				
				<!-- <li><a href="?action=camara">สแกน QR Code</a></li> -->
				<li><a href="?action=member_add">เพิ่มสมาชิก</a></li>
				<li><a href="?action=activities">เพิ่มกิจกรรม</a></li>
				<li><a href="?action=calendar">ปฎิทินกิจกรรมพิเศษ</a></li>
				<li></li>
				<li style="float: right; ">
					<a href="#" class="dropdown-toggle" > 
						<?php echo $num ?><span class="label label-pill label-danger count" style="border-radius:20px; font-size: 12px;"></span> 
						<span class="glyphicon glyphicon-bell" style="font-size:18px;" id="bell"></span>

					</a>
					
				</li>
      		
				<li style="float: right"><a class="active" href="logout.php">ออกจากระบบ</a></li>
	</ul>
<div class="box"></div>
</div>
<button class="menu">
	<i class="glyphicon glyphicon-th" ></i>	
</button>
<button class=noti style="margin-right: 5px; ">
	<i class="glyphicon glyphicon-bell"><?php echo $num ?></i>
	<span class="label label-pill label-danger count" style="border-radius:20px; font-size: 12px;"></span>
	<div class="mess"></div>
</button>


<div class="menuBar">
	<ul>
		<!-- <li><a href="?action=member">สมาชิก</a></li> -->
		
		<li><a href="?action=qrcode">สร้าง QR Code</a></li>
		<li><a href="?action=map">พิกัด</a></li>
		
		<!-- <li><a href="?action=data">เพิ่มข้อมูล</a></li> -->
		<!-- <li><a href="?action=place">ตรวจข้อมูล</a></li> -->
		<li><a href="?action=qr">QRCode</a></li>
		<li><a href="?action=camara">สแกน QR Code</a></li>
		<li><a href="?action=calendar">ปฎิทินกิจกรรมพิเศษ</a></li>
		<!-- <li><a href="?action=member_add">เพิ่มสมาชิก</a></li> -->
		<li><a href="?action=event">แจ้งเรื่องที่เกิดขึ้น</a></li>
		<li><a href="?action=check">พื้นที่ตรวจแล้ว</a></li>

		<li style="float: right"><a class="active" href="logout.php">ออกจากระบบ</a></li>

		
	</ul>
</div>

<div class="backTomain"></div>

<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script>
	$(".dropdown-toggle").click(function(){
		$(".box").toggle();
		$.get("notify.php",function(data){
			$(".box").html(data);
			// $(".count").hide();
		});
		
	});
    $(".noti").click(function(){
    	$(".mess").toggle();
    	$.get("notify_phone.php",function(data){
    		$(".mess").html(data);
    		$(".count").hide();

    	});
    });

    $("a").click(function(){
    	$(".count").hide(100);
    })

     

  
</script>


