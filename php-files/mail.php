<?php 
// online image jo ke hosted hona chahey us ka link dena hey

// email,subject,content jo bhajna hey ,our header infermation bhajtey hen
// pehley header ki information ko 1 vareable me rakhayen gey 
// header info me email jis se mail jaye ga phir 1 space ke baad \r\n
// mime version dena hota hey her browser me 1 softwe hota he maltipal internet mail extensition
// 1.0 den gey ye bohat sarey version hotey hen or header information me line brake nahi karni 
// content type dena hey or char set utf8 ko eccode fome me dena ho ga 
// jo bhi content html form me bhaja jaye ga us me inline css he lagani hey

// from ka matlab kis ki janib se mail ja raha hey
$headerinformation = "From:nasir127sb@gmail.com \r\nMIME-Version:1.0 \r\nContent-Type:text/html;charset=ISO-8859-1\r\n";
// mail("nasir127sb@gmail.com","testing","plese subcribe i am chat gpt");
/*
if(mail("nasir127sb@gmail.com","testing","<h1>nasir</h1>") == true){
    echo "email success deliver";
}else{
    echo "email no sent";
}
*/
$mycontent = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Design</title>
</head>
<body style="display: flex;justify-content: center;align-items: center;flex-direction: column;min-height: 100vh;">
    <div style="padding: 20px 40px;border: 2px solid #ccc; width: 500px;">
        <div style="text-align: center;">
            <img src="https://images.pexels.com/photos/7322961/pexels-photo-7322961.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" width="100" alt="">

        </div>
        <h1>hi</h1>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur provident perspiciatis suscipit a animi. Placeat nihil beatae maxime soluta modi?
        </p>
        <div style="padding: 20px;border: 1px solid #ccc;">
            <h4>Bussiness Invitation</h4>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur, in.
            </p>
            <h4>nasir hanif</h4>
            <h4>Do Not Share Your activation Code.1234569778</h4>
<div style="text-align: center;">
    <button style="width: 150px;background-color: rgb(48, 191, 101); color: white; border: none;padding: 10px;font-size: 25px;">Verify</button>
</div>
        </div>
    </div>
</body>
</html>

';
if(mail("nasir127sb@gmail.com","SUBJECT",$mycontent,$headerinformation)){
    echo "email success deliver";
}else{
    echo "email no sent";
}

?>