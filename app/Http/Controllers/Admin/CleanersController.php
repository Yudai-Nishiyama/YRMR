<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Profile;

class CleanersController extends Controller
{
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

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

        return redirect()->route('admin.cleaners.CleanerManagementPage')->with('success', 'Cleaner deleted successfully');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'username' => 'required|string|max:255|unique:users', // 画像では varchar(255) かつ ユーザーテーブル内で一意
            'email' => 'required|string|email|max:100|unique:users', // 画像では varchar(100) かつ ユーザーテーブル内で一意
            'password' => 'required|string|min:6', // パスワードについては画像からは情報が得られないが、一般的に最小6文字が望ましい
            'phone_number' => 'required|string|max:20', // 画像では varchar(20)
            'address' => 'required|string|max:100', // 画像では varchar(100)
        ]);

        \DB::beginTransaction();
        try {
            $user = new User; // 新しいインスタンスを作成
            $user->username = $request->username;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->role_id = 3; // CleanerのロールIDを設定
            $user->save();

            $profile = new Profile; // 新しいProfileインスタンスを作成
            $profile->first_name = $request->first_name;
            $profile->last_name = $request->last_name;
            $profile->phone_number = $request->phone_number;
            $profile->address = $request->address;
            $user->profile()->save($profile); // ユーザーにプロファイルを関連付けて保存

            \DB::commit(); // トランザクションをコミット

            return redirect()->route('admin.cleaners.CleanerManagementPage')->with('success', 'Cleaner Account created successfully');
        } catch (\Exception $e) {
            \DB::rollback(); // エラーがあればロールバック
            
            // エラーログを出力する
            \Log::error('An error occurred: ' . $e->getMessage(), [
                'exception' => $e,
            ]);
            
            // ユーザーにエラーメッセージを表示して元のページに戻す
            return redirect()->back()->withErrors('An error occurred: ' . $e->getMessage())->withInput();
        }
    }
}