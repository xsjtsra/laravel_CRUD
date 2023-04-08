<?php

namespace App\Http\Controllers;

use App\Models\Bunga;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class BungaController extends Controller
{
    public function index()
    {
        $data['bunga'] = DB::table('bunga')->get();
        return view('bunga', $data);   
    }

    public function create(){
        return view('tambahBunga');
    }

    public function store(Request $request){
        $namaInput = $request->input('namaInput');
        $latinInput = $request->input('latinInput');
        $maknaInput = $request->input('maknaInput');
        $manfaatInput = $request->input('manfaatInput');

        $query = DB::table('bunga')->insert([
            'nama' => $namaInput,
            'latin' => $latinInput,
            'makna' => $maknaInput,
            'manfaat' => $manfaatInput
        ]);

        if ($query) {
            return redirect()->route('home.bunga')->with('success', 'Data Berhasil Ditambahkan');
        } else {
            return redirect()->route('home.bunga')->with('failed', 'Data Gagal Ditambahkan');
        }
    }

    public function edit(string $id)
    {
        $data['bunga'] = DB::table('bunga')->where('id', $id)->first();

        return view('editBunga', $data);
    }

    public function update(Request $request, string $id)
    {
        $namaInput = $request->input('namaInput');
        $latinInput = $request->input('latinInput');
        $maknaInput = $request->input('maknaInput');
        $manfaatInput = $request->input('manfaatInput');

        $query = DB::table('bunga')->where('id', $id)->update([
            'nama' => $namaInput,
            'latin' => $latinInput,
            'makna' => $maknaInput,
            'manfaat' => $manfaatInput
        ]);

        if ($query) {
            return redirect()->route('home.bunga')->with('success', 'Data Berhasil Diupdate');
        } else {
            return redirect()->route('home.bunga')->with('failed', 'Data Gagal Diupdate');
        }
    }

    public function destroy(string $id)
    {
        $query = DB::table('bunga')->where('id', $id)->delete();

        if ($query) {
            return redirect()->route('home.bunga')->with('success', 'Data Berhasil Dihapus');
        } else {
            return redirect()->route('home.bunga')->with('failed', 'Data Gagal Dihapus');
        }
    }

}
