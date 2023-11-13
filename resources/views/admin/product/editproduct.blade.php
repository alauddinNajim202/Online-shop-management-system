@extends('admin.templete')

@section('content')
<div class="content-wrapper">

    <div class="container page-body-wrapper">

        <div class="main-panel">
            <div class="content-wrapper">
                 {{--  session message  --}}
                 @if (session()->has('message'))
                 <div class="alert alert-success " >
                     {{session()->get('message')}}
                     </div>
                 @endif


                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Update Product</h4>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form action="{{route('admin.updateproduct',$product->id)}} " method="POST" enctype="multipart/form-data" class="forms-sample">
                                @csrf
                                <input type="hidden" value="{{$product->id}}" name="product_id">

                                <div class="row">
                                    <div class="col-lg-6">

                                        <div class="form-group my-2">
                                            <label for="title">Product Name</label>
                                            <input  type="text" class="form-control text-light" name="title" value="{{$product->title}}">
                                        </div>

                                        <div class="form-group my-2">
                                            <label for="description">Description</label>
                                            <input  type="text" class="form-control text-light" name="description"  value="{{$product->description}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="category">Category</label>
                                            <input  type="text" class="form-control text-light" name="category"  value="{{$product->category}}">
                                        </div>

                                        <div class="form-group">
                                            <label for="price">Price</label>
                                            <input  type="text" class="form-control text-light" name="price" value="{{$product->price}}">
                                        </div>

                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="discount">Discount</label>
                                            <input  type="text" class="form-control text-light" name="discount" value="{{$product->discount}}">
                                        </div>

                                        <div class="form-group">
                                            <label for="quantity">Quantity</label>
                                            <input  type="text" class="form-control text-light" name="quantity"  value="{{$product->quantity}}">
                                        </div>



                                    <div class="form-group">
                                        <label >Upload Image</label>
                                        <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" >
                                    </div>
                                     @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror





                                    </div>

                            </div>
                            <button type="submit" class="btn btn-primary me-2">Update product</button>

                        </form>
                        </div>
                    </div>

        </div>
        </div>
        </div>

    </div>
</div>

@endsection
