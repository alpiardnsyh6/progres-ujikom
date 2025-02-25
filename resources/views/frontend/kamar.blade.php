@extends('layouts.frontend')

@section('isi')

{{-- heroFasilitas --}}
<section id="hero">
    <div class="container d-flex align-items-center text-light justify-content-center">
        <div class="row w-100 d-flex justify-content-center align-items-center">
            <div class="col-8">
                <div class="title text-center">
                    <h3 class="fs-1">ROOMS ON</h3>
                    <h1>OCEAN'S GRAND</h1>
                    <p class="text-light fw-bold py-2">Our Pledge - Your Satisfaction is Our Top Priority</p>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- End of heroFasilitas --}}

{{-- Room Detail --}}
<section id="room" class="py-5">
    <div class="container text-light">
        <h1 class="text-center mb-4">Room Details</h1>
        <p class="lead text-center mb-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente voluptate possimus alias soluta voluptates, deserunt minima enim eum voluptatem ipsum!</p>
        <div class="row align-items-center mb-5">
            <div class="col-6">
                <img src="/images/superior.jpg" alt="superior.jpg" class="img-fluid">
            </div>
            <div class="col-6 text-light ps-5">
                <h3 class="text-primary">Superior Room</h3>
                <p>The 32 sqm well-appointed room with contemporary design is where you can enjoy the view of the Pool and Garden or the brilliant city skyline view.  This room with contemporary design and located on higher floor</p>
                <h5 class="text-info">Offers</h5>
                <ul>
                    <li>Bathtub & shower</li>
                    <li>Coffee and tea maker</li>
                    <li>Hi-speed wireless internet access in room</li>
                    <li>Free access to Olympic-size swimming pool, fitness center & other sport facilities</li>
                    <li>Turn-down service</li>
                </ul>
                <button class="btn btn-primary rounded-0 text-uppercase">Book Now</button>
                <div class="row fasilitas-kamar mt-4">
                    <div class="col-4">
                        <img src="/images/fasilitas/coffee.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-4">
                        <img src="/images/fasilitas/led.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-4">
                        <img src="/images/fasilitas/shower.jpg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center mb-5">
            <div class="col-6 text-light pe-5">
                <h3 class="text-primary">Deluxe Room</h3>
                <p>Designed for discerning travelers, the 32 sqm Premier Deluxe Room with more space for work or relaxing complete with modern day amenities to fulfill your stay requirements.</p>
                <h5 class="text-info">Offers</h5>
                <ul>
                    <li>Shower</li>
                    <li>Coffee and tea maker</li>
                    <li>Hi-speed wireless internet access in room</li>
                    <li>Free access to Olympic-size swimming pool, fitness center & other sport facilities</li>
                    <li>Turn-down service</li>
                </ul>
                <button class="btn btn-primary rounded-0 text-uppercase">Book Now</button>
                <div class="row fasilitas-kamar mt-4">
                    <div class="col-4">
                        <img src="/images/fasilitas/coffee.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-4">
                        <img src="/images/fasilitas/led.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-4">
                        <img src="/images/fasilitas/shower.jpg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <div class="col-6">
                <img src="/images/deluxe.jpg" alt="superior.jpg" class="img-fluid">
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-6">
                <img src="/images/executive.jpg" alt="superior.jpg" class="img-fluid">
            </div>
            <div class="col-6 text-light ps-5">
                <h3 class="text-primary">Executive Room</h3>
                <p>Indonesian traditional meets contemporary design for our Executive Room. This 32 sqm is where guests can truly enjoy a new definition of luxury with the extensive view of Jakarta’s city Centre, or the lush garden.</p>
                <h5 class="text-info">Offers</h5>
                <ul>
                    <li>1 King Size Bed</li>
                    <li>Coffee and tea maker</li>
                    <li>Hi-speed wireless internet access in room</li>
                    <li>Free access to Olympic-size swimming pool, fitness center & other sport facilities</li>
                    <li>Shower Bathroom</li>
                    <li>Complimentary daily local or international newspaper</li>
                </ul>
                <button class="btn btn-primary rounded-0 text-uppercase">Book Now</button>
                <div class="row fasilitas-kamar mt-4">
                    <div class="col-4">
                        <img src="/images/fasilitas/coffee.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-4">
                        <img src="/images/fasilitas/led.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-4">
                        <img src="/images/fasilitas/shower.jpg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- End of Room Detail --}}
@endsection
