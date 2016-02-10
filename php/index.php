<?php
<<<<<<< HEAD
$url = parse_url($_SERVER['REQUEST_URI']); //server is an associative array
=======
$url = parse_url($_SERVER['REQUEST_URI']);
>>>>>>> dd127347d12c8bb16a0f6d7fa4d2cd6133701c08
$name = substr($url['path'], 1);
if (strlen($name) == 0) {
    $name = 'World';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta charset="UTF-8">
<<<<<<< HEAD
    <title>Hello <?= $name ?></title>
</head>
<body>
    <h1>Hello <?= htmlentities($name) ?>!</h1>
=======
    <title>Hello <?= htmlentities($name) ?></title>
</head>
<body>
    <h1>Hello <?= htmlentities($name) ?>!</h1>
    
>>>>>>> dd127347d12c8bb16a0f6d7fa4d2cd6133701c08
</body>
</html>