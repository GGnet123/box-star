<?php

use yii\helpers\Html;

$tips = \backend\models\SettingsText::find()->all();
?>

<section class="nav-block-list">
    <img src="<?= Yii::getAlias('@web') . '/assets/images/logo.png' ?>" alt="logo" class="logo">
    <div class="allBlock">
        <div class="nav-block">
            <img src="<?= Yii::getAlias('@web') . '/assets/images/phone.svg' ?>" alt="phone" class="nav-block-icon">
            <a href="tel:+2028439181" class="nav-block-txt">Contact us</a>
        </div>
        <div class="nav-block">
            <img src="<?= Yii::getAlias('@web') . '/assets/images/debt.svg' ?>" alt="estimate" class="nav-block-icon">
            <a href="" class="nav-block-txt">Free estimate!</a>
        </div>
        <div class="nav-block">
            <img src="<?= Yii::getAlias('@web') . '/assets/images/project.svg' ?>" alt="tips" class="nav-block-icon">
            <a href="" class="nav-block-txt">Moving Tips</a>
        </div>
    </div>
</section>

<header>
    <section class="navbar">
        <div class="header">
            <section class="header-block-list">
                <div class="header-block">
                    <a href="" class="header-txt">HOME</a>
                </div>
                <div class="header-block">
                    <a href="" class="header-txt">SERVICES</a>
                </div>
                <div class="header-block">
                    <a href="" class="header-txt">LOCATIONS</a>
                </div>
            </section>
        </div>
    </section>
    <section class="about">
        <div class="form-style-6">
            <h1 class="form-title">BoxStar Moving Services, VA </h1>
            <h4 class="form-txt">Licensed, Insured & Bonded DMV Movers</h4>
            <?php
            $model = new \backend\models\Orders();
            $form = \yii\widgets\ActiveForm::begin();
            ?>
            <?= $form->field($model, 'client_name')->textInput([
                'placeholder' => 'ENTER YOUR NAME',
                'autocomplete' => 'new-password'
            ])->label('') ?>

            <?= $form->field($model, 'client_phone')->widget(\yii\widgets\MaskedInput::class, [
                'mask' => '+1 (999) 999-9999',
                'options' => [
                    'placeholder' => 'ENTER YOUR PHONE NUMBER',
                    'autocomplete' => 'new-password'
                ],
            ])->label('') ?>

            <?php $cities = \backend\models\Cities::find()->all() ?>
            <?= $form->field($model, 'origin_city_id')->widget(\kartik\select2\Select2::class, [
                'data' => \yii\helpers\ArrayHelper::map($cities, 'id', 'zip_code'),
                'options' => [
                     'placeholder' => 'ORIGIN ZIP CODE'
                ]
            ])->label('') ?>

            <?= $form->field($model, 'destination_city_id')->widget(\kartik\select2\Select2::class, [
                'data' => \yii\helpers\ArrayHelper::map($cities, 'id', 'zip_code'),
                'options' => [
                    'placeholder' => 'DESTINATION ZIP CODE'
                ]
            ])->label('') ?>

            <?php $moveTypes = \backend\models\MoveTypes::find()->all(); ?>
            <?= $form->field($model, 'move_type_id')
                ->dropDownList(\yii\helpers\ArrayHelper::map($moveTypes, 'id', 'title'), ['prompt' => 'MOVE TYPE'])
                ->label('') ?>

            <?= $form->field($model, 'move_date')->widget(\kartik\date\DatePicker::class, [
                'pluginOptions' => [
                    'format' => 'yyyy-mm-dd',
                    'todayHighlight' => true,
                ],
                'options' => [
                    'autocomplete' => 'new-password'
                ]
            ]) ?>

            <?php $moveSizes = \backend\models\MoveSizes::find()->all(); ?>
            <?= $form->field($model, 'move_size_id')
                ->dropDownList(\yii\helpers\ArrayHelper::map($moveSizes, 'id', 'title'), ['prompt' => 'WE\'RE MOVING YOUR..'])
                ->label('') ?>

            <?= $form->field($model, 'rooms_number_id')->dropDownList(\backend\models\Orders::$rooms)->label('') ?>

            <input type="submit" value="BUILD MY ESTIMATE"/>

            <?php $form = \yii\widgets\ActiveForm::end() ?>
        </div>
    </section>
    <section class="non-rect"></section>
</header>

<article class="aboutUs">
    <span class="about-title">About us</span>
    <div class="about-section">
                <span class="about-txt">
                    BoxStar Moving Services, LLC is dedicated to providing top-quality moving services, storage and moving supplies. We offer moving solutions at competitive prices for local and long distance needs for both residential and commercial clientele. We take pride in our professionally trained crew and would love to be at your service.BoxStar Moving Services, LLC is dedicated to providing top-quality moving services, storage and moving supplies. We offer moving solutions at competitive prices for local and long distance needs for both residential and commercial clientele. We take pride in our professionally trained crew and would love to be at your service.
                </span>
        <img src="<?= Yii::getAlias('@web') . '/assets/images/man.png' ?>" alt="" class="about-img">
    </div>
</article>

<section class="partners">

</section>

