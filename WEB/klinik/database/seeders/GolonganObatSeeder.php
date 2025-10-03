<?php
/*
 * Copyright (c) 2024.
 * Develop By: ahmad faizal azizi
 * Github: https://github.com/ahmdfzl07
 * Phone : 0857-7032-2355
 * Email : ahmadfaizal@gmail.com
 */

namespace Database\Seeders;

use App\Models\Golongan_obat;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class GolonganObatSeeder extends Seeder
{

    public function run(): void
    {
        $result = [];
        $temp1 = ["obat bebas", "obat bebas terbatas", "obat keras"];
        $date = Carbon::now()->format('Y-m-d H:i:s');
        for ($i = 0; $i < count($temp1); $i++) {
            $temp2 = ['name' => $temp1[$i],'created_at' => $date,'updated_at' => $date];
            array_push($result, $temp2);
        }
        Golongan_obat::insert($result);
    }
}
