@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{ route('property.store') }}" method="post" class="">
    @csrf
    <div class="form-group">
        <label>{!!trans('flexi.name')!!}</label>
        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="">
        @error('name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="">{!!trans('flexi.type')!!}</label>
        <select class="form-control @error('property_type_id') is-invalid @enderror" id="" name="property_type_id">
            <option value="">-- Select Type --</option>
            @foreach ($types as $data)
                <option value="{{ $data->id }}">{{ $data->name }}</option>
            @endforeach
        </select>
        @error('property_type_id')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="">{!!trans('flexi.zone')!!}</label>
        <select class="form-control @error('zone_id') is-invalid @enderror" id="" name="zone_id">
            <option value="">-- Select Zone --</option>
            @foreach ($zones as $data)
                <option value="{{ $data->id }}">{{ $data->name }}</option>
            @endforeach
        </select>
        @error('zone_id')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="">{!!trans('flexi.shape')!!}</label>
        <select class="form-control @error('shape_id') is-invalid @enderror" id="" name="shape_id">
            <option value="">-- Select Shape --</option>
            @foreach ($shapes as $data)
                <option value="{{ $data->id }}">{{ $data->name }}</option>
            @endforeach
        </select>
        @error('shape_id')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label>{!!trans('flexi.rent_price')!!}</label>
        <input type="text" name="rent_price" class="form-control @error('rent_price') is-invalid @enderror" id="">
        @error('rent_price')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label>{!!trans('flexi.sale_price')!!}</label>
        <input type="text" name="sale_price" class="form-control @error('sale_price') is-invalid @enderror" id="">
        @error('sale_price')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label>{!!trans('flexi.list_price')!!}</label>
        <input type="text" name="list_price" class="form-control @error('list_price') is-invalid @enderror" id="">
        @error('list_price')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label>{!!trans('flexi.sold_price')!!}</label>
        <input type="text" name="sold_price" class="form-control @error('sold_price') is-invalid @enderror" id="">
        @error('sold_price')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="">{!!trans('flexi.status')!!}</label>
        <select class="form-control" id="" name="property_status_id">
            <option value="">-- Select Status --</option>
            @foreach ($statuses as $data)
                <option value="{{ $data->id }}">{{ $data->name }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">{!!trans('flexi.submit')!!}</button>
</form>
</div>
@endsection