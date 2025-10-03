<?php
/*
 * Copyright (c) 2024.
 * Develop By: ahmad faizal azizi
 * Github: https://github.com/ahmdfzl07
 * Phone : 0857-7032-2355
 * Email : ahmadfaizal@gmail.com
 */

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        $this->call([
            ProdusenSeeder::class,
            PoliklinikSeeder::class,
            RoleSeeder::class,
            KategoriObatSeeder::class,
            GolonganObatSeeder::class,
            UserSeeder::class,
            KaryawansSeeder::class,
            DokterSeeder::class,
        ]);
    }
}
