<?php

namespace App\Http\Middleware;

use Closure, Session, Auth;

class LocaleDetect
{
    /**
     * The availables languages.
     *
     * @array $languages
     */
    protected $languages = [
        'en' => 'en_US',
        'id' => 'id_ID'
    ];

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!Session::has('locale'))
        {
            Session::put('locale', 'en');
        }

        if ($request->has('lang') &&
            array_key_exists($request->lang, $this->languages) && 
            Session::get('locale') !== $this->languages[$request->lang]
        ) {
            Session::put('locale', $this->languages[$request->lang]);
        }
        
        app()->setLocale(Session::get('locale'));

        return $next($request);
    }
}
