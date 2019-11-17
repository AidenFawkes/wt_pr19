

<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>
    <?php
    $host = 'localhost';
    $username = 'Manu';
    $password = 'Math$135';
    $dbname = 'Games';


    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);


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
        $data = "SELECT * FROM users WHERE usname='$uname'";
        $values = $conn->query($data);
        $row = $values->fetch_assoc();
        // echo $data;
        
    } 
    echo "<script> console.log($res); </script>";
    //header("Location:http://127.0.0.1/account.html");

    //echo "Hello3";
    $conn->close();
    ?>
</body>

</html>