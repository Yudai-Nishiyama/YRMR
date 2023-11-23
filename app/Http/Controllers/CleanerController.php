<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CleanerController extends Controller
{

    public function showTask()
    {
        return view('cleaners.view_cleaning_task');
    }
}
