<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Ziyaret */

$this->title = 'Create Ziyaret';
$this->params['breadcrumbs'][] = ['label' => 'Ziyarets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ziyaret-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
