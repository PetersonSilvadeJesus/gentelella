<?php
/**
 * @copyright Copyright (c) 2015 Yiister
 * @license https://github.com/yiister/yii2-gentelella/blob/master/LICENSE
 * @link http://gentelella.yiister.ru
 */

namespace mirocow\gentelella\widgets\grid;

class GridViewAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@npm/gentelella/vendors/datatables.net-bs/css';
    public $css = [
        'dataTables.bootstrap.min.css',
    ];
    public $js = [];
    public $depends = [
        'mirocow\gentelella\assets\Asset',
    ];
}
