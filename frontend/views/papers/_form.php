<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Papers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="papers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'author')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jounal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'publish_date')->textInput() ?>

    <?= $form->field($model, 'filepath')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_id')->textInput() ?>

    <?= $form->field($model, 'update_id')->textInput() ?>

    <?= $form->field($model, 'type')->dropDownList([ 'article' => 'Article', 'impraeedings' => 'Impraeedings', 'phdthesis' => 'Phdthesis', 'incollection' => 'Incollection', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'lang')->dropDownList([ 'uz' => 'Uz', 'en' => 'En', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
