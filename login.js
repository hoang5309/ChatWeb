$(document).ready(function(){
    var username;
    var password;
    var nickname;
    $('.submit').click(function(){
        $.ajax({
            method: "POST",
            type: "json",
            url: "loginData.php",
            data:{
                username: $('user').val(),
                password: $('pass').val()
            },
            success:function(data){
                var jsondata = JSON.parse(data);
            }
        });
    });
})