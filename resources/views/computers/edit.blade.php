@extends('layouts.base')
@section('content')

  

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="alert alert-info text-center">Edit computer {{ $computer->name }}</h1>
                </div>
                <div class="col-12">
                    <form action="{{ route('computers.update', $computer) }}" method="post" class="row">
                        @csrf
                        @method('PUT')
                        <div class="col-6">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{old('name', $computer->name)}}" placeholder="Name">
                        </div>
                        <div class="col-6">
                            <label for="description" class="form-label">description</label>
                            <input type="text" class="form-control" id="description" name="description"
                                value="{{ old('description', $computer->description) }}" placeholder="description">
                        </div>
                        <div class="col-6">
                            <label for="os" class="form-label">OS</label>
                            <input type="text" class="form-control" id="os" name="os"
                                value="{{ old('os', $computer->os) }}" placeholder="os">
                        </div>
                        <div class="col-6">
                            <label for="ram" class="form-label">Ram</label>
                            <input type="text" class="form-control" id="ram" name="ram"
                                value="{{ old('ram', $computer->ram) }}" placeholder="Ram">
                        </div>
                        <div class="col-6">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" class="form-control" id="price" name="price"
                                value="{{ old('price', $computer->price) }}" placeholder="precio">
                        <div class="col-6">
                            <label for="storage" class="form-label">storage</label>
                            <input type="text" class="form-control" id="storage" name="storage"
                                value="{{ old('storage', $computer->storage) }}" placeholder="storage">
                        </div>
                        <div class="col-6">
                            <label for="monitor" class="form-label">monitor</label>
                            <input type="text" class="form-control" id="monitor" name="monitor"
                                value="{{ old('monitor', $computer->monitor) }}" placeholder="monitor">
                        </div>
                        <div class="col-6">
                            <label for="purchase_date" class="form-label">purchase_date</label>
                            <input type="text" class="form-control" id="purchase_date" name="purchase_date"
                                value="{{   old('purchase_date', $computer->purchase_date) }}" placeholder="purchase_date">
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
                        <div class="col-12 my-4">
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-12 mb-4">
                    <div class="d-grid gap-2">
                        <a href="{{ route('computers.index') }}" class="btn btn-danger">Back</a>
                    </div>
                </div>
            </div>
        </div>
    @endsection {{-- @endsection --}}
