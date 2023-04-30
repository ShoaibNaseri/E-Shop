  <!-- Start Footer Area  -->
  <footer class="axil-footer-area footer-style-2">
      <!-- Start Footer Top Area  -->
      <div class="footer-top separator-top">
          <div class="container">
              <div class="row">
                  <!-- Start Single Widget  -->
                  <div class="col-lg-4 col-sm-6">
                      <div class="axil-footer-widget">
                          <h5 class="widget-title">Support</h5>
                          <!-- <div class="logo mb--30">
                            <a href="index.html">
                                <img class="light-logo" src="{{url('front/assets')}}/images/logo/logo.png" alt="Logo Images">
                            </a>
                        </div> -->
                          <div class="inner">
                              <p>
                                  {{$contact->adress}}
                              </p>
                              <ul class="support-list-item">
                                  <li><a href="mailto:example@domain.com"><i class="fal fa-envelope-open"></i> {{$contact->email}}</a></li>
                                  <li><a href="tel:(+01)850-315-5862"><i class="fal fa-phone-alt"></i> {{$contact->phone}}</a></li>
                                  <!-- <li><i class="fal fa-map-marker-alt"></i> 685 Market Street,  <br> Las Vegas, LA 95820, <br> United States.</li> -->
                              </ul>
                          </div>
                      </div>
                  </div>
                  <!-- End Single Widget  -->
                  <!-- Start Single Widget  -->
                  <div class="col-lg-4 col-sm-6">
                      <div class="axil-footer-widget text-center">
                          <h5 class="widget-title">Pages</h5>
                          <div class="inner">
                              <ul>
                                  <li><a href="{{route('home')}}">Home</a></li>
                                  <li><a href="{{route('frontProduct')}}">Products</a></li>
                                  <li><a href="{{route('frontAbout')}}">About</a></li>
                                  <li><a href="{{route('frontContact')}}">Contact</a></li>
                              </ul>
                          </div>
                      </div>
                  </div>
                  <!-- End Single Widget  -->

                  <!-- Start Single Widget  -->
                  <div class="col-lg-4 col-sm-6">
                      <div class="axil-footer-widget float-end">
                          <h5 class="widget-title">Download App</h5>
                          <div class="inner">
                              <span>Comming Soon 🕶️</span>
                              <div class="download-btn-group">
                                  <div class="app-link">
                                      <a href="#">
                                          <img src="{{url('front/assets')}}/images/others/app-store.png" alt="App Store">
                                      </a>
                                      <a href="#">
                                          <img src="{{url('front/assets')}}/images/others/play-store.png" alt="Play Store">
                                      </a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- End Single Widget  -->
              </div>
          </div>
      </div>
      <!-- End Footer Top Area  -->
      <!-- Start Copyright Area  -->
      <div class="copyright-area copyright-default separator-top">
          <div class="container">
              <div class="row align-items-center">
                  <div class="col-xl-4">
                      <div class="social-share">
                          <a href="#"><i class="fab fa-facebook-f"></i></a>
                          <a href="#"><i class="fab fa-instagram"></i></a>
                          <a href="#"><i class="fab fa-twitter"></i></a>
                          <a href="#"><i class="fab fa-linkedin-in"></i></a>
                          <a href="#"><i class="fab fa-discord"></i></a>
                      </div>
                  </div>
                  <div class="col-xl-4 col-lg-12">
                      <div class="copyright-left d-flex flex-wrap justify-content-center">
                          <ul class="quick-link">
                              <li>Developed by Shoaib Nasaeri</li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-xl-4 col-lg-12">
                      <div class="copyright-right d-flex flex-wrap justify-content-xl-end justify-content-center align-items-center">
                          <span class="card-text">Accept For</span>
                          <ul class="payment-icons-bottom quick-link">
                              <li><img src="{{url('front/assets')}}/images/icons/cart/cart-1.png" alt="paypal cart"></li>
                              <li><img src="{{url('front/assets')}}/images/icons/cart/cart-2.png" alt="paypal cart"></li>
                              <li><img src="{{url('front/assets')}}/images/icons/cart/cart-5.png" alt="paypal cart"></li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- End Copyright Area  -->
  </footer>
  <!-- End Footer Area  -->



  <!-- Header Search Modal End -->
  <div class="header-search-modal" id="header-search-modal">
      <button class="card-close sidebar-close"><i class="fas fa-times"></i></button>
      <div class="header-search-wrap">
          <div class="card-header">
              <form action="#">
                  <div class="input-group">
                      <input type="search" class="form-control" name="prod-search" id="prod-search" placeholder="Write Something....">
                      <button type="submit" class="axil-btn btn-bg-primary"><i class="far fa-search"></i></button>
                  </div>
              </form>
          </div>
          <div class="card-body">
              <div class="search-result-header">
                  <h6 class="title">24 Result Found</h6>
                  <a href="shop.html" class="view-all">View All</a>
              </div>
              <div class="psearch-results">
                  @foreach($products as $product)
                  <div class="axil-product-list">
                      <div class="thumbnail">
                          <a href="single-product.html">
                              <img height="150px" width="150px" src="{{url('storage/cms/images/products')}}/{{$product->image}}" alt="Yantiti Leather Bags">
                          </a>
                      </div>
                      <div class="product-content">
                          <div class="product-rating">
                              <span class="rating-icon">
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fal fa-star"></i>
                              </span>
                              <span class="rating-number"><span>100+</span> Reviews</span>
                          </div>
                          <h6 class="product-title"><a href="single-product.html">Media Remote</a></h6>
                          <div class="product-price-variant">
                              <span class="price current-price">$29.99</span>
                              <span class="price old-price">$49.99</span>
                          </div>
                          <div class="product-cart">
                              <a href="cart.html" class="cart-btn"><i class="fal fa-shopping-cart"></i></a>
                              <a href="wishlist.html" class="cart-btn"><i class="fal fa-heart"></i></a>
                          </div>
                      </div>
                  </div>
                  @endforeach
              </div>
          </div>
      </div>
  </div>
  <!-- Header Search Modal End -->



  <div class="closeMask"></div>