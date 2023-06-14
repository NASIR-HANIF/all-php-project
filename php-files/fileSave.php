<?php

$db = new mysqli("localhost","root","","user_information");


if($db ->connect_error){
    echo "database not connected";
}else{
    $file = $_FILES['photo'];  // file ko reseve kia

    // print_r kerke file ki location access ke ke vareable me di 
    $location = $file['tmp_name'];
   
    // is location se jo file hey us ko encodeded string me access karey ga
   
   //  print_r(file_get_contents($location));
   $photo = file_get_contents($location);

   $get_table = "SELECT * FROM photo";  // database me table ko talash karen gey
   $response = $db ->query($get_table);
   if($response){
    $insert_data = "INSERT TABLE photo(photo)VALUES('$photo')";
    if($db ->query($insert_data)){
        echo "data inserted";
    }else{
        echo "data not inserted";
    }
   }else{
     $creat_table = "CREATE TABLE photo(
        id INT(11)NOT NULL AUTO_INCREMENT,  
        photo MEDIUMBLOB,
        PRIMARY KEY(id)                            
        
        )";
        if($db ->query($creat_table)){
            $insert_data = "INSERT TABLE photo(photo)VALUES('$photo')";
            if($db ->query($insert_data)){
                echo "data inserted";
            }else{
                echo "data not inserted";
            }
        }else{
            echo "unable to create table";
        }
   }



};
// not null ka matlab koi bhi empty space nahi jaye ga 
// photo ko blob ya mediumblob me he save kartay hen
?>
