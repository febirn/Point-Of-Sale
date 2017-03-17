<?php

$app->get('/', 'App\Controllers\HomeController:index')->setName('home');
$app->get('/produk/list', 'App\Controllers\ProductController:getList')->setName('list.product');
$app->get('/add', 'App\Controllers\ProductController:getAdd')->setName('product.add');
$app->post('/add', 'App\Controllers\ProductController:postAdd');

?>
