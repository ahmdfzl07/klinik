<?php
/*
 * Copyright (c) 2024.
 * Develop By: ahmad faizal azizi
 * Github: https://github.com/ahmdfzl07
 * Phone : 0857-7032-2355
 * Email : ahmadfaizal@gmail.com
 */

namespace App\Services\Admin;

use App\Http\Requests\Admin\PoliklinikRequest;
use Illuminate\Http\Request;

interface PoliklinikService
{

    public function index(Request $request);

    public function save(PoliklinikRequest $request):void;

    public function update(PoliklinikRequest $request):void;

    public function delete(string $id):void;

}
