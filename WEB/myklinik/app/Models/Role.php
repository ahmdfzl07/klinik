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

class Role extends Model
{

    protected $table = "roles";
    protected $guarded = ['name'];

    public function scopeKaryawan($query)
    {
        return $query->where('id', '!=', 1)->where('id', '!=', 2)->where('id', '!=', 6)->where('id', '!=', 4);
    }
}
