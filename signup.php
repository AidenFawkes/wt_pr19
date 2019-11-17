<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>
<?php
    $username = "Manu";
    $password = "Math$135";
    $conn = new mysqli("localhost",$username,$password,"Games");
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $sql = "INSERT INTO users(usname,pass) VALUES('$user','$pass')";
    if($conn){
            $res = $conn->query($sql);
            if($res == 1){
                echo "success";
            }
        
    }


?>
</body>
</html>