<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator, Redirect, Response;
use App\products;
use App\whishlist;
use Session;
use DB;

class wishlistController extends Controller
{
    //
    public function wishlist(Request $reqss)
    {
  
      if (Session::get('logged_in')) {
  
  
        // session()->put('counts', $counts); 
  
        $user_id = Session::get('user_id');
        $products = DB::table('whishlists')
          ->join('customer_details', 'customer_details.id', '=', 'whishlists.user_id')
          ->join('product', 'product.id', '=', 'whishlists.product_id')
          ->select('product.*')
          ->get();
        $productss = $products->count();
      } else {
        $products = session()->get('wishlist');
      }
      return view('wishlist', compact('products'));
    }
   public function addTowishlist($id)
    {
      $product = products::find($id);
      if (!$product) {
  
        abort(404);
      }
  
      $wishlist = session()->get('wishlist');
      if (!$wishlist) {
  
        $wishlist = [
          $id => [
            'id' => $product->id,
            "name" => $product->title,
            "price" => $product->discounted_price,
            'slug' => $product->slug,
            "photo" => $product->image,
            'cat' => $product->category,
            'discounted_price' => $product->discounted_price,
            'full_price' => $product->full_price
          ]
        ];
  
        session()->put('wishlist', $wishlist);
  
        if (Session::get('email')) {
          $wishlist = new whishlist();
          $wishlist->product_id = $id;
          $wishlist->user_id = Session::get('username');
          $wishlist->save();
        }
        // return response()->json(['error' => false, 'msg' => 'Added to wishlist successfully', 'error_no' => 1, 'type' => 'itemAddedToWishlist', 'count' => count(session('wishlist')), 'json' => json_encode($wishlist), 'itemTitle' => $wishlist[$id]['name']]);
        return redirect()->back()->with('success', 'product added to wishlist successfully!');
      }
  
  
      $wishlist = session()->get('wishlist');
      if (isset($wishlist[$id])) {
        unset($wishlist[$id]);
  
        if (Session::get('logged_in')) {
          //delete the wishlist for the user.
        }
        session()->put('wishlist', $wishlist);
        return response()->json(['error' => false, 'msg' => 'Item Deleted', 'error_no' => 4, 'type' => 'deleteItemInWishlist', 'count' => count(session('wishlist')), 'json' => json_encode(session('wishlist'))]);
      }
  
      // if item not exist in wishlist then add to wishlist 
      $wishlist[$id] = [
        'id' => $product->id,
        "name" => $product->title,
        "price" => $product->discounted_price,
        "photo" => $product->image,
        'slug' => $product->slug,
        'cat' => $product->category,
        'discounted_price' => $product->discounted_price,
        'full_price' => $product->full_price
      ];
      session()->put('wishlist_ids', $id);
      session()->put('wishlist', $wishlist);
      if (Session::get('email')) {
        $wishlist = new whishlist();
        $wishlist->product_id = $id;
        $wishlist->user_id = Session::get('user_id');
        $wishlist->save();
      }
  
      return response()->json(['error' => false, 'msg' => 'Added to wishlist successfully', 'error_no' => 1, 'type' => 'itemAddedToWishlist', 'count' => count(session('wishlist')), 'json' => json_encode(session('wishlist')), 'itemTitle' => $wishlist[$id]['name']]);
    }
}
