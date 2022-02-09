<!DOCTYPE html>
<html lang="en">
<?= view('head', $meta) ?>

<body>
    <?= view('menu') ?>
    
    <div class="fotorama" data-nav="thumbs" data-width="100%">
        <img src="<?php echo base_url('img/electric_yacht.jpg') ?>">
        <img src="<?php echo base_url('img/panda.jpg') ?>">
        <img src="<?php echo base_url('img/yacht_inside.jpg') ?>">
        <img src="<?php echo base_url('img/shark_rient.jpg') ?>">
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h1>Парусная электрояхта Shark</h1>
            </div>
            <div class="col-sm">
            <p>Цена аренды</p> 
               <p> 1000 грн/час — миним. заказ — 2 часа (понедельник-четверг), 800 грн следующий час;
                10000 грн/10 часов (понедельник-четверг);
                1400 грн/час (пятница, суббота, воскресенье).</p>
            </div>
            <div class="col-sm">
                
            </div>
        </div>
    </div>
   
    <section class="service-section">
        <div class="container">
            <div class="heading white-heading">
            
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="image">
                                <img src="<?php echo base_url('img/na-yakhte-v-kieve.jpg') ?>"> 
                            </div>
                            <div class="lower-content">
                                <h3><a href="#">Services 1</a></h3>
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