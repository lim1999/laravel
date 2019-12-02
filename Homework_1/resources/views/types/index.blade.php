@extends('layouts.app')
@section('content')
<div class="container">
@include('comp.alert')
@include('comp.simple_form')
<br>
<table class="table table-bordered table-striped">
    <thead>
        <th>{{ __('messages.name') }}</th>
        <th>{{ __('messages.code') }}</th>
        <th>{{ __('messages.action') }}</th>
    </thead>
    <tbody>
    @foreach($data as $row)
        <tr>
            <td>{{ @$row->name }}</td>
            <td>{{ @$row->code }}</td>
            <td>
                <form action="{{ route('property-type.destroy', @$row->id) }}" method="post">
                    <a href="{{ route('property-type.edit', @$row->id) }}" class="btn btn-warning">{{ __('messages.edit') }}</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">{{ __('messages.delete') }}</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
@endsection
