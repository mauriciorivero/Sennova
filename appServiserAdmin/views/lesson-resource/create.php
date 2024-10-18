<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\LessonResource $model */

$this->title = Yii::t('app', 'Create Lesson Resource');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Lesson Resources'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lesson-resource-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
