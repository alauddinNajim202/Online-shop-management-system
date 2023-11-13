

<section class="product_section layout_padding">
    <div class="container">
       <div class="heading_container heading_center">
          <h2>
             Our <span>products</span>
          </h2>
       </div>

       <div class="row">
        <div  class="col-lg-12">

            <form action="{{route('product.search') }} " method ="get">
                @csrf
                <div  class="col-lg-8"  style="float:left ; margin-left:0px">
                    <input  type="text" class="form-control text-info bg-light " name="product_search" placeholder="Enter search product" value="">
                </div>

                <div  class="col-lg-2" style="float:right; margin-bottom:25px">
                    <input  type="submit" class="py-2"   value="Search">
                </div>
            </form>


        </div>
    </div>
       <div class="row">
         @foreach($products as $product)
          <div class="col-sm-6 col-md-4 text-center col-lg-4">
             <div class="box bg-secondary mb-1" style="height:470px">
                <div class="option_container">
                   <div class="options mb-2">
                      <a href="{{route('detailsproduct', $product->id)}} " class="option1 ">
                        Product Details
                      </a>

                    <form action=" {{route('addtocart',$product->id)}} " method="post">
                        @csrf
                        <div class="row mt-4">
                            <div class="col-lg-5 ms-2">
                                <input type="number" class="option1" style="width:150px; border-radius: 30px; background-color:rgb(145, 181, 217); color:dark; font-weight:bolder; " min="1" name="quantity" value="1">
                            </div>
                            <div class="col-lg-5">
                                <input class="btn btn-sm btn-warning option1" style="border-radius: 30px" type="submit" value="Add To Cart" >
                            </div>
                        </div>
                    </form>

                   </div>
                </div>
                <div class="img-box">
                   <img class="rounded" src="{{ asset('images/'.$product->image) }} " alt="">
                </div>
                <div class="detail-box mt-5 text-center">
                    <h5 class="text-light">
                        {{$product->title}}
                    </h5>

                    @if($product->discount != null)

                    <h6 style="color:red ; text-align:center" >
                        <p>Discount price</p>

                       ${{$product->discount}}
                    </h6>

                    <h6 style="color:yellow;text-align:center; text-decoration:line-through">
                        <p>Regular price</p>

                        ${{$product->price}}
                    </h6>

                    @else
                    <h6 style="color:yellow;text-align:center;">
                        <p>Regular price</p>

                        ${{$product->price}}
                    </h6>

                    @endif


                </div>
             </div>
          </div>
         @endforeach



         {{-- Pagination --}}
        <div class="d-flex justify-content-center p-3 mt-3">
            <strong>{!! $products->withQueryString()->links('pagination::bootstrap-5') !!}</strong>
         </div>

       </div>

    </div>
 </section>
