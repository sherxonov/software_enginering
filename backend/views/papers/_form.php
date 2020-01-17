<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\tinymce\TinyMce;
use dosamigos\datepicker\DatePicker;


/* @var $this yii\web\View */
/* @var $model common\models\Papers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="papers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'author')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jounal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'publish_date')->widget(
        DatePicker::className(), [
        // inline too, not bad
        'inline' => true,
        // modify template for custom rendering
        'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'dd-M-yyyy'
        ]
        ])?>

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
