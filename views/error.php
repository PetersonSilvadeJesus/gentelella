<?php
/**
 * To Use this page for your error page add following code to your controller
 * `
 *   public function actions()
 *   {
 *       return [
 *           'error' => [
 *               'class' => 'yii\web\ErrorAction',
 *               'view' => '@petersonsilva/gentelella/views/error',
 *           ],
 *       ];
 *   }`
 *
 */

/**
 * @var $this yii\web\View
 * @var $name string
 * @var $message string
 * @var $exception \yii\web\HttpException
 * @var string $content
 */

use yii\helpers\Html;
use rmrevin\yii\fontawesome\FA;
use petersonsilva\gentelella\widgets\Panel;

$bundle = petersonsilva\gentelella\assets\Asset::register($this);

$this->title = $name;
?>
<?php if (!Yii::$app->user->isGuest): ?>
    <?php Panel::begin() ?>
    <div class="col-middle">
	    <div class="text-center text-center">
	        <h1 class="error-number"><?= $exception->statusCode ?></h1>
	        <h2><?= nl2br(Html::encode($message)) ?></h2>
	        <p>
	            The above error occurred while the Web server was processing your request.
	        </p>
	        <p>
	            Please contact us if you think this is a server error. Thank you.
	        </p>
	    </div>
    </div>
    <?php Panel::end() ?>
<?php else: ?>
    <?php
    $this->context->layout = false;
    $this->beginPage(); ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta charset="<?= Yii::$app->charset ?>"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <!-- /header content -->
    <body class="nav-<?= !empty($_COOKIE['menuIsCollapsed']) && $_COOKIE['menuIsCollapsed'] == 'true' ? 'sm' : 'md' ?>">
    <?php $this->beginBody(); ?>
    <div class="container body">
        <div class="main_container">
            <!-- page content -->
            <div class="col-md-12">
				<div class="col-middle">
				    <div class="text-center text-center">
				        <h1 class="error-number"><?= $exception->statusCode ?></h1>
				        <h2><?= nl2br(Html::encode($message)) ?></h2>
				        <p>
				            The above error occurred while the Web server was processing your request.
				        </p>
				        <p>
				            Please contact us if you think this is a server error. Thank you.
				        </p>
				    </div>
				</div>
            </div>
            <!-- /page content -->
        </div>
    </div>
    <?php $this->endBody(); ?>
    </body>
    </html>
    <?php $this->endPage(); ?>
<?php endif; ?>
