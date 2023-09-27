<?php
session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generata</title>
</head>

<body>
    <h1>Password Generata</h1>
    <!-- if deve avere all posto della graffa aperta, due punti  (  := {  ) -->
    <?php if (isset($_SESSION['passwordGenerata'])) : ?>
        <p><?php echo $_SESSION['passwordGenerata']; ?></p>

        <!-- else deve avere all posto della graffa aperta, due punti  (  := {  ) -->
    <?php else : ?>
        <p>La password non e disponibile</p>

        <!-- endif deve avere all posto della graffa chiusa,punto e virgola  (  ; = }  ) -->
    <?php endif; ?>
</body>

</html>