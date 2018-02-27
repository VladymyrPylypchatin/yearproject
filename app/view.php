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
        <link rel="stylesheet" href="stylesheet/view.css?<?= mt_rand(1, 1000000) ?>">
        
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
                                <span class="">Владимир   s</span>
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
                            <a class="active-cat cat-link" href="#">Детские товары</a>
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
                                    <a href="" class=" active-sub-cat sub-cat-link d-flex flex-column justify-content-start">
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
        <div class="one-product-wrapper">
            <div class="container">
                <div class="row one-product-path">
                    <div class="col cat-path ">
                        <a href="">Все объявления</a>
                        <span class="point fa fa-circle"></span>
                        <a href="">Детские товары</a>
                        <span class="point fa fa-circle"></span>
                        <a href="">Игрушки</a>
                    </div>
                </div>
                <div class="row one-product-header">
                    <div class="col-xl-11 col-sm-11 one-product-title">
                        <a href="" class="one-product-add-to-favorite">
                            <span class="fa fa-heart-o heart" aria-hidden="true"></span>
                        </a>
                        <h1>
                            iPhone X gold 64Gb neverlock + РОЗСТРОЧКА та гарантія
                        </h1>
                    </div>
                </div>
                <div class="row one-product-content">
                    <div class="one-product-body col-xl-9">
                        <div class="product-gallery">
                            <div class="owl-carousel">
                                <div>
                                    
                                    <img src="images/product13.jpg" alt="" class="">
                                </div>
                                <div>
                                    
                                    <img src="images/product11.jpg" alt="" class="">
                                </div>
                                <div>
                                    
                                    <img src="images/product10.jpg" alt="" class="">
                                </div>
                                <div>
                                    <img src="images/product9.jpg" alt="" class="">
                                </div>
                                <div>
                                    <img src="images/product7.jpg" alt="" class="">
                                </div>
                                <div>
                                    <img src="images/product6.jpg" alt="" class="">
                                </div>
                                <div>
                                    <img src="images/product5.jpg" alt="" class="">
                                </div>
                                <div>
                                    <img src="images/product4.jpg" alt="" class="">
                                </div>
                                <div>
                                    <img src="images/product3.jpg" alt="" class="">
                                </div>
                                <div>
                                    <img src="images/product2.jpg" alt="" class="">
                                </div>
                                <div>
                                    <img src="images/product1.jpg" alt="" class="">
                                </div>
                            
                            </div>
                            <script>
                                $(document).ready(function () {
                                    $(".product-gallery .owl-carousel").owlCarousel({
                                        items: 1,
                                        nav: true,
                                        autoplay: false,
                                        navText: ["<span class='product-nav-arrow fa  fa-chevron-left'><span>", "<span class='product-nav-arrow fa fa-chevron-right'><span>"],
                                        loop: true
                                    });
                                });
                            </script>
                        </div>
                        <div class="d-none d-xl-block">
                            
                            <div class="product-description">
                                <p>
                                    Смартфон ХХ століття - iPhone X
                                    <br>
                                    Apple завжди мріяли зробити iPhone одним великим дисплеєм. Настільки вражаючим дисплеєм, щоб ви забували про фізичному пристрої. І настільки розумним пристроєм, щоб воно реагувало на дотик, слово і навіть погляд. iPhone X втілює мрію в реальність.
                                    <br>
                                    Це смартфон майбутнього.
                                    <br>
                                    <br>
                                    Все, що потрібно знати - це постійна наявность в ЯБКО (вул. Незалежності, 8)
                                    <br>
                                    <br>
                                    Об'єм пам'яті 64GB / 256GB
                                    <br>
                                    Колір SPACE GRAY / SILVER
                                    <br>
                                    Відсутність Touch ID. Face ID, Edge Sense дисплей, TrueDepth камера,
                                    <br>
                                    <br>
                                    Фронтальна камера 7MP
                                    <br>
                                    Основна камера 12MP
                                    <br>
                                    Оперативна пам'ять 3GB
                                    <br>
                                    Процесор Apple A11 Bionic
                                    <br>
                                    Розширення екрану 2436 x 1125 (458 ppi)
                                    <br>
                                    Діагональ екрану 5.8"
                                    <br>
                                    Рік випуску 2017
                                    <br>
                                    <br>
                                    Новий запакований телефон з офіційною гарантією від виробника та стандартною місячною гарантією магазину з можливим продовженням до 1 року в мережі!
                                    <br>
                                    <br>
                                    При оформленні річного обслуговування від магазину Ви отримуєте програми, загальна вартість яких складає близько 600$.
                                    <br>
                                    Окрім цього Ви отримуєте: гарантовану знижку на аксесуари в розмірі 30%, безкоштовне захисне скло, знижки на не гарантійні ремонти, повний сервіс та налаштування телефону.
                                    <br>
                                    <br>
                                    Також можливий обмін Вашого старого пристрою на новий.
                                    <br>
                                    Оцінка телефону проходить безпосередньо в магазині та перевіряється на справність.
                                </p>
                            </div>
                            <div class="product-communicate-author">
                                <form>
                                    <div class="form-group col-xl-12 ">
                                        <label for="fast-communicate">Связаться с автором</label>
                                        
                                        <div class="communicate-author">
                                        </div>
                                        <textarea class="form-control" id="fast-communicate" rows="10"></textarea>
                                    </div>
                                    <div class="form-group col-xl-4 col-lg-5">
                                        <button type="submit" class="btn btn-search ">
                                            <img src="images/ico/mail-hover.svg" class="img-fluid ico-lg" style="margin-right: 5px" alt="">
                                            Отправить
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="one-product-sidebar col-xl-3  col-lg-12">
                        <div class="product-sidebar-block">
                            <div class="sidebar-block-content">
                                
                                <div class="one-product-cost">
                                    <span>57 000 грн</span>
                                </div>
                                <div class="one-post-info">
                                    <ul>
                                        <li>
                                            <span>Тип объявления:</span>
                                            <span>
                                                Бизнес
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                Добавлено:
                                            </span>
                                            <span>
                                                16:40, 4 декабря 2017
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                Номер объявления:
                                            </span>
                                            <span>
                                                23460543
                                            </span>
                                        </li>
                                    
                                    </ul>
                                </div>
                                <div class="sidebar-block-button">
                                    <a href="">
                                        +380 99 XXXXXXXXXX
                                    </a>
                                </div>
                                <div class="sidebar-block-button">
                                    <a href="">
                                        Написать автору
                                    </a>
                                </div>
                            
                            </div>
                            <div class="one-product-author">
                                <a href="">
                                    <img src="images/ico/user.svg" style="margin-right: 10px" class="ico-md img-fluid" alt="">
                                    <span>Саня</span>
                                </a>
                            </div>
                        </div>
                        <div class="product-sidebar-block">
                            <div class="sidebar-block-content">
                                
                                <div class="sidebar-block-title">
                                    <span>Информация о авторе</span>
                                </div>
                                <div class="author-info">
                                    <ul>
                                        <li>
                                            <span>ID пользователя</span>
                                            <span>6342523</span>
                                        </li>
                                        <li>
                                            <span>Работает с сайтом</span>
                                            <span>3 года</span>
                                        </li>
                                        <li>
                                            <span>Всего объявлений</span>
                                            <span>43</span>
                                        </li>
                                        <li>
                                            <span>
                                                Регион
                                            </span>
                                            <span>
                                                Киевская обл
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                Город
                                            </span>
                                            <span>
                                                Киев
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            
                            </div>
                        
                        </div>
                        <div class="product-sidebar-block">
                            <div class="sidebar-block-content">
                                
                                <div class="sidebar-block-title">
                                    <span>Характеристики</span>
                                </div>
                                <div class="one-product-info">
                                    <ul>
                                        
                                        <li>
                                            <span>Вид товара</span>
                                            <span>
                                                <a href="">Cмартфоны</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>Марка телефона</span>
                                            <span>
                                                <a href="">Apple</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>Диагональ экрана</span>
                                            <span>
                                                <a href="">5.55" - 6"</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>Опирационная система</span>
                                            <span>
                                                <a href="">IOS</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>Состояние</span>
                                            <span>
                                                <a href="">Б/у</a>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="one-product-body col-12 d-xl-none">
                        <div class="product-description">
                            <p>
                                Смартфон ХХ століття - iPhone X
                                <br>
                                Apple завжди мріяли зробити iPhone одним великим дисплеєм. Настільки вражаючим дисплеєм, щоб ви забували про фізичному пристрої. І настільки розумним пристроєм, щоб воно реагувало на дотик, слово і навіть погляд. iPhone X втілює мрію в реальність.
                                <br>
                                Це смартфон майбутнього.
                                <br>
                                <br>
                                Все, що потрібно знати - це постійна наявность в ЯБКО (вул. Незалежності, 8)
                                <br>
                                <br>
                                Об'єм пам'яті 64GB / 256GB
                                <br>
                                Колір SPACE GRAY / SILVER
                                <br>
                                Відсутність Touch ID. Face ID, Edge Sense дисплей, TrueDepth камера,
                                <br>
                                <br>
                                Фронтальна камера 7MP
                                <br>
                                Основна камера 12MP
                                <br>
                                Оперативна пам'ять 3GB
                                <br>
                                Процесор Apple A11 Bionic
                                <br>
                                Розширення екрану 2436 x 1125 (458 ppi)
                                <br>
                                Діагональ екрану 5.8"
                                <br>
                                Рік випуску 2017
                                <br>
                                <br>
                                Новий запакований телефон з офіційною гарантією від виробника та стандартною місячною гарантією магазину з можливим продовженням до 1 року в мережі!
                                <br>
                                <br>
                                При оформленні річного обслуговування від магазину Ви отримуєте програми, загальна вартість яких складає близько 600$.
                                <br>
                                Окрім цього Ви отримуєте: гарантовану знижку на аксесуари в розмірі 30%, безкоштовне захисне скло, знижки на не гарантійні ремонти, повний сервіс та налаштування телефону.
                                <br>
                                <br>
                                Також можливий обмін Вашого старого пристрою на новий.
                                <br>
                                Оцінка телефону проходить безпосередньо в магазині та перевіряється на справність.
                            </p>
                        </div>
                        <div class="product-communicate-author">
                            <form>
                                <div class="form-group col-xl-12 ">
                                    <label for="fast-communicate">Связаться с автором</label>
                                    
                                    <div class="communicate-author">
                                    </div>
                                    <textarea class="form-control" id="fast-communicate" rows="10"></textarea>
                                </div>
                                <div class="form-group col-xl-4 col-lg-5">
                                    <button type="submit" class="btn btn-search ">
                                        <img src="images/ico/mail-hover.svg" class="img-fluid ico-lg" style="margin-right: 5px" alt="">
                                        Отправить
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            
            </div>
            <div class=" similar-products-wrapper">
                <div class="container">
                    <div class="row ">
                        <div class="col-xl-12 similar-products">
                            <div class="similar-products-title">
                                <span>
                                    Похожие объявления
                                </span>
                            </div>
                            <div class="owl-carousel">
                                
                                <div class="product">
                                    
                                    <a class="product-link " href="">
                                        <div class="product-content">
                                            <div class="product-preview d-flex  justify-content-center">
                                                <img src="images/product1.jpg" class="img-fluid align-self-center" alt="" data-adaptive-background>
                                            </div>
                                            <h3 class="product-name">
                                                Macbook late 2017 - midle ...
                                            </h3>
                                        </div>
                                    
                                    </a>
                                    
                                    <a href="" class="product-cat">
                                        <div class="product-content">
                                            Ноутбуки
                                        </div>
                                    </a>
                                    <a class="product-link" href="">
                                        <div class="product-content">
                                            
                                            <p class="product-cost">50 678 грн</p>
                                        </div>
                                    
                                    </a>
                                    <a class="product-link" href="">
                                        <div class="product-content">
                                            <div class="product-info d-flex justify-content-between align-items-center">
                                                <p class="product-date">14 нояб.</p>
                                                <span class="favorite fa fa-heart-o"></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="product">
                                    
                                    <a class="product-link " href="">
                                        <div class="product-content">
                                            <div class="product-preview d-flex  justify-content-center">
                                                <img src="images/product2.jpg" class="img-fluid align-self-center" alt="" data-adaptive-background>
                                            </div>
                                            <h3 class="product-name">
                                                Macbook late 2017 - midle ...
                                            </h3>
                                        </div>
                                    
                                    </a>
                                    
                                    <a href="" class="product-cat">
                                        <div class="product-content">
                                            Ноутбуки
                                        </div>
                                    </a>
                                    <a class="product-link" href="">
                                        <div class="product-content">
                                            
                                            <p class="product-cost">50 678 грн</p>
                                        </div>
                                    
                                    </a>
                                    <a class="product-link" href="">
                                        <div class="product-content">
                                            <div class="product-info d-flex justify-content-between align-items-center">
                                                <p class="product-date">14 нояб.</p>
                                                <span class="favorite fa fa-heart-o"></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="product">
                                    
                                    <a class="product-link " href="">
                                        <div class="product-content">
                                            <div class="product-preview d-flex  justify-content-center">
                                                <img src="images/product3.jpg" class="img-fluid align-self-center" alt="" data-adaptive-background>
                                            </div>
                                            <h3 class="product-name">
                                                Macbook late 2017 - midle ...
                                            </h3>
                                        </div>
                                    
                                    </a>
                                    
                                    <a href="" class="product-cat">
                                        <div class="product-content">
                                            Ноутбуки
                                        </div>
                                    </a>
                                    <a class="product-link" href="">
                                        <div class="product-content">
                                            
                                            <p class="product-cost">50 678 грн</p>
                                        </div>
                                    
                                    </a>
                                    <a class="product-link" href="">
                                        <div class="product-content">
                                            <div class="product-info d-flex justify-content-between align-items-center">
                                                <p class="product-date">14 нояб.</p>
                                                <span class="favorite fa fa-heart-o"></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="product">
                                    
                                    <a class="product-link " href="">
                                        <div class="product-content">
                                            <div class="product-preview d-flex  justify-content-center">
                                                <img src="images/product4.jpg" class="img-fluid align-self-center" alt="" data-adaptive-background>
                                            </div>
                                            <h3 class="product-name">
                                                Macbook late 2017 - midle ...
                                            </h3>
                                        </div>
                                    
                                    </a>
                                    
                                    <a href="" class="product-cat">
                                        <div class="product-content">
                                            Ноутбуки
                                        </div>
                                    </a>
                                    <a class="product-link" href="">
                                        <div class="product-content">
                                            
                                            <p class="product-cost">50 678 грн</p>
                                        </div>
                                    
                                    </a>
                                    <a class="product-link" href="">
                                        <div class="product-content">
                                            <div class="product-info d-flex justify-content-between align-items-center">
                                                <p class="product-date">14 нояб.</p>
                                                <span class="favorite fa fa-heart-o"></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="product">
                                    
                                    <a class="product-link " href="">
                                        <div class="product-content">
                                            <div class="product-preview d-flex  justify-content-center">
                                                <img src="images/product5.jpg" class="img-fluid align-self-center" alt="" data-adaptive-background>
                                            </div>
                                            <h3 class="product-name">
                                                Macbook late 2017 - midle ...
                                            </h3>
                                        </div>
                                    
                                    </a>
                                    
                                    <a href="" class="product-cat">
                                        <div class="product-content">
                                            Ноутбуки
                                        </div>
                                    </a>
                                    <a class="product-link" href="">
                                        <div class="product-content">
                                            
                                            <p class="product-cost">50 678 грн</p>
                                        </div>
                                    
                                    </a>
                                    <a class="product-link" href="">
                                        <div class="product-content">
                                            <div class="product-info d-flex justify-content-between align-items-center">
                                                <p class="product-date">14 нояб.</p>
                                                <span class="favorite fa fa-heart-o"></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="product">
                                    
                                    <a class="product-link " href="">
                                        <div class="product-content">
                                            <div class="product-preview d-flex  justify-content-center">
                                                <img src="images/product6.jpg" class="img-fluid align-self-center" alt="" data-adaptive-background>
                                            </div>
                                            <h3 class="product-name">
                                                Macbook late 2017 - midle ...
                                            </h3>
                                        </div>
                                    
                                    </a>
                                    
                                    <a href="" class="product-cat">
                                        <div class="product-content">
                                            Ноутбуки
                                        </div>
                                    </a>
                                    <a class="product-link" href="">
                                        <div class="product-content">
                                            
                                            <p class="product-cost">50 678 грн</p>
                                        </div>
                                    
                                    </a>
                                    <a class="product-link" href="">
                                        <div class="product-content">
                                            <div class="product-info d-flex justify-content-between align-items-center">
                                                <p class="product-date">14 нояб.</p>
                                                <span class="favorite fa fa-heart-o"></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="product">
                                    
                                    <a class="product-link " href="">
                                        <div class="product-content">
                                            <div class="product-preview d-flex  justify-content-center">
                                                <img src="images/product7.jpg" class="img-fluid align-self-center" alt="" data-adaptive-background>
                                            </div>
                                            <h3 class="product-name">
                                                Macbook late 2017 - midle ...
                                            </h3>
                                        </div>
                                    
                                    </a>
                                    
                                    <a href="" class="product-cat">
                                        <div class="product-content">
                                            Ноутбуки
                                        </div>
                                    </a>
                                    <a class="product-link" href="">
                                        <div class="product-content">
                                            
                                            <p class="product-cost">50 678 грн</p>
                                        </div>
                                    
                                    </a>
                                    <a class="product-link" href="">
                                        <div class="product-content">
                                            <div class="product-info d-flex justify-content-between align-items-center">
                                                <p class="product-date">14 нояб.</p>
                                                <span class="favorite fa fa-heart-o"></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="product">
                                    
                                    <a class="product-link " href="">
                                        <div class="product-content">
                                            <div class="product-preview d-flex  justify-content-center">
                                                <img src="images/product8.jpg" class="img-fluid align-self-center" alt="">
                                            </div>
                                            <h3 class="product-name">
                                                Macbook late 2017 - midle ...
                                            </h3>
                                        </div>
                                    
                                    </a>
                                    
                                    <a href="" class="product-cat">
                                        <div class="product-content">
                                            Ноутбуки
                                        </div>
                                    </a>
                                    <a class="product-link" href="">
                                        <div class="product-content">
                                            
                                            <p class="product-cost">50 678 грн</p>
                                        </div>
                                    
                                    </a>
                                    <a class="product-link" href="">
                                        <div class="product-content">
                                            <div class="product-info d-flex justify-content-between align-items-center">
                                                <p class="product-date">14 нояб.</p>
                                                <span class="favorite fa fa-heart-o"></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            
                            </div>
                        </div>
                        <script>
                            $(document).ready(function () {
                                $(".similar-products  .owl-carousel").owlCarousel({
                                    margin: 5,
                                    autoplay: true,
                                    nav: true,
                                    navText: ["<span class='product-nav-arrow fa  fa-chevron-left'><span>", "<span class='product-nav-arrow fa fa-chevron-right'><span>"],
                                    loop: true,
                                    responsive: {
                                        0: {
                                            items: 1
                                        },
                                        576: {
                                            items: 1
                                        },
                                        768: {
                                            items: 2
                                        },
                                        992: {
                                            items: 4
                                        },
                                        1200: {
                                            items: 4
                                        }
                                    }
                                });
                            });
                        </script>
                    </div>
                </div>
            
            </div>
        </div>
        
        <script src="dropdown/js/pushy.js"></script>
        <!--        sidebarMenuScript-->
        
        <!--        categoryChoseScript-->
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
            var $activeSubCaty = $(".active-sub-cat");
            var activeSubCat = $activeSubCaty.children("img").attr('src').split('.');
            $activeSubCaty.children("img").attr('src', activeSubCat[0] + '-hover.' + activeSubCat[1]);

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