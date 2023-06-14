<?php

// EMPTY VALUE CHECK empty() ya ! empty()

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $useremail = $_POST['email'];
    $password = $_POST['password'];

if(!empty($useremail)){
    
    echo "<h2>  avalabel user ". $useremail. "</h2> <br>";
}else{

    echo " <h2> user is empty </h2> <br>"; 
}
} else {

    echo "please post request sent";
};

echo  "<h3>user email  ". $useremail . " </h3><br>";
echo  "<h3>password " . $password. " </h3><br>";
?>