<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Tabs;

/* @var $this yii\web\View */
/* @var $model infoweb\partials\models\PagePartial */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="page-partial-form">

    <?php
    // Init the form
    $form = ActiveForm::begin([
        'id'                        => 'page-partial-form',
        'options'                   => ['class' => 'tabbed-form', 'enctype' => 'multipart/form-data'],
        'enableAjaxValidation'      => true,
        'enableClientValidation'    => false        
    ]);
    
    // Add the language tabs
    /*foreach (Yii::$app->params['languages'] as $languageId => $languageName) {
        $tabs[] = [
            'label' => $languageName,
            'content' => $this->render('_language_tab', ['model' => $model->getTranslation($languageId), 'form' => $form]),
            'active' => ($languageId == Yii::$app->language) ? true : false
        ];
    }*/
    
    // Initialize the tabs
    $tabs = [
        [
            'label' => Yii::t('app', 'General'),
            'content' => $this->render('_default_tab', ['model' => $model, 'form' => $form]),
        ],
        [
            'label'     => Yii::t('app', 'Data'),
            'content'   => $this->render('_data_tab', ['model' => $model, 'form' => $form]),
        ],
        [
            'label' => Yii::t('infoweb/cms', 'Image'),
            'content' => $this->render('_image_tab', ['model' => $model, 'form' => $form]),
        ],
    ]; 
    
    // Display the tabs
    echo Tabs::widget(['items' => $tabs]);   
    ?>

    <div class="form-group buttons">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create & close') : Yii::t('app', 'Update & close'), ['class' => 'btn btn-default', 'name' => 'close']) ?>
        <?= Html::submitButton(Yii::t('app', $model->isNewRecord ? 'Create & new' : 'Update & new'), ['class' => 'btn btn-default', 'name' => 'new']) ?>
        <?= Html::a(Yii::t('app', 'Close'), ['index'], ['class' => 'btn btn-danger']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>