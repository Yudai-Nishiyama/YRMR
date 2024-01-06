<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

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

    public function CleanerManagementPage()
    {
        $cleaners = User::where('role_id', 3)->with('profile')->get();

        return view('admins.cleaners.cleaners_management', ['cleaners' => $cleaners]);
    }

    public function showModalDelete()
    {
        return view('admins.cleaners.modal.cleaner_delete_modal');
    }

    public function showCreateCleanerPage()
    {
        return view('admins.cleaners.create_cleaner');
    }

    public function destroy($id)
    {
        $cleaner = Cleaner::findOrFail($id);
        $cleaner->delete();

        return redirect()->route('cleaner.index')->with('success', 'Cleaner deleted successfully');
    }
}

