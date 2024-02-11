<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $toastrnotif = array(
            'message' => 'User Logout Successfully',
            'alert-type' => 'success'
        );

        return redirect('/login')->with($toastrnotif);
    } //end

    public function Profile()
    {
        $id = Auth::user()->id;
        $adminData = User::find($id);
        return view('admin.profile', compact('adminData'));
    } //end

    public function EditProfile()
    {
        $id = Auth::user()->id;
        $editData = User::find($id);
        return view('admin.profile_edit', compact('editData'));
    } //end
    public function StoreProfile(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->username = $request->username;
        if ($request->file('profile_img')) {
            $file = $request->file('profile_img');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/admin_img'), $filename);
            $data['profile_image'] = $filename;
        }
        $data->save();

        $toastrnotif = array(
            'message' => 'Profile Successfully Updated',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.profile')->with($toastrnotif);
    } //end

    public function ChangePwd()
    {
        return view('admin.admin_change_pwd');
    } //end

    public function UpdatePwd(Request $request)
    {
        $validateData = $request->validate([
            'oldpassword' => 'required',
            'newpassword' => 'required',
            'conf_password' => 'required|same:newpassword',
        ]);
        $hashPassword = Auth::user()->password;
        if (Hash::check($request->oldpassword, $hashPassword)) {
            $users = User::find(Auth::id());
            $users->password = bcrypt($request->newpassword);
            $users->save();

            session()->flash('message', 'Password Upadated Sucessfully');
            return redirect()->back();
        } else {
            session()->flash('message', 'Old Password is NOT MATCH');
            return redirect()->back();
        }
    } //end
}
