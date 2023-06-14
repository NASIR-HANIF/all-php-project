<?php 
// use post reqest and serve reqest chech 
// echo $_SERVER['REQUEST-METHOD'];
// $username = $_POST['username'];
// $email = $_POST['email'];
// $password = $_POST['password'];

// use get reqest


// $username = $_GET['username'];
// $email = $_GET['email'];
// $password = $_GET['password'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        h2{
            padding: 5px;
            color:white;
            background-color: purple;
            text-align: center;
        }
        input{
        cursor: pointer;
        padding: 6px;
        width: 500px;

        }
    </style>
    <title>wellcome php file</title>
</head>
<body>


                    <h2>rasive data php file </h2>

            <form action="">        

            <label for="username">username</label>
            <br>
            <input type="text" value="<?php echo $username ?>">
            <br>
            <label for="email">email</label>
            <br>
            <input type="email" value="<?php echo $email ?>">
            <br>
            <label for="text password">text password</label>
            <br>
            <input type="text" value="<?php echo $password ?>">
            </form>
</body>
</html>