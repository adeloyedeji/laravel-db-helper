<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
	public function run()
{
		$rows = [	
			[
				'id' => '1',
				'role_id' => '1',
				'products_view' => 'yes',
				'products_edit' => 'yes',
				'products_delete' => 'no',
				'orders_view' => 'yes',
				'orders_edit' => 'yes',
				'orders_delete' => 'no',
				'explore_edit' => 'yes',
				'user_management' => 'yes',
				'partnerhospital_view' => 'yes',
				'partnerhospital_edit' => 'yes',
				'partnerhospital_delete' => 'yes',
				'hmo_order_view' => 'yes',
				'hmo_order_edit' => 'yes',
				'hmo_order_delete' => 'yes',
				'hmo_settings_view' => 'yes',
				'hmo_settings_edit' => 'no',
				'hmo_settings_delete' => 'yes',
				'create_account' => 'yes',
				'site_settings' => 'yes',
				'report_view' => 'yes',
				'delivery' => 'no',
				'created_at' => '2018-09-13 11:12:12',
				'updated_at' => '2020-04-07 09:13:00',

			],

			[
				'id' => '8',
				'role_id' => '10',
				'products_view' => 'no',
				'products_edit' => 'no',
				'products_delete' => 'no',
				'orders_view' => 'no',
				'orders_edit' => 'no',
				'orders_delete' => 'no',
				'explore_edit' => 'no',
				'user_management' => 'no',
				'partnerhospital_view' => 'no',
				'partnerhospital_edit' => 'no',
				'partnerhospital_delete' => 'no',
				'hmo_order_view' => 'no',
				'hmo_order_edit' => 'no',
				'hmo_order_delete' => 'no',
				'hmo_settings_view' => 'no',
				'hmo_settings_edit' => 'no',
				'hmo_settings_delete' => 'no',
				'create_account' => 'no',
				'site_settings' => 'no',
				'report_view' => 'no',
				'delivery' => 'yes',
				'created_at' => '2020-04-22 10:53:39',
				'updated_at' => '2020-04-22 11:30:19',

			],

		];
		foreach ($rows as $row) {
			\DB::table('Permissions')->insert($row);
		}
	}
}