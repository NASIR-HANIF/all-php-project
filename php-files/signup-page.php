<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <style>
        legend{
            padding: 5px;
            color:white;
            background-color: rgb(233, 47, 47);
            text-align: center;
        }
        input{
        cursor: pointer;
        padding: 6px;
        width: 500px;

        }
    </style>
</head>
<body>
    <div class="parent">
    
        <form action="signup.php" method="POST">
            <fieldset>
            <legend>sign up</legend>
            <label for="username">name</label>
            <br>
            <input type="text" name="name">
            <br>
            <label for="mobile">mobile</label>
            <br>
            <input type="number" name="mobile">
            <br>
            <label for="username">username</label>
            <br>
            <input type="email" name="username">
            <br>
            <label for="password">password</label>
            <br>
            <input type="password" name="password">
            <br>
            <br>
            <input type="submit" value="sign up">
            </fieldset>
        </form>
    </div>
    <!-- sign in  -->

    <div class="parent">
    
        <form action="signin.php" method="POST">
            <fieldset>
            <legend>sign in</legend>
            <label for="username">username</label>
            <br>
            <input type="email" name="signin">
            <br>
            <label for="password">password</label>
            <br>
            <input type="password" name="signinpas">
            <br>
            <br>
            <input type="submit" value="sign in">
            </fieldset>
        </form>
    </div>
</body>
</html>