$(document).ready(function(){
$("#updateForm").on('submit',function(event){
    event.preventDefault();
    var form 	= $(this);
    var data	= form.serialize();
    $.ajax({
        type	: "POST",
        url		: '../config/route.php?ref=updateUser&user_id=' + user_id,
        data	: data,
    }).success(function(data){
    alert(data);
    });

});
});