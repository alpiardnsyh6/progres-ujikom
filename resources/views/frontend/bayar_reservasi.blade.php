@extends('layouts.frontend')

@section('isi')
<section id="konfirmasi">
    <div class="row justify-content-center my-5">
        <div class="col-8 p-5 shadow-lg">
            <div class="text-center">
                <img src="/images/logo.png" alt="" width="150px">
                <h3 class="text-uppercase my-3 text-primary">Konfirmasi Pembayaran Reservasi</h3>
            </div>
            <hr class="my-3">
            <h4>Identitas Reservasi</h4>
            <table class="table table-striped">
                <tr>
                    <td width="300">Kode Reservasi</td>
                    <td>{{ $reservasi->kode }}</td>
                </tr>
                <tr>
                    <td>Nama Pemesan</td>
                    <td>{{ $reservasi->pelanggan->nama }}</td>
                </tr>
                <tr>
                    <td>Tanggal Check-in</td>
                    <td>{{ \Carbon\Carbon::parse($reservasi->tgl_datang)->isoFormat('DD MMMM YYYY') }}</td>
                </tr>
                <tr>
                    <td>Tanggal Check-out</td>
                    <td>{{ \Carbon\Carbon::parse($reservasi->tgl_pulang)->isoFormat('DD MMMM YYYY') }}</td>
                </tr>
                <tr>
                    <td width="300">Tipe Kamar</td>
                    <td>{{ $reservasi->kamar->tipe }}</td>
                </tr>
                <tr>
                    <td>Jumlah Kamar</td>
                    <td>{{ $reservasi->jml_kamar }}</td>
                </tr>
                <tr>
                    <td>Jumlah Tamu</td>
                    <td>{{ $reservasi->jml_tamu }}</td>
                </tr>
            </table>
            <hr class="my-4">
            <h4>Tata Cara Pembayaran</h4>
            <p>Lakukan Transfer BRI dengan ketentuan sebagai berikut</p>
            <ul>
                <li>Nomor Rekening : <span class="fw-bold text-danger">2442067854</span></li>
                <li>Tambahkan Keterangan pada Transaksi : <span class="fw-boled">{{ $reservasi->kode }}</span></li>
                <li>Jumla yang harus dibayar : <span class="text-danger fw-bold">Rp.
                        {{ number_format($reservasi->total_bayar, 2, ',', '.') }}</span></li>
            </ul>
            <div class="row align-items-center">
                <div class="col-4">
                    <img src="/images/nofile.png" alt="" class="w-100" id="preview-img"
                        style="width: 100%; height: 250px; object-fit: cover;">
                </div>
                <div class="col-8">
                    <form action="/konfirmasibayar" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $reservasi->id }}">
                        <div class="mb-3">
                            <label for="bukti" class="form-label">Upload Bukti Pembayaran</label>
                            <input class="form-control" type="file" id="bukti" name="bukti" onchange="return previewPhoto(event)" required>
                        </div>
                        <button type="submit" class="btn btn-primary rounded-0 btn-lg mt-3" onclick="return confirm('Yakin data pembayaran ini akan di konfirmasi?')">KONFIRMASI PEMBAYARAN</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('script')
<script>
    function previewPhoto(event){
        if(event.target.files.length > 0){
            var src = URL.createObjectURL(event.target.files[0]);
            var preview = document.getElementById("preview-img");
            preview.src = src;
            preview.style.display = "block";
        }
    }
</script>
@endsection