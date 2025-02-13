<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use app\Models\laporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;



class FormController extends Controller
{
    public function submitForm(Request $request) {
        
        $validatedData = $request->validate([
             'nis' => 'required',
             'nama_siswa' => 'required',
             'kategori' => 'required',
             'lokasi' => 'required',
             'keterangan' => 'required',
             'gambar_kejadian' => 'image',
             'status' => 'nullable',
         ]);
 
         $gambarKejadianPath = $request->file('gambar_kejadian')->store('public/gambar_kejadian');
         $gambarKejadianUrl = Storage::url($gambarKejadianPath);
 
         DB::table('laporan')->insert([
            'nis' => $validatedData['nis'],
            'nama_siswa' => $validatedData['nama_siswa'],
             'kategori' => $validatedData['kategori'],
             'lokasi' => $validatedData['lokasi'],
             'keterangan' => $validatedData['keterangan'],
             'gambar_kejadian' => $gambarKejadianUrl,
             'status' => $validatedData['status'],
         ]);
         return response()->json(['message' => 'Formulir berhasil terkirim']);
     }
 
}
