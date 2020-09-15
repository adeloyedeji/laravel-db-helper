<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FooterLocationsTableSeeder extends Seeder
{
	public function run()
{
		$rows = [	
			[
				'id' => '1',
				'location_header' => 'Wuse',
				'store_name' => 'The Capital Hub Suite 02,Gwarinpa Abuja Capital Hub

',
				'created_at' => '',
				'updated_at' => '',

			],

			[
				'id' => '2',
				'location_header' => 'Garki',
				'store_name' => 'Tswanya Center , Suite 8, 157/1518 , Mohammad Buhari Way, Opp Nipost Garki 2 Abuja.',
				'created_at' => '',
				'updated_at' => '',

			],

			[
				'id' => '3',
				'location_header' => 'Maitama',
				'store_name' => 'Suite 2 Landmark Plaza, IBB Way, Maitama (Next To FHA) Abuja',
				'created_at' => '',
				'updated_at' => '',

			],

			[
				'id' => '4',
				'location_header' => 'Wuse',
				'store_name' => 'The Capital Hub Suite 02,Gwarinpa Abuja Capital Hub

',
				'created_at' => '',
				'updated_at' => '',

			],

		];
		foreach ($rows as $row) {
			DB::table('FooterLocations')->insert($row);
		}
	}
}