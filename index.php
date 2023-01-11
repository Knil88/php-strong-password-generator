<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Password Generator</title>
</head>
<body>

<?php

session_start()


?>
   
    <header class="d-flex justify-content-center">
         <h1>
             Strong Password Generator   
        </h1>
    </header>
    <div class="container border-1">
       
        <div>

        <!-- Creiamo il form che cipermetterà di dare la lunghezza della password -->

        <form method="get">
            <label for="password_length">Lunghezza password:</label>
            <input type="number" name="password" id="password_length">
            <input type="submit" value="Genera password">
        </form>
        <?php

           

            //Creiamo la condizione che la variabile $password è uguale alla function e di conseguenza stamperà la password random

            require 'helper.php';
            if (isset($_GET['password'])) {
                $password = generate_password($_GET['password']);
                echo "Password generata: " . $password;
                $_SESSION['password'] = $password;
                header('Location: password.php');
            }
           


            
    ?>
        </div>
    </div>
</body>
</html>