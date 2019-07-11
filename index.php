<?php
	include "connect.php";
	if (isset($_POST['action']) && $_POST['action']=='checkLogin') {
		include 'login.php';
	} 
?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="decorate.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
  	<script type="text/javascript" src="js/qrcode.min.js"></script>
  	<script type="text/javascript" src="js/materialize.min.js"></script>
  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  	
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>    
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
	

	</script>
	<div class="msg_show">
	<!-- <a class="show_box" href="javascript:void(0);" >Close</a> -->
	<div class="msg_data">
	<!--เนื้อหาใน popup message-->
	</div>
	</div>
	<div id="overlay"></div>
	<style>  
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
		    width:500px;
		    height:150px;
		    top: 50%;
		    left: 50%;
		    margin-top: -100px;
		    margin-left: -250px;
		    border-radius: 36px 36px 36px 36px;
		    -moz-border-radius: 36px 36px 36px 36px;
		    -webkit-border-radius: 36px 36px 36px 36px;
		    border: 0px solid #000000;  
		    background-color:#9C9;
		    text-align:center;
		    display:none;
		}
</style> 

	<style>
		
		/*#top img{
		    	height: 100px;
		    	width: 100px;
		  	}

		  	#top {
		  		background-image: none !important;
		    	height: 100px;
		    	width: 100%;
		    	background-color: #993333;
		  	}*/
		  	select {
		  		width: 200px;
		  		padding: 10px 20px;
		  		margin:5px;
		  		border:1px solid black;
		  		
		  	}
		  	input[type=text],[type=password],[type=number],[type=email] {
				  width: 200px;
				  padding: 12px 20px;
				  margin: 8px 0;
				  display: inline-block;
				  border: 1px solid #ccc;
				  border-radius: 4px;
				  box-sizing: border-box;
			}
			input[type=submit] {
				  width: auto;
				  background-color: #DCDCDC;
				  color: black;
				  /*padding: 14px 20px;
				  margin: 8px 0;*/
				  border: none;
				  border-radius: 4px;
				  cursor: pointer;
				  /*margin-right: 100px;*/

			}
			#contain{
				position: relative;	
				height: 800px;	
			}
			button{
				width: auto;
				  background-color: #DCDCDC;
				  color: black;
				  border: none;
				  border-radius: 4px;
				  cursor: pointer;
				  /*margin-left:150px;*/
				  padding: 10px 20px;
				  /*margin-left: 200px;*/

			}

			.box {
				border: 1px solid black;
				width: 200px;
				height: 200px;
				float: right;
				display: none;

			}
			.noti{
				display: none;
			}
			
			
		@media only screen and (max-width:1200px) {
			#top img{
		    	height: 100px;
		    	width: 100px;
		  	}

		  	#top {
		  		background-image: none !important;
		    	height: 100px;
		    	width: 100%;
		    	background-color: #993333;
		  	}

		  	input[type=text],[type=password],[type=number],[type=email],select {
				  width: 200px;
				  padding: 12px 20px;
				  margin: 10px 0;
				  display: inline-block;
				  border: 1px solid #ccc;
				  border-radius: 4px;
				  box-sizing: border-box;

			}
		
			input[type=submit] {
				  width: 100px;
				  background-color: #DCDCDC;
				  color: black;
				  /*padding: 14px 20px;
				  margin: 8px 0;*/
				  border: none;
				  border-radius: 4px;
				  cursor: pointer;
				   /*float: right;*/
			}
			.menu{
				display: inline;
				width: 20px;
				height: 30px;
				float: right;
				padding: 5px 20px 5px 10px;
				
			}
			.menu i{
				color: black;
				float: left;
			
			}
			.menu button{
				width: 30px;
				height: 30px;
				margin-right: 10px;
			}
			
			#menu-bar{
				display: none;
			}
			#menu_bar ul{
				display: none;
			}

			#contain{
				position: relative;	
				height: 450px;	
			}

			.menuBar {
				display: none;
				position: fixed;
				top: 0px;
				bottom: 0px;
				right: 0px;
				width: 60%;
				background-color: #993333;
				z-index: 9999;
				padding-top: 110px
			}

			.backTomain{
				display: none;
				width: 100%
				height:100%;
				top: 0px;
				left: 0px;
				bottom: 0px;
				right: 0px;
				position: fixed;
				z-index: 9990;
				background-color: rgba(0,0,0,0.2);
			}

			.menuBar ul li{
				width: 80%;
			}

			.noti{
				display: inline;
				width: 20px;
				height: 30px;
				float: right;
				padding: 5px 20px 5px 10px;

				
			}
			.noti i{
				color: black;
				float: left;
			
			}
			.noti button{
				width: 30px;
				height: 30px;

			}
			.mess {
				border: 1px solid black;
				width: 200px;
				height: 200px;
				float: right;
				display: none;
				position: relative

			}
		
			.box{
				display: none;
			}
		
			
		}

	</style>
	<script>
		$(document).ready(function(){
		  $(".backTomain").click(function(){
		  	 $(".menuBar").hide();
		     $(".backTomain").hide();
		  });
		  $(".menu").click(function(){
		    $(".menuBar").show();
		     $(".backTomain").show();
	  	  });
	  // 	 
	  	  
		});
		
	</script>
</head> 
<body>
	<div id="top"> 
		<img src="scr/123.png" width="150px;" height="200px;">  
	</div>
	<div id="contain">
		<?php

			if (empty($_SESSION['member'])) {
				if (isset($_POST['action']) && $_POST['action']=='forget') {
					// unset($_POST);
					echo $_POST['action'];
					include 'forget.html';

				
				// }elseif ($_POST['action']=='forgetsms') {
				// 	include 'forget_select.php';
				} elseif (isset($_POST['action']) && $_POST['action']=='forgetsms') {
					include 'forget_select.php';
					echo $_POST['action'];
				}
				else{
					include 'login.html';
				}
			}else{
				include 'menu.php';
				
				
				if (isset($_REQUEST['action'])) {
					switch ($_REQUEST['action']) {
						case 'member':
							include 'member.php';
							break;
						// case 'forgetsms':
						// 	include 'forget_select.php';
						// 	break;
						case 'qrcode':
							include 'qrcode.php';
							
							break;
						case 'member_add':
							include 'member_add.html';
							break;
						case 'place':
							include 'data_show.php';
							break;
						case 'addData':
							include 'data_add.php';
							include 'checkIn.php';
							include 'data_show.php';
							break;
						
						// case 'data':
						// 	include 'checkIn.php';
						// 	// include 'data_show.php';
						// 	break;
						case 'addPolice':
							include 'member_add.php';
							include 'member.php';
							break;
						case 'qr':
							include 'choose_qr.php';
							break;
						case 'camara':
							include 'camara.html';
							break;
						case 'map':
							include 'map.html';
							break;
						case 'activities':
							include 'activities.php';
							break;		
						case 'addactivities':
							include 'add_activities.php';
							include 'calendar.php';
							// include 'place.php';
							
							break;
						case 'calendar':
							include 'calendar.php';
							break;
						case 'addcalendar':
							include 'load.php';
							// include 'spcial.php';
							break;
						case 'event':
							include 'event.php';
							break;
						case 'addevent':
							include 'add_event.php';
							include 'event.php';
							// include 'show_event.php';
							break;
						case 'check':
							include 'check.php';
							break;
						default:
							# code...
							break;
						
					}
				}else{
					// include 'member.php';
				}
				
			}
		?>
	</div>
</body>
</html>