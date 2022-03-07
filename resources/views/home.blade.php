@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">Product Type</th>
                <th scope="col">Product Name</th>
                <th scope="col">Product Description</th>
                <th scope="col">Available Quantity</th>
                <th scope="col">Color</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach($products as $amit)
            <tr>
                <td>{{$amit->product_type}}</td>
                <td>{{$amit->productname}}</td>
                <td>{{$amit->product_description}}</td>
                <td>{{$amit->product_quantity}}</td>
                <td>{{$amit->product_color}}</td>
                <td>{{$amit->product_price}}</td>
                <td>

                    <a href="{{ route('products.create')}}">Create</a>
                    <a href="{{ route('product.edit', $amit->id)}}">Edit</a>
                    <a href="{{ route('product.delete', $amit->id)}}">Delete</a>
                    <a href="{{ route('product.downloadPDF', $amit->id)}}">Invoice</a>

                </td>
              </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
<script>


</script>
@endsection
