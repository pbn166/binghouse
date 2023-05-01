$(document).ready(function(){
    $(".khutro,.typeroom").change(function(){
        var khutro = $(".khutro").val();
        var typeroom = $(".typeroom").val();
            // Khai báo biến phongtro để lưu giá trị của option được chọn
    var phongtro;
    
    // Lắng nghe sự kiện thay đổi trong đối tượng HTML có id là "phongtro"
    $('#phongtro').on('change', function() {
        // Lưu giá trị của option được chọn vào biến phongtro
        phongtro = $(this).val();
    });
        $.post("data5.php",{id1: khutro, id2:typeroom, id3:phongtro}, function(data){
            $(".room").html(data);
           
        })
    })
})


