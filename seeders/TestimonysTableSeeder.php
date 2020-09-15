<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TestimonysTableSeeder extends Seeder
{
	public function run()
{
		$rows = [	
			[
				'id' => '1',
				'name' => 'Harris Morgan',
				'title' => 'Student',
				'content' => 'Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.',
				'image' => 'images/patient/01.jpg',
				'created_at' => '2018-12-06 11:25:02',
				'updated_at' => '2018-12-06 10:50:52',

			],

			[
				'id' => '3',
				'name' => 'Rinks Cooper',
				'title' => 'Student',
				'content' => 'Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.',
				'image' => 'images/patient/04.jpg',
				'created_at' => '2018-12-06 10:43:19',
				'updated_at' => '2018-12-06 10:43:19',

			],

			[
				'id' => '4',
				'name' => 'JD Scot',
				'title' => 'Student',
				'content' => 'Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.',
				'image' => 'images/patient/02.jpg',
				'created_at' => '2018-12-06 10:44:04',
				'updated_at' => '2018-12-06 10:44:04',

			],

			[
				'id' => '6',
				'name' => 'Nikki Jordan',
				'title' => 'Student',
				'content' => 'Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.',
				'image' => 'images/patient/03.jpg',
				'created_at' => '2018-12-06 10:50:43',
				'updated_at' => '2018-12-06 10:50:43',

			],

		];
		foreach ($rows as $row) {
			\DB::table('Testimonys')->insert($row);
		}
	}
}