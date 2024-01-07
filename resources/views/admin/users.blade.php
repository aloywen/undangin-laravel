@extends('layout.header')

@section('content')
    
{{-- TITLE --}}
<div class="page-title">
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Users</h3>
        </div>
    </div>

    
</div>

{{-- ISI --}}
<section class="section mt-5">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">
                Data Users
            </h5>
        </div>
        <div class="card-body">
            <table class="table table-striped" id="table1">
                <thead>
                    <tr>
                        <th>Email</th>
                        <th>Name</th>
                        <th>Role</th>
                        <th>Category</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $u)
                    <tr>
                        <td>{{ $u->email }}</td>
                        <td>{{ $u->name }}</td>
                        <td>{{ $u->role_id }}</td>
                        <td>{{ $u->category_id }}</td>
                        <td>
                            <button class="btn badge bg-warning">Edit</button>
                            <button class="btn badge bg-danger" onclick="confirm()">Hapus</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection
