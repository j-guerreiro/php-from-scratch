<?php

namespace Src\Home;

// Main page | Home page
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/global.css">
    <link rel="stylesheet" href="/styles/header.css">
    <link rel="stylesheet" href="/styles/courses-section.css">
    <link rel="stylesheet" href="/styles/footer.css">
    <link rel="stylesheet" href="/styles/modal.css">
    <link rel="stylesheet" href="/styles/hero-carousel.css">
    <title>L2L - Home</title>
</head>

<body>
    <?php require_once __DIR__ . '/template/header.php'; ?>
    <?php require_once __DIR__ . '/template/hero.php'; ?>
    <?php require_once __DIR__ . '/template/courses-section.php'; ?>
    <?php require_once __DIR__ . '/template/footer.php'; ?>
</body>

</html>