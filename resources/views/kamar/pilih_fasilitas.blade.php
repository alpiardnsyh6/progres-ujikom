@extends('layouts.backend')

@section('content')
<p class="lead text-center fw-medium">Silahkan Cheklist Pada Fasilitas Yang Akan ditambahkan!!</p>
<hr class="w-75 mx-auto mb-4">
    <form action="/pilihfasilitas" method="POST">
        @csrf
        <input type="hidden" name="kamar_id" value="{{ $kamar->id }}">
        <div class="row justify-content-center gap-3">
            @foreach ($fasilitasKamar as $fasilitas)
                <div class="col-5 mb-4 card p-2 rounded-4 shadow-lg">
                    <div class="row align-items-center">
                        <div class="col-1 h3">
                            <input type="checkbox" class="form-check-input" name="fasilitas_kamar_id[]" value="{{ $fasilitas->id }}">
                        </div>
                        <div class="col-4">
                            <img src="/storage/fasilitas/{{ $fasilitas->photo }}" alt="" class="img-fluid img-thumbnail" style="height:150px;object-fit:cover;">
                        </div>
                        <div class="col-7">
                            <h3>{{ $fasilitas->nama }}</h3>
                            <p>{{ $fasilitas->keterangan }}</p>
                        </div>
                    </div>
                </div>  
            @endforeach
            <div class="flex text-center w-full">
                <button type="submit" class="btn btn-success" onclick="return confirm('Yakin Data ini akan ditambahkan')">
                    <i class="icon-plus"></i> Tambahkan
                </button>
                <a href="/kamar" class="btn btn-danger">
                    <i class="icon-action-undo"></i> Close
                </a>
            </div>
            
        </div>
    </form>
@endsection