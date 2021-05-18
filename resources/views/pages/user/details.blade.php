@extends('layout.User.user')
@section('Judul')
    Details
@endsection

@section('content')
    <main>
        <section class="section-details-header"> </section>
        <section class="section-details-content">
            <div class="container">
                <div class="row">
                    <div class="col p-0">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    Paket Travel
                                </li>
                                <li class="breadcrumb-item active">
                                    Details
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 pl-lg-0">
                        <div class="card card-details">
                            <h1>{{ $item->title }}</h1>
                            <p>
                                {{ $item->location }}
                            </p>
                            <div class="gallery">
                                <div class="xzoom-container">
                                    <img src="{{ $item->galleries->count() ? Storage::url($item->galleries->first()->image) : "" }}" class="xzoom" id="xzoom-default" xoriginal="{{ Storage::url($item->galleries->first()->image) }}">
                                </div>
                                <div class="xzoom-thumbs">
                                @foreach ($item->galleries as $i)
                                    
                                @endforeach
                                    <a href="{{ Storage::url($i->image) }}">
                                        <img src="{{Storage::url($i->image) }}" class="xzoom-gallery" width="120" xpreview="{{ Storage::url($i->image) }}">
                                    </a>
                               
                                </div>

                            </div>
                            <h2>Tentang Wisata</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tempus aliquet nibh, ut sodales lectus rhoncus ut. Sed vitae nisi aliquam, vestibulum felis eget, hendrerit velit. Sed eu hendrerit ipsum. Cras rutrum eleifend sollicitudin. Mauris ac sem
                                malesuada, tincidunt arcu vel, accumsan felis. Maecenas vitae erat vitae turpis congue auctor sit amet vel magna. Donec congue, lacus vitae aliquam euismod, justo arcu condimentum mi, non luctus sapien quam non orci. Pellentesque
                                habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus et ultricies velit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;
                            </p>
                            <p>
                                Sed commodo facilisis tortor, at tempus tortor semper ac. Suspendisse id mi dolor. Nam nisl quam, accumsan at rhoncus ut, ornare ut erat. Nulla ac eros turpis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla
                                facilisi. Cras eu rutrum odio, vitae molestie magna. Maecenas et mi id odio finibus pharetra. Phasellus porttitor rhoncus laoreet. Nunc facilisis odio id nunc volutpat volutpat. Proin non finibus justo, eget vehicula nibh.
                                Quisque id urna pretium, pellentesque nibh ornare, dignissim enim. Cras sed sagittis justo.
                            </p>
                            <div class="features row">
                                <div class="col-md-4">
                                    <div class="description">
                                        <img src="/FrontEnd/frontend/images/ic_event.png" alt="" class="features-image">
                                        <div class="description">
                                            <h3>Feature Event</h3>
                                            <p>{{ $item->featured_event }}</p>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4 border-left border-right">
                                    <div class="description">
                                        <img src="/FrontEnd/frontend/images/ic_bahasa.png" alt="" class="features-image">
                                        <div class="description">
                                            <h3>Language</h3>
                                            <p>{{ $item->language }}</p>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="description">
                                        <img src="/FrontEnd/frontend/images/ic_foods.png" alt="" class="features-image">
                                        <div class="description">
                                            <h3>Foods</h3>
                                            <p>{{ $item->foods }}</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 card-right">
                        <div class="card card-details card-right">
                            <h2>Members are going</h2>
                            <div class="members my-2">
                                <img src="/FrontEnd/frontend/images/avatar-1.png" alt="" class="member-image mr-2">
                                <img src="/FrontEnd/frontend/images/avatar-2.png" alt="" class="member-image mr-2">
                                <img src="/FrontEnd/frontend/images/avatar-3.png" alt="" class="member-image mr-2">
                                <img src="/FrontEnd/frontend/images/avatar-1.png" alt="" class="member-image mr-2">
                                <img src="/FrontEnd/frontend/images/avatar-1.png" alt="" class="member-image mr-2">
                            </div>
                            <hr>
                            <h2>Trip Information</h2>
                            <table class="trip-information">
                                <tr>
                                    <th width="50%">Date of Departure</th>
                                    <td width="50%" class="text-right">
                                        {{ Carbon\Carbon::create($item->departure_date)->format('F n, Y') }}
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Duration</th>
                                    <td width="50%" class="text-right">
                                       {{$item->duration}}
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Type</th>
                                    <td width="50%" class="text-right">
                                      {{$item->type}}
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Price</th>
                                    <td width="50%" class="text-right">
                                       RP  {{number_format($item->price) }}/person
                                    </td>
                                </tr>
                            </table>
                        </div>
                        @auth
                        <div class="join-container">
                            <form action="{{ route('checkout_process',$item->id) }}" method="POST">
                                @csrf
                         <button href="#" class="btn btn-block btn-join-now mt-3 py-2" type="submit">
                                Join Now
                        </button>
                            </form>
                        
                        </div>
                        @endauth
                           
                        @guest
                       <a href="{{ route('login') }}" class="btn btn-block btn-join-now mt-3 py-2">
                                Login Or Register
                        </a>
                        @endguest

                     
                    </div>

                </div>
            </div>
        </section>

    </main>
@endsection
@push('addons')
<script type="text/javascript" src="/FrontEnd/frontend/libraries/xzoom/xzoom.min.js"></script>
      <script>
        $(document).ready(function() {
            $('.xzoom, .xzoom-gallery').xzoom({
                zoomwidth: 500,
                title: false,
                tint: '#333',
                xoffset: 15
            });
        });
    </script>
@endpush