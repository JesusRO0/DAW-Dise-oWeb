<!DOCTYPE html>
<html lang="es-ES">
    <head>
        <meta charset="UTF-8">
        <meta name="descripcion" content="Mi primer formulario HTML con diferentes tipos de entrada">
        <meta name="author" content="Jesús Roca">
        <meta name="keywords" content="html, HTML, diw, desarrollo de aplicaciones, desarrollo de aplicaciones web, formularios, html5, diseño de interfaces">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="lang" content="es-ES">
        <title>Formulario de mi página web</title>
    </head>
    <body>
        <h1>Information</h1>
        <?php

            $title= $_POST['Title'];
            if($title == "Ms"){
                echo "Hello: Ms. <br>";

            }else if($titleForm == "Mrs"){
                echo "Hello: Mrs. <br>";

            }else if($titleForm == "Mr"){
                echo "Hello: Mr. <br>";

            }else if($titleForm == "Dr"){
                echo "Hello: Dr. <br>";

            }else if($titleForm == "Mx"){
                echo "Hello: Mx. <br>";

            }else if($titleForm == "Ind"){
                echo "Hello: Ind. <br>";
            }


            $name = $_POST['name'];
            echo "First Name: ", $name, "<br>";
            $lastname = $_POST['lastname'];
            echo "Last Name: ", $lastname, "<br>";
            $birth = $_POST['birth'];
            echo "Date of Birthday: ", $birth, "<br>";
            $city = $_POST['city'];
            echo "City: ", $city, "<br>";

            $region = $_POST['region'];
            if($region == "Dur"){
                echo "Region: Durham. <br>";

            }else if($region == "North"){
                echo "Region: Northumberland. <br>";

            }else if($region == "Lanca"){
                echo "Region: LancaShire. <br>";

            }else if($region == "York"){
                echo "Region: Yorkshire. <br>";

            }else if($region == "Ches"){
                echo "Region: Chesire. <br>";

            }else if($region == "Rut"){
                echo "Region: Rutland. <br>";

            }else if($region == "West"){
                echo "Region: West Midlands. <br>";

            }else if($region == "Kent"){
                echo "Region: Kent. <br>";

            }else if($region == "Essex"){
                echo "Region: Essex. <br>";

            }else if($region == "Dor"){
                echo "Region: Dorset. <br>";

            }else if($region == "Dev"){
                echo "Region: Devon. <br>";

            }else if($region == "Corn"){
                echo "Region: Cornwall. <br>";
            }

            $code = $_POST['code'];
            echo "Postcode: ", $code, "<br>";
            $regional = $_POST['regional'];
            echo "Regional Code: ", $regional, "<br>";

            $Subs = $POST_['Subs'];
            if($Subs == "D"){
                echo "Subscription dayly <br>";

            }else if($Subs == "W"){
                echo "Subscription weekly <br>";

            }else if($Subs == "Q"){
                echo "Subscription quarterly <br>";

            }else if($Subs == "M"){
                echo "Subscription monthly <br>";

            }else if($Subs == "Y"){
                echo "Subscription yearly <br>";

            }else if($Subs == "U"){
                echo "Subscription unlimited <br>";

            }

            $sub = $_POST['sub'];
            echo "Subscription Code: ", $sub, "<br>";

            $Science= $_POST['Science'];
            $Arts = $_POST['Arts'];
            $Literature= $_POST['Literature'];
            $Technology= $_POST['Technology'];
            $Improvement= $_POST['Improvement'];
            echo "Area of Interest: <br>";
            if($Science == true){
                echo "Science <br>";
            }
            if($Arts == true){
                echo "Art and Crafts <br>";
            }
            if($Literature == true){
                echo "Literature <br>";
            }
            if($Technology == true){
                echo "Technologies and Gadgets <br>";
            }
            if($Improvement == true){
                echo "Self Improvement <br>";
            }

            $pass= $_POST['pass'];
            echo "Password: ", $pass, "<br>";

            $card= $_POST['card'];
            echo "Credit Card Type: <br>";
            if($card == "Visa"){
                echo "Visa <br>";

            }else if($card == "Master"){
                echo "MasterCard <br>";

            }else if($card == "Maestro"){
                echo "Credit Card Type: Maestro <br>";

            }

            $number= $_POST['number'];
            echo "Card Number: ", $number , "<br>";
            $discount= $_POST['discount'];
            echo "Discount Code: ", $discount , "<br>";
            $range= $_POST['range'];
            echo "Donation: ", $range, "<br>";
            $suggestions= $_POST['suggestions'];
            echo "Comments: ", $suggestions, "<br>";

        ?>
    </body>
 </html>
