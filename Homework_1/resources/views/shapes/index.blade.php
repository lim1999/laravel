@extends('layouts.app')
@section('content')
<div class="container">
@include('comp.alert')
@include('comp.simple_form')
<br>
<table class="table table-bordered table-striped">
    <thead>
        <th>{!!trans('flexi.code')!!}</th>
        <th>{!!trans('flexi.name')!!}</th>
        <th>{!!trans('flexi.action')!!}</th>
    </thead>
    <tbody>
    @foreach($data as $row)
        <tr>
                <td>{{ $row->code }}</td>
            <td>{{ $row->name }}</td>
            
            <td>
                <form action="{{ route('shape.destroy', $row->id) }}" method="post">
                    <a href="{{ route('shape.edit', $row->id) }}" class="btn btn-warning">{!!trans('flexi.edit')!!}</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">{!!trans('flexi.delete')!!}</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
@endsection
