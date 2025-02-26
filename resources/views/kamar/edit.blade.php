@extends('layouts.backend')

@section('content')
    <div class="row d-flex justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title d-flex justify-content-center">Form Edit Fasilitas Kamar Hotel Hebat</h3>
                    <p class="card-description d-flex justify-content-center">Isi data di bawah ini dengan lengkap!</p>

                    <form action="/fasilitaskamar" class="forms-sample" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="id" value="{{ $fasilitaskamar->id }}">
                        <input type="hidden" name="photoLama" value="{{ $fasilitaskamar->photo }}">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="nama">Nama Fasilitas Kamar</label>
                            <input type="text" class="form-control @error ('nama') is-invalid @enderror"  name="nama" id="name" placeholder="nama Fasilitas Kamar......." value="{{ old('nama') ?? $fasilitaskamar->nama }}">
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="keterangan">Keterangan Fasilitas Kamar</label>
                            <input type="text" class="form-control @error ('keterangan') is-invalid @enderror"  name="keterangan" id="name" placeholder="Keterangan Fasilitas Kamar......." value="{{ old('keterangan') ?? $fasilitaskamar->keterangan }}">
                            @error('keterangan')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Upload Photo --}}
                        <div class="row my-4 align-items-center">
                            <div class="col-3">
                                <img src="{{ asset('storage/fasilitas/' . ($fasilitaskamar->photo ?? 'upload.png')) }}" alt="" class="img-thumbnail" width="120px" id="img-preview">
                            </div>
                            <div class="col-9">
                                <label for="photoUpload" class="form-label">Upload Photo Disini</label>
                                <input class="form-control @error ('photoUpload') is-invalid @enderror" type="file" name="photoUpload" id="photoUpload" onchange="previewPhoto(event)">
                                @error('photoUpload')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        {{-- End Of Upload Photo --}}

                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-success">
                                <i class="fa fa-floppy-o"></i> Simpan
                            </button>
                            <a href="/fasilitaskamar" class="btn btn-danger">
                                <i class="icon-action-undo"></i> Kembali
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section ('script')
<script>
    function previewPhoto(event){
        if(event.target.files.length > 0){
            var src = URL.createObjectURL(event.target.files[0]);
            var preview = document.getElementById("img-preview");
            preview.src = src;
            preview.style.display = "block";
        }
    }
</script>
@endsection