<?php
          
// header("Content-Type:application/plain");
//header("Content-Disposition:attachment;filename=sample.txt");

// html ko xml me print karney ke leye mine type dalna
// header("Content-Type:application/html"); // html me convert karney k leye
// header("Content-Disposition:attachment;filename=sample.html");//html


header("Content-Type:application/xls");
// downlode karwaney ke leye ye code zarori hey
// text ko direct downlode nahi ker saktey file bana ke ker saktay hen
header("Content-Disposition:attachment;filename=sample.xls");
$db = new mysqli('localhost','root','','user_information');

if($db ->connect_error){
    echo 'connection fail';
}else{
    $allData = 'SELECT * FROM users LIMIT 25 ';
    $response = $db ->query($allData);
    echo "<table border='1'>";
    while($data = $response -> fetch_assoc()){
        echo "<tr>";
        echo "<td>";
        echo $data['id'];
        echo "</td>";
        echo "<td>";
        echo $data['name'];
        echo "</td>"; 
        echo "<td>";
        echo $data['mobile'];
        echo "</td>";
        echo "<td>";
        echo $data['username'];
        echo "</td>";
        echo "<td>";
        echo $data['password'];
        echo "</td>";
        echo "</tr>";
        
    }
    echo "</table>";
}

?>