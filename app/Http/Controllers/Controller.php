<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Model\Page;
use App\Model\SocialMedia;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $cacheShort;
    protected $cacheMedium;
    protected $cacheLong;

    public function __construct() 
    {
        $this->cacheShort  = env('CACHE_BUFFER_SHORT', 1);
        $this->cacheMedium = env('CACHE_BUFFER_MEDIUM', 15);
        $this->cacheLong   = env('CACHE_BUFFER_LONG', 60);
        $socialMedia     = \Cache::remember('socmed', $this->cacheMedium, function () {
            return SocialMedia::asc()->published()->get();
        });
        $companyAddress  = \Cache::remember('company-address', $this->cacheMedium, function () {
            return Page::where('name', '=', 'address-static')->first();
        });

        \View::share([
            'socialMedia'    => $socialMedia,
            'companyAddress' => $companyAddress
        ]);
    }

    /**
     * Get Controller name without 'Controller' postfix
     * @return string
     */
    protected function getControllerName()
    {
        return preg_replace("/(.*)[\\\\](.*)(Controller)/", '$2', get_class($this));
    }

}
