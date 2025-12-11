<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Success</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Registration Successful!</h2>

    <h3>Your Submitted Information:</h3>

    <p><strong>Ranjita j b:</strong> <?php echo $_POST['fullname']; ?></p>
    <p><strong>ranjita74112gmail.com:</strong> <?php echo $_POST['email']; ?></p>
    <p><strong>7411291554:</strong> <?php echo $_POST['phone']; ?></p>
    <p><strong>Female:</strong> <?php echo $_POST['gender']; ?></p>
    <p><strong>Haveri:</strong> <?php echo nl2br($_POST['address']); ?></p>

</div>

</body>
</html>
