<?php
     include './config/config.php';
     $key = $_POST['id'];
     $sql = "select * from xa where ID_HUYEN = '$key'";
     $query = mysqli_query($conn,$sql);
     $num = mysqli_num_rows($query);
     
     if($num>0){
        while($row = mysqli_fetch_array($query)){

        
     



?>
    <option value='<?php echo $row['ID_XA'] ?>'><?php echo $row['TENXA'] ?></option>
<?php 
        }
     }
    
?>