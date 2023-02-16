<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Exceptions\SkipHandlerCustomException;

class SkipHandlerCustomExceptionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Check used is user blocked
        dump('fjkdsfkfjkdsfkfjkdsfk');
        // $i = 0;
        $i = 1;
        if($i == 1){
            dump('fjhjg');
            // throw new SkipHandlerCustomException('HEY THERE U R DOING IT WRONG');
        }
        return $next($request);
    }
}
