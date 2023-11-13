
<header class="header_section bg-info">
    <div class="container">
       <nav class="navbar  navbar-expand-lg custom_nav-container ">

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav">
                <li class="nav-item active">
                   <a class="nav-link" href="{{route('home') }} ">Home <span class="sr-only">(current)</span></a>
                </li>
               <li class="nav-item dropdown">
                <a class="nav-link" href="{{route('about')}}">About</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="{{route('products')}}">Products</a>
                </li>

                <li class="nav-item">
                   <a class="nav-link" href="{{route('contacts')}} ">Contact</a>
                </li>

                 <li class="nav-item">
                   <a class="nav-link text-danger" href="{{route('showcart')}}"><i class="fas text-danger fa-cart-shopping"></i>Cart  </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('user.order')}}">Order</a>
                </li>




                @if (Route::has('login'))

                @auth

                    <li class="nav-item ">


                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                             {{--  <input  type="submit" value="logout">  --}}
                             <button class="btn btn-sm  btn-outline-dark logincss "  type="submit" value="logout">logout</button>

                        </form>
                    </li>
                @else

                <li class="nav-item ">
                    <a class="nav-link btn btn-sm  btn-outline-primary logincss " href="{{route('login') }} ">login</a>
                 </li>

                 <li class="nav-item ">
                    <a class="nav-link btn btn-sm btn-outline-danger signcss" href="{{route('register')}} ">sign up</a>
                 </li>

                 @endauth

                 @endif
             </ul>
          </div>
       </nav>
    </div>
 </header>
