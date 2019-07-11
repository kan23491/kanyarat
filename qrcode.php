<style>
    
     button{
        margin-top: 10px; 
        margin-left: 5px;
      }

      #bor{
        border: 2px solid #000; 
        border-radius: 5px; 
        width: 245px; 
        margin-top: 20px;
      }
      #shop{
        margin-top: 10px; 
        margin-left: 20px;
      }
    
    @media only screen and (max-width: 768px) {


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

        input[type=text] {
          width: 200px;
          padding: 12px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
      }
     /* button{
        margin-top: 10px; 
        margin-left: 75px;
      }*/

      #bor{
        border: 2px solid #000; 
        border-radius: 5px; 
        width: 245px; 
        margin-top: 20px;
      }
      #shop{
        margin-top: 10px; 
        margin-left: 20px;
      }
    }
</style>
  
              <center>
               
                    <table>
                      <caption style="color: black;"><h3>สร้าง QR Code</h3></caption>
                      <tr>
                        <td><label for="password">ร้าน</label></td>
                        <td><input  type="text" class="validate" id="mapo"></td>
                      </tr>
                      <tr>
                        <td><label for="email">ที่อยู่</label></td>
                        <td><input  type="text" class="validate" id="mact"></td>
                      </tr>
                     <tr>
                        <td><label for="email">เบอร์</label></td>
                        <td> <input type="text" class="validate" id="number"></td>
                      </tr>
                    <tr>
                        <td><label for="email">ละติจูด</label></td>
                        <td><input type="text" class="validate" id="latitude"></td>
                      </tr>
                      
                     <tr>
                        <td> <label for="email">ลองติจูด</label></td>
                        <td><input type="text" class="validate" id="longtitude"></td>
                      </tr>
                      <tr>
                        <td colspan="2">
                          <button id="btntaoma">สร้าง Qr Code</button>
                        </td>
                      </tr>
                    </table>
                    <div class="col s12" id="printQR" >
                      <div id="bor">
                      <div id="qrcode" class="qrcode" style="margin-top: 10px; margin-left: 20px;">
                      </div>
                      
                        <div id="shop">
                          <p id="lblmapo">ร้าน: </p>
                          <p id="lblmact">ที่อยู่: </p>
                        </div>
                      </div>
                    </div>
                    <button class="waves-effect waves-light btn green no-print" id="btnin">
                      <i class="material-icons left">print</i></button>
                
                </center>
<script>
    var qrcode = new QRCode(document.getElementById("qrcode"), {
      width : 200,
      height : 200
    });

    function makeCode() {    
      var mapo = $("#mapo").val();      
      var mact = $("#mact").val();      
      var latitude = $("#latitude").val(); 
      var number = $("#number") .val();
      var longtitude = $("#longtitude").val();  
      if (mapo != '' && mact != '' && latitude != '' && longtitude !='' && number !='') {
        $.post("add_place.php",
        {
          name: mapo,
          address: mact,
          latitude:latitude,
          phone:number,
          longtitude:longtitude

        },function(data){
          //alert(data);
          qrcode.makeCode(data);
         // console.log(data);
        });
      }  
      //var elText = mapo + '|' + mact + '|' + soluong;
      //qrcode.makeCode(elText);
    }

    makeCode();

    $("#btntaoma").
      on("click", function () {
        makeCode();
         //lấy thông tin
        $("#lblmapo").empty();
        $("#lblmact").empty();
        // $("#lblsoluong").empty();
        var mapo = $("#mapo").val();
        $("#lblmapo").text("ร้าน: " + mapo);
        var mact = $("#mact").val();
        $("#lblmact").text("ที่อยู่: " + mact);
        // var soluong = $("#soluong").val();
        // $("#lblsoluong").text("พิกัด: " + soluong);
      }).
      on("keydown", function (e) {
        if (e.keyCode == 13) {
          makeCode();
        }
      });  
   
    $("#btnin").click(function(event) {
        var printContents = document.getElementById("printQR").innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    });
  </script>
  
