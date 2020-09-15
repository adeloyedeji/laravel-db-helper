<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IposLaboratoryTestTableSeeder extends Seeder
{
	public function run()
{
		$rows = [	
			[
				'item_id' => '1',
				'test_code' => '301',
				'test_name' => 'Urea',
				'test_type' => 'Chemistry',
				'test_amount' => '1500.00',
				'test_subgroup' => 'Renal Function Test',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '17 - 43 mg/dL',

			],

			[
				'item_id' => '2',
				'test_code' => '302',
				'test_name' => 'Creatinine',
				'test_type' => 'Chemistry',
				'test_amount' => '2500.00',
				'test_subgroup' => 'Renal Function Test',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => 'Male: 62 – 115 µmol/L,   Female: 53 – 97 µmol/L',

			],

			[
				'item_id' => '3',
				'test_code' => '303',
				'test_name' => 'Sodium',
				'test_type' => 'Chemistry',
				'test_amount' => '1500.00',
				'test_subgroup' => 'Renal Function Test',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '135 - 145 mmol/L',

			],

			[
				'item_id' => '4',
				'test_code' => '304',
				'test_name' => 'Pottasium',
				'test_type' => 'Chemistry',
				'test_amount' => '1500.00',
				'test_subgroup' => 'Renal Function Test',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '3.5 - 5.5 mmol/L',

			],

			[
				'item_id' => '5',
				'test_code' => '305',
				'test_name' => 'Bicarbonate',
				'test_type' => 'Chemistry',
				'test_amount' => '1500.00',
				'test_subgroup' => 'Renal Function Test',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '21 - 28 mmol/L',

			],

			[
				'item_id' => '6',
				'test_code' => '306',
				'test_name' => 'Chloride',
				'test_type' => 'Chemistry',
				'test_amount' => '1500.00',
				'test_subgroup' => 'Renal Function Test',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '98 - 108 mmol/L',

			],

			[
				'item_id' => '7',
				'test_code' => '307',
				'test_name' => 'Urine Protein',
				'test_type' => 'Chemistry',
				'test_amount' => '2000.00',
				'test_subgroup' => 'Renal Function Test',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '8',
				'test_code' => '308',
				'test_name' => 'Urine Clearance',
				'test_type' => 'Chemistry',
				'test_amount' => '2000.00',
				'test_subgroup' => 'Renal Function Test',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '9',
				'test_code' => '309',
				'test_name' => 'Creatinine Clearance',
				'test_type' => 'Chemistry',
				'test_amount' => '4000.00',
				'test_subgroup' => 'Renal Function Test',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '10',
				'test_code' => '310',
				'test_name' => 'Calcium',
				'test_type' => 'Chemistry',
				'test_amount' => '2000.00',
				'test_subgroup' => 'Renal Function Test',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '1.1 -1.4 mmol/L',

			],

			[
				'item_id' => '11',
				'test_code' => '311',
				'test_name' => 'Uric Acid',
				'test_type' => 'Chemistry',
				'test_amount' => '2000.00',
				'test_subgroup' => 'Renal Function Test',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => 'Male: 3.5 – 7.2 mg/dL,  Female: 2.6 – 6.0 mg/dL',

			],

			[
				'item_id' => '12',
				'test_code' => '312',
				'test_name' => 'Phosphorus',
				'test_type' => 'Chemistry',
				'test_amount' => '2000.00',
				'test_subgroup' => 'Renal Function Test',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '13',
				'test_code' => '313',
				'test_name' => 'Aspartate Transaminase (AST)',
				'test_type' => 'Chemistry',
				'test_amount' => '2500.00',
				'test_subgroup' => 'Liver Function Test',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => 'M: &lt; 35 U/L,  F: &lt; 31 U/L',

			],

			[
				'item_id' => '14',
				'test_code' => '314',
				'test_name' => 'Alanine Transaminase (ALT)                          ',
				'test_type' => 'Chemistry',
				'test_amount' => '1500.00',
				'test_subgroup' => 'Liver Function Test',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => 'M: &lt; 45 U/L,  F: &lt; 34 U/L',

			],

			[
				'item_id' => '15',
				'test_code' => '315',
				'test_name' => 'Alkaline Phosphatase (ALP)                            ',
				'test_type' => 'Haematology',
				'test_amount' => '1500.00',
				'test_subgroup' => 'Liver Function Test',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '&lt; 258 U/L',

			],

			[
				'item_id' => '16',
				'test_code' => '316',
				'test_name' => 'Total Bilirubin',
				'test_type' => 'Chemistry',
				'test_amount' => '1500.00',
				'test_subgroup' => 'Liver Function Test',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => 'Adult : 1.7 - 21 µmol/L',

			],

			[
				'item_id' => '17',
				'test_code' => '317',
				'test_name' => 'Direct Bilirubin',
				'test_type' => 'Chemistry',
				'test_amount' => '1500.00',
				'test_subgroup' => 'Liver Function Test',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '18',
				'test_code' => '318',
				'test_name' => 'Unconjugated Bilirubin',
				'test_type' => 'Chemistry',
				'test_amount' => '1500.00',
				'test_subgroup' => 'Liver Function Test',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '19',
				'test_code' => '319',
				'test_name' => 'Albumin',
				'test_type' => 'Chemistry',
				'test_amount' => '1500.00',
				'test_subgroup' => 'Liver Function Test',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => 'Adult: 35 - 52 g/L',

			],

			[
				'item_id' => '20',
				'test_code' => '320',
				'test_name' => 'Total Protein',
				'test_type' => 'Chemistry',
				'test_amount' => '2000.00',
				'test_subgroup' => 'Liver Function Test',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '6.6 - 8.8 g/L',

			],

			[
				'item_id' => '21',
				'test_code' => '321',
				'test_name' => 'Amylase',
				'test_type' => 'Chemistry',
				'test_amount' => '3500.00',
				'test_subgroup' => 'Liver Function Test',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '22',
				'test_code' => '322',
				'test_name' => 'Lipase',
				'test_type' => 'Chemistry',
				'test_amount' => '3500.00',
				'test_subgroup' => 'Liver Function Test',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '23',
				'test_code' => '323',
				'test_name' => 'Glutamate Dehydrogenase (GDH)',
				'test_type' => 'Chemistry',
				'test_amount' => '4500.00',
				'test_subgroup' => 'Liver Function Test',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '24',
				'test_code' => '324',
				'test_name' => 'LDH',
				'test_type' => 'Chemistry',
				'test_amount' => '3000.00',
				'test_subgroup' => 'Liver Function Test',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '25',
				'test_code' => '325',
				'test_name' => 'Cholesterol',
				'test_type' => 'Chemistry',
				'test_amount' => '2000.00',
				'test_subgroup' => 'Lipid Profile Test',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '26',
				'test_code' => '326',
				'test_name' => 'HDL Cholesterol',
				'test_type' => 'Chemistry',
				'test_amount' => '2500.00',
				'test_subgroup' => 'Lipid Profile Test',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '27',
				'test_code' => '327',
				'test_name' => 'LDL Cholesterol',
				'test_type' => 'Chemistry',
				'test_amount' => '3000.00',
				'test_subgroup' => 'Lipid Profile Test',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '28',
				'test_code' => '328',
				'test_name' => 'Triglyceride',
				'test_type' => 'Chemistry',
				'test_amount' => '1500.00',
				'test_subgroup' => 'Lipid Profile Test',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '29',
				'test_code' => '329',
				'test_name' => 'Glucose Fasting',
				'test_type' => 'Chemistry',
				'test_amount' => '1500.00',
				'test_subgroup' => 'Diabetes',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '3.8  -  6.4 mmol/L',

			],

			[
				'item_id' => '30',
				'test_code' => '330',
				'test_name' => 'Glucose Random',
				'test_type' => 'Chemistry',
				'test_amount' => '1500.00',
				'test_subgroup' => 'Diabetes',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '3.8  -  7.4 mmol/L',

			],

			[
				'item_id' => '31',
				'test_code' => '331',
				'test_name' => 'HbA1c (Glycatedhaemoglobin)',
				'test_type' => 'Chemistry',
				'test_amount' => '7000.00',
				'test_subgroup' => 'Diabetes',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => 'Normal: 4.0 - 6.4 Good Control: ?7.0 Fair Control: 8 – 10.0 Poor Control:>10.0',

			],

			[
				'item_id' => '32',
				'test_code' => '332',
				'test_name' => 'Glucose 2hrs Post Pradial',
				'test_type' => 'Chemistry',
				'test_amount' => '1500.00',
				'test_subgroup' => 'Diabetes',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '3.8 - 7.7 mmol/L',

			],

			[
				'item_id' => '33',
				'test_code' => '333',
				'test_name' => 'OGTT',
				'test_type' => 'Chemistry',
				'test_amount' => '5000.00',
				'test_subgroup' => 'Diabetes',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '34',
				'test_code' => '334 ',
				'test_name' => 'CSF Protein',
				'test_type' => 'Chemistry',
				'test_amount' => '1500.00',
				'test_subgroup' => 'CSF Chemistry ',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '35',
				'test_code' => '335',
				'test_name' => 'CSF Glucose',
				'test_type' => 'Chemistry',
				'test_amount' => '1500.00',
				'test_subgroup' => 'CSF Chemistry ',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '36',
				'test_code' => '336',
				'test_name' => 'Myoglobin',
				'test_type' => 'Chemistry',
				'test_amount' => '4000.00',
				'test_subgroup' => 'Cardiac',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '37',
				'test_code' => '337',
				'test_name' => 'Troponin I',
				'test_type' => 'Chemistry',
				'test_amount' => '6500.00',
				'test_subgroup' => 'Cardiac',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '38',
				'test_code' => '338',
				'test_name' => 'Troponin T',
				'test_type' => 'Chemistry',
				'test_amount' => '6500.00',
				'test_subgroup' => 'Cardiac',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '39',
				'test_code' => '339',
				'test_name' => 'Total CK',
				'test_type' => 'Chemistry',
				'test_amount' => '4000.00',
				'test_subgroup' => 'Cardiac',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '40',
				'test_code' => '340',
				'test_name' => 'CK Mb',
				'test_type' => 'Chemistry',
				'test_amount' => '4000.00',
				'test_subgroup' => 'Cardiac',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '41',
				'test_code' => '341',
				'test_name' => 'Prolactin',
				'test_type' => 'Chemistry',
				'test_amount' => '6500.00',
				'test_subgroup' => 'Endocrine',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => 'Non- Pregnant women  (1.0 -16.0) ng/ml                                                                     Post- Menopause  (12.9 – 51.9) ng/ml           Adult Male (1.3 – 11.9) ng/ml',

			],

			[
				'item_id' => '42',
				'test_code' => '342',
				'test_name' => 'FSH',
				'test_type' => 'Chemistry',
				'test_amount' => '6500.00',
				'test_subgroup' => 'Endocrine',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '43',
				'test_code' => '343',
				'test_name' => 'LH',
				'test_type' => 'Chemistry',
				'test_amount' => '6500.00',
				'test_subgroup' => 'Endocrine',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '44',
				'test_code' => '344',
				'test_name' => 'Progesterone (Ovulation day 21)',
				'test_type' => 'Chemistry',
				'test_amount' => '7500.00',
				'test_subgroup' => 'Endocrine',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => 'Follicular Phase (0.15 -0.70)ng/ml)                                                                                         Luteal Phase (2.0 – 25.0) ng/ml                                                                     Mid Cycle   (8.0 – 22.0) ng/ml ',

			],

			[
				'item_id' => '45',
				'test_code' => '345',
				'test_name' => 'Testosterone',
				'test_type' => 'Chemistry',
				'test_amount' => '10000.00',
				'test_subgroup' => 'Endocrine',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '46',
				'test_code' => '346',
				'test_name' => 'Estradiol (E2)',
				'test_type' => 'Chemistry',
				'test_amount' => '6500.00',
				'test_subgroup' => 'Endocrine',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => 'Male: (&lt;60 )pg/ml                                                         Female: Post Menopausal phase ( &lt;180) pg/ml                                                                    Ovulatory,early Follicular (30 -100) pg/ml                      ',

			],

			[
				'item_id' => '47',
				'test_code' => '347',
				'test_name' => 'TSH',
				'test_type' => 'Chemistry',
				'test_amount' => '6500.00',
				'test_subgroup' => 'Endocrine Thyroid',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '0.5  -  4.0 uIu/ml',

			],

			[
				'item_id' => '48',
				'test_code' => '348',
				'test_name' => 'Free T3',
				'test_type' => 'Chemistry',
				'test_amount' => '6500.00',
				'test_subgroup' => 'Endocrine Thyroid',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '49',
				'test_code' => '349',
				'test_name' => 'Free T4',
				'test_type' => 'Chemistry',
				'test_amount' => '6500.00',
				'test_subgroup' => 'Endocrine Thyroid',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '50',
				'test_code' => '350',
				'test_name' => 'T3',
				'test_type' => 'Chemistry',
				'test_amount' => '6500.00',
				'test_subgroup' => 'Endocrine Thyroid',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '0.49 - 2.02 ng/ml',

			],

			[
				'item_id' => '51',
				'test_code' => '351',
				'test_name' => 'T4',
				'test_type' => 'Chemistry',
				'test_amount' => '6500.00',
				'test_subgroup' => 'Endocrine Thyroid',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => 'Male (44 - 108) nmol/L, Female (48 - 166)nmol/L',

			],

			[
				'item_id' => '52',
				'test_code' => '352',
				'test_name' => 'PTH',
				'test_type' => 'Chemistry',
				'test_amount' => '6500.00',
				'test_subgroup' => 'Endocrine Thyroid',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '53',
				'test_code' => '353',
				'test_name' => 'Cortisol (Serum)',
				'test_type' => 'Chemistry',
				'test_amount' => '13000.00',
				'test_subgroup' => 'Other Hormones',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '54',
				'test_code' => '354',
				'test_name' => 'Cortisol (24hrs Urine)',
				'test_type' => 'Chemistry',
				'test_amount' => '13000.00',
				'test_subgroup' => 'Other Hormones',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '55',
				'test_code' => '355',
				'test_name' => 'Renin Aldesterone',
				'test_type' => 'Chemistry',
				'test_amount' => '0.00',
				'test_subgroup' => 'Other Hormones',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '56',
				'test_code' => '356',
				'test_name' => 'PSA',
				'test_type' => 'Chemistry',
				'test_amount' => '10000.00',
				'test_subgroup' => 'Tumour Makers',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '0 - 4 ng/mL',

			],

			[
				'item_id' => '57',
				'test_code' => '357',
				'test_name' => 'Free PSA',
				'test_type' => 'Chemistry',
				'test_amount' => '10000.00',
				'test_subgroup' => 'Tumour Makers',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '58',
				'test_code' => '358',
				'test_name' => 'AFP',
				'test_type' => 'Chemistry',
				'test_amount' => '13000.00',
				'test_subgroup' => 'Tumour Makers',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '59',
				'test_code' => '359',
				'test_name' => 'Bence jones Protein (Urine)',
				'test_type' => 'Chemistry',
				'test_amount' => '5000.00',
				'test_subgroup' => 'Tumour Makers',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '60',
				'test_code' => '360',
				'test_name' => 'CEA (G.I.T, Lung Breast)',
				'test_type' => 'Chemistry',
				'test_amount' => '13000.00',
				'test_subgroup' => 'Tumour Makers',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '61',
				'test_code' => '361',
				'test_name' => 'CA 19-9 (GIT, Pancreas)',
				'test_type' => 'Chemistry',
				'test_amount' => '13000.00',
				'test_subgroup' => 'Tumour Makers',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '62',
				'test_code' => '362',
				'test_name' => 'CA 125 (Ovary)',
				'test_type' => 'Chemistry',
				'test_amount' => '13000.00',
				'test_subgroup' => 'Tumour Makers',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '63',
				'test_code' => '363',
				'test_name' => 'CA15-3 (Breast)',
				'test_type' => 'Chemistry',
				'test_amount' => '13000.00',
				'test_subgroup' => 'Tumour Makers',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '64',
				'test_code' => '364',
				'test_name' => 'B2 Microglobulin',
				'test_type' => 'Chemistry',
				'test_amount' => '6500.00',
				'test_subgroup' => 'Tumour Makers',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '65',
				'test_code' => '365',
				'test_name' => 'C-Reactive Protein',
				'test_type' => 'Chemistry',
				'test_amount' => '2000.00',
				'test_subgroup' => 'Tumour Makers',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '66',
				'test_code' => '366',
				'test_name' => 'Opiates',
				'test_type' => 'Chemistry',
				'test_amount' => '0.00',
				'test_subgroup' => 'Drug Screen',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '67',
				'test_code' => '367',
				'test_name' => 'Cocaine',
				'test_type' => 'Chemistry',
				'test_amount' => '0.00',
				'test_subgroup' => 'Drug Screen',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '68',
				'test_code' => '368',
				'test_name' => 'Alcohol',
				'test_type' => 'Chemistry',
				'test_amount' => '0.00',
				'test_subgroup' => 'Drug Screen',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '69',
				'test_code' => '369',
				'test_name' => 'Amphetamine',
				'test_type' => 'Chemistry',
				'test_amount' => '6500.00',
				'test_subgroup' => 'Drug Screen',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '70',
				'test_code' => '370',
				'test_name' => 'Barbiturate',
				'test_type' => 'Chemistry',
				'test_amount' => '6500.00',
				'test_subgroup' => 'Drug Screen',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '71',
				'test_code' => '371',
				'test_name' => 'Benzodiazepines',
				'test_type' => 'Chemistry',
				'test_amount' => '6500.00',
				'test_subgroup' => 'Drug Screen',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '72',
				'test_code' => '372',
				'test_name' => 'Manrax',
				'test_type' => 'Chemistry',
				'test_amount' => '6500.00',
				'test_subgroup' => 'Drug Screen',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '73',
				'test_code' => '373',
				'test_name' => 'Methadone',
				'test_type' => 'Chemistry',
				'test_amount' => '6500.00',
				'test_subgroup' => 'Drug Screen',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '74',
				'test_code' => '374',
				'test_name' => 'Phencyclidine',
				'test_type' => 'Chemistry',
				'test_amount' => '6500.00',
				'test_subgroup' => 'Drug Screen',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '75',
				'test_code' => '375',
				'test_name' => 'Carbamazepine',
				'test_type' => 'Chemistry',
				'test_amount' => '6500.00',
				'test_subgroup' => 'Drug Screen',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '76',
				'test_code' => '376',
				'test_name' => 'Digoxin',
				'test_type' => 'Chemistry',
				'test_amount' => '6500.00',
				'test_subgroup' => 'Drug Screen',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '77',
				'test_code' => '377',
				'test_name' => 'Lithium',
				'test_type' => 'Chemistry',
				'test_amount' => '6500.00',
				'test_subgroup' => 'Drug Screen',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '78',
				'test_code' => '378',
				'test_name' => 'Phenytoin',
				'test_type' => 'Chemistry',
				'test_amount' => '6500.00',
				'test_subgroup' => 'Drug Screen',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '79',
				'test_code' => '379',
				'test_name' => 'Sodium Valproate',
				'test_type' => 'Chemistry',
				'test_amount' => '0.00',
				'test_subgroup' => 'Drug Screen',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '80',
				'test_code' => '380',
				'test_name' => 'Cyclosporin',
				'test_type' => 'Chemistry',
				'test_amount' => '6500.00',
				'test_subgroup' => 'Drug Screen',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '81',
				'test_code' => '381',
				'test_name' => 'Tramadol',
				'test_type' => 'Chemistry',
				'test_amount' => '0.00',
				'test_subgroup' => 'Drug Screen',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '82',
				'test_code' => '382',
				'test_name' => 'Morphine',
				'test_type' => 'Chemistry',
				'test_amount' => '0.00',
				'test_subgroup' => 'Drug Screen',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '83',
				'test_code' => '383',
				'test_name' => 'Ketamine',
				'test_type' => 'Chemistry',
				'test_amount' => '0.00',
				'test_subgroup' => 'Drug Screen',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '84',
				'test_code' => '384',
				'test_name' => 'Cannabis',
				'test_type' => 'Chemistry',
				'test_amount' => '0.00',
				'test_subgroup' => 'Drug Screen',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '85',
				'test_code' => '385',
				'test_name' => 'Ectasy',
				'test_type' => 'Chemistry',
				'test_amount' => '0.00',
				'test_subgroup' => 'Drug Screen',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '86',
				'test_code' => '386',
				'test_name' => 'Rheumatoid factor',
				'test_type' => 'Chemistry',
				'test_amount' => '2500.00',
				'test_subgroup' => 'Drug Screen',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '87',
				'test_code' => '387',
				'test_name' => 'Urine M/C/S',
				'test_type' => 'Microbiology',
				'test_amount' => '4000.00',
				'test_subgroup' => 'Microbiology',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '88',
				'test_code' => '388',
				'test_name' => 'Urinalysis',
				'test_type' => 'Microbiology',
				'test_amount' => '1500.00',
				'test_subgroup' => 'Microbiology',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '89',
				'test_code' => '389',
				'test_name' => 'HVS M/C/S',
				'test_type' => 'Microbiology',
				'test_amount' => '4000.00',
				'test_subgroup' => 'Microbiology',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '90',
				'test_code' => '390',
				'test_name' => 'ECS M/C/S',
				'test_type' => 'Microbiology',
				'test_amount' => '3000.00',
				'test_subgroup' => 'Microbiology',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '91',
				'test_code' => '391',
				'test_name' => 'Throat M/C/S',
				'test_type' => 'Microbiology',
				'test_amount' => '4000.00',
				'test_subgroup' => 'Microbiology',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '92',
				'test_code' => '392',
				'test_name' => 'Wound M/C/S',
				'test_type' => 'Microbiology',
				'test_amount' => '3000.00',
				'test_subgroup' => 'Microbiology',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '93',
				'test_code' => '393',
				'test_name' => 'Urethral Swab M/C/S',
				'test_type' => 'Microbiology',
				'test_amount' => '4000.00',
				'test_subgroup' => 'Microbiology',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '94',
				'test_code' => '394',
				'test_name' => 'Stool M/C/S',
				'test_type' => 'Microbiology',
				'test_amount' => '3000.00',
				'test_subgroup' => 'Microbiology',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '95',
				'test_code' => '395',
				'test_name' => 'Stool Analysis',
				'test_type' => 'Microbiology',
				'test_amount' => '1500.00',
				'test_subgroup' => 'Microbiology',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '96',
				'test_code' => '396',
				'test_name' => 'Ear Swap M/C/S',
				'test_type' => 'Microbiology',
				'test_amount' => '3500.00',
				'test_subgroup' => 'Microbiology',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '97',
				'test_code' => '397',
				'test_name' => 'CSF M/C/S',
				'test_type' => 'Microbiology',
				'test_amount' => '2500.00',
				'test_subgroup' => 'Microbiology',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '98',
				'test_code' => '398',
				'test_name' => 'CSF M/C/S',
				'test_type' => 'Microbiology',
				'test_amount' => '0.00',
				'test_subgroup' => 'Microbiology',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '99',
				'test_code' => '399',
				'test_name' => 'Blood Culture',
				'test_type' => 'Microbiology',
				'test_amount' => '5500.00',
				'test_subgroup' => 'Microbiology',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '100',
				'test_code' => '400',
				'test_name' => 'Faecal Occult Blood',
				'test_type' => 'Microbiology',
				'test_amount' => '2000.00',
				'test_subgroup' => 'Serology',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '101',
				'test_code' => '401',
				'test_name' => 'Malaria Parasite',
				'test_type' => 'Microbiology',
				'test_amount' => '1500.00',
				'test_subgroup' => 'Malaria Parasite',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '102',
				'test_code' => '402',
				'test_name' => 'Mantoux Test',
				'test_type' => 'Microbiology',
				'test_amount' => '3000.00',
				'test_subgroup' => 'Serology',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '103',
				'test_code' => '403',
				'test_name' => 'Semen Analysis',
				'test_type' => 'Microbiology',
				'test_amount' => '7000.00',
				'test_subgroup' => 'Microbiology',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '104',
				'test_code' => '404',
				'test_name' => 'Semen M/C/S',
				'test_type' => 'Microbiology',
				'test_amount' => '5000.00',
				'test_subgroup' => 'Microbiology',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '105',
				'test_code' => '405',
				'test_name' => 'Skin Snip',
				'test_type' => 'Microbiology',
				'test_amount' => '2500.00',
				'test_subgroup' => 'Microbiology',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '106',
				'test_code' => '406',
				'test_name' => 'Skin Scrapping Microscopy',
				'test_type' => 'Microbiology',
				'test_amount' => '2000.00',
				'test_subgroup' => 'Microbiology',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '107',
				'test_code' => '407',
				'test_name' => 'Skin Scrapping Culture',
				'test_type' => 'Microbiology',
				'test_amount' => '2000.00',
				'test_subgroup' => 'Microbiology',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '108',
				'test_code' => '408',
				'test_name' => 'Aspirate M/C/S',
				'test_type' => 'Microbiology',
				'test_amount' => '2000.00',
				'test_subgroup' => 'Microbiology',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '109',
				'test_code' => '409',
				'test_name' => 'Full Blood Count',
				'test_type' => 'Haematology',
				'test_amount' => '2500.00',
				'test_subgroup' => 'Full Blood Count',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '110',
				'test_code' => '410',
				'test_name' => 'PCV',
				'test_type' => 'Haematology',
				'test_amount' => '1500.00',
				'test_subgroup' => 'Full Blood Count',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '[M:37  - 52,  F:38-45] %',

			],

			[
				'item_id' => '111',
				'test_code' => '411',
				'test_name' => 'ESR',
				'test_type' => 'Haematology',
				'test_amount' => '1500.00',
				'test_subgroup' => 'Full Blood Count',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '112',
				'test_code' => '412',
				'test_name' => 'Reticulocyte Count',
				'test_type' => 'Haematology',
				'test_amount' => '2000.00',
				'test_subgroup' => 'Full Blood Count',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '113',
				'test_code' => '413',
				'test_name' => 'Coobs Test (Direct)',
				'test_type' => 'Haematology',
				'test_amount' => '2000.00',
				'test_subgroup' => 'Coombs Test',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '114',
				'test_code' => '414',
				'test_name' => 'Coombs Test (Indirect)',
				'test_type' => 'Haematology',
				'test_amount' => '2000.00',
				'test_subgroup' => 'Coombs Test',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '115',
				'test_code' => '415',
				'test_name' => 'Blood Group',
				'test_type' => 'Haematology',
				'test_amount' => '1000.00',
				'test_subgroup' => 'Blood Group and Genotype',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '116',
				'test_code' => '416',
				'test_name' => 'Hb-Genotype',
				'test_type' => 'Haematology',
				'test_amount' => '2000.00',
				'test_subgroup' => 'Blood Group and Genotype',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '117',
				'test_code' => '417',
				'test_name' => 'Blood Film Report',
				'test_type' => 'Haematology',
				'test_amount' => '2500.00',
				'test_subgroup' => 'Blood Group and Genotype',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '118',
				'test_code' => '418',
				'test_name' => 'Bleeding Time',
				'test_type' => 'Haematology',
				'test_amount' => '2000.00',
				'test_subgroup' => 'Clotting Profile',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '119',
				'test_code' => '419',
				'test_name' => 'Prothromnin Time',
				'test_type' => 'Haematology',
				'test_amount' => '3500.00',
				'test_subgroup' => 'Clotting Profile',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '120',
				'test_code' => '420',
				'test_name' => 'International Normalize Ratio',
				'test_type' => 'Haematology',
				'test_amount' => '3500.00',
				'test_subgroup' => 'Clotting Profile',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '121',
				'test_code' => '421',
				'test_name' => 'Prothrombin Time with Kaoline',
				'test_type' => 'Haematology',
				'test_amount' => '2500.00',
				'test_subgroup' => 'Clotting Profile',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '122',
				'test_code' => '422',
				'test_name' => 'Whole Blood Clotting Time',
				'test_type' => 'Haematology',
				'test_amount' => '2500.00',
				'test_subgroup' => 'Clotting Profile',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '123',
				'test_code' => '423',
				'test_name' => 'D-Dimer',
				'test_type' => 'Haematology',
				'test_amount' => '6500.00',
				'test_subgroup' => 'Clotting Profile',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '124',
				'test_code' => '424',
				'test_name' => 'HIV 1 & 2',
				'test_type' => 'Haematology',
				'test_amount' => '1000.00',
				'test_subgroup' => 'Serology',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '125',
				'test_code' => '425',
				'test_name' => 'HBsAg',
				'test_type' => 'Haematology',
				'test_amount' => '2500.00',
				'test_subgroup' => 'Serology',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '126',
				'test_code' => '426',
				'test_name' => 'HCV',
				'test_type' => 'Haematology',
				'test_amount' => '3000.00',
				'test_subgroup' => 'Serology',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '127',
				'test_code' => '427',
				'test_name' => 'VDRL',
				'test_type' => 'Haematology',
				'test_amount' => '1500.00',
				'test_subgroup' => 'Serology',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '128',
				'test_code' => '428',
				'test_name' => 'H.pylori',
				'test_type' => 'Haematology',
				'test_amount' => '4000.00',
				'test_subgroup' => 'Serology',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '129',
				'test_code' => '429',
				'test_name' => 'ASO titre',
				'test_type' => 'Haematology',
				'test_amount' => '2500.00',
				'test_subgroup' => 'Serology',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '130',
				'test_code' => '430',
				'test_name' => 'HBeAg',
				'test_type' => 'Haematology',
				'test_amount' => '5000.00',
				'test_subgroup' => 'Serology',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '131',
				'test_code' => '431',
				'test_name' => 'HCG',
				'test_type' => 'Haematology',
				'test_amount' => '1500.00',
				'test_subgroup' => 'Serology',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '132',
				'test_code' => '432',
				'test_name' => 'Serum AFB',
				'test_type' => 'Haematology',
				'test_amount' => '2000.00',
				'test_subgroup' => 'Serology',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '133',
				'test_code' => '433',
				'test_name' => 'Widal Test',
				'test_type' => 'Haematology',
				'test_amount' => '2000.00',
				'test_subgroup' => 'Serology',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '134',
				'test_code' => '434',
				'test_name' => 'HCG (Quantitative)',
				'test_type' => 'Haematology',
				'test_amount' => '6500.00',
				'test_subgroup' => 'Quantitative Test',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '135',
				'test_code' => '435',
				'test_name' => 'HBsAg (Quantitative)',
				'test_type' => 'Haematology',
				'test_amount' => '5000.00',
				'test_subgroup' => 'Quantitative Test',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '136',
				'test_code' => '436',
				'test_name' => 'HBeAg',
				'test_type' => 'Haematology',
				'test_amount' => '4000.00',
				'test_subgroup' => 'Quantitative Test',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '137',
				'test_code' => '437',
				'test_name' => 'VDRL (Syphilis) Quantitative',
				'test_type' => 'Haematology',
				'test_amount' => '1500.00',
				'test_subgroup' => 'Quantitative Test',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '138',
				'test_code' => '438',
				'test_name' => 'HIV 1 & 2 (Quantitative)',
				'test_type' => 'Haematology',
				'test_amount' => '30000.00',
				'test_subgroup' => 'Quantitative Test',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '139',
				'test_code' => '439',
				'test_name' => 'Renal Function Test',
				'test_type' => 'Chemistry',
				'test_amount' => '4000.00',
				'test_subgroup' => 'Renal Function Test',
				'test_kind' => 'special',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '140',
				'test_code' => '440',
				'test_name' => 'Liver Function Test',
				'test_type' => 'Chemistry',
				'test_amount' => '5400.00',
				'test_subgroup' => 'Liver Function Test',
				'test_kind' => 'special',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '141',
				'test_code' => '441',
				'test_name' => 'Lipid Profile Test',
				'test_type' => 'Chemistry',
				'test_amount' => '4400.00',
				'test_subgroup' => 'Lipid Profile Test',
				'test_kind' => 'special',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '5341',
				'test_code' => '442',
				'test_name' => 'Drug Screen Test (Urine)',
				'test_type' => 'Chemistry',
				'test_amount' => '13000.00',
				'test_subgroup' => 'Drug Screen',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '6361',
				'test_code' => '443',
				'test_name' => 'Urethral M/C/S',
				'test_type' => 'Microbiology',
				'test_amount' => '4000.00',
				'test_subgroup' => 'Microbiology',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '6865',
				'test_code' => '444',
				'test_name' => 'Sputum M/C/S',
				'test_type' => 'Microbiology',
				'test_amount' => '4000.00',
				'test_subgroup' => 'Microbiology',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7357',
				'test_code' => '445',
				'test_name' => 'ESR',
				'test_type' => 'Haematology',
				'test_amount' => '1500.00',
				'test_subgroup' => '',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => 'Male (0 - 15), Female (0 - 20) mm/hr',

			],

			[
				'item_id' => '7732',
				'test_code' => '446',
				'test_name' => 'C-Peptide',
				'test_type' => 'Chemistry',
				'test_amount' => '0.00',
				'test_subgroup' => 'Diabetes',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7733',
				'test_code' => '447',
				'test_name' => 'Insulin',
				'test_type' => 'Chemistry',
				'test_amount' => '19000.00',
				'test_subgroup' => 'Diabetes',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7734',
				'test_code' => '448',
				'test_name' => 'Microalbumin (Urine/Quanitative)',
				'test_type' => 'Chemistry',
				'test_amount' => '0.00',
				'test_subgroup' => 'Diabetes',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7735',
				'test_code' => '449',
				'test_name' => 'Fructosamine',
				'test_type' => 'Chemistry',
				'test_amount' => '0.00',
				'test_subgroup' => 'Diabetes',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7736',
				'test_code' => '450',
				'test_name' => 'High Sensitive CRP',
				'test_type' => 'Chemistry',
				'test_amount' => '0.00',
				'test_subgroup' => 'Inflamation/Immune',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7737',
				'test_code' => '451',
				'test_name' => 'Complement C3',
				'test_type' => 'Chemistry',
				'test_amount' => '0.00',
				'test_subgroup' => 'Inflamation/Immune',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7738',
				'test_code' => '452',
				'test_name' => 'Complement C4',
				'test_type' => 'Chemistry',
				'test_amount' => '0.00',
				'test_subgroup' => 'Inflamation/Immune',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7739',
				'test_code' => '453',
				'test_name' => 'CRP',
				'test_type' => 'Chemistry',
				'test_amount' => '0.00',
				'test_subgroup' => 'Inflamation/Immune',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7740',
				'test_code' => '454',
				'test_name' => 'DHEA - S',
				'test_type' => 'Chemistry',
				'test_amount' => '0.00',
				'test_subgroup' => 'Endocrine Reproductive',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7741',
				'test_code' => '455',
				'test_name' => 'Testosterone (free)',
				'test_type' => 'Chemistry',
				'test_amount' => '0.00',
				'test_subgroup' => 'Endocrine Reproductive',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7742',
				'test_code' => '456',
				'test_name' => 'Sex Hormone BLND, GLOB (SHGH)',
				'test_type' => 'Chemistry',
				'test_amount' => '0.00',
				'test_subgroup' => 'Endocrine Reproductive',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7743',
				'test_code' => '457',
				'test_name' => 'Anti Mullerian Hormone (for IVF)',
				'test_type' => 'Chemistry',
				'test_amount' => '0.00',
				'test_subgroup' => 'Endocrine Reproductive',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7744',
				'test_code' => '458',
				'test_name' => '170H - Progesterone',
				'test_type' => 'Chemistry',
				'test_amount' => '0.00',
				'test_subgroup' => 'Endocrine Reproductive',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7745',
				'test_code' => '459',
				'test_name' => 'Metanephrine (24hrs urine)',
				'test_type' => 'Chemistry',
				'test_amount' => '0.00',
				'test_subgroup' => 'Other Endocrine',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7746',
				'test_code' => '460',
				'test_name' => 'Growth Hormone',
				'test_type' => 'Chemistry',
				'test_amount' => '0.00',
				'test_subgroup' => 'Other Endocrine',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7747',
				'test_code' => '461',
				'test_name' => 'ACTH',
				'test_type' => 'Chemistry',
				'test_amount' => '0.00',
				'test_subgroup' => 'Other Endocrine',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7748',
				'test_code' => '462',
				'test_name' => 'AntiDiuretic Hormone (ADH)',
				'test_type' => 'Chemistry',
				'test_amount' => '0.00',
				'test_subgroup' => 'Other Endocrine',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7749',
				'test_code' => '463',
				'test_name' => 'Adrenalin',
				'test_type' => 'Chemistry',
				'test_amount' => '0.00',
				'test_subgroup' => 'Other Endocrine',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7750',
				'test_code' => '464',
				'test_name' => 'Nor Adrenalin',
				'test_type' => 'Chemistry',
				'test_amount' => '0.00',
				'test_subgroup' => 'Other Endocrine',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7751',
				'test_code' => '465',
				'test_name' => 'ANF + ANTI DNA (ds DNA0 FENA',
				'test_type' => 'Chemistry',
				'test_amount' => '0.00',
				'test_subgroup' => 'Auto Immune',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7752',
				'test_code' => '466',
				'test_name' => 'Anti phospholipid AB',
				'test_type' => 'Chemistry',
				'test_amount' => '0.00',
				'test_subgroup' => 'Auto Immune',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7753',
				'test_code' => '467',
				'test_name' => 'Cardiolipid AB',
				'test_type' => 'Chemistry',
				'test_amount' => '0.00',
				'test_subgroup' => 'Auto Immune',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7754',
				'test_code' => '468',
				'test_name' => 'Smooth Muscle AB',
				'test_type' => 'Chemistry',
				'test_amount' => '0.00',
				'test_subgroup' => 'Auto Immune',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7755',
				'test_code' => '469',
				'test_name' => 'Lupus Anticoagulant',
				'test_type' => 'Chemistry',
				'test_amount' => '0.00',
				'test_subgroup' => 'Auto Immune',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7756',
				'test_code' => '470',
				'test_name' => 'ANCA',
				'test_type' => 'Chemistry',
				'test_amount' => '0.00',
				'test_subgroup' => 'Auto Immune',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7757',
				'test_code' => '471',
				'test_name' => 'Arthritis Screen',
				'test_type' => 'Chemistry',
				'test_amount' => '0.00',
				'test_subgroup' => 'Auto Immune',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7758',
				'test_code' => '472',
				'test_name' => 'ASOT',
				'test_type' => 'Chemistry',
				'test_amount' => '0.00',
				'test_subgroup' => 'Infective',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7759',
				'test_code' => '473',
				'test_name' => 'Anti -DNAse B',
				'test_type' => 'Chemistry',
				'test_amount' => '0.00',
				'test_subgroup' => 'Infective',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7760',
				'test_code' => '474',
				'test_name' => 'CMV AB (GG.IGM)',
				'test_type' => 'Chemistry',
				'test_amount' => '0.00',
				'test_subgroup' => 'Infective',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7761',
				'test_code' => '475',
				'test_name' => 'CMV viral load',
				'test_type' => 'Chemistry',
				'test_amount' => '0.00',
				'test_subgroup' => 'Infective',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7762',
				'test_code' => '476',
				'test_name' => 'Rubella IgM',
				'test_type' => 'Chemistry',
				'test_amount' => '0.00',
				'test_subgroup' => 'Infective',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7763',
				'test_code' => '477',
				'test_name' => 'Toxoplasma IgM',
				'test_type' => 'Chemistry',
				'test_amount' => '0.00',
				'test_subgroup' => 'Infective',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7764',
				'test_code' => '478',
				'test_name' => 'Human papilloma virus',
				'test_type' => 'Chemistry',
				'test_amount' => '40000.00',
				'test_subgroup' => 'Infective',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7765',
				'test_code' => '479',
				'test_name' => 'H.pylori AB (IgA)',
				'test_type' => 'Chemistry',
				'test_amount' => '0.00',
				'test_subgroup' => 'Infective',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7766',
				'test_code' => '480',
				'test_name' => 'H.pylori AB (IgM)',
				'test_type' => 'Chemistry',
				'test_amount' => '0.00',
				'test_subgroup' => 'Infective',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7767',
				'test_code' => '481',
				'test_name' => ' TPHA (Syphilis)',
				'test_type' => 'Chemistry',
				'test_amount' => '0.00',
				'test_subgroup' => 'Infective',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7768',
				'test_code' => '483',
				'test_name' => 'Chlamydia Pneumonae AB',
				'test_type' => 'Chemistry',
				'test_amount' => '0.00',
				'test_subgroup' => 'Infective',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7769',
				'test_code' => '484',
				'test_name' => 'Chalamy Tracomatis AB',
				'test_type' => 'Chemistry',
				'test_amount' => '0.00',
				'test_subgroup' => 'Infective',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7770',
				'test_code' => '485',
				'test_name' => 'Herpes Simple I & II (IgM/IgG)',
				'test_type' => 'Chemistry',
				'test_amount' => '0.00',
				'test_subgroup' => 'Infective',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7771',
				'test_code' => '486',
				'test_name' => 'RPR/VDRL',
				'test_type' => 'Chemistry',
				'test_amount' => '0.00',
				'test_subgroup' => 'Infective',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7772',
				'test_code' => '487',
				'test_name' => 'Mumps IgG/IgM',
				'test_type' => 'Chemistry',
				'test_amount' => '0.00',
				'test_subgroup' => 'Infective',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7773',
				'test_code' => '488',
				'test_name' => 'Measles AB',
				'test_type' => 'Chemistry',
				'test_amount' => '0.00',
				'test_subgroup' => 'Infective',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7774',
				'test_code' => '489',
				'test_name' => 'Torches screen',
				'test_type' => 'Chemistry',
				'test_amount' => '0.00',
				'test_subgroup' => 'Infective',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7775',
				'test_code' => '490',
				'test_name' => 'HEP A IgM (AB)',
				'test_type' => 'Chemistry',
				'test_amount' => '0.00',
				'test_subgroup' => 'Hepatitis Tests',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7776',
				'test_code' => '491',
				'test_name' => 'HEP B DNA viral load',
				'test_type' => 'Chemistry',
				'test_amount' => '0.00',
				'test_subgroup' => 'Hepatitis Tests',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7777',
				'test_code' => '492',
				'test_name' => 'HEP C RNA viral load',
				'test_type' => 'Chemistry',
				'test_amount' => '0.00',
				'test_subgroup' => 'Hepatitis Tests',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7778',
				'test_code' => '493',
				'test_name' => 'HEP B Viral (HBV) genotype',
				'test_type' => 'Chemistry',
				'test_amount' => '0.00',
				'test_subgroup' => 'Hepatitis Tests',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7779',
				'test_code' => '494',
				'test_name' => 'HEP C viral (HCV) RNA genotype',
				'test_type' => 'Chemistry',
				'test_amount' => '0.00',
				'test_subgroup' => 'Hepatitis Tests',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7780',
				'test_code' => '495',
				'test_name' => 'P24 ANTIGEN + HIV1 &  Ab',
				'test_type' => 'Chemistry',
				'test_amount' => '0.00',
				'test_subgroup' => 'Hepatitis Tests',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7781',
				'test_code' => '496',
				'test_name' => 'CD4',
				'test_type' => 'Chemistry',
				'test_amount' => '0.00',
				'test_subgroup' => 'Hepatitis Tests',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7782',
				'test_code' => '497',
				'test_name' => 'HIV PCR',
				'test_type' => 'Chemistry',
				'test_amount' => '0.00',
				'test_subgroup' => 'Hepatitis Tests',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7783',
				'test_code' => '498',
				'test_name' => 'Western Blot',
				'test_type' => 'Chemistry',
				'test_amount' => '0.00',
				'test_subgroup' => 'Hepatitis Tests',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7784',
				'test_code' => '500',
				'test_name' => 'Ferritin',
				'test_type' => 'Haematology',
				'test_amount' => '0.00',
				'test_subgroup' => 'Heamatology',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7785',
				'test_code' => '501',
				'test_name' => 'Total iron binding capacity (TIBC)',
				'test_type' => 'Haematology',
				'test_amount' => '0.00',
				'test_subgroup' => 'Heamatology',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7786',
				'test_code' => '502',
				'test_name' => 'RBC Folate',
				'test_type' => 'Haematology',
				'test_amount' => '0.00',
				'test_subgroup' => 'Heamatology',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7787',
				'test_code' => '503',
				'test_name' => 'Folic acid',
				'test_type' => 'Haematology',
				'test_amount' => '0.00',
				'test_subgroup' => 'Heamatology',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7788',
				'test_code' => '504',
				'test_name' => 'Vit B12',
				'test_type' => 'Haematology',
				'test_amount' => '0.00',
				'test_subgroup' => 'Heamatology',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7789',
				'test_code' => '505',
				'test_name' => 'G-6-PD quantitative',
				'test_type' => 'Haematology',
				'test_amount' => '0.00',
				'test_subgroup' => 'Heamatology',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7790',
				'test_code' => '506',
				'test_name' => 'Fibronogen',
				'test_type' => 'Haematology',
				'test_amount' => '0.00',
				'test_subgroup' => 'Heamatology',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7791',
				'test_code' => '507',
				'test_name' => 'Protein C',
				'test_type' => 'Haematology',
				'test_amount' => '0.00',
				'test_subgroup' => 'Heamatology',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7792',
				'test_code' => '508',
				'test_name' => 'Protein S',
				'test_type' => 'Haematology',
				'test_amount' => '0.00',
				'test_subgroup' => 'Heamatology',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7793',
				'test_code' => '509',
				'test_name' => 'Factor VIII',
				'test_type' => 'Haematology',
				'test_amount' => '0.00',
				'test_subgroup' => 'Heamatology',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7794',
				'test_code' => '510',
				'test_name' => 'VON WILLEBRAND FACTOR',
				'test_type' => 'Haematology',
				'test_amount' => '0.00',
				'test_subgroup' => 'Heamatology',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7795',
				'test_code' => '511',
				'test_name' => 'Total IgE',
				'test_type' => 'Haematology',
				'test_amount' => '0.00',
				'test_subgroup' => 'Heamatology',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7796',
				'test_code' => '512',
				'test_name' => 'Food Comprehensive Panel',
				'test_type' => 'Haematology',
				'test_amount' => '0.00',
				'test_subgroup' => 'Heamatology',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7797',
				'test_code' => '513',
				'test_name' => 'Comprehensive Infant Panel',
				'test_type' => 'Haematology',
				'test_amount' => '0.00',
				'test_subgroup' => 'Heamatology',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7798',
				'test_code' => '514',
				'test_name' => 'Comprehensive Adult Panel',
				'test_type' => 'Haematology',
				'test_amount' => '40000.00',
				'test_subgroup' => 'Heamatology',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7799',
				'test_code' => '515',
				'test_name' => 'Comprehensive Respiratory Panel',
				'test_type' => 'Haematology',
				'test_amount' => '0.00',
				'test_subgroup' => 'Heamatology',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '7850',
				'test_code' => '516',
				'test_name' => 'TB (Serology)',
				'test_type' => 'Haematology',
				'test_amount' => '2000.00',
				'test_subgroup' => 'Serology',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '8883',
				'test_code' => '517',
				'test_name' => 'Pap Smear',
				'test_type' => '',
				'test_amount' => '25000.00',
				'test_subgroup' => '',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

			[
				'item_id' => '9062',
				'test_code' => '518',
				'test_name' => 'Hepatitis B Profile Test',
				'test_type' => 'Microbiology',
				'test_amount' => '7000.00',
				'test_subgroup' => 'Microbiology',
				'test_kind' => 'single',
				'deleted' => '0',
				'test_unit' => '',

			],

		];
		foreach ($rows as $row) {
			DB::table('IposLaboratoryTest')->insert($row);
		}
	}
}