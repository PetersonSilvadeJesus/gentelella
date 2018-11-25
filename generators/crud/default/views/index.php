<?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $generator mirocow\gentelella\generators\crud\Generator */

$urlParams = $generator->generateUrlParams();
$nameAttribute = $generator->getNameAttribute();

echo "<?php\n";
?>

use yii\helpers\Html;
<?php if ($generator->enablePanel):?>
use mirocow\gentelella\widgets\Panel;
<?php endif;?>
use <?php switch ($generator->indexWidgetType) {
    case 'grid_extended':
        echo "bupy7\\grid\\GridView";
    break;
    case 'datatable':
        echo "mortezakarimi\\gentelella\\widgets\\grid\\GridView";
        break;
    case 'grid':
        echo "yii\\grid\\GridView";
        break;
    default:
        echo "yii\\widgets\\ListView";
} ?>;
<?= $generator->enablePjax ? 'use yii\widgets\Pjax;' : '' ?>

/* @var $this yii\web\View */
<?= !empty($generator->searchModelClass) ? "/* @var \$searchModel " . ltrim($generator->searchModelClass, '\\') . " */\n" : '' ?>
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = <?= $generator->generateString(Inflector::pluralize(Inflector::camel2words(StringHelper::basename($generator->modelClass)))) ?>;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-index">
    <?php if ($generator->enablePageTitle) { ?>
        <div class="page-title">
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
<div class="clearfix"></div>
        </div><?php } ?>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
<?php if ($generator->enablePanel):?>
<?php echo "<?php" ?> Panel::begin([
            'header' => Html::encode($this->title),
            'icon' => 'list-ul',
            ]) ?>
<?php endif;?>
<?= $generator->enablePjax ? "\t\t<?php Pjax::begin(); ?>\n" : '' ?>
<?php if (!empty($generator->searchModelClass)): ?>
<?= "\t\t\t<?php " . ($generator->indexWidgetType === 'list' ? "" : "// ") ?>echo $this->render('_search', ['model' => $searchModel]); ?>
<?php endif; ?>
            <p>
            <?= "<?= " ?>Html::a(<?= $generator->generateString('Create ' . Inflector::camel2words(StringHelper::basename($generator->modelClass))) ?>, ['create'], ['class' => 'btn btn-success']) ?>
            </p>
            <?php if ($generator->indexWidgetType === 'list'): ?>
    <?= "<?= " ?>ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'item'],
        'itemView' => function ($model, $key, $index, $widget) {
            return Html::a(Html::encode($model-><?= $nameAttribute ?>), ['view', <?= $urlParams ?>]);
        },
    ]) ?>
        <?php else: ?>
<?= "<?= " ?>GridView::widget([
                'dataProvider' => $dataProvider,
                <?= !empty($generator->searchModelClass) ? "'filterModel' => \$searchModel,\n\t\t\t\t'columns' => [\n\t\t" : "'columns' => [\n\t\t"; ?>
            ['class' => 'yii\grid\SerialColumn'],
<?php
$count = 0;
if (($tableSchema = $generator->getTableSchema()) === false) {
    foreach ($generator->getColumnNames() as $name) {
        if (++$count < 6) {
            echo "\n\t\t\t\t\t\t" . $name . "',\n";
        } else {
            echo "\n\t\t\t\t\t\t//'" . $name . "',\n";
        }
    }
} else {
    foreach ($tableSchema->columns as $column) {
        $format = $generator->generateColumnFormat($column);
        if (++$count < 6) {
            echo "\n\t\t\t\t\t\t'" . $column->name . ($format === 'text' ? "" : ":" . $format) . "',\n";
        } else {
            echo "\n\t\t\t\t\t\t//'" . $column->name . ($format === 'text' ? "" : ":" . $format) . "',\n";
        }
    }
}
?>

                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]); ?>
        <?php endif; ?>
<?= $generator->enablePjax ? "\t<?php Pjax::end(); ?>\n" : '' ?>
<?php if ($generator->enablePanel):?>
<?php echo "<?php" ?> Panel::end() ?><?php endif;?>
        </div>
    </div>
</div>