<?php


namespace frontend\assets;


use yii\web\AssetBundle;

class WebAssets extends AssetBundle
{
    public $basePath = '';
    public $baseUrl = '';
    public $css = [
        'https://fonts.googleapis.com/css?family=Anton',
        'https://fonts.googleapis.com/css?family=Alike',
        'https://fonts.googleapis.com/css2?family=Crimson+Text&display=swap',
        'https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@1,900&display=swap',
        'https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap',
        'https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap'
    ];
    public $js = [
    ];
}