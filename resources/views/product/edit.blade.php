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
<form class="form-horizontal" action="{{ route('products.update', $data->id) }}" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label class="col-sm-2 control-label">Name</label>
            <div class="col-sm-5">
            <input type="text" class="form-control" name="txt_name" value="{{$product->id}}">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Name</label>
            <div class="col-sm-5">
            <input type="text" class="form-control" name="txt_name" value="{{$product->name}}">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Rent Price</label>
            <div class="col-sm-5">
            <input type="txet" class="form-control" name="txt_rent_price" value="{{$product->rent_price}}">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">List_price</label>
            <div class="col-sm-5">
            <input type="text" class="form-control" name="txt_list_price" value="{{$product->list_price}}">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Sale Price</label>
            <div class="col-sm-5">
            <input type="txet" class="form-control" name="txt_sale_price" value="{{$product->sale_price}}">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Sole Price</label>
            <div class="col-sm-5">
            <input type="txet" class="form-control" name="txt_sold_price" value="{{$product->sold_price}}">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Save</button>
            </div>
        </div>
    </form>    
</body>
</html>