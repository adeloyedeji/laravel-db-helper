<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IposPermissionsTableSeeder extends Seeder
{
	public function run()
{
		$rows = [	
			[
				'permission_id' => 'account',
				'module_id' => 'account',
				'location_id' => '',

			],

			[
				'permission_id' => 'config',
				'module_id' => 'config',
				'location_id' => '',

			],

			[
				'permission_id' => 'customers',
				'module_id' => 'customers',
				'location_id' => '',

			],

			[
				'permission_id' => 'customer_add',
				'module_id' => 'customers',
				'location_id' => '',

			],

			[
				'permission_id' => 'employees',
				'module_id' => 'employees',
				'location_id' => '',

			],

			[
				'permission_id' => 'giftcards',
				'module_id' => 'giftcards',
				'location_id' => '',

			],

			[
				'permission_id' => 'items',
				'module_id' => 'items',
				'location_id' => '',

			],

			[
				'permission_id' => 'items_Add Items',
				'module_id' => 'items',
				'location_id' => '1',

			],

			[
				'permission_id' => 'items_Capital Hub',
				'module_id' => 'items',
				'location_id' => '2',

			],

			[
				'permission_id' => 'items_Delete Item',
				'module_id' => 'items',
				'location_id' => '',

			],

			[
				'permission_id' => 'items_Laboratory',
				'module_id' => 'items',
				'location_id' => '1',

			],

			[
				'permission_id' => 'item_kits',
				'module_id' => 'item_kits',
				'location_id' => '',

			],

			[
				'permission_id' => 'laboratory',
				'module_id' => 'laboratory',
				'location_id' => '',

			],

			[
				'permission_id' => 'laboratory_Add Test',
				'module_id' => 'laboratory',
				'location_id' => '',

			],

			[
				'permission_id' => 'laboratory_Delete Test',
				'module_id' => 'laboratory',
				'location_id' => '',

			],

			[
				'permission_id' => 'messages',
				'module_id' => 'messages',
				'location_id' => '',

			],

			[
				'permission_id' => 'migrate',
				'module_id' => 'migrate',
				'location_id' => '',

			],

			[
				'permission_id' => 'receivings',
				'module_id' => 'receivings',
				'location_id' => '',

			],

			[
				'permission_id' => 'receivings_Capital Hub',
				'module_id' => 'receivings',
				'location_id' => '2',

			],

			[
				'permission_id' => 'receivings_Laboratory',
				'module_id' => 'receivings',
				'location_id' => '1',

			],

			[
				'permission_id' => 'reports',
				'module_id' => 'reports',
				'location_id' => '',

			],

			[
				'permission_id' => 'reports_categories',
				'module_id' => 'reports',
				'location_id' => '',

			],

			[
				'permission_id' => 'reports_customers',
				'module_id' => 'reports',
				'location_id' => '',

			],

			[
				'permission_id' => 'reports_discounts',
				'module_id' => 'reports',
				'location_id' => '',

			],

			[
				'permission_id' => 'reports_employees',
				'module_id' => 'reports',
				'location_id' => '',

			],

			[
				'permission_id' => 'reports_expiry',
				'module_id' => 'reports',
				'location_id' => '',

			],

			[
				'permission_id' => 'reports_inventory',
				'module_id' => 'reports',
				'location_id' => '',

			],

			[
				'permission_id' => 'reports_items',
				'module_id' => 'reports',
				'location_id' => '',

			],

			[
				'permission_id' => 'reports_payments',
				'module_id' => 'reports',
				'location_id' => '',

			],

			[
				'permission_id' => 'reports_receivings',
				'module_id' => 'reports',
				'location_id' => '',

			],

			[
				'permission_id' => 'reports_sales',
				'module_id' => 'reports',
				'location_id' => '',

			],

			[
				'permission_id' => 'reports_suppliers',
				'module_id' => 'reports',
				'location_id' => '',

			],

			[
				'permission_id' => 'reports_taxes',
				'module_id' => 'reports',
				'location_id' => '',

			],

			[
				'permission_id' => 'sales',
				'module_id' => 'sales',
				'location_id' => '',

			],

			[
				'permission_id' => 'sales_Capital Hub',
				'module_id' => 'sales',
				'location_id' => '2',

			],

			[
				'permission_id' => 'sales_Laboratory',
				'module_id' => 'sales',
				'location_id' => '1',

			],

			[
				'permission_id' => 'Settings',
				'module_id' => 'Settings',
				'location_id' => '',

			],

			[
				'permission_id' => 'suppliers',
				'module_id' => 'suppliers',
				'location_id' => '',

			],

			[
				'permission_id' => 'taxes',
				'module_id' => 'taxes',
				'location_id' => '',

			],

		];
		foreach ($rows as $row) {
			\DB::table('IposPermissions')->insert($row);
		}
	}
}