<?php
// json string object convert php object
// php javascript se object ka data json stringyfy me leta hey 
// or php javascript ko object ka data json stringyfy  json_encode  me deta hey 
/*
$data = '{
    "name":"nasir","father":"hanif","age":28,"city":"karachi"
}';
*/
// stringyfy data ko php object me convert kia
/* print_r(json_decode($data));

 $jsonConvertObject = json_decode($data);
echo "<br>";
 echo $jsonConvertObject -> name;
 echo "<br>";
 echo $jsonConvertObject -> father;
 echo "<br>";
 echo $jsonConvertObject -> age;
 echo "<br>";
 echo $jsonConvertObject -> city;
 echo "<br>";
*/


 // php object convert stringefy use json_encode send datajson stringfy 
                       // assoseative array
   /*                    
 $phpObject = array("name"=>"nasir","father"=>"hanif","age"=>30,"city"=>"sargodha");
 print_r($phpObject);
 echo "<br>";
 echo $phpObject['name'];
 echo "<br>";
 echo $phpObject['father'];
 echo "<br>";

 echo $phpObject['age'];
 echo "<br>";


 $phpObjectConvertJson = json_encode($phpObject);
 echo "<br>";
 echo  $phpObjectConvertJson;*/

// ----------------------------------------------------------------------------------------------------
//                     array index access value
// normal array ko index se access kertey hen  or loop chala ke bhi inde de ke print ker saktay hen
 // $normalArray = ["nasir","boll","45","clock","dog",1,36];
 // echo $normalArray[0]. "<br>";
 // echo $normalArray[2]. "<br>";
 // echo $normalArray[4]. "<br>";
 // echo $normalArray[5]. "<br>";
//----------------------------------------------------------------------
             // array access value via loop

//  for($i = 0;$i < count($normalArray);$i++){
// echo $normalArray[$i]."<br>";

//  };


// json object me keys loop chala ke key name access ker ke value lena hoti hey
// object me se pehley all keys ko access karna hota hey or 1 vareable me rakhana ho ga 
//---------------------------------------------------------------------
//                   assos array value access via loop
//  $phpObject = array("name"=>"nasir","father"=>"hanif","age"=>30,"city"=>"sargodha");

//  $key_name  =  array_keys($phpObject);  //array key names access arna hey pehley or vareable me rakh lena hey
 


//  for($j = 0;$j < count($phpObject);$j++){
   
//     $assos_key = $key_name[$j];
//     echo   $phpObject[$assos_key]."<br>"; // object me key ko chalanay se value miley gi


//   };

     //--------------------------------------------------------
     //          php foreach loop access array value 
     // for each me wo object detey hen jis pe loop chalana hey or as ke baad wo vareable detey hen jo
     //  her index se data le ke stor karey ga or print karey ga
     
    //  $normalArray = ["nasir","boll","45","clock","dog",1,36];

    //  foreach($normalArray as $data){
    //     echo $data."<br>";
    //  }

    //---------------------------------------------------------------
    //         foreach loop for assccs array onley data print
    $phpObject = array("name"=>"nasir","father"=>"hanif","age"=>30,"city"=>"sargodha");

    // foreach($phpObject as $data){

    //     echo $data."<br>";  // ye tha sirf data print kerney ke leye
    // }
//---------------------------------------------------------
// foreach loop for assccs array key and  data print

foreach($phpObject as $key => $data){

        echo $key ." = ".$data."<br>";  // ye tha key or data print kerney ke leye
    }



?>