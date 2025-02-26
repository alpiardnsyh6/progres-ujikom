@extends('layouts.backend')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5>Data Fasilitas Kamar</h5>

                    @if(session('info'))
                    <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                        {{ session('info') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    <hr>
                    <a href="/fasilitaskamar/create" class="btn btn-primary mb-3">
                        <i class="icon-plus"></i> Tambah Data Fasilitas Kamar
                    </a>
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th class="bg-dark py-3 text-light">No</th>
                                <th class="bg-dark py-3 text-light">Nama</th>
                                <th class="bg-dark py-3 text-light">Keterangan</th>
                                <th class="bg-dark py-3 text-light">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($fasilitaskamar as $key => $fasilitas)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $fasilitas->nama }}</td>
                                    <td>{{ $fasilitas->keterangan }}</td>
                                    <td>
                                        <button type="button" href="#" class="btn btn-primary btn-sm tampilPhoto" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="{{ $fasilitas->id }}">
                                            <i class="icon-eye"></i> Lihat Photo
                                        </button>
                                        <a href="/fasilitaskamar/edit/{{ $fasilitas->id }}" class="btn btn-sm btn-info">
                                            <i class="icon-pencil"></i> Edit
                                        </a>
                                        <a href="/fasilitaskamar/delete/{{ $fasilitas->id }}" class="btn btn-sm btn-danger" onclick="return confirm('Yakin data ini akan dihapus?')">
                                            <i class="icon-trash"></i> Hapus
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- Lihat Photo Modal --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Photo {{ $fasilitas->nama }}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <img src="{{ asset('storage/fasilitas/' . $fasilitas->photo ) }}" class="img-thumbnail" alt="" style=" width: 100%; object-fit: cover">
                        <p></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    
    {{-- <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="{{ asset('storage/fasilitas/tub.jpg') }}" class="img-thumbnail" alt="" style="width: 100%; height:100vh; object-fit: cover;">
            </div>
        </div>
        </div>
    </div> --}}
@endsection

@section('script')
    <script>
        $('.tampilPhoto').on('click', function(event){
            const id = $(this).data('id');
            $.ajax({
                url: 'http://127.0.0.1:8000/getFasilitasKamar',
                data: {id: id},
                method: 'post',
                dataType: 'json',
                success: function(data){
                    $ ('#exampleModalLabel').html(data.nama);
                    $ ('#exampleModal .modal-body img').attr('src','storage/fasilitas/' + data.photo);
                    console.info(data);
                }
            });
        });
    </script>
@endsection
