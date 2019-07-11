
<meta charset="utf-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>

<script>

      $(function() { // document ready

      $('#calendar').fullCalendar({
        
        schedulerLicenseKey: 'GPL-My-Project-Is-Open-Source',//ระบุ license ว่าเราใช้งาน license ประเภทใด
    
        header: {
          left: ' prev,next',
          center: 'title',
          right: 'month'
        },
        events: { 
          url: 'load.php?events', 
        },
        eventClick: function(events){
            alert("รายละเอียด: " + " " + events.title + " | " + "สถานที่: " + " " + events.place + " | " +"เจ้าหน้าที่: " + " " + events.police + " " + events.event + " | " +  "เวลา:" + " " + events.time);
        },
      });





    });

    

</script>
<style>
  body {
       /* margin: 0;
        padding: 0;*/
        font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
        font-size: 16px;

    }
 
    #calendar {
        max-width: 60%;
        margin: 20px auto;
      
    }
    h1{
      margin-top: 10px;
      font-size: 30px;
    }
    @media only screen and (max-width: 768px) {
      #calendar {
        max-width: 90%;
        margin: 20px auto;
        /*border: 1px solid black;*/
      }
    }

</style>
<body>
  <form action="" method="post">
    <h1 align="center">ปฎิทินกิจกรรม </h1>
    <input type="hidden" name="action" value="addcalendar">
    <div id='calendar'></div> 
    
</form>
</body>

