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
            <div class="col-sm">
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
   

    <?= view('footer') ?>
</body>

</html>