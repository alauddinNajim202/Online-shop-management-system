@extends('admin.templete')

@section('content')
<div class="content-wrapper">

        <div class="content-wrapper">

                        <h4 class="card-title">All Orders</h4>

                        <div class="row">
                            <div  class="col-lg-12">

                                <form action="{{route('admin.search') }} " method ="get">
                                    @csrf
                                    <div  class="col-lg-6"  style="float:left ; margin-left:245px">
                                        <input  type="text" class="form-control text-info bg-light " name="search" placeholder="Enter search" value="">
                                    </div>

                                    <div  class="col-lg-2 " style="float:right; margin-bottom:25px">
                                        <input  type="submit" class="py-1"   value="Search">
                                    </div>
                                </form>


                            </div>
                        </div>

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

                                        <th>SL NO</th>
                                        <th>User Name</th>
                                        <th>User Phone</th>
                                        <th>User Email</th>
                                        <th>Product Name</th>
                                        <th>Product price</th>
                                        <th>Product qantity</th>
                                        <th>Product Image</th>
                                        <th>Payment Status</th>
                                        <th>Order Status</th>
                                        <th>Delivered</th>
                                        <th>Send Email</th>
                                        <th>Download PDF</th>
                                        <th>Action</th>
                                      </tr>
                                    </thead>

                                    <tbody>

                                        @forelse ($orders as $order)
                                        <tr>
                                            <td> {{$order->id}} </td>
                                            <td>{{$order->user_name}}</td>
                                            <td>{{$order->user_phone}}</td>
                                            <td>{{$order->user_email}}</td>
                                            <td>{{$order->product_title}}</td>
                                            <td>{{$order->price}}</td>
                                            <td>{{$order->quantity}}</td>
                                            <td>
                                              <img src="{{ asset('images/'.$order->image) }}"  alt="" srcset="" style="height:50px; width:50px; border-radius:0px" >
                                            </td>
                                            <td>{{$order->payment_status}}</td>
                                            <td class="text-info">{{$order->order_status}}</td>

                                            <td>
                                                @if ($order->order_status == 'processing')

                                                        <a href="{{route('admin.deliveredorder',$order->id)}}" class="btn btn-success" >Delivered</a>


                                                @else
                                                    <strong>Delivered</strong>
                                                @endif
                                            </td>
                                            <td>
                                                <a class="btn btn-warning" href="{{route('admin.sendemail',$order->id)}} ">Send Email</a>
                                            </td>
                                            <td>
                                                <a class="btn btn-primary" href="{{route('admin.downloadorder',$order->id)}} ">Download</a>
                                            </td>


                                            <td>
                                                <a href="{{route('admin.deleteorder',$order->id)}}" class="btn btn-danger" >delete</a>
                                            </td>
                                          </tr>

                                        @empty
                                        <td>
                                            <p class="text-center" >No Data Found</p>
                                        </td>


                                        @endforelse

                                    </tbody>

                                     {{--
                                    <div class="d-flex justify-content-left p-3 mt-2">
                                        <strong>{!! $orders->withQueryString()->links('pagination::bootstrap-5') !!}</strong>
                                    </div>
                                    Pagination --}}

                                  </table>
                                </div>
                              </div>
                            </div>


      </div>

    </div>
</div>

@endsection
