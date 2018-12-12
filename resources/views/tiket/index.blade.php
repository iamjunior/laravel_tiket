@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-header">Tiket</div>
                  <div class="card-body">
                 <a href="{{ route('tiket.create') }}" class="btn btn-danger btn-sm">Tambah Tiket</a>
                   <hr>
                   @include('notifikasi')
                     <table class="table table-bordered" id="users-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Tiket</th>
                                <th>Jenis Tiket</th>
                                <th>Kategori Tiket</th>
                                <th>Jumlah Tiket</th>
                                <th>Harga Tiket</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                              <tr>
                                    <td>1</td>
                                    <td>NAMA TIKET</td>
                                    <td>JENIS TIKET</td>
                                    <td>kategori TIKET</td>
                                    <td>JUMLAH TIKET</td>
                                    <td>HARGA TIKET TIKET</td>
                                    <td><button type="submit" name="submit" class="btn btn-danger">Edit</button></td>
                                    <td><button type="submit" name="submit" class="btn btn-danger">Hapus</button></td>

                                </tr>

                        </tbody>
                    </table>

                  </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
$(function() {
    $('#users-table').DataTable();
});
</script>
@endpush
