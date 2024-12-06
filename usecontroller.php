<?php
require_once '../models/User.php';

class UserController {
    private $userModel;

    public function __construct($pdo) {
        $this->userModel = new User($pdo);
    }

    public function createUser ($username, $password, $role) {
        $this->userModel->create($username, $password, $role);
        header("Location: ../public/index.php");
    }

    public function readUsers() {
        return $this->userModel->read();
    }

    public function updateUser ($id, $username, $password, $role) {
        $this->userModel->update($id, $username, $password, $role);
        header("Location: ../public/index.php");
    }

    public function deleteUser ($id) {
        $this->userModel->delete($id);
        header("Location: ../public/index.php");
    }
}
?>