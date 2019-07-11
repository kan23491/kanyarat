
<?php
include 'connect.php';
    $sql = "SELECT * FROM notify_event WHERE status = '0' ORDER BY id_notify DESC";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
        if ($row['id_place'] == '') {
            echo "<ul><li><a href = '?action=qr' onclick='javascript:void(0);clicka($row[id_notify])'>เพิ่มสถานที่</a></ul></li>";
        }elseif ($row['description'] != '') {
              echo "<ul><li><a class='show_box' href='javascript:void(0);' onclick='javascript:void(0);clicka($row[id_notify])'>สถานที่เกิดเหตุ</a></li></ul>";  
        }elseif ($row['id_place' != '']) {
           echo "<ul><li><a href = '?action=place' onclick='javascript:void(0);clicka($row[id_notify])'> การตรวจพื้นที่ </a><li></ul> ";
        }

    // echo "<input type='text' id ='notify' value ='$row[id_notify]'";
    // echo json_encode($row);
    // $UPDATE = "UPDATE notify_event SET status = '1' WHERE id_notify = '$row['id_notify']'";

?>

<!-- <script>

</script> -->
<!-- <ul><li><a class='show_box' href='javascript:void(0);'>แจ้งเหตุ</a></li></ul> -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>    
<script type="text/javascript">

function clicka(id){
     // alert (id);
     // alert("UPDATE notify_event SET status = '1' WHERE id_notify = '"+ id +"'");
    $.ajax({
            type: "POST",
            url: "update.php",
            data: {id_notify:id}
        });

}

$(function(){
    $(".show_box").click(function(){
        // alert('5');
        $("#overlay").fadeToggle("",function(){ // แสดงส่วนของ overlay
            $(".msg_show").slideToggle("",function(){ // แสดงส่วนของ เนื้อหา popup
                
                if($(this).css("display")=="block"){        // ถ้าเป็นกรณีแสดงข้อมูล 
                //
                 $.post("show_place.php",{},function(data){
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

</script>

<div class="msg_show">
    <a class="show_box" href="javascript:void(0);">Close</a>
    <div class="msg_data">
    <!-- เนื้อหาใน popup message -->
    </div>
</div>
<div id="overlay"></div>

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
</style> 
