<?php

require '../vendor/autoload.php';

use RedBeanPHP\R;

R::setup('mysql:host=149.202.160.19;dbname=hky16_v0', 'data', 'hk16');

$app=new \Slim\Slim([
    'templates.path'=>'../templates'
]);

$app->get('/(:key(/:action(/:category(/:query))))',function ($key=null,$action=null,$category=null,$query=null) use($app) {
    $app->render('index.php',compact('key','action','category','query'));
});

$app->post('/(:key(/:action(/:category(/:query))))',function ($key=null,$action=null,$category=null,$query=null) use($app) {
    $app->render('index.php',compact('key','action','category','query'));
});

$app->run();