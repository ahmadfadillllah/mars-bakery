<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{
    //
    public function index()
    {
        return view('admin.dashboard.profil');
    }

    public function changepassword(Request $request)
    {
        $request->validate([
            'passwordlama' => ['required', 'min:8'],
            'passwordbaru' => ['required', 'min:8'],
        ],
        [
            'passwordlama.min' => 'Password lama minimal 8 karakter',
            'passwordbaru.min' => 'Password baru minimal 8 karakter',
        ]);

        if(!Hash::check($request->passwordlama, auth()->user()->password)){
            return back()->with("info", "Password lama salah");
        }


        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->passwordbaru)
        ]);

        return back()->with("success", "Password telah diubah");
    }

    public function changepicture(Request $request)
    {

        $request->validate([
            'picture' => ['required', 'mimes:png,jpg,jpeg'],
        ],
        [
            'picture.mimes' => 'Format file harus berupa png, jpg atau jpeg'
        ]);

        $user = User::find(Auth::user()->id);
        $date = date('Ymd His gis');

        if($request->hasFile('picture')){
            $request->file('picture')->move('admin/assets/images/avatars/', $date.$request->file('picture')->getClientOriginalName());
            $user->picture = $date.$request->file('picture')->getClientOriginalName();
            $user->save();

            return redirect()->back()->with('success', 'Gambar Profil telah diubah');
        }

        return redirect()->back()->with('info', 'Gambar Profil gagal diubah');
    }
}
