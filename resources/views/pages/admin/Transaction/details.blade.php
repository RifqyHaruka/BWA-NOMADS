@extends('layout.Admin.admin')

@section('content')
       <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Detail Transaksi {{ $items->user->name }}</h1>
                        
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                          <ul>
                            @foreach ($errors->all() as $error)
                         <li>{{ $error }}</li>
                                    @endforeach
                            </ul>
                        </div>
                    @endif

                   
                    <div class="card shadow">
                        <div class="card-body">
                            <table class="table-bordered">
                                <tr>
                                    <th>ID</th>
                                    <td>{{ $items->id }}</td>
                                </tr>
                                <tr>
                                    <th>Paket Travel</th>
                                    <td>{{ $items->travel_packages->title }}</td>
                                </tr>
                                <tr>
                                    <th>Pembeli</th>
                                    <td>{{ $items->user->name }}</td>
                                </tr>
                                <tr>
                                    <th>Addtional Visa</th>
                                    <td>{{ $items->addtional_visa }}</td>
                                </tr>
                                <tr>
                                    <th>Total Transaksi</th>
                                    <td>{{ $items->transaction_total }}</td>
                                </tr>
                                <tr>
                                    <th>Status Transaksi</th>
                                    <td>{{ $items->transaction_status }}</td>
                                </tr>

                                <tr>
                                    <th>Pembelian</th>
                                    <td>
                                        <table class="table table-bordered">
                                            <tr>
                                                <th>ID</th>
                                                <th>Nama</th>
                                                <th>Nationality</th>
                                                <th>Visa</th>
                                                <th>DOE Passport</th>
                                            </tr>

                                            @foreach ($items->details as $detail)
                                                <tr>
                                                    <td>{{ $detail->id }}</td>
                                                    <td>{{ $detail->username }}</td>
                                                    <td>{{ $detail->nationality }}</td>
                                                    <td>{{ $detail->is_visa ? '30 days' : 'N/A' }}</td>
                                                    <td>{{ $detail->doe_passport }}</td>
                                                </tr>
                                                
                                            @endforeach
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
              
                <!-- /.container-fluid -->
@endsection














{{-- <form action="{{ route('travel.store') }}" method="POST">
    @csrf
    <label for="">
        <input type="text" name="title">
    </label>
    <label for="">
        <input type="text" name="location">
    </label>
    <label for="">
        <input type="text" name="about">
    </label>
    <label for="">
        <input type="text" name="featured_event">
    </label>
    <label for="">
        <input type="text" name="language">
    </label>
    <label for="">
        <input type="text" name="foods">
    </label>
    <label for="">
        <input type="date" name="departure_date">
    </label>
    <label for="">
        <input type="text" name="duration">
    </label>
    <label for="">
        <input type="text" name="type">
    </label>
    <label for="">
        <input type="number" name="price">
    </label>
<button type="submit">Save</button>
</form> --}}
