@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{ route('zone.store') }}" method="post">
    @csrf
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
	        <p>{{$message}}</p>
        </div>
    @endif
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif  
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" id="">
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>
<br>
<br>
<table class="table table-bordered table-striped">
    <thead>
        <th>Code</th>
        <th>Name</th>
        <th>Action</th>
    </thead>
    <tbody>
    @foreach($data as $row)
        <tr>
            <td>{{ $row->code }}</td>
            <td>{{ $row->name }}</td>
            <td>
                <form action="{{ route('zone.destroy', $row->id) }}" method="post">
                    <a href="{{ route('zone.edit', $row->id) }}" class="btn btn-warning">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
@endsection
