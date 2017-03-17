<?php

$app->get('/', 'App\Controllers\HomeController:index')->setName('home');
$app->get('/produk/list', 'App\Controllers\ProductController:getList')->setName('list.product');

?>