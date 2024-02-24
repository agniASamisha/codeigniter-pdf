<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class BlogSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create();

        for ($i = 0; $i < 2000; $i++) {
            $data = [
                'title' => $faker->sentence(),
                'content' => $faker->paragraph(),
                'created_at' => $faker->dateTimeThisMonth()->format('Y-m-d H:i:s'),
                'updated_at' => $faker->dateTimeThisMonth()->format('Y-m-d H:i:s'),
            ];

            $this->db->table('blog')->insert($data);
        }
    }
}
