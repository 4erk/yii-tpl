<?php

namespace app\assets;

use yii\bootstrap4\BootstrapAsset;
use yii\web\AssetBundle;
use yii\web\YiiAsset;

/**
 * Main app application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl  = '@web';
    public $css      = [
        'css/site.css',
    ];
    public $js       = [
    ];
    public $depends  = [
        YiiAsset::class,
        BootstrapAsset::class,
    ];
}
