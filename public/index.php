<!DOCTYPE html>
<html>
<head>
    <title>Cabinet Medical du Dr Dupont</title>
</head>
<body>
    <h1>Cabinet Medical du Dr Dupont</h1>

    <?php
require_once '../config/database.php';

class User {
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function getUsers() {
        $query = 'SELECT * FROM users';
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

$user = new User();
$users = $user->getUsers();

foreach ($users as $user) {
    echo 'Nom : ' . $user['firstName'] .' '. $user['lastName'] .'<br>';
    echo 'Email : ' . $user['email'] . '<br>';
    echo '------------------------<br>';
}
?>
</body>
</html>