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

    public function showCleaningProgressPage()
    {
        return view('admins.cleaners.cleaning_progress_page');
    }

    public function showCheckCleaningProgressReport()
    {
        return view('admins.cleaners.check_cleaning_progress_report');
    }

    public function showModalDelete()
    {
        return view('admins.cleaners.modal.cleaner_delete_modal');
    }

}

