<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CleanerController extends Controller
{

    public function showCleaningTask()
    {
        return view('cleaners.view_cleaning_task');
    }

    public function showCleanerPage()
    {
        return view('cleaners.cleaning_page');
    }
}
