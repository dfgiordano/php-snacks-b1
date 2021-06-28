/* Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” */

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Account</title>
    </head>
    <body>
        <div>
            <?php
                $name = $_GET["name"];
                $email = $_GET["email"];
                $age = $_GET["age"];
                // $age = intval($_GET["age"]);
                $account = [ "$name", "$email", "$age"];
                
                
                var_dump($account);
                if (
                    strlen($_GET["name"]) > 3 
                    && (strpos($_GET["email"], '.') == true) 
                    && (strpos($_GET["email"], '@') == true)
                    // && (is_numeric($_GET[$age] == true))
                    )
                    echo "ACCESSO RIUSCITO!" ;
                else {
                    echo "ACCESSO NEGATO...controlla i vari campi inseriti!";
                    }
            ?>
        </div>
        
        
    </body>
</html>



