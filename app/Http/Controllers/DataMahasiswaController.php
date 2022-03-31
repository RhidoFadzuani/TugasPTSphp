<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Mahasiswa;

use Illuminate\Support\Facades\Validator;
class DataMahasiswaController extends Controller
{
  public function index(){

    $mahasiswa = mahasiswa::all();
    return view('section.datamahasiswa', ['mahasiswa' => $mahasiswa]);
  }  

  public function show($id){

    $Mahasiswa = mahasiswa::where('id',$id )->first();

    return view('section.editdata', ['mahasiswa' => $Mahasiswa]);
  }

  public function update(Request $request, $id)
    {
        $data = $request->all();

        $Mahasiswa = mahasiswa::find($id);

        $Mahasiswa->update([
            'npm' => $data['npm'],
            'nama' => $data['nama'],
            'Jk' => $data['Jk'],
            'alamat' => $data['alamat'],
            'fakultas' => $data['fakultas'],
            'prodi' => $data['prodi'],
        ]);

        return redirect()->route('datamahasiswa.index');
    }

    public function destroy($id)
    {
        $mahasiswa = mahasiswa::findOrFail($id);

       

      
            $mahasiswa->delete();

            return redirect()->route('datamahasiswa.index');
       
    }

    public function create()
    {
      $mahasiswa = Mahasiswa::all();

        return view('section.tambahdata',['mahasiswa' => $mahasiswa]);
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $validate = Validator::make($data, [
          'npm' => ['required', 'string', 'max:16'],
            'nama' => ['required', 'string', 'max:255'],
            'alamat' => ['required', 'string', 'max:255'],
            'Jk' => ['required', 'string', 'min:1'],
            'fakultas' => ['required','string','max:255'],
            'Prodi' => ['string','max:255'],
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate);
        }

        $nama = mahasiswa::where('nama', $data['nama'])->first();
        
        if ($nama) {
          return redirect()->back()->with(['notif' => 'Username sudah digunakan!']);
        }
        $npm  = mahasiswa::where('npm', $data['npm'])->first();
        if ($npm) {
          return redirect()->back()->with(['notif' => 'npm sudah digunakan!']);
        }
        
          Mahasiswa::create([
          'npm' => $data['npm'],
          'nama' => $data['nama'],
          'Jk' => $data['Jk'],
          'alamat' => $data['alamat'],
          'fakultas' => $data['fakultas'],
          'prodi' => $data['prodi'],
        ]);

        return redirect()->route('datamahasiswa.index');
    }

}
