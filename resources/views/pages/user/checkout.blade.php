@extends('layout.User.user')

@section('Judul')
    CheckOut
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
                                <li class="breadcrumb-item">
                                    Details
                                </li>
                                <li class="breadcrumb-item active">
                                    Checkout
                                </li>

                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 pl-lg-0">
                        <div class="card card-details">
                             @if ($errors->any())
                        <div class="alert alert-danger">
                          <ul>
                            @foreach ($errors->all() as $error)
                         <li>{{ $error }}</li>
                                    @endforeach
                            </ul>
                        </div>
                    @endif
                            <h1>Who is Going?</h1>
                            <p>
                                Trip to {{ $item->travel_packages->title }}, {{ $item->travel_packages->location }}
                            </p>
                            <div class="attendee">
                                <table class="table table-responsive-sm text-center">
                                    <thead>
                                        <tr>
                                            <td>Picture</td>
                                            <td>Name</td>
                                            <td>Nationality</td>
                                            <td>Visa</td>
                                            <td>Passport</td>
                                            <td></td>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @forelse ($item->details as $detail)
                                             <tr>
                                            <td>
                                                <img src="https://ui-avatars.com/api/?name={{ $detail->username }}" height="60" class="rounded-circle">
                                            </td>
                                            <td class="align-middle">
                                                {{ $detail->username }}
                                            </td>
                                            <td class="align-middle">
                                                {{ $detail->nationality }}
                                            </td>
                                            <td class="align-middle">
                                                {{ $detail->is_visa ? '30 Days' : 'N/A' }}
                                            </td>
                                            <td class="align-middle">
                                                {{ \Carbon\Carbon::createFromDate($detail->doe_passport) > \Carbon\Carbon::now() ? 'Active' : 'Inactive' }}
                                            </td>
                                            <td class="align-middle">
                                                <a href="{{ route('checkout_remove', $detail->id) }}">
                                                    <img src="/FrontEnd/frontend/images/ic_remove.png" alt="">
                                                </a>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="6" class="text-center">
                                                no Visitor
                                            </td>
                                        </tr>
                                            
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            <div class="member mt-5">
                                <h2>Add Member</h2>
                                <form action="{{ route('checkout_create',$item->id) }}" class="form-inline" method="POST">
                                    @csrf
                                    <label for="username" class="sr-only">Name</label>
                                    <input type="text" name="username" class="form-control mb-2 mr-sm-2" id="inputUsername" placeholder="Username" required>

                                     <label for="username" class="sr-only">Nationality</label>
                                    <input type="text" name="nationality" class="form-control mb-2 mr-sm-2" id="inputUsername" placeholder="Nationality"
                                    style="width: 50px">

                                    <label for="inputVisa" class="sr-only">Visa</label>
                                    <select name="is_visa" id="inputVisa" class="custom-select mb-2 mr-sm-2" required>
                                        <option value="" selected>VISA</option>
                                        <option value="1">30 Days</option>
                                        <option value="0">N/A</option>
                                    </select>

                                    <label for="doePassport" class="sr-only">DOE Passport</label>
                                    <div class="input-group mb-2 mr-sm-2">
                                        <input type="text" class="form-control datepicker mb-2 mr-sm-2 my-2" id="doePassport" placeholder="DOE Passport" name="doe_passport">
                                    </div>

                                    <button type="submit" class="btn btn-add-now mb-2 px-4">
                                        Add Now
                                    </button>

                                </form>
                                <h3 class="mt-2 mb-0">Note</h3>
                                <p class="disclaimer mb-0">
                                    You are only able to invite member thta has registered in Nomads.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-details card-right">

                            <h2>Checkout Informations</h2>
                            <table class="trip-information">
                                <tr>
                                    <th width="50%">Members</th>
                                    <td width="50%" class="text-right">
                                    {{ $item->details->count() }}
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Addtional VISA</th>
                                    <td width="50%" class="text-right">
                                       {{number_format($item->addtional_visa)}}
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Trip Price</th>
                                    <td width="50%" class="text-right">
                                        {{ number_format ($item->travel_packages->price) }}/ Person
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Sub Total</th>
                                    <td width="50%" class="text-right">
                                      {{number_format($item->transaction_total)}} 
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Total(+Unique)</th>
                                    <td width="50%" class="text-right">
                                        <span class="text-blue">{{ number_format($item->transaction_total)}},</span>
                                        <span class="text-orange">{{ mt_rand(0,99) }}</span>
                                    </td>
                                </tr>
                            </table>
                            <hr>
                            <h2>Payment Instructions</h2>
                            <p class="payment-instructions">
                                Please complete your payment before to continue the woderful trip
                            </p>
                            <div class="bank">
                                <div class="bank-item pb-3">
                                    <img src="/FrontEnd/frontend/images/ic_bank.png" alt="" class="bank-image">
                                    <div class="description">
                                        <h3>PT Nomads ID</h3>
                                        <p>
                                            0881 8829 8800
                                            <br> Bank Central Asia
                                        </p>

                                    </div>
                                    <div class="clearfix">

                                    </div>
                                </div>
                                <div class="bank-item pb-3">
                                    <img src="/FrontEnd/frontend/images/ic_bank.png" alt="" class="bank-image">
                                    <div class="description">
                                        <h3>PT Nomads ID</h3>
                                        <p>
                                            0899 8501 7888
                                            <br> Bank HBSC
                                        </p>

                                    </div>
                                    <div class="clearfix">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="join-container">
                            <a href="{{ route('checkout_sucess', $item->id) }}" class="btn btn-block btn-join-now mt-3 py-2">
                                I Have Made Payment
                            </a>
                        </div>
                        <div class="text-center mt-3">
                            <a href="{{ route('detail', $item->travel_packages->slug) }}" class="text-muted">
                                Cancel Booking
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>

@endsection
@push('addons')
   <script src="/FrontEnd/frontend/libraries/gijgo/js/gijgo.min.js"></script> 
   <script>
        $(document).ready(function() {
            $('.datepicker').datepicker({
                format:'yyyy-mm-dd',
                uiLibrary: 'boostrap4',
                icons: {
                    rightIcon: '<img src="/FrontEnd/frontend/images/ic_doe.png" class="doe-image mr-3"/>'
                }
            })
        });
    </script>
@endpush