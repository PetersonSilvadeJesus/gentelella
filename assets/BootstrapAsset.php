<?php

namespace mirocow\gentelella\assets;

use yii\web\AssetBundle;

/**
 * @author Morteza Karimi <mortezak1373@gmail.com>
 */
class BootstrapAsset extends AssetBundle
{
    public $sourcePath = '@bower/bootstrap/dist';
    public $css = [
        'css/bootstrap.min.css'
    ];
    public $js = [
    ];
    public $depends = [
        'yii\bootstrap\BootstrapAsset',
    ];
}
