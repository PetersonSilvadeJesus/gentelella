<?php
/**
 * @copyright Copyright (c) 2015 Yiister
 * @license https://github.com/yiister/yii2-gentelella/blob/master/LICENSE
 * @link http://gentelella.yiister.ru
 */

namespace petersonsilva\gentelella\assets;

use yii\web\AssetBundle;

class ExtensionAsset extends AssetBundle
{
    public $sourcePath = '@petersonsilva/gentelella/assets/src';
    public $js = [
        'js/extension.js',
    ];
    public $css = [
        'css/required.css',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
