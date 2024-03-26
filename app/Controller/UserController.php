<?php
require_once __DIR__ . '/../Model/UsersModel.php';

class UserController {
    private $usersModel;

    public function __construct() {
        $this->usersModel = new UsersModel();
    }

    public function getAllUsers() {
        return $this->usersModel->getAllUsers();
    }

    // Ajoutez ici d'autres méthodes pour gérer les opérations CRUD
    public function createUser($data) {
        return $this->usersModel->createUser($data);
    }

    public function updateUser($data) {
        return $this->usersModel->updateUser($data);
    }

    public function deleteUser($id) {
        return $this->usersModel->deleteUser($id);
    }

    public function getUserById($id) {
        return $this->usersModel->getUserById($id);
    }




}
?>
