@extends('layouts.frontend')

@section('isi')
<section id="riwayat">
    <div class="container">
        <div class="row">
            <div class="col-12">
                @if(session('info'))
                    <div class="alert alert-warning alert-dismissible fade show position-absolute py-4" role="alert"
                        style="z-index: 999; left: 50%; transform: translateX(-50%);">
                        <strong>Selamat!</strong> {{ session('info') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <h1 class="mt-5">RIWAYAT RESERVASI</h1>
                <hr class="my-4">
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Reservasi</th>
                            <th>Tipe Kamar</th>
                            <th>Jumlah Kamar</th>
                            <th>jumlah Tamu</th>
                            <th>Tanggal Check-in</th>
                            <th>Tanggal Check-out</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reservasi as $key => $item)
                            <tr>
                                <td>{{ $key + 1}}</td>
                                <td>{{ $item->kode }}</td>
                                <td>{{ $item->kamar->tipe }}</td>
                                <td>{{ $item->jml_kamar }}</td>
                                <td>{{ $item->jml_tamu }}</td>
                                <td>{{ $item->tgl_datang }}</td>
                                <td>{{ $item->tgl_pulang }}</td>
                                <td>
                                    @if ($item->status == 'dipesan')
                                        <a href="/bayarinvoice/{{ $item->id }}" class="btn btn-sm btn-success rounded-0">
                                            <i class="fas fa-stamp"></i> Bayar Sekarang
                                        </a>
                                    @else
                                        <a href="/cetakinvoice/{{ $item->id }}" class="btn btn-sm btn-primary rounded-0">
                                            <i class="fas fa-print"></i> Cetak Invoice
                                        </a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection