@extends('layouts.base')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="alert alert-info text-center">Create new computers</h1>
            </div>
            <div class="col-12">
                <form action="{{ route('computers.store') }}" method="post" class="row">
                    @csrf
                    <div class="col-6">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{ old('name') }}" @error('name') is-invalid @enderror>
                    </div>
                    <div class="col-6">

                        <label for="description" class="form-label">description</label>
                        <input type="text" class="form-control" id="description" name="description"
                            placeholder="description" value="{{ old('description') }}" @error('description') is-invalid @enderror>
                    </div>
                    <div class="col-6">
                        <label for="os" class="form-label">OS</label>
                        <input type="text" class="form-control" id="os" name="os" placeholder="os" value="{{ old('os') }}" @error('os') is-invalid @enderror>
                    </div>
                    <div class="col-6">
                        <label for="Ram" class="form-label">Ram</label>
                        <input type="number" class="form-control" id="ram" name="ram" placeholder="Ram" value="{{ old('ram') }}" @error('ram') is-invalid @enderror>
                    </div>
                    <div class="col-6">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" id="price" name="price" placeholder="precio" value="{{ old('price') }}" @error('price') is-invalid @enderror>
                    </div>
                    <div class="col-6">
                        <label for="storage" class="form-label">storage</label>
                        <input type="text" class="form-control" id="storage" name="storage" placeholder="storage" value="{{ old('storage') }}" @error('storage') is-invalid @enderror>
                    </div>
                    <div class="col-6">
                        <label for="monitor" class="form-label">monitor</label>
                        <input type="text" class="form-control" id="monitor" name="monitor" placeholder="monitor" value="{{ old('monitor') }}" @error('monitor') is-invalid @enderror>
                    </div>
                    <div class="col-6">
                        <label for="purchase_date" class="form-label">Purchase_Date</label>
                        <input type="date" class="form-control" id="purchase_date" name="purchase_date"
                            placeholder="purchase_date" value="{{ old('purchase_date') }}" @error('purchase_date') is-invalid @enderror>
                    </div>

                    <div class="col-12 my-4">
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </div>
                </form>
            </div>
            @if ($errors->any())
                    <div class="alert alert-danger col-12 mt-4">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            <div class="col-12 mb-4">
                <div class="d-grid gap-2">
                    <a href="{{ route('computers.index') }}" class="btn btn-danger">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection {{-- @endsection --}}
