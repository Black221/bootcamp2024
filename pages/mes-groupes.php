<?php 


$db_host = "localhost";
$db_group = "root";
$db_pass = "";
$db_name = "bootcamp2024";

$connexion = new PDO("mysql:host=$db_host;dbname=$db_name", $db_group, $db_pass);
$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "SELECT * FROM `groups` WHERE `groups`.`admin_group_id` = 1";
$stmt = $connexion->query($sql);
$groups = $stmt->fetchAll(PDO::FETCH_ASSOC);

function render_groups($groups) {
    foreach ($groups as $group) {
        echo "<a href='' class='group-link'>{$group['name']}</a>";
    }
}
$curruent_group = 1;
$sql = "SELECT * FROM `users`  WHERE `group_id` = $curruent_group";
$stmt = $connexion->query($sql);
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

function render_users($user) {
    $avatar = $user['avatar'];
    $username = $user['firstname'] . ' ' . $user['lastname'];
    echo "
        <div class='user-card'>
            <div class='actions-list'>
                <button id='btn-delete'>
                    <svg width='24px' height='24px' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'><g id='SVGRepo_bgCarrier' stroke-width='0'></g><g id='SVGRepo_tracerCarrier' stroke-linecap='round' stroke-linejoin='round'></g><g id='SVGRepo_iconCarrier'> <path d='M17 4V20M17 20L13 16M17 20L21 16M7 20V4M7 4L3 8M7 4L11 8' stroke='#000000' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'></path> </g></svg>
                </button>
                <button id='btn-transfert'>
                    <svg width='24px' height='24px' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'><g id='SVGRepo_bgCarrier' stroke-width='0'></g><g id='SVGRepo_tracerCarrier' stroke-linecap='round' stroke-linejoin='round'></g><g id='SVGRepo_iconCarrier'> <path d='M6 7V18C6 19.1046 6.89543 20 8 20H16C17.1046 20 18 19.1046 18 18V7M6 7H5M6 7H8M18 7H19M18 7H16M10 11V16M14 11V16M8 7V5C8 3.89543 8.89543 3 10 3H14C15.1046 3 16 3.89543 16 5V7M8 7H16' stroke='#000000' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'></path> </g></svg>
                </button>
            </div>
            <img src='$avatar' alt='$username'>
            <h4>
                $username
            </h4>
        </div>
    ";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes groupes</title>

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
                    <a href="./mon-profil.php" class="nav-tab">
                        Mon profil
                    </a>
                    <a href="#" class="nav-tab active">
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

        <div class="main-container">
            <div class="flex-between">
                <div id="group-list" class="group-links">
                    <?php render_groups($groups); ?>
                </div>
                <div class="form-search">
                    <svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M11 6C13.7614 6 16 8.23858 16 11M16.6588 16.6549L21 21M19 11C19 15.4183 15.4183 19 11 19C6.58172 19 3 15.4183 3 11C3 6.58172 6.58172 3 11 3C15.4183 3 19 6.58172 19 11Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                    <input type="text" placeholder="Rechercher un utilisateur">
                </div>
            </div>

            <div id="group-details" class="margin-top-64 padding-x-64 flex-row position-relative">

                <button class="position-absolute left-0 center-y slider-btn">
                    <svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg" width="32px" height="32px" viewBox="0 0 52 52" enable-background="new 0 0 52 52" xml:space="preserve" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M38,8.3v35.4c0,1-1.3,1.7-2.2,0.9L14.6,27.3c-0.8-0.6-0.8-1.9,0-2.5L35.8,7.3C36.7,6.6,38,7.2,38,8.3z"></path> </g></svg>
                </button>

                
                <?php 
                    foreach ($users as $user) {
                        render_users($user);
                    }
                ?>


                <button class="position-absolute right-0 center-y slider-btn">
                    <svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg" width="32px" height="32px" viewBox="0 0 52 52" enable-background="new 0 0 52 52" xml:space="preserve" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M14,43.7V8.3c0-1,1.3-1.7,2.2-0.9l21.2,17.3c0.8,0.6,0.8,1.9,0,2.5L16.2,44.7C15.3,45.4,14,44.8,14,43.7z"></path> </g></svg>
                </button>
            </div>
        </div>
    </main>
    <script src="../scripts/mes-groupes.js"></script>
</body>
</html>