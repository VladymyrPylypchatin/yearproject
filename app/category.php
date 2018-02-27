<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <link rel="stylesheet" href="icons/css/font-awesome.css">
        <!--        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">-->
        
        <link rel="stylesheet" href="bs/css/bootstrap.css?<?= mt_rand(1, 1000000) ?>">
        <link rel="stylesheet" href="bs/css/bootstrap-grid.css?<?= mt_rand(1, 1000000) ?>">
        <link rel="stylesheet" href="stylesheet/style.css?<?= mt_rand(1, 1000000) ?>">
        
        <link rel="stylesheet" href="dropdown/css/pushy.css?<?= mt_rand(1, 1000000) ?>">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="bs/js/bootstrap.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jcanvas/20.1.4/jcanvas.js"></script>
        
        <link rel="stylesheet" href="owl/owl.carousel.min.css">
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
        
        <div class="search-wrapper">
            <div class="search">
                <div class="container">
                    <form>
                        <div class="row">
                            <div class="form-input col-xl-3 col-lg-4 col-md-6">
                                <div class="drop-down-wrapper">
                                    <div class="drop-down">
                                        <div class="drop-down-ico-block">
                                            <img src="images/category/baby/teddy-bear.svg" class="drop-down-ico img-fluid ico-sm" alt="">
                                        </div>
                                        <div class="drop-down-name-chosen">
                                            <span>Игрушки</span>
                                        </div>
                                        <span class="drop-down-ico-chosen">
                                            <img src="images/ico/arrow-down.svg" class="img-fluid ico-xs" alt="">
                                        </span>
                                    </div>
                                    <div class="animated drop-down-card">
                                        <ul>
                                            
                                            <li class="drop-down-item">
                                                <span class="drop-down-cat-ico">
                                                    <img src="images/ico/menu.svg" class="img-fluid ico-sm" alt="">
                                                </span>
                                                <span class="drop-down-cat-name">Все подкатегории</span>
                                            </li>
                                            <li class="drop-down-item">
                                                <span class="drop-down-cat-ico">
                                                    <img src="images/category/baby/baby-body.svg" class="img-fluid ico-sm" alt="">
                                                </span>
                                                <span class="drop-down-cat-name">Детская одежда</span>
                                            </li>
                                            <li class="drop-down-item">
                                                <span class="drop-down-cat-ico">
                                                    <img src="images/category/baby/shoe.svg" class="img-fluid ico-sm" alt="">
                                                </span>
                                                <span class="drop-down-cat-name">Детские обувь</span>
                                                <span class="hover-arrow">
                                                    <img src="images/ico/arrow-right.svg" class="img-fluid ico-xs" alt="">
                                                </span>
                                            </li>
                                            <li class=" active-drop-down-item drop-down-item">
                                                <span class="drop-down-cat-ico">
                                                    <img src="images/category/baby/teddy-bear.svg" class="img-fluid ico-sm" alt="">
                                                </span>
                                                <span class="drop-down-cat-name">Игрушки</span>
                                                <span class="hover-arrow">
                                                    <img src="images/ico/arrow-right.svg" class="img-fluid ico-xs" alt="
                                                    ">
                                                </span>
                                            </li>
                                            <li class="drop-down-item">
                                                <span class="drop-down-cat-ico">
                                                    <img src="images/category/baby/baby-buggy.svg" class="img-fluid ico-sm" alt="">
                                                </span>
                                                <span class="drop-down-cat-name">Детские коляски</span>
                                                <span class="hover-arrow">
                                                    <img src="images/ico/arrow-right.svg" class="img-fluid ico-xs" alt="
                                                    ">
                                                </span>
                                            </li>
                                            <li class="drop-down-item">
                                                <span class="drop-down-cat-ico">
                                                    <img src="images/category/baby/kick-scooter.svg" class="img-fluid ico-sm" alt="">
                                                </span>
                                                <span class="drop-down-cat-name">Детский транспорт</span>
                                                <span class="hover-arrow">
                                                    <img src="images/ico/arrow-right.svg" class="img-fluid ico-xs" alt="
                                                    ">
                                                </span>
                                            </li>
                                            <li class="drop-down-item">
                                                <span class="drop-down-cat-ico">
                                                    <img src="images/category/baby/cradle.svg" class="img-fluid ico-sm" alt="">
                                                </span>
                                                <span class="drop-down-cat-name">Детская мебель</span>
                                                <span class="hover-arrow">
                                                    <img src="images/ico/arrow-right.svg" class="img-fluid ico-xs" alt="
                                                    ">
                                                </span>
                                            </li>
                                            <li class="drop-down-item">
                                                <span class="drop-down-cat-ico">
                                                    <img src="images/category/baby/feeding-bottle.svg" class="img-fluid ico-sm" alt="">
                                                </span>
                                                <span class="drop-down-cat-name">Товары для кормления</span>
                                                <span class="hover-arrow">
                                                    <img src="images/ico/arrow-right.svg" class="img-fluid ico-xs" alt="">
                                                </span>
                                            </li>
                                            <li class="drop-down-item">
                                                <span class="drop-down-cat-ico">
                                                    <img src="images/category/baby/backpack.svg" class="img-fluid ico-sm" alt="">
                                                </span>
                                                <span class="drop-down-cat-name">Товары для школьников</span>
                                                <span class="hover-arrow">
                                                    <img src="images/ico/arrow-right.svg" class="img-fluid ico-xs">
                                                </span>
                                            </li>
                                        
                                        </ul>
                                    
                                    </div>
                                </div>
                            
                            </div>
                            
                            <div class="form-input col-xl-3 col-lg-4 col-md-6">
                                <div class="search-region input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend">
                                            <img src="images/ico/map-marker.svg" class="img-fluid ico-sm" alt="">
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Вся Украина">
                                    <div class="search-region-card">
                                        <div class="search-region-content">
                                            <div class="region-header">
                                                <a href="">Вся Украина</a>
                                                <span style="" class="region-close fa fa-times " aria-hidden="true"></span>
                                            </div>
                                            <div class="region-list">
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <span>
                                                                Винницкая обл
                                                            </span>
                                                            <span class="region-arrow">
                                                                <img src="images/ico/region-arrow.svg" class="img-fluid ico-xs" alt="">
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span>
                                                                Днепропетровская обл
                                                            </span>
                                                            <span class="region-arrow">
                                                                <img src="images/ico/region-arrow.svg" class="img-fluid ico-xs" alt="">
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span>
                                                                Донецкая обл
                                                            </span>
                                                            <span class="region-arrow">
                                                                <img src="images/ico/region-arrow.svg" class="img-fluid ico-xs" alt="">
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span>
                                                                Житомирская обл
                                                            </span>
                                                            <span class="region-arrow">
                                                                <img src="images/ico/region-arrow.svg" class="img-fluid ico-xs" alt="">
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span>
                                                                Закарпатская обл
                                                            </span>
                                                            <span class="region-arrow">
                                                                <img src="images/ico/region-arrow.svg" class="img-fluid ico-xs" alt="">
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span>
                                                                Запорожская обл
                                                            </span>
                                                            <span class="region-arrow">
                                                                <img src="images/ico/region-arrow.svg" class="img-fluid ico-xs" alt="">
                                                            </span>
                                                        </a>
                                                    </li>
                                                
                                                </ul>
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <span>
                                                                Ивано-Франковская обл
                                                            </span>
                                                            <span class="region-arrow">
                                                                <img src="images/ico/region-arrow.svg" class="img-fluid ico-xs" alt="">
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span>
                                                                Киевская обл
                                                            </span>
                                                            <span class="region-arrow">
                                                                <img src="images/ico/region-arrow.svg" class="img-fluid ico-xs" alt="">
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span>
                                                                Кировоградская обл
                                                            </span>
                                                            <span class="region-arrow">
                                                                <img src="images/ico/region-arrow.svg" class="img-fluid ico-xs" alt="">
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span>
                                                                Крым обл
                                                            </span>
                                                            <span class="region-arrow">
                                                                <img src="images/ico/region-arrow.svg" class="img-fluid ico-xs" alt="">
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span>
                                                                Луганская обл
                                                            </span>
                                                            <span class="region-arrow">
                                                                <img src="images/ico/region-arrow.svg" class="img-fluid ico-xs" alt="">
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span>
                                                                Львовская обл
                                                            </span>
                                                            <span class="region-arrow">
                                                                <img src="images/ico/region-arrow.svg" class="img-fluid ico-xs" alt="">
                                                            </span>
                                                        </a>
                                                    </li>
                                                
                                                </ul>
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <span>
                                                                Одесская обл
                                                            </span>
                                                            <span class="region-arrow">
                                                                <img src="images/ico/region-arrow.svg" class="img-fluid ico-xs" alt="">
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span>
                                                                Полтавская обл
                                                            </span>
                                                            <span class="region-arrow">
                                                                <img src="images/ico/region-arrow.svg" class="img-fluid ico-xs" alt="">
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span>
                                                                Ровенска обл
                                                            </span>
                                                            <span class="region-arrow">
                                                                <img src="images/ico/region-arrow.svg" class="img-fluid ico-xs" alt="">
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span>
                                                                Сумская обл
                                                            </span>
                                                            <span class="region-arrow">
                                                                <img src="images/ico/region-arrow.svg" class="img-fluid ico-xs" alt="">
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span>
                                                                Харьковская обл
                                                            </span>
                                                            <span class="region-arrow">
                                                                <img src="images/ico/region-arrow.svg" class="img-fluid ico-xs" alt="">
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span>
                                                                Херсонская обл
                                                            </span>
                                                            <span class="region-arrow">
                                                                <img src="images/ico/region-arrow.svg" class="img-fluid ico-xs" alt="">
                                                            </span>
                                                        
                                                        </a>
                                                    </li>
                                                
                                                </ul>
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <span>
                                                                Хмельницкая обл
                                                            </span>
                                                            <span class="region-arrow">
                                                                <img src="images/ico/region-arrow.svg" class="img-fluid ico-xs" alt="">
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span>
                                                                Черкасская обл
                                                            </span>
                                                            <span class="region-arrow">
                                                                <img src="images/ico/region-arrow.svg" class="img-fluid ico-xs" alt="">
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span>
                                                                Черниговская обл
                                                            </span>
                                                            <span class="region-arrow">
                                                                <img src="images/ico/region-arrow.svg" class="img-fluid ico-xs" alt="">
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span>
                                                                Черновицкая обл
                                                            </span>
                                                            <span class="region-arrow">
                                                                <img src="images/ico/region-arrow.svg" class="img-fluid ico-xs" alt="">
                                                            </span>
                                                        </a>
                                                    </li>
                                                
                                                </ul>
                                            
                                            </div>
                                        
                                        </div>
                                    </div>
                                    <div class="search-proposals-card">
                                        <ul>
                                            <li class="proposals-item">
                                                <a href="">
                                                    <span class="propose-region">
                                                        <b>Бахм</b>
                                                        ут,
                                                    </span>
                                                    <span class="propose-city-location">Донецкая обл</span>
                                                </a>
                                            </li>
                                            <li class="proposals-item">
                                                <a href="">
                                                    <span class="propose-region">
                                                        <b>Бахм</b>
                                                        етовка,
                                                    </span>
                                                    <span class="propose-city-location">Харьеовская обл</span>
                                                </a>
                                            </li>
                                            <li class="proposals-item">
                                                <a href="">
                                                    <span class="propose-region">
                                                        <b>Бахм</b>
                                                        утовка,
                                                    </span>
                                                    <span class="propose-city-location">Луганская обл</span>
                                                </a>
                                            </li>
                                            <li class="proposals-item">
                                                <a href="">
                                                    <span class="propose-region">
                                                        <b>Бахм</b>
                                                        утское,
                                                    </span>
                                                    <span class="propose-city-location">Донецкая обл</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="form-input col-xl-6 col-lg-4 col-md-12">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend">
                                            <img src="images/ico/search.svg" class="img-fluid ico-sm" alt="">
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Поиск">
                                </div>
                            </div>
                            
                            <div class="form-input col-xl-2 col-lg-2">
                                <button type="submit" class="btn btn-search ">
                                    Поиск
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        
        </div>
        <div class="post-wrapper">
            <div class="post container">
                <div class="main-cat-info">
                    <div class="row">
                        <div class="col-12 cat-path ">
                            <a href="">Все объявления</a>
                            <span class="point fa fa-circle"></span>
                            <a href="">Детские товары</a>
                            <span class="point fa fa-circle"></span>
                            <a href="">Игрушки</a>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-xl-8  col-sm-6 col-xs-12 main-cat-name">Игрушки</div>
                        <div class="found-sort col-xl-4 col-sm-6 col-xs-12 ">
                            <p class="founded-post">Найдено
                                <span>37921</span>
                                объявление
                            </p>
                        </div>
                    </div>
                </div>
                <div class="cat-sort">
                    <div class="row">
                        <div class="col-xl-8 col-lg-9 col-md-6">
                            <ul class="sort-list">
                                <li class="sort-item">
                                    <a href="">
                                        Самые новые
                                    </a>
                                </li>
                                <li class="sort-item">
                                    <a href="">
                                        Самые популярные
                                    </a>
                                </li>
                                <li class="sort-item">
                                    <a href="">
                                        Самые дешевые
                                    </a>
                                </li>
                                <li class="sort-item">
                                    <a href="">
                                        Самые дорогие
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xl-3 offset-xl-1 col-lg-3 col-md-6">
                            <ul class="currency-list">
                                <li class="sort-item">
                                    <a href="">
                                        UAH
                                    </a>
                                </li>
                                <li class="sort-item">
                                    <a href="">
                                        USD
                                    </a>
                                </li>
                                <li class="sort-item">
                                    <a href="">
                                        EUR
                                    </a>
                                </li>
                            
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6">
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
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
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
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="product">
                            
                            <a class="product-link " href="">
                                <div class="product-content">
                                    <div class="product-preview d-flex  justify-content-center">
                                        <img src="images/product8.jpg" class="img-fluid align-self-center" alt="" data-adaptive-background>
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
                    <div class="col-xl-3 col-lg-3 col-md-6">
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
                    
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="product">
                            
                            <a class="product-link " href="">
                                <div class="product-content">
                                    <div class="product-preview d-flex justify-content-center ">
                                        <img src="images/product9.jpg" class="img-fluid align-self-center" alt="">
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
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="product">
                            
                            <a class="product-link " href="">
                                <div class="product-content">
                                    <div class="product-preview d-flex justify-content-center ">
                                        <img src="images/product10.jpg" class="img-fluid align-self-center" alt="">
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
                    <div class="col-xl-3 col-lg-3 col-md-6 ">
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
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
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
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
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
                    
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
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
                    
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="product">
                            
                            <a class="product-link " href="">
                                <div class="product-content">
                                    <div class="product-preview d-flex justify-content-center ">
                                        <img src="images/product9.jpg" class="img-fluid align-self-center" alt="">
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
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="product">
                            
                            <a class="product-link " href="">
                                <div class="product-content">
                                    <div class="product-preview d-flex justify-content-center ">
                                        <img src="images/product10.jpg" class="img-fluid align-self-center" alt="">
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
                    <div class="col-xl-3 col-lg-3 col-md-6">
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
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
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
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
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
                    
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
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
                    
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="product">
                            
                            <a class="product-link " href="">
                                <div class="product-content">
                                    <div class="product-preview d-flex justify-content-center ">
                                        <img src="images/product9.jpg" class="img-fluid align-self-center" alt="">
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
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="product">
                            
                            <a class="product-link " href="">
                                <div class="product-content">
                                    <div class="product-preview d-flex justify-content-center ">
                                        <img src="images/product10.jpg" class="img-fluid align-self-center" alt="">
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
                    <div class="col-xl-3 col-lg-3 col-md-6">
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
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
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
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
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
                    
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
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
                    
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="product">
                            
                            <a class="product-link " href="">
                                <div class="product-content">
                                    <div class="product-preview d-flex justify-content-center ">
                                        <img src="images/product9.jpg" class="img-fluid align-self-center" alt="">
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
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="product">
                            
                            <a class="product-link " href="">
                                <div class="product-content">
                                    <div class="product-preview d-flex justify-content-center ">
                                        <img src="images/product10.jpg" class="img-fluid align-self-center" alt="">
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
                <div class="row">
                    <div class="col-12">
                        <a href="" class="more-product">Показать ещё</a>
                    </div>
                    <div class="col">
                        <nav aria-label="...">
                            <ul class="pagination">
                                <li class="page-item ">
                                    <a class="page-link" href="#" tabindex="-1">Назад</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">2
                                        <span class="sr-only">(current)</span>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">4</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">5</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">6</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">7</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">8</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">9</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">10</a>
                                </li>
                                
                                <li class="page-item">
                                    <a class="page-link" href="#">Вперёд</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                
                </div>
            </div>
        
        </div>
        <div class="footer-wrapper">
            <div class="container">
                <!--                <div class="recently-view">-->
                <!--                    <div class="recently-title">-->
                <!--                        Вы смотрели-->
                <!--                    </div>-->
                <!--                    <div class="owl-carousel">-->
                <!--                        <div class="recently-item">-->
                <!--                            <a href="">-->
                <!--                                <div class="recently-preview">-->
                <!--                                    <img src="images/product9.jpg" class="img-fluid" alt="">-->
                <!--                                </div>-->
                <!--                                <div class="recently-name">Apple iPad Air 2 16Gb Wi-Fi + Cellular</div>-->
                <!--                            </a>-->
                <!--                        </div>-->
                <!--                        <div class="recently-item">-->
                <!--                            <a href="">-->
                <!--                                <div class="recently-preview">-->
                <!--                                    <img src="images/product2.jpg" class="img-fluid" alt="">-->
                <!--                                </div>-->
                <!--                                <div class="recently-name">Apple iPad Air 2 16Gb Wi-Fi + Cellular</div>-->
                <!--                            </a>-->
                <!--                        </div>-->
                <!--                        <div class="recently-item">-->
                <!--                            <a href="">-->
                <!--                                <div class="recently-preview">-->
                <!--                                    <img src="images/product3.jpg" class="img-fluid" alt="">-->
                <!--                                </div>-->
                <!--                                <div class="recently-name">Apple iPad Air 2 16Gb Wi-Fi + Cellular</div>-->
                <!--                            </a>-->
                <!--                        </div>-->
                <!--                        <div class="recently-item">-->
                <!--                            <a href="">-->
                <!--                                <div class="recently-preview">-->
                <!--                                    <img src="images/product4.jpg" class="img-fluid" alt="">-->
                <!--                                </div>-->
                <!--                                <div class="recently-name">Apple iPad Air 2 16Gb Wi-Fi + Cellular</div>-->
                <!--                            </a>-->
                <!--                        </div>-->
                <!--                        <div class="recently-item">-->
                <!--                            <a href="">-->
                <!--                                <div class="recently-preview">-->
                <!--                                    <img src="images/product5.jpg" class="img-fluid" alt="">-->
                <!--                                </div>-->
                <!--                                <div class="recently-name">Apple iPad Air 2 16Gb Wi-Fi + Cellular</div>-->
                <!--                            </a>-->
                <!--                        </div>-->
                <!--                        <div class="recently-item">-->
                <!--                            <a href="">-->
                <!--                                <div class="recently-preview">-->
                <!--                                    <img src="images/product6.jpg" class="img-fluid" alt="">-->
                <!--                                </div>-->
                <!--                                <div class="recently-name">Apple iPad Air 2 16Gb Wi-Fi + Cellular</div>-->
                <!--                            </a>-->
                <!--                        </div>-->
                <!--                        <div class="recently-item">-->
                <!--                            <a href="">-->
                <!--                                <div class="recently-preview">-->
                <!--                                    <img src="images/product7.jpg" class="img-fluid" alt="">-->
                <!--                                </div>-->
                <!--                                <div class="recently-name">Apple iPad Air 2 16Gb Wi-Fi + Cellular</div>-->
                <!--                            </a>-->
                <!--                        </div>-->
                <!--                        <div class="recently-item">-->
                <!--                            <a href="">-->
                <!--                                <div class="recently-preview">-->
                <!--                                    <img src="images/product8.jpg" class="img-fluid" alt="">-->
                <!--                                </div>-->
                <!--                                <div class="recently-name">Apple iPad Air 2 16Gb Wi-Fi + Cellular</div>-->
                <!--                            </a>-->
                <!--                        </div>-->
                <!---->
                <!--                    </div>-->
                <!--                    <script>-->
                <!--                        $(document).ready(function () {-->
                <!--                            $(".owl-carousel").owlCarousel({-->
                <!--                                loop: true,-->
                <!--                                margin: 10,-->
                <!--                                items: 3,-->
                <!--                                responsiveClass: true,-->
                <!--                            });-->
                <!--                        });-->
                <!--                    </script>-->
                <!--                </div>-->
            </div>
        </div>
        <script src="dropdown/js/pushy.js"></script>
        <!--        sidebarMenuScript-->
        <script>
            $(".search-region input").on("click", function () {
                if (!$(".search-proposals-card").is(":visible")) {

                    $(".search-region-card").slideDown(300);
                }
            }).on("keyup", function () {
                $(".search-region-card").fadeOut(100);
                $inputValue = $(this).val();
                if ($inputValue.length > 1) {
                    $(".search-proposals-card").slideDown(300)
                }
            });


            $(document).on('click', function (event) {
                if ($(event.target).closest(".search-region div , .search-region input").length) return;
                $(".search-region-card").slideUp(300);
                event.stopPropagation();
            });


            $(document).on('click', function (event) {
                if ($(event.target).closest(".search-region , .search-proposals-card").length) return;
                $(".search-proposals-card").slideUp(300);
                event.stopPropagation();
            });

            $(".region-close").on("click", function () {
                $(".search-region-card").slideUp(300);
            });
        </script>
        <script>
            $(".drop-down-wrapper").on("click", function () {
                $dropDownCard = $(this).children(".drop-down-card");
                if ($dropDownCard.is(":visible")) {
                    $dropDownCard.slideUp(300);
                } else {

                    $dropDownCard.slideDown(300);
                }

            });
            $(document).on('click', function (event) {
                if ($(event.target).closest(".drop-down-card, .drop-down").length) return;
                $(".drop-down-card").slideUp(300);
                event.stopPropagation();
            });
        
        </script>
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