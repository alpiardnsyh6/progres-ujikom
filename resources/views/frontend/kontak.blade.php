@extends('layouts.frontend')

@section('isi')
<section id="hero">
    <div class="container d-flex align-items-center text-light justify-content-center">
        <div class="row w-100 d-flex justify-content-center align-items-center">
            <div class="col-8">
                <div class="title text-center">
                    <h3 class="fs-1">OUR CONTACT</h3>
                    <h1>HOTEL TOUR</h1>
                    <p class="text-dark bg-light fw-bold py-2">Our Pledge - Your Satisfaction is Our Top Priority</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="kontak">
    <div class="container">\
        <h1 class="my-5 text-center">KONTAK KAMI</h1>
        <div class="row justify-content-center mb-5">
            <div class="col-6 card shadow-lg p-5">
                <p class="lead">Harap isi formulir ini dengan jelas</p>
                <hr class="mb-4">
                <form action="">
                    <div class="mb-3">
                        <label for="" class="form-label fw-bold">Nama Lengkap <span class="text-danger">*</span></label>
                        <input type="text" class="form-control py-3" placeholder="Nama lengkap ...">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label fw-bold">Email <span class="text-danger">*</span></label>
                        <input type="text" class="form-control py-3" placeholder="Alamat email ...">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label fw-bold">Pesan <span class="text-danger">*</span></label>
                        <textarea rows="5" class="form-control py-3" placeholder="Tuliskan pesan Anda ..."></textarea>
                    </div>

                    <button class="btn btn-primary rounded-0 btn-lg w-100 mt-3">Kirim</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection