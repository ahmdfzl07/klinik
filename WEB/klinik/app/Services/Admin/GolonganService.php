<?php
/*
 * Copyright (c) 2024.
 * Develop By: ahmad faizal azizi
 * Github: https://github.com/ahmdfzl07
 * Phone : 0857-7032-2355
 * Email : ahmadfaizal@gmail.com
 */

namespace App\Services\Admin;

use App\Http\Requests\Admin\GolonganRequest;
use Illuminate\Http\Request;

interface GolonganService
{

    public function index(Request $request);

    public function save(GolonganRequest $request):void;

    public function update(GolonganRequest $request):void;

    public function delete(int $id):void;

}
