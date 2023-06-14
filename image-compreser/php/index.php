<?php 
$width = $_POST['width'];
$height = $_POST['heigth'];
$formate = $_POST['formate'];
$r = $_POST['red'];
$g = $_POST['green'];
$b = $_POST['blue'];
$no = rand(1,5000);

if($formate == "jpeg"){
    $imageData = imagecreate($width,$height);
imagecolorallocate($imageData,$r,$g,$b);
if(imagejpeg($imageData,"../images/".$no.".jpeg")){
    echo $no.".jpeg";
};
imagedestroy($imageData);
}elseif($formate == "png"){
    $imageData = imagecreate($width,$height);
imagecolorallocate($imageData,$r,$g,$b);
if(imagepng($imageData,"../images/".$no.".png")){
    echo $no.".png";
};
imagedestroy($imageData);
}elseif($formate == "gif"){
    $imageData = imagecreate($width,$height);
imagecolorallocate($imageData,$r,$g,$b);
if(imagegif($imageData,"../images/".$no.".gif")){
    echo $no.".gif";
};
imagedestroy($imageData);
}
