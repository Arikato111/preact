<?php 
require('./modules/use-import/main.m.php');
$Main = import('./src/index'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/public/icon.svg" type="image/svg">
    <title><?php echo $GLOBALS['title']; ?></title>
    <link rel="stylesheet" href="/public/style.css">
    <?php $showStyle(); ?>
</head>

<body>
    <?php echo $Main->root; ?>
    <script src="/public/script.js"></script>
</body>

</html>