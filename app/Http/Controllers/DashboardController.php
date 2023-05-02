<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;

class DashboardController extends Controller
{

    public $customer;
    // membuat instance dari model data
    public function __construct()
    {
        $this->customer = new Data;
    }

    public function index()
    {
        $data = Data::all();
        return view('dashboard', compact('data'));
    }

    //BUAT NAMPILIN FORM
    public function create()
    {
        $data = Data::all();
        return view('create', compact('data'));
    }

    //BUAT NAMBAH DATA
    public function store(Request $request)
    {
        $rules = [
            'customer' => 'required|min:3|max:80|unique:data,nama',
            'alamat' => 'required',
            'kota' => 'required',
            'email' => 'required',
            'hp' => 'required',
            'perusahaan' => 'required'
        ];

        $messages = [
            'required' => ":attribute gak boleh kosong",
            'min' => ":attribute kurang banyak",
            'max' => ":attribute kebanyakan / ukuran file terlalu besar",
            'unique' => ":attribute sudah tersedia, silakan input lain"
        ];

        $this->validate($request, $rules, $messages);

        $this->customer->nama = $request->customer;
        $this->customer->alamat = $request->alamat;
        $this->customer->kota = $request->kota;
        $this->customer->email = $request->email;
        $this->customer->hp = $request->hp;
        $this->customer->perusahaan = $request->perusahaan;

        $this->customer->save();

        // redirect halaman serta kirimkan pesan berhasil
        return redirect()->route('dashboard');
    }

    //utk ngeliat data di db
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $edit = Data::findOrFail($id);
        return view('edit', compact('edit'));
    }

    public function update(Request $request, $id)
    {
        $update = Data::findOrFail($id);

        $update->nama = $request->customer;
        $update->alamat = $request->alamat;
        $update->kota = $request->kota;
        $update->email = $request->email;
        $update->hp = $request->hp;
        $update->perusahaan = $request->perusahaan;

        if ($update->isDirty()) {
            $update->save();
            return redirect()->route('dashboard')->with('success', 'Data customer berhasil diupdate');
        } else {
            return redirect()->route('dashboard');
        }
    }


    public function destroy($id)
    {
        $destroy = Data::findOrFail($id);
        $destroy->delete();
        return redirect()->route('dashboard')->with('success', 'Data customer berhasil dihapus');
    }
}
