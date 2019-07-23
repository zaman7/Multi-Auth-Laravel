<?php

namespace App\Http\Controllers\Auth\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout','adminLogout');
    }

    public function showLoginForm()
    {
        return view('auth.admin.login');
    }

    public function login(Request $request)
    {
        $this->validateLogin($request);
        if (Auth::guard('admin')->attempt($this->credentials($request), $request->remember)){
            if ($request->has('previous')) {
                return Redirect::to($request->previous);
            }
            return redirect()->route('admin');
        }
        else{
            return redirect()->back()->with('status', 'Email Or Password Not match!')->withInput($request->only('email','remember'));
        }

    }

    protected function validateLogin($request){
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string|min:8',
        ]);
    }

    protected function credentials($request){
        return [
            'email' => $request->email,
            'password' => $request->password
        ];
    }


    public function adminLogout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        return $this->loggedOut($request) ?: redirect('/');
    }

    /**
     * The user has logged out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    protected function loggedOut(Request $request)
    {
        //
    }

}
