<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IposRoleIdTableSeeder extends Seeder
{
	public function run()
{
		$rows = [	
			[
				'id' => '3',
				'role' => 'Super Admin',

			],

			[
				'id' => '4',
				'role' => 'Inventory Officer',

			],

			[
				'id' => '5',
				'role' => 'Sales Officer',

			],

			[
				'id' => '6',
				'role' => 'Laboratory Accountant',

			],

			[
				'id' => '7',
				'role' => 'Laboratory Receptionist',

			],

			[
				'id' => '9',
				'role' => 'Laboratory Scientist',

			],

			[
				'id' => '10',
				'role' => 'Chief Executive Officer',

			],

			[
				'id' => '11',
				'role' => 'Test Role',

			],

			[
				'id' => '12',
				'role' => 'Accountant',

			],

			[
				'id' => '13',
				'role' => 'Manager',

			],

			[
				'id' => '14',
				'role' => 'Branch Manager',

			],

			[
				'id' => '15',
				'role' => 'Pharmacist',

			],

		];
		foreach ($rows as $row) {
			\DB::table('IposRoleId')->insert($row);
		}
	}
}