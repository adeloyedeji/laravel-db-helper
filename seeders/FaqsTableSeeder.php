<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FaqsTableSeeder extends Seeder
{
	public function run()
{
		$rows = [	
			[
				'id' => '2',
				'title' => 'What is Tonia Pharmacy?',
				'content' => 'Tonia Pharmacy Ltd was incorporated in the year 2003 (RC497235) to carry on business as a pharmaceutical company. Since inception, the company has grown to become one of the reputable pharmacies in Abuja with five branches located in various parts of the city.',
				'image' => 'images/department/presc1.jpg',
				'created_at' => '2018-11-30 09:43:21',
				'updated_at' => '2018-12-05 12:27:21',

			],

			[
				'id' => '10',
				'title' => 'How can i purchase a product online?',
				'content' => 'Purchasing a product is very simple, all you have to do is click on the product or <span>ADD TO CART</span> , and proceed to the checkout page where you are open to any payment option of you choice.',
				'image' => '',
				'created_at' => '',
				'updated_at' => '',

			],

			[
				'id' => '11',
				'title' => 'Can products be delivered to me at home?',
				'content' => 'TOf course we do home delivery, just click on the button when making your order.',
				'image' => '',
				'created_at' => '',
				'updated_at' => '',

			],

			[
				'id' => '3',
				'title' => 'Who are our partners',
				'content' => 'We partner with CIGNA formally Vanbreda International to provide health care services to some staff of international Organization-WHO, UNITED NATIONS.',
				'image' => '',
				'created_at' => '2018-11-30 09:43:56',
				'updated_at' => '2018-11-30 09:43:56',

			],

			[
				'id' => '4',
				'title' => 'When was Tonia Pharmacy incorperated',
				'content' => 'Tonia Pharmacy Ltd was incorporated in the year 2003 (RC497235).',
				'image' => '',
				'created_at' => '2018-11-30 09:47:41',
				'updated_at' => '2018-11-30 09:47:41',

			],

			[
				'id' => '5',
				'title' => 'Where can i find Tonia Pharmacy supermaket',
				'content' => 'Our Supermakets are located in any of our branches Store(Pharmacy) in Abuja for now.',
				'image' => '',
				'created_at' => '2018-11-30 09:48:18',
				'updated_at' => '2018-11-30 09:48:18',

			],

			[
				'id' => '9',
				'title' => 'What is Tonia Pharmacy Vision?',
				'content' => 'To be a front-line Pharmaceutical Services Company of African Origin: Making quality, Affordable Life Enhancing Products available to all and Creating Value for our Stakeholders.',
				'image' => '',
				'created_at' => '',
				'updated_at' => '',

			],

		];
		foreach ($rows as $row) {
			DB::table('Faqs')->insert($row);
		}
	}
}