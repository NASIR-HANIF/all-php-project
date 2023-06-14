<?php


$conn = new mysqli('localhost','root','','user_information');


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $userName = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mobile = $_POST['mobile'];

$insertData = "INSERT INTO users(username,email,password,mobile)VALUES('$userName','$email','$password','$mobile')";

if($conn -> query($insertData)){
    echo 'insert data successfully';
}else{
  $creatTable = "CREATE TABLE users(
username VARCHAR(55),
email VARCHAR(55),
password VARCHAR(55),
mobile VARCHAR(55)

  )";

  if($conn -> query($creatTable)){

    if($conn -> query($insertData)){
        echo 'creat table and insert data';
    }else{
        echo 'not creat table ,no insert data';
    }
    

  }else{
    echo 'unable creat table';
  }


}
}
