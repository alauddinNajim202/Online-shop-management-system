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

         <!-- slider section -->


      <!-- product section -->
     @include('frontend.product')
      <!-- end product section -->

      <!-- comments  section -->

        <div class="container bg-light mb-2">
            <div class="row d-flex justify-content-center ">
                <div class="col-lg-8 bg-light p-2 ">
                     {{--  session message  --}}
                     @if (session()->has('message'))
                     <div class="alert alert-success " >
                         {{session()->get('message')}}
                         </div>
                     @endif
                    <div class="card mt-4">
                        <h5 class="card-header">Comments <span class="comment-count float-right badge badge-info"></span></h5>

                        <div class="card-body">
                            {{-- Add Comment --}}
                            <form action=" {{route('comment')}} " method="POST">

                                        @csrf
                                        <textarea class="form-control comment" name="comment" cols="2" rows="2" placeholder="Enter Comment"></textarea>
                                        <button  class="btn btn-dark btn-sm mt-2 save-comment">Submit</button>


                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 bg-light p-3 ">
                    <div class="card mt-4">
                        <h5 class="card-header">All Comments <span class="comment-count float-right badge badge-info"></span></h5>

                    </div>

                    <div class="mt-2"  id="div2" style="display:none;">
                        {{-- Add Comment --}}
                        <div class="add-comment mb-3">
                            @csrf
                            <textarea class="form-control comment" placeholder="Enter Reply"></textarea>
                            <button class="btn btn-dark btn-sm mt-2 save-comment">Reply</button>
                            <button onclick="close_btn(this)" class="btn btn-info btn-sm mt-2 save-comment">Close</button>
                        </div>
                    </div>

                    @foreach ($comment as $comment )
                    <div class=" mt-2">
                        <b>{{ $comment->name }}</b>
                        <p>{{ $comment->comment }}</p><hr>
                       {{-- <button class="btn btn-primary"     >Reply</button>--}}
                        <p></p>
                    </div>
                    @endforeach




                </div>
            </div>
        </div>





      <!--end  comments  section -->





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
