<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Feedback</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/feedback.css" rel="stylesheet">
</head>
<body>
<div class="container">
<h2 class="text-center">Please provide feedback on the service.</h2>
<form action="send_feedback.php" method="post">
    <?php
    session_start();
    if (isset($_SESSION['success'])) {
        echo '<h3 style="color:#4aa14b;">' . $_SESSION['success']. '</h3>';
        unset($_SESSION['success']);
    }
    ?>
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Your name">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
    </div>
    <div class="mb-3">
        <label for="message" class="form-label">Message</label>
        <textarea class="form-control" id="message" name="message" rows="3"></textarea>
    </div>
    <br><br>
    <button type="reset" class="btn btn-dark">Remove</button>
    <button type="submit" class="btn btn-dark">Send</button>
</form>
</div>
</body>
</html>
