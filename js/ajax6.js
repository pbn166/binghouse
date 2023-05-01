$(document).ready(function(){
    $(".khutro,.typeroom").change(function(){
        var khutro = $(".khutro").val();
        var typeroom = $(".typeroom").val();
        $.post("data6.php",{id1: khutro, id2:typeroom}, function(data){
            $(".price").html(data);
           
        })
    })
})


