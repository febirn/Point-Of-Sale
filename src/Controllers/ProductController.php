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
}

?>