<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FasilitasKamar;
use Illuminate\Http\RedirectResponse;

class FasilitasKamarController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Data Fasilitas Kamar',
            'page' => 'Fasilitas Kamar',
            'fasilitaskamar' => FasilitasKamar::all()
        ];
        $fasilitasKamar = FasilitasKamar::all();

        return view('kamar.fasilitas',$data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Data FasilitasKamar',
            'page' => 'Fasilitaskamar',
        ];

        return view('kamar.create',$data);
    }
 
    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'nama'=> 'required',
            'keterangan'=> 'required',
            'photoUpload' => 'nullable|image|file|max:1024',
        ],[
            'nama'=> 'Nama Fasilitas Harus Di Isi !!',
            'keterangan'=> 'Keterangan Fasilitas Harus Di Isi !!',
            'photoUpload.image' => 'Yang diupload harus gambar!!',
            'photoUpload.max' => 'Ukuran gambar tidak boleh lebih dari 1MB!!',
        ]);

        //Nilai Default
        $validatedData['photo'] = ('upload.png');

        if($request->file('photoUpload')){
            $file = $request->file('photoUpload');
            $name = $file->hashName();
            $file->storeAs('fasilitas', $name);
            $validatedData['photo'] = $name;

            if($request->photoLama != null){
                unlink(public_path('storage/fasilitas/' . $request->photoLama));
            }
       };
       FasilitasKamar::create($validatedData);
       return redirect('/fasilitaskamar')->with('info','Data Kamar berhasil Ditambahkan !!');

    }

    public function edit(FasilitasKamar $fasilitas)
    {
        $data = [
            'title' => 'Edit Data Fasilitas Kamar',
            'page' => 'Fasilitaskamar',
            'fasilitaskamar' => $fasilitas,
        ];

        return view('kamar.edit',$data);
    }

    public function update(Request $request): RedirectResponse
    {
        $id = $request->id;
        $validatedData = $request->validate([
            'nama' => 'required',
            'keterangan' => 'required',
            'photoUpload' => 'nullable|image|file|max:1024',
        ],[
            'nama' => 'Nama Fasilitas Harus Di isi!!',
            'keterangan' => 'Keterangan Fasilitas Harus Di isi!!',
            'photoUpload.image' => 'Yang diupload harus gambar!!',
            'photoUpload.max' => 'Ukuran gambar tidak boleh lebih dari 1MB!!',
        ]);

       if($request->file('photoUpload')){
            $file = $request->file('photoUpload');
            $name = $file->getClientOriginalName();
            $file->storeAs('fasilitas', $name);
            $validatedData['photo'] = $name;
       };


       $fasilitas = FasilitasKamar::find($id);
       $fasilitas->update($validatedData);

        return redirect('/fasilitaskamar')->with('info','Data Fasilitas Kamar berhasil diupdate !!');
    }

    public function pilihFasilitas($id)
    {
        $fasilitas = DetailFasilitas::where('kamar_id', $id)->get();
        $fasilitas_id = [];
        foreach($fasilitas as $fasility){
            $fasilitas_id[] = $fasility->fasilitas_kamar_id;
        }
        $fasilitasKamar = FasilitasKamar::whereNotIn('id', $fasilitas_id)->get();
        $data = [
            'title' => 'Tambah  Fasilitas Kamar',
            'page' => 'Fasilitaskamar',
            'fasilitasKamar' => $fasilitasKamar,
            'kamar' => Kamar::find($id)
        ];

        return view('kamar.pilih_fasilitas',$data);
    }

    public function simpanDetailFasilitas(Request $request)
    {
        $kamar = Kamar::find($request->kamar_id);
        foreach($request->fasilitas_kamar_id as $fasilitas){
            DetailFasilitas::create([
                'kamar_id' => $request->kamar_id,
                'fasilitas_kamar_id' => $fasilitas,
            ]);
        }

        return redirect('/kamar')->with('info','Kamar Untuk Tipe '. $kamar->tipe .' berhasil ditambahkan fasililitasnya !!');

    }

    public function destroy(FasilitasKamar $fasilitas): RedirectResponse
    {
        $fasilitas->delete();
        return redirect('/fasilitaskamar')->with('info','Data kamar berhasil dihapus !!');
    }




}
