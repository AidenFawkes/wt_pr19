<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>
    <?php
    $username = "Manu";
    $password = "Math$135";
    $conn = new mysqli("localhost",$username,$password,"Games");
    $user_values = $_POST['values'];
    $user_values = explode(",",$user_values);
    $result = array();
    function distance($user_vals , $rows){
        return pow($user_vals[0]-$rows[1],2) +pow($user_vals[1]-$rows[2],2) +pow($user_vals[2]-$rows[3],2) +pow($user_vals[3]-$rows[4],2) +pow($user_vals[4]-$rows[5],2);
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
            $dist = distance($user_values,$rows);
            array_push($final,$dist);
            array_push($data,$rows);
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