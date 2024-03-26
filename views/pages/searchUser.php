<!DOCTYPE html>
<html>
<head>
    <title>Rechercher un utilisateur</title>
</head>
<body>
    <!--  create a form to search by his name and update a user using public function getUserById-->
    <h2>Rechercher un utilisateur</h2>
    <form method="POST" action="">
        <div class="form-group">
            <label for="id">ID</label>
            <input type="text" name="id" id="id" class="form-control" required>
        </div>
        <input type="submit" name="search" value="Search User" class="btn btn-primary">
    </form>
</body>
</html>

