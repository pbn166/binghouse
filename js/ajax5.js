$(document).ready(function(){
    $(".khutro,.typeroom").change(function(){
        var khutro = $(".khutro").val();
        var typeroom = $(".typeroom").val();
        $.post("data5.php",{id1: khutro, id2:typeroom}, function(data){
            $(".room").html(data);
           
        })
    })
})


