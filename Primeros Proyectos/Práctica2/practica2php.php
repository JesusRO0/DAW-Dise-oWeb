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
        <h1>Welcome to CornerShop Records!</h1>
        <?php

            $username = $_POST['username'];
            echo '<h2>Logged in as: ', $username, '</h2>';

            echo "<h2>Your profile</h2>";

            $email = $_POST['email'];
            echo 'E-mail: ', $email, '<br>';
            $nombre = $_POST['name'];
            echo 'First Name: ', $nombre, '<br>';
            $apellido = $_POST['lastname'];
            echo 'Last Name: ', $apellido, '<br>';
            $Date = $_POST['date'];
            echo 'Date of Birthday: ', $Date, '<br><br>';

            $comentario = $_POST['comentario'];
            echo "<h4>Favorite Albums: </h4>", $comentario;

            echo "<h4>Other information</h4>";

            $social = $_POST['social'];
            echo "My social networks: ", $social, '<br>';
            $tlf = $_POST['tlf'];
            echo "My number phone: ", $tlf, '<br>';
            $gender = $_POST['gender'];
            echo "Gender: ", $gender;

            echo "<h4>Terms and conditions have been accepted.</h4>";

            $promotional = $_POST['promotional'];
            if($promotional == true){
                echo "You will receive promotional emails!";
            }else{
                echo "You will not receive promotional emails!";
            }
        ?>
    </body>
 </html>
