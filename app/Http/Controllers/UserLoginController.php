<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\UserLoginController;

class UserLoginController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Login Pelanggan',
            'active' => 'loginuser',
        ];

        return view('frontend.login',$data);
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ],[
            'email.required' => 'Email Harus Diisi !!',
            'email.email' => 'Penulisan Email Harus Benar (ex: example@mail.com) !!',
            'password' => 'Password harus diisi !!',
        ]);

        if (Auth::guard('web')->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended(route('home'));
        }

        return back()->with('info', 'Username atau password Anda salah!');
    }

    public function registrasi()
    {
        $data = [
            'title' => 'Registrasi Pelanggan',
            'active' => 'registrasi'
        ];
        return view('frontend.registrasi', $data);
    }

    public function prosesRegister(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:pelanggan,email',
            'no_hp' => 'required',
            'password' => 'required',
            'password1' => 'required|same:password',
        ],[
            'nama' => 'Nama Lengkap Harus Di isi !!',
            'email.required' => 'Alamat Email Harus Di isi !!',
            'email.unique' => 'Alamat Email Sudah Terdaftar !!',
            'no_hp' => 'Nomor Hp Harus Diisi !!',
            'password.required' => 'Password Harus Di isi !!',
            'password1.required' => 'Password Konfirmasi Harus Di isi !!',
            'password1.same' => 'Password dan Password Konfirmasi Tidak Sama !!',

        ]);

        $validateData['password'] = bcrypt($request->password);

        Pelanggan::create($validateData);
        return redirect('/loginuser')->with('info', 'Registrasi Berhasil, Silahkan Login Dengan Akun Yang Telah Dibuat !!');
    }

    public function logout(Request $request): RedirectResponse
    {
        $request->session()->invalidate();
        return redirect()->route('home');
    }

}