<section class="ticks">
    <span class="ticks-title">Arlington VA Movers</span>
    <span class="ticks-txt">We Tick ALL Your Boxes</span>
    <div class="ticks-block">
        <div class="block">
            <img src="<?= Yii::getAlias('@web') . '/assets/images/tick.svg' ?>" alt="" class="block-img">
            <aside class="block-txt">
                <p class="block-title">Fully Licensed and Insured</p>
                <p class="block-detail">We're licensed and insured so we can solve any challenge and give you peace of
                    mind.</p>
            </aside>
        </div>
        <div class="block">
            <img src="<?= Yii::getAlias('@web') . '/assets/images/tick.svg' ?>" alt="" class="block-img">
            <aside class="block-txt">
                <p class="block-title">Full-Service Movers & Packers</p>
                <p class="block-detail">We know all the ins and outs that'll streamline your move. Our teams are
                    background checked and trained into the best Northern Virginia movers and packers.</p>
            </aside>
        </div>
        <div class="block">
            <img src="<?= Yii::getAlias('@web') . '/assets/images/tick.svg' ?>" alt="" class="block-img">
            <aside class="block-txt">
                <p class="block-title">Accurate & Upfront Estimates</p>
                <p class="block-detail">Our moving coordinators will make sure moving day is a pleasant experience
                    without any surprises or headaches.</p>
            </aside>
        </div>
        <div class="block">
            <img src="<?= Yii::getAlias('@web') . '/assets/images/tick.svg' ?>" alt="" class="block-img">
            <aside class="block-txt">
                <p class="block-title">World-Class Customer Service</p>
                <p class="block-detail">Our helpful representatives will put the cherry on top of your move. Our
                    award-winning team has serious passion for service and integrity.</p>
            </aside>
        </div>
        <div class="block">
            <img src="<?= Yii::getAlias('@web') . '/assets/images/tick.svg' ?>" alt="" class="block-img">
            <aside class="block-txt">
                <p class="block-title">Fully Equipped Moving Trucks</p>
                <p class="block-detail">BoxStar movers is a full-service moving company in Arlington Virginia. Our
                    trucks have every tool and material you'll ever need so you're never sidelined dealing with costly
                    delays on moving day.</p>
            </aside>
        </div>
        <div class="block">
            <img src="<?= Yii::getAlias('@web') . '/assets/images/tick.svg' ?>" alt="" class="block-img">
            <aside class="block-txt">
                <p class="block-title">Stars On Google, HomeAdvisor & Yelp!</p>
                <p class="block-detail">We're sure to pay careful attention to your needs. Our company's founding values
                    are based on honesty, integrity and service.</p>
            </aside>
        </div>
    </div>
</section>

