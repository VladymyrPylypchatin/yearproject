<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <link rel="stylesheet" href="icons/css/font-awesome.css">
        <!--        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">-->
        
        <link rel="stylesheet" href="owl/owl.carousel.min.css">
        <link rel="stylesheet" href="bs/css/bootstrap.css?<?= mt_rand(1, 1000000) ?>">
        <link rel="stylesheet" href="bs/css/bootstrap-grid.css?<?= mt_rand(1, 1000000) ?>">
        <link rel="stylesheet" href="stylesheet/style.css?<?= mt_rand(1, 1000000) ?>">
        <link rel="stylesheet" href="stylesheet/myaccount.css?<?= mt_rand(1, 1000000) ?>">
        <link rel="stylesheet" href="stylesheet/mypost.css?<?= mt_rand(1, 1000000) ?>">
        
        <link rel="stylesheet" href="dropdown/css/pushy.css?<?= mt_rand(1, 1000000) ?>">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="bs/js/bootstrap.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jcanvas/20.1.4/jcanvas.js"></script>
        <script src="owl/owl.carousel.min.js"></script>
        
        <title>Bachmut post</title>
    </head>
    <body>
        <nav class="pushy pushy-right d-block d-sm-none">
            <div class="pushy-content">
                
                <div class="pushy-user-header-wrapper">
                    <div class="pushy-user-content">
                        <div class="pushy-user-header d-flex  align-items-center justify-content-between">
                            <a href="" class="pushy-user-name   d-flex  align-items-center ">
                                <img src="images/ico/user.svg" style="margin-right: 10px" class="ico-md img-fluid" alt="">
                                <span class="">Владимир</span>
                            </a>
                            <i style="" class="pushy-close fa fa-times " aria-hidden="true"></i>
                        
                        </div>
                    </div>
                </div>
                
                <ul class="user-card-menu">
                    <li class=" ">
                        <a href="">
                            <img src="images/ico/home.svg" class="img-fluid ico-sm" alt="">
                            <span class="ankor">Главная</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="">
                            <img src="images/ico/menu.svg" class="img-fluid ico-sm" alt="">
                            <span class="ankor">Категории</span>
                        </a>
                    </li>
                    <div class="user-card-line"></div>
                    
                    <li class=" ">
                        <a href="">
                            <img src="images/ico/id-card.svg" class="img-fluid ico-sm" alt="">
                            <span class="ankor">Моя страница</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="images/ico/advert.svg" class="img-fluid ico-sm" alt="">
                            <span class="ankor">Объявления</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="images/ico/mail.svg" class="img-fluid ico-sm" alt="">
                            <span class="ankor">Сообщения</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="images/ico/heart.svg" class="img-fluid ico-sm" alt="">
                            <span class="ankor">Избранное</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="images/ico/settings.svg" class="img-fluid ico-sm" alt="">
                            <span class="ankor">Настройки</span>
                        </a>
                    </li>
                    <div class="user-card-line"></div>
                    <li class="exit">
                        <a href="">
                            <img src="images/ico/exit.svg" class="img-fluid ico-sm" alt="">
                            <span class="ankor">Выход</span>
                        </a>
                    </li>
                </ul>
            </div>
        
        </nav>
        
        <!-- Site Overlay -->
        <div class="site-overlay d-block d-sm-none"></div>
        
        <div class="header-wrapper">
            <div class="header-main">
                <div class=" container">
                    <div class="row   d-flex  align-items-stretch">
                        <div class="logo  col-xl-3 col-lg-3 col-md-4 col-sm-6 col-10 d-flex align-items-center">
                            <h2>
                                <span class="color-red">B</span>
                                achmut Post
                            </h2>
                        </div>
                        
                        
                        
                        <div class="header-tools col-xl-4 offset-xl-5   offset-lg-4 col-lg-5 col-md-6 offset-md-2 col-sm-4 offset-sm-2 d-none d-sm-flex">
                            <div class="love d-none d-sm-block">
                                <a href="" class="heart-a">
                                    <span class="fa fa-heart-o ico-md heart" aria-hidden="true"></span>
                                    <div class="count-favorite">
                                        <span>
                                            4
                                        </span>
                                    </div>
                                </a>
                            </div>

                            
                            <div class="add-post-button-wrapper ">
                                <a class=" add-post-button" href="">
                                    <span class="">
                                        <img class="img-fluid " style="height: 15px" src="images/ico/plus.svg" alt="">
                                    </span>
                                    <span class="d-none d-xl-block  d-lg-block  d-md-block">Добавить объявления</span>
                                </a>
                            </div>
                            
                            
                            <div class="user ">
                                <img src="images/ico/user.svg" class="ico-md img-fluid" alt="">
                                <div class="user-card-wrapper animated">
                                    <div class="user-card-header-wrapper ">
                                        <div class="user-card-header d-flex align-items-center justify-content-between">
                                            <a href="" class=" user-card-name d-flex align-items-center justify-content-between">
                                                <img src="images/ico/user.svg" style="margin-right: 10px" class="ico-md img-fluid" alt="">
                                                <span class="user-name ">
                                                    Владимир
                                                </span>
                                            </a>
                                        
                                        </div>
                                    </div>
                                    
                                    <ul class="user-card-menu">
                                        <li class=" ">
                                            <a href="">
                                                <img src="images/ico/id-card.svg" class="img-fluid ico-sm" alt="">
                                                <span class="ankor">Моя страница</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <img src="images/ico/advert.svg" class="img-fluid ico-sm" alt="">
                                                <span class="ankor">Объявления</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <img src="images/ico/mail.svg" class="img-fluid ico-sm" alt="">
                                                <span class="ankor">Сообщения</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <img src="images/ico/heart.svg" class="img-fluid ico-sm" alt="">
                                                <span class="ankor">Избранное</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <img src="images/ico/settings.svg" class="img-fluid ico-sm" alt="">
                                                <span class="ankor">Настройки</span>
                                            </a>
                                        </li>
                                        <div class="user-card-line"></div>
                                        <li class="exit">
                                            <a href="">
                                                <img src="images/ico/exit.svg" class="img-fluid ico-sm" alt="">
                                                <span class="ankor">Выход</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        
                        </div>
                        
                        <div class="col-2  d-flex d-block d-sm-none align-items-center justify-content-end">
                            <i class="bars ico-sm  menu-btn d-block d-sm-none fa fa-bars" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cat-wrapper">
            <div class="cat-main ">
                <div class="container">
                    <ul class=" cat d-none d-sm-flex">
                        <li class="cat-item animated">
                            <a class=" cat-link cat-link-first" href="#">Электроника</a>
                            <img src="images/ico/arrow.svg" class="arrow" alt="">
                            <div class="sub-cat-wrapper">
                                <div class="sub-cat container  ">
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        <img src="images/category/electronic/smartphone-and-tablet.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Телефоны и Планшеты</p>
                                    </a>
                                    
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        <img src="images/category/electronic/photo-camera.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Фото / Видео</p>
                                    </a>
                                    
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        
                                        <img src="images/category/electronic/computer.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Компьютеры и комплектующий</p>
                                    </a>
                                    
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        
                                        <img src="images/category/electronic/monitor.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Тв и видеотехника</p>
                                    </a>
                                    
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        <img src="images/category/electronic/microphone.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Аудиотехника</p>
                                    </a>
                                    
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        <img src="images/category/electronic/laptop.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Ноутбуки и аксессуары</p>
                                    </a>
                                    
                                    <a href="" class="sub-cat-link  flex-column justify-content-start  d-none d-xl-flex d-lg-flex d-md-flex">
                                        <img src="images/category/electronic/mixer.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Кухонная техника</p>
                                    </a>
                                    
                                    <a href="" class="sub-cat-link flex-column justify-content-start d-none d-xl-flex d-lg-flex d-md-flex">
                                        <img src="images/category/electronic/washing-machine-for-laundry.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Бытовая техника</p>
                                    </a>
                                    
                                    <a href="" class="sub-cat-link  flex-column justify-content-start d-none d-xl-flex d-lg-flex">
                                        <img src="images/category/electronic/gamepad.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Игры и игровые приставки</p>
                                    </a>
                                    
                                    <a href="" class="sub-cat-link  flex-column justify-content-start d-none d-xl-flex ">
                                        <img src="images/category/electronic/cpu.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Аксессуары и комплекткющие</p>
                                    </a>
                                    
                                    <a href="" class="sub-cat-link  flex-column justify-content-start d-none d-xl-flex ">
                                        <img src="images/category/electronic/router.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Прочая электроника</p>
                                    </a>
                                </div>
                            
                            </div>
                        </li>
                        
                        <li class="cat-item animated">
                            <a class=" cat-link" href="#">Детские товары</a>
                            <img src="images/ico/arrow.svg" class="arrow" alt="">
                            <div class="sub-cat-wrapper">
                                <div class="sub-cat container ">
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        <img src="images/category/baby/baby-body.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Детская одежда</p>
                                    </a>
                                    
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        <img src="images/category/baby/shoe.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Детская обувь</p>
                                    </a>
                                    <a href="" class=" sub-cat-link d-flex flex-column justify-content-start">
                                        <img src="images/category/baby/teddy-bear.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Игрушки</p>
                                    </a>
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        
                                        <img src="images/category/baby/baby-buggy.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Детские коляски</p>
                                    </a>
                                    
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        
                                        <img src="images/category/baby/kick-scooter.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Детский транспорт</p>
                                    </a>
                                    
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        <img src="images/category/baby/cradle.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Детская мебель</p>
                                    </a>
                                    
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        <img src="images/category/baby/feeding-bottle.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Товары для кормления</p>
                                    </a>
                                    
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        <img src="images/category/baby/backpack.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Товары для школьников</p>
                                    </a>
                                </div>
                            
                            </div>
                        </li>
                        
                        <li class="cat-item animated">
                            <a class="cat-link" href="#">Недвижимость</a>
                            <img src="images/ico/arrow.svg" class="arrow " alt="">
                            <div class="sub-cat-wrapper">
                                <div class="sub-cat container ">
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        <img src="images/category/baby/baby-body.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Детская одежда</p>
                                    </a>
                                    
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        <img src="images/category/baby/shoe.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Детская обувь</p>
                                    </a>
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        <img src="images/category/baby/teddy-bear.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Игрушки</p>
                                    </a>
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        
                                        <img src="images/category/baby/baby-buggy.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Детские коляски</p>
                                    </a>
                                    
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        
                                        <img src="images/category/baby/kick-scooter.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Детский транспорт</p>
                                    </a>
                                    
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        <img src="images/category/baby/cradle.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Детская мебель</p>
                                    </a>
                                    
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        <img src="images/category/baby/feeding-bottle.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Товары для кормления</p>
                                    </a>
                                    
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        <img src="images/category/baby/backpack.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Товары для школьников</p>
                                    </a>
                                </div>
                            
                            </div>
                        </li>
                        
                        <li class="cat-item animated">
                            <a class="cat-link " href="#">Транспорт</a>
                            <img src="images/ico/arrow.svg" class="arrow" alt="">
                            <div class="sub-cat-wrapper">
                                <div class="sub-cat container ">
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        <img src="images/category/baby/baby-body.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Детская одежда</p>
                                    </a>
                                    
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        <img src="images/category/baby/shoe.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Детская обувь</p>
                                    </a>
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        <img src="images/category/baby/teddy-bear.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Игрушки</p>
                                    </a>
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        
                                        <img src="images/category/baby/baby-buggy.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Детские коляски</p>
                                    </a>
                                    
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        
                                        <img src="images/category/baby/kick-scooter.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Детский транспорт</p>
                                    </a>
                                    
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        <img src="images/category/baby/cradle.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Детская мебель</p>
                                    </a>
                                    
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        <img src="images/category/baby/feeding-bottle.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Товары для кормления</p>
                                    </a>
                                    
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        <img src="images/category/baby/backpack.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Товары для школьников</p>
                                    </a>
                                </div>
                            
                            </div>
                        </li>
                        
                        <li class="cat-item animated d-none d-xl-flex d-lg-flex d-md-flex">
                            <a class="cat-link" href="#">Дом и сад</a>
                            <img src="images/ico/arrow.svg" class="arrow" alt="">
                            <div class="sub-cat-wrapper">
                                <div class="sub-cat container ">
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        <img src="images/category/baby/baby-body.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Детская одежда</p>
                                    </a>
                                    
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        <img src="images/category/baby/shoe.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Детская обувь</p>
                                    </a>
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        <img src="images/category/baby/teddy-bear.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Игрушки</p>
                                    </a>
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        
                                        <img src="images/category/baby/baby-buggy.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Детские коляски</p>
                                    </a>
                                    
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        
                                        <img src="images/category/baby/kick-scooter.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Детский транспорт</p>
                                    </a>
                                    
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        <img src="images/category/baby/cradle.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Детская мебель</p>
                                    </a>
                                    
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        <img src="images/category/baby/feeding-bottle.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Товары для кормления</p>
                                    </a>
                                    
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        <img src="images/category/baby/backpack.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Товары для школьников</p>
                                    </a>
                                </div>
                            
                            </div>
                        </li>
                        
                        <li class="cat-item animated d-none d-xl-flex d-lg-flex">
                            <a class="cat-link" href="#">Хобби, отдых и спорт</a>
                            <img src="images/ico/arrow.svg" class="arrow" alt="">
                            <div class="sub-cat-wrapper">
                                <div class="sub-cat container ">
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        <img src="images/category/baby/baby-body.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Детская одежда</p>
                                    </a>
                                    
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        <img src="images/category/baby/shoe.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Детская обувь</p>
                                    </a>
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        <img src="images/category/baby/teddy-bear.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Игрушки</p>
                                    </a>
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        
                                        <img src="images/category/baby/baby-buggy.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Детские коляски</p>
                                    </a>
                                    
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        
                                        <img src="images/category/baby/kick-scooter.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Детский транспорт</p>
                                    </a>
                                    
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        <img src="images/category/baby/cradle.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Детская мебель</p>
                                    </a>
                                    
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        <img src="images/category/baby/feeding-bottle.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Товары для кормления</p>
                                    </a>
                                    
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        <img src="images/category/baby/backpack.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Товары для школьников</p>
                                    </a>
                                </div>
                            
                            </div>
                        </li>
                        
                        <li class="cat-item animated d-none d-xl-flex d-lg-flex">
                            <a class="cat-link" href="#">Бизнес и услуги</a>
                            <img src="images/ico/arrow.svg" class="arrow" alt="">
                            <div class="sub-cat-wrapper">
                                <div class="sub-cat container ">
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        <img src="images/category/baby/baby-body.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Детская одежда</p>
                                    </a>
                                    
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        <img src="images/category/baby/shoe.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Детская обувь</p>
                                    </a>
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        <img src="images/category/baby/teddy-bear.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Игрушки</p>
                                    </a>
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        
                                        <img src="images/category/baby/baby-buggy.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Детские коляски</p>
                                    </a>
                                    
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        
                                        <img src="images/category/baby/kick-scooter.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Детский транспорт</p>
                                    </a>
                                    
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        <img src="images/category/baby/cradle.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Детская мебель</p>
                                    </a>
                                    
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        <img src="images/category/baby/feeding-bottle.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Товары для кормления</p>
                                    </a>
                                    
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        <img src="images/category/baby/backpack.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Товары для школьников</p>
                                    </a>
                                </div>
                            
                            </div>
                        </li>
                        
                        <li class="cat-item animated d-none d-xl-flex">
                            <a class="cat-link" href="#">Животные</a>
                            <img src="images/ico/arrow.svg" class="arrow" alt="">
                            <div class="sub-cat-wrapper">
                                <div class="sub-cat container ">
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        <img src="images/category/baby/baby-body.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Детская одежда</p>
                                    </a>
                                    
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        <img src="images/category/baby/shoe.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Детская обувь</p>
                                    </a>
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        <img src="images/category/baby/teddy-bear.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Игрушки</p>
                                    </a>
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        
                                        <img src="images/category/baby/baby-buggy.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Детские коляски</p>
                                    </a>
                                    
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        
                                        <img src="images/category/baby/kick-scooter.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Детский транспорт</p>
                                    </a>
                                    
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        <img src="images/category/baby/cradle.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Детская мебель</p>
                                    </a>
                                    
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        <img src="images/category/baby/feeding-bottle.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Товары для кормления</p>
                                    </a>
                                    
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        <img src="images/category/baby/backpack.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Товары для школьников</p>
                                    </a>
                                </div>
                            
                            </div>
                        </li>
                        
                        <li class="cat-item animated d-none d-xl-flex">
                            <a class="cat-link" href="#">Одежда и обувь</a>
                            <img src="images/ico/arrow.svg" class="arrow" alt="">
                            <div class="sub-cat-wrapper">
                                <div class="sub-cat container ">
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        <img src="images/category/baby/baby-body.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Детская одежда</p>
                                    </a>
                                    
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        <img src="images/category/baby/shoe.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Детская обувь</p>
                                    </a>
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        <img src="images/category/baby/teddy-bear.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Игрушки</p>
                                    </a>
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        
                                        <img src="images/category/baby/baby-buggy.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Детские коляски</p>
                                    </a>
                                    
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        
                                        <img src="images/category/baby/kick-scooter.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Детский транспорт</p>
                                    </a>
                                    
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        <img src="images/category/baby/cradle.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Детская мебель</p>
                                    </a>
                                    
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        <img src="images/category/baby/feeding-bottle.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Товары для кормления</p>
                                    </a>
                                    
                                    <a href="" class="sub-cat-link d-flex flex-column justify-content-start">
                                        <img src="images/category/baby/backpack.svg" class="img-fluid ico-lg" alt="">
                                        <p class="sub-cat-name d-flex  justify-content-center">Товары для школьников</p>
                                    </a>
                                </div>
                            
                            </div>
                        </li>
                        
                        <li class="dop-cat-item">
                            <a class="cat-link cat-link-last active" href="#">Ещё
                                <span class="count-dop-cats">5</span>
                            </a>
                        </li>
                    </ul>
                    <div class="more-cats d-block d-sm-none">
                        <a class="more-cats-button" href="">Смотреть все категории
                            <img src="images/ico/next.svg" class="ico-sm img-fluid" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="account-wrapper">
            <div class="account-main container">
                <div class="account-sidebar ">
                    
                    <ul class="account-sidebar-menu">
                        <li class="sidebar-menu-item active">
                            <a href="">
                                <div class="item-body">
                                    <div class="menu-item-ico">
                                        <img src="images/ico/id-card.svg" class="img-fluid" alt="">
                                    </div>
                                    <div class="menu-item-name">
                                        Мой профиль
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a href="">
                                <div class="item-body">
                                    <div class="menu-item-ico">
                                        <img src="images/ico/mail.svg" class="img-fluid" alt="">
                                    </div>
                                    <div class="menu-item-name">
                                        Сообщения
                                    </div>
                                </div>
                                <div class="menu-item-count">
                                    <span>9</span>
                                </div>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a href="">
                                <div class="item-body">
                                    
                                    <div class="menu-item-ico">
                                        <img src="images/ico/advert.svg" class="img-fluid" alt="">
                                    </div>
                                    <div class="menu-item-name">
                                        Объявления
                                    </div>
                                </div>
                            
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a href="">
                                <div class="item-body">
                                    
                                    <div class="menu-item-ico">
                                        <img src="images/ico/heart.svg" class="img-fluid" alt="">
                                    </div>
                                    <div class="menu-item-name">
                                        Избранное
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a href="">
                                <div class="item-body">
                                    
                                    <div class="menu-item-ico">
                                        <img src="images/ico/stats.svg" class="img-fluid" alt="">
                                    </div>
                                    <div class="menu-item-name">
                                        Статистика
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a href="">
                                <div class="item-body">
                                    
                                    <div class="menu-item-ico">
                                        <img src="images/ico/settings.svg" class="img-fluid" alt="">
                                    </div>
                                    <div class="menu-item-name">
                                        Настройки
                                    </div>
                                </div>
                            
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="account-body ">
                    <div class="managed-post-wrapper account-container">
                        <div class="page-title">
                            <h2>Мои Объявления</h2>
                        </div>
                        <div class="post-condition-wrapper">
                            <ul class="post-condition-body">
                                <li class="active post-condition-item">
                                    <a href="">Активные</a>
                                </li>
                                <li class="post-condition-item">
                                    <a href="">Ожидающие</a>
                                </li>
                                <li class="post-condition-item">
                                    <a href="">Неактивные</a>
                                </li>
                                <li class="post-condition-deleted post-condition-item">
                                    <a href="">Удалёные</a>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="managed-post-header">
                            <div class="managed-post-fast-search">
                                <form lpformnum="1" _lpchecked="1">
                                    <div class="row">
                                        <div class="form-input col-xl-9 col-8 ">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <spsan class="input-group-text" id="inputGroupPrepend">
                                                        <span style="" class="ico-sm fa fa-search"></span>
                                                    </spsan>
                                                </div>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-input col-xl-3 col-4">
                                            <button type="submit" class="btn btn-search ">
                                                Поиск
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="managed-post-group">
                                <div class="managed-post">
                                    <div class="managed-post-body row">
                                        <div class="managed-post-left col-xl-3 col-lg-4 col-md-4">
                                            <div class="managed-post-preview">
                                                <img src="images/product1.jpg" class="img-fluid" alt="">
                                            </div>
                                        </div>
                                        <div class="managed-post-center col-xl-6 col-lg-8 col-md-8">
                                            <div class="managed-post-title">
                                                <h3>Macbook midle 2017 1tb ssd retina 4k...</h3>
                                            </div>
                                            <div class="managed-post-statistic">
                                                <div class="managed-post-views">
                                                    <div class="statistic-ico">
                                                        <img src="images/ico/eye.svg" alt="" class="img-fluid">
                                                    </div>
                                                    <div class="statistic-name">
                                                        <span>Просмотров</span>
                                                    </div>
                                                    <div class="statistic-result">
                                                        <span>763</span>
                                                    </div>
                                                </div>
                                                <div class="managed-post-phones">
                                                    <div class="statistic-ico">
                                                        <img src="images/ico/phone.svg" alt="" class="img-fluid">
                                                    </div>
                                                    <div class="statistic-name">
                                                        <span>Тел.</span>
                                                    </div>
                                                    <div class="statistic-result">
                                                        <span>249</span>
                                                    </div>
                                                </div>
                                                <div class="managed-post-favorites">
                                                    <div class="statistic-ico">
                                                        <img src="images/ico/heart.svg" alt="" class="img-fluid">
                                                    </div>
                                                    <div class="statistic-name">
                                                        <span>В избр.</span>
                                                    </div>
                                                    <div class="statistic-result">
                                                        <span>428</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="managed-post-date">
                                                <div class="post-date-ico">
                                                    <img src="images/ico/calendar.svg" class="img-fluid" alt="">
                                                </div>
                                                <div class="post-date-block">
                                                    <div class="post-date-from">
                                                        Опубликовано:
                                                        <span>15 декабря</span>
                                                    </div>
                                                    <div class="post-date-to">
                                                        Активно до:
                                                        <span>21 января</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="managed-post-right col-xl-3 offset-xl-0 col-lg-5 offset-lg-4 col-md-5 offset-md-4">
                                            <div class="managed-post-cost">
                                                97 263 грн.
                                            </div>
                                            <div class="managed-post-id">
                                                ID:
                                                <span>28347782</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="managed-post-footer">
                                        <div class="post-footer-container row">
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-3">
                                                <div class="custom-btn blue-button">
                                                    <a href="">
                                                        <div class="button-ico">
                                                            <img src="images/ico/pencil.svg" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="button-name">
                                                            Редактировать
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-3">
                                                <div class="custom-btn blue-button">
                                                    <a href="">
                                                        <div class="button-ico">
                                                            <img src="images/ico/email.svg" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="button-name">
                                                            Сообщения
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-3">
                                                <div class="custom-btn blue-button">
                                                    <a href="">
                                                        <div class="button-ico">
                                                            <img src="images/ico/newspaper.svg" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="button-name">
                                                            Разместить в газете
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-3">
                                                <div class="custom-btn red-button">
                                                    <a href="">
                                                        <div class="button-ico">
                                                            <img src="images/ico/bin.svg" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="button-name">
                                                            Деактивировать
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="managed-post">
                                    <div class="managed-post-body row">
                                        <div class="managed-post-left col-xl-3 col-lg-4 col-md-4">
                                            <div class="managed-post-preview">
                                                <img src="images/product2.jpg" class="img-fluid" alt="">
                                            </div>
                                        </div>
                                        <div class="managed-post-center col-xl-6 col-lg-8 col-md-8">
                                            <div class="managed-post-title">
                                                <h3>Macbook midle 2017 1tb ssd retina 4k...</h3>
                                            </div>
                                            <div class="managed-post-statistic">
                                                <div class="managed-post-views">
                                                    <div class="statistic-ico">
                                                        <img src="images/ico/eye.svg" alt="" class="img-fluid">
                                                    </div>
                                                    <div class="statistic-name">
                                                        <span>Просмотров</span>
                                                    </div>
                                                    <div class="statistic-result">
                                                        <span>763</span>
                                                    </div>
                                                </div>
                                                <div class="managed-post-phones">
                                                    <div class="statistic-ico">
                                                        <img src="images/ico/phone.svg" alt="" class="img-fluid">
                                                    </div>
                                                    <div class="statistic-name">
                                                        <span>Тел.</span>
                                                    </div>
                                                    <div class="statistic-result">
                                                        <span>249</span>
                                                    </div>
                                                </div>
                                                <div class="managed-post-favorites">
                                                    <div class="statistic-ico">
                                                        <img src="images/ico/heart.svg" alt="" class="img-fluid">
                                                    </div>
                                                    <div class="statistic-name">
                                                        <span>В избр.</span>
                                                    </div>
                                                    <div class="statistic-result">
                                                        <span>428</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="managed-post-date">
                                                <div class="post-date-ico">
                                                    <img src="images/ico/calendar.svg" class="img-fluid" alt="">
                                                </div>
                                                <div class="post-date-block">
                                                    <div class="post-date-from">
                                                        Опубликовано:
                                                        <span>15 декабря</span>
                                                    </div>
                                                    <div class="post-date-to">
                                                        Активно до:
                                                        <span>21 января</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="managed-post-right col-xl-3 offset-xl-0 col-lg-5 offset-lg-4 col-md-5 offset-md-4">
                                            <div class="managed-post-cost">
                                                97 263 грн.
                                            </div>
                                            <div class="managed-post-id">
                                                ID:
                                                <span>28347782</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="managed-post-footer">
                                        <div class="post-footer-container row">
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-3">
                                                <div class="custom-btn blue-button">
                                                    <a href="">
                                                        <div class="button-ico">
                                                            <img src="images/ico/pencil.svg" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="button-name">
                                                            Редактировать
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-3">
                                                <div class="custom-btn blue-button">
                                                    <a href="">
                                                        <div class="button-ico">
                                                            <img src="images/ico/email.svg" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="button-name">
                                                            Сообщения
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-3">
                                                <div class="custom-btn blue-button">
                                                    <a href="">
                                                        <div class="button-ico">
                                                            <img src="images/ico/newspaper.svg" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="button-name">
                                                            Разместить в газете
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-3">
                                                <div class="custom-btn red-button">
                                                    <a href="">
                                                        <div class="button-ico">
                                                            <img src="images/ico/bin.svg" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="button-name">
                                                            Деактивировать
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="managed-post">
                                    <div class="managed-post-body row">
                                        <div class="managed-post-left col-xl-3 col-lg-4 col-md-4">
                                            <div class="managed-post-preview">
                                                <img src="images/product3.jpg" class="img-fluid" alt="">
                                            </div>
                                        </div>
                                        <div class="managed-post-center col-xl-6 col-lg-8 col-md-8">
                                            <div class="managed-post-title">
                                                <h3>Macbook midle 2017 1tb ssd retina 4k...</h3>
                                            </div>
                                            <div class="managed-post-statistic">
                                                <div class="managed-post-views">
                                                    <div class="statistic-ico">
                                                        <img src="images/ico/eye.svg" alt="" class="img-fluid">
                                                    </div>
                                                    <div class="statistic-name">
                                                        <span>Просмотров</span>
                                                    </div>
                                                    <div class="statistic-result">
                                                        <span>763</span>
                                                    </div>
                                                </div>
                                                <div class="managed-post-phones">
                                                    <div class="statistic-ico">
                                                        <img src="images/ico/phone.svg" alt="" class="img-fluid">
                                                    </div>
                                                    <div class="statistic-name">
                                                        <span>Тел.</span>
                                                    </div>
                                                    <div class="statistic-result">
                                                        <span>249</span>
                                                    </div>
                                                </div>
                                                <div class="managed-post-favorites">
                                                    <div class="statistic-ico">
                                                        <img src="images/ico/heart.svg" alt="" class="img-fluid">
                                                    </div>
                                                    <div class="statistic-name">
                                                        <span>В избр.</span>
                                                    </div>
                                                    <div class="statistic-result">
                                                        <span>428</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="managed-post-date">
                                                <div class="post-date-ico">
                                                    <img src="images/ico/calendar.svg" class="img-fluid" alt="">
                                                </div>
                                                <div class="post-date-block">
                                                    <div class="post-date-from">
                                                        Опубликовано:
                                                        <span>15 декабря</span>
                                                    </div>
                                                    <div class="post-date-to">
                                                        Активно до:
                                                        <span>21 января</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="managed-post-right col-xl-3 offset-xl-0 col-lg-5 offset-lg-4 col-md-5 offset-md-4">
                                            <div class="managed-post-cost">
                                                97 263 грн.
                                            </div>
                                            <div class="managed-post-id">
                                                ID:
                                                <span>28347782</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="managed-post-footer">
                                        <div class="post-footer-container row">
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-3">
                                                <div class="custom-btn blue-button">
                                                    <a href="">
                                                        <div class="button-ico">
                                                            <img src="images/ico/pencil.svg" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="button-name">
                                                            Редактировать
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-3">
                                                <div class="custom-btn blue-button">
                                                    <a href="">
                                                        <div class="button-ico">
                                                            <img src="images/ico/email.svg" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="button-name">
                                                            Сообщения
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-3">
                                                <div class="custom-btn blue-button">
                                                    <a href="">
                                                        <div class="button-ico">
                                                            <img src="images/ico/newspaper.svg" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="button-name">
                                                            Разместить в газете
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-3">
                                                <div class="custom-btn red-button">
                                                    <a href="">
                                                        <div class="button-ico">
                                                            <img src="images/ico/bin.svg" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="button-name">
                                                            Деактивировать
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="managed-post">
                                    <div class="managed-post-body row">
                                        <div class="managed-post-left col-xl-3 col-lg-4 col-md-4">
                                            <div class="managed-post-preview">
                                                <img src="images/product4.jpg" class="img-fluid" alt="">
                                            </div>
                                        </div>
                                        <div class="managed-post-center col-xl-6 col-lg-8 col-md-8">
                                            <div class="managed-post-title">
                                                <h3>Macbook midle 2017 1tb ssd retina 4k...</h3>
                                            </div>
                                            <div class="managed-post-statistic">
                                                <div class="managed-post-views">
                                                    <div class="statistic-ico">
                                                        <img src="images/ico/eye.svg" alt="" class="img-fluid">
                                                    </div>
                                                    <div class="statistic-name">
                                                        <span>Просмотров</span>
                                                    </div>
                                                    <div class="statistic-result">
                                                        <span>763</span>
                                                    </div>
                                                </div>
                                                <div class="managed-post-phones">
                                                    <div class="statistic-ico">
                                                        <img src="images/ico/phone.svg" alt="" class="img-fluid">
                                                    </div>
                                                    <div class="statistic-name">
                                                        <span>Тел.</span>
                                                    </div>
                                                    <div class="statistic-result">
                                                        <span>249</span>
                                                    </div>
                                                </div>
                                                <div class="managed-post-favorites">
                                                    <div class="statistic-ico">
                                                        <img src="images/ico/heart.svg" alt="" class="img-fluid">
                                                    </div>
                                                    <div class="statistic-name">
                                                        <span>В избр.</span>
                                                    </div>
                                                    <div class="statistic-result">
                                                        <span>428</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="managed-post-date">
                                                <div class="post-date-ico">
                                                    <img src="images/ico/calendar.svg" class="img-fluid" alt="">
                                                </div>
                                                <div class="post-date-block">
                                                    <div class="post-date-from">
                                                        Опубликовано:
                                                        <span>15 декабря</span>
                                                    </div>
                                                    <div class="post-date-to">
                                                        Активно до:
                                                        <span>21 января</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="managed-post-right col-xl-3 offset-xl-0 col-lg-5 offset-lg-4 col-md-5 offset-md-4">
                                            <div class="managed-post-cost">
                                                97 263 грн.
                                            </div>
                                            <div class="managed-post-id">
                                                ID:
                                                <span>28347782</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="managed-post-footer">
                                        <div class="post-footer-container row">
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-3">
                                                <div class="custom-btn blue-button">
                                                    <a href="">
                                                        <div class="button-ico">
                                                            <img src="images/ico/pencil.svg" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="button-name">
                                                            Редактировать
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-3">
                                                <div class="custom-btn blue-button">
                                                    <a href="">
                                                        <div class="button-ico">
                                                            <img src="images/ico/email.svg" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="button-name">
                                                            Сообщения
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-3">
                                                <div class="custom-btn blue-button">
                                                    <a href="">
                                                        <div class="button-ico">
                                                            <img src="images/ico/newspaper.svg" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="button-name">
                                                            Разместить в газете
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-3">
                                                <div class="custom-btn red-button">
                                                    <a href="">
                                                        <div class="button-ico">
                                                            <img src="images/ico/bin.svg" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="button-name">
                                                            Деактивировать
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="managed-post">
                                    <div class="managed-post-body row">
                                        <div class="managed-post-left col-xl-3 col-lg-4 col-md-4">
                                            <div class="managed-post-preview">
                                                <img src="images/product5.jpg" class="img-fluid" alt="">
                                            </div>
                                        </div>
                                        <div class="managed-post-center col-xl-6 col-lg-8 col-md-8">
                                            <div class="managed-post-title">
                                                <h3>Macbook midle 2017 1tb ssd retina 4k...</h3>
                                            </div>
                                            <div class="managed-post-statistic">
                                                <div class="managed-post-views">
                                                    <div class="statistic-ico">
                                                        <img src="images/ico/eye.svg" alt="" class="img-fluid">
                                                    </div>
                                                    <div class="statistic-name">
                                                        <span>Просмотров</span>
                                                    </div>
                                                    <div class="statistic-result">
                                                        <span>763</span>
                                                    </div>
                                                </div>
                                                <div class="managed-post-phones">
                                                    <div class="statistic-ico">
                                                        <img src="images/ico/phone.svg" alt="" class="img-fluid">
                                                    </div>
                                                    <div class="statistic-name">
                                                        <span>Тел.</span>
                                                    </div>
                                                    <div class="statistic-result">
                                                        <span>249</span>
                                                    </div>
                                                </div>
                                                <div class="managed-post-favorites">
                                                    <div class="statistic-ico">
                                                        <img src="images/ico/heart.svg" alt="" class="img-fluid">
                                                    </div>
                                                    <div class="statistic-name">
                                                        <span>В избр.</span>
                                                    </div>
                                                    <div class="statistic-result">
                                                        <span>428</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="managed-post-date">
                                                <div class="post-date-ico">
                                                    <img src="images/ico/calendar.svg" class="img-fluid" alt="">
                                                </div>
                                                <div class="post-date-block">
                                                    <div class="post-date-from">
                                                        Опубликовано:
                                                        <span>15 декабря</span>
                                                    </div>
                                                    <div class="post-date-to">
                                                        Активно до:
                                                        <span>21 января</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="managed-post-right col-xl-3 offset-xl-0 col-lg-5 offset-lg-4 col-md-5 offset-md-4">
                                            <div class="managed-post-cost">
                                                97 263 грн.
                                            </div>
                                            <div class="managed-post-id">
                                                ID:
                                                <span>28347782</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="managed-post-footer">
                                        <div class="post-footer-container row">
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-3">
                                                <div class="custom-btn blue-button">
                                                    <a href="">
                                                        <div class="button-ico">
                                                            <img src="images/ico/pencil.svg" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="button-name">
                                                            Редактировать
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-3">
                                                <div class="custom-btn blue-button">
                                                    <a href="">
                                                        <div class="button-ico">
                                                            <img src="images/ico/email.svg" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="button-name">
                                                            Сообщения
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-3">
                                                <div class="custom-btn blue-button">
                                                    <a href="">
                                                        <div class="button-ico">
                                                            <img src="images/ico/newspaper.svg" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="button-name">
                                                            Разместить в газете
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-3">
                                                <div class="custom-btn red-button">
                                                    <a href="">
                                                        <div class="button-ico">
                                                            <img src="images/ico/bin.svg" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="button-name">
                                                            Деактивировать
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="dropdown/js/pushy.js"></script>
        <script>
            $registerTab = $(".login-header .register");
            $loginTab = $(".login-header .login");
            $loginBody = $(".login-body");
            $registerBody = $(".register-body");
            $(document).ready(function () {
                $(".login-header .tab").on("click", function () {
                    if (!$(this).is(".active")) {

                        $(".active").removeClass("active");
                        $(this).addClass("active");
                        if ($(this).is(".register")) {
                            $loginBody.hide();
                            $registerBody.addClass(".active").show();
                        } else {
                            $registerBody.hide();
                            $loginBody.addClass(".active").show();
                        }
                    }
                });

            });
        </script>
        <!--        LoginTabs-->
        <script>
            var timerMenuOpen,
                timerMenuClose;

            $(".user").on("mouseenter ", function () {
                clearTimeout(timerMenuClose);
                timerMenuOpen = setTimeout(function () {
                    $(".drop-down-card").fadeOut(300);
                    $(".search-region-card").fadeOut(100);
                    $(".user-card-name").animate({
                        marginLeft: "0px"
                    }, 200);
                    $(".user-card-wrapper").fadeIn(200);
                    $(".user-name").fadeTo(200, 1);
                }, 400);


            }).on("mouseleave", function () {
                clearTimeout(timerMenuOpen);
                timerMenuClose = setTimeout(function () {
                    hideMenu()

                }, 300);
            });
            function hideMenu() {
                $(".user-name").fadeTo(100, 0);
                $(".user-card-name").animate({
                    marginLeft: "160px"
                }, 200);
                $(".user-card-wrapper").fadeOut(300);


            }
        
        </script>
        <!--        menuScript-->
        <script>
            $(window).resize(function () {
                var countCats = 14;
                var countVisibleCats = $(".cat-item:visible").length;
                var countHiddenCats = countCats - countVisibleCats;
                $(".count-dop-cats").html(countHiddenCats)
            });
        </script>
        <!--        catScript-->
        <script>

            var closeTimer;
            var openTimer;
            var timer;


            $(".cat-item").on("mouseenter", function () {
                var $subMenu = $(this);
                var $subCat = $(".sub-cat-wrapper");
                var $arrow = $(".arrow");
                clearTimeout(closeTimer);

                if ($subMenu.is(".active-item")) {
                    clearTimeout(timer);
                    $(".drop-down-card").fadeOut(300);
                    $(".search-region-card").fadeOut(300);
                } else {
                    if (!$subCat.is(":visible")) {
                        openTimer = setTimeout(function () {
                            $(".drop-down-card").fadeOut(300);
                            $(".search-region-card").fadeOut(300);
                            $subMenu.addClass('active-item');
                            $subMenu.children(".arrow").fadeTo(250, 1);
                            $subMenu.children(".sub-cat-wrapper").slideDown(300);

                        }, 400);
                    }
                    else {

                        timer = setTimeout(function () {
                            $subCat.hide();
                            $arrow.hide();
                            $subMenu.children(".arrow").fadeTo(250, 1);
                            $subMenu.children(".sub-cat-wrapper").show();
                            $subMenu.children(".sub-cat-wrapper").children(".sub-cat").hide();
                            $subMenu.children(".sub-cat-wrapper").children(".sub-cat").fadeTo(700, 1);
                            $(".active-item").removeClass('active-item');
                            $subMenu.addClass('active-item');
                        }, 300);

                    }
                }
            });
            $(".cat-item").on("mouseleave", function () {
                clearTimeout(openTimer);
            });

            $(".cat-main").on("mouseleave", function (event) {
                clearTimeout(openTimer);
                closeTimer = setTimeout(function () {
                    $(".sub-cat-wrapper").slideUp(300);
                    $(".arrow").fadeTo(300, 0);
                    $(".active-item").removeClass('active-item');
                }, 400);


            });
        
        </script>
        <!--        subCatScript-->
        <script>
            function hoverElement(selector) {
                $(selector).on("mouseenter", function () {
                    if (!$(this).is(".active-sub-cat")) {
                        var iconName = $(this).children().attr('src').split('.');
                        $(this).children().attr('src', iconName[0] + '-hover.' + iconName[1]);
                    }


                }).on("mouseleave", function () {
                    if (!$(this).is(".active-sub-cat")) {
                        var iconName = $(this).children().attr('src').split('-hover');
                        $(this).children().attr('src', iconName[0] + iconName[1]);
                    }
                });
            }
            hoverElement(".sub-cat-link");
            hoverElement(".user-card-menu a");

            if ($(".cat-link").is(".active-sub-cat")) {
                var $activeSubCaty = $(".active-sub-cat");
                var activeSubCat = $activeSubCaty.children("img").attr('src').split('.');
                $activeSubCaty.children("img").attr('src', activeSubCat[0] + '-hover.' + activeSubCat[1]);
            }

            $(".region-list ul li a").on("mouseenter", function () {
                var iconName = $(this).children("span:eq(1)").children().attr("src").split(".");
                $(this).children("span:eq(1)").children().attr('src', iconName[0] + '-hover.' + iconName[1]);
            }).on("mouseleave", function () {
                var iconName = $(this).children("span:eq(1)").children().attr('src').split('-hover');
                $(this).children("span:eq(1)").children().attr('src', iconName[0] + iconName[1]);
            });
        
        </script>
        <!--        elementHover-->
    
    </body>
</html>