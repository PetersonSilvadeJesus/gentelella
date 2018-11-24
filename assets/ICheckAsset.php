<?php

namespace mirocow\gentelella\assets;

use yii\web\AssetBundle;

/**
 * @author Morteza Karimi <mortezak1373@gmail.com>
 */
class ICheckAsset extends AssetBundle
{
    public $sourcePath = '@bower/gentelella/vendors/iCheck/';
    public $css = [
        'skins/flat/green.css'
    ];
    public $js = [
        'icheck.min.js'
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
