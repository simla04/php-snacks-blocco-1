<!-- Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
-->

<?php
$nome =$_GET['nome'];
$email = $_GET['email'];
$eta = $_GET['eta'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack2</title>
</head>

<body>
    <form method="get">
        <input type="text" placeholder="nome" name="nome">
        <input type="text" placeholder="email" name="email">
        <input type="number" placeholder="eta" name="eta">

        <button type="submit">Invia</button>

    </form>

    <?php
    
    if (strlen($nome) > 3 && strpos($email, '.') != false && strpos($email, '@') != false && is_nemeric($eta)) {
        echo ('Accesso riuscito');
    } else {
        echo('Accesso negato');
    }

    ?>    
</body>
</html>