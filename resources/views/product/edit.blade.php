@extends('product.layout')
@section('content')
<br><br><br>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Product List</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{route('product.index')}}">Back</a>
        </div>
    </div>
<form action="{{ URL('update/product/'.$product->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Product Name</strong>
                    <input type="text" name="product_name" class="form-control" value="{{$product->product_name}}">
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Product Code</strong>
                    <input type="text" name="product_code" class="form-control" value="{{$product->product_code}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Details</strong>
                    <textarea type="text" name="details" class="form-control" placeholder="Details" style="height: 150px">
                    {{$product->details}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Product Image</strong>
                    <input type="file" name="logo">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Old Product Image</strong>
                    <img src="{{URL::to($product->logo)}}" height="70px;" width="70px;" alt="Product Image">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </form>
@endsection
