<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IposLaboratorySubgroupTableSeeder extends Seeder
{
	public function run()
{
		$rows = [	
			[
				'lab_subgroup_id' => '4',
				'lab_subgroup_name' => 'Liver Function Test',
				'deleted' => '0',

			],

			[
				'lab_subgroup_id' => '5',
				'lab_subgroup_name' => 'Liver Function Test',
				'deleted' => '0',

			],

			[
				'lab_subgroup_id' => '6',
				'lab_subgroup_name' => 'Renal Function Test',
				'deleted' => '0',

			],

			[
				'lab_subgroup_id' => '7',
				'lab_subgroup_name' => 'Lipid Profile Test',
				'deleted' => '0',

			],

			[
				'lab_subgroup_id' => '8',
				'lab_subgroup_name' => 'Diabetes',
				'deleted' => '0',

			],

			[
				'lab_subgroup_id' => '9',
				'lab_subgroup_name' => 'CSF Chemistry ',
				'deleted' => '0',

			],

			[
				'lab_subgroup_id' => '10',
				'lab_subgroup_name' => 'Cardiac',
				'deleted' => '0',

			],

			[
				'lab_subgroup_id' => '11',
				'lab_subgroup_name' => 'Endocrine',
				'deleted' => '0',

			],

			[
				'lab_subgroup_id' => '12',
				'lab_subgroup_name' => 'Endocrine Thyroid',
				'deleted' => '0',

			],

			[
				'lab_subgroup_id' => '13',
				'lab_subgroup_name' => 'Other Hormones',
				'deleted' => '0',

			],

			[
				'lab_subgroup_id' => '14',
				'lab_subgroup_name' => 'Tumour Makers',
				'deleted' => '0',

			],

			[
				'lab_subgroup_id' => '15',
				'lab_subgroup_name' => 'Drug Screen',
				'deleted' => '0',

			],

			[
				'lab_subgroup_id' => '16',
				'lab_subgroup_name' => 'Microbiology',
				'deleted' => '0',

			],

			[
				'lab_subgroup_id' => '17',
				'lab_subgroup_name' => 'Full Blood Count',
				'deleted' => '0',

			],

			[
				'lab_subgroup_id' => '18',
				'lab_subgroup_name' => 'Coombs Test',
				'deleted' => '0',

			],

			[
				'lab_subgroup_id' => '19',
				'lab_subgroup_name' => 'Blood Group and Genotype',
				'deleted' => '0',

			],

			[
				'lab_subgroup_id' => '20',
				'lab_subgroup_name' => 'Clotting Profile',
				'deleted' => '0',

			],

			[
				'lab_subgroup_id' => '21',
				'lab_subgroup_name' => 'Serology',
				'deleted' => '0',

			],

			[
				'lab_subgroup_id' => '22',
				'lab_subgroup_name' => 'Quantitative Test',
				'deleted' => '0',

			],

			[
				'lab_subgroup_id' => '23',
				'lab_subgroup_name' => 'Malaria Parasite',
				'deleted' => '0',

			],

			[
				'lab_subgroup_id' => '24',
				'lab_subgroup_name' => 'Inflamation/Immune',
				'deleted' => '0',

			],

			[
				'lab_subgroup_id' => '25',
				'lab_subgroup_name' => 'Endocrine Reproductive',
				'deleted' => '0',

			],

			[
				'lab_subgroup_id' => '26',
				'lab_subgroup_name' => 'Other Endocrine',
				'deleted' => '0',

			],

			[
				'lab_subgroup_id' => '27',
				'lab_subgroup_name' => 'Auto Immune',
				'deleted' => '0',

			],

			[
				'lab_subgroup_id' => '28',
				'lab_subgroup_name' => 'Infective',
				'deleted' => '0',

			],

			[
				'lab_subgroup_id' => '29',
				'lab_subgroup_name' => 'Hepatitis Tests',
				'deleted' => '0',

			],

			[
				'lab_subgroup_id' => '30',
				'lab_subgroup_name' => 'Heamatology',
				'deleted' => '0',

			],

			[
				'lab_subgroup_id' => '31',
				'lab_subgroup_name' => 'Clotting Profile',
				'deleted' => '0',

			],

			[
				'lab_subgroup_id' => '32',
				'lab_subgroup_name' => 'Allergy',
				'deleted' => '0',

			],

		];
		foreach ($rows as $row) {
			DB::table('IposLaboratorySubgroup')->insert($row);
		}
	}
}