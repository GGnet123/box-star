<?php
namespace frontend\controllers;

use backend\models\Cities;
use backend\models\Comments;
use backend\models\Orders;
use backend\models\SettingsImages;
use backend\models\SettingsPartners;
use backend\models\SettingsServices;
use backend\models\States;
use Yii;
use yii\web\Controller;

/**
 * Site controller
 */
class SiteController extends Controller
{

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $modelOrders = new Orders();
        $modelComments = new Comments();
        if ($modelOrders->load(Yii::$app->request->post()) && $modelOrders->save()) {
            Yii::$app->session->setFlash('alert', 'Your form is successfully submitted!');
            return $this->redirect(Yii::$app->request->referrer);
        }
        if ($modelComments->load(Yii::$app->request->post()) && $modelComments->save()) {
            return $this->redirect(Yii::$app->request->referrer);
        }

        $states = States::find()->all();
        $settings_text = \backend\models\SettingsText::find()->one();
        $settings_services = SettingsServices::find()->all();
        $partners = SettingsPartners::find()->all();
        $comments = Comments::find()->limit(3)->orderBy(['id' => SORT_DESC])->all();
        $images = SettingsImages::find()->one();

        return $this->render('index', [
            'modelComments' => $modelComments,
            'modelOrders' => $modelOrders,
            'comments' => $comments,
            'states' => $states,
            'partners' => $partners,
            'settingsText' => $settings_text,
            'settingsServices' => $settings_services,
            'images' => $images
        ]);
    }

    public function actionTips()
    {
        $settings_text = \backend\models\SettingsText::find()->one();
        return $this->render('tips', ['settings_text' => $settings_text]);
    }
}
