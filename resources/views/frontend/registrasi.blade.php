@extends('layouts.frontend')

@section('isi')
    <div class="row min-vh-100 align-items-center justify-content-center my-5">
        <div class="col-4">
            @if(session('info'))
                    <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                        {{ session('info') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            <div class="card p-3 rounded-3 shadow-lg border-0">
                <div class="card-header text-center">
                    <img src="/images/logo.png" style="width: 100px !important;" alt="">
                    <h5>Form Registrasi Akun Pelanggan</h5>
                </div>
                <div class="card-body">
                    <form action="/registeruser" method="POST">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="floatingNama" name="nama" placeholder="Nama Lengkap...">
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>  
                            @enderror
                            <label for="floatingNama">Nama Lengkap</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control @error('email') is-invalid @enderror" id="floatingEmail" name="email" placeholder=" Alamat Email">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>  
                            @enderror
                            <label for="floatingEmail">Alamat Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control @error('no_hp') is-invalid @enderror" id="floatingNoHP" name="no_hp" placeholder=" Nomor HP ...">
                            @error('no_hp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>  
                            @enderror
                            <label for="floatingNoHP">Nomor HP</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" name="password" placeholder=" Password ...">
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>  
                            @enderror
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control @error('password1') is-invalid @enderror" id="floatingPasswordKonfirmasi" name="password1" placeholder="Ulangi Password ...">
                            @error('password1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>  
                            @enderror
                            <label for="floatingPasswordKonfirmasi">Konfirmasi Password</label>
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary my-3 rounded-0 btn-lg">REGISTER</button>
                        </div>
                    </form>
                    <div class="d-flex justify-content-between">
                        <a href="/loginuser" class="text-decoration-none">Login Sebagai Pelanggan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection