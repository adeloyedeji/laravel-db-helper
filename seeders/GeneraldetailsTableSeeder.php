<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GeneraldetailsTableSeeder extends Seeder
{
	public function run()
{
		$rows = [	
			[
				'id' => '1',
				'about_content' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                     <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                     <ul class="listing-awesome iq-mt-30 iq-mb-15">
                        <li class="d-flex"><span><i class="fa fa-check" aria-hidden="true"></i></span>Simply dummy text of the Lorem Ipsum is printing and type setting.</li>
                        <li class="d-flex iq-mt-10"><span><i class="fa fa-check" aria-hidden="true"></i></span>Dummy text of the printing and typesetting industry.</li>
                        <li class="d-flex iq-mt-10"><span><i class="fa fa-check" aria-hidden="true"></i></span>Text of the printing and typesetting industry Lorem Ipsum has been.</li>
                        <li class="d-flex iq-mt-10"><span><i class="fa fa-check" aria-hidden="true"></i></span>Ipsum has been the industry's standard dummy since the 1500s,</li>
                     </ul>
                     <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen chef.</p>',
				'about_image' => 'images/department/10.jpg',
				'column1' => '50:Pharmacist',
				'column2' => '3000:Blood Donations',
				'column3' => '16:Years of Experience',
				'column4' => '5000:Happy Customers',
				'slider1' => 'revolution/assets/first.jpg',
				'header1' => 'Welcome to Tonia Pharmacy',
				'sub_header1' => 'Health is Wealth we care about your health',
				'slider2' => 'revolution/assets/c2568-2.jpg',
				'header2' => 'Health solution is  always confidential',
				'sub_header2' => 'The spirit to care is our watch word in Tonia Pharmacy',
				'slider3' => '',
				'header3' => 'Health solution is  always confidential',
				'sub_header3' => 'The spirit to care is our watch word in Tonia Pharmacy',
				'slider4' => 'revolution/assets/four.jpg',
				'header4' => 'Health insurance plans',
				'sub_header4' => 'We offer insurance schemes that suits your plan from individual to family',
				'slider5' => '',
				'header5' => '',
				'sub_header5' => '',
				'slider6' => '',
				'header6' => '',
				'sub_header6' => '',
				'created_at' => '2018-12-05 14:16:31',
				'updated_at' => '2020-03-02 12:11:39',

			],

		];
		foreach ($rows as $row) {
			DB::table('Generaldetails')->insert($row);
		}
	}
}