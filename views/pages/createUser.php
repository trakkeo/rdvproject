<!DOCTYPE html>
<html>
<head>
    <title>Create User</title>
</head>
<body>
    <!--  create a form to add a new user -->
    <h2>Créer un utilisateur</h2>
    <form method="POST" action="">
        <div class="form-group">
            <label for="firstName">First Name</label>
            <input type="text" name="firstName" id="firstName" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="lastName">Last Name</label>
            <input type="text" name="lastName" id="lastName" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" id="phone" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="role">Role</label>
            <select name="role" id="role" class="form-control" required>
                <option value="admin">admin</option>
                <option value="user">patient</option>
            </select>
        </div>
        <input type="submit" name="submit" value="Create User" class="btn btn-primary">
    </form>
</body> 
</html>