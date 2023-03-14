$(document).ready(function(){
    $(".city").change(function(){
        var id = $(".city").val();
        //alert(id);
        $.post("data.php",{id: id}, function(data){
            $(".tinh").html(data);
        })
    })
})