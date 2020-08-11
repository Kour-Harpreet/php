<?php
$pageTitle = 'Index |PHP Introduction';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle ?></title>
    <!-- styles -->
    <link rel="stylesheet" type ="text/css" href ="css/main.css">
    <!-- scripts -->
    <script type ="text/JavaScript" src="js/scripts.js" defer></script>
</head>
<body>
<h1><?php echo $pageTitle ?></h1>
    <?php echo 'test!'; ?>
    <?php include 'includes/navigation.php'; //shows nav here ?>
</body>
</html>