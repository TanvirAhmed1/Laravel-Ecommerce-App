@extends('product.layout')
@section('content')
<br><br><br>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Product List</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{route('product.create')}}">Create New Product</a>
        </div>
        @if($message = Session::get('success'))
            <div class="alert alert-success">
            <p>{{$message}}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <tr>
                <th width="150px">Product Name</th>
                <th width="150px">Product Code</th>
                <th width="200px">Details</th>
                <th width="100px">Product Logo</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($product as $pro)
            <tr>

                <td>{{$pro->product_name}}</td>
                <td>{{$pro->product_code}}</td>
                <td>{{$pro->details}}</td>
            <td><img src="{{URL::to($pro->logo)}}" height="70px;" width="70px;" alt="Product Image"></td>
                <td>
                    <a class="btn btn-info" href="">Show</a>
                    <a class="btn btn-primary" href="">Edit</a>
                    <a class="btn btn-danger" href="">Delete</a>
                </td>

            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection