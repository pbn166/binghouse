$(document).ready(function(){
    $(".typeroom").change(function(){
        var id = $(this).val();
       
        $.post("data7.php",{id: id}, function(data){
            var addressData = JSON.parse(data); // Chuyển chuỗi JSON nhận được thành đối tượng JSON
            
            // Hiển thị thông tin địa chỉ lên các select tương ứng
            $(".num").html("<option value='" + addressData.SONGUOIOTOIDO + "'>" + addressData.SONGUOIOTOIDA + "</option>");
            $(".dt").html("<option value='" + addressData.DIENTICH + "'>" + addressData.DIENTICH + "</option>");
           
        })
        
    })
})
