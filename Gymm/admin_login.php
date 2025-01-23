<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css\admin_login.css">
</head>
<body>
  <br><br>
  <br><br>
  <br><br>
  <div class="container">
    <h2>Gym Admin Login</h2>
    <form action="admin_auth.php" method="POST" >
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>

      <button type="submit">Login</button>
    </form>
  </div>
</body>
</html>
