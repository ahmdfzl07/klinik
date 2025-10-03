<?php
/*
 * Copyright (c) 2024.
 * Develop By: ahmad faizal azizi
 * Github: https://github.com/ahmdfzl07
 * Phone : 0857-7032-2355
 * Email : ahmadfaizal@gmail.com
 */

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CekRole
{
    /**
         * Author: ahmadfaizal
         * Email: ahmadfaizal@gmail.com
         * Phone: 082371408678
         * Github: https://github.com/ahmdfzl07
         */


    public function handle(Request $request, Closure $next): Response
    {
        $roles = $this->CekRoute($request->route());
        if ($request->user()->hasRole($roles) || !$roles) {
            return $next($request);
        }
        return abort(404, 'NOT FOUND');
    }

    private function CekRoute($route)
    {
        $action = $route->getAction();
        return isset($action['roles']) ? $action['roles'] : null;
    }
}
