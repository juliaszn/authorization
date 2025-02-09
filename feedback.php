<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Feedback</title>
</head>
<body>
<h1>Please provide feedback on the service.</h1>
<form method="post">
    <label for="name"> Your name:
        <input type="text" name="name" required>
    </label>
    <br><br>
    <label for="email"> Email:
        <input type="email" name="email" required>
    </label>
    <br><br>
    <label for="message"> Message:
        <input type="text" name="message" required>
    </label>
    <br><br>
    <input type="reset" value="Remove">
    <button type="submit">Send</button>
</form>
</body>
</html>
