@extends('admin.templete')

@section('content')
<div class="content-wrapper">




            <div class="content-wrapper">


                        <h4 class="card-title">All Products</h4>
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card bg-light">
                              <div class="card-body">

                                  {{--  session message  --}}
                                    @if (session()->has('message'))
                                    <div class="alert alert-success " >
                                        {{session()->get('message')}}
                                        </div>
                                    @endif

                                <div class="table-responsive">
                                  <table class="table text-center table-border text-dark">
                                    <thead>
                                      <tr>
                                        <th>ID</th>
                                        <th>Product Name</th>
                                        <th>Product Category</th>
                                        <th>Product price</th>
                                        <th>Product qantity</th>
                                        <th>Product discount</th>
                                        <th>Product image</th>
                                        <th>Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($products as $product)
                                        <tr>
                                            <td> {{$product->id}} </td>
                                            <td>{{$product->title}}</td>
                                            <td>{{$product->category}}</td>
                                            <td>{{$product->price}}</td>
                                            <td>{{$product->quantity}}</td>
                                            <td>{{$product->discount}}</td>
                                            <td>
                                              <img src="{{ asset('images/'.$product->image) }}"  alt="" srcset="" style="height:50px; width:50px; border-radius:0px" >
                                            </td>
                                            <td>
                                                <a class="btn btn-primary mx-2" href="{{route('admin.editproduct',$product->id)}} ">Edit</a>
                                                <a class="btn btn-danger" href="{{route('admin.deleteproduct',$product->id)}}">delete</a>
                                            </td>
                                          </tr>
                                        @endforeach

                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>


      </div>

    </div>
</div>

@endsection
