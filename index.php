<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title>Главная</title>
    <link rel="icon" type="image/x-icon" href="./assets/img/svg/favicon.svg">
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
<div class="container">
    <div class="row row-cols-1 row-cols-md-2 mt-1">
        <div class="col mt-4">
            <div class="card shadow">
                <div class="card-header">
                    <div class="row">
                    <div class="col">
                        <span style="font-size: 1.5em;"><b>Заявки</b></span>
                    </div>
                    <div class="col text-end pt-1">
                        <a href="#" class="pe-3"><img src="./assets/img/svg/plus.svg" alt="Add application" title="Добавить" style="width: 30px; height: 30px;"></a>
                    </div>
                </div>
                </div>
                <div class="card-body">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    Новые: <span class="badge bg-secondary ms-1">5</span>
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ol>
                                        <li>First</li>
                                        <li>Second</li>
                                        <li>Third</li>
                                        <li>Fourth</li>
                                        <li>Fifth</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    Невыполненные:  <span class="badge bg-danger ms-1">4</span>
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ol>
                                        <li>First</li>
                                        <li>Second</li>
                                        <li>Third</li>
                                        <li>Fourth</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col mt-4">
            <div class="card shadow">
                <div class="card-header">
                    <div class="row">
                    <div class="col">
                        <span style="font-size: 1.5em;"><b>Задачи</b></span>
                    </div>
                    <div class="col text-end pt-1">
                        <a href="#" class="pe-3"><img src="./assets/img/svg/plus.svg" alt="Add application" title="Добавить" style="width: 30px; height: 30px;"></a>
                    </div>
                </div>
                </div>
                <div class="card-body">
                    <div class="accordion accordion-flush" id="accordionFlushExample2">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    Новые:   <span class="badge bg-secondary ms-1">3</span>
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample2">
                                <div class="accordion-body">
                                    <ol>
                                        <li>First</li>
                                        <li>Second</li>
                                        <li>Third</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                    Невыполненные:   <span class="badge bg-danger ms-1">4</span>
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample2">
                                <div class="accordion-body">
                                    <ol>
                                        <li>First</li>
                                        <li>Second</li>
                                        <li>Third</li>
                                        <li>Fourth</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar fixed-bottom" style="
                                        background: rgba(228, 181, 255, 0.8);
                                        border-radius: 1px;
                                        border: 1px solid rgba(255, 255, 255, 0.6);">
    <div class="container-fluid">

        <div class="container">
        <div class="row row-cols-3">
            <div class="col">
        <a class="btn col-12" href="index.php">
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
        <div class="offcanvas offcanvas-bottom pt-3" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel"
        style="
             background: rgba(200, 103, 255, 0.9);
             border-radius: 1px;
             border: 1px solid rgba(255, 255, 255, 0.5);
             height: 90vh;">
                        <div class="col-12 text-center mb-1">
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <a href="#" class="btn d-block" style="color: white; font-size: 1.4em; font-weight: 600;">Заявки</a>
                        <a href="#" class="btn d-block" style="color: white; font-size: 1.4em; font-weight: 600;">Задачи</a>
                        <a href="#" class="btn d-block" style="color: white; font-size: 1.4em; font-weight: 600;">Ремонт</a>
                        <a href="#" class="btn d-block" style="color: white; font-size: 1.4em; font-weight: 600;">Акты</a>
                        <a href="#" class="btn d-block" style="color: white; font-size: 1.4em; font-weight: 600;">Оборудование</a>
                        <a href="#" class="btn d-block" style="color: white; font-size: 1.4em; font-weight: 600;">Арендаторы</a>
                        <a href="#" class="btn d-block" style="color: white; font-size: 1.4em; font-weight: 600;">ТРК</a>
                        <a href="#" class="btn d-block" style="color: white; font-size: 1.4em; font-weight: 600;">Склад</a>
                        <a href="#" class="btn d-block" style="color: white; font-size: 1.4em; font-weight: 600;">Заказы</a>
                        <a href="#" class="btn d-block" style="color: white; font-size: 1.4em; font-weight: 600;">ХОВС</a>
                        <a href="#" class="btn d-block" style="color: white; font-size: 1.4em; font-weight: 600;">Счетчики</a>
        </div>
    </div>
</nav>
<script src="./assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
