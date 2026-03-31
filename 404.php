<?php
http_response_code(404); // Sends 404 status to browser
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>404 - Page Not Found</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1 class="error">404</h1>

    <h2>Oops! Page Not Found</h2>

    <p>
        The page you are trying to access does not exist.
    </p>

    <a href="index.php" class="btn">Go Home</a>

</div>

<!-- Animated background -->
<div class="circle c1"></div>
<div class="circle c2"></div>
<div class="circle c3"></div>

</body>
</html>