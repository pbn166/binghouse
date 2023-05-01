<?php
     include './config/config.php';
     $room = $_POST['id1'];
     $tentinh = $_POST['id2'];
     $city = $_POST['id3'];
     $tinh = $_POST['id4'];
     //$sql = "select * from giathuephong  where ID_LP = '$room' and ID_TINH = '$tentinh' and ID_HUYEN = '$city' and ID_XA = '$tinh'";
     $sql1="SELECT DISTINCT e.GIA
     FROM loaiphong as a, tinh as b, huyen as c, xa as d, giathuephong as e, khutro as g
     WHERE e.ID_KHUTRO = g.ID_KHUTRO
     and e.ID_LP=a.ID_LP
     and d.ID_HUYEN = c.ID_HUYEN
     and g.ID_XA = d.ID_XA
     and b.ID_TINH = c.ID_TINH
     and a.ID_LP = $room and b.ID_TINH = $tentinh and c.ID_HUYEN = $city and d.ID_XA = $tinh
     ";
     $query1 = mysqli_query($conn,$sql1);
     
     $num1 = mysqli_num_rows($query1);
     
     
     if($num1>0){
        while($row1 = mysqli_fetch_array($query1)){

        
     


?>
    <option value='<?php echo $row1['GIA'] ?>'><?php echo $row1['GIA'] ?></option>
<?php 
        }
     }
     

     

    
?>

