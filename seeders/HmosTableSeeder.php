<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HmosTableSeeder extends Seeder
{
	public function run()
{
		$rows = [	
			[
				'id' => '1',
				'user_id' => '2',
				'name' => '',
				'email' => 'engchris95@gmail.com',
				'phone' => '08183780409',
				'address' => '6 School road, off Itu road, Uyo',
				'password' => '',
				'type' => 'prepaid',
				'remember_token' => '',
				'created_at' => '2020-02-25 14:16:11',
				'updated_at' => '2020-03-18 15:08:14',

			],

			[
				'id' => '2',
				'user_id' => '71',
				'name' => 'Jude',
				'email' => 'edds@gmail.com',
				'phone' => '08059297073',
				'address' => 'Garki',
				'password' => '$2y$10$vST.10s7gClEueEGAcdpuuP7VBuiSus3ruZP9zuF0d/K6WRwPnFZC',
				'type' => 'prepaid',
				'remember_token' => '',
				'created_at' => '',
				'updated_at' => '',

			],

			[
				'id' => '3',
				'user_id' => '72',
				'name' => 'Eddy john',
				'email' => 'eddi@gmail.com',
				'phone' => '09059297073',
				'address' => 'addies house',
				'password' => '$2y$10$j/mihsgs7CXqsk..4D9bY.kvON6bz22gheNgJZLSGKW5BpLCrU/5y',
				'type' => 'prepaid',
				'remember_token' => '',
				'created_at' => '',
				'updated_at' => '',

			],

		];
		foreach ($rows as $row) {
			DB::table('Hmos')->insert($row);
		}
	}
}