<?php
/**
 * @copyright Copyright (c) 2015 Yiister
 * @license https://github.com/yiister/yii2-gentelella/blob/master/LICENSE
 * @link http://gentelella.yiister.ru
 */

namespace petersonsilva\gentelella\assets;

use yii\web\AssetBundle;

class ThemeBuildAsset extends AssetBundle
{
    public $sourcePath = '@bower/gentelella/build';

    public $css = [
        'css/custom.css',
    ];
    public $js = [
        'js/helpers/smartresize.js',
        'js/custom.js',
    ];
}
