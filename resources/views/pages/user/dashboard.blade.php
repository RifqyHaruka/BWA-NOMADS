
@extends('layout.User.user')

@section('Judul')
    Dashboard
@endsection

@section('content')
    <!-- header -->
    <header class="text-center">
        <h1>
            Explore The Beatiful World
            <br> As Easy One Click
        </h1>
        <p class="mt-3">
            You will see beautiful
            <br> moment you never see before
        </p>
        <a href="#" class="btn btn-get-started px-4 mt-4">
            Get Started
        </a>
    </header>

    <main>
        <section class="section-stats" id="stats">
            <div class="container">
                <div class="row  justify-content-center ">
                    <div class="col-3 col-md-2 stats-detail border-right-0">
                        <h2>20K</h2>
                        <p>Members</p>
                    </div>
                    <div class="col-3 col-md-2 stats-detail border-right-0 border-left-0">
                        <h2>12</h2>
                        <p>Countries</p>
                    </div>
                    <div class="col-3 col-md-2 stats-detail border-right-0 border-left-0">
                        <h2>3K</h2>
                        <p>Hotel</p>
                    </div>
                    <div class="col-3 col-md-2 stats-detail border-left-0">
                        <h2>72</h2>
                        <p>Partners</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-popular" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-popular-heading">
                        <h2>Wisata Popular</h2>
                        <p>
                            Something that you never try
                            <br> before in this world
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-popular-content" id="popularContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    @forelse ($travel as $item)
                        <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column" style="
                            background-image: url({{$item->galleries->count() ? Storage::url($item->galleries->first()->image) : '' }});"">
                            <div class="travel-country">{{ $item->location }}</div>
                            <div class="travel-location">{{ $item->title }}</div>
                            <div class="travel-button mt-auto">
                                <a href="{{ route('detail', $item->slug) }}" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                 
                    @endforeach
                    
                </div>

        </section>

        <section class="section-network" id="networks">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2>Our Networks</h2>
                        <p>
                            Companies are trusted us
                            <br> more than just a trip
                        </p>
                    </div>
                    <div class="cold-md-8 text-center">
                        <img src="/FrontEnd/frontend/images/partner.png" alt="" class="img-partner">
                    </div>
                </div>
            </div>
        </section>

        <section class="section-testimonial-heading" id="testimonialHeading">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2>They Are Loving Us</h2>
                        <p>
                            Moments were giving them
                            <br> the best experience
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-testimonial-content" id="testimonialConntet">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="/FrontEnd/frontend/images/avatar-1.png" alt="user" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Angga Risky</h3>
                                <p class="testimonial">
                                    "It was glorious and i could not stop to say wohoo for every single moment Dankeeee"
                                </p>
                                <hr>
                                <p class="trip-to mt-2">
                                    Trip to Ubud
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="/FrontEnd/frontend/images/avatar-2.png" alt="user" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Shayna</h3>
                                <p class="testimonial">
                                    “ The trip was amazing and I saw something beautiful in that Island that makes me want to learn more “
                                </p>
                                <hr>
                                <p class="trip-to mt-2">
                                    Trip to Nusa Penida
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="/FrontEnd/frontend/images/avatar-3.png" alt="user" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Shabrina</h3>
                                <p class="testimonial">
                                    “ I loved it when the waves was shaking harder — I was scared too “
                                </p>
                                <hr>
                                <p class="trip-to mt-2">
                                    Trip to Karimun Jawa
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">
                            I Need Help
                        </a>
                        <a href="{{ route('register') }}" class="btn btn-get-started px-4 mt-4 mx-1">
                            Get Started
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
    

   