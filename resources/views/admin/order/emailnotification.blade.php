
@extends('admin.templete')

@section('content')


<div class="content-wrapper">
    <div class="content-wrapper">

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card bg-success">
            <div class="card-body">

                <h4 class=" text-light mb-3 text-center">Send Email To {{ $order->user_email }} </h4>
                <hr>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            <form action="{{route('admin.usersendemail',$order->id)}} " method="POST" enctype="multipart/form-data" class="forms-sample">
                    @csrf

                    <div class="row">
                        <div class="col-lg-6">

                            <div class="form-group ">
                                <label for="greeting">Email greeting</label>
                                <input  type="text" class="form-control bg-light text-info  @error('greeting') is-invalid @enderror " name="greeting" placeholder="Enter email greeting">
                                @error('greeting')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>

                            <div class="form-group ">
                                <label for="firstline">Email First Line</label>
                                <input  type="text" class="form-control bg-light text-info @error('firstline') is-invalid @enderror" name="firstline" placeholder="Enter Firstline">
                                @error('firstline')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                 @enderror
                            </div>

                            <div class="form-group">
                                <label for="body">Email Body</label>
                                <input  type="text" class="form-control bg-light text-info @error('body') is-invalid @enderror" name="body" placeholder="Enter Body">
                                @error('body')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="button">Enter button name</label>
                                <input  type="text" class="form-control bg-light text-info   @error('button') is-invalid @enderror" name="button" placeholder="Enter button name">
                                @error('button')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="url">Enter URL</label>
                                <input  type="text" class="form-control bg-light text-info  @error('url') is-invalid @enderror" name="url" placeholder="Enter URL">
                                @error('url')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>



                        <div class="form-group">
                            <label >Email last line</label>
                            <input type="text" class="form-control bg-light text-info @error('lastline') is-invalid @enderror" name="lastline" placeholder="Enter last line" >
                            @error('lastline')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        </div>

                        </div>

                </div>
                <button type="submit" class="btn btn-warning me-2">Send Email</button>

            </form>
            </div>
        </div>
    </div>
</div>



@endsection
