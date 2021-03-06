<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <script type="application/javascript" src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.11/angular.min.js"></script>
    <script type="application/javascript" src="/js/angular/tests-controller.js"></script>
</head>
<body>

<?php $this->beginBody() ?>
    <div class="wrap">
        <?php
            NavBar::begin([
                'brandLabel' => 'S&A Online',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'encodeLabels' => false,
                'items' => [
                    //['label' => Html::tag('i', '', ['class' => 'glyphicon glyphicon-home']) . ' Главная', 'url' => ['/site/index']],
                    ['label' => Html::tag('i', '', ['class' => 'glyphicon glyphicon-list-alt']) . ' Компании', 'url' => ['/companies']],
                    ['label' => Html::tag('i', '', ['class' => 'glyphicon glyphicon-user']) . ' Пользователи', 'url' => ['/users']],
                    ['label' => Html::tag('i', '', ['class' => 'glyphicon glyphicon-question-sign']) . ' Техподдержка', 'url' => ['/feedback/add']],
                    ['label' => Html::tag('i', '', ['class' => 'glyphicon glyphicon-question-sign']) . ' Проекты', 'url' => ['/feedback/add']],
                    ['label' => Html::tag('i', '', ['class' => 'glyphicon glyphicon-question-sign']) . ' Тесты', 'url' => ['/test']],
                    //['label' => 'О проекте', 'url' => ['/site/about']],
                    Yii::$app->user->isGuest ?
                        ['label' => 'Войти', 'url' => ['/site/login']] :
                        ['label' => 'Выйти (' . Yii::$app->user->identity->phio . ')',
                            'url' => ['/site/logout'],
                            'linkOptions' => ['data-method' => 'post']],
                ],
            ]);
            NavBar::end();
        ?>

        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p class="pull-left">&copy; My Company <?= date('Y') ?></p>
            <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
