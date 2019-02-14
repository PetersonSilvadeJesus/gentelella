<?php

namespace petersonsilva\gentelella\assets;

use yii\web\AssetBundle;

/**
 * @author Morteza Karimi <mortezak1373@gmail.com>
 */
class AnimateCssAsset extends AssetBundle
{
    public $sourcePath = '@bower/gentelella/vendors/animate.css/';
    public $css = [
        'animate.min.css'
    ];
    public $js = [
    ];
    public $depends = [
    ];
}
