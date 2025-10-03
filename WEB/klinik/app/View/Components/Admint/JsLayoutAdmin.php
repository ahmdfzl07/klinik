<?php
/*
 * Copyright (c) 2024.
 * Develop By: ahmad faizal azizi
 * Github: https://github.com/ahmdfzl07
 * Phone : 0857-7032-2355
 * Email : ahmadfaizal@gmail.com
 */

namespace App\View\Components\Admint;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class JsLayoutAdmin extends Component
{

    public function __construct()
    {
        //
    }

    public function render(): View|Closure|string
    {
        return view('components.admint.js-layout-admin');
    }
}
