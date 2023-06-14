<?php

// $_SERVER['REQUEST_METHOD'] ye function pagepe aney wali request
// ko check karta hey kehhh request jo page pe aye hey post hey ya get


if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $useremail = $_POST['email'];
    $password = $_POST['password'];
} else {

    echo "please post request sent";
};

echo $useremail . "<br>";
echo $password;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <style>
        h2 {
            padding: 5px;
            color: white;
            background-color: "blue";
            text-align: center;
        }

        input {
            cursor: pointer;
            padding: 6px;
            width: 500px;

        }
    </style>
</head>

<body>

    <h1>php self me form me action </h1>
    <h1>self request php  $_SERVER['PHP_SELF']   page form</h1>

    <form action="<?php echo $_SERVER['PHP_SELF']?>"  method="POST">

        <label for="email">email</label>
        <br>
        <input type="email" name="email">
        <br>
        <label for="password">password</label>
        <br>
        <input type="password" name="password">
        <br>
        <br>
        <input type="submit" value="submit">

    </form>


</body>

</html>