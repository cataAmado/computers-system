@extends('layouts.base')
@section('content')

   

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="alert alert-info text-center">Computers System</h1>
                </div>
                <div class="col-12">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Neme</th>
                                <th scope="col">Description</th>
                                <th scope="col">OS</th>
                                <th scope="col">RAM</th>
                                <th scope="col">Price</th>
                                <th scope="col">Storage</th>
                                <th scope="col">Monitor</th>
                                <th scope="col">Purchase_Date</th>
                                <th scope="col">View</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($computers as $computer)
                                <tr>
                                    <th scope="row">{{ $computer->id }}</th>
                                    <td>{{ $computer->name }}</td>
                                    <td>{{ $computer->description }}</td>
                                    <td>{{ $computer->os }}</td>
                                    <td>{{ $computer->ram }}</td>
                                    <td>{{ $computer->price }}</td>
                                    <td>{{ $computer->storage }}</td>
                                    <td>{{ $computer->monitor }}</td>
                                    <td>{{ $computer->purchase_date }}</td>
                                    <td><a class="btn btn-primary" href="{{ route('computers.show', $computer) }}">Show</td>

                                    <td><a class="btn btn-success" href="{{ route('computers.edit', $computer) }}">Edit
                                    </td>
                                    <td>
                                        <form action="{{ route('computers.destroy', $computer) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-12">
                    <a href="/computers/create" class="btn btn-success">Add computer</a>
                </div>
            </div>
        </div>
   
@endsection
