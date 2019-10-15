<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator, Redirect, Response;
use App\custom;
use App\products;
use Session;
use DB;

class c_ustomer extends Controller
{

  public function login(Request $request)
  {

    $this->validate($request, [
      'email' => 'required',
      'password' => 'required'
    ]);

    $username = $request['email'];
    $form_password = $request['password'];

    $user = DB::table('customer_details')
      ->where('email', $username)
      ->orWhere('username', $username)
      ->first();

    if ($user == '') {
      Session::flash('flash', 'Invalid email/password combination');
      return redirect()->route('login');
    }

    $db_password = $user->password;

    $password_match = password_verify($form_password, $db_password);

    if ($password_match) {
      Session::put('logged_in', true);
      Session::put('role', $user->role);
      Session::put('name', $user->firstname . ' ' . $user->lastname);
      Session::put('username', $user->username);
      Session::put('user_id', $user->id);
      Session::put('email', $user->email);


      return redirect('/');
    } else {
      Session::flash('flash', 'Invalid username/password combination');
      return redirect()->route('login');
    }
  }
  public function register(Request $request)
  {
    $this->validate($request, [
      'username' => 'required',
      'password' => 'required',
      'email' => 'required',
    ]);

    $user = new custom();
    $user->username = $request->username;
    $user->email = $request->email;
    $user->password = password_hash($request->password, PASSWORD_BCRYPT);

    if ($user->save()) {
      Session::flash('flash', 'Registration successful, You can now login.');
      Session::put('name', $user->username);
      return redirect('/register_success');
    } else {
      Session::flash('flash', 'Registration Un successful');
      return redirect('/');
    }
  }
  public function cus_accoutnt(Request $req)
  {
    return view('customer-account');
  }
  public function order_view(Request $reqs)
  {
    return view('customer-order');
  }
  public function orders_view(Request $class)
  {
    return view('customer-orders')->with('active', $class);
  }
  public function chnge_pword(Request $reqss)
  {
    return view('change_password');
  }
  public function productLandingPage()
  {

    $all = products::all();

    $mens = 'men';
    $men = products::where('category', $mens)->get();

    $females = 'female';
    $female = products::where('category', $females)->get();

    return view('index', compact('all', 'men', 'female'));
  }
}
