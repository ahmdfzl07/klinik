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

class Dokter extends Model
{

    use SoftDeletes;

    protected $table = "dokters";

    protected $fillable = ["karyawan_id","poliklinik_id","no_izin"];

    public function poli()
    {
        return $this->belongsTo(Poliklinik::class,'poliklinik_id','id');
    }
}
