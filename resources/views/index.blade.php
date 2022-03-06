<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <form method="post" action="/submituser">
            @csrf
            <div class="row">
                <div class="col-sm-4">
                    <label>Name:</label>
                    <input type="text" class="form-control" name="name">
                    <span style="color:red">@error('name'){{$message}}@enderror</span>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <label>Email:</label>
                    <input type="text" class="form-control" name="email">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <label>Address:</label>
                    <input type="text" class="form-control" name="address">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-4">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
        </form>
    </div>
    </div>
</body>

<div class="container mt-3">
  <h3>All User's Data</h3>
      <table class="table table-bordered">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>Action</th>
      </tr>
    </thead>
    @foreach($user as $data)
    <tbody>
      <tr>
        <td>{{$data->name}}</td>
        <td>{{$data->email}}</td>
        <td>{{$data->address}}</td>
        <td><a href='/delete/{{$data->id}}'><button type="submit" class="btn btn-danger">Delete</button></a></td>
      </tr>
    
    </tbody>
    @endforeach
  </table>
</div>