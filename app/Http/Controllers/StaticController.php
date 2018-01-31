<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Company;
use App\Model\Page;
use App\Model\Milestone;
use App\Model\Vision;
use App\Model\Mission;
use App\Model\Initiative;

class StaticController extends Controller
{
    
    
    public function aboutIndex()
    {
        $about = \Cache::remember('abouts', $this->cacheLong, function () {
            return Page::where('name', '=', 'about-static')->first();
        });
        $milestoneImg = \Cache::remember('milestone-image', $this->cacheLong, function () {
            return Page::where('name', '=', 'milestone-static')->first();
        });
        $strategicImg = \Cache::remember('strategic-image', $this->cacheLong, function () {
            return Page::where('name', '=', 'strategic-static')->first();
        });
        $milestones = \Cache::remember('milestones', $this->cacheLong, function () {
            return  Milestone::orderBy('year', 'ASC')->published()->get();
        });
        $companies = \Cache::remember('companies', $this->cacheLong, function () {
            return  Company::asc()->published()->get();
        });
        $visions = \Cache::remember('visions', $this->cacheLong, function () {
            return  Vision::asc()->published()->get();
        });
        $missions = \Cache::remember('missions', $this->cacheLong, function () {
            return  Mission::asc()->published()->get();
        });
        $initiatives = \Cache::remember('initiatives', $this->cacheLong, function () {
            return  Initiative::asc()->published()->get();
        });
        return view('statics.about', [
            'about'          => $about,
            'milestoneImage' => $milestoneImg,
            'milestones'     => $milestones,
            'companies'      => $companies,
            'strategicImage' => $strategicImg,
            'visions'        => $visions,
            'missions'       => $missions,
            'initiatives'    => $initiatives
        ]);
    }
    
}
