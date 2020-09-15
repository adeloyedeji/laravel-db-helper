<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IposPillReminderTableSeeder extends Seeder
{
	public function run()
{
		$rows = [	
			[
				'reminder_id' => '1',
				'reminder_name' => '1 hour',
				'reminder_amount' => '1000.00',
				'reminder_value' => '1',
				'deleted' => '0',

			],

			[
				'reminder_id' => '2',
				'reminder_name' => '2 hour',
				'reminder_amount' => '2000.00',
				'reminder_value' => '2',
				'deleted' => '0',

			],

			[
				'reminder_id' => '3',
				'reminder_name' => '3 hours',
				'reminder_amount' => '3500.00',
				'reminder_value' => '3',
				'deleted' => '0',

			],

			[
				'reminder_id' => '4',
				'reminder_name' => '4 hours',
				'reminder_amount' => '4500.00',
				'reminder_value' => '4',
				'deleted' => '0',

			],

			[
				'reminder_id' => '5',
				'reminder_name' => '5 hours',
				'reminder_amount' => '5200.00',
				'reminder_value' => '5',
				'deleted' => '0',

			],

			[
				'reminder_id' => '6',
				'reminder_name' => '6 hours',
				'reminder_amount' => '6000.00',
				'reminder_value' => '6',
				'deleted' => '0',

			],

			[
				'reminder_id' => '7',
				'reminder_name' => '7 hours',
				'reminder_amount' => '7000.00',
				'reminder_value' => '7',
				'deleted' => '0',

			],

			[
				'reminder_id' => '8',
				'reminder_name' => '8 hours',
				'reminder_amount' => '8000.00',
				'reminder_value' => '8',
				'deleted' => '0',

			],

			[
				'reminder_id' => '9',
				'reminder_name' => '9 hours',
				'reminder_amount' => '9000.00',
				'reminder_value' => '9',
				'deleted' => '0',

			],

			[
				'reminder_id' => '10',
				'reminder_name' => '10 hours',
				'reminder_amount' => '10000.00',
				'reminder_value' => '10',
				'deleted' => '0',

			],

			[
				'reminder_id' => '11',
				'reminder_name' => '11 hours',
				'reminder_amount' => '11000.00',
				'reminder_value' => '11',
				'deleted' => '0',

			],

			[
				'reminder_id' => '12',
				'reminder_name' => '12 hours',
				'reminder_amount' => '12000.00',
				'reminder_value' => '12',
				'deleted' => '0',

			],

		];
		foreach ($rows as $row) {
			\DB::table('IposPillReminder')->insert($row);
		}
	}
}