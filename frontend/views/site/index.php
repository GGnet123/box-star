<?php

use yii\helpers\Html;

/**
 * @var \backend\models\SettingsText $settingsText
 * @var \backend\models\SettingsServices $settingsServices
 * @var \backend\models\Orders $modelOrders
 * @var \backend\models\Comments $modelComments
 * @var \backend\models\States $states
 * @var \backend\models\Comments $comments
 * @var \backend\models\SettingsPartners $partners
 * @var \backend\models\SettingsImages $images
 */
?>

<section class="nav-block-list">
    <img src="<?= Yii::getAlias('@web') . '/assets/images/logo.png' ?>" alt="logo" class="logo">
    <div class="allBlock">
        <div class="nav-block">
            <img src="<?= Yii::getAlias('@web') . '/assets/images/phone.svg' ?>" alt="phone" class="nav-block-icon">
            <a href="tel:<?= $settingsText->call_us_number ?>" class="nav-block-txt">Contact us</a>
        </div>
        <div class="nav-block">
            <img src="<?= Yii::getAlias('@web') . '/assets/images/debt.svg' ?>" alt="estimate" class="nav-block-icon">
            <a href="#" class="nav-block-txt" id="myBtn">Free estimate!</a>
        </div>
        <div class="nav-block">
            <img src="<?= Yii::getAlias('@web') . '/assets/images/project.svg' ?>" alt="tips" class="nav-block-icon">
            <a href="/tips" class="nav-block-txt">Moving Tips</a>
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
                    <a href="#services" class="header-txt">SERVICES</a>
                </div>
                <div class="dropdown">
                    <div class="header-block">
                        <p class="header-txt">LOCATIONS</p>
                    </div>
                    <div class="dropdown-content">
                        <?php foreach ($states as $key => $state): ?>
                        <?php if ($key == 0 || ($key) % 3 == 0){
                            echo '<div class="row">';
                            } ?>
                            <div class="column">
                                <h3 class="column-ttl"><?= $state->title ?></h3>
                                <?php foreach ($state->cities as $city): ?>
                                <a href="#"><?= $city->title ?></a>
                                <?php endforeach; ?>
                            </div>
                        <?php if (($key + 1) % 3 == 0 ){
                            echo '</div>';
                        } ?>
                        <?php endforeach; ?>
                    </div>
                </div>
