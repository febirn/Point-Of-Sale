<?php

$app->get('/', 'App\Controllers\HomeController:index');
$app->get('/add', 'App\Controllers\ProductController:getAdd')->setName('product.add');
$app->post('/add', 'App\Controllers\ProductController:postAdd');

?>
