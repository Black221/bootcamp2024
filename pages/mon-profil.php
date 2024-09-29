<?php 


$db_host = "localhost";
$db_group = "root";
$db_pass = "";
$db_name = "bootcamp2024";

$connexion = new PDO("mysql:host=$db_host;dbname=$db_name", $db_group, $db_pass);
$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "SELECT * FROM `users` JOIN `groups` ON `users`.`group_id` = `groups`.`id` WHERE `login` = 'admin'";
$stmt = $connexion->query($sql);
$user = $stmt->fetch(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon profil</title>

    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/spacing.css">
    <link rel="stylesheet" href="../styles/user.css">
    <link rel="stylesheet" href="../styles/navigation.css">
    <link rel="stylesheet" href="../styles/form.css">
    <link rel="stylesheet" href="../styles/button.css">

</head>
<body>
    
    <main>
        <header>
            <div class="flex-between padding-20">
                <div class="">
                    <p>LHackSRT</p>
                </div>
                <div class="flex-center gap-20">
                    <div>
                        Nom utilisateur
                    </div>
                    <div class="user-avatar">
                        NU
                    </div>
                </div>
            </div>
            <nav class="flex-between nav-links">
                <div class="nav-tab-list flex-1">
                    <a href="#" class="nav-tab active">
                        Mon profil
                    </a>
                    <a href="./mes-groupes.html" class="nav-tab">
                        Mes groupes
                    </a>
                </div>
                <div class="">
                    <button class="btn btn-primary">
                        Deconnexion
                    </button>
                </div>
            </nav>
        </header>

        <div class="profil">
            
            <form class="form-container">
                <div class="form-header">
                    <h2>Mon profil</h2>
                </div>
                <div class="flex-center gap-64">
                    <div class="form-avatar">
                        <div class="avatar">
                            <img src="../images/avatar.png" alt="avatar">
                        </div>
                    </div>
                    <div class="w-fit">
                        <div class="form-group w-100">
                            <label for="groupe">Groupe</label>
                            <input type="text" id="groupe" name="groupe" value="<?= $user['description'] ?>">
                        </div>
                        <div class="form-group w-100">
                            <label for="login">Login</label>
                            <input type="text" id="login" name="login" value="<?= $user['login'] ?>">
                        </div>
                        <div class="flex-row">
                            <div class="form-group">
                                <label for="prenom">Prenom</label>
                                <input type="text" id="prenom" name="prenom" value="<?= $user['firstname'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="nom">Nom</label>
                                <input type="text" id="nom" name="nom" value="<?= $user['lastname'] ?>">
                            </div>
                        </div>
                        <div class="form-group w-100">
                            <label for="password">Mot de passe</label>
                            <input type="password" id="password" name="password" value="Mot de passe">
                        </div>
                    </div>
                </div>
                <div class="form-actions gap-20">
                    <button class="btn-primary">Enregistrer</button>
                </div>
            </form>
        </div>

    </main>
    <script src="../scripts/mon-profil.js"></script>
</body>
</html>