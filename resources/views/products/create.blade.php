@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="card">
                {{-- <div class="card-header bg-info">
                   <h1>this is product</h1>
                </div> --}}
                <div class="card-body">
                    <form method="post" action="{{ route('product.store')}}">
                        @csrf
                        <div class="">
                            <label><strong>Product Type</strong></label><br/>
                            <select class="form-control" name="product_type" multiple="">
                              <option value="a">A</option>
                              <option value="b">B</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Product Name</label>
                            <input type="text" name="product_name" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label>Product Description</label>
                            <input type="text" name="product_description" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label>Product Quantity</label>
                            <input type="number" name="product_quantity" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label>Product Color</label>
                            <input type="text" name="product_color" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label>Product Price</label>
                            <input type="number" name="product_price" class="form-control"/>
                        </div>
                        <div class="text-center" style="margin-top: 10px;">
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
