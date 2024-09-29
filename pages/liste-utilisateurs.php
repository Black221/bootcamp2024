<?php 


$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "bootcamp2024";

$connexion = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "SELECT login, firstname, lastname, group_id, role_id FROM users";
$stmt = $connexion->query($sql);
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

function render_attributes ($user) {
    foreach ($user as $key => $value) {
        echo "<th>$key</th>";
    }
}

function render_user ($user) {
    foreach ($user as $key => $value) {
        echo "<td>$value</td>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des utilisateurs</title>

    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/spacing.css">
    <link rel="stylesheet" href="../styles/user.css">
    <link rel="stylesheet" href="../styles/navigation.css">
    <link rel="stylesheet" href="../styles/table.css">
    <link rel="stylesheet" href="../styles/form.css">
    <link rel="stylesheet" href="../styles/button.css">

</head>
<body>
    
    <main class="flex-row gap-0 dimensions-screen overflow-hidden">
        <aside class="sidebar">
            <div class="sidebar-header border-b">
                <h3>Logo</h3>
                <button>

                </button>
            </div>
            <div class="sidebar-search">
                <div>
                    <input type="text" placeholder="Rechercher un groupe">
                    <button>
                        <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M11 6C13.7614 6 16 8.23858 16 11M16.6588 16.6549L21 21M19 11C19 15.4183 15.4183 19 11 19C6.58172 19 3 15.4183 3 11C3 6.58172 6.58172 3 11 3C15.4183 3 19 6.58172 19 11Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                    </button>
                </div>
            </div>
            <nav class="sidebar-nav">
                <div class="sidebar-nav-link">
                    <a href="#" >
                        Tableau de bord
                    </a>
                </div>
                <div class="sidebar-nav-link ">
                    <a href="../pages/liste-groupes.php">
                        Liste des groupes
                    </a>
                </div>
                <div class="sidebar-nav-link active">
                    <a href="#" >
                        Liste des utilisateurs
                    </a>
                </div>
            </nav>
        </aside>
        <div class="flex-1 flex-column gap-0 bg-gray overflow-hidden">
            <header class="bg-white">
                <div class="flex-between padding-5 padding-x-20 border-b">
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
                <nav class="flex-between border-b padding-10">
                    <div class="flex-row align-center gap-5">
                        <h3>
                            Liste des groupes
                        </h3>
                        <div class="margin-left-10">
                            <svg fill="#000000" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 495.398 495.398" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <g> <path d="M487.083,225.514l-75.08-75.08V63.704c0-15.682-12.708-28.391-28.413-28.391c-15.669,0-28.377,12.709-28.377,28.391 v29.941L299.31,37.74c-27.639-27.624-75.694-27.575-103.27,0.05L8.312,225.514c-11.082,11.104-11.082,29.071,0,40.158 c11.087,11.101,29.089,11.101,40.172,0l187.71-187.729c6.115-6.083,16.893-6.083,22.976-0.018l187.742,187.747 c5.567,5.551,12.825,8.312,20.081,8.312c7.271,0,14.541-2.764,20.091-8.312C498.17,254.586,498.17,236.619,487.083,225.514z"></path> <path d="M257.561,131.836c-5.454-5.451-14.285-5.451-19.723,0L72.712,296.913c-2.607,2.606-4.085,6.164-4.085,9.877v120.401 c0,28.253,22.908,51.16,51.16,51.16h81.754v-126.61h92.299v126.61h81.755c28.251,0,51.159-22.907,51.159-51.159V306.79 c0-3.713-1.465-7.271-4.085-9.877L257.561,131.836z"></path> </g> </g> </g> </g></svg>
                        </div>
                        <div class="">
                            <svg width="22px" height="22px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 9.5C13.3807 9.5 14.5 10.6193 14.5 12C14.5 13.3807 13.3807 14.5 12 14.5C10.6193 14.5 9.5 13.3807 9.5 12C9.5 10.6193 10.6193 9.5 12 9.5Z" fill="#000000"></path> </g></svg>
                        </div>
                        <span>
                            Gestions des groupes
                        </span>
                    </div>
                </nav>
            </header>

            
            <div class="overflow-auto flex-1">
                <section class="main-container margin-top-20">
                    <div class="flex-between ">
                        <div class="form-search">
                            <svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M11 6C13.7614 6 16 8.23858 16 11M16.6588 16.6549L21 21M19 11C19 15.4183 15.4183 19 11 19C6.58172 19 3 15.4183 3 11C3 6.58172 6.58172 3 11 3C15.4183 3 19 6.58172 19 11Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                            <input type="text" placeholder="Rechercher un utilisateur">
                        </div>
                        <button class="btn rounded btn-primary">
                            <svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M13 6C13 5.44771 12.5523 5 12 5C11.4477 5 11 5.44771 11 6V11H6C5.44771 11 5 11.4477 5 12C5 12.5523 5.44771 13 6 13H11V18C11 18.5523 11.4477 19 12 19C12.5523 19 13 18.5523 13 18V13H18C18.5523 13 19 12.5523 19 12C19 11.4477 18.5523 11 18 11H13V6Z" fill="#fff"></path> </g></svg>
                        </button>
                    </div>
                    <div class="table-container margin-top-20">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="table-checkbox">
                                        <input type="checkbox">
                                    </th>
                                    <?php 
                                        render_attributes($users[0]);
                                    ?>
                                    <th class="table-btn-actions">Actions</th>
                                </tr>
                            </thead>
                            <tbody id="users">
                                <?php
                                
                                    foreach ($users as $user) {
                                        echo "
                                        <tr>
                                            <td class='table-checkbox'>
                                                <input type='checkbox'>
                                            </td>
                                        ";
                                        render_user($user);
                                        echo "<td class='table-btn-actions'>
                                                <button class='btn btn-primary'>
                                                    modifier
                                                </button>
                                                <button class='btn btn-gray margin-left-10'>
                                                    supprimer
                                                </button>
                                            </td>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>
                        <div class="table-navigation">
                            <div></div>
                            <div class="flex-center gap-10">
                                <div class="flex-rox align-center">
                                    Nombre d'éléments par page:
                                    <select name="" id="">
                                        <option value="10">10</option>
                                        <option value="20">20</option>
                                        <option value="50">50</option>
                                    </select>
                                </div>
                                <button class="btn">
                                    <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>Arrow-Right</title> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Arrow-Right"> <rect id="Rectangle" fill-rule="nonzero" x="0" y="0" width="24" height="24"> </rect> <line x1="6.5" y1="12" x2="18" y2="12" id="Path" stroke="#0C0310" stroke-width="2" stroke-linecap="round"> </line> <path d="M10,8 L6.70711,11.2929 C6.31658,11.6834 6.31658,12.3166 6.70711,12.7071 L10,16" id="Path" stroke="#0C0310" stroke-width="2" stroke-linecap="round"> </path> </g> </g> </g></svg>
                                </button>
                                <button class="btn">
                                    <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>Arrow-Left</title> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Arrow-Left"> <rect id="Rectangle" fill-rule="nonzero" x="0" y="0" width="24" height="24"> </rect> <line x1="6" y1="12" x2="17.5" y2="12" id="Path" stroke="#0C0310" stroke-width="2" stroke-linecap="round"> </line> <path d="M14,8 L17.2929,11.2929 C17.6834,11.6834 17.6834,12.3166 17.2929,12.7071 L14,16" id="Path" stroke="#0C0310" stroke-width="2" stroke-linecap="round"> </path> </g> </g> </g></svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>
    <script src="../scripts/liste-utilisateur.js"></script>
</body>
</html>