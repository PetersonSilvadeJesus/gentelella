<?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\crud\Generator */

$urlParams = $generator->generateUrlParams();

echo "<?php\n";
?>

use yii\helpers\Html;
<?php if ($generator->enablePanel):?>
use mirocow\gentelella\widgets\Panel;
<?php endif;?>

/* @var $this yii\web\View */
/* @var $model <?= ltrim($generator->modelClass, '\\') ?> */

$this->title = <?= strtr($generator->generateString('Update ' .
    Inflector::camel2words(StringHelper::basename($generator->modelClass)) .
    ': {nameAttribute}', ['nameAttribute' => '{nameAttribute}']), [
    '{nameAttribute}\'' => '\' . $model->' . $generator->getNameAttribute()
]) ?>;
$this->params['breadcrumbs'][] = ['label' => <?= $generator->generateString(Inflector::pluralize(Inflector::camel2words(StringHelper::basename($generator->modelClass)))) ?>, 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model-><?= $generator->getNameAttribute() ?>, 'url' => ['view', <?= $urlParams ?>]];
$this->params['breadcrumbs'][] = <?= $generator->generateString('Update') ?>;
?>
<div class="<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-update">
    <?php if ($generator->enablePageTitle) { ?><div class="page-title">
        <div class="title_left">
            <h3><?= "<?= " ?>Html::encode($this->title) ?></h3>
        </div>

        <div class="title_right">
            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button"></button>
                    </span>
                </div>
            </div>
        </div>
    </div><?php }?>
<div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <?php if ($generator->enablePanel):?>
<?php echo "<?php" ?> Panel::begin([
            'header' => Html::encode($this->title),
            'icon' => 'pencil-square-o',
            ]) ?>
            <?php endif;?>
<?= "<?= " ?>$this->render('_form', [
            'model' => $model,
            ]) ?>
<?php if ($generator->enablePanel):?>
<?php echo "<?php" ?> Panel::end() ?><?php endif;?>
        </div>
    </div>
</div>

