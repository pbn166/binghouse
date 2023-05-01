$(document).ready(function(){
    $(".khutro").change(function(){
        var id = $(this).val();
        $.post("data3.php",{id: id}, function(data){
            var addressData = JSON.parse(data); // Chuyển chuỗi JSON nhận được thành đối tượng JSON
            
            // Hiển thị thông tin địa chỉ lên các select tương ứng
            $(".address").html("<option value='" + addressData.SONHA + "'>" + addressData.SONHA + "</option>");
            $(".tinh").html("<option value='" + addressData.ID_TINH + "'>" + addressData.TENTINH + "</option>");
            $(".huyen").html("<option value='" + addressData.ID_HUYEN + "'>" + addressData.TENHUYEN + "</option>");
            $(".xa").html("<option value='" + addressData.ID_XA + "'>" + addressData.TENXA + "</option>");
        })
        
    })
})
