@extends('admin.templete')

@section('content')
<div class="content-wrapper">




            <div class="content-wrapper">


                        <h4 class="card-title">All Category</h4>
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
                                        <th>Category Name</th>
                                        <th>Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($categories as $category)
                                        <tr>
                                            <td> {{$category->id}} </td>
                                            <td>{{$category->category_name}}</td>
                                            <td>
                                                <a class="btn btn-primary mx-2" href="{{route('admin.editcategory',$category->id)}} ">Edit</a>
                                                <a class="btn btn-danger" href="{{route('admin.deletecategory',$category->id)}}">delete</a>
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
