<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ModulFakerSeed extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');
 
		for ($i = 0; $i < 90; $i++) {
			$jk = $faker->randomElement(['pria', 'wanita']);

			if ($jk == "pria") {
				$gender = "male";
			} else {
				$gender = "female";
			}

			$data = [
				'judul_modul' => $faker->name($gender),	
				'level' => $faker->randomElement(['mudah', 'menengah', 'sulit']),
				'kategori' => $faker->randomElement(['Android', 'Pemrograman Dasar', 'Web']),
				'deskripsi' => '<p><span style="color: rgb(0, 0, 0); font-family: "Open Sans", Arial, sans-serif; font-size: 14px; text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span><br></p>',
                'email' => 'admin@gmail.com',
                'cover' => '1671300010_db2caa95eba5d5fcbc25.png'
			];

			// $data = [
			// 	'rating' => $faker->randomElement([1, 2, 3, 4, 5]),
			// 	'id_modul' => $faker->randomElement(range(60, 160))
			// ];

			$this->db->table('modul')->insert($data);
		}
    }
}
