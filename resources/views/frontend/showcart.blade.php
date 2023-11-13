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
                <div class="col">

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
                          <th class="text-center" scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>

                        <?php $totalprice = 0; ?>

                        @foreach($carts as $cart)
                        <tr>
                            <th scope="row">
                              <div class="d-flex align-items-center">
                                <img src="{{ asset('images/'.$cart->image) }}" class="img-fluid mr-2 rounded"
                                  style="width: 100px;" alt="Book">
                                <div class="flex-column ms-4">
                                  <p class="mb-2 ">Thinking, good items</p>
                                </div>
                              </div>
                            </th>
                            <td class="align-middle">
                              <p class="mb-0" style="font-weight: 500;">{{ $cart->product_title }}</p>
                            </td>
                            <td class="align-middle">
                                <p class="mb-0" style="font-weight: 500;">{{ $cart->quantity }}</p>

                            </td>
                            <td class="align-middle">
                                <p class="mb-0" style="font-weight: 500;">{{ $cart->price }}</p>

                            </td>

                            <td class="align-middle text-center">
                                <p class="mb-0" style="font-weight: 500;"> <a onclick="return confirm('Are you want to delete?') " href="{{route('removeitem',$cart->id)}}" class="btn btn-sm btn-danger text-light">Remove item</a> </p>

                            </td>
                          </tr>
                          <?php $totalprice = $totalprice + $cart->price; ?>

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

                    <div class="row">
                        <div class="col-lg-6">
                            {{-- Pagination --}}
                            <div class="d-flex justify-content-left p-3 mt-3">
                                <strong>{!! $carts->withQueryString()->links('pagination::bootstrap-5') !!}</strong>
                            </div>

                        </div>

                        <div class="col-lg-6 mb-4">
                            <div class="d-flex justify-content-center  mt-3">
                                <div class="ms-3 mt-3"><h5>Proceed to Order</h5></div>

                                <div>
                                    <a class="btn btn-danger mx-3" href="{{route('cashondelivery')}} ">Cash on Delivery</a>
                                </div>
                                <div>
                                    <a class="btn btn-danger" href="{{route('paymentincard',$totalprice)}} ">Payment In Card</a>
                                </div>
                            </div>
                        </div>
                    </div>


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
