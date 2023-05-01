<?php
     include './config/config.php';
     $khutro = $_POST['id1'];
     $typeroom = $_POST['id2'];
    
     
     $sql1="select* from phong as a, loaiphong as b, khutro as c where a.ID_LP = b.ID_LP and a.ID_KHUTRO = c.ID_KHUTRO and b.ID_LP='$typeroom' and c.ID_KHUTRO='$khutro';

     ";
     $query1 = mysqli_query($conn,$sql1);
     
     $num1 = mysqli_num_rows($query1);
     
     
     if($num1>0){
        while($row1 = mysqli_fetch_array($query1)){

        
     


?>
    <option value='<?php echo $row1['STT'] ?>'><?php echo $row1['TENPHONG'] ?></option>
<?php 
        }
     }
     

     

    
?>

