<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Hash;
//use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class CustomAuthController extends Controller
{
    public function index()
    {
        //return view('auth.login');
        return view('BackLab.login');
        
    }  
      
    public function customLogin(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('name', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')->withSuccess('Signed in');
        }
  
        return redirect("login")->withSuccess('Login details are not valid');
    }
    
    public function dashboard()    
    {
        return view('auth.dashboard');
        if(Auth::check()){
            return view('auth.dashboard');
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }
   
    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}