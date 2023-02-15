<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title>Main</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <link rel="stylesheet" href="./assets/css/normalize.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar fixed-bottom" style="
                                        background: rgba(58, 90, 255, 0.9);
                                        border-radius: 1px;
                                        border: 1px solid rgba(255, 255, 255, 0.4);">
    <div class="container-fluid">

        <div class="container">
        <div class="row row-cols-3">
            <div class="col">
        <a class="btn col-12" href="#">
            <img src="./assets/img/svg/home.svg" alt="Home picture" width="24" height="24">
        </a>
            </div>
            <div class="col">
            <button class="btn col-12" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                <span class="navbar-toggler-icon"></span>
            </button>
            </div>
            <div class="col">
                <a class="btn col-12" href="#">
                    <img src="./assets/img/svg/back.svg" alt="Home picture" width="24" height="24">
                </a>
            </div>
        </div>
        </div>

        <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel"
        style="
             background: rgba(182, 109, 255, 0.7);
             border-radius: 1px;
             border: 1px solid rgba(255, 255, 255, 0.4);">
                        <a href="#" class="btn d-block" style="color: white; font-size: 1em; font-weight: bold;">Заявки</a>
                        <a href="#" class="btn d-block" style="color: white; font-size: 1em; font-weight: bold;">Задачи</a>
                        <a href="#" class="btn d-block" style="color: white; font-size: 1em; font-weight: bold;">Ремонт</a>
                        <a href="#" class="btn d-block" style="color: white; font-size: 1em; font-weight: bold;">Акты</a>
                        <a href="#" class="btn d-block" style="color: white; font-size: 1em; font-weight: bold;">Оборудование</a>
        </div>


    </div>
</nav>
<script src="./assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
