<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PartnerHospitalsTableSeeder extends Seeder
{
	public function run()
{
		$rows = [	
			[
				'id' => '1',
				'user_id' => '1',
				'image' => 'http://localhost/toniapharmacy/public/docs/Advertise-with-Us.png',
				'image_path' => '',
				'organization_phone' => '08183780409',
				'organization_name' => 'Christopher Okokon Ntuk',
				'cac_reg_no' => '72b2u3bi',
				'organization_country' => 'Nigeria',
				'organization_state' => 'Akwa ibom',
				'organization_address' => '6 School road, off Itu road, Uyo, Donatus street, Off RCC Road, Benin-Agbor Road, Benin City, Edo State',
				'type' => 'prepaid',
				'markup' => '500',
				'status' => '1',
				'api' => '',
				'created_at' => '2020-02-25 12:39:55',
				'updated_at' => '2020-04-21 12:09:30',

			],

		];
		foreach ($rows as $row) {
			\DB::table('PartnerHospitals')->insert($row);
		}
	}
}