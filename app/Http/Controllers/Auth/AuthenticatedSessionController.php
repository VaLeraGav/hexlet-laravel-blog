<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;

class AuthenticatedSessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
//        $credentials = $request->validate([
//            'email' => 'required',
//            'password' => 'required',
//        ]);
//        //      var_dump($credentials);
//        if (!Auth::attempt($credentials, $request->boolean('remember'))) {
//            throw ValidationException::withMessages([
//                'email' => 'WRONG',
//            ]);
//        }
        $validators = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);
        if ($validators->fails()) {
            throw ValidationException::withMessages([
                'email' => 'WRONG',
            ]);
        }
        $request->session()->regenerate();
        return redirect()->intended('/articles');
    }


    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
