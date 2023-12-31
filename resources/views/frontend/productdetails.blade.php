

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
  <head>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Product Detail</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">

    <style>

/*****************globals*************/
body {
    font-family: 'open sans';
    overflow-x: hidden; }

  img {
    max-width: 100%; }

  .preview {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
        -ms-flex-direction: column;
            flex-direction: column; }
    @media screen and (max-width: 996px) {
      .preview {
        margin-bottom: 20px; } }

  .preview-pic {
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
            flex-grow: 1; }

  .preview-thumbnail.nav-tabs {
    border: none;
    margin-top: 15px; }
    .preview-thumbnail.nav-tabs li {
      width: 16%;
      margin-right: 2.5%; }
      .preview-thumbnail.nav-tabs li img {
        max-width: 100%;
        display: block; }
      .preview-thumbnail.nav-tabs li a {
        padding: 0;
        margin: 0; }
      .preview-thumbnail.nav-tabs li:last-of-type {
        margin-right: 0; }

  .tab-content {
    overflow: hidden; }
    .tab-content img {
      width: 100%;
      -webkit-animation-name: opacity;
              animation-name: opacity;
      -webkit-animation-duration: .3s;
              animation-duration: .3s; }

  .card {
    margin-top: 50px;
    background: #eee;
    padding: 3em;
    line-height: 1.5em; }

  @media screen and (min-width: 997px) {
    .wrapper {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex; } }

  .details {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
        -ms-flex-direction: column;
            flex-direction: column; }

  .colors {
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
            flex-grow: 1; }

  .product-title, .price, .sizes, .colors {
    text-transform: UPPERCASE;
    font-weight: bold; }

  .checked, .price span {
    color: #ff9f1a; }

  .product-title, .rating, .product-description, .price, .vote, .sizes {
    margin-bottom: 15px; }

  .product-title {
    margin-top: 0; }

  .size {
    margin-right: 10px; }
    .size:first-of-type {
      margin-left: 40px; }

  .color {
    display: inline-block;
    vertical-align: middle;
    margin-right: 10px;
    height: 2em;
    width: 2em;
    border-radius: 2px; }
    .color:first-of-type {
      margin-left: 20px; }

  .add-to-cart, .like {
    background: #ff9f1a;
    padding: 1.2em 1.5em;
    border: none;
    text-transform: UPPERCASE;
    font-weight: bold;
    color: #fff;
    -webkit-transition: background .3s ease;
            transition: background .3s ease; }
    .add-to-cart:hover, .like:hover {
      background: #b36800;
      color: #fff; }

  .not-available {
    text-align: center;
    line-height: 2em; }
    .not-available:before {
      font-family: fontawesome;
      content: "\f00d";
      color: #fff; }

  .orange {
    background: #ff9f1a; }

  .green {
    background: #85ad00; }

  .blue {
    background: #0076ad; }

  .tooltip-inner {
    padding: 1.3em; }

  @-webkit-keyframes opacity {
    0% {
      opacity: 0;
      -webkit-transform: scale(3);
              transform: scale(3); }
    100% {
      opacity: 1;
      -webkit-transform: scale(1);
              transform: scale(1); } }

  @keyframes opacity {
    0% {
      opacity: 0;
      -webkit-transform: scale(3);
              transform: scale(3); }
    100% {
      opacity: 1;
      -webkit-transform: scale(1);
              transform: scale(1); } }
    .preview-pic img{
        width:420px;
        height:350px;
    }

    .card{
        box-shadow : 5px 5px 4px 3px black;
    }


    .header strong{
        box-shadow :  0px 4px rgb(42, 223, 106);
    }
    </style>

  </head>

  <body>

	<div class="container">

        <div class="text-center text-dark mb-4">
            <h2 class="display-3 header" > <strong>Product Details</strong> </h4>
        </div>

		<div class="card mb-5">
			<div class="container-fliud mt-2">
				<div class="wrapper row">
					<div class="preview col-md-6">

						<div class="preview-pic tab-content">
						  <div class="tab-pane active text-center" id="pic-1"><img src="{{ asset('images/'.$products->image) }}"  /></div>
						  <div class="tab-pane" id="pic-2"><img src="{{ asset('images/'.$products->image) }}" /></div>
						  <div class="tab-pane" id="pic-3"><img src="{{ asset('images/'.$products->image) }}" /></div>
						  <div class="tab-pane" id="pic-4"><img src="{{ asset('images/'.$products->image) }}" /></div>
						  <div class="tab-pane" id="pic-5"><img src="{{ asset('images/'.$products->image) }}" /></div>
						</div>
						<ul class="preview-thumbnail nav nav-tabs">
						  <li class="active"><a data-target="#pic-1" data-toggle="tab"><img class="rounded" src=" {{ asset('images/'.$products->image) }} " /></a></li>
						  <li><a data-target="#pic-2" data-toggle="tab"><img src=" {{ asset('images/'.$products->image) }} " /></a></li>
						  <li><a data-target="#pic-3" data-toggle="tab"><img src=" {{ asset('images/'.$products->image) }} " /></a></li>
						  <li><a data-target="#pic-4" data-toggle="tab"><img src=" {{ asset('images/'.$products->image) }} " /></a></li>
						  <li><a data-target="#pic-5" data-toggle="tab"><img src=" {{ asset('images/'.$products->image) }} " /></a></li>
						</ul>

					</div>
					<div class="details col-md-6">
						<h3 class="product-title"> {{$products->title}} </h3>
						<div class="rating">
							<div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
							<span class="review-no">41 reviews</span>
						</div>
						<p class="product-description"> {{$products->description}} </p>
						<h4 class="price">Discount price : <span> ${{$products->discount}} </span></h4>
						<h4 class="price">Regular price : <span style="text-decoration:line-through; color:red;" > ${{$products->price}} </span></h4>
						<p class="vote"><strong>Availabe Quantity : </strong> <strong> {{$products->quantity}}  </strong> </p>

						<h5 class="colors">Product Category:	{{$products->category}}	</h5>
						<div class="action">


                            <form action="{{route('addtocart',$products->id)}} " method="post">
                                @csrf
                                <div class="row mt-4">
                                    <div class="col-lg-5 ">
                                        <input type="number" class="form-controll" style="height:35px;  background-color:rgb(145, 181, 217); color:dark; font-weight:bolder; " min="1" name="quantity" value="1">
                                    </div>
                                    <div class="col-lg-5">
                                        <input class="btn  btn-warning " type="submit" value="Add To Cart" >
                                    </div>
                                </div>
                            </form>

                            <a href="{{route('home')}}" class="btn btn-danger" >Back</a>




						</div>
					</div>
				</div>
			</div>
		</div>



	</div>
  </body>
</html>