<!--                //////-->
            </section>
        </div>
    </section>
    <section class="about">
        <div class="form-style-6">
            <h1 class="form-title" id="formTitle">BoxStar Moving Services, VA </h1>
            <h4 class="form-txt">Licensed, Insured & Bonded DMV Movers</h4>
            <?php
            $form = \yii\widgets\ActiveForm::begin();
            ?>
            <?= $form->field($modelOrders, 'client_name')->textInput([
                'placeholder' => 'ENTER YOUR NAME',
                'autocomplete' => 'new-password'
            ])->label('') ?>

            <?= $form->field($modelOrders, 'client_phone')->widget(\yii\widgets\MaskedInput::class, [
                'mask' => '+1 (999) 999-9999',
                'options' => [
                    'placeholder' => 'ENTER YOUR PHONE NUMBER',
                    'autocomplete' => 'new-password'
                ],
            ])->label('') ?>

            <?php $cities = \backend\models\Cities::find()->all() ?>
            <?= $form->field($modelOrders, 'origin_city_id')->widget(\kartik\select2\Select2::class, [
                'data' => \yii\helpers\ArrayHelper::map($cities, 'id', 'zip_code'),
                'options' => [
                     'placeholder' => 'ORIGIN ZIP CODE'
                ]
            ])->label('') ?>

            <?= $form->field($modelOrders, 'destination_city_id')->widget(\kartik\select2\Select2::class, [
                'data' => \yii\helpers\ArrayHelper::map($cities, 'id', 'zip_code'),
                'options' => [
                    'placeholder' => 'DESTINATION ZIP CODE'
                ]
            ])->label('') ?>

            <?php $moveTypes = \backend\models\MoveTypes::find()->all(); ?>
            <?= $form->field($modelOrders, 'move_type_id')
                ->dropDownList(\yii\helpers\ArrayHelper::map($moveTypes, 'id', 'title'), ['prompt' => 'MOVE TYPE'])
                ->label('') ?>

            <?= $form->field($modelOrders, 'move_date')->widget(\kartik\date\DatePicker::class, [
                'pluginOptions' => [
                    'format' => 'yyyy-mm-dd',
                    'todayHighlight' => true,
                ],
                'options' => [
                    'autocomplete' => 'new-password',
                    'style' => 'z-index:1'
                ]
            ]) ?>

            <?php $moveSizes = \backend\models\MoveSizes::find()->all(); ?>
            <?= $form->field($modelOrders, 'move_size_id')
                ->dropDownList(\yii\helpers\ArrayHelper::map($moveSizes, 'id', 'title'), ['prompt' => 'WE\'RE MOVING YOUR..'])
                ->label('') ?>

            <?= $form->field($modelOrders, 'rooms_number_id')->dropDownList(\backend\models\Orders::$rooms)->label('') ?>

            <input type="submit" value="BUILD MY ESTIMATE"/>

            <?php $form = \yii\widgets\ActiveForm::end() ?>
            <?php if (Yii::$app->session->hasFlash('alert')): ?>
                <div class="alert alert-success alert-dismissable" role="alert" id="alert" style="text-align: center">
                    <span type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></span>
                    <h4><i class="glyphicon glyphicon-ok"></i>Saved!</h4>
                    <?= Yii::$app->session->getFlash('alert') ?>
                </div>
            <?php endif; ?>
        </div>

    </section>
    <section class="non-rect"></section>
</header>

<div class="mobile-nav">
    <div class="nav-block">
        <img src="<?= Yii::getAlias('@web') . '/assets/images/phone.svg' ?>" alt="phone" class="nav-block-icon">
        <a href="tel:<?= $settingsText->call_us_number ?>" class="nav-block-txt">Contact us</a>
    </div>
    <div class="nav-block">
        <img src="<?= Yii::getAlias('@web') . '/assets/images/debt.svg' ?>" alt="estimate" class="nav-block-icon">
        <a class="nav-block-txt" id="myBtn1">Free estimate!</a>
    </div>
    <div class="nav-block">
        <img src="<?= Yii::getAlias('@web') . '/assets/images/project.svg' ?>" alt="tips" class="nav-block-icon">
        <a href="/tips" class="nav-block-txt">Moving Tips</a>
    </div>
</div>

<article class="aboutUs">
    <span class="about-title">About us</span>
    <div class="about-section">
                <span class="about-txt">
                    <?= $settingsText->about_us ?>
                </span>
        <img src="<?= Yii::getAlias('@web') . $images->about_us_image ?>" alt="" class="about-img">
    </div>
</article>

<section class="partners">
    <?php foreach ($partners as $partner): ?>
    <?= Html::img(Yii::getAlias('@web') . '/assets/images/logos' . $partner->logo, ['class' => 'partner-img']) ?>
    <?php endforeach; ?>
</section>

<section class="ticks">
    <span class="ticks-title">Arlington VA Movers</span>
    <span class="ticks-txt">We Tick ALL Your Boxes</span>
    <div class="ticks-block">
        <div class="block">
            <img src="<?= Yii::getAlias('@web') . '/assets/images/tick.svg' ?>" alt="" class="block-img">
            <aside class="block-txt">
                <p class="block-title"><?= $settingsText->one_tick_header ?></p>
                <span class="block-detail"><?= $settingsText->one_tick_content ?></span>
            </aside>
        </div>
        <div class="block">
            <img src="<?= Yii::getAlias('@web') . '/assets/images/tick.svg' ?>" alt="" class="block-img">
            <aside class="block-txt">
                <p class="block-title"><?= $settingsText->two_tick_header ?></p>
                <span class="block-detail"><?= $settingsText->two_tick_content ?></span>
            </aside>
        </div>
        <div class="block">
            <img src="<?= Yii::getAlias('@web') . '/assets/images/tick.svg' ?>" alt="" class="block-img">
            <aside class="block-txt">
                <p class="block-title"><?= $settingsText->three_tick_header ?></p>
                <span class="block-detail"><?= $settingsText->three_tick_content ?></span>
            </aside>
        </div>
        <div class="block">
            <img src="<?= Yii::getAlias('@web') . '/assets/images/tick.svg' ?>" alt="" class="block-img">
            <aside class="block-txt">
                <p class="block-title"><?= $settingsText->four_tick_header ?></p>
                <span class="block-detail"><?= $settingsText->four_tick_content ?></span>
            </aside>
        </div>
        <div class="block">
            <img src="<?= Yii::getAlias('@web') . '/assets/images/tick.svg' ?>" alt="" class="block-img">
            <aside class="block-txt">
                <p class="block-title"><?= $settingsText->five_tick_header ?></p>
                <span class="block-detail"><?= $settingsText->five_tick_content ?></span>
            </aside>
        </div>
        <div class="block">
            <img src="<?= Yii::getAlias('@web') . '/assets/images/tick.svg' ?>" alt="" class="block-img">
            <aside class="block-txt">
                <p class="block-title"><?= $settingsText->six_tick_header ?></p>
                <span class="block-detail"><?= $settingsText->six_tick_content ?></span>
            </aside>
        </div>
    </div>
</section>

<section class="second-block-header"></section>
<div class="second-block">
    <article class="ourServices">
        <span class="ourServices-title">Our services</span>
        <section class="images">
            <img src="<?= strpos($images->our_service_1, 'http') !==false ? $images->our_service_1 : Yii::getAlias('@web') . $images->our_service_1 ?>" alt="" class="imgService">
            <img src="<?= strpos($images->our_service_2, 'http') !==false ? $images->our_service_2 : Yii::getAlias('@web') . $images->our_service_2 ?>" alt="" class="imgService">
            <img src="<?= strpos($images->our_service_3, 'http') !==false ? $images->our_service_3 : Yii::getAlias('@web') . $images->our_service_3 ?>" alt="" class="imgService1">
        </section>
        <div class="ourServices-section">
            <div class="ourServices-section-titles-list">
                <section class="ourServices-section-titles" id="services">
                    <?php
                    foreach ($settingsServices as $service) {
                        echo '<h1 class="ourServices-section-titles-ttl">' . $service->title . '</h1>';
                    }
                    ?>
                </section>
            </div>
                <?php
                foreach ($settingsServices as $service) {
                    $tmp = str_replace('<li', '<li class="service-list-item"', $service->content);
                    $val = str_replace('<ul', '<ul class="service-list-text"', $tmp);
                    $val2 = str_replace('<p>', '', $val);
                    echo '<div class="service-text">' . str_replace('</p>', '', $val2)  . '</div>';
                }
                ?>
        </div>
    </article>
</div>
<section class="user-comments">
    <h1 class="user-comments-title">What our customers say about us</h1>
    <section class="comment-list">
        <?php foreach ($comments as $comment): ?>
        <div class="comment">
            <span class="cmnt"><?= $comment->comment ?></span>
            <span class="user-name"><?= $comment->name ?></span>
        </div>
        <?php endforeach; ?>
    </section>
    <div class="dots">
        <div class="dot">1</div>
        <div class="dot">2</div>
        <div class="dot">3</div>
    </div>

</section>
<section class="comments">
    <div class="comments-block">
        <img src="<?= strpos($images->comment_section_image, 'http') !==false ? $images->comment_section_image : Yii::getAlias('@web') . $images->comment_section_image ?>" alt="" class="comments-block-img">
        <div class="form-style-6">
            <h1 class="form-title">Leave a comment</h1>
            <?php
            $form = \yii\widgets\ActiveForm::begin();
            echo $form->field($modelComments, 'name')->textInput();
            echo $form->field($modelComments, 'comment')->textarea();
            echo '<input type="submit" value="Submit"/>';
            \yii\widgets\ActiveForm::end();
            ?>
        </div>
    </div>
