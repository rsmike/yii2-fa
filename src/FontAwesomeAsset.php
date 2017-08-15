<?php

namespace rsmike\yii2fa;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class FontAwesomeAsset extends AssetBundle
{
    public $sourcePath = '@vendor/fortawesome/font-awesome';

    public $publishOptions = [
        'only' => [
            'css/*',
            'fonts/*',
        ],
    ];

    public $css = [
        YII_DEBUG ? 'css/font-awesome.css' : 'css/font-awesome.min.css'
    ];
}
