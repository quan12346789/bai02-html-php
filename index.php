<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bai02-html-php</title>
</head>
<body>
    <!-- header -->
    <?php require_once './inc/header.php' ?>
    <h1>Ngon ngu lap trinh PHP<h1>
    <?php echo 'Hello World'; ?>
    <?php
        $language = 'PHP';
        var_dump($language);
    ?>
    <?php require './inc/content.php'; ?>
    <?php require './inc/content.php'; ?>

    <?php require_once './inc/header.php' ?>
    <!-- footer -->

</body>
</html>