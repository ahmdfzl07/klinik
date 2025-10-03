<?php
/*
 * Copyright (c) 2024.
 * Develop By: ahmad faizal azizi
 * Github: https://github.com/ahmdfzl07
 * Phone : 0857-7032-2355
 * Email : ahmadfaizal@gmail.com
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\KategoriRequest;
use Exception;
use App\Services\Admin\KategoriService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{

    protected $users;
    protected KategoriService $kategoriService;

    public function __construct(KategoriService $kategoriService)
    {
        $this->middleware(function ($request, $next) {
            $this->users = Auth::user();
            return $next($request);
        });
        $this->kategoriService = $kategoriService;
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return $this->kategoriService->index($request);
        }

        return view('admin.kategori', array(
            'title' => "Dashboard Administrator | Klinik v.1",
            'firstMenu' => 'myData',
            'secondMenu' => 'kategori',
        ));
    }

    public function store(KategoriRequest $request)
    {
        $request->validated();
        DB::beginTransaction();
        try{
            $this->kategoriService->save($request);
            DB::commit();
            return redirect(route('adm.kategori'))->with(['success' => "Data Kategori berhasil ditambahkan!"]);
        }catch (Exception $e){
            DB::rollback();
            return redirect(route('adm.kategori'))->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function update(KategoriRequest $request)
    {
        $request->validated();
        DB::beginTransaction();
        try{
            $this->kategoriService->update($request);
            DB::commit();
            return redirect(route('adm.kategori'))->with(['success' => "Data Kategori berhasil diperbaharui!"]);
        }catch (Exception $e){
            DB::rollback();
            return redirect(route('adm.kategori'))->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function destroy(KategoriRequest $request)
    {
        $request->validated();
        DB::beginTransaction();
        try{
            $id = base64_decode($request->kategori_id);
            $this->kategoriService->delete($id);
            DB::commit();
            return redirect(route('adm.kategori'))->with(['delete' => "Data Kategori berhasil dihapus!"]);
        }catch (Exception $e){
            DB::rollback();
            return redirect(route('adm.kategori'))->withErrors(['error' => $e->getMessage()]);
        }
    }
}
