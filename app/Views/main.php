<!DOCTYPE html>
<html>
<?= view('head', $meta) ?>



<body>
    <?= view('menu') ?>

    
    <!-- Place somewhere in the <body> of your page -->
    <div class="Modern-Slider">
        <!-- Item -->
        <div class="item item-1">
            <div class="img-fill">
                <div class="text-content text-center">
                <h1>"ОЩУТИ ЛЕГКОСТЬ ВЕТРА"</h1>
                </div>
            </div>
        </div>
        <!-- // Item -->
        <!-- Item -->
        <div class="item item-2">
            <div class="img-fill">
            </div>
        </div>
        <!-- // Item -->
        <!-- Item -->
        <div class="item item-3">
            <div class="img-fill">
            </div>
        </div>
        <!-- // Item -->
    </div>

    <div class="service-content" id="services">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="jumbotron akcia">
                        <h1 class="display-4">Акция!</h1>
                        <p class="lead"></p>
                        <hr class="my-4">
                        <p></p>
                        <a class="btn btn-primary btn-lg" href="#" role="button">Узнать больше</a>
                    </div>
                </div>
            </div>

            <div class="tags">
                <div class="filterControls clearfix">
                    <section class="filterResults data-type">
                        <div class="filterLabel">Тип судна:</div>
                        <ul class="filterNav filterNavType">
                            <li><a href="#" class="btn btn-primary btn-lg filterControl active">Все</a></li>
                            <li><a href="#" class="btn btn-primary btn-lg filterControl">Парусное</a></li>
                            <li><a href="#" class="btn btn-primary btn-lg filterControl">Моторное</a></li>
                        </ul><!-- / filterNav filterNavTypes -->
                    </section>

                    <section class="filterResults city-select data-city" data-dependent="data-location">
                        <div class="filterLabel">Город:</div>
                        <ul class="filterNav filterNavCity">
                            <li><a href="#" class="btn btn-primary btn-lg filterControl active">Все</a></li>
                            <li><a href="#" class="btn btn-primary btn-lg filterControl" data-select="Осокорки,Оболонь,Киевское море">Киев</a></li>
                            <li><a href="#" class="btn btn-primary btn-lg filterControl" data-select="Черноморский яхт-клуб">Одесса</a></li>
                        </ul><!-- / filterNav filterNavShapes -->
                    </section>

                    <section class="filterResults hidden data-location">
                        <div class="filterLabel">Местоположение:</div>
                        <ul class="filterNav filterNavLocation">
                            <li class="always-show"><a href="#" class="btn btn-primary btn-lg filterControl active">Все</a></li>
                            <li class="hidden"><a href="#" class="btn btn-primary btn-lg filterControl">Осокорки</a></li>
                            <li class="hidden"><a href="#" class="btn btn-primary btn-lg filterControl">Оболонь</a></li>
                            <li class="hidden"><a href="#" class="btn btn-primary btn-lg filterControl">Киевское море</a></li>
                            <li class="hidden"><a href="#" class="btn btn-primary btn-lg filterControl">Черноморский яхт-клуб</a></li>
                        </ul><!-- / filterNav filterNavColors -->
                    </section>

                   

                    <section class="filterResults filterResultsCurrent">
                        <div class="filterLabel">Выбранные фильтры:</div>
                        <ul class="filterNav">
                            <li><span class="currentChoice"><!-- content appended with jQuery --></span></li>
                        </ul>
                    </section>
                </div>

                <div class="row filterable">
                    <div class="col-md-4 col-lg-4 section filterableItem" data-type="Парусное" data-city="Киев" data-location="Осокорки">
                        <div class="boat-card">
                            <a href="<?php echo site_url('shark') ?> ">
                                <div class="boat-image" style="background: url(<?php echo base_url('img/boat/electric_yach_shark.jpg') ?>)"></div>
                            </a>
                            <p class="text-center boat-name">Электрояхта Shark</p>
                            <div class="container details">
                                <div class="row">
                                    <div class="col text-right">
                                        Вместимость:
                                    </div>
                                    <div class="col text-left">
                                        5 пассажиров
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        Цена:
                                    </div>
                                    <div class="col text-left">
                                        1000 грн за час
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        Длина:
                                    </div>
                                    <div class="col text-left">
                                        8 метров
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        <span class="badge badge-secondary oversize">₴ 1000</span>
                                    </div>
                                    <div class="col text-left">
                                        <button type="button" class="btn btn-primary  btn-lg">Оставить заявку</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 section filterableItem" data-type="Парусное" data-city="Киев" data-location="Оболонь">
                        <div class="boat-card">
                            <div class="boat-image" style="background: url(<?php echo base_url('img/boat/sandra.jpg') ?>)"></div>
                            <p class="text-center boat-name">Яхта Sandra</p>
                            <div class="container details">
                                <div class="row">
                                    <div class="col text-right">
                                        Вместимость:
                                    </div>
                                    <div class="col text-left">
                                        5 пассажиров
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        Цена:
                                    </div>
                                    <div class="col text-left">
                                        1000 грн за час
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        Длина:
                                    </div>
                                    <div class="col text-left">
                                        8 метров
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        <span class="badge badge-secondary oversize">₴ 1000</span>
                                    </div>
                                    <div class="col text-left">
                                        <button type="button" class="btn btn-primary  btn-lg">Оставить заявку</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 section filterableItem" data-type="Моторное" data-city="Киев" data-location="Киевское море">
                        <div class="boat-card">
                            <div class="boat-image" style="background: url(<?php echo base_url('img/boat/610_yakhta-pilar.jpg') ?>)"></div>
                            <p class="text-center boat-name">Яхта Пиллар</p>
                            <div class="container details">
                                <div class="row">
                                    <div class="col text-right">
                                        Вместимость:
                                    </div>
                                    <div class="col text-left">
                                        5 пассажиров
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        Цена:
                                    </div>
                                    <div class="col text-left">
                                        1000 грн за час
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        Длина:
                                    </div>
                                    <div class="col text-left">
                                        8 метров
                                    </div>
                                </div>
                               
                                <div class="row">
                                    <div class="col text-right">
                                        <span class="badge badge-secondary oversize">₴ 1000</span>
                                    </div>
                                    <div class="col text-left">
                                        <button type="button" class="btn btn-primary  btn-lg">Оставить заявку</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 section filterableItem" data-type="Моторное" data-city="Одесса" data-location="Черноморский яхт-клуб">
                        <div class="boat-card">
                            <div class="boat-image" style="background: url(<?php echo base_url('img/boat/lavita.jpg') ?>)"></div>
                            <p class="text-center boat-name">Катамаран La Vita</p>
                            <div class="container details">
                                <div class="row">
                                    <div class="col text-right">
                                        Вместимость:
                                    </div>
                                    <div class="col text-left">
                                        5 пассажиров
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        Цена:
                                    </div>
                                    <div class="col text-left">
                                        1000 грн за час
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        Длина:
                                    </div>
                                    <div class="col text-left">
                                        8 метров
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        <span class="badge badge-secondary oversize">₴ 1000</span>
                                    </div>
                                    <div class="col text-left">
                                        <button type="button" class="btn btn-primary  btn-lg">Оставить заявку</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="col-md-4 col-lg-4 section filterableItem" data-type="Парусное" data-city="Одесса" data-location="Черноморский яхт-клуб">
                        <div class="boat-card">
                            <div class="boat-image" style="background: url(<?php echo base_url('img/boat/destiny.jpg') ?>)"></div>
                            <p class="text-center boat-name">Катамаран Destiny</p>
                            <div class="container details">
                                <div class="row">
                                    <div class="col text-right">
                                        Вместимость:
                                    </div>
                                    <div class="col text-left">
                                        8 пассажиров
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        Цена:
                                    </div>
                                    <div class="col text-left">
                                        4000 грн за час
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        Длина:
                                    </div>
                                    <div class="col text-left">
                                        10 метров
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        <span class="badge badge-secondary oversize">₴ 1000</span>
                                    </div>
                                    <div class="col text-left">
                                        <button type="button" class="btn btn-primary  btn-lg">Оставить заявку</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 section filterableItem" data-type="Парусное" data-city="Киев" data-location="Оболонь">
                        <div class="boat-card">
                            <div class="boat-image" style="background: url(<?php echo base_url('img/boat/bella.jpg') ?>)"></div>
                            <p class="text-center boat-name">Катамаран Bella Vita</p>
                            <div class="container details">
                                <div class="row">
                                    <div class="col text-right">
                                        Вместимость:
                                    </div>
                                    <div class="col text-left">
                                        5 пассажиров
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        Цена:
                                    </div>
                                    <div class="col text-left">
                                        1000 грн за час
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        Длина:
                                    </div>
                                    <div class="col text-left">
                                        8 метров
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        <span class="badge badge-secondary oversize">₴ 1000</span>
                                    </div>
                                    <div class="col text-left">
                                        <button type="button" class="btn btn-primary  btn-lg">Оставить заявку</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 section filterableItem" data-type="Парусное" data-city="Киев" data-location="Осокорки">
                        <div class="boat-card">
                            <a href="<?php echo site_url('shark') ?> ">
                                <div class="boat-image" style="background: url(<?php echo base_url('img/boat/alexsandra.jpg') ?>)"></div>
                            </a>
                            <p class="text-center boat-name">Яхта Александра</p>
                            <div class="container details">
                                <div class="row">
                                    <div class="col text-right">
                                        Вместимость:
                                    </div>
                                    <div class="col text-left">
                                        5 пассажиров
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        Цена:
                                    </div>
                                    <div class="col text-left">
                                        1000 грн за час
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        Длина:
                                    </div>
                                    <div class="col text-left">
                                        8 метров
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        <span class="badge badge-secondary oversize">₴ 1000</span>
                                    </div>
                                    <div class="col text-left">
                                        <button type="button" class="btn btn-primary  btn-lg">Оставить заявку</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 section filterableItem" data-type="Парусное" data-city="Киев" data-location="Осокорки">
                        <div class="boat-card">
                            <a href="<?php echo site_url('shark') ?> ">
                                <div class="boat-image" style="background: url(<?php echo base_url('img/boat/oceanis.jpg') ?>)"></div>
                            </a>
                            <p class="text-center boat-name">Яхта Океанис</p>
                            <div class="container details">
                                <div class="row">
                                    <div class="col text-right">
                                        Вместимость:
                                    </div>
                                    <div class="col text-left">
                                        5 пассажиров
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        Цена:
                                    </div>
                                    <div class="col text-left">
                                        1000 грн за час
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        Длина:
                                    </div>
                                    <div class="col text-left">
                                        8 метров
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        <span class="badge badge-secondary oversize">₴ 1000</span>
                                    </div>
                                    <div class="col text-left">
                                        <button type="button" class="btn btn-primary  btn-lg">Оставить заявку</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 section filterableItem" data-type="Парусное" data-city="Киев" data-location="Осокорки">
                        <div class="boat-card">
                            <a href="<?php echo site_url('shark') ?> ">
                                <div class="boat-image" style="background: url(<?php echo base_url('img/boat/ksenia.jpg') ?>)"></div>
                            </a>
                            <p class="text-center boat-name">Яхта Ксения</p>
                            <div class="container details">
                                <div class="row">
                                    <div class="col text-right">
                                        Вместимость:
                                    </div>
                                    <div class="col text-left">
                                        5 пассажиров
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        Цена:
                                    </div>
                                    <div class="col text-left">
                                        1000 грн за час
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        Длина:
                                    </div>
                                    <div class="col text-left">
                                        8 метров
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        <span class="badge badge-secondary oversize">₴ 1000</span>
                                    </div>
                                    <div class="col text-left">
                                        <button type="button" class="btn btn-primary  btn-lg">Оставить заявку</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 section filterableItem" data-type="Парусное" data-city="Киев" data-location="Осокорки">
                        <div class="boat-card">
                            <a href="<?php echo site_url('shark') ?> ">
                                <div class="boat-image" style="background: url(<?php echo base_url('img/boat/milena.jpg') ?>)"></div>
                            </a>
                            <p class="text-center boat-name">Яхта Milena</p>
                            <div class="container details">
                                <div class="row">
                                    <div class="col text-right">
                                        Вместимость:
                                    </div>
                                    <div class="col text-left">
                                        5 пассажиров
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        Цена:
                                    </div>
                                    <div class="col text-left">
                                        1000 грн за час
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        Длина:
                                    </div>
                                    <div class="col text-left">
                                        8 метров
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        <span class="badge badge-secondary oversize">₴ 1000</span>
                                    </div>
                                    <div class="col text-left">
                                        <button type="button" class="btn btn-primary  btn-lg">Оставить заявку</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 section filterableItem" data-type="Парусное" data-city="Киев" data-location="Осокорки">
                        <div class="boat-card">
                            <a href="<?php echo site_url('shark') ?> ">
                                <div class="boat-image" style="background: url(<?php echo base_url('img/boat/catalina.jpg') ?>)"></div>
                            </a>
                            <p class="text-center boat-name">Яхта Catalina</p>
                            <div class="container details">
                                <div class="row">
                                    <div class="col text-right">
                                        Вместимость:
                                    </div>
                                    <div class="col text-left">
                                        5 пассажиров
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        Цена:
                                    </div>
                                    <div class="col text-left">
                                        1000 грн за час
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        Длина:
                                    </div>
                                    <div class="col text-left">
                                        8 метров
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        <span class="badge badge-secondary oversize">₴ 1000</span>
                                    </div>
                                    <div class="col text-left">
                                        <button type="button" class="btn btn-primary  btn-lg">Оставить заявку</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 section filterableItem" data-type="Парусное" data-city="Киев" data-location="Осокорки">
                        <div class="boat-card">
                            <a href="<?php echo site_url('shark') ?> ">
                                <div class="boat-image" style="background: url(<?php echo base_url('img/boat/solovei.jpg') ?>)"></div>
                            </a>
                            <p class="text-center boat-name">Яхта Соловей</p>
                            <div class="container details">
                                <div class="row">
                                    <div class="col text-right">
                                        Вместимость:
                                    </div>
                                    <div class="col text-left">
                                        5 пассажиров
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        Цена:
                                    </div>
                                    <div class="col text-left">
                                        1000 грн за час
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        Длина:
                                    </div>
                                    <div class="col text-left">
                                        8 метров
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        <span class="badge badge-secondary oversize">₴ 1000</span>
                                    </div>
                                    <div class="col text-left">
                                        <button type="button" class="btn btn-primary  btn-lg">Оставить заявку</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 section filterableItem" data-type="Парусное" data-city="Киев" data-location="Осокорки">
                        <div class="boat-card">
                            <a href="<?php echo site_url('shark') ?> ">
                                <div class="boat-image" style="background: url(<?php echo base_url('img/boat/nord.jpg') ?>)"></div>
                            </a>
                            <p class="text-center boat-name">Яхта Nord</p>
                            <div class="container details">
                                <div class="row">
                                    <div class="col text-right">
                                        Вместимость:
                                    </div>
                                    <div class="col text-left">
                                        5 пассажиров
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        Цена:
                                    </div>
                                    <div class="col text-left">
                                        1000 грн за час
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        Длина:
                                    </div>
                                    <div class="col text-left">
                                        8 метров
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        <span class="badge badge-secondary oversize">₴ 1000</span>
                                    </div>
                                    <div class="col text-left">
                                        <button type="button" class="btn btn-primary  btn-lg">Оставить заявку</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 section filterableItem" data-type="Парусное" data-city="Киев" data-location="Осокорки">
                        <div class="boat-card">
                            <a href="<?php echo site_url('shark') ?> ">
                                <div class="boat-image" style="background: url(<?php echo base_url('img/boat/kasa.jpg') ?>)"></div>
                            </a>
                            <p class="text-center boat-name">Яхта Касабланка</p>
                            <div class="container details">
                                <div class="row">
                                    <div class="col text-right">
                                        Вместимость:
                                    </div>
                                    <div class="col text-left">
                                        5 пассажиров
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        Цена:
                                    </div>
                                    <div class="col text-left">
                                        1000 грн за час
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        Длина:
                                    </div>
                                    <div class="col text-left">
                                        8 метров
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        <span class="badge badge-secondary oversize">₴ 1000</span>
                                    </div>
                                    <div class="col text-left">
                                        <button type="button" class="btn btn-primary  btn-lg">Оставить заявку</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 section filterableItem" data-type="Парусное" data-city="Киев" data-location="Осокорки">
                        <div class="boat-card">
                            <a href="<?php echo site_url('shark') ?> ">
                                <div class="boat-image" style="background: url(<?php echo base_url('img/boat/liberta.jpg') ?>)"></div>
                            </a>
                            <p class="text-center boat-name">Яхта Liberta</p>
                            <div class="container details">
                                <div class="row">
                                    <div class="col text-right">
                                        Вместимость:
                                    </div>
                                    <div class="col text-left">
                                        5 пассажиров
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        Цена:
                                    </div>
                                    <div class="col text-left">
                                        1000 грн за час
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        Длина:
                                    </div>
                                    <div class="col text-left">
                                        8 метров
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        <span class="badge badge-secondary oversize">₴ 1000</span>
                                    </div>
                                    <div class="col text-left">
                                        <button type="button" class="btn btn-primary  btn-lg">Оставить заявку</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 section filterableItem" data-type="Парусное" data-city="Киев" data-location="Осокорки">
                        <div class="boat-card">
                            <a href="<?php echo site_url('shark') ?> ">
                                <div class="boat-image" style="background: url(<?php echo base_url('img/boat/kea.jpg') ?>)"></div>
                            </a>
                            <p class="text-center boat-name">Яхта Kea Porto</p>
                            <div class="container details">
                                <div class="row">
                                    <div class="col text-right">
                                        Вместимость:
                                    </div>
                                    <div class="col text-left">
                                        5 пассажиров
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        Цена:
                                    </div>
                                    <div class="col text-left">
                                        1000 грн за час
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        Длина:
                                    </div>
                                    <div class="col text-left">
                                        8 метров
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        <span class="badge badge-secondary oversize">₴ 1000</span>
                                    </div>
                                    <div class="col text-left">
                                        <button type="button" class="btn btn-primary  btn-lg">Оставить заявку</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 section filterableItem" data-type="Парусное" data-city="Киев" data-location="Осокорки">
                        <div class="boat-card">
                            <a href="<?php echo site_url('shark') ?> ">
                                <div class="boat-image" style="background: url(<?php echo base_url('img/boat/tabularasa.jpg') ?>)"></div>
                            </a>
                            <p class="text-center boat-name">Яхта Tabularasa</p>
                            <div class="container details">
                                <div class="row">
                                    <div class="col text-right">
                                        Вместимость:
                                    </div>
                                    <div class="col text-left">
                                        5 пассажиров
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        Цена:
                                    </div>
                                    <div class="col text-left">
                                        1000 грн за час
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        Длина:
                                    </div>
                                    <div class="col text-left">
                                        8 метров
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        <span class="badge badge-secondary oversize">₴ 1000</span>
                                    </div>
                                    <div class="col text-left">
                                        <button type="button" class="btn btn-primary  btn-lg">Оставить заявку</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 section filterableItem" data-type="Парусное" data-city="Киев" data-location="Осокорки">
                        <div class="boat-card">
                            <a href="<?php echo site_url('shark') ?> ">
                                <div class="boat-image" style="background: url(<?php echo base_url('img/boat/diamant.jpg') ?>)"></div>
                            </a>
                            <p class="text-center boat-name">Яхта Diamant</p>
                            <div class="container details">
                                <div class="row">
                                    <div class="col text-right">
                                        Вместимость:
                                    </div>
                                    <div class="col text-left">
                                        5 пассажиров
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        Цена:
                                    </div>
                                    <div class="col text-left">
                                        1000 грн за час
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        Длина:
                                    </div>
                                    <div class="col text-left">
                                        8 метров
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        <span class="badge badge-secondary oversize">₴ 1000</span>
                                    </div>
                                    <div class="col text-left">
                                        <button type="button" class="btn btn-primary  btn-lg">Оставить заявку</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 section filterableItem" data-type="Парусное" data-city="Киев" data-location="Осокорки">
                        <div class="boat-card">
                            <a href="<?php echo site_url('shark') ?> ">
                                <div class="boat-image" style="background: url(<?php echo base_url('img/boat/dunkan.jpg') ?>)"></div>
                            </a>
                            <p class="text-center boat-name">Яхта Dunkan</p>
                            <div class="container details">
                                <div class="row">
                                    <div class="col text-right">
                                        Вместимость:
                                    </div>
                                    <div class="col text-left">
                                        5 пассажиров
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        Цена:
                                    </div>
                                    <div class="col text-left">
                                        1000 грн за час
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        Длина:
                                    </div>
                                    <div class="col text-left">
                                        8 метров
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        <span class="badge badge-secondary oversize">₴ 1000</span>
                                    </div>
                                    <div class="col text-left">
                                        <button type="button" class="btn btn-primary  btn-lg">Оставить заявку</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 section filterableItem" data-type="Парусное" data-city="Киев" data-location="Осокорки">
                        <div class="boat-card">
                            <a href="<?php echo site_url('shark') ?> ">
                                <div class="boat-image" style="background: url(<?php echo base_url('img/boat/oceaniss.jpg') ?>)"></div>
                            </a>
                            <p class="text-center boat-name">Яхта Oceanis 343</p>
                            <div class="container details">
                                <div class="row">
                                    <div class="col text-right">
                                        Вместимость:
                                    </div>
                                    <div class="col text-left">
                                        5 пассажиров
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        Цена:
                                    </div>
                                    <div class="col text-left">
                                        1000 грн за час
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        Длина:
                                    </div>
                                    <div class="col text-left">
                                        8 метров
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        <span class="badge badge-secondary oversize">₴ 1000</span>
                                    </div>
                                    <div class="col text-left">
                                        <button type="button" class="btn btn-primary  btn-lg">Оставить заявку</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
  
    <?= view('footer') ?>




</body>

</html>