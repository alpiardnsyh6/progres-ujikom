@extends('layouts.frontend')

@section('isi')

<!-- {{-- Hero Image --}}
{{-- <section id="hero">
    <div class="container d-flex align-items-center text-light justify-content-center">
        <div class="row w-100 d-flex justify-content-between align-items-center">
            <div class="col-7">
                <div class="title">
                    <h1>HOTEL TOUR</h1>
                    <p class="lead text-warning">A place to experience and enjoy the life</p>
                </div>
            </div>
            <div class="col-5 p-5">
                <form action="" class="p-4 shadow">
                    <h3 class="text-warning mb-3">Reservation</h3>
                    <div class="form-group mb-3">
                        <label for="" class="mb-2">Arrival Date</label>
                        <input type="date" class="form-control rounded-0">
                    </div>
                    <div class="form-group mb-3">
                        <label for="" class="mb-2">Departure Date</label>
                        <input type="date" class="form-control rounded-0">
                    </div>
                    <div class="form-group row mb-4">
                        <div class="col-6">
                            <label for="" class="mb-2">Persons</label>
                            <input type="number" class="form-control rounded-0">
                        </div>
                        <div class="col-6">
                            <label for="" class="mb-2">Room</label>
                            <input type="number" class="form-control rounded-0">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-warning rounded-0 fw-bold">Check Availabilty</button>
                </form>
            </div>
        </div>
    </div>
</section> --}}
{{-- Split of Hero Image --}} -->

