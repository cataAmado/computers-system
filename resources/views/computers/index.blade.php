<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>computers</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        
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
                                              
                                <th scope="col">Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($computers as $computer)
                                <tr>
                                    <th scope="row">{{$computer->id}}</th>
                                    <td>{{$computer->name}}</td>
                                    <td>{{$computer->description}}</td>
                                    <td>{{$computer->os}}</td>
                                    <td>{{$computer->ram}}</td>
                                    <td>{{$computer->price}}</td>
                                    <td>{{$computer->storage}}</td>
                                    <td>{{$computer->monitor}}</td>
                                    <td>{{$computer->purchase_date}}</td>

                                    
                                    {{-- <td><a class="btn btn-success" href="/computers/{{$computer->id_computer}}/edit">Edit</td> --}}
                                    <td><a class="btn btn-success" href="{{route('computers.edit', $computer)}}">Edit</td>
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

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>