<?php
/* @var $this yii\web\View */

use yii\widgets\LinkPager;

$this->title = 'Explore Recipe - Yummy';
$this->registerMetaTag(['name' => 'keywords', 'content' => 'recipe, delicious, yummy, food, beverage, coffee']);
$this->registerMetaTag(['name' => 'description', 'content' => 'This website is about recipe around the world.'], 'description');
$this->registerLinkTag([
    'title' => 'Recipe Explore',
    'rel' => 'alternate',
    'type' => 'application/rss+xml',
    'href' => 'http://www.yummy.com/rss.xml/',
]);
$this->params['breadcrumbs'][] = 'Explore Recipes';
?>
    <h1 class="lead">
        Recipes Around The World
        <small class="pull-right" style="margin-top: 10px">
            Found <?= $pagination->totalCount ?> recipes
        </small>
    </h1>

    <?= $this->render('_card_default', compact('recipes')) ?>

<?= LinkPager::widget(['pagination' => $pagination]) ?>