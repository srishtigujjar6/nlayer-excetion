<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Exception;
use App\Exceptions\CustomException;
use App\Exceptions\SkipHandlerCustomException;
use App\Traits\APIResponseTrait;

class CheckException
{
    use APIResponseTrait;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        try{
            $response = $next($request);
            return $response;
        }catch(CustomException $ex){
            return $this->responseNotFound($ex->getMessage());
        }catch(SkipHandlerCustomException $ex){
            // dump('RETURN exception ELSE SkipHandlerCustomException');
            return $this->responseNotFound($ex->getMessage());
        }catch(Exception $ex){ 
            return $this->responseServerError($ex->getMessage());
        }
        
    }

}
