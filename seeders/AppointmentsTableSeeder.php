<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AppointmentsTableSeeder extends Seeder
{
	public function run()
{
		$rows = [	
			[
				'id' => '1',
				'name' => 'chucks',
				'message' => 'kjhgfhjkl;',
				'appointment_time' => '01:00:00',
				'appointment_date' => '2019-01-01',
				'department' => 'Medical Laboratory',
				'phone' => '08132364217',
				'created_at' => '2019-01-18 14:47:32',
				'updated_at' => '2019-01-18 14:47:32',

			],

			[
				'id' => '2',
				'name' => 'ikeri ebenezer',
				'message' => 'gfdsdfghjk',
				'appointment_time' => '01:00:00',
				'appointment_date' => '2019-01-01',
				'department' => 'Pharmacy',
				'phone' => '08132364215',
				'created_at' => '2019-01-22 08:51:33',
				'updated_at' => '2019-01-22 08:51:33',

			],

		];
		foreach ($rows as $row) {
			\DB::table('Appointments')->insert($row);
		}
	}
}