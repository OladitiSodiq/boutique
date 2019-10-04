<?php

namespace App\Http\Middleware;

use Session;
use Closure;


class isAdmin
{
  /**
   * Handle an incoming request.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \Closure  $next
   * @return mixed
   */
  public function handle($request, Closure $next)
  {
    if (Session::get('role') != 1000) {
      return redirect()->route('login');
    }
    return $next($request);
  }
}
