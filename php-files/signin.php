<?php


$db = new mysqli('localhost','root','','user_information');

if ($db -> connect_error){
    echo 'database not connected';
}else{
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = $_POST['signin'];
        $password = $_POST['signinpas'];
    }
$usernameCheck = "SELECT username FROM users WHERE username = '$username'";

$response = $db -> query($usernameCheck);

if($response -> num_rows == 1){
    $checkpassword = "SELECT password FROM users WHERE password = '$password'";
    $responsepassword =  $db -> query($checkpassword);
   
    if($responsepassword -> num_rows == 1){
     echo 'sign in successful';
    }else{
        echo 'password not matched';
    }

}else{
    echo 'user name  not matched';
}
}



?>