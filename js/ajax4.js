$(document).ready(function(){
    $(".khutro").change(function(){
        var id = $(this).val();
        $.post("data4.php",{id: id}, function(data){
            $(".typeroom").html(data);
        })
        
    })
})
