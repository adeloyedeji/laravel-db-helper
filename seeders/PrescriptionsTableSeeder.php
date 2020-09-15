<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PrescriptionsTableSeeder extends Seeder
{
	public function run()
{
		$rows = [	
			[
				'id' => '1',
				'user_id' => '2',
				'name' => 'Christopher Okokon Ntuk',
				'id_no' => '5648894038DGF',
				'phone' => '8183780409',
				'email' => 'engchris95@gmail.com',
				'clinic_address' => '6 School road, off Itu road, Uyo
Donatus street, Off RCC Road, Benin-Agbor Road, Benin City, Edo State',
				'age' => '23',
				'description' => '',
				'response' => 'af',
				'amount' => '4150',
				'reference' => 'niQCKrsbDT',
				'created_at' => '2020-05-14 10:09:48',
				'updated_at' => '2020-05-14 10:11:08',
				'prescriber_name' => 'Dr. Rufus Edoh',
				'prescriber_phone' => '08183780409',
				'clinic' => 'Sacred Heart',
				'status' => '2',
				'payment_status' => 'unpaid',
				'file' => 'http://localhost/toniapharmacy/public/img/prescriptions/christopher-okokon-ntuk1589450988.png',
				'type' => 'prepaid',
				'hmo_name' => '',
				'hmo_phone' => '',
				'authorization_code' => '',
				'cheque_id' => '',
				'cheque_description' => '',
				'cheque_amount' => '',
				'gender' => 'male',

			],

			[
				'id' => '2',
				'user_id' => '2',
				'name' => 'Christopher Okokon Ntuk',
				'id_no' => '783928FGDUI',
				'phone' => '8183780409',
				'email' => 'engchris95@gmail.com',
				'clinic_address' => '6 School road, off Itu road, Uyo
Donatus street, Off RCC Road, Benin-Agbor Road, Benin City, Edo State',
				'age' => '42',
				'description' => '',
				'response' => 'd',
				'amount' => '0',
				'reference' => '7Fwndkf4pH',
				'created_at' => '2020-05-14 10:16:31',
				'updated_at' => '2020-05-14 10:16:31',
				'prescriber_name' => 'Dr. Rufus Edoh',
				'prescriber_phone' => '09057041663',
				'clinic' => 'St. Theresa Reunion',
				'status' => '1',
				'payment_status' => 'unpaid',
				'file' => 'http://localhost/toniapharmacy/public/img/prescriptions/christopher-okokon-ntuk1589451391.png',
				'type' => 'prepaid',
				'hmo_name' => '',
				'hmo_phone' => '',
				'authorization_code' => '',
				'cheque_id' => '',
				'cheque_description' => '',
				'cheque_amount' => '',
				'gender' => 'female',

			],

		];
		foreach ($rows as $row) {
			\DB::table('Prescriptions')->insert($row);
		}
	}
}