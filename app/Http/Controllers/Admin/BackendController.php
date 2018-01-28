<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BackendController extends Controller
{
    public function index()
    {
        if (\Auth::user()) {
            return view('admins.backends.index');
        }
        return redirect()->route('backend.login');
    }

}
