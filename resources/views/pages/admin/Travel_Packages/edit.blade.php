@extends('layout.Admin.admin')

@section('content')
       <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Tambah Data Barang</h1>
                        
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
                            <form action="{{ route('travel.update',$travel->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="form-group">
                                    <input type="text" class="form-control" name="title" placeholder="Title" value="{{ $travel->title }}">
                                </div>
                            <div class="form-group">
                                    <input type="text" class="form-control" name="location" placeholder="Location" value="{{ $travel->location }}">
                                </div>
                                <div class="form-group">
                                    <textarea type="text" class="form-control" name="about" placeholder="About" value="{{ $travel->about }}"></textarea>
                                </div>
                                 <div class="form-group">
                                    <input type="text" class="form-control" name="featured_event" placeholder="Event" value="{{ $travel->featured_event }}">
                                </div>
                                 <div class="form-group">
                                    <input type="text" class="form-control" name="language" placeholder="Language" value="{{ $travel->language }}">
                                </div>
                                 <div class="form-group">
                                    <input type="text" class="form-control" name="foods" placeholder="Foods" value="{{ $travel->foods }}">
                                </div>
                                  <div class="form-group">
                                    <input type="date" class="form-control" name="departure_date" placeholder="Date" value="{{ $travel->departure_date }}">
                                </div>
                                  <div class="form-group">
                                    <input type="text" class="form-control" name="duration" placeholder="Duration" value="{{ $travel->duration}}">
                                </div>
                                  <div class="form-group">
                                    <input type="text" class="form-control" name="type" placeholder="Type" value="{{ $travel->type }}">
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control" name="price" placeholder="Price" value="{{ $travel->price }}">
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
