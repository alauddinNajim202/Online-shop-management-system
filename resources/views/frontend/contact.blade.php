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
   </head>
   <body>
      <div class="hero_area">

         <!-- header section strats -->
         @include('frontend.header')
         <!-- end header section -->


      <div class="container p-4">
        <div class="content-wrapper p-4">

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

                                        <h4 class="card-title text-center">Contact Us</h4><hr>
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif

                                    <form action="{{route('updatecontacts')}} " method="POST" enctype="multipart/form-data" class="forms-sample">
                                            @csrf

                                            <div class="row">
                                                <div class="col-lg-6">

                                                    <div class="form-group ">
                                                        <label for="name"> Name * *</label>
                                                        <input  type="text" class="form-control text-light" name="name" placeholder="Enter your name">
                                                    </div>

                                                    <div class="form-group ">
                                                        <label for="email">Email</label>
                                                        <input  type="email" class="form-control text-light" name="email" placeholder="Enter email">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="phone">Phone number * *</label>
                                                        <input  type="text" class="form-control " name="phone" placeholder="Enter phone">
                                                    </div>

                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="address">Address</label>
                                                        <input  type="text" class="form-control text-light" name="address" placeholder="Enter Address">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="message">Message</label>

                                                        <textarea name="message" id=""  rows="3" cols="3" placeholder="Enter your message"></textarea>
                                                    </div>


                                                </div>

                                        </div>
                                        <button type="submit" class="btn btn-primary ">Send message</button>

                                    </form>
                                </div>
                            </div>

                </div>
                </div>
                </div>

            </div>
        </div>

      </div>









      <!-- footer start -->
    @include('frontend.footer')
      <!-- footer end -->

      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By <a href="">Free Html Templates</a><br>

            Distributed By <a href="" target="_blank">ThemeWagon</a>

         </p>
      </div>

      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script>
        // $(document).ready(function(){
        //   $("button").click(function(){
        //     $("#div2").toggle();
        //   });
        // });


        function close_reply(caller){
            $("#div2").hide();
        }
      </script>

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
