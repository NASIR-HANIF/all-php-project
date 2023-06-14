<?php 

$db = new mysqli('localhost','root','','user_information');
if($db -> connect_error){
    echo 'database not connected';
}else{
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $mobile = $_POST['mobile'];
        $username = $_POST['username'];
        $password = $_POST['password'];
    
    }
$checkuser = "SELECT username FROM users WHERE username = '$username'";
$response = $db -> query($checkuser);
if($response -> num_rows == 0){
    $insertData = "INSERT INTO users(name,mobile,username,password)VALUES('$name','$mobile','$username','$password')";
    $db -> query($insertData);
    echo 'sign up success fully';
}else{
    echo 'user already exist';
}

}

?>