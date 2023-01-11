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

   

    <div class="container">
        <h1>
             Strong Password Generator   
        </h1>
        <div>
        <form method="get">
            <label for="password_length">Lunghezza password:</label>
            <input type="number" name="password_length" id="password_length">
            <input type="submit" value="Genera password">
        </form>
        <?php
        function generate_password($length) {
            // Array di caratteri possibili per la password
            $chars = array_merge(range('A', 'Z'), range('a', 'z'), range(0, 9), array('!', '@', '#', '$', '%', '^', '&', '*'));
            $password = "";
            for ($i = 0; $i < $length; $i++) {
                $password .= $chars[array_rand($chars)];
            }
            return $password;
        }

        if (isset($_GET['password_length'])) {
            $password = generate_password($_GET['password_length']);
            echo "Password generata: " . $password;
        }
    ?>
        </div>
    </div>
</body>
</html>