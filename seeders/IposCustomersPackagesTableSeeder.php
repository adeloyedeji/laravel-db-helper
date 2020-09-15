<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IposCustomersPackagesTableSeeder extends Seeder
{
	public function run()
{
		$rows = [	
			[
				'package_id' => '1',
				'package_name' => 'Default',
				'points_percent' => '0',
				'deleted' => '0',

			],

			[
				'package_id' => '2',
				'package_name' => 'Bronze',
				'points_percent' => '10',
				'deleted' => '0',

			],

			[
				'package_id' => '3',
				'package_name' => 'Silver',
				'points_percent' => '20',
				'deleted' => '0',

			],

			[
				'package_id' => '4',
				'package_name' => 'Gold',
				'points_percent' => '30',
				'deleted' => '0',

			],

			[
				'package_id' => '5',
				'package_name' => 'Premium',
				'points_percent' => '50',
				'deleted' => '0',

			],

		];
		foreach ($rows as $row) {
			DB::table('IposCustomersPackages')->insert($row);
		}
	}
}