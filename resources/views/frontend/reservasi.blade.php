@extends('layouts.frontend')

@section('isi')
<section id="reservasi">
    <div class="container">
        <div class="row min-vh-100 justify-content-center align-items-center">
            <div class="col-7 card shadow-lg p-3 border-0">
                <div class="row align-items-center">
                    <div class="col-5">
                        <img src="/images/logo.png" alt="" width="120px">
                    </div>
                    <div class="col-7">
                        <div class="card bg-info text-light border-0 text-center">
                            <p class="m-0 text-light">Kode Reservasi :</p>
                            <h3 class="m-0 text-danger">{{ $kode }}</h3>
                        </div>
                    </div>
                </div>
                <h1 class="mt-3 text-center text-primary fw-bold">FORM RESERVASI HOTEL</h1>
                <hr class="my-3">
                <form action="/konfirmasi" method="POST">
                    @csrf
                    <input type="hidden" name="kamar_id" value="{{ $kamar->id }}">
                    <input type="hidden" name="total_bayar" value="{{ $total_bayar }}">
                    <input type="hidden" name="pelanggan_id" value="{{ auth()->user()->id }}">
                    <input type="hidden" name="kode" value="{{ $kode }}">
                    <h5 class="mb-3">identitas pemesan</h5>
                    <div class="row mb-2">
                        <label for="" class="col-form-label col-3">Nama Pemesan</label>
                        <div class="col-9">
                            <input type="text" class="form-control-plaintext bg-secondary text-light px-2"
                                value="{{ auth()->user()->nama }}" readonly>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label for="" class="col-form-label col-3">Alamat Email</label>
                        <div class="col-9">
                            <input type="text" class="form-control-plaintext bg-secondary text-light px-2"
                                value="{{ auth()->user()->email }}" readonly>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label for="" class="col-form-label col-3">Nomor HP</label>
                        <div class="col-9">
                            <input type="text" class="form-control-plaintext bg-secondary text-light px-2"
                                value="{{ auth()->user()->no_hp }}" readonly>
                        </div>
                    </div>
                    <hr class="my-3">
                    <h5 class="mb- fw-bold3">Detail Reservasi</h5>
                    <div class="row align-items-center mb-2">
                        <label for="" class="col-4 col-form-label">Tipe Kamar</label>
                        <div class="col-8">
                            <input type="text" class="form-control py-3 bg-primary text-light px-2" value="{{ $kamar->tipe }}" readonly>
                        </div>
                    </div>
                    <div class="row align-items-center mb-2">
                        <label for="" class="col-4 col-form-label">Tanggal Kedatangan</label>
                        <div class="col-8">
                            <input type="date" class="form-control py-3 bg-primary text-light px-2" name="tgl_datang" value="{{ $tgl_datang }}" readonly>
                        </div>
                    </div>
                    <div class="row align-items-center mb-2">
                        <label for="" class="col-4 col-form-label">Tanggal Kepulangan</label>
                        <div class="col-8">
                            <input type="date" class="form-control py-3 bg-primary text-light px-2" name="tgl_pulang" value="{{ $tgl_pulang }}" readonly>
                        </div>
                    </div>
                    <div class="row align-items-center mb-2">
                        <label for="" class="col-4 col-form-label">Jumlah Kamar</label>
                        <div class="col-8">
                            <input type="number" class="form-control py-3 bg-primary text-light px-2" name="jml_kamar" value="{{ $jml_kamar }}" readonly>
                        </div>
                    </div>
                    <div class="row align-items-center mb-2">
                        <label for="" class="col-4 col-form-label">Jumlah Tamu</label>
                        <div class="col-8">
                            <input type="number" class="form-control py-3 bg-primary text-light px-2" name="jml_tamu" value="{{ $jml_tamu }}" readonly>
                        </div>
                    </div>
                    <div class="row align-items-center mb-2">
                        <label for="" class="col-4 col-form-label">Total Bayar</label>
                        <div class="col-8">
                            <input type="text" class="form-control py-3 bg-danger text-light px-2"  value="Rp. {{ number_format($total_bayar, 2, '.', '.') }}" readonly>
                        </div>
                    </div>
                    <hr class="mt-4">
                    <div class="d-flex justify-content-between mt-4">
                        <a href="/" class="btn btn-secondary rounded-0 px-5 py-2">Cancel</a>
                        <button type="submit" class="btn btn-primary rounded-0" onclick="return confirm('Yakin akan mengkonfirmasi pesanan untuk kamar ini?')">Konfirmasi Pesanan</button>
                    </div>
                </form> 
            </div>
        </div>
    </div>
</section>
@endsection