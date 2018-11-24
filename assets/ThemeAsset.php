<?php
/**
 * @copyright Copyright (c) 2015 Yiister
 * @license https://github.com/yiister/yii2-gentelella/blob/master/LICENSE
 * @link http://gentelella.yiister.ru
 */

namespace mirocow\gentelella\assets;

use yii\web\AssetBundle;

class ThemeAsset extends AssetBundle
{
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'mirocow\gentelella\assets\BootstrapAsset',
        'rmrevin\yii\fontawesome\AssetBundle',
        'mirocow\gentelella\assets\BootstrapProgressbar',
        'mirocow\gentelella\assets\ThemeBuildAsset'
    ];
}
