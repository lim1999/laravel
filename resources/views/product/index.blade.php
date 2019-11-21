<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    <button class="btn btn-default"><a href="{{route('products.create')}}">Create</a></button>    
    <table class="table">
        <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Rent Price</th>
            <th>list Price</th>
            <th>Sale Price</th>
            <th>Sold Price</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $show)
            <tr>    
                <td>{{$show->id}}</td>
                <th>{{$show->name}}</th>
                <th>{{$show->rent_price}}</th>
                <th>{{$show->list_price}}</th>
                <th>{{$show->sale_price}}</th>
                <th>{{$show->sold_price}}</th>                 
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>