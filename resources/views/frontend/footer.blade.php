<footer>
    <div class="container">
       <div class="row">
          <div class="col-md-4">
              <div class="full">
                 <div class="logo_footer">
                   <a href="#"><img width="210" src="{{asset('frontend/images/logo.png')}} " alt="#" /></a>
                 </div>
                 <div class="information_f">
                   <p><strong>ADDRESS : </strong> 28 White tower, Street Name Dhaka City, BD</p>
                   <p><strong>Mobile number : </strong> +8801784124202</p>
                   <p><strong>EMAIL : </strong> alauddinnajim202@gmail.com</p>
                 </div>
              </div>
          </div>
          <div class="col-md-8">
             <div class="row">
             <div class="col-md-7">
                <div class="row">
                   <div class="col-md-6">
                <div class="widget_menu">
                   <h3>Menu</h3>
                   <ul>
                      <li><a href="{{route('home')}} ">Home</a></li>
                      <li><a href="{{route('about')}}">About</a></li>
                      <li><a href="{{route('products')}}">Products</a></li>
                      <li><a href="#">Testimonial</a></li>
                      <li><a href="#">Blog</a></li>
                      <li><a href="{{route('contacts')}}">Contact</a></li>
                   </ul>
                </div>
             </div>
             <div class="col-md-6">
                <div class="widget_menu">
                   <h3>Account</h3>
                   <ul>
                      <li><a href="#">Account</a></li>
                      <li><a href="{{route('showcart')}}">Checkout</a></li>
                      <li><a href="{{route('login')}}">Login</a></li>
                      <li><a href="{{route('logout')}}">Register</a></li>


                   </ul>
                </div>
             </div>
                </div>
             </div>
             <div class="col-md-5">
                <div class="widget_menu">
                   <h3>Newsletter</h3>
                   <div class="information_f">
                     <p>Subscribe by our newsletter and get update protidin.</p>
                   </div>
                   <div class="form_sub">
                      <form>
                         <fieldset>
                            <div class="field">
                               <input type="email" placeholder="Enter Your Mail" name="email" />
                               <input type="submit" value="Subscribe" />
                            </div>
                         </fieldset>
                      </form>
                   </div>
                </div>
             </div>
             </div>
          </div>
       </div>
    </div>
 </footer>
