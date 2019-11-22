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
    <a href="{{route('products.create')}}">Create</a>
    <a href="{{route('productHistories.index')}}">Product_histories</a>    
    <table class="table">
        <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Rent Price</th>
            <th>list Price</th>
            <th>Sale Price</th>
            <th>Sold Price</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
        @foreach($product as $show)
            <tr>    
                <td>{{$show->code}}</td>
                <td>{{$show->name}}</td>
                <td>{{$show->rent_price}}</td>
                <td>{{$show->list_price}}</td>
                <td>{{$show->sale_price}}</td>
                <td>{{$show->sold_price}}</td>
                <td>
                    <form action="{{ route('products.destroy' , $show->id ) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button>Delete</button>
                        <a href="{{route('products.edit',$show->id)}}" class="">Edit</a>
                    </form>
                </td>                 
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>