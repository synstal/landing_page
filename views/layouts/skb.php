<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
<link href="http://localhost/project1/web/css/2.css.css" rel="stylesheet">
<link href="http://localhost/project1/web/css/3.css.css" rel="stylesheet">
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <!-- <div><?= Html::img('img/logo_skbbank.png') ?></div> -->
    
<header>
    <nav class="navbar navbar-default header">
        <div class="container">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 navbar-header">
                <a href="<?= Yii::$app->homeUrl ?>">
                    <?= Html::img('img/logo_skbbank.png') ?>
                </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 info">
                <span class="call">Бесплатный звонок по Росcии</span>
                <span class="phone">8-800-1000-600</span>
            </div>
        </div>
    </nav>
</header>


    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer>
    <div class="container">

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

               
               
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <span class="name">© СКБ-банк, 2018</span>
                 <span class="license">
                     Генеральная лицензия № 705<br/>
                     Центрального банка Российской Федерации<br/>
                     Адрес банка: г. Екатеринбург, ул. Куйбышева, 75
                 </span>
            </div>



            <div class="col-lg-3 col-lg-offset-5 col-md-3 col-md-offset-5 col-sm-3 col-sm-offset-5 col-xs-12 footer_info">
                <span class="phone">8-800-1000-600</span>
                <span class="call">Бесплатный звонок по Росcии</span>
            </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
