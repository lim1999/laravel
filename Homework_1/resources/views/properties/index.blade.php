@extends('layouts.app')
@section('content')
<div class="container-fluid">
@include('comp.alert')
<a href="{{ route('property.create') }}" class="btn btn-info">{!!trans('flexi.add')!!}</a>
<br>
<br>
<table class="table table-bordered table-striped">
    <thead>
        <th>{!!trans('flexi.code')!!}</th>
        <th>{!!trans('flexi.name')!!}</th>
        <th>{!!trans('flexi.type')!!}</th>
        <th>{!!trans('flexi.status')!!}</th>
        <th>{!!trans('flexi.zone')!!}</th>
        <th>{!!trans('flexi.shape')!!}</th>
        <th>{!!trans('flexi.rent_price')!!}</th>
        <th>{!!trans('flexi.sale_price')!!}</th>
        <th>{!!trans('flexi.list_price')!!}</th>
        <th>{!!trans('flexi.sold_price')!!}</th>
        <th>{!!trans('flexi.action')!!}</th>
    </thead>
    <tbody>
    @foreach($data as $row)
        <tr>
            <td>{{ @$row->name }}</td>
            <td>{{ @$row->code }}</td>
            <td>{{ @$row->type->name }}</td>
            <td>{{ @$row->status->name }}</td>
            <td>{{ @$row->zone->name }}</td>
            <td>{{ @$row->shape->name }}</td>
            <td>{{ @$row->rent_price }}</td>
            <td>{{ @$row->sale_price }}</td>
            <td>{{ @$row->list_price }}</td>
            <td>{{ @$row->sold_price }}</td>
            <td>
                <form action="{{ route('property.destroy', $row->id) }}" method="post">
                    <a href="{{ route('property.show', $row->id) }}" class="btn btn-info"><i class="fa fa-eye" aria-hidden="true"></i>{!!trans('flexi.show')!!}</a>
                    <a href="{{ route('property.edit', $row->id) }}" class="btn btn-warning">{!!trans('flexi.edit')!!}</a>
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
