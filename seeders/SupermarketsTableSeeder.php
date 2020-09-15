<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SupermarketsTableSeeder extends Seeder
{
	public function run()
{
		$rows = [	
			[
				'id' => '1',
				'sku' => 'SKU540755238007',
				'category_id' => '9',
				'sub_category_id' => '1',
				'title' => 'Best London Dry Gin',
				'price' => '400',
				'overview' => '',
				'description' => '',
				'availability' => '1',
				'slug' => 'best-london-dry-gin1524313397',
				'image1' => 'supermarkets/best-london-dry-gin1524328672.jpg',
				'thumb1' => 'supermarkets/thumbs/product-thumb1524328672.jpg',
				'small1' => 'supermarkets/smallest/product-small1524328672.jpg',
				'image2' => '',
				'thumb2' => '',
				'small2' => '',
				'image3' => '',
				'thumb3' => '',
				'small3' => '',
				'image4' => '',
				'thumb4' => '',
				'small4' => '',
				'created_at' => '',
				'updated_at' => '',

			],

		];
		foreach ($rows as $row) {
			\DB::table('Supermarkets')->insert($row);
		}
	}
}