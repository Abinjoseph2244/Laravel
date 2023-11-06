<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    // use AuthenticatesUsers;

    protected $redirectTo = '/admin/dashboard'; // Redirect after login

    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function showLoginForm()
    {
        return view('admin_login');
    }

    protected function guard()
    {
        return Auth::guard('admin');
    }
}
