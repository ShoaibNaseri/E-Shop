<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller
{
    //
    public function loginPage()
    {
        return view('cms.auth.login');
    }
    public function register()
    {
        return view('cms.auth.register');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        $admin = new Admin();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $admin->save();
        return redirect()->route('adminLoginPage');
    }
    public function login(Request $request)
    {


        $request->validate([
            'name' => 'required',
            'password' => 'required|min:6',
        ]);

        $admin = Admin::where('name', $request->name)->first();

        if ($admin) {
            if (Hash::check($request->password, $admin->password)) {
                auth('admin')->login($admin);
                return redirect()->route('adminDashboard');
            } else {
                return redirect()->back()->with('error', 'Password is incorrect');
            }
        } else {
            return redirect()->back()->with('error', 'Email is incorrect');
        }
    }
    public function logout()
    {
        auth('admin')->logout();
        return redirect()->route('adminLoginPage');
    }
}
