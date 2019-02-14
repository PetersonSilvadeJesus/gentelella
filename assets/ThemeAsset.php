<?php
/**
 * @copyright Copyright (c) 2015 Yiister
 * @license https://github.com/yiister/yii2-gentelella/blob/master/LICENSE
 * @link http://gentelella.yiister.ru
 */

namespace petersonsilva\gentelella\assets;

use yii\web\AssetBundle;

class ThemeAsset extends AssetBundle
{
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'petersonsilva\gentelella\assets\BootstrapAsset',
        'rmrevin\yii\fontawesome\AssetBundle',
        'petersonsilva\gentelella\assets\BootstrapProgressbar',
        'petersonsilva\gentelella\assets\ThemeBuildAsset'
    ];
}
