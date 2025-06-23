<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminAuth
{
    public function handle(Request $request, Closure $next)
    {
        if (! session('adminId')) {
            return redirect()->route('admin.login')->with('error', 'Please login first.');
        }

        return $next($request);
    }
}
