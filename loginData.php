<?php
    session_start();
    $db = mysqli_connect("localhost","root","","test1");
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $sql = "SELECT * FROM user WHERE password ='$pass'";
    $result = $db-> query($sql);
    if($result-> num_rows > 0){
        while($row = $result-> fetch_assoc()){

        }
    }
?>