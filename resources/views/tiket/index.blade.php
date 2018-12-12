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
                            <?php $no=1;?>
                            @foreach ($tiket as $item)
                              <tr>
                                    <td>{{ $no }}</td>
                                    <td>{{ $item->name_tiket }}</td>
                                    <td>{{ $item->jenis_tiket }}</td>
                                    <td>{{ $item->kategori->nama_kategori }}</td>
                                    <td>{{ $item->jumlah_tiket }}</td>
                                    <td>{{ $item->harga_tiket }}</td>
                                    <td><a href="{{ route('tiket.edit', $item->id) }}" name="submit" class="btn btn-danger">Edit</a></td>
                                    <td><button type="submit" name="submit" class="btn btn-danger">Hapus</button></td>

                                </tr>
                            <?php $no++; ?>
  
                            @endforeach
                              
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
