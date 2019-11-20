

<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>
    <?php
    $host = 'localhost';
    $username = 'id11658970_hks';
    $password = 'adeab';
    $dbname = 'id11658970_webtech';


    // Create a connection
    $conn = new mysqli($host, $username, $password, $dbname);


    if ($conn->connect_error) {
        die('Connect Error (' . $conn->connect_errno . ')' . $conn->connect_error);
    }

    $uname = $_POST['username'];
    $passwd = $_POST['passwd'];
    $res  =FALSE;

    $sql = "SELECT usname, pass FROM users WHERE usname='$uname' AND pass='$passwd'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $res = TRUE;
        // echo $data;
        
        echo "<script>window.location.href='https://recommendx.000webhostapp.com/front-page.html'</script>";

        
    } 
    else{
        echo "<script>window.location.href='https://recommendx.000webhostapp.com/account.html'</script>";
    }
    

    //echo "Hello3";
    $conn->close();
    ?>
</body>

</html>