<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator, Redirect, Response;
use App\products;
use Session;

class cartController extends Controller
{
    //
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
            "photo" => $product->image,
            "properties" => $product->properties
  
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
        'id' => $product->id,
        'slug' => $product->slug,
        "name" => $product->title,
        "quantity" => 1,
        "price" => $product->discounted_price,
        "photo" => $product->image,
        "properties" => $product->properties
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
   public function updateCart(Request $request)
    {
  
      // if($request->id and $request->quantity)
      // {
      //     $cart = session()->get('cart');
  
      //     $cart[$request->id]["quantity"] = $request->quantity;
  
      //     session()->put('cart', $cart);
  
      //     $subTotal = $cart[$request->id]['quantity'] * $cart[$request->id]['price'];
  
      //     $total = $this->getCartTotal();
  
  
      //   return redirect()->back()->with('success', 'Product updated to cart successfully!');
  
      //   // $htmlCart = view('_header_cart')->render();
  
      //   // return response()->json(['msg' => 'Cart updated successfully', 'data' => $htmlCart, 'total' => $total, 'subTotal' => $subTotal]);
  
      //   //session()->flash('success', 'Cart updated successfully');
      // }
  
  
      if ($request->id and $request->quantity) {
        $id = $request->id;
        $quantity = $request->quantity;
  
        if ($quantity == 1) {
          return;
        }
  
        $product = products::find($id);
  
        if ($quantity > $product->quantity) {
          return response()->json(['error' => true, 'msg' => 'Less item in stock', 'error_no' => 3, 'type' => 'lessItemsInStock']);
        }
  
        if (!$product) {
          abort(404);
        }
  
  
  
        $cart = session()->get('cart');
        $cart[$request->id]["quantity"] = $request->quantity;
        session()->put('cart', $cart);
        return response()->json(['error' => false, 'msg' => 'Item updated', 'error_no' => 2, 'type' => 'itemUpdateInCart', 'count' => count(session('cart')), 'json' => json_encode(session('cart'))]);
      }
    }
  
    public function deleteCart(Request $request)
    {
      if ($request->id) {
        $cart = session()->get('cart');
        if (isset($cart[$request->id])) {
          unset($cart[$request->id]);
          session()->put('cart', $cart);
        }
        // $message = "thanks";
        // Notify::success($message, $title = null, $options = []);
        // Notify::success('require body', 'optional title');
        // session()->put('warning','This is for warning.');
        return response()->json(['error' => false, 'msg' => 'Item Deleted', 'error_no' => 4, 'type' => 'deleteItemInCart', 'count' => count(session('cart')), 'json' => json_encode(session('cart'))]);
      }
    }
}
