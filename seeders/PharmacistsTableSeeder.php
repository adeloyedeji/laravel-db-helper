<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PharmacistsTableSeeder extends Seeder
{
	public function run()
{
		$rows = [	
			[
				'id' => '1',
				'name' => 'Dr. Rinks Cooper',
				'position' => 'Pharmacist',
				'monday' => '1',
				'tuesday' => '0',
				'wednesday' => '0',
				'thursday' => '1',
				'friday' => '0',
				'saturday' => '0',
				'sunday' => '0',
				'fb_url' => '#',
				'tw_url' => '#',
				'image' => 'images/doctors/01.jpg',
				'slug' => 'Dr.-Rinks-Cooper',
				'created_at' => '2018-11-27 11:38:14',
				'updated_at' => '2018-11-27 11:38:14',

			],

			[
				'id' => '2',
				'name' => 'Dr. JD Scot',
				'position' => 'Laboratory Scientist',
				'monday' => '0',
				'tuesday' => '1',
				'wednesday' => '0',
				'thursday' => '0',
				'friday' => '0',
				'saturday' => '0',
				'sunday' => '1',
				'fb_url' => '#',
				'tw_url' => '#',
				'image' => 'images/doctors/01.jpg',
				'slug' => 'Dr.-JD-Scot',
				'created_at' => '2018-11-27 11:38:14',
				'updated_at' => '2018-11-28 10:36:02',

			],

			[
				'id' => '3',
				'name' => 'Dr. Haris Morgan',
				'position' => 'Pharmacist',
				'monday' => '0',
				'tuesday' => '1',
				'wednesday' => '0',
				'thursday' => '0',
				'friday' => '0',
				'saturday' => '1',
				'sunday' => '0',
				'fb_url' => '#',
				'tw_url' => '#',
				'image' => 'images/doctors/01.jpg',
				'slug' => 'Dr.-Haris-Morgan',
				'created_at' => '2018-11-27 11:42:20',
				'updated_at' => '2018-11-27 11:42:20',

			],

			[
				'id' => '4',
				'name' => 'Dr.Kips Jordan',
				'position' => 'Dentist',
				'monday' => '0',
				'tuesday' => '0',
				'wednesday' => '1',
				'thursday' => '0',
				'friday' => '1',
				'saturday' => '0',
				'sunday' => '0',
				'fb_url' => '#',
				'tw_url' => '#',
				'image' => 'images/doctors/01.jpg',
				'slug' => '2018-11-27 12:42:20',
				'created_at' => '2018-11-27 11:42:20',
				'updated_at' => '',

			],

			[
				'id' => '5',
				'name' => 'Dr. Rinks Cooper',
				'position' => 'Psychologist',
				'monday' => '0',
				'tuesday' => '0',
				'wednesday' => '0',
				'thursday' => '1',
				'friday' => '0',
				'saturday' => '0',
				'sunday' => '1',
				'fb_url' => '#',
				'tw_url' => '#',
				'image' => 'images/doctors/01.jpg',
				'slug' => 'Dr.-Rinks-Cooper',
				'created_at' => '2018-11-27 11:45:30',
				'updated_at' => '2018-11-27 11:45:30',

			],

			[
				'id' => '6',
				'name' => 'Dr. JD Scot',
				'position' => 'Cardiologist',
				'monday' => '0',
				'tuesday' => '1',
				'wednesday' => '0',
				'thursday' => '0',
				'friday' => '0',
				'saturday' => '1',
				'sunday' => '0',
				'fb_url' => '#',
				'tw_url' => '#',
				'image' => 'images/doctors/01.jpg',
				'slug' => 'Dr.-JD-Scot',
				'created_at' => '2018-11-27 11:45:30',
				'updated_at' => '2018-11-27 11:45:30',

			],

			[
				'id' => '7',
				'name' => 'Dr. Haris Morgan',
				'position' => 'Orthopedic',
				'monday' => '0',
				'tuesday' => '0',
				'wednesday' => '1',
				'thursday' => '0',
				'friday' => '0',
				'saturday' => '1',
				'sunday' => '0',
				'fb_url' => '#',
				'tw_url' => '#',
				'image' => 'images/doctors/01.jpg',
				'slug' => 'Dr.-Haris-Morgan',
				'created_at' => '2018-11-27 11:47:26',
				'updated_at' => '2018-11-27 11:47:26',

			],

			[
				'id' => '8',
				'name' => 'Dr. Kips Jordan',
				'position' => 'Dentist',
				'monday' => '1',
				'tuesday' => '0',
				'wednesday' => '0',
				'thursday' => '0',
				'friday' => '1',
				'saturday' => '0',
				'sunday' => '0',
				'fb_url' => '#',
				'tw_url' => '#',
				'image' => 'images/doctors/01.jpg',
				'slug' => 'Dr.-Kips-Jordan',
				'created_at' => '2018-11-27 11:47:26',
				'updated_at' => '2018-12-05 07:00:36',

			],

		];
		foreach ($rows as $row) {
			DB::table('Pharmacists')->insert($row);
		}
	}
}