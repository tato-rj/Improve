<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class DetectLanguage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $browserLang = $this->getBrowserLanguage($request);
        
        $lang = \Session::has('lang') ? \Session::get('lang') : $browserLang;

        app()->setLocale($lang);

        return $next($request);
    }

    public function getBrowserLanguage(Request $request)
    {
        $string = $request->server('HTTP_ACCEPT_LANGUAGE');

        $array = explode(',', $string);

        try {
            return substr($array[0], 0, 2);
        } catch (\Exception $e) {
            return 'en';
        }
    }
}
