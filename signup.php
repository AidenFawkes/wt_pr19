<!DOCTYPE html>
<html><?php
    $username = "id11658970_hks";         
    $password = "adeab";
    $conn = new mysqli("localhost",$username,$password,"id11658970_webtech");
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $sql = "INSERT INTO users(usname,pass) VALUES('$user','$pass')";
    if($conn){
            $res = $conn->query($sql);
            if($res == 1){
                echo "<script>window.location.href='https://recommendx.000webhostapp.com/account.html'</script>;";
                
            }
        
    }


?></html>
