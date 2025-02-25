@extends('layouts.frontend')

@section('isi')
    <div class="row min-vh-100 align-items-center justify-content-center">
        <div class="col-4">
            @if(session('info'))
                    <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                        {{ session('info') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            <div class="card p-3 rounded-3 shadow-lg border-0">
                <div class="card-header text-center">
                    <img src="images/logo.png" style="width:100px !important;" alt="">
                    <h5>Silahkan Login dengan akun anda</h5>
                </div>
                <div class="card-body">
                    <form action="/loginuser" method="POST">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control @error('email') is-invalid @enderror" id="floatingEmail" name="email" placeholder="name@example.com">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <label for="floatingEmail">Alamat Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" name="password" placeholder="Password...">
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary my-3 rounded-0 btn-lg">LOGIN  </button>
                        </div>
                    </form>
                    <div class="d-flex justify-content-between">
                        <a href="/login" class="text-decoration-none">Login Sebagai Admin</a>
                        <a href="/registeruser" class="text-decoration-none">Registrasi Akun</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection