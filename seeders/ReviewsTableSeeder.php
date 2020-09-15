<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{
	public function run()
{
		$rows = [	
			[
				'id' => '1',
				'product_id' => '',
				'product_item_id' => '1350',
				'user_id' => '',
				'rating' => '',
				'approved' => '',
				'spam' => '',
				'comment' => 'this is what i needed',
				'created_at' => '2019-08-03 07:06:18',
				'updated_at' => '2019-08-03 07:06:18',

			],

			[
				'id' => '2',
				'product_id' => '',
				'product_item_id' => '1340',
				'user_id' => '',
				'rating' => '',
				'approved' => '',
				'spam' => '',
				'comment' => 'i like the product please',
				'created_at' => '2019-08-03 07:26:03',
				'updated_at' => '2019-08-03 07:26:03',

			],

			[
				'id' => '3',
				'product_id' => '',
				'product_item_id' => '1340',
				'user_id' => '',
				'rating' => '',
				'approved' => '',
				'spam' => '',
				'comment' => 'good',
				'created_at' => '2019-08-03 07:26:40',
				'updated_at' => '2019-08-03 07:26:40',

			],

			[
				'id' => '4',
				'product_id' => '',
				'product_item_id' => '1340',
				'user_id' => '',
				'rating' => '',
				'approved' => '',
				'spam' => '',
				'comment' => 'cool',
				'created_at' => '2019-08-03 07:32:32',
				'updated_at' => '2019-08-03 07:32:32',

			],

			[
				'id' => '5',
				'product_id' => '',
				'product_item_id' => '1340',
				'user_id' => '',
				'rating' => '',
				'approved' => '',
				'spam' => '',
				'comment' => 'okk',
				'created_at' => '2019-08-03 07:44:07',
				'updated_at' => '2019-08-03 07:44:07',

			],

		];
		foreach ($rows as $row) {
			DB::table('Reviews')->insert($row);
		}
	}
}