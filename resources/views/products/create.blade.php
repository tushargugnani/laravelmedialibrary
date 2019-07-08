@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Product</div>

                <div class="card-body">
                     <form method="POST" action="/products" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Product Name</label>
                            <input name="name" type="text" class="form-control" id="name" placeholder="Enter Product Name" value="{{old('name')}}">
                        </div>
                        <div class="form-group">
                            <label>Product Description</label>
                            <textarea name="description" class="form-control" id="description">{{old('description')}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Product Image</label>
                            <input name="image" type="file" class="form-control-file" id="image">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Submit"/>
                        </div>
                     </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
