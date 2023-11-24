<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CleanersController extends Controller
{
    public function showCleanersPage()
    {
        return view('admins.cleaners.cleaners_page');
    }
}
