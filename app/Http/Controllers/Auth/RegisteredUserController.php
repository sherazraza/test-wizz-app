<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Inertia\Inertia;
use Inertia\Response;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): Response
    {
        return Inertia::render('Auth/Register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name'                => 'required|string|max:255',
            'email'               => 'required|string|lowercase|email|max:255|unique:' . User::class,
            'password'            => ['required', 'confirmed', Rules\Password::defaults()],
            'edit_image_per_year' => 'nullable|string',
            'edit_image_time'     => 'nullable|string',
            'next_upload'         => 'nullable|string',
            'privacy_policy'      => 'required|boolean',
        ]);

        $user = User::create([
            'name'                => $request->name,
            'email'               => $request->email,
            'password'            => Hash::make($request->password),
            'edit_image_per_year' => $request->edit_image_per_year,
            'edit_image_time'     => $request->edit_image_time,
            'next_upload'         => $request->next_upload,
            'privacy_policy'      => $request->privacy_policy,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
