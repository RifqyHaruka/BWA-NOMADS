@extends('layout.Admin.admin')

@section('content')
       <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="{{ route('travel.create') }}" class=" btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-plus fa-sm text-white-50"></i> Tambah Data</a>
                    </div>

                   <div class="row">
                       <div class="card-body">
                           <div class="table-responsive">
                               <table class="table table-bordered" width=100% cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Number</th>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>Location</th>
                                            <th>Type</th>
                                            <th>Departure Date</th>
                                            <th>price</th>
                                            <th>Action</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($items as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->title }}</td>
                                                <td>{{ $item->location }}</td>
                                                <td>{{ $item->type }}</td>
                                                <td>{{ $item->departure_date }}</td>
                                                <td>{{ number_format($item->price) }}</td>
                                                <td>
                                                    <a href="{{ route('travel.edit',$item->id) }}" class="btn btn-info">
                                                        <i class="fa fa-pencil-alt">
                                                            </i>     
                                                    </a>    
                                                    <form action="{{ route('travel.destroy',$item->id) }}" method="POST" class="d-inline">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-danger">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </form>

                                                </td>
                                            </tr>
                                        @endforeach
                                        
                                    </tbody>
                               </table>
                           </div>
                       </div>
                   </div>
                </div>
                <!-- /.container-fluid -->
@endsection