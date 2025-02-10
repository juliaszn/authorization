<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Authorization</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/login.css" rel="stylesheet">
</head>
<body>
<div class="login-container">
<h2 class="text-center">Welcome Back</h2>
<form action="login.php" method="post">
    <div class="form-group">
    <label for="email"> Email:</label>
        <input type ="email" id="email" class="form-control" name="email"  placeholder="name@example.com" required>
    </div>
    <div class="form-group">
    <label for="password"> Password:</label>
        <input type ="password" id="password" name="password" class="form-control" required>
    </div>
    <?php
    session_start();
    if (isset($_SESSION['error'])) {
        echo '<p style="color:#0b0b0b;">' . $_SESSION['error'] . '</p>';
        unset($_SESSION['error']);
    }
    ?>
    <br><br>
    <button type="submit" class="btn btn-dark btn-lg btn-block">Login</button>
    </form>
   </div>
 </body>
</html>