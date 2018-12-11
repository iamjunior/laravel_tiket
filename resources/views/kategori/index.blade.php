@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Kategori</div>

                <table class="table table-bordered" id="users-table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Id</td>
                                <td>Name</td>
                                <td>Email</td>
                                <td>Created At</td>
                                <td>Updated At</td>
                            </tr>
                        </tbody>
                    </table>                
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
