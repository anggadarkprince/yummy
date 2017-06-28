<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Recipes Discovery';
$this->params['breadcrumbs'][] = $this->title;
?>
<h2 class="lead"><?= Html::encode($this->title) ?></h2>

<div class="row">
    <div class="col-md-3">
        <div class="thumbnail">
            <img data-src="holder.js/300x200" alt="300x200" style="width: 300px; height: 200px;" src="data:image/png;base64,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">
            <div class="caption">
                <h3>Recipe Title</h3>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="thumbnail">
            <img data-src="holder.js/300x200" alt="300x200" style="width: 300px; height: 200px;" src="data:image/png;base64,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">
            <div class="caption">
                <h3>Thumbnail label</h3>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="thumbnail">
            <img data-src="holder.js/300x200" alt="300x200" style="width: 300px; height: 200px;" src="data:image/png;base64,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">
            <div class="caption">
                <h3>Thumbnail label</h3>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="thumbnail">
            <img data-src="holder.js/300x200" alt="300x200" style="width: 300px; height: 200px;" src="data:image/png;base64,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">
            <div class="caption">
                <h3>Thumbnail label</h3>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
            </div>
        </div>
    </div>
</div>