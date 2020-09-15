<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IposMigrationsTableSeeder extends Seeder
{
	public function run()
{
		$rows = [	
			[
				'version' => '0',

			],

		];
		foreach ($rows as $row) {
			DB::table('IposMigrations')->insert($row);
		}
	}
}