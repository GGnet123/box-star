<?php

namespace console\controllers;

use yii\console\Controller;
use yii\swiftmailer\Mailer;
use yii\swiftmailer\Message;

class TestController extends Controller
{
    public function actionTest() {
        $mail = \Yii::$app->mailer->compose()
            ->setFrom('kobecan228@gmail.com')
            ->setTo('sales@boxstarmovers.com')
            ->setSubject('Box-Star Delivery Service')
            ->setTextBody('New order on website');
        var_dump($mail->send());
    }
}