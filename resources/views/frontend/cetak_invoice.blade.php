<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/vendor/fontawesome/css/all.css" rel="stylesheet">
    <title>cetak</title>
</head>

<body>
    <div class="container mt-4 p-4 border shadow-sm">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="fw-bold">Voucher Hotel</h2>
            <img src="/images/logo.png" alt="" width="150px">
        </div>
        <hr>

        Itinerary Code: <span class="text-danger fw-bold">
            <td>{{ $reservasi->kode }}</td>
        </span>
        <p><em>Booked and payable by Reservation System</em></p>

        <h5>Hotel: Hotel Hebat ⭐⭐⭐</h5>
        <p>Alamat: Jl. Jend. A. Yani No. 172, Cipaísan, Purwakarta, Jawa Barat, Indonesia, 41113</p>
        <p>Telepon:085794545124</p>

        <div class="row">
            <div class="col-md-6">
                <h6>Check-In:</h6>
                <td>{{ \Carbon\Carbon::parse($reservasi->tgl_datang)->isoFormat('DD MMMM YYYY') }}</td>
            </div>
            <div class="col-md-6">
                <h6>Check-Out:</h6>
                <td>{{ \Carbon\Carbon::parse($reservasi->tgl_pulang)->isoFormat('DD MMMM YYYY') }}</td>
            </div>
        </div>

        <h5 class="mt-3">Detail Pesanan</h5>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tipe Kamar</th>
                    <th>Nama Pemesan</th>
                    <th>jumlah Tamu</th>
                    <th>Total Bayar</th>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $reservasi->id }}</td>
                    <td>{{ $reservasi->kamar->tipe }}</td>
                    <td>{{ $reservasi->pelanggan->nama }}</td>
                    <td>{{ $reservasi->jml_tamu }}</td>
                    <td>Rp.
                    {{ number_format($reservasi->total_bayar, 2, ',', '.') }}</td>
                </tr>
            </tbody>
        </table>

        <h5 class="mt-3">Kebijakan Pembatalan Hotel</h5>
        <ul>
            <li>Gratis pembatalan sebelum tanggal 11 Feb 2025, 12:59 WIB.</li>
            <li>Biaya Rp. 500.000 dikenakan jika pembatalan dilakukan setelah 11 Feb 2025, 13:00 WIB.</li>
            <li>Pesanan tidak dapat dibatalkan setelah 12 Feb 2025, 13:00 WIB.</li>
        </ul>

        <div class="d-flex justify-content-between mt-4">
            <div>
                <p class="text-danger">Tidak Perlu Dicetak</p>
                <p>E-tiket ini tidak perlu dicetak! Tunjukkan e-tiket saat check-in.</p>
                <img src="/images/noprint.jpg" alt="" width="90px">
            </div>
            <div>
                <p class="text-success">Masalah Check-In?</p>
                <p>Jika mengalami masalah saat check-in, customer service siap membantu!</p>
                <img src="/images/checklis.jpg" alt="" width="100px">
            </div>
        </div>
    </div>
</body>

</html>