</section>

<section class="call">
    <a href="tel:<?= $settingsText->call_us_number ?>" class="call-tel"><span class="call-txt">Are you moving today?       Call Us <?= $settingsText->call_us_number ?></span></a>
</section>

<section class="bottom-block1">
    <div class="left-block">
        <span class="left-block-title">Size of move</span>
        <span class="left-block-txt">Please don't underestimate the size of your move! Make your choice wisely! It helps us meet our schedule and guards against unexpected surprises.</span>

        <span class="left-block-title">Do Not See Your Move Size? No Worries!</span>
        <span class="left-block-txt">Once you submit a complete move request, you can also provide a precise inventory of all items that you plan to move.</span>

        <span class="left-block-title">Type of entrance</span>
        <span class="left-block-txt">If your ground floor apartment is located on a hill and involves outside stairs, please choose the type of entrance according to how many steps you have, NOT ground floor. 10-12 steps usually equal to one flight of stairs.</span>
    </div>
    <div class="center-block">
        <img src="<?= Yii::getAlias('@web') . '/assets/images/Logo1.png' ?>" alt="" class="center-block-img">
        <button class="center-block-btn"><a href="#formTitle">GET A QUOTE</a></button>
    </div>
    <div class="right-block">
        <span class="left-block-title">CONTACT US</span>
        <div class="phone-block">
            <img src="<?= Yii::getAlias('@web') . '/assets/images/phone-bottom.svg' ?>" alt=""  class="bottom-icon">
            <p class="bottom-txt"><?= $settingsText->call_us_number ?></p>
        </div>
        <div class="phone-block">
            <img src="<?= Yii::getAlias('@web') . '/assets/images/mail.svg' ?>" alt="" class="bottom-icon">
            <p class="bottom-txt"><?= $settingsText->contact_email ?></p>
        </div>
        <div class="phone-block">
            <img src="<?= Yii::getAlias('@web') . '/assets/images/pin.svg' ?>" alt="" class="bottom-icon">
            <p class="bottom-txt"><?= $settingsText->location ?></p>
        </div>

        <span class="left-block-title">BUSINESS HOURS:</span>
        <div class="phone-block">
            <img src="<?= Yii::getAlias('@web') . '/assets/images/clock.svg' ?>" alt="" class="bottom-icon">
            <p class="bottom-txt"><?= $settingsText->business_hours ?></p>
        </div>
    </div>
</section>
<footer>
    <p class="footer-class">©2020 BoxStar Moving Services, LLC</p>
</footer>

<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <p class="modal-content-txt"><?= $settingsText->free_estimate_text ?> <br>
            <span class="modal-content-txt-active">Call us today! <br> <a class="modal-content-txt-active" href="tel:<?= $settingsText->call_us_number ?>"><?= $settingsText->call_us_number ?>.</a></span>
        </p>
    </div>
</div>

<?php
$with_rooms = \backend\models\MoveSizes::find()->select('id')->where(['with_rooms' => 1])->all();
$array = json_encode(array_column($with_rooms, 'id'));

$js = <<<JS
$('document').ready(function () {
    
    $(".close").click(function() {
      $("#alert").hide();
    })
    
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
    var modal = document.getElementById("myModal");
    var btn = document.getElementById("myBtn");
    var btn1 = document.getElementById("myBtn1");

    var span = document.getElementsByClassName("close")[0];
    btn.onclick = function() {
        modal.style.display = "block";
    };
    btn1.onclick = function() {
        modal.style.display = "block";
    };

    span.onclick = function() {
        modal.style.display = "none";
    };
    window.onclick = function(event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    }
});
    
JS;

$this->registerJS($js);
?>
