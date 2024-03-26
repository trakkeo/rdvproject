<!DOCTYPE html>
<html>

<head>
    <title>Cabinet Medical du Dr Dupont</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>

<body class="d-flex flex-column min-vh-100">
<div class="container">
    <h1>Cabinet Medical du Dr Dupont</h1>

    <?php
    require_once 'C:/xampp/htdocs/rdvproject/views/partials/header.php';
    require_once 'C:/xampp/htdocs/rdvproject/app/Controller/UserController.php';

    $userController = new UserController();

    // call public function createUser from UserController
    if (isset($_POST['submit'])) {
        $data = array(
            'firstName' => $_POST['firstName'],
            'lastName' => $_POST['lastName'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
            'phone' => $_POST['phone'],
            'role' => $_POST['role']
        );
        $userController->createUser($data);
    }
    // prevent resubmission
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        header("Location: " . $_SERVER['REQUEST_URI']);
    }

    // call method to get all users
    $stmt = $userController->getAllUsers();


    ?>
    <!-- create a form to add a new user -->
    <?php
    include 'C:/xampp/htdocs/rdvproject/views/pages/createUser.php';
    ?>


    <!--  create a form to search by his name and update a user using public function getUserById-->
    <?php
    // call public function getUserById from UserController
    if (isset($_POST['search'])) {
        $stmt = $userController->getUserById($_POST['id']);
    }
    ?>
    <?php
    include 'C:/xampp/htdocs/rdvproject/views/pages/searchUser.php';
    ?>



    <!--  display the view usersList.php -->
    <?php
    include 'C:/xampp/htdocs/rdvproject/views/pages/usersList.php';
    ?>

    <!--  create a form to edit user -->
    <?php
    // call public function updateUser from UserController
    if (isset($_POST['submit'])) {
        $data = array(
            'id' => $_POST['id'],
            'firstName' => $_POST['firstName'],
            'lastName' => $_POST['lastName'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
            'phone' => $_POST['phone'],
            'role' => $_POST['role']
        );
        $userController->updateUser($data);
    }

    include 'C:/xampp/htdocs/rdvproject/views/pages/updateUser.php';
    ?>

</div>
