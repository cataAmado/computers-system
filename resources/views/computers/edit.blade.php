<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Computer System</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="alert alert-info text-center">Edit computer {{$computer->name}}</h1>
                </div>
                <div class="col-12">
                    <form action="{{ route('computers.update', $computer) }}" method="post" class="row">
                        @csrf
                        @method('PUT')
                        <div class="col-6">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{$computer->name}}" placeholder="Name">
                        </div>
                        <div class="col-6">
                            <label for="description" class="form-label">description</label>
                            <input type="text" class="form-control" id="description" name="description" value="{{$computer->description}}" placeholder="description">
                        </div>
                        <div class="col-6">
                            <label for="os" class="form-label">OS</label>
                            <input type="text" class="form-control" id="os" name="os" value="{{$computer->os}}" placeholder="os">
                        </div>
                        <div class="col-6">
                            <label for="ram" class="form-label">Ram</label>
                            <input type="text" class="form-control" id="ram" name="ram" value="{{$computer->ram}}" placeholder="Ram">
                        </div>
                        <div class="col-6">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" class="form-control" id="price" name="price" value="{{$computer->price}}" placeholder="precio">
                        </div>
                        <div class="col-6">
                            <label for="storage" class="form-label">storage</label>
                            <input type="text" class="form-control" id="storage" name="storage" value="{{$computer->storage}}" placeholder="storage">
                        </div>
                        <div class="col-6">
                            <label for="monitor" class="form-label">monitor</label>
                            <input type="text" class="form-control" id="monitor" name="monitor" value="{{$computer->monitor}}" placeholder="monitor">
                        </div>
                        <div class="col-6">
                            <label for="purchase_date" class="form-label">purchase_date</label>
                            <input type="text" class="form-control" id="purchase_date" name="purchase_date" value="{{$computer->purchase_date}}" placeholder="purchase_date">
                        </div>
                         
                        <div class="col-12 my-4">
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-12 mb-4">
                    <div class="d-grid gap-2">
                        <a href="{{route('computers.index')}}" class="btn btn-danger">Back</a>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>