$(document).ready(function(){
    var nickname;
    $('.submit').click(function(){
        $.ajax({
            method: "POST",
            type: "json",
            url: "loginData.php",
            data:{
                username: $('.user').val(),
                password: $('.pass').val()
            },
            success:function(data){
                var jsondata = JSON.parse(data);
                nickname = jsondata['nickname'];
                console.log(nickname);
                $('.welcome').text('nickname');
                window.location = "chat.php";
            }
        });
    });
})