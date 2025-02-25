@extends('layouts.frontend')

@section('isi')
{{-- heroFasilitas --}}
<section id="hero">
    <div class="container d-flex align-items-center text-light justify-content-center">
        <div class="row w-100 d-flex justify-content-center align-items-center">
            <div class="col-8">
                <div class="title text-center">
                    <h3 class="fs-1">FACILITIES ON</h3>
                    <h1>OCEAN'S GRAND</h1>
                    <p class="text-light fw-bold py-2">Our Pledge - Your Satisfaction is Our Top Priority</p>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- End of heroFasilitas --}}

{{-- Statement --}}
<section id="statement">
    <div class="container py-5">
        <h1 class="text-center mb-4">OUR PLEDGE</h1>
        <div class="row">
            <div class="col-12">
                <p class="lead bg-light p-3 fst-italic fw-semibold text-center shadow">Every day were saying, ‘How can we keep this customer happy?’ How can we get ahead in innovation by doing this, because if we don’t, somebody else will.</p>
                <p>This quote, of which we will reveal the author later, sums up our philosophy well. Our commitment, our search for efficiency through technology and innovation has a great goal, a conditio sine qua non: customer satisfaction. The Fantini Group has developed in all these decades a natural propensity to follow the needs of all customers (where reasonable) and to find the most functional way to fulfill them. A fundamental pillar of this philosophy is certainly total customer assistance, a 360 ° customer service that accompanies, advises and addresses the customer in all phases that distinguish the acquisition of a product and / or service with us.</p>
                <p>The product itself, delivered “aseptically”, although a product of excellence, is no longer sufficient to provide the customer with real satisfaction. When one of our customers is satisfied, however, his loyalty becomes almost automatic and generates, in the vast majority of cases, positive feedback and an increase in the credibility of the Fantini brand. The experience and the studies of the sector have taught us this. On the other hand, the customer is the one who actually involves the growth of the company itself.</p>
                <p>Our customer service is our first guarantee and consists of a series of activities aimed at assisting those who use our products before, during and after the purchase. Once the product / service has been identified, our philosophy has 4 basic steps: installation – assistance – spare parts – technical documentation. We develop the concepts.</p>
            </div>
        </div>
    </div>
</section>
{{-- End of Statement --}}

{{-- detail --}}
<section id="detailfacilities">
    <div class="container py-5 text-light">
        <h1 class="text-center mb-5 text-light">HOTEL FACILITIES & GUEST SERVICE</h1>
        <div class="row">
            <div class="col-4">
                <h4>Hotel Facilities</h4>
                <ul>
                    <li>Poolside Bar</li>
                    <li>Semi Open & Outdoor Restaurant</li>
                    <li>Swimming Pool/Jacuzzi</li>
                    <li>Fitness Center</li>
                    <li>Car Parking</li>
                    <li>Airport Shuttle</li>
                    <li>Family Room</li>
                    <li>Continual Breakfast</li>
                    <li>Hot Tub</li>
                    <li>45 Seating Conference Room</li>
                    <li>35 Seating Private AC Dining Room</li>
                </ul>
                <h4 class="mt-5">Guest Service</h4>
                <ul>
                    <li>24-Hour room servic</li>
                    <li>Free wireless internet access</li>
                    <li>Complimentary use of hotel bicycle</li>
                    <li>Laundry service</li>
                    <li>Tour & excursions</li>
                    <li>24 Hour concierge</li>
                    <li>Meeting facilities</li>
                    <li>E-Bike & horse cart rental</li>
                    <li>Babysitting on request</li>
                </ul>
            </div>
            <div class="col-8 facilities-photos">
                <img src="/images/fasilitas/bar.jpeg" alt="">
                <img src="/images/fasilitas/fitness.jpg" alt="">
                <img src="/images/fasilitas/jacuzzi.avif" alt="">
                <img src="/images/fasilitas/led.jpg" alt="">
                <img src="/images/fasilitas/parking.jpeg" alt="">
                <img src="/images/fasilitas/reception.jpg" alt="">
                <img src="/images/fasilitas/restaurant.jpeg" alt="">
                <img src="/images/fasilitas/sauna.jpg" alt="">
                <img src="/images/fasilitas/shower.jpg" alt="">
                <img src="/images/fasilitas/shuttle.jpg" alt="">
                <img src="/images/fasilitas/sofa.jpg" alt="">
                <img src="/images/fasilitas/swimming.jpeg" alt="">
            </div>
        </div>
    </div>
</section>
{{-- end of detail --}}

{{-- tagline --}}
{{-- end of tagline --}}
@endsection
