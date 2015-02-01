<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\OrganizationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Компании';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="organization-index">

    <h1><?= Html::tag('i', '', ['class' => 'glyphicon glyphicon-list-alt']) . " " . Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Html::tag('i', '', ['class' => 'glyphicon glyphicon-plus']) . ' Добавить компанию', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            [
                'attribute' => 'created',
                'value' => function ($data) {
                    return Yii::$app->formatter->asDatetime($data->created, "php:d M Y, H:i:s");
                }
            ],
            [
                'attribute' => 'updated',
                'value' => function ($data) {
                    return Yii::$app->formatter->asDatetime($data->updated, "php:d M Y, H:i:s");
                }
            ],
            [
                'attribute' => 'author.id',
                'label'=>'Кем создан',
                'value'=> function($data) {
                    return $data->author['phio'];
                },
                //'filter'=>''
            ],
            //'id',
            // 'parent_id',
            // 'level',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
