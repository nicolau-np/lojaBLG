<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class setLanguage
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
        if(!$request->language){
            return redirect('/pt');
         }
         if ($request->language == "pt" || $request->language == "en") {
             App::setLocale($request->language);
             return $next($request);
         }
         return back()->with(['error' => "Não encontrou linguagem"]);
    }
}