<?php
require("fpdf.php"); // pdf libreary ko import kia
$pdf = new FPDF();  // fpdf object ko call kia
$pdf ->AddPage(); // 1 new page A4 leney ke leye
// image object parameter image adress,margen left ,margen top, image width,
// png formate not sported
$pdf ->Image("logo.png",79,-20,55);
$pdf ->ln(); // line brake cel ke baad he kaam karta hey
$pdf ->Cell(190,10,"",0,1); // empty cell add kia ta keh image ke nechey gap miley
$pdf ->SetFont("Arial","B",16); // font ko call kia ye 3 paremeater leta hey 
                                 // font family , font whate ,font size
  // cell back ground color ,cell ko true bhi karna ho ga                               
  $pdf ->SetFillColor(0, 191, 255);  
  // text color chang ye laganey se nechay ke tamam text white ho ga 
  $pdf ->SetTextColor(255,255,255);                             
$pdf ->Cell(190,10,"BISMILLAHA",1,1,"C",true);
 // cell ka matlab size hey 1 row hey
 // bohat sarey perameter leta hey 
 // 1 perameter 190 ka matlab A4 size page ki full width ,
 // 2 perameter height 10 rahey gi mexemem 100%
 // 3 perameter "BISMILLAHA" ka matlab jo contant likhna hey
 //4 perameter border deney k leye 1 den ge border na deney ke leye 0 lagayen gey 
 //5 perameter 1 line brake ke leye line brake na karna ho to 0 lagayen gey 
 // 6 perameter text ko Right center ya left me dena hey capetal "R",ya "C", ya"L"
 // 7 true ya false 
// ----------------------------------------------------------------------------
// cell devide 190 jitney cell banana hen un ko 190 se devide karna hey 
// or cell ko brake karney ya na karney k leye perameter 5 me 0 lagana hey
$pdf ->SetTextColor(0,0,0);// color dubara chang kia text ka
$pdf ->SetFont("Arial","",16); 
$pdf ->Cell(95,10,"mashallaha",1,0,"C");// 90 ka matlab cell ko 190 me se devide kia cell size
$pdf ->Cell(95,10,"nasir",1,1,"C");// or perameter 5 me 0 ka matlab line brake nahi karna hey
//-----------------------------------------------------------------
$pdf ->SetFont("Arial","",14); 
$pdf ->Cell(63.33,10,"Name",1,0,"C");
$pdf ->Cell(63.33,10,"Password",1,0,"C");
$pdf ->Cell(63.33,10,"Email",1,1,"C");
// font bold khatom karney k leye set font ko call karen or "B" ko empty ker den""
$pdf ->SetFont("Arial","",12); 
$pdf ->Cell(63.33,10,"Nasir",1,0,"C");
$pdf ->Cell(63.33,10,"12345",1,0,"C");
$pdf ->Cell(63.33,10,"Nasir127sb@gmail.com",1,1,"C");// line brake ke leye 1 lagana hey
$pdf ->ln(); // 1 line brake ke leye
$pdf ->ln();
$pdf ->Cell(63.33,10,"Yasir",1,0,"C");
$pdf ->Cell(63.33,10,"67890",1,0,"C");
$pdf ->Cell(63.33,10,"N@gmail.com",1,1,"C");
// font set chang
$pdf ->SetFont("Arial","",16); 
$pdf ->Cell(190,10,"mashallaha",1,0,"C");
// new page ke leye 
$pdf ->AddPage(); // 1 new page A4 leney ke leye
$pdf ->SetFont("Arial","",14); 
$pdf ->Cell(63.33,10,"Name",1,0,"C");
$pdf ->Cell(63.33,10,"Password",1,0,"C");
$pdf ->Cell(63.33,10,"Email",1,1,"C");
// font bold khatom karney k leye set font ko call karen or "B" ko empty ker den""
$pdf ->SetFont("Arial","",12); 
$pdf ->Cell(63.33,10,"Nasir",1,0,"C");
$pdf ->Cell(63.33,10,"12345",1,0,"C");
$pdf ->Cell(63.33,10,"Nasir127sb@gmail.com",1,1,"C");// line brake ke leye 1 lagana hey
$pdf ->Cell(63.33,10,"Yasir",1,0,"C");
$pdf ->Cell(63.33,10,"67890",1,0,"C");
$pdf ->Cell(63.33,10,"N@gmail.com",1,1,"C");
// font set chang
$pdf ->SetFont("Arial","",16); 
$pdf ->Cell(190,10,"mashallaha",1,0,"C");
$pdf -> Output();
 // pdf bana ke dekhaye ga
// ager pdf sirf downlode karwana hey to
// Output("nasir.pdf","F"); first perameter me kia file name dena hey 
// or server me downlode karwana hey to flag F  dena hey
// $pdf -> Output("nasir.pdf","F");
?>