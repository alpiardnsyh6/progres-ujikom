@extends('layouts.frontend')

@section('isi')
    <section id="cekkamar">
        <h1 class="text-center my-5">CEK KETERSEDIAN KAMAR</h1>
        <p class="lead text-center">Berikut adalah kamar yang tersedia untuk periode tanggal 08 Februari 2025 s.d 10 Februari 2025</p>
        @foreach ($kamar as $item)
            <div class="row align-items-center p-3 justify-content-center" {{ $jmlKamar [$item->id] < 1 ? "hidden" : "" }}>
                <div class="col-4">
                    <img src="/storage/kamar/{{ $item->photo }}" alt="" class="w-100 img-thumbnail">
                </div>
                <div class="col-4">
                    <h3 class="text-primary">{{ $item->tipe }} Room</h3>
                    <p>Harga per Malam : Rp. {{ number_format($item->harga,2,',','.') }}
                    </p>
                    <p>jumlah tersedia : {{$jmlKamar [$item->id] }}</p>
                    <ul>
                        @foreach ($item->detailfasilitas as $fas)
                            <li>{{ $fas->fasilitas->nama }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-2">
                    <form action="/pemesanan" method="POST">
                        @csrf
                        <input type="hidden" name="kamar_id" value="{{ $item->id }}">
                        <input type="hidden" name="jml_tamu" value="{{ $jml_tamu }}">
                        <input type="hidden" name="jml_kamar" value="{{ $jml_kamar }}">
                        <input type="hidden" name="tgl_datang" value="{{ $tgl_datang }}">
                        <input type="hidden" name="tgl_pulang" value="{{ $tgl_pulang }}">
                        <button style="submit" class="btn btn-primary btn-lg rounded-0 shadow-md">PESAN SEKARANG</button>
                    </form>
                </div>
            </div>
        @endforeach
    </section>
@endsection