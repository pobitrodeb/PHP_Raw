<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css"/>
    <link rel="stylesheet" href="assets/css/style.css"/>
    <link rel="stylesheet" href="assets/css/xzoom.min.css"/>
</head>
<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a href="action.php?page=home" class="navbar-brand">LOGO</a>
            <button type="button" class="navbar-toggler" data-bs-target="#menu" data-bs-toggle="collapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto">
                    <li><a href="action.php?page=home" class="nav-link">Home</a></li>
                    <li><a href="action.php?page=about" class="nav-link">About</a></li>
                    <li class="dropdown">
                        <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Product Category </a>
                        <ul class="dropdown-menu">
                            <li><a href="action.php?page=category" class="dropdown-item">Category One</a></li>
                            <li><a href="action.php?page=category" class="dropdown-item">Category Two</a></li>
                            <li><a href="action.php?page=category" class="dropdown-item">Category Three</a></li>
                        </ul>
                    </li>
                    <li><a href="action.php?page=gallery" class="nav-link">Gallery</a></li>
                    <li><a href="action.php?page=contact" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>