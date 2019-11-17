<?php
    $username = "Manu";
    $password = "Math$135";
    $conn = new mysqli("localhost",$username,$password,"Games");
    $user_values = array(60,40,80,20,80,2);
    function distance($user_vals , $rows){
        return pow($user_vals[0]-$rows[1],2) +pow($user_vals[1]-$rows[2],2) +pow($user_vals[2]-$rows[3],2) +pow($user_vals[3]-$rows[4],2) +pow($user_vals[4]-$rows[5],2) +pow($user_vals[5]-$rows[6],2);
    }
    if($conn){
        $dist = 0;
        $final = array();
        while($rows = $conn->query("SELECT * FROM Game ")){
            $dist = distance($user_values,$rows);
            array_push($final,$dist);
        }
        

    }
?>