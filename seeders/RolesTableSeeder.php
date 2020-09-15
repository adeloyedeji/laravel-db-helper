<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
	public function run()
{
		$rows = [	
			[
				'id' => '1',
				'title' => 'Super Admin',
				'description' => '',
				'user_id' => '0',
				'created_at' => '2018-09-13 09:44:11',
				'updated_at' => '2018-09-13 09:44:11',

			],

			[
				'id' => '10',
				'title' => 'Delivery',
				'description' => 'Delivery personnel assigned to us',
				'user_id' => '0',
				'created_at' => '2020-04-22 10:53:39',
				'updated_at' => '2020-04-22 10:53:39',

			],

		];
		foreach ($rows as $row) {
			DB::table('Roles')->insert($row);
		}
	}
}