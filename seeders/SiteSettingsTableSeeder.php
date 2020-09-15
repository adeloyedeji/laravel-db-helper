<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SiteSettingsTableSeeder extends Seeder
{
	public function run()
{
		$rows = [	
			[
				'id' => '1',
				'hotline' => '08147068805',
				'site_name' => 'Tonia Pharmacy',
				'site_email' => 'hello@toniapharmacy.com',
				'site_address' => '37 Julius Nyerere Cres, Asokoro, Abuja',
				'facebook' => '',
				'twitter' => '',
				'google' => '',
				'pinterest' => '',
				'instagram' => '',
				'youtube' => '',
				'logo' => 'logos/Logo1542969093.png',
				'ph_prepaid_markup' => '100',
				'ph_postpaid_markup' => '0',
				'ph_prepaid_discount' => '2',
				'ph_postpaid_discount' => '0',
				'hmo_prepaid_markup' => '0',
				'hmo_postpaid_markup' => '0',
				'hmo_prepaid_discount' => '0',
				'hmo_postpaid_discount' => '0',
				'sms_charges' => '40.00',
				'created_at' => '2018-11-23 05:48:27',
				'updated_at' => '2020-04-28 13:21:45',

			],

		];
		foreach ($rows as $row) {
			DB::table('SiteSettings')->insert($row);
		}
	}
}