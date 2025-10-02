<?php
/*
 * Copyright (c) 2024.
 * Develop By: ahmad faizal azizi
 * Github: https://github.com/ahmdfzl07
 * Phone : 0857-7032-2355
 * Email : ahmadfaizal@gmail.com
 */

namespace App\Services\Admin;

use App\Http\Requests\Admin\DokterRequest;
use App\Http\Requests\Admin\KaryawanRequest;
use Illuminate\Http\Request;

interface KaryawanService
{

    public function index(Request $request);

    public function save(KaryawanRequest $request);

    public function update(KaryawanRequest $request);

    public function delete(string $request);

    /**
     *  Dokter
     */
    public function index_dokter(Request $request);

    public function save_dokter(DokterRequest $request);

    public function update_dokter(DokterRequest $request);


}
