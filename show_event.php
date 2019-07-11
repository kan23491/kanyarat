<?php
include 'connect.php';
	$sql = "SELECT * FROM notify_event  ORDER BY description LIMIT  1 ";
	$resutl = $conn->query($sql);
	echo "<h2>แจ้งเหตุ</h2>";
	$data = $resutl->fetch_assoc();
	if ($data['report_member'] != ' ') {
		echo "
		<table border = '1' style='margin: 10px;'>
			<tr>
				<td>วันเเวลาเกิดเหตุ:</td>
				<td>'".$data['created']."'</td>
			</tr>
			<tr>
				<td>รายละเอียดที่เกิดเหตุ: </td>
				<td> '".$data['description']."'</td>
			</tr>
			<tr>
				<td>สถานที่เกิดเหตุ: </td>
				<td> '".$data['id_place']."'</td>
			</tr>
			<tr>
				<td>ผู้แจ้ง:</td>
				<td> '".$data['report_member']."'</td>
			</tr>
			<tr>
				<td>เบอร์ติดต่อ:</td>
				<td> '".$data['phone']."'</td>
			</tr>
		</table>";
		
	}

    
	
?>
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>    
 <script type="text/javascript"> 
$(function(){
    $(".show_box").click(function(){
        $("#overlay").fadeToggle("",function(){ // แสดงส่วนของ overlay
            $(".msg_show").slideToggle("",function(){ // แสดงส่วนของ เนื้อหา popup
                
                if($(this).css("display")=="block"){        // ถ้าเป็นกรณีแสดงข้อมูล 
                //
                 $.post("show_event.php",{},function(data){
                     $(".msg_data").html(data);
                 });
                } 
            });

        });
    });

    $("#overlay").click(function(){
        $(".msg_show").hide();
        $("#overlay").hide();
    });
}); 
 </script> -->
<!-- <div class="msg_show">
<a class="show_box" href="javascript:void(0);">Close</a>
<div class="msg_data"> 
เนื้อหาใน popup message
</div>
</div> -->
<!-- <div id="overlay"></div>
<style type="text/css">  
 html {   
        height: 100%;   
        }   
body {   
    background: #FFF;   
    padding: 0;   
    margin: 0;   
    width: 100%;   
    height: 100%;  
 }  
#overlay {   
    background:#000;
    width:100%;
    height:100%;
    z-index:80000;
    top:0px;
    left:0px;
    position:fixed;
    opacity: .5;   
    filter: alpha(opacity=50);   
    -moz-opacity: .5;  
    display:none;
}   
.msg_show{
    position:fixed;
    z-index:90000;
    margin:auto;
    width:300px;
    height:300px;
    top: 50%;
    left: 50%;
    margin-top: -100px;
    margin-left: -250px;
    border-radius: 36px 36px 36px 36px;
    -moz-border-radius: 36px 36px 36px 36px;
    -webkit-border-radius: 36px 36px 36px 36px;
    border: 0px solid #000000;  
    background-color:#FFFFFF;
    text-align:center;
    display:none;
}
</style>  -->
