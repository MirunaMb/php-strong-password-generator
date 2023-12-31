<?php
session_start();

// Ho incluso il file function
include 'functions.php';

// MAIN LOGIC
// se c'e una lungezza e il codice viene eseguito solo quando la pagina è stata caricata tramite una richiesta "GET"
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['lunghezza'])) {

    //$_GET['lunghezza'] estrae il valore inserito nell'input con name="lunghezza" dal URL, che è un parametro GET.
    //int trasforma il valore in un numero intero, garantendo che sia trattato come un numero,no come una stringa.
    //Quindi, il numero intero risultante viene assegnato alla variabile $lunghezzaPassword.
    $lunghezzaPassword = (int) $_GET['lunghezza'];

    //invocco la funzione generaPasswordCasuale e gli passo come parametro $lunghezzaPassword
    //assegno questa funzione nella variabile $passwordGenerata 
    $passwordGenerata = generaPasswordCasuale($lunghezzaPassword);

    //Salvo la password nella sessione
    $_SESSION['passwordGenerata'] = $passwordGenerata;

    // Reindirizza l'utente al file password.php
    header("Location: password.php");
    exit;
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
                echo "<p>" . $passwordGenerata . "</p>";
            }
            ?>
        </div>


    </body>

</html>