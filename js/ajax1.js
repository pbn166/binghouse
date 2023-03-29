$(document).ready(function(){
    $(".room,.tentinh,.city,.tinh").change(function(){
        var room = $(".room").val();
        var tentinh = $(".tentinh").val();
        var city = $(".city").val();
        var tinh = $(".tinh").val();
        $.post("data1.php",{id1: room, id2:tentinh, id3:city, id4:tinh}, function(data){
            $(".price").html(data);
        })
    })
})


