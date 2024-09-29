<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "bootcamp2024";

$connexion = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


if (isset($_POST['submit'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE login = '$login' AND password = '$password'";
    $stmt = $connexion->query($sql);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        echo "Connexion réussie";
    } else {
        echo "Identifiants incorrects";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>

    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/form.css">
    
</head>
<body>

    <main class="dimensions-screen flex-center flex-column">
        <div class="flex-center flex-column gap-0">
            <h1>Bootcamp 2024</h1>
            <p>by LHackSRT</p>
        </div>
        <div class="form-container bg-gray">
            <div class="form-head">
                <h2>Connexion</h2>
            </div>
            <form id="connexion-form" action="" method="post">
                <div class="form-group">
                    <label for="login">login</label>
                    <input type="login" id="login" name="login" required>
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-actions">
                    <button type="submit" name="submit">Se connecter</button>
                </div>
            </form>
            <p>Vous n'avez pas de compte ? <a href="inscription.html">Inscrivez-vous</a></p>
        </div>
    </main>
    <script src="../scripts/connexion.js"></script>

</body>
</html>