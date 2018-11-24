<?php
/**
 * @copyright Copyright (c) 2015 Yiister
 * @license https://github.com/yiister/yii2-gentelella/blob/master/LICENSE
 * @link http://gentelella.yiister.ru
 */

namespace mirocow\gentelella\assets;

class Asset extends \yii\web\AssetBundle
{
    public $depends = [
        'mirocow\gentelella\assets\ThemeAsset',
        'mirocow\gentelella\assets\ExtensionAsset',
    ];
}
