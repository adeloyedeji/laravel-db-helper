<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IposStockLocationsTableSeeder extends Seeder
{
	public function run()
{
		$rows = [	
			[
				'location_id' => '1',
				'location_name' => 'Tonia Medical Laboratory',
				'location_address' => 'The Capital Hub, Suit 02 Along Banex/Next Ahmadu Bello Express way, Mabushi Abuja.',
				'location_number' => '09099595221',
				'location_email' => '',
				'deleted' => '0',

			],

			[
				'location_id' => '2',
				'location_name' => 'Tonia Pharmacy Maitama Branch',
				'location_address' => 'Landmark Plaza Suit 02, Opp Zenith Bank, IBB Way Maitama Abuja.',
				'location_number' => '09099478008',
				'location_email' => '',
				'deleted' => '0',

			],

			[
				'location_id' => '3',
				'location_name' => 'Tonia Pharmacy Maitama Warehouse',
				'location_address' => 'Landmark Plaza Suit 02, Opp Zenith Bank, IBB Way Maitama Abuja.',
				'location_number' => '09099478009',
				'location_email' => '',
				'deleted' => '0',

			],

			[
				'location_id' => '4',
				'location_name' => 'Tonia Pharmacy Capital Hub',
				'location_address' => 'The Capital Hub, Suit 02 Along Banex/Next Ahmadu Bello Express way, Mabushi Abuja.',
				'location_number' => '09099595221',
				'location_email' => '',
				'deleted' => '0',

			],

			[
				'location_id' => '5',
				'location_name' => 'Tonia Pharmacy Wuse Branch',
				'location_address' => 'Beside Mr Biggs/Dabras Hotel Opp Blue World Plaza, Aminu Kano Crescent Wuse 2 Abuja.',
				'location_number' => '09099478007',
				'location_email' => '',
				'deleted' => '0',

			],

			[
				'location_id' => '6',
				'location_name' => 'Tonia Pharmacy Garki Branch',
				'location_address' => 'Tswanya Center Suit A8, Opp NIPOST HQ, Muhammadu Buhari Way Garki 2, Abuja.',
				'location_number' => '09099478000',
				'location_email' => '',
				'deleted' => '0',

			],

			[
				'location_id' => '7',
				'location_name' => 'Tonia Pharmacy Grandsquare Abuja',
				'location_address' => 'Grandsqure Mall, 270 Mohammadu Buhari Way, Central Business District Abuja.',
				'location_number' => '09097486558',
				'location_email' => '',
				'deleted' => '0',

			],

			[
				'location_id' => '8',
				'location_name' => 'Tonia Pharmacy Grandsqure Kano Branch',
				'location_address' => 'Grandsqure Mall, 5 Bompai Road, Kano',
				'location_number' => '09096000074',
				'location_email' => '',
				'deleted' => '0',

			],

			[
				'location_id' => '9',
				'location_name' => 'Tonia Pharmacy Grandsqure Lagos Branch',
				'location_address' => 'Grandsqure Mall, 8 Adetokunbo Ademola Street, Victoria Island Lagos.',
				'location_number' => '09096000082',
				'location_email' => '',
				'deleted' => '0',

			],

			[
				'location_id' => '10',
				'location_name' => 'Tonia Pharmacy Zone 2 Wuse Branch',
				'location_address' => 'No. 1/3 Mambilo Street Zone 2 Wuse District Abuja.',
				'location_number' => '',
				'location_email' => '',
				'deleted' => '0',

			],

			[
				'location_id' => '11',
				'location_name' => 'Online',
				'location_address' => '',
				'location_number' => '',
				'location_email' => '',
				'deleted' => '0',

			],

		];
		foreach ($rows as $row) {
			DB::table('IposStockLocations')->insert($row);
		}
	}
}