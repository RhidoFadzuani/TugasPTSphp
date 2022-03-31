<?php

namespace App\Http\Controllers;
use App\Mahasiswa;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;



class DashboardController extends Controller
{
    public function index()
    {
        $mahasiswa = mahasiswa::all()->count();

        $laki = Mahasiswa::where('JK', 'L')->get()->count();

        $cewek = Mahasiswa::where('JK', 'P')->get()->count();
        
        return view('section.dashboard', ['mahasiswa' => $mahasiswa, 'laki' => $laki, 'cewek' => $cewek]);
    }
}
