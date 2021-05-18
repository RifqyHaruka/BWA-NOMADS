@extends('layout.Admin.admin')

@section('content')
       <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Edit Gallery</h1>
                        
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
                            <form action="{{ route('transaction.update', $items->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                
                                <div class="form-group"  >
                                    <label for="">Edit Status</label>
                                    <select name="transaction_status" id="" class="form-control">
                                        <option value="{{ $items->transaction_status }}">Jangan Di Isi</option>
                                        <option value="IN_CART">IN CART</option>
                                        <option value="PENDING">PENDING</option>
                                        <option value="SUCCESS">SUCCESS</option>
                                        <option value="CANCEL">CANCEL</option>
                                        <option value="FAILED">FAILED</option>
                                    </select>
                                </div>
                        
                                <button class="btn btn-info form-control" type="submit">Save</button>
                            </form>
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
