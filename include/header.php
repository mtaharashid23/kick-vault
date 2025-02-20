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
    <header class="header">
        <div class="header-top">
            <div class="container">
                <p>Sign up to emails and enjoy 20% off your first order</p>
            </div>
        </div>
        <nav class="header-main navbar navbar-expand-lg">
            <div class="container">
                <form action="" class="header-main__form">
                    <input type="text" placeholder="Search..">
                    <button type="submit"><i class="far fa-search"></i></button>
                </form>
                <a class="navbar-brand header-main__logo" href="index.php">
                    <img src="images/logo.png" alt="image" class="img-fluid">
                </a>
                <ul class="header-main__links">
                    <li><a href=""><i class="fal fa-user-circle"></i> Sign in</a></li>
                    <li><a href=""><i class="far fa-heart"></i> <span>0</span></a></li>
                    <li><a href=""><i class="far fa-shopping-cart"></i> <span>0</span></a></li>
                </ul>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="fas fa-bars"></span>
                </button>
            </div>
        </nav>
        <div class="header-nav collapse navbar-collapse" id="navbarSupportedContent">
            <div class="container">
                <ul class="navbar-nav header-nav__list">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Faq</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>