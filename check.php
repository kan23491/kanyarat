<style>
    table{
        /*border: 1px solid black;*/
        text-align: center;
        width: auto;
        font-size: 16px;
    }
    td,th{
        padding: 5px;

    }
</style>

<?php
// include 'connect.php';
   
    $sql = "SELECT created,name FROM checkin WHERE date(created) = curdate()";
  
    // $sql = "SELECT c.name,c.created,p.name FROM checkin c 
    // INNER JOIN place_chomtong p ON c.id_place = p.id_place 
    //  ";
    $query = $conn->query($sql);
    echo "<center>";
    echo "<h3>ตรวจสถานที่</h3>";
    echo "<table border = '1'>
            <tr>
                <th>สถานที่</th>
                <th>วัน/เวลา</th>
                <th>ตรวจแล้ว</th>  
            </tr>
    ";

    while ( $data = $query->fetch_assoc()) {
        if ($data['name'] == $data['name'])  {
            
            echo "<tr>
             <td>".$data['name']."</td>
             <td>".$data['created']."</td>
             <td><input type ='checkbox' checked></td>

            </tr>";
        }    
    }
    
    echo "</table>";
    echo "</center>";
?>

