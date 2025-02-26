<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\DetailKamar;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class KamarController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Data Kamar',
            'page' => 'user',
            'rooms' => Kamar::all()
        ];

        return view('kamar.index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Data Kamar',
            'page' => 'kamar',
        ];

        return view('kamar.tambah',$data);
    }

    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'tipe' => 'required',
            'harga' => 'required',
            'detail' => 'required',
            'photoUpload' => 'nullable|image|file|max:1024',
        ],[
            'tipe' => 'Tipe Harus Di isi!!',
            'harga' => 'Harga Harus Di isi!!',
            'detail' => 'Detail Harus Di isi!!',
            'photoUpload.image' => 'Yang diupload harus gambar!!',
            'photoUpload.max' => 'Ukuran gambar tidak boleh lebih dari 1MB!!',
        ]);

        // Nilai Default 
        $validatedData['photo'] = ('deluxe.jpg');
        $validatedData['jumlah'] = ('0');

        if($request->file('photoUpload')){
            $file = $request->file('photoUpload');
            $name = $file->hashName();
            $file->storeAs('kamar', $name);
            $validatedData['photo'] = $name;

            if($request->photoLama != null){
                unlink(public_path('storage/kamar/' . $request->photoLama));
            }
       };

        Kamar::create($validatedData);
        return redirect('/kamar')->with('info','Data Kamar berhasil Ditambahkan !!');
    }

    public function edit(kamar $kamar)
    {
        $data = [   
            'title' => 'Edit Data Kamar',
            'page' => 'kamar',
            'kamar' => $kamar,
        ];

        return view('kamar.update',$data);
    }


}