<?php
namespace App\Http\Controllers;

use Inertia\Inertia;

class UserController extends Controller
{
    public function dashboard()
    {
        return Inertia::render('User/Dashboard')->rootView('app2');
    }
}
