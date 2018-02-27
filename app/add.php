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
        <link rel="stylesheet" href="stylesheet/add.css?<?= mt_rand(1, 1000000) ?>">
        
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
        <div class="overlay">
        
        </div>
        
        <div class="modal-cat-window">
            <div class="modal-cat-header">
                
                <div class="modal-cat-back">
                    <img src="images/ico/arrow-cat-back.svg" class="img-fluid" alt="">
                </div>
                <div class="modal-cat-title">
                    <span>Рубрики</span>
                </div>
                <div class="modal-cat-close">
                    <i class=" fa fa-times " aria-hidden="true"></i>
                </div>
            </div>
            <div class="modal-cat-body">
                <ul class="modal-main-cats active">
                    <li data-cat="1" class="modal-cat-item">
                        <div class="modal-cat-img">
                            <img src="images/category/electronic/smartphone-and-tablet.svg" alt="" class="img-fluid">
                        </div>
                        <div class="modal-cat-name">
                            Электроника
                        </div>
                        <div class="modal-cat-arrow">
                            <img src="images/ico/region-arrow.svg" class="ico-sm" alt="">
                        </div>
                    </li>
                    <li data-cat="2" class="modal-cat-item">
                        <div class="modal-cat-img">
                            <img src="images/category/baby/teddy-bear.svg" alt="" class="img-fluid">
                        </div>
                        <div class="modal-cat-name">
                            Детские товары
                        </div>
                        <div class="modal-cat-arrow">
                            <img src="images/ico/region-arrow.svg" class="ico-sm" alt="">
                        </div>
                    </li>
                    <li data-cat="3" class="modal-cat-item">
                        <div class="modal-cat-img">
                            <img src="images/category/electronic/washing-machine-for-laundry.svg" alt="" class="img-fluid">
                        </div>
                        <div class="modal-cat-name">
                            Недвижимость
                        </div>
                        <div class="modal-cat-arrow">
                            <img src="images/ico/region-arrow.svg" class="ico-sm" alt="">
                        </div>
                    </li>
                    <li data-cat="4" class="modal-cat-item">
                        <div class="modal-cat-img">
                            <img src="images/category/baby/kick-scooter.svg" alt="" class="img-fluid">
                        </div>
                        <div class="modal-cat-name">
                            Транспорт
                        </div>
                        <div class="modal-cat-arrow">
                            <img src="images/ico/region-arrow.svg" class="ico-sm" alt="">
                        </div>
                    </li>
                    <li data-cat="5" class="modal-cat-item">
                        <div class="modal-cat-img">
                            <img src="images/category/electronic/smartphone-and-tablet.svg" alt="" class="img-fluid">
                        </div>
                        <div class="modal-cat-name">
                            Работа
                        </div>
                        <div class="modal-cat-arrow">
                            <img src="images/ico/region-arrow.svg" class="ico-sm" alt="">
                        </div>
                    </li>
                    <li data-cat="6" class="modal-cat-item">
                        <div class="modal-cat-img">
                            <img src="images/category/electronic/computer.svg" alt="" class="img-fluid">
                        </div>
                        <div class="modal-cat-name">
                            Животные
                        </div>
                        <div class="modal-cat-arrow">
                            <img src="images/ico/region-arrow.svg" class="ico-sm" alt="">
                        </div>
                    </li>
                    <li data-cat="7" class="modal-cat-item">
                        <div class="modal-cat-img">
                            <img src="images/category/baby/baby-buggy.svg" alt="" class="img-fluid">
                        </div>
                        <div class="modal-cat-name">
                            Дом и сад
                        </div>
                        <div class="modal-cat-arrow">
                            <img src="images/ico/region-arrow.svg" class="ico-sm" alt="">
                        </div>
                    </li>
                    <li data-cat="8" class="modal-cat-item">
                        <div class="modal-cat-img">
                            <img src="images/category/electronic/cpu.svg" alt="" class="img-fluid">
                        </div>
                        <div class="modal-cat-name">
                            Бизнес
                        </div>
                        <div class="modal-cat-arrow">
                            <img src="images/ico/region-arrow.svg" class="ico-sm" alt="">
                        </div>
                    </li>
                    <li data-cat="9" class="modal-cat-item">
                        <div class="modal-cat-img">
                            <img src="images/category/electronic/photo-camera.svg" alt="" class="img-fluid">
                        </div>
                        <div class="modal-cat-name">
                            Хобби отдых и спорт
                        </div>
                        <div class="modal-cat-arrow">
                            <img src="images/ico/region-arrow.svg" class="ico-sm" alt="">
                        </div>
                    </li>
                
                </ul>
                <ul class="modal-sub-cats">
                    <li data-subcat="1" class="modal-cat-item">
                        <div class="modal-cat-img">
                            <img src="images/category/electronic/computer.svg" alt="" class="img-fluid">
                        </div>
                        <div class="modal-cat-name">
                            Компьютеры и комплетующие
                        </div>
                        <div class="modal-cat-arrow">
                            <img src="images/ico/region-arrow.svg" class="ico-sm" alt="">
                        </div>
                    </li>
                    <li data-subcat="2" class="modal-cat-item">
                        <div class="modal-cat-img">
                            <img src="images/category/electronic/laptop.svg" alt="" class="img-fluid">
                        </div>
                        <div class="modal-cat-name">
                            Ноутбуки и аксессуары
                        </div>
                        <div class="modal-cat-arrow">
                            <img src="images/ico/region-arrow.svg" class="ico-sm" alt="">
                        </div>
                    </li>
                    <li data-subcat="3" class="cat-end modal-cat-item">
                        <div class="modal-cat-img">
                            <img src="images/category/electronic/mixer.svg" alt="" class="img-fluid">
                        </div>
                        <div class="modal-cat-name">
                            Кухонная техника
                        </div>
                        <div class="modal-cat-arrow">
                            <img src="images/ico/region-arrow.svg" class="ico-sm" alt="">
                        </div>
                    </li>
                    <li data-subcat="4" class="modal-cat-item">
                        <div class="modal-cat-img">
                            <img src="images/category/electronic/washing-machine-for-laundry.svg" alt="" class="img-fluid">
                        </div>
                        <div class="modal-cat-name">
                            Бытовая техника
                        </div>
                        <div class="modal-cat-arrow">
                            <img src="images/ico/region-arrow.svg" class="ico-sm" alt="">
                        </div>
                    </li>
                    <li data-subcat="5" class="modal-cat-item">
                        <div class="modal-cat-img">
                            <img src="images/category/electronic/cpu.svg" alt="" class="img-fluid">
                        </div>
                        <div class="modal-cat-name">
                            Аксессуары и комплеткующие
                        </div>
                        <div class="modal-cat-arrow">
                            <img src="images/ico/region-arrow.svg" class="ico-sm" alt="">
                        </div>
                    </li>
                
                </ul>
                <ul class="modal-last-cats">
                    <li data-lastcat="1" class="cat-end modal-cat-item">
                        <div class="modal-cat-img">
                            <img src="images/category/baby/shoe.svg" alt="" class="img-fluid">
                        </div>
                        <div class="modal-cat-name">
                            Детская обувь
                        </div>
                    </li>
                    <li data-lastcat="2" class="cat-end modal-cat-item">
                        <div class="modal-cat-img">
                            <img src="images/category/baby/cradle.svg" alt="" class="img-fluid">
                        </div>
                        <div class="modal-cat-name">
                            Детская мебель
                        </div>
                    </li>
                    <li data-lastcat="3" class="cat-end modal-cat-item">
                        <div class="modal-cat-img">
                            <img src="images/category/baby/backpack.svg" alt="" class="img-fluid">
                        </div>
                        <div class="modal-cat-name">
                            Товары для школьников
                        </div>
                    </li>
                </ul>
            </div>
        
        </div>
        
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
        <div class="add-post">
            <div class="container">
                <form>
                    <div class="add-post-title">Добавить бесплатное объявление</div>
                    <div class="add-post-block">
                        <div class="add-input-row form-group row">
                            <label for="inputTitle" class="col-xl-2 col-lg-2  col-md-2 add-block-label col-form-label">Заголовок
                                <span class="required">*</span>
                            </label>
                            <div class="col-xl-6  col-lg-8  col-md-10">
                                <input type="text" class=" character-limit form-control tipped-input" id="inputTitle">
                                <small data-characters="70" id="emailHelp" class="left-characters form-text text-muted">осталось
                                    <span>70</span>
                                    знаков
                                </small>
                            </div>
                            <div class="input-tip-wrapper col-xl-4 col-sm-12">
                                <img class="tip-arrow" src="images/ico/arrow-left.svg" alt="">
                                <div class="input-tip-body">
                                    <img class="info-ico" src="images/ico/info.svg" alt="">
                                    <span>
                                        
                                        Введите наименование товара,объекта или услуги,которое
                                        бы наиболее полно описывало суть Вашего объявления.
                                        В заголовке не допускается указание эл. адреса, номера телефона, ссылки,
                                        односложных слов «Срочно», «Продам», использование заглавных букв кроме
                                        аббревиатур
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputTitle" class="col-xl-2 col-lg-2 col-md-2 add-block-label col-form-label">Рубрика
                                <span class="required">*</span>
                            </label>
                            <div class="cat-input-block col-xl-6  col-lg-8 col-md-10">
                                <input type="text" class="form-control" id="inputTitle">
                            </div>
                            <div class="col-8 selected-cats  cat-path">
                                <div class="selected-cats-img">
                                    <img src="images/category/electronic/computer.svg" class="img-fluid" alt="">
                                </div>
                                <a href="">Электроника</a>
                                <span class="point fa fa-circle"></span>
                                <a href="">Компьютеры и комплектующие</a>
                                <span class="point fa fa-circle"></span>
                                <a href="">Настольные компьютеры</a>
                            </div>
                        </div>
                        <div class="row cats-change">
                            <div class="col-2 offset-2 btn cats-change-btn  btn-search">
                                Изменить
                            </div>
                        </div>
                    </div>
                    <div class=" add-post-block">
                        <div class="special-params">
                            <div class="add-margin add-product-price row">
                                <div class="col-xl-2  col-lg-2 col-md-2">
                                    <div class="add-block-label">
                                        Цена
                                        <span class="required">*</span>
                                    </div>
                                </div>
                                <div class="col-xl-6  col-lg-8 col-md-10">
                                    <div class="price-radio">
                                        <div class="custom-control custom-radio  ">
                                            <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio1">Бесплатно</label>
                                        </div>
                                    </div>
                                    
                                    <div class="price-radio">
                                        <div class="custom-control custom-radio ">
                                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio2">Обмен</label>
                                        </div>
                                    </div>
                                    
                                    <div class="price-radio">
                                        <div class="custom-control custom-radio ">
                                            <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio3">Цена</label>
                                        </div>
                                        <div class="form-row price-input-group">
                                            <div class="price-input col-xl-4 ">
                                                <label for="validationCustom01" class="sr-only">First name</label>
                                                <input type="text" class="form-control" id="validationCustom01">
                                            
                                            </div>
                                            <div class="iso-input col-xl-2 ">
                                                <label class="sr-only" for="inlineFormCustomSelect">Preference</label>
                                                <select class="custom-select " id="inlineFormCustomSelect">
                                                    <option value="1">грн.</option>
                                                    <option value="2">$</option>
                                                    <option value="3">€</option>
                                                </select>
                                            </div>
                                            <div class="auction-checkbox col-xl-2 ">
                                                <div class="custom-control custom-checkbox ">
                                                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                                    <label class="custom-control-label" for="customControlAutosizing">Торг</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputState" class="col-xl-2  col-lg-2  col-md-2 add-block-label col-form-label">Состояние
                                    <span class="required">*</span>
                                </label>
                                <div class="">
                                    <select class="custom-select form-control" id="inputState">
                                        <option selected>Выбрать</option>
                                        <option value="2">Б/у</option>
                                        <option value="3">Новый</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPrivetBuiseness" class="col-xl-2  col-lg-8 col-md-10 add-block-label col-form-label">Частное лицо/Бизнес
                                    <span class="required">*</span>
                                </label>
                                <div class="">
                                    <select class="custom-select form-control " id="inputPrivetBuiseness">
                                        <option selected>Выбрать</option>
                                        <option value="2">Частное лицо</option>
                                        <option value="3">Бизнес</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="add-input-row  form-group row">
                            <label for="inputDescribe" class="col-xl-2  col-lg-2 col-md-2 add-block-label col-form-label">Описание
                                <span class="required">*</span>
                            </label>
                            <div class="col-xl-6  col-lg-8 col-md-10">
                                <textarea class="form-control tipped-input character-limit" id="inputDescribe" rows="5"></textarea>
                                <small data-characters="4000" id="emailHelp" class="left-characters form-text text-muted">осталось
                                    <span class="characters-num">4000</span>
                                    знаков
                                </small>
                            </div>
                            <div class="input-tip-wrapper col-xl-4 col-sm-6">
                                <img class="tip-arrow" src="images/ico/arrow-left.svg" alt="">
                                <div class="input-tip-body">
                                    <img class="info-ico" src="images/ico/info.svg" alt="">
                                    <span>
                                        Детально опишите и раскройте все преимущества
                                        вашего товара или услуги.Описание должно
                                        соответствовать только одному предлагаемому товару/услуге.
                                        Не стоит повторно указывать ваши контактные данные.
                                    </span>
                                </div>
                            </div>
                        
                        </div>
                        <div class="add-photo row">
                            <div class="col-xl-2  col-lg-2 col-md-2">
                                <div class="add-block-label special-label">
                                    Фотографии
                                    <span class="required">*</span>
                                    <div class="add-block-label-tip">
                                        Объявления с фотографиями в среднем получает в 5 раз больше откликов
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6  col-lg-8 col-md-10">
                                <ul class="add-photo-gallery">
                                    <li id="add-photo-1" class="add-photo-block main-photo-block" data-photo="1">
                                        <div class="add-plus">
                                            <img src="images/category/electronic/photo-camera.svg" class="img-fluid" alt="">
                                        </div>
                                    </li>
                                    <li id="add-photo-2" class="add-photo-block" data-photo="2">
                                        <div class="add-plus">
                                            <img src="images/ico/plus-circle.svg" class="img-fluid" alt="">
                                        </div>
                                    </li>
                                    <li id="add-photo-3" class="add-photo-block" data-photo="3">
                                        <div class="add-plus">
                                            <img src="images/ico/plus-circle.svg" class="img-fluid" alt="">
                                        </div>
                                    </li>
                                    <li id="add-photo-4" class="add-photo-block" data-photo="4">
                                        <div class="add-plus">
                                            <img src="images/ico/plus-circle.svg" class="img-fluid" alt="">
                                        </div>
                                    </li>
                                    <li id="add-photo-5" class="add-photo-block" data-photo="5">
                                        <div class="add-plus">
                                            <img src="images/ico/plus-circle.svg" class="img-fluid" alt="">
                                        </div>
                                    </li>
                                    <li id="add-photo-6" class="add-photo-block" data-photo="6">
                                        <div class="add-plus">
                                            <img src="images/ico/plus-circle.svg" class="img-fluid" alt="">
                                        </div>
                                    </li>
                                    <li id="add-photo-7" class="add-photo-block" data-photo="7">
                                        <div class="add-plus">
                                            <img src="images/ico/plus-circle.svg" class="img-fluid" alt="">
                                        </div>
                                    </li>
                                    <li id="add-photo-8" class="add-photo-block" data-photo="8">
                                        <div class="add-plus">
                                            <img src="images/ico/plus-circle.svg" class="img-fluid" alt="">
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="add-post-title">Данные о продавце</div>
                    <div class="add-post-block">
                        <div class="add-region form-group row">
                            <label for="inputLocation" class="col-xl-2  col-lg-2 col-md-3 add-block-label col-form-label">Местоположение
                                <span class="required">*</span>
                            </label>
                            <div class="col-xl-4  col-lg-6  col-md-9 region-input">
                                <input type="text" class="form-control region-card" id="inputLocation">
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
                            <div class="add-search-region col-12">
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
                            </div>
                        
                        </div>
                        <div class="form-group row">
                            <label for="inputPhone" class="col-xl-2  col-lg-2 col-md-3 add-block-label col-form-label">Номер телефона
                                <span class="required">*</span>
                            </label>
                            <div class="col-xl-4  col-lg-6 col-md-9">
                                <input type="text" class="form-control" id="inputPhone">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputName" class="col-xl-2  col-lg-2 col-md-3 add-block-label col-form-label">Контактное лицо
                                <span class="required">*</span>
                            </label>
                            <div class="col-xl-4  col-lg-6 col-md-9 ">
                                <input type="text" class="form-control" id="inputName">
                            </div>
                        </div>
                    </div>
                    <div class="add-post-block">
                        <div class="form-group row">
                            <label for="inputPhone" class="col-xl-2  col-lg-2 col-md-3  add-block-label col-form-label">E-mail
                                <span class="required">*</span>
                            </label>
                            <div class="col-xl-4  col-lg-6 col-md-9">
                                <input type="text" class="form-control" id="inputPhone">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputName" class="col-xl-2  col-lg-2  col-md-3 add-block-label col-form-label">Пароль
                                <span class="required">*</span>
                            </label>
                            <div class="col-xl-4  col-lg-6 col-md-9 ">
                                <input type="text" class="form-control" id="inputName">
                            </div>
                        </div>
                    </div>
                
                </form>
            </div>
        </div>
        
        <script src="dropdown/js/pushy.js"></script>
        <!--        sidebarMenuScript-->
        <script>
            $(".character-limit").on("keydown keyup", function () {

                var $leftCharacters = $(this).parent().children(".left-characters");
                var maxCharacters = $leftCharacters.attr("data-characters");
                var numberCharacters = $(this).val().length;
                var rest = maxCharacters - numberCharacters;
                if (numberCharacters <= maxCharacters) {
                    $leftCharacters.children("span").html(rest);
                } else {
                    $(this).val($(this).val().substr(0, maxCharacters));
                }
            });
        </script>
        <!--        leftcharacterss-->
        <script>
            var active;
            var catPath = [];
            var selected = false;
            var $modalSubCats = $(".modal-sub-cats");
            var $modalMainCats = $(".modal-main-cats");
            var $modalLastCats = $(".modal-last-cats");
            $(".cat-input-block,  .cats-change").on("click", function () {
                $(".modal-sub-cats,  .modal-last-cats").css("left", "100%");
                $(".overlay").fadeIn(300);
                $(".modal-cat-window").fadeIn(300).animate({top: '+=120%'}, 300, function () {
                    active = true;
                });

            });


            $(".modal-main-cats .modal-cat-item").on("click", function () {
                if (!$modalSubCats.is(".active")) {
                    $(".active").removeClass("active");
                    $modalSubCats.addClass("active");
                    catPath ['cat'] = $(this).attr("data-cat");
                    $modalSubCats.animate({left: '-=100%'}, 400);
                    $(".modal-cat-back img").fadeIn(300);
                }
            });
            $(".modal-sub-cats .modal-cat-item").on("click", function () {
                if (!$(this).is(".cat-end")) {
                    if (!$(".modal-last-cats").is(".active")) {
                        $(".modal-sub-cats").removeClass("active");
                        $(".modal-last-cats").addClass("active").animate({left: '-=100%'}, 400);
                        catPath ['sub-cat'] = $(this).attr("data-subcat");
                    }
                } else {
                    catPath ['sub-cat'] = $(this).attr("data-subcat");
                }
            });

            $(".cat-end, .overlay, .modal-cat-close").on("click", function () {
                    if (active) {
                        if ($(this).is(".cat-end")) {
                            catPath ['last-cat'] = $(this).attr("data-lastcat");
                            $(".cat-input-block").hide();
                            $(".cats-change, .selected-cats").css("display", "flex");
                            $(".special-params").css("display", "block");
                            selected = true;
                        }
                        collapseModalCat()
                        active = false;
                    }
                }
            );
            $(".modal-cat-back").on("click", function () {

                if ($modalSubCats.is(".active")) {
                    $modalMainCats.addClass("active");
                    $modalSubCats.removeClass("active").animate({left: '+=100%'}, 400);
                    $(".modal-cat-back img").fadeOut(300);
                }
                if ($modalLastCats.is(".active")) {
                    $modalSubCats.addClass("active");
                    $modalLastCats.removeClass("active").animate({left: '+=100%'}, 400);
                }
            });
            function collapseModalCat() {
                $(".modal-cat-window").animate({top: '-=120%'}, 400).fadeOut(300);
                $(".overlay").fadeOut(300);
                $(".modal-cat-back img").fadeOut(300);
                $(".modal-sub-cats,  .modal-last-cats").removeClass("active").delay(400).stop(true);
            }
            $(".cat-end .modal-cat-arrow").hide();
        </script>
        <!--  categorySelect      -->
        <script>
            $(".region-card").on("click", function () {
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
                if ($(event.target).closest(".add-region div, .add-region label").length) return;
                $(".search-region-card, .search-proposals-card").slideUp(300);
                event.stopPropagation();
            });


            $(".region-close").on("click", function () {
                $(".search-region-card").slideUp(300);
            });
        </script>
        <!-- regionSelect-->
        <script>
            $(".tipped-input").on("click", function () {
                $curentTip = $(this).parent().parent().children(".input-tip-wrapper");
                if (!$curentTip.is(":visible")) {
                    $(".add-input-row").removeClass("active-tip").children(".input-tip-wrapper").fadeOut(200);
                    $curentTip.fadeIn(200);
                    $curentTip.addClass("active-tip");
                }
            });
            $(document).on('click', function (event) {
                if ($(event.target).closest(".add-input-row div, .add-input-row label").length) return;
                $(".add-input-row").removeClass("active-tip").children(".input-tip-wrapper").fadeOut(200);
                $(".input-tip-wrapper").fadeOut(200);
                event.stopPropagation();
            });
        </script>
        <!--        inputTip-->
        
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
          
            if($(".cat-link").is(".active-sub-cat")){
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