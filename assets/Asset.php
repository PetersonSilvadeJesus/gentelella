<?php
/**
 * @copyright Copyright (c) 2015 Yiister
 * @license https://github.com/yiister/yii2-gentelella/blob/master/LICENSE
 * @link http://gentelella.yiister.ru
 */

namespace petersonsilva\gentelella\assets;

class Asset extends \yii\web\AssetBundle
{
    public $depends = [
        'petersonsilva\gentelella\assets\ThemeAsset',
        'petersonsilva\gentelella\assets\ExtensionAsset',
    ];
}
