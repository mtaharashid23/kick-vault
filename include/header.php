<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "include/css.php" ?>
</head>

<body>

    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>

    <!-- HEADER -->
    <header class="header <?= isset($themeLight) ? $themeLight : '' ?>">
        <nav class="header-main navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand header-main__logo" href="index.php">
                    <img src="images/logo.png" alt="image" class="img-fluid">
                </a>
                <ul class="header-main__links">
                    <li><a href="" class="openNav"><i class="fas fa-bars"></i></a></li>
                </ul>
            </div>
        </nav>
        <div class="header-main__nav">
            <a href="#" class="closeBtn"><i class="fas fa-times"></i></a>
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">About Us</a></li>
                <li><a href="">Shop</a></li>
                <li><a href="">Contact Us</a></li>
            </ul>
        </div>
    </header>