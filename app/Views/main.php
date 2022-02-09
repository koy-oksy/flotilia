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
                <div class="text-content">
                    <h6>Контакты</h6>
                    <p>
                        <a href="tel:+38 (050) 453-53-21">+38 (050) 453-53-21</a>(Viber, WhatsApp, Telegram)
                    </p>
                    <a href="<?php echo site_url('contacts') ?>" class="btn btn-primary btn-lg">Контакты</a>
                </div>
            </div>
        </div>
        <!-- // Item -->
        <!-- Item -->
        <div class="item item-2">
            <div class="img-fill">
                <div class="text-content">
                    <h6>Наши услуги</h6>
                    <p>
                        Услуги строка 1
                        <br>Услуги строка 2
                        <br>Услуги строка 3
                        <br>Услуги строка 4
                    </p>
                    <a href="<?php echo site_url('services') ?>" class="btn btn-primary btn-lg">Услуги</a>
                </div>
            </div>
        </div>
        <!-- // Item -->
        <!-- Item -->
        <div class="item item-3">
            <div class="img-fill">
                <div class="text-content">
                <h6>Дополнительные услуги</h6>
                    <p>
                        Услуги строка 1
                        <br>Услуги строка 2
                        <br>Услуги строка 3
                        <br>Услуги строка 4
                    </p>
                    <a href="<?php echo site_url('services') ?>" class="btn btn-primary btn-lg">Дополнительные услуги</a>
                </div>
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
                        <p class="lead">Купи покатушку и Вы моете палубу на нашем судне совершенно бесплатно.</p>
                        <hr class="my-4">
                        <p>*Для девушек топлесс</p>
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

                    <section class="filterResults data-shluhi">
                        <div class="filterLabel">Шлюхи на борту:</div>
                        <ul class="filterNav filterNavShluhi">
                            <li><a href="#" class="btn btn-primary btn-lg filterControl active">Все</a></li>
                            <li><a href="#" class="btn btn-primary btn-lg filterControl">С шлюхами</a></li>
                            <li><a href="#" class="btn btn-primary btn-lg filterControl">Без шлюх</a></li>
                        </ul><!-- / filterNav filterNavTypes -->
                    </section>

                    <section class="filterResults filterResultsCurrent">
                        <div class="filterLabel">Выбранные фильтры:</div>
                        <ul class="filterNav">
                            <li><span class="currentChoice"><!-- content appended with jQuery --></span></li>
                        </ul>
                    </section>
                </div>

                <div class="row filterable">
                    <div class="col-md-4 col-lg-4 section filterableItem" data-type="Парусное" data-city="Киев" data-location="Осокорки" data-shluhi="Без шлюх">
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
                    <div class="col-md-4 col-lg-4 section filterableItem" data-type="Парусное" data-city="Киев" data-location="Оболонь" data-shluhi="Без шлюх">
                        <div class="boat-card">
                            <div class="boat-image" style="background: url(<?php echo base_url('img/boat/arenda_kiev_1.jpg') ?>)"></div>
                            <p class="text-center boat-name">Яхта Glory</p>
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
                    <div class="col-md-4 col-lg-4 section filterableItem" data-type="Моторное" data-city="Киев" data-location="Киевское море" data-shluhi="С шлюхами">
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
                                        Шлюхи на борту:
                                    </div>
                                    <div class="col text-left">
                                        <span style="color: red; font-size: 20px;">перегруз</span>
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
                    <div class="col-md-4 col-lg-4 section filterableItem" data-type="Моторное" data-city="Одесса" data-location="Черноморский яхт-клуб" data-shluhi="С шлюхами">
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
                                        Шлюхи на борту:
                                    </div>
                                    <div class="col text-left">
                                        <span style="color: red; font-size: 20px;">перегруз</span>
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
                
                    <div class="col-md-4 col-lg-4 section filterableItem" data-type="Парусное" data-city="Одесса" data-location="Черноморский яхт-клуб" data-shluhi="Без шлюх">
                        <div class="boat-card">
                            <div class="boat-image" style="background: url(<?php echo base_url('img/boat/lagoon-380-5.jpg') ?>)"></div>
                            <p class="text-center boat-name">Катамаран Destiny</p>
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
                    <div class="col-md-4 col-lg-4 section filterableItem" data-type="Парусное" data-city="Киев" data-location="Оболонь" data-shluhi="С шлюхами">
                        <div class="boat-card">
                            <div class="boat-image" style="background: url(<?php echo base_url('img/boat/zevs.jpg') ?>)"></div>
                            <p class="text-center boat-name">Яхта Zevs</p>
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
                                        Шлюхи на борту:
                                    </div>
                                    <div class="col text-left">
                                        <span style="color: red; font-size: 20px;">каждый день новые</span>
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
    
    <section class="service-section">
        <div class="container">
            <div class="heading white-heading">
            <h1 class="text-center">Дополнительные услуги Flotilla<h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="image">
                                <img src="<?php echo base_url('img/na-yakhte-v-kieve.jpg') ?>"> 
                            </div>
                            <div class="lower-content">
                                <h3><a href="#">Кейтеринг</a></h3>
                                <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="image">
                            <img src="<?php echo base_url('img/devichnik-na-yakhte-v-kieve.jpg') ?>">
                            </div>
                            <div class="lower-content">
                                <h3><a href="#">Services 2</a></h3>
                                <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="image">
                            <img src="<?php echo base_url('img/korporativ-na-yakhte-ili-tepl.jpg') ?>">
                            </div>
                            <div class="lower-content">
                                <h3><a href="#">Services 3</a></h3>
                                <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="image">
                            <img src="<?php echo base_url('img/fotosessiya-na-yakhte-v-kieve.jpg') ?>">
                            </div>
                            <div class="lower-content">
                                <h3><a href="#">Services 4</a></h3>
                                <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="image">
                            <img src="<?php echo base_url('img/predlozhenie-ruki-i-serdtsa-n.jpg') ?>">
                            </div>
                            <div class="lower-content">
                                <h3><a href="#">Services 5</a></h3>
                                <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="image">
                            <img src="<?php echo base_url('img/bachelor_party.jpg') ?>">
                            </div>
                            <div class="lower-content">
                                <h3><a href="#">Services 6</a></h3>
                                <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <?= view('footer') ?>




</body>

</html>