<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Lapangan */

$this->title = 'Tambah Lapangan';
$this->params['breadcrumbs'][] = ['label' => 'Lapangan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lapangan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
