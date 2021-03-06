@extends('layouts.master')
@section('header_name', 'Provinces')
@section('content')
@include('layouts.nav')

<div class="container-fluid">
    @include('layouts.sidebar')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        @include('layouts.header')
        <div class="row">
            <div class="col text-left">
                <h4>List Of Provinces</h4>
            </div>
            <div>
                <a class="btn btn-success font-weight-bold" href="{{ route('admin.province.create') }}">Add Province</a>
            </div>
        </div>
        <hr>
        <div class="table-responsive">
            <table class="table table-hover border">
                <thead>
                    <tr>
                        <th>Province</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($provinces as $province)
                    <tr>
                        <td>{{ ucwords($province['name']) }}</td>
                        <td>
                            <a href="{{ route('admin.province.edit', $province['id']) }}"
                                class="btn btn-sm btn-warning font-weight-bold">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
    </main>
</div>
</div>
@endsection