@extends('admin.templete')

@section('content')
<div class="content-wrapper">

    <div class="container page-body-wrapper">

        <div class="main-panel">

                 {{--  session message  --}}
                 @if (session()->has('message'))
                 <div class="alert alert-success " >
                     {{session()->get('message')}}
                     </div>
                 @endif


                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card  bg-info">
                        <div class="card-body">

                            <h4 class="card-title">Add Customer Testimonial</h4>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        <form action="{{route('admin.createtestimonial')}} " method="POST" enctype="multipart/form-data" class="forms-sample">
                                @csrf

                                <div class="row">
                                    <div class="col-lg-6">

                                        <div class="form-group my-2">
                                            <label for="name"> Name</label>
                                            <input  type="text" class="form-control text-light" name="name" placeholder="Enter  name">
                                        </div>

                                        <div class="form-group my-2">
                                            <label for="title"> Title</label>
                                            <input  type="text" class="form-control text-light" name="title" placeholder="Enter  title">
                                        </div>

                                        <div class="form-group my-2">
                                            <label for="description">Description</label>
                                            <input  type="text" class="form-control text-light" name="description" placeholder="Description">
                                        </div>


                                    </div>

                                    <div class="col-lg-6">


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
                            <button type="submit" class="btn btn-primary mt-2">Submit</button>

                        </form>
                        </div>
                    </div>


        </div>
        </div>

    </div>
</div>

@endsection
