<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IposModulesTableSeeder extends Seeder
{
	public function run()
{
		$rows = [	
			[
				'name_lang_key' => 'module_account',
				'desc_lang_key' => 'module_account_desc',
				'sort' => '140',
				'module_id' => 'account',
				'icon' => 'md md-tab',

			],

			[
				'name_lang_key' => 'module_config',
				'desc_lang_key' => 'module_config_desc',
				'sort' => '110',
				'module_id' => 'config',
				'icon' => 'md md-settings',

			],

			[
				'name_lang_key' => 'module_customers',
				'desc_lang_key' => 'module_customers_desc',
				'sort' => '10',
				'module_id' => 'customers',
				'icon' => 'fa fa-users',

			],

			[
				'name_lang_key' => 'module_employees',
				'desc_lang_key' => 'module_employees_desc',
				'sort' => '80',
				'module_id' => 'employees',
				'icon' => 'md md-account-box',

			],

			[
				'name_lang_key' => 'module_giftcards',
				'desc_lang_key' => 'module_giftcards_desc',
				'sort' => '90',
				'module_id' => 'giftcards',
				'icon' => 'md md-cake',

			],

			[
				'name_lang_key' => 'module_items',
				'desc_lang_key' => 'module_items_desc',
				'sort' => '20',
				'module_id' => 'items',
				'icon' => 'md md-add-shopping-cart',

			],

			[
				'name_lang_key' => 'module_item_kits',
				'desc_lang_key' => 'module_item_kits_desc',
				'sort' => '30',
				'module_id' => 'item_kits',
				'icon' => 'md md-toc',

			],

			[
				'name_lang_key' => 'module_laboratory',
				'desc_lang_key' => 'module_laboratory_desc',
				'sort' => '130',
				'module_id' => 'laboratory',
				'icon' => 'md md-colorize',

			],

			[
				'name_lang_key' => 'module_messages',
				'desc_lang_key' => 'module_messages_desc',
				'sort' => '100',
				'module_id' => 'messages',
				'icon' => 'md md-chat',

			],

			[
				'name_lang_key' => 'module_migrate',
				'desc_lang_key' => 'module_migrate_desc',
				'sort' => '120',
				'module_id' => 'migrate',
				'icon' => 'md md-timeline',

			],

			[
				'name_lang_key' => 'module_receivings',
				'desc_lang_key' => 'module_receivings_desc',
				'sort' => '60',
				'module_id' => 'receivings',
				'icon' => 'md md-swap-vert',

			],

			[
				'name_lang_key' => 'module_reports',
				'desc_lang_key' => 'module_reports_desc',
				'sort' => '50',
				'module_id' => 'reports',
				'icon' => 'md md-trending-up',

			],

			[
				'name_lang_key' => 'module_sales',
				'desc_lang_key' => 'module_sales_desc',
				'sort' => '70',
				'module_id' => 'sales',
				'icon' => 'md md-call-split',

			],

			[
				'name_lang_key' => 'module_suppliers',
				'desc_lang_key' => 'module_suppliers_desc',
				'sort' => '40',
				'module_id' => 'suppliers',
				'icon' => 'md md-plus-one',

			],

			[
				'name_lang_key' => 'module_taxes',
				'desc_lang_key' => 'module_taxes_desc',
				'sort' => '105',
				'module_id' => 'taxes',
				'icon' => 'md md-nature-people',

			],

		];
		foreach ($rows as $row) {
			\DB::table('IposModules')->insert($row);
		}
	}
}