@if(session('info'))
<div class="alert alert-warning alert-dismissible fade show position-absolute py-4" role="alert" style="z-index: 999; left: 50%; transform: translateX(-50%);">
  <strong>Selamat!</strong> {{ session('info') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<section id="heroImage">
    <video autoplay muted loop id="myVideo">
        <source src="/videos/hero.mp4" type="video/mp4">
    </video>
    <div class="container d-flex align-items-center text-light justify-content-center">
        <div class="row w-100 d-flex justify-content-between align-items-center">
            <div class="col-7">
                <div class="title">
                    <h1>OCEAN'S GRAND</h1>
                    <p class="lead text-light">The best hotel in Purwakarta city</p>
                </div>
            </div>
            <div class="col-4 p-4">
                <form action="/cekkamar" class="p-4 shadow" style="background-color: #171725;" method="POST">
                    @csrf
                    <h3 class="text-primary mb-3">Reservasi</h3>
                    <div class="form-group mb-3" required>
                        <label for="" class="mb-2">Tanggal Datang</label>
                        <input type="date" class="form-control rounded-0" name="tgl_datang"  id="tgl_datang" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="" class="mb-2">Tanggal Pulang</label>
                        <input type="date" class="form-control rounded-0" name="tgl_pulang" id="tgl_pulang" required disabled>
                    </div>
                    <div class="form-group row mb-4">
                        <div class="col-6">
                            <label for="" class="mb-2">Jumlah Tamu</label>
                            <input type="number" class="form-control rounded-0" name="jml_tamu" required>
                        </div>
                        <div class="col-6">
                            <label for="" class="mb-2">Jumlah Kamar</label>
                            <input type="number" class="form-control rounded-0" name="jml_kamar" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary rounded-0 fw-bold">Cek Ketersediaan</button>
                </form>
            </div>
        </div>
    </div>
</section>
{{-- End Hero Image --}}

{{-- About --}}
<section id="about" class="py-5 bg-light">
    <div class="container py-5">
        <h1 class="text-center mb-4">Tentang Kami</h1>
        <p class="lead text-center">Selamat datang di OCEAN'S GRAND, platform inovatif yang dirancang untuk mengubah cara Anda merencanakan dan menikmati perjalanan Anda. Kami percaya bahwa setiap momen perjalanan adalah kesempatan untuk menciptakan kenangan tak terlupakan, dan kami di sini untuk memastikan bahwa pengalaman menginap Anda berjalan lancar dan memuaskan. Tim kamu juga adalah profesional yang berpengalaman di industri pariwisata dan teknologi. Dengan latar belakang yang beragam, kami berkomitmen untuk menciptakan pengalaman pengguna yang luar biasa. Setiap anggota tim kami berfokus pada inovasi dan perbaikan berkelanjutan, sehingga kami dapat memberikan layanan terbaik bagi Anda.
        </p>
    </div>
</section>
{{-- End of About --}}

{{-- Facilities --}}
<section id="facilities" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h3 class="text-center">Resepsionis 24 Jam</h3>
                <hr class="border border-bottom border-dark w-25 mx-auto mb-4" style="border-width: 2px !important">
                <img src="/images/f1.jpg" class="img-fluid">
                <p class="mt-3">Hotel kami menyediakan layanan resepsionis 24 jam untuk memastikan kebutuhan Anda selalu terpenuhi, kapan pun Anda datang atau membutuhkan bantuan selama menginap. Tim kami siap memberikan pelayanan yang ramah dan profesional sepanjang waktu.</p>
            </div>
            <div class="col-4">
                <h3 class="text-center">Kolam Renang</h3>
                <hr class="border border-bottom border-dark w-25 mx-auto mb-4" style="border-width: 2px !important">
                <img src="/images/f2.jpg" class="img-fluid">
                <p class="mt-3">Hotel kami menawarkan fasilitas kolam renang yang nyaman dan bersih, sempurna untuk bersantai dan menyegarkan diri. Nikmati suasana yang tenang sambil berenang atau berjemur di area kolam yang tersedia bagi tamu sepanjang hari.</p>
            </div>
            <div class="col-4">
                <h3 class="text-center">Restoran</h3>
                <hr class="border border-bottom border-dark w-25 mx-auto mb-4" style="border-width: 2px !important">
                <img src="/images/f3.jpg" class="img-fluid">
                <p class="mt-3">Menikmati kenyamanan dan kemewahan dengan fasilitas restoran hotel yang lengkap, dari hidangan lezat hingga suasana yang menenangkan. Setiap momen makan menjadi pengalaman tak terlupakan.</p>
            </div>
        </div>
    </div>
</section>
{{-- End of Facilities --}}

{{-- Room --}}
<section id="room" class="py-5">
    <div class="container">
        @foreach ($kamar as $index => $item)
            @if ($index % 2 == 0)
                <div class="row align-items-center mb-5">
                    <div class="col-6">
                        <img src="/storage/kamar/{{ $item->photo }}" class="w-100" style="height: 400px; object-fit: cover;">
                    </div>
                    <div class="col-6 text-light ps-5">
                        <h3 class="text-primary">{{ $item->tipe }} Room</h3>
                        <p>{{ $item->detail }}</p>
                        <h5 class="text-primary">Fasilitas Kamar</h5>
                        <ul>
                            @foreach ($item->detailfasilitas as $fasilitas)
                                <li>{{ $fasilitas->fasilitas->nama }}</li>
                            @endforeach
                        </ul>
                        <button class="btn btn-primary rounded-0 text-uppercase"  data-bs-toggle="modal" data-bs-target="#cekModal">Cek Ketersediaan</button>
                    </div>
                </div>
            @else
                <div class="row align-items-center mb-5">
                    <div class="col-6 text-light ps-5">
                        <h3 class="text-primary">{{ $item->tipe }} Room</h3>
                        <p>{{ $item->detail }}</p>
                        <h5 class="text-primary">Fasilitas Kamar</h5>
                        <ul>
                            @foreach ($item->detailfasilitas as $fasilitas)
                                <li>{{ $fasilitas->fasilitas->nama }}</li>
                            @endforeach
                        </ul>
                        <button class="btn btn-primary rounded-0 text-uppercase" data-bs-toggle="modal" data-bs-target="#cekModal">Cek Ketersediaan</button>
                    </div>
                    <div class="col-6">
                        <img src="/storage/kamar/{{ $item->photo }}" class="w-100" style="height: 400px; object-fit: cover;">
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</section>
{{-- End of Room --}}

{{-- Testimony --}}
<section id="testimony" class="bg-light py-5">
    <div class="container py-5">
        <h1 class="text-center text-uppercase mb-5">What People Says</h1>
        <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-4">
                            <div class="card p-3 rounded shadow">
                                <i class="fas fa-quote-right text-primary mb-2"></i>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas adipisci minus
                                    repellendus consequuntur iusto nesciunt quaerat asperiores ipsum, enim nulla
                                    molestiae dolorum libero quis nostrum culpa eligendi quo neque distinctio cumque? Ea
                                    debitis ducimus eveniet culpa soluta aliquam necessitatibus veniam illo, voluptatem
                                    nemo aperiam id velit vitae sed asperiores optio?</p>
                                <div class="card-footer d-flex">
                                    <img src="/images/person1.jpg" alt="person1.jpg" class="rounded-circle"
                                        style="width: 50px; height: 50px">
                                    <div class="detail ms-3">
                                        <h5 class="m-0">Alexandria</h5>
                                        <p class="m-0">Borobudur Executive Manager</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card p-3 rounded shadow">
                                <i class="fas fa-quote-right text-primary mb-2"></i>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi modi corrupti
                                    reprehenderit dignissimos! Consectetur dolorum, aspernatur explicabo maxime iste
                                    iusto beatae repudiandae exercitationem tempore atque recusandae quo vel commodi
                                    velit dolorem? Omnis maxime minima suscipit ea dolor nisi, officia quibusdam,
                                    deserunt dolores voluptate ratione amet distinctio! Deleniti veritatis quidem
                                    suscipit, impedit error asperiores itaque animi, nihil, similique consequuntur minus
                                    excepturi!</p>
                                <div class="card-footer d-flex">
                                    <img src="/images/person2.jpg" alt="person2.jpg" class="rounded-circle"
                                        style="width: 50px; height: 50px">
                                    <div class="detail ms-3">
                                        <h5 class="m-0">Emily Brailse</h5>
                                        <p class="m-0">Popular Actress</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card p-3 rounded shadow">
                                <i class="fas fa-quote-right text-primary mb-2"></i>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis, adipisci soluta
                                    aperiam quidem, voluptates numquam aliquam ducimus sint, beatae corporis ea fuga
                                    deserunt aliquid molestiae? Ratione laborum error, eum dolorem tempore officia
                                    repellat eligendi cum soluta cumque autem omnis molestias eius quibusdam facere
                                    beatae repudiandae debitis animi doloribus fuga reprehenderit quo, numquam
                                    blanditiis illum. Nesciunt.</p>
                                <div class="card-footer d-flex">
                                    <img src="/images/person3.jpg" alt="person3.jpg" class="rounded-circle"
                                        style="width: 50px; height: 50px">
                                    <div class="detail ms-3">
                                        <h5 class="m-0">Jack Rodriguez</h5>
                                        <p class="m-0">Professional Football Player</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-4">
                            <div class="card p-3 rounded shadow">
                                <i class="fas fa-quote-right text-primary mb-2"></i>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas adipisci minus
                                    repellendus consequuntur iusto nesciunt quaerat asperiores ipsum, enim nulla
                                    molestiae dolorum libero quis nostrum culpa eligendi quo neque distinctio cumque? Ea
                                    debitis ducimus eveniet culpa soluta aliquam necessitatibus veniam illo, voluptatem
                                    nemo aperiam id velit vitae sed asperiores optio?Lorem ipsum dolor sit amet.</p>
                                <div class="card-footer d-flex">
                                    <img src="/images/person4.jpg" alt="person4.jpg" class="rounded-circle"
                                        style="width: 50px; height: 50px">
                                    <div class="detail ms-3">
                                        <h5 class="m-0">Nathan Straight</h5>
                                        <p class="m-0">Executive Manager Sampoerna</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card p-3 rounded shadow">
                                <i class="fas fa-quote-right text-primary mb-2"></i>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi modi corrupti
                                    reprehenderit dignissimos! Consectetur dolorum, aspernatur explicabo maxime iste
                                    iusto beatae repudiandae exercitationem tempore atque recusandae quo vel commodi
                                    velit dolorem? Omnis maxime minima suscipit ea dolor nisi, officia quibusdam,
                                    deserunt dolores voluptate ratione amet distinctio! Deleniti veritatis quidem
                                    suscipit, impedit error asperiores itaque animi, nihil, similique consequuntur minus
                                    excepturi!</p>
                                <div class="card-footer d-flex">
                                    <img src="/images/person5.jpg" alt="person5.jpg" class="rounded-circle"
                                        style="width: 50px; height: 50px">
                                    <div class="detail ms-3">
                                        <h5 class="m-0">Charlos Albiel</h5>
                                        <p class="m-0">Popular Asian Actor</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card p-3 rounded shadow">
                                <i class="fas fa-quote-right text-primary mb-2"></i>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis, adipisci soluta
                                    aperiam quidem, voluptates numquam aliquam ducimus sint, beatae corporis ea fuga
                                    deserunt aliquid molestiae? Ratione laborum error, eum dolorem tempore officia
                                    repellat eligendi cum soluta cumque autem omnis molestias eius quibusdam facere
                                    beatae repudiandae debitis animi doloribus fuga reprehenderit quo, numquam
                                    blanditiis illum. Nesciunt.</p>
                                <div class="card-footer d-flex">
                                    <img src="/images/person6.jpg" alt="person6.jpg" class="rounded-circle"
                                        style="width: 50px; height: 50px">
                                    <div class="detail ms-3">
                                        <h5 class="m-0">Mohini Dey</h5>
                                        <p class="m-0">Bassist Player</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>
{{-- End of Testimony --}}

<!-- Modal -->
<div class="modal fade" id="cekModal" tabindex="-1" aria-labelledby="cekModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-4" id="cekModalLabel">Cek Reservasi</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="/cekkamar" class="p-4 shadow" method="POST">
                    @csrf
                    <div class="form-group mb-3" required>
                        <label for="" class="mb-2">Tanggal Datang</label>
                        <input type="date" class="form-control rounded-0 tgl_datang" name="tgl_datang" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="" class="mb-2">Tanggal Pulang</label>
                        <input type="date" class="form-control rounded-0 tgl_pulang" name="tgl_pulang" required disabled>
                    </div>
                    <div class="form-group row mb-4">
                        <div class="col-6">
                            <label for="" class="mb-2">Jumlah Tamu</label>
                            <input type="number" class="form-control rounded-0" name="jml_tamu" required>
                        </div>
                        <div class="col-6">
                            <label for="" class="mb-2">Jumlah Kamar</label>
                            <input type="number" class="form-control rounded-0" name="jml_kamar" required>
                        </div>
                    </div>
                    <div class="d-grid">
                    <button type="submit" class="btn btn-warning rounded-0 fw-bold py-3 text-uppercase">Cek Ketersediaan</button>
                    </div>
                </form>
             </div>
         </div>
     </div>
</div>

@endsection

@section('script')
    <script>
        $('#tgl_datang').on('change', function(){
            const tglDatang = $(this).val();
            if(tglDatang != null){
                $('#tgl_pulang').removeAttr('disabled');
            }
        });

        $('#tgl_pulang').on('change', function(){
            const tglDatang = $('#tgl_datang').val();
            const tglPulang = $(this).val();
            if(tglPulang <= tglDatang){
                alert('Tanggal pulang harus lebih besar dari tanggal datang!');
                $(this).val('');
                return false;
            }
        });

        $('.tgl_datang').on('change', function(){
            const tglDatang = $(this).val();
            if(tglDatang != null){
                $('.tgl_pulang').removeAttr('disabled');
            }
        });

        $('.tgl_pulang').on('change', function(){
            const tglDatang = $('.tgl_datang').val();
            const tglPulang = $(this).val();
            if(tglPulang <= tglDatang){
                alert('Tanggal pulang harus lebih besar dari tanggal datang!');
                $(this).val('');
                return false;
            }
        });
    </script>
@endsection





