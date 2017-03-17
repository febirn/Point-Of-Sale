<?php

namespace App\Controllers;

use App\Models\ProductModel;

class ProductController extends AbstractController
{

	public function getlist($request, $response)
	{
		$product = new ProductModel($this->db);

		$getProduct = $product->getAll();

		$data['product'] = $getProduct;

		return $this->view->render($response, 'products/list.twig', $data);
	}

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
