@extends('layouts.main')

@section('content')

<!-- add a wine page -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Create a wine</h1>
            <form action="{{ route('store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="type">Type</label>
                    <select class="form-control" id="type" name="type">
                        <option>Red</option>
                        <option>White</option>
                        <option>Sparkling</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" id="price" name="price" placeholder="Price">
                </div>
         <!-- wine quantity -->
                <div class="form-group">
                    <label for="quantity">Quantity</label>
                    <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Quantity">
                </div>
                <!-- wine region -->
                <div class="form-group">
                    <label for="type">Region</label>
                    <select class="form-control" id="region" name="region">
                        <option>Australia</option>
                        <option>New Zealand</option>
                        <option>France</option>
                        <option>Italy</option>
                        <option>Germany</option>
                        <option>Spain</option>
                        <option>Portugal</option>
                        <option>Argentina</option>
                        <option>Brazil</option>
                        <option>Chile</option>
                        <option>South Africa</option>
                        <option>South Korea</option>
                        <option>Turkey</option>
                    </select>
                </div>
             
          
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>





@endsection