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

<<<<<<< HEAD
=======
    public function showCleanerManagementPage()
    {
        return view('admins.cleaners.cleaners_management');
    }

>>>>>>> 344b6fa7bb010f01e6c8894fdf3cf081f9e3f9a1
    public function showModalDelete()
    {
        return view('admins.cleaners.modal.cleaner_delete_modal');
    }

<<<<<<< HEAD
=======
    public function showCreateCleanerPage()
    {
        return view('admins.cleaners.create_cleaner');
    }

>>>>>>> 344b6fa7bb010f01e6c8894fdf3cf081f9e3f9a1
}

