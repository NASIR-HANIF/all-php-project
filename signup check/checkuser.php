<?php 
$db = new mysqli('localhost','root','','user_information');

if($db -> connect_error){
    echo 'database not connect';
}else{
    if($_SERVER['REQUEST_METHOD'] == "POST"){
    
        $username = $_POST['username'];
        
    }

    $checkUser = "SELECT username FROM users WHERE username = '$username'";
    $response = $db ->query($checkUser);
    if($response -> num_rows != 0){
        echo 'data found';
    }else{
        echo 'user not matched';
    }
}


?>