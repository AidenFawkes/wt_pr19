<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>
    <?php
    $username = "id11658970_manu";
    $password = "Math$135";
    $conn = new mysqli("localhost",$username,$password,"id11658970_games");
    $user_values = $_POST['$values'];
    $user_values = explode(",",$user_values);
    foreach($user_values as $x){
        $x = $x +0;
    }
    $result = array();
    function distance($user_vals , $rows){
        return pow($user_values[0] - $rows[1])+pow($user_values[1] - $rows[2])+pow($user_values[2] - $rows[3])+pow($user_values[3] - $rows[4])+pow($user_values[4] - $rows[5]);
    }
    function kNearest($final){
        $min = $final[0];
        $j = 0;
        $k = 0 ;
        foreach($final as $x){
            if($x<$min){
                $min = $x;
                $k = $j;
            }
            $j =$j +1;
        }
        return $k;

    }
    if($conn){
        $dist = 0;
        $final = array();
        $data = array();
        while($rows = $conn->query("SELECT * FROM Game")){
            $arr = mysqli_fetch_array($rows);
            $dist = distance($user_values,$arr);
            array_push($final,$dist);
            array_push($data,$arr);
        }
        for($i = 0; $i<5;$i++){
        $k = kNearest($final);
        array_push($result,$data[$k]);
        $data = array_diff($data,$data[$k]);
        $final = array_diff($final,$final[$k]);
        }
        echo $result;
        //array_diff

    }
?>
</body>
</html>