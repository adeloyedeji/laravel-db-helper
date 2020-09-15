<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
	public function run()
{
		$rows = [	
			[
				'id' => '1',
				'name' => 'stevo',
				'email' => 'j.bosco@gmail.com',
				'job_title' => '',
				'password' => '$2y$10$0CPea32DBxs/24MUG7ySCumDLuOkmoHjRHUURA2i8DNKEit1m30ie',
				'role_id' => '1',
				'status' => '1',
				'remember_token' => 'pRjvEFhKHHtkd1K9n8Ua4qENK6yxLxGNBS1DNU1ikXBJhHk7ap3UQetAVmZT',
				'company_name' => '',
				'company_email' => '',
				'company_phone' => '',
				'phone' => '',
				'created_at' => '',
				'updated_at' => '2020-03-02 20:52:45',

			],

			[
				'id' => '3',
				'name' => 'Jude Williams',
				'email' => 'j.jude@gmail.com',
				'job_title' => '',
				'password' => '$2y$10$Udoxo6BZHyTGE1fPFEeUzeACTgGWASkJB57LizbOK4H4sr28as./q',
				'role_id' => '10',
				'status' => '1',
				'remember_token' => 'rbWyAzltwCApFKBClT7vsh8R5RSBmyecp3C2l13mBHynAvKZGfQwrb33OeuH',
				'company_name' => 'Flugo Delivery',
				'company_email' => 'info@flugo.com',
				'company_phone' => '08183780409',
				'phone' => '08183780409',
				'created_at' => '2020-04-22 10:54:39',
				'updated_at' => '2020-05-06 15:13:08',

			],

		];
		foreach ($rows as $row) {
			DB::table('Admins')->insert($row);
		}
	}
}