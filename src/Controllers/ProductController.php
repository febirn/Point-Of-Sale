<?php

namespace App\Controllers;


use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use App\Models\ProductModel;

class ProductController extends AbstractController
{

    public function getAdd(Request $request, Response $response)
    {
        return $this->view->render($response, 'products/add.twig');
    }

    public function postAdd(Request $request, Response $response)
	{
		$product = new ProductModel($this->db);
		$this->validation->rule('required', ['name', 'price', 'image']);
		if ($this->validation->validate()) {
			$product->add($request->getParams());
			return $response->withRedirect($this->router->pathFor('product.add'));
		} else {
			$_SESSION['old'] = $request->getParams() ;
			$_SESSION['errors'] = $this->validation->errors();
			return $response->withRedirect($this->router->pathFor('product.add'));
		}
    }
}
