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
   <body class="bg-secondary text-light">
      <div class="hero_area">

         <!-- header section strats -->
         @include('frontend.header')
         <!-- end header section -->


         <div class="container mt-3 p-3">
            <h1 class="text-center mb-4">About project and product infomation </h1>
            <hr class="bg-light">
            <hr class="bg-light">
            <div class="row p-2">
                <div style="height: 300px; margin-right:30px " class="col-lg-4 rounded bg-light text-dark p-4">
                    <ul>
                        <li>Category Types</li><hr>
                        <li>Product Types</li><hr>
                        <li>Cash On delivery</li><hr>
                        <li>Card in Payment</li><hr>
                        <li>Per Product discount</li>
                    </ul>
                </div>

                <div class="col-lg-7 bg-warning rounded text-dark p-4 ">
                    <ul style="text-decoration: none">
                        <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis veritatis quam officia quia voluptate saepe maxime, facere, sequi recusandae rem officiis. Adipisci fugit rerum quidem iure obcaecati similique consectetur officiis! </li>
                        <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis veritatis quam officia quia voluptate saepe maxime, facere, sequi recusandae rem officiis. Adipisci fugit rerum quidem iure obcaecati similique consectetur officiis! </li>
                        <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis veritatis quam officia quia voluptate saepe maxime, facere, sequi recusandae rem officiis. Adipisci fugit rerum quidem iure obcaecati similique consectetur officiis! </li>
                        <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis veritatis quam officia quia voluptate saepe maxime, facere, sequi recusandae rem officiis. Adipisci fugit rerum quidem iure obcaecati similique consectetur officiis! </li>

                    </ul>
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
