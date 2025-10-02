<?php
/*
 * Copyright (c) 2024.
 * Develop By: ahmad faizal azizi
 * Github: https://github.com/ahmdfzl07
 * Phone : 0857-7032-2355
 * Email : ahmadfaizal@gmail.com
 */

namespace App\Models;


use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pasien extends Model
{
    use SoftDeletes;

    protected $table = "pasiens";
    protected $appends = ['age'];
    protected $fillable = ['kode_pasien','nama_lengkap','tanggal_lahir','tempat_lahir','sex','agama','pendidikan','phone','gol_darah','pekerjaan','alamat'];

    protected function getAgeAttribute(): int
    {
        return Carbon::parse($this->attributes['tanggal_lahir'])->age;
    }

}
