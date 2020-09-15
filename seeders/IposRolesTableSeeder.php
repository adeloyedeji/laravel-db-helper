<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IposRolesTableSeeder extends Seeder
{
	public function run()
{
		$rows = [	
			[
				'roles' => '3',
				'module_id' => 'customers',
				'id' => '12',

			],

			[
				'roles' => '3',
				'module_id' => 'items',
				'id' => '13',

			],

			[
				'roles' => '3',
				'module_id' => 'suppliers',
				'id' => '14',

			],

			[
				'roles' => '3',
				'module_id' => 'reports',
				'id' => '15',

			],

			[
				'roles' => '3',
				'module_id' => 'receivings',
				'id' => '16',

			],

			[
				'roles' => '3',
				'module_id' => 'sales',
				'id' => '17',

			],

			[
				'roles' => '3',
				'module_id' => 'employees',
				'id' => '18',

			],

			[
				'roles' => '3',
				'module_id' => 'messages',
				'id' => '19',

			],

			[
				'roles' => '3',
				'module_id' => 'config',
				'id' => '20',

			],

			[
				'roles' => '3',
				'module_id' => 'laboratory',
				'id' => '21',

			],

			[
				'roles' => '3',
				'module_id' => 'account',
				'id' => '22',

			],

			[
				'roles' => '4',
				'module_id' => 'items',
				'id' => '23',

			],

			[
				'roles' => '4',
				'module_id' => 'suppliers',
				'id' => '24',

			],

			[
				'roles' => '4',
				'module_id' => 'receivings',
				'id' => '25',

			],

			[
				'roles' => '5',
				'module_id' => 'customers',
				'id' => '26',

			],

			[
				'roles' => '5',
				'module_id' => 'sales',
				'id' => '27',

			],

			[
				'roles' => '6',
				'module_id' => 'account',
				'id' => '28',

			],

			[
				'roles' => '7',
				'module_id' => 'customers',
				'id' => '29',

			],

			[
				'roles' => '7',
				'module_id' => 'laboratory',
				'id' => '30',

			],

			[
				'roles' => '7',
				'module_id' => 'customer_add',
				'id' => '31',

			],

			[
				'roles' => '5',
				'module_id' => 'customer_add',
				'id' => '32',

			],

			[
				'roles' => '3',
				'module_id' => 'customer_add',
				'id' => '33',

			],

			[
				'roles' => '8',
				'module_id' => 'customers',
				'id' => '34',

			],

			[
				'roles' => '11',
				'module_id' => 'customers',
				'id' => '35',

			],

			[
				'roles' => '11',
				'module_id' => 'items',
				'id' => '36',

			],

			[
				'roles' => '11',
				'module_id' => 'sales',
				'id' => '37',

			],

			[
				'roles' => '10',
				'module_id' => 'reports',
				'id' => '38',

			],

			[
				'roles' => '10',
				'module_id' => 'items',
				'id' => '39',

			],

			[
				'roles' => '5',
				'module_id' => 'employees',
				'id' => '40',

			],

			[
				'roles' => '4',
				'module_id' => 'employees',
				'id' => '41',

			],

			[
				'roles' => '12',
				'module_id' => 'account',
				'id' => '42',

			],

			[
				'roles' => '12',
				'module_id' => 'reports_sales',
				'id' => '45',

			],

			[
				'roles' => '12',
				'module_id' => 'reports',
				'id' => '44',

			],

			[
				'roles' => '13',
				'module_id' => 'reports',
				'id' => '46',

			],

			[
				'roles' => '13',
				'module_id' => 'items',
				'id' => '47',

			],

			[
				'roles' => '14',
				'module_id' => 'customers',
				'id' => '48',

			],

			[
				'roles' => '14',
				'module_id' => 'items',
				'id' => '49',

			],

			[
				'roles' => '14',
				'module_id' => 'suppliers',
				'id' => '50',

			],

			[
				'roles' => '14',
				'module_id' => 'receivings',
				'id' => '51',

			],

			[
				'roles' => '14',
				'module_id' => 'sales',
				'id' => '52',

			],

			[
				'roles' => '15',
				'module_id' => 'item_kits',
				'id' => '53',

			],

		];
		foreach ($rows as $row) {
			\DB::table('IposRoles')->insert($row);
		}
	}
}