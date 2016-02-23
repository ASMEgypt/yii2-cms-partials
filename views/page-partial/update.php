<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model infoweb\partials\models\PagePartial */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => Yii::t('infoweb/partials', 'Page Partial'),
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('infoweb/partials', 'Page Partials'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['update', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="page-partial-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model'                   => $model,
        'allowContentDuplication' => $allowContentDuplication,
    ]) ?>

</div>
