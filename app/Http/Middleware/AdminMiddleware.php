<?php

namespace App\Http\Middleware;

use App\Enums\UserRoleEnum;
use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{

    public function handle(Request $request, Closure $next)
    {
       if (!auth()->check()|| auth()->user()->role!==UserRoleEnum::ADMIN)
       {
           return redirect()->route('login');
       }
    }
}
