<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MigrationsTableSeeder extends Seeder
{
	public function run()
{
		$rows = [	
			[
				'id' => '3',
				'migration' => '2014_10_12_000000_create_users_table',
				'batch' => '1',

			],

			[
				'id' => '4',
				'migration' => '2014_10_12_100000_create_password_resets_table',
				'batch' => '1',

			],

			[
				'id' => '5',
				'migration' => '2017_12_20_161314_create_orders_table',
				'batch' => '2',

			],

			[
				'id' => '6',
				'migration' => '2018_03_26_130604_create_admins_table',
				'batch' => '3',

			],

			[
				'id' => '7',
				'migration' => '2018_11_27_111115_create_pharmacist_table',
				'batch' => '4',

			],

			[
				'id' => '8',
				'migration' => '2018_11_27_130832_create_price_table',
				'batch' => '5',

			],

			[
				'id' => '9',
				'migration' => '2018_11_30_094339_create_faq_table',
				'batch' => '6',

			],

			[
				'id' => '10',
				'migration' => '2018_12_05_101328_create_choose_table',
				'batch' => '7',

			],

			[
				'id' => '11',
				'migration' => '2018_12_05_140621_create_generaldetail_table',
				'batch' => '8',

			],

			[
				'id' => '12',
				'migration' => '2018_12_06_110829_create_testimony_table',
				'batch' => '9',

			],

			[
				'id' => '13',
				'migration' => '2018_12_11_085344_create_galleries_table',
				'batch' => '10',

			],

			[
				'id' => '14',
				'migration' => '2018_12_11_091743_create_gallery_categories_table',
				'batch' => '10',

			],

			[
				'id' => '15',
				'migration' => '2019_01_28_104341_create_pillreminder_table',
				'batch' => '11',

			],

			[
				'id' => '16',
				'migration' => '2019_01_28_113945_create_pillreminders_table',
				'batch' => '12',

			],

			[
				'id' => '17',
				'migration' => '2019_01_30_101906_create_newsletters_table',
				'batch' => '13',

			],

			[
				'id' => '18',
				'migration' => '2019_02_07_140109_create_footer_locations_table',
				'batch' => '14',

			],

			[
				'id' => '19',
				'migration' => '2019_02_08_001940_create_partnerhospitals_table',
				'batch' => '15',

			],

			[
				'id' => '20',
				'migration' => '2019_02_08_113919_create_invitations_table',
				'batch' => '16',

			],

			[
				'id' => '21',
				'migration' => '2019_02_19_160206_create_partner_hospitals_table',
				'batch' => '17',

			],

			[
				'id' => '22',
				'migration' => '2019_03_10_181154_create_ipos_categories_table',
				'batch' => '18',

			],

			[
				'id' => '23',
				'migration' => '2019_07_08_162610_create_jobs_table',
				'batch' => '19',

			],

			[
				'id' => '24',
				'migration' => '2019_09_18_155811_create_table_hmos',
				'batch' => '19',

			],

			[
				'id' => '25',
				'migration' => '2019_09_18_222237_create_table_beneficaries',
				'batch' => '20',

			],

		];
		foreach ($rows as $row) {
			\DB::table('Migrations')->insert($row);
		}
	}
}