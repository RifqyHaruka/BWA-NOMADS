@extends('layout.Admin.admin')

@section('content')
       <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="{{ route('galleries.create') }}" class=" btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-plus fa-sm text-white-50"></i> Tambah Poto</a>
                    </div>

                   <div class="row">
                       <div class="card-body">
                           <div class="table-responsive">
                               <table class="table table-bordered" width=100% cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nomor</th>
                                            <th>ID</th>
                                            <th>Nama Paket Travel</th>
                                            <th>Gambar</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($items as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->travel_packages->title }}</td>
                                                <td>
                                                    <img src="{{ Storage::url($item->image) }}" alt="" style="width: 150px" class="img-thumbnail">
                                                </td>
                                                <td>
                                                    <a href="{{ route('galleries.edit',$item->id) }}" class="btn btn-info">
                                                        <i class="fa fa-pencil-alt">
                                                            </i>     
                                                    </a>    
                                                    <form action="{{ route('galleries.destroy',$item->id) }}" method="POST" class="d-inline">
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