<?php
    session_start();
    $db = mysqli_connect("localhost","root","","test");
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $sql = "SELECT * FROM user WHERE password ='$pass'";
    $result = $db-> query($sql);
    if($result-> num_rows > 0){
        while($row = $result-> fetch_assoc()){
            $data = array(
                'nickname'=> $row['nickname']
            );
            $_SESSION["nickname"] = $row["nickname"];
        }
    }
    echo json_encode($data);
?>