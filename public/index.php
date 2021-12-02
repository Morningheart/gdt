<?php $app = require __DIR__.'/../bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/

$app->run(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuit de l'Info 2021</title>
    <link rel="stylesheet" href="https://unpkg.com/@vtmn/css" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="content">
        <?php include "html/menu.html" ?>
    </div>
    <script src="main.js"></script>
</body>
</html>