<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="{{asset('frontend/images/favicon.png')}} " type="">

      <title> @yield('title','Online Shop system') </title>

      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/bootstrap.css')}} " />
      <!-- font awesome style -->
      <link href=" {{asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <!-- Custom styles for this template -->
      <link href="{{asset('frontend/css/style.css')}} " rel="stylesheet" />
      <!-- responsive style -->
      <link href="{{asset('frontend/css/responsive.css')}} " rel="stylesheet" />

      <style>
        @media (min-width: 1025px) {
            .h-custom {
            height: 100vh !important;
            }
            }
      </style>
   </head>
   <body>
      <div class="hero_area">

         <!-- header section strats -->
         @include('frontend.header')
         <!-- end header section -->


         <!--cart section strats -->
         <section class="h-auto mb-5 h-custom">
            <div class="container  py-5">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12">

                  <div class="table-responsive">

                         {{--  session message  --}}
                         @if (session()->has('message'))
                         <div class="alert alert-success " >
                             {{session()->get('message')}}
                             </div>
                         @endif

                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col" class="h5">Shopping Items</th>
                          <th scope="col">Product Name</th>
                          <th scope="col">Quantity</th>
                          <th scope="col">Price</th>
                          <th scope="col">Payment Status</th>
                          <th scope="col">Order Status</th>
                          <th class="text-center" scope="col">Cancel Order</th>
                        </tr>
                      </thead>
                      <tbody >

                        <?php $totalprice = 0; ?>

                        @foreach($orders as $order)
                        <tr>
                            <th scope="row">
                              <div class="d-flex align-items-center">
                                <img src="{{ asset('images/'.$order->image) }}" class="img-fluid mr-2 rounded"
                                  style="width: 100px;" alt="Book">

                              </div>
                            </th>
                            <td class="align-middle">
                              <p class="mb-0" style="font-weight: 500;">{{ $order->product_title }}</p>
                            </td>
                            <td class="align-middle">
                                <p class="mb-0" style="font-weight: 500;">{{ $order->quantity }}</p>

                            </td>
                            <td class="align-middle">
                                <p class="mb-0" style="font-weight: 500;">{{ $order->price }}</p>

                            </td>

                            <td class="align-middle">
                                <p class="mb-0" style="font-weight: 500;">{{ $order->payment_status }}</p>

                            </td>

                            <td class="align-middle">
                                <p class="mb-0" style="font-weight: 500;">{{ $order->order_status }}</p>

                            </td>

                            <td class="align-middle text-center">

                                @if ($order->order_status == 'processing' )

                                    <p class="mb-0" style="font-weight: 300;"> <a onclick="return confirm('Are you want to cancel order?') "
                                    href="{{route('cancelorder',$order->id)}}" class="btn btn-sm btn-danger text-light">Cancel</a> </p>

                                @else
                                    <h5>Canceled</h5>
                                @endif


                            </td>
                          </tr>
                          <?php $totalprice = $totalprice + $order->price; ?>

                        @endforeach

                            <td></td>
                            <td></td>
                            <td class="align-middle ">
                                <p class="mb-0 text-danger" style="font-weight: 500;"> <h5>Total price</h5> </p>

                            </td>
                            <td><h6>${{ $totalprice }}</h6></td>
                            <td></td>

                      </tbody>
                    </table>


                </div>



                </div>
              </div>
            </div>
          </section>


          <!-- cart section end -->









      <!-- footer start -->
    @include('frontend.footer')
      <!-- footer end -->

      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>

            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>

         </p>
      </div>
      <!-- jQery -->
      <script src="{{asset('frontend/js/jquery-3.4.1.min.js')}}"></script>
      <!-- popper js -->
      <script src=" {{asset('frontend/js/popper.min.js')}} "></script>
      <!-- bootstrap js -->
      <script src=" {{asset('frontend/js/bootstrap.js')}} "></script>
      <!-- custom js -->
      <script src=" {{asset('frontend/js/custom.js')}}"></script>
   </body>
</html>
