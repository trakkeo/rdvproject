<?php
// Inclure le modèle UsersModel
require_once __DIR__.'/../app/Model/UsersModel.php';
require_once __DIR__.'/../../app/Model/UsersModel.php';


// Créer une instance du modèle UsersModel
$usersModel = new UsersModel();

// Appeler la fonction getAllUsers() pour récupérer tous les utilisateurs
$users = $usersModel->getAllUsers();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Liste des utilisateurs</title>
</head>
<body>
    <h1>Liste des utilisateurs</h1>

    <ul>
        <?php foreach ($users as $user) : ?>
            <li><?php echo $user['firstName'].' '.$user['lastName'].' '.$user['email'].' '.$user['phone']; ?></li>
        <?php endforeach; ?>
    </ul>

        <div>
            <a href="createUser.php">Ajouter un utilisateur</a>
        </div>
        <?php include __DIR__.'/../views/pages/createUser.php'; ?>
    </body>
</html>