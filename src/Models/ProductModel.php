<?php

namespace App\Models;

class ProductModel extends AbstractModel
{
	protected $table = 'product';

	public function add(array $data)
	{
		$data = [
			'name'			=> $data['name'],
			'category_id'	=> $data['category'],
			'price'			=> $data['price'],
			'image'	=> $data['image'],
			];

		$this->createData($data);
	}

}
