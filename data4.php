<?php
     include './config/config.php';
     $key = $_POST['id'];
     $sql = "select c.TENLOAIPHONG, c.ID_LP
     from coloaiphong as a, khutro as b, loaiphong as c
     where a.ID_KHUTRO = b.ID_KHUTRO
     and a.ID_LP = c.ID_LP
     and b.ID_KHUTRO = '$key'
     ";
     $query = mysqli_query($conn,$sql);
     $num = mysqli_num_rows($query);
     
     if($num>0){
        while($row = mysqli_fetch_array($query)){

        
     



?>
    <option value='<?php echo $row['ID_LP'] ?>'><?php echo $row['TENLOAIPHONG'] ?></option>
<?php 
        }
     }
    
?>