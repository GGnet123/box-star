<?php
$this->registerCssFile('@web/css/tips.css');

/**
 * @var \backend\models\SettingsText $settings_text
 */
?>

<section class="nav-block-list">
    <a href="/"><img src="<?= Yii::getAlias('@web') . '/assets/images/logo.png' ?>" alt="logo" class="logo"></a>
    <div class="allBlock">
        <div class="nav-block">
            <img src="<?= Yii::getAlias('@web') . '/assets/images/phone.svg' ?>" alt="phone" class="nav-block-icon">
            <a href="tel:+2028439181" class="nav-block-txt">Contact us</a>
        </div>
        <div class="nav-block">
            <img src="<?= Yii::getAlias('@web') . '/assets/images/debt.svg' ?>" alt="estimate" class="nav-block-icon">
            <a class="nav-block-txt" id="myBtn">Free estimate!</a>
        </div>
        <div class="nav-block">
            <img src="<?= Yii::getAlias('@web') . '/assets/images/project.svg' ?>" alt="tips" class="nav-block-icon">
            <a href="/tips" class="nav-block-txt">Moving Tips</a>
        </div>
    </div>
</section>

<header>
    <section class="navbar">
        <h1 class="navbar-title">Moving Tips</h1>
    </section>
    <section class="non-rect"></section>
</header>

<div class="second-block">
    <span class="ourServices-title">Paking and moving hacks from the pros:</span>
    <article class="ourServices">
        <ul class="service-list-text">
            <li class="service-list-item">Boxes should be full and snug, but not over-packed. The boxes will likely
                be stacked, so ask yourself if they can handle the weight of other boxes.
            </li>
            <li class="service-list-item">Do not use medium and large boxes for books, use only small size boxes.
            </li>
            <li class="service-list-item">Identify each box with the room it belongs to in the new house for proper
                placement and simplified unpacking.
            </li>
            <li class="service-list-item">All the boxes with dishes and/or fragile items must be labeled
                “fragile”.
            </li>
            <li class="service-list-item">Tape the bottom of heavy boxes securely.</li>
            <li class="service-list-item">Plates should be packed on edge and glasses packed upside down. (We do not
                recommend newspapers to wrap dishes as the ink will transfer. We sell wrapping paper and bubble wrap
                for these items.
            </li>
            <li class="service-list-item">Remove light bulbs from lamps, as well as the lampshades. Pack both in
                boxes or take them in a separate vehicle.
            </li>
            <li class="service-list-item">Please empty all drawers and pack all miscellaneous items into boxes (Trash bags WILL NOT be moved
                in the truck unless with pillows/towels etc.)
            </li>
            <li class="service-list-item">Please know that the crew cannot be split during a move. They start together and finish together per
                company policy. (Example: you have a 4 – men crew, 2 men cannot go to one location, and another 2
                men stay at the house. 4 men must work together until done).
            </li>
            <li class="service-list-item">Please make sure the elevator is reserved and available to you on the day of your move!</li>
            <li>Please make sure to let us know any changes to your relocation 72-HOURS prior to the move to avoid
                cancellation and date-change charges
            </li>
            <li class="service-list-item">Please familiarize yourself with the insurance option that is provided by BMFC.</li>
            <li class="service-list-item">Apply for moving permits, if you think there will be lack of parking next to your apartment.</li>
            <li class="service-list-item">Parking as close as possible to your home entrance makes moves more efficient and protects you from
                paying any associated parking tickets.
            </li>
            <li class="service-list-item">Please let us know if there are any objects that are heavier than 200 lbs., are of high value,
                fragile or require extreme care.
            </li>
        </ul>
    </article>

    <section class="call">
        <span class="call-txt">Ready To Move? Let Us Help You</span>
        <button class="call-btn"><a href="/" class="call-btn-txt">GET A QUOTE</a></button>
    </section>

    <article class="ourServices">
        <span class="ourServices-title">Important information before and after the move:</span>
        <ul class="service-list-text">
            <li class="service-list-item">PLEASE HAVE ALL THE ELECTRONIC DEVICES TURNED ON when the crew arrives, this is our policy to check the working condition before and after the move.</li>
            <li class="service-list-item">All small and fragile electronic pieces will NOT be moved in the truck (laptops, screens, etc.). We are happy to help you load them into a car.</li>
            <li class="service-list-item">Please empty all drawers of all furniture and pack all miscellaneous items into boxes (Trash bags are not recommended to be moved in the truck). ***FOR SELF-PACKING CUSTOMERS ONLY.</li>
            <li class="service-list-item">PLEASE inspect ALL your goods and premises, including but not limited to elevators, floors, and stairwells. Make sure there are no damages found. Check that the cab and the back of the truck are empty, and the job is complete BEFORE SIGNING THE CONTRACT.</li>
            <li class="service-list-item">Please note, we do not transport live plants in the trucks due to their fragile nature. We are happy to help you load them into your vehicle. If you have large pots, please take the dirt out, they must be transported empty</li>
        </ul>
    </article>
</div>


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
        <img src="<?= Yii::getAlias('@web') . '/assets/images/Logo1.png'?>" alt="" class="center-block-img">
        <button class="center-block-btn"><a href="/">GET A QUOTE</a></button>
    </div>
    <div class="right-block">
        <span class="left-block-title">CONTACT US</span>
        <div class="phone-block">
            <img src="<?= Yii::getAlias('@web') . '/assets/images/phone-bottom.svg'?>" alt="" class="bottom-icon">
            <p class="bottom-txt"><?= $settings_text->call_us_number ?></p>
        </div>
        <div class="phone-block">
            <img src="<?= Yii::getAlias('@web') . '/assets/images/mail.svg'?>" alt="" class="bottom-icon">
            <p class="bottom-txt"><?= $settings_text->contact_email ?></p>
        </div>
        <div class="phone-block">
            <img src="<?= Yii::getAlias('@web') . '/assets/images/pin.svg'?>" alt="" class="bottom-icon">
            <p class="bottom-txt"><?= $settings_text->location ?></p>
        </div>

        <span class="left-block-title">BUSINESS HOURS:</span>
        <div class="phone-block">
            <img src="<?= Yii::getAlias('@web') . '/assets/images/clock.svg'?>" alt="" class="bottom-icon">
            <p class="bottom-txt"><?= $settings_text->business_hours ?></p>
        </div>
    </div>
</section>
<footer>
    <p class="footer-class">©2020 BoxStar Moving Services, LLC</p>
</footer>

<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <p class="modal-content-txt">We will gladly give you an over the phone estimate. However, because we want to
            provide you with the most accurate pricing prior to your move, we highly recommend you take advantage of
            your FREE visual moving estimate in person and also through video call.
            At BoxStar Movers, we will provide you with a flat rate for your move to prevent any unexpected costs or
            unforeseen issues upon arriving at your destination. Contact us to schedule your free visual estimate! <br>
            <span class="modal-content-txt-active">Call us today! <br> <a class="modal-content-txt-active"
                                                                          href="tel:<?= $settings_text->call_us_number ?>"><?= $settings_text->call_us_number ?></a></span>
        </p>
    </div>
</div>

<?php
$js = <<<JS
    var modal = document.getElementById("myModal");
    var btn = document.getElementById("myBtn");
    var span = document.getElementsByClassName("close")[0];
    btn.onclick = function () {
        modal.style.display = "block";
    };
    span.onclick = function () {
        modal.style.display = "none";
    };
    window.onclick = function (event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    }
JS;

$this->registerJs($js);

?>
