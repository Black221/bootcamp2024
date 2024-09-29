<?php


$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "bootcamp2024";

$connexion = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


if (isset($_POST['submit'])) {
    $role = 4;
    $group = $_POST['group'];
    $login = trim($_POST['login']);
    $firstname = trim($_POST['firstname']);
    $lastname = trim($_POST['lastname']);
    $password = $_POST['password'];

    $sql = "INSERT INTO users (`group_id`, `role_id`, `login`, `firstname`, `lastname`, `password`) VALUES ($group, $role,' $login', '$firstname', '$lastname', '$password')";
    $connexion->exec($sql);
    echo "Inscription réussie";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>

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
                <h2>Inscription</h2>
            </div>


            <form id="connexion-form" action="" method="POST">
                <div class="form-group w-100">
                    <label for="groupe">Groupe</label>
                    <input type="text" id="groupe" name="group" value="">
                </div>
                <div class="form-group w-100">
                    <label for="login">Login</label>
                    <input type="text" id="login" name="login" value="">
                </div>
                <div class="flex-row flex-wrap">
                    <div class="form-group">
                        <label for="prenom">Prenom</label>
                        <input type="text" id="prenom" name="firstname" value="">
                    </div>
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" id="nom" name="lastname" value="">
                    </div>
                </div>
                <div class="form-group w-100">
                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" name="password" value="">
                </div>
                <div class="form-actions">
                    <button type="submit" name="submit">S'inscrire</button>
                </div>
            </form>
            <p>Vous avez déjà un compte ? <a href="connexion.html">Connectez-vous</a></p>
        </div>
    </main>
    <script src="../scripts/inscription.js"></script>

</body>
</html>