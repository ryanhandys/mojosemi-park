@extends('layouts.admin')

@section('content')
    <!-- Content Start -->
    <div class="content">

        <!-- Sale & Revenue Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Tanggal</th>
                                <th>Jumlah</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (isset($pesanan))
                            @foreach ($pesanan as $data)  
                            <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->user->name}}</td>
                                <td>{{$data->alamat}}</td>
                                <td>{{$data->tanggal}}</td>
                                <td>{{$data->jumlah}}</td>
                                <td>{{$data->status}}</td>
                              
                                <td>    
                                    <button onclick="modal(`+data+`)" class="btn btn-primary">Datang</button>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <form method="POST" action="">
                    @csrf
                    <input type="hidden" name="id_kode">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">SUDAH DATANG</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="kode" class="form-label">Kode Booking</label>
                            <input type="text" name="kode" class="form-control" id="kode">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
              </div>
            </div>
        </div>
        <script>
            function modal(id){
                $('input[name=id_kode]').val(id);
                $('#exampleModal').modal('show');
            }
        </script>
        
        <!-- Sale & Revenue End -->
    </div>
    <!-- Content End -->
@endsection