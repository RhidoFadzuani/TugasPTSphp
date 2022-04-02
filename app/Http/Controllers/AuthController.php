<?php

namespace App\Http\Controllers;


use App\Akun;
use App\Mahasiswa;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller //Fungsi untuk menuju login page
{
    public function pagelogin()
    {
        return view('loginpage');
    }

    public function Dashboard() //fungsi untuk mengarahkan ke dashboard setelah login dengan membawa beberapa atribut
    {
        $mahasiswa = mahasiswa::all()->count();

        $laki = Mahasiswa::where('JK', 'L')->get()->count();

        $cewek = Mahasiswa::where('JK', 'P')->get()->count();
        
        return view('section.dashboard', ['mahasiswa' => $mahasiswa, 'laki' => $laki, 'cewek' => $cewek]);
    }


    public function Login(Request $request) //fungsi login untuk memeriksa kecocokan antara apa yang di inputkan dengan data yang ada di database
    {
        $username = akun::where('username', $request->username)->first();

        if (!$username) {
            return redirect()->back()->with(['pesan' => 'Username tidak terdaftar']);
        }

        $password = akun::where('password', $request->password);

        if (!$password) {
            return redirect()->back()->with(['pesan' => 'Password tidak sama!']);
        }

        $auth = Auth::guard('admin')->attempt(['username' => $request->username, 'password' => $request->password]);

        if ($auth) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->back()->with(['pesan' => 'Akun tidak terdaftar']);
        }
    }
}
