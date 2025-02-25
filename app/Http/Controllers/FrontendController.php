<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Kamar;
use App\Models\Reservasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FrontendController;

class FrontendController extends Controller
{
    public function home(){
        $data = [
            'title' => 'Homepage',
            'active' => 'home',
            'kamar' => Kamar::all()
        ];
        return view('frontend.home', $data);
    }

    public function kamar(){

        $data = [
            'title' => 'Rooms',
            'active' => 'kamar',
        ];
        return view('frontend.kamar', $data);
    }

    public function fasilitas(){

        $data = [
            'title' => 'Facilities',
            'active' => 'fasilitas',
        ];
        return view('frontend.fasilitas', $data);
    }

    public function kontak() {
        $data = [
            'title' => 'Kontak Kami',
            'active' => 'kontak',
        ];
        return view('frontend.kontak', $data);
    }

    public function cekKamar(Request $request)
    {
        $tglDatang = $request->tgl_datang;
        $tglPulang = $request->tgl_pulang;
        $jmlPesan = $request->jml_kamar;
        $jmlTamu = $request->jml_tamu;

        $kamar = Kamar::with('reservasi')->get();
        // cek kamar yang di pergunakan dalam reservasi (sudah di booking)
        $kamar_filter = $kamar->filter(function ($kamar) use ($tglDatang, $tglPulang){
            return $kamar->reservasi->contains(function ($reservasi) use ($tglDatang, $tglPulang){
                return $reservasi->tgl_datang <= $tglPulang && $reservasi->tgl_pulang > $tglDatang;
            });
        });
        // dd($kamar_filter);
        $jmlkamar = [];
        foreach($kamar as $kmr){
            $jmlKamar[$kmr->id] = $kmr->jumlah;
            foreach ($kamar_filter as $kf) {
                $jmlKamarReservasi = $kf->reservasi()->sum('jml_kamar');
                if($kmr->id == $kf->id){
                    $jmlKamar[$kmr->id] -= $jmlKamarReservasi;

                }
            }
        } 

        //    dd($jmlKamar);

        $data = [
            'title' => 'Facilities',
            'active' => 'fasilitas',
            'kamar' => Kamar::all(),
            'jmlKamar' => $jmlKamar,
            'tgl_datang' => $tglDatang,
            'tgl_pulang' => $tglPulang,
            'jml_kamar' => $jmlPesan,
            'jml_tamu' => $jmlTamu,
        ];
        return view('frontend.cek_kamar', $data);
    }

    public function reservasi(Request $request){

        // cek harga kamar
        $kamar = Kamar::find($request->kamar_id);
        $harga = $kamar->harga;

        // cek berapa lamam tamu menginap
        $tglDatang = $request->tgl_datang;
        $tglPulang = $request->tgl_pulang;
        $datang = Carbon::parse($tglDatang);
        $pulang = Carbon::parse($tglPulang);
        $jmlHari = $pulang->diff($datang)->day;
        
        // hitung total harga
        $total_bayar = $harga * $jmlHari * $request->jml_kamar;

        // Tentukan tanggal/aktu reservasi dan expired
        $reservasi = Carbon::now();
        $expired = $reservasi->addHours(1);

        // dapatkan kode 
        $kodeKamar = sprintf('%02d', $kamar->id);
        $kodeTanggal = strtotime($reservasi);

        $kode = "resv". Auth::user()->id . '-'. $kodeTanggal . '-' . $kodeKamar;

        $data = [
            'title' => 'Reservasi Hotel',
            'active' => 'reservasi',
            'kamar' => $kamar,
            'kode' => $kode,
            'total_bayar' => $total_bayar,
            'tgl_reservasi' => $reservasi,
            'tgl_expired' => $expired,
            'tgl_datang' => $tglDatang,
            'tgl_pulang' => $tglPulang,
            'jml_kamar' => $request->jml_kamar,
            'jml_tamu' => $request->jml_tamu,
        ];
        return view('frontend.reservasi', $data);
    }

    public function konfirmasi(Request $request)
    {
        $data = [
            'pelanggan_id' => $request->pelanggan_id,
            'kamar_id' => $request->kamar_id,
            'kode' => $request->kode,
            'tgl_reserasi' => Carbon::now(),
            'tgl_expired' => Carbon::now()->addHours(12),
            'tgl_datang' => $request->tgl_datang,
            'tgl_pulang' => $request->tgl_pulang,
            'jml_kamar' => $request->jml_kamar,
            'jml_tamu' => $request->jml_tamu,
            'total_bayar' => $request->total_bayar,
            'status' => 'dipesan',
        ];

        Reservasi::create($data);

        return redirect()->route('home')->with('info', 'Reservasi hotel berhasil di buat, cek Reservasi Anda untuk segera melakukan pembayaran!');
    }

    public function getReservasi()
    {
        $reservasi = Reservasi::where('pelanggan_id', Auth::user()->id)->get();
        $data = [
            'title' => 'Riwayat Reservasi',
            'active' => 'reservasi',
            'reservasi' => $reservasi
        ];

        return view('frontend.riwayat_reservasi', $data);
    }

    public function bayarReservasi(Reservasi $reservasi)
    {
        $data = [
            'title' => 'Pembayaran Reservasi',
            'active' => 'pembayaran',
            'reservasi' => $reservasi
        ];

        return view('frontend.bayar_reservasi', $data);
    }

    public function konfirmasiBayar(Request $request)
    {
        $reservasi = Reservasi::find($request->id);
        $namaFile = $request->file('bukti')->hashName();
        $request->file('bukti')->storeAs('bukti', $namaFile);
        $data = [
            'bukti' => $namaFile,
            'status' => 'dibayar'
        ];

        $reservasi->update($data);
        return redirect('/getreservasi')->with('info', 'Pesanan sudah dibayar!');
    }

    public function cetakInvoice(Reservasi $reservasi)
    {
        $data = [
            'title' => "Cetak Pembayaran",
            'reservasi' => $reservasi,
        ];

        return view('frontend.cetak_invoice', $data);
    }
}
