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

class Poliklinik extends Model
{

    use SoftDeletes;

    protected $table = "polikliniks";

    protected $fillable = ["name"];

    public function dokter(){
        return $this->belongsTo(Dokter::class,'id','poliklinik_id');
    }

}
