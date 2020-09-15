<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ChoosesTableSeeder extends Seeder
{
	public function run()
{
		$rows = [	
			[
				'id' => '1',
				'title' => 'Pharmacy',
				'content' => 'Tonia Pharmacy Ltd. is one of the leading drug stores in Abuja with ranges of products on authentic and affordable medications for children, adults and the elderly',
				'image' => 'images/department/presc1.jpg',
				'created_at' => '',
				'updated_at' => '2018-12-05 10:38:52',

			],

			[
				'id' => '2',
				'title' => 'Supermarket',
				'content' => ' Tonia Pharmacy & Supermarket offers wide range of genuine pharmaceutical products as well as groceries and everyday needs. ',
				'image' => 'images/department/item1.jpg',
				'created_at' => '2018-12-05 11:13:24',
				'updated_at' => '2018-12-05 11:13:24',

			],

			[
				'id' => '3',
				'title' => 'Fast Delivery',
				'content' => 'Our next-day delivery service option allows our customers to have their products delivered the day after they’re collected by the courier. Next-day delivery service means that you can have your products delivered to your doorstep more quickly than a 2-3 day service',
				'image' => 'images/department/Speedy-Fast-Delivery.jpg',
				'created_at' => '2018-12-05 11:13:24',
				'updated_at' => '2018-12-05 11:13:24',

			],

			[
				'id' => '4',
				'title' => 'Discounts',
				'content' => 'We give Discounts to all customers no matter the quantity of item purchased',
				'image' => 'images/department/discounts.jpg',
				'created_at' => '2018-12-05 11:14:06',
				'updated_at' => '2018-12-05 11:14:06',

			],

			[
				'id' => '5',
				'title' => 'Professionals',
				'content' => 'We keep our standard high and affordable for customers',
				'image' => 'images/department/first.jpg',
				'created_at' => '2018-12-05 11:14:06',
				'updated_at' => '2018-12-05 11:14:06',

			],

			[
				'id' => '6',
				'title' => 'Clinic',
				'content' => 'Tonia Pharmacy Ltd. is one of the leading drug stores in Abuja with ranges of products on authentic and affordable medications for children, adults and the elderly',
				'image' => 'images/department/04.jpg',
				'created_at' => '2018-12-05 11:14:42',
				'updated_at' => '2018-12-05 11:14:42',

			],

		];
		foreach ($rows as $row) {
			\DB::table('Chooses')->insert($row);
		}
	}
}