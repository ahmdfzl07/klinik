<?php
/*
 * Copyright (c) 2024.
 * Develop By: ahmad faizal azizi
 * Github: https://github.com/ahmdfzl07
 * Phone : 0857-7032-2355
 * Email : ahmadfaizal@gmail.com
 */

namespace App\Http\Controllers\Pendaftaran;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    protected User $users;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->users = Auth::user();
            return $next($request);
        });
    }

    public function index()
    {
        return view('front.dashboard', array(
            'title' => "Dashboard Administrator | Klinik v.1",
            'firstMenu' => 'dashboard',
            'secondMenu' => 'dashboard',
        ));
    }
}
