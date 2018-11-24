<?php

namespace mirocow\gentelella\assets;

use yii\web\AssetBundle;

/**
 * @author Morteza Karimi <mortezak1373@gmail.com>
 */
class SwitcheryAsset extends AssetBundle
{
    public $sourcePath = '@npm/gentelella/vendors/switchery/dist/';
    public $css = [
        'switchery.min.css'
    ];
    public $js = [
        'switchery.min.js'
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
