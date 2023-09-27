<?php
// il parametro lunghezza proviene dalla variabile $lunghezzaPassword,che questa variabile prende i dati che il client inserisce nella input 
function generaPasswordCasuale($lunghezza)
{
    // caratteri validi che possono essere utilizzati per generare la password casuale
    $caratteri = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+-=[]{}|;:,.<>?';

    // $password, variabile inizializzata come una stringa vuota per memorizzare la password casuale .
    $password           = '';
    $lunghezzaCaratteri = strlen($caratteri);

    for ($i = 0; $i < $lunghezza; $i++) {
        //l'indice deve essere sempre all'interno dei limiti validi dell'array,quindi - 1
        $carattereCasuale = $caratteri[rand(0, $lunghezzaCaratteri - 1)];

        //il carattereCasuale viene aggiunto alla passwordcon .=
        $password .= $carattereCasuale;
    }
    return $password;
}
// se c'e una lungezza e il codice viene eseguito solo quando la pagina è stata caricata tramite una richiesta "GET"
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['lunghezza'])) {
    //$_GET['lunghezza'] estrae il valore inserito nell'input con name="lunghezza" dal URL, che è un parametro GET.
    //int trasforma il valore in un numero intero, garantendo che sia trattato come un numero,no come una stringa.
    //Quindi, il numero intero risultante viene assegnato alla variabile $lunghezzaPassword.
    $lunghezzaPassword = (int) $_GET['lunghezza'];
    //invocco la funzione generaPasswordCasuale e gli passo come parametro $lunghezzaPassword
    //assegno questa funzione nella variabile $passwordGenerata 
    $passwordGenerata = generaPasswordCasuale($lunghezzaPassword);
}



?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Genetore Password Casuale </title>
        <!-- BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

        <!-- CUSTOM CSS -->
        <link rel="stylesheet" href="./css/style.css">

    </head>

    <body>
        <div class="wrapper container rounded p-4 mt-5 text-center">
            <h1>Generatore Password Casuale</h1>
            <form action="index.php">
                <label for="lunghezza">Lunghezza della Password:</label>
                <input type="number" name="lunghezza" id="lunghezza" required>
                <input type="submit" value="Genera Password">

            </form>
            <!-- Stampiamo la password generata -->
            <?php
            if (isset($passwordGenerata)) {
                echo "<h2>Password Generata:</h2>";
                echo "<p>$passwordGenerata<p>";

            }
            ?>
        </div>


    </body>

</html>