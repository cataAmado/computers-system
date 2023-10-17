@extends('layouts.base')
@section('content')

           <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="alert alert-info text-center">Computers Detail</h1>
                </div>
                <div class="col-12 d-flex justify-content-center">
                    <div class="card" style="width: 50rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $computer->name }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $computer->description }}</h6>
                            <p class="card-text">{{ $computer->os }}</p>
                            <p class="card-text">{{ $computer->ram }}</p>
                            <p class="card-text">{{ $computer->price }}</p>
                            <p class="card-text">{{ $computer->storage }}</p>
                            <p class="card-text">{{ $computer->monitor }}</p>
                            <p class="card-text">{{ $computer->purchase_date }}</p>
                            <a href="{{ route('computers.index') }}" class="card-link">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection
