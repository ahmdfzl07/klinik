<?php
/*
 * Copyright (c) 2024.
 * Develop By: ahmad faizal azizi
 * Github: https://github.com/ahmdfzl07
 * Phone : 0857-7032-2355
 * Email : ahmadfaizal@gmail.com
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Karyawans extends Model
{

    use SoftDeletes;

    protected $table = "karyawans";

    protected $fillable = ["user_id","nip","alamat","phone","sex","tanggal_bergabung","status"];

    public function dokter()
    {
        return $this->hasOne(Dokter::class,'karyawan_id','id')->with('poli');
    }
}
