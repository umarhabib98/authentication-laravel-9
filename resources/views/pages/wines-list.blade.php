@extends('layouts.main')

@section('content')
<!-- wines list page -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Wines list</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Type</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Region</th>
                        @auth
                        @if(auth()->user()->role=="staff")
                        <th scope="col">Actions</th>
                        @endif
                        @endauth
                    </tr>
                </thead>
                <tbody>
                    @foreach ($wines as $wine)
                    <tr>
                        <td>{{ $wine->name }}</td>
                        <td>{{ $wine->type }}</td>
                        <td>{{ $wine->price }}</td>
                        <td>{{ $wine->quantity }}</td>
                        <td>{{ $wine->region }}</td>
                        @auth
                        @if(auth()->user()->role=="staff")
                        <td>
                            <a href="{{ route('edit', $wine->id) }}" class="btn btn-primary">Edit</a>
                            <a href="{{ route('delete', $wine->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                        @endif
                        @endauth
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>






@endsection