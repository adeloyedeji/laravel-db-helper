<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GalleryCategoriesTableSeeder extends Seeder
{
	public function run()
{
		$rows = [	
			[
				'id' => '1',
				'group' => 'pharmacy',
				'created_at' => '2018-12-11 10:03:53',
				'updated_at' => '2018-12-11 10:03:53',

			],

			[
				'id' => '2',
				'group' => 'medical laboratory',
				'created_at' => '2018-12-11 10:03:53',
				'updated_at' => '2018-12-11 10:03:53',

			],

			[
				'id' => '3',
				'group' => 'super market',
				'created_at' => '2018-12-11 10:04:14',
				'updated_at' => '2018-12-11 10:04:14',

			],

			[
				'id' => '4',
				'group' => 'staff',
				'created_at' => '2018-12-11 10:04:14',
				'updated_at' => '2018-12-11 10:04:14',

			],

		];
		foreach ($rows as $row) {
			\DB::table('GalleryCategories')->insert($row);
		}
	}
}