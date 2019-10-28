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

    if (!Session::get('logged_in')) {
      return redirect('/login');
    }

    $user = custom::where('email', Session::get('email'))->first();
    // dd($user);
    return view('customer-account', compact('user'));
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
  public function ajaxDesc(Request $req)
  {
    $product = products::find($req->id);
    return response()->json(['error' => false, 'msg' => 'desc successful', 'data' => $product]);
  }


  public function addToCart($id)
  {

    $product = products::find($id);
    if (!$product) {

      abort(404);
    }

    $cart = session()->get('cart');

    // if cart is empty then this the first product
    if (!$cart) {

      $cart = [
        $id => [
          'id' => $product->id,
          'slug' => $product->slug,
          "name" => $product->title,
          "quantity" => 1,
          "price" => $product->discounted_price,
          "photo" => $product->image
        ]
      ];

      session()->put('cart', $cart);


      //return response()->json(['msg' => 'Product added to cart successfully!']);

      return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
    // if cart not empty then check if this product exist then increment quantity
    if (isset($cart[$id])) {

      $cart[$id]['quantity']++;

      session()->put('cart', $cart);

      //  $htmlCart = view('_header_cart')->render();

      //return response()->json(['msg' => 'Product added to cart successfully!']);

      return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    // if item not exist in cart then add to cart with quantity = 1
    $cart[$id] = [
      "name" => $product->name,
      "quantity" => 1,
      "price" => $product->price,
      "photo" => $product->photo
    ];

    session()->put('cart', $cart);

    // $htmlCart = view('_header_cart')->render();

    //return response()->json(['msg' => 'Product added to cart successfully!']);

    return redirect()->back()->with('success', 'Product added to cart successfully!');
  }

  public function showCart()
  {
    return view('cart');
    // return session('cart');
  }

  private function getCartTotal()
  {
    $total = 0;

    $cart = session()->get('cart');

    foreach ($cart as $id => $details) {
      $total += $details['price'] * $details['quantity'];
    }

    return number_format($total, 2);
  }
}
