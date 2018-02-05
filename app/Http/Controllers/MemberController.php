<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Member;
use App\Model\Company;
use App\Model\Page;

class MemberController extends Controller
{
    public function index() 
    {
        $members   = Member::asc()->published()->get();
        $companies = Company::asc()->published()->get();
        $memberImg = Page::where('name', '=', 'members-static')->first();
        return view('members.index', [
            'members'      => $members,
            'companies'    => $companies,
            'membersImage' => $memberImg,
            'active'       => 'member'
        ]);
    }
}
