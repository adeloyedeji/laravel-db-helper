<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PillremindersTableSeeder extends Seeder
{
	public function run()
{
		$rows = [	
			[
				'id' => '8',
				'patient_fname' => 'felix',
				'patient_lname' => 'adigin',
				'phone' => '08132364217',
				'email' => 'felix55@gmail.com',
				'medicine' => 'piriton',
				'dose' => '4',
				'start_date' => '2019-07-08',
				'end_date' => '2019-07-21',
				'time' => '12:00:00',
				'how_many_times_a_day' => '0',
				'units' => 'teaspoon',
				'total' => '',
				'payment_method' => 'CASH',
				'reminder_method' => 'SMS',
				'expiration_date' => '',
				'expiration_reminder' => 'NO',
				'reminder_times' => '',
				'subtotal' => '',
				'created_at' => '2019-07-08 22:52:04',
				'updated_at' => '2019-07-08 22:52:04',

			],

			[
				'id' => '9',
				'patient_fname' => 'ikeri',
				'patient_lname' => 'eben',
				'phone' => '08132364215',
				'email' => 'ikbenezer@gmail.com',
				'medicine' => 'durex condom',
				'dose' => '2',
				'start_date' => '2019-07-09',
				'end_date' => '2019-07-15',
				'time' => '00:00:00',
				'how_many_times_a_day' => '3',
				'units' => 'Pieces',
				'total' => '',
				'payment_method' => 'BANK TRANSFER',
				'reminder_method' => 'EMAIL',
				'expiration_date' => '',
				'expiration_reminder' => 'NO',
				'reminder_times' => '',
				'subtotal' => '',
				'created_at' => '2019-07-09 12:41:36',
				'updated_at' => '2019-07-09 12:41:36',

			],

			[
				'id' => '10',
				'patient_fname' => 'ikeri',
				'patient_lname' => 'odinaka',
				'phone' => '08132364211',
				'email' => 'odinaka@gmail.com',
				'medicine' => 'ceptrine',
				'dose' => '4',
				'start_date' => '2019-07-09',
				'end_date' => '2019-07-15',
				'time' => 'a:3:{i:0;s:5:"07:00";i:1;s:5:"12:00";i:2;s:5:"18:00";}',
				'how_many_times_a_day' => '3',
				'units' => 'Pills',
				'total' => '',
				'payment_method' => 'CASH',
				'reminder_method' => 'SMS',
				'expiration_date' => '',
				'expiration_reminder' => 'NO',
				'reminder_times' => '',
				'subtotal' => '',
				'created_at' => '2019-07-09 12:46:09',
				'updated_at' => '2019-07-09 12:46:09',

			],

			[
				'id' => '11',
				'patient_fname' => 'ikeri',
				'patient_lname' => 'eben',
				'phone' => '08132364215',
				'email' => 'ike@gmail.com',
				'medicine' => 'panadol',
				'dose' => '1',
				'start_date' => '2019-08-01',
				'end_date' => '2019-08-05',
				'time' => 'a:1:{i:0;s:5:"13:00";}',
				'how_many_times_a_day' => '1',
				'units' => 'Pills',
				'total' => '',
				'payment_method' => 'CASH',
				'reminder_method' => 'EMAIL',
				'expiration_date' => '',
				'expiration_reminder' => 'NO',
				'reminder_times' => '',
				'subtotal' => '',
				'created_at' => '2019-08-01 14:19:41',
				'updated_at' => '2019-08-01 14:19:41',

			],

		];
		foreach ($rows as $row) {
			DB::table('Pillreminders')->insert($row);
		}
	}
}