<section class="second-block-header"></section>
<div class="second-block">
    <article class="ourServices">
        <span class="ourServices-title">Our services</span>
        <section class="images">
            <img src="<?= Yii::getAlias('@web') . '/assets/images/img1.jpg' ?>" alt="" class="imgService">
            <img src="<?= Yii::getAlias('@web') . '/assets/images/img2.jpg' ?>" alt="" class="imgService">
            <img src="<?= Yii::getAlias('@web') . '/assets/images/img3.jpg' ?>" alt="" class="imgService1">
        </section>
        <div class="ourServices-section">
            <section class="ourServices-section-titles">
                <h1 class="ourServices-section-titles-ttl" id="first">RESIDENTIAL MOVING</h1>
                <h1 class="ourServices-section-titles-ttl" id="second">COMMERCIAL MOVING</h1>
                <h1 class="ourServices-section-titles-ttl" id="third">LONG DISTANCE</h1>
                <h1 class="ourServices-section-titles-ttl" id="four">PACKING SERVICE ONLY</h1>
                <h1 class="ourServices-section-titles-ttl" id="five">SPECIALTY MOVING</h1>
                <h1 class="ourServices-section-titles-ttl" id="six">LABOR ONLY</h1>
            </section>

            <div id="selectedService1" class="service-text">
                Moving from one home to another marks a milestone in your life. It can be hectic, emotional, and
                overwhelming.
                On a local move your belongings are being wrapped and padded, loaded onto the truck, safely transported to
                your new place and carefully unloaded.
                Our licensed, insured movers will help you every step of the way. Our comprehensive service includes:
                <ul class="service-list-text">
                    <li class="service-list-item">Free furniture pads and floor runner.</li>
                    <li class="service-list-item">Shrink wrap and moving tape, as well as a full range of packing materials for your loose items.
                        (additional fee).
                    </li>
                    <li class="service-list-item">Wrapping of furniture to ensure its safe transportation.</li>
                    <li class="service-list-item">Packing of your entire household, delivery, and unpacking (needs to be requested beforehand).</li>
                    <li class="service-list-item">Loading and unloading in a certain order according to your preferences.</li>
                    <li class="service-list-item"> Secure, climate-controlled storage for items no longer needed.</li>
                    <li class="service-list-item"> Overnight storage.</li>
                </ul>
            </div>

            <div id="selectedService2" class="service-text">
                Countless businesses trust BoxStar Moving Services, LLC to provide commercial moving that is safe, effective, and time sensitive. As a local commercial moving company, BoxStar Movers  offers unmatched service at prices your business can afford.
                Let us help you:
                <ul class="service-list-text">
                    <li class="service-list-item"> Pack up your workspaces;</li>
                    <li class="service-list-item">Carefully transport computers and networking equipment;</li>
                    <li class="service-list-item">Relocate and set up your business in a brand-new location.</li>
                </ul>
            </div>

            <div id="selectedService3" class="service-text">
                When you are moving your home or business to a new location, there are many things to consider. From packing valuables the right way to loading and unloading the truck, you likely will require extra help to ensure that everything is handled correctly. We work quickly and efficiently to deliver the top care and attention to each of our clients.
                Receive the service that you deserve when you work with our residential and commercial long-distance moving company. Our experienced team members understand the right way to pack and transport items, so that you can focus on everything else you need to do for your move. Our long-distance flat rate price includes all the needed services for your move, no hidden or additional fees at the completion of the move
            </div>

            <div id="selectedService4" class="service-text">
                You may not need a truck for your upcoming move but would surely appreciate a big hand to pack your items, then look no further! Our packing teams are trained to use only the safest, sturdiest space-saving and cost-effective packing materials available to protect your goods. Try us and you’ll see the difference! Our customers have several options when it comes to packing:

                <ul class="service-list-text">
                    <li class="service-list-item"> Packing by Owner
                        Customer is responsible for the pack up of personal belongings, BoxStar Movers will move all boxes packed and blanket-wrap furniture prior to loading. Packing supplies can be purchased from BoxStar Movers and delivered to your home beforehand or on the day of the move.
                    </li>
                    <li class="service-list-item">Partial Pack
                        Customers can pick the items or rooms/areas that need to be packed by BoxStar Movers. For instance, you only need help with the kitchen or clothes, or books. Packing supplies can be purchased from BoxStar Movers and delivered to your home beforehand or on the day of the move.
                    </li>
                    <li class="service-list-item">Full Packing Service
                        BoxStar Movers provides all the packing materials and moving boxes. Our experienced crew places all your loose items into boxes and wraps the furniture. There is absolutely nothing you need to do or worry about!
                    </li>
                </ul>
            </div>

            <div id="selectedService5" class="service-text">
                We're here for you if you need help moving a large, bulky or otherwise awkward item from point A to B. We can move baby grand pianos, gun safes, exercise equipment and other large and cumbersome items.
            </div>

            <div id="selectedService6" class="service-text">
                From loading/unloading a rented truck to moving furniture around the house, trust BoxStar Moving Services, LLC to handle this service for you!
            </div>

        </div>
    </article>

</div>

<section class="call">
    <span class="call-txt">Ready To Move? Let Us Help You</span>
    <button class="call-btn">GET A QUOTE?</button>
</section>

<section class="comments">
    <span class="ourServices-title">Our services</span>
</section>
<?php
$with_rooms = \backend\models\MoveSizes::find()->select('id')->where(['with_rooms' => 1])->all();
$array = json_encode(array_column($with_rooms, 'id'));

$js = <<<JS
$('document').ready(function () {
    let rooms = $('#orders-rooms_number_id');
    let move_size = $('#orders-move_size_id');
    rooms.hide();
    var arr = $array;
    function showRooms() {
        let bool = false;
        for (let i = 0; i < arr.length; i++) {
            if (move_size.val() == arr[i]) {
                bool = true;
            }
        }
        
        if (bool === true) {
            rooms.show();
        } else {
            rooms.hide();
        }
    }
    
    move_size.change(function() {
      showRooms()
    })
    
    let serviceText = document.getElementsByClassName("service-text");
    let serviceTitleText = document.getElementsByClassName("ourServices-section-titles-ttl");
    for (let i = 0; i < serviceTitleText.length; i++) {
        serviceTitleText[i].addEventListener("click", function() {
            selectService(serviceTitleText[i]);
        });
    }
        
    serviceText[0].style.display = "block";
    serviceTitleText[0].style.backgroundColor = "#B9B9B9"
        
    function admSelectCheck(nameSelect) {
        if (nameSelect) {
            selected = document.getElementById("house").value;
            selected2 = document.getElementById("apartm").value;

            if (selected === nameSelect.value || selected2 === nameSelect.value) {
                document.getElementById("selected").style.display = "block";
            } else {
                document.getElementById("selected").style.display = "none";
            }
        } else {
            document.getElementById("selected").style.display = "none";
        }
    }

    function selectService(selected) {
        let serviceTitleText = document.getElementsByClassName("ourServices-section-titles-ttl");
        let serviceText = document.getElementsByClassName("service-text");
   
        for (let i = 0; i < serviceTitleText.length; i++) {
            if (serviceTitleText[i].textContent === selected.textContent) {
                serviceText[i].style.display = "block";
                serviceTitleText[i].style.backgroundColor = "#B9B9B9";
            } else {
                serviceText[i].style.display = "none";
                serviceTitleText[i].style.backgroundColor = "#f8f8f8";
            }
        }
    }
});
    
JS;

$this->registerJS($js);
?>
