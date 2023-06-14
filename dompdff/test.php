<?php

require("dompdf/autoload.inc.php"); // dompdf file connect ki 
use  Dompdf\Dompdf; // php me class ko accesss karney k leye use lagatay hen

$dompdf = new Dompdf(); // dompdf object ko cal kia
$design = '
<table border="1" style="width: 100%; border: 1px solid rgba(0, 128, 0, 0.679);">
    <tr>
        <th>name</th>
        <th>mobile</th>
        <th>email</th>
        <th>password</th>
        <th>dob</th>
    </tr>
    <tbody>
        <tr>
            <td style="text-align : center;">nasir</td>
            <td style="text-align : center;">03452445360</td>
            <td style="text-align : center;">na@gmail.com</td>
            <td style="text-align : center;">12345</td>
            <td style="text-align : center;">12-06-2023</td>
        </tr>
        <tr>
            <td style="text-align : center;">nasir</td>
            <td style="text-align : center;">03452445360</td>
            <td style="text-align : center;">na@gmail.com</td>
            <td style="text-align : center;">12345</td>
            <td style="text-align : center;">12-06-2023</td>
        </tr>
    </tbody>
</table>
';
$dompdf ->loadhtml($design); // html ko pdf me convert kia
$dompdf ->setPaper('A4','portrait'); // paper size or landscape ya portrait bataya
$dompdf ->render(); // paper pe html ko print kerney k leye
// output pdf ko downlode karwaney ke ley
// $dompdf ->stream(); 
$showTempararyPdf = $dompdf -> output();
// file name dena hey or tempreary server pe downlode
file_put_contents('demo.pdf',$showTempararyPdf);

?>