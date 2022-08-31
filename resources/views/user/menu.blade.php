@extends('app')
@section('navbar')
  <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="{{ route('beranda.index') }}">Wardise</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span>
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="{{ route('beranda.index') }}" class="nav-link">Beranda</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('menu.index') }}">Menu</a></li>
            <li class="nav-item"><a href="{{ route('tentangKami.index') }}" class="nav-link">Tentang Kami</a></li>
            {{-- <li class="nav-item"><a href="about.html" class="nav-link">Riwayat Pembelian</a></li> --}}
            <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Masuk</a></li>
            {{-- <li class="nav-item cta cta-colored"><a href="cart.html" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li> --}}
          </ul>
        </div>
      </div>
    </nav>
  <!-- Navbar -->
@endsection
@section('content')
  <!-- Menu -->
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Menu Kami</h2>
          </div>
        </div>   		
      </div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10 mb-5 text-center">
            <ul class="product-category">
              <li><a href="#" class="active">All</a></li>
              <li><a href="#">Makanan</a></li>
              <li><a href="#">Minuman</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="product">
              <a href="#" class="img-prod"><img class="img-fluid" src="{{ asset('assets/front-end/images/product-1.jpg')}}" alt="Colorlib Template">
                <div class="overlay"></div>
              </a>
              <div class="text py-3 pb-4 px-3 text-center">
                <h3><a href="#">Bell Pepper</a></h3>
                <div class="d-flex">
                  <div class="pricing">
                    <p class="price"><span class="price-sale">$80.00</span></p>
                  </div>
                </div>
                <div class="bottom-area d-flex px-3">
                  <div class="m-auto d-flex">
                    <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                      <span><i class="ion-ios-menu"></i></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="product">
              <a href="#" class="img-prod"><img class="img-fluid" src="{{ asset('assets/front-end/images/product-1.jpg')}}" alt="Colorlib Template">
                <div class="overlay"></div>
              </a>
              <div class="text py-3 pb-4 px-3 text-center">
                <h3><a href="#">Bell Pepper</a></h3>
                <div class="d-flex">
                  <div class="pricing">
                    <p class="price"><span class="price-sale">$80.00</span></p>
                  </div>
                </div>
                <div class="bottom-area d-flex px-3">
                  <div class="m-auto d-flex">
                    <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                      <span><i class="ion-ios-menu"></i></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="product">
              <a href="#" class="img-prod"><img class="img-fluid" src="{{ asset('assets/front-end/images/product-1.jpg')}}" alt="Colorlib Template">
                <div class="overlay"></div>
              </a>
              <div class="text py-3 pb-4 px-3 text-center">
                <h3><a href="#">Bell Pepper</a></h3>
                <div class="d-flex">
                  <div class="pricing">
                    <p class="price"><span class="price-sale">$80.00</span></p>
                  </div>
                </div>
                <div class="bottom-area d-flex px-3">
                  <div class="m-auto d-flex">
                    <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                      <span><i class="ion-ios-menu"></i></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="product">
              <a href="#" class="img-prod"><img class="img-fluid" src="{{ asset('assets/front-end/images/product-1.jpg')}}" alt="Colorlib Template">
                <div class="overlay"></div>
              </a>
              <div class="text py-3 pb-4 px-3 text-center">
                <h3><a href="#">Bell Pepper</a></h3>
                <div class="d-flex">
                  <div class="pricing">
                    <p class="price"><span class="price-sale">$80.00</span></p>
                  </div>
                </div>
                <div class="bottom-area d-flex px-3">
                  <div class="m-auto d-flex">
                    <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                      <span><i class="ion-ios-menu"></i></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="product">
              <a href="#" class="img-prod"><img class="img-fluid" src="{{ asset('assets/front-end/images/product-1.jpg')}}" alt="Colorlib Template">
                <div class="overlay"></div>
              </a>
              <div class="text py-3 pb-4 px-3 text-center">
                <h3><a href="#">Bell Pepper</a></h3>
                <div class="d-flex">
                  <div class="pricing">
                    <p class="price"><span class="price-sale">$80.00</span></p>
                  </div>
                </div>
                <div class="bottom-area d-flex px-3">
                  <div class="m-auto d-flex">
                    <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                      <span><i class="ion-ios-menu"></i></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="product">
              <a href="#" class="img-prod"><img class="img-fluid" src="{{ asset('assets/front-end/images/product-1.jpg')}}" alt="Colorlib Template">
                <div class="overlay"></div>
              </a>
              <div class="text py-3 pb-4 px-3 text-center">
                <h3><a href="#">Bell Pepper</a></h3>
                <div class="d-flex">
                  <div class="pricing">
                    <p class="price"><span class="price-sale">$80.00</span></p>
                  </div>
                </div>
                <div class="bottom-area d-flex px-3">
                  <div class="m-auto d-flex">
                    <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                      <span><i class="ion-ios-menu"></i></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="product">
              <a href="#" class="img-prod"><img class="img-fluid" src="{{ asset('assets/front-end/images/product-1.jpg')}}" alt="Colorlib Template">
                <div class="overlay"></div>
              </a>
              <div class="text py-3 pb-4 px-3 text-center">
                <h3><a href="#">Bell Pepper</a></h3>
                <div class="d-flex">
                  <div class="pricing">
                    <p class="price"><span class="price-sale">$80.00</span></p>
                  </div>
                </div>
                <div class="bottom-area d-flex px-3">
                  <div class="m-auto d-flex">
                    <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                      <span><i class="ion-ios-menu"></i></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="product">
              <a href="#" class="img-prod"><img class="img-fluid" src="{{ asset('assets/front-end/images/product-1.jpg')}}" alt="Colorlib Template">
                <div class="overlay"></div>
              </a>
              <div class="text py-3 pb-4 px-3 text-center">
                <h3><a href="#">Bell Pepper</a></h3>
                <div class="d-flex">
                  <div class="pricing">
                    <p class="price"><span class="price-sale">$80.00</span></p>
                  </div>
                </div>
                <div class="bottom-area d-flex px-3">
                  <div class="m-auto d-flex">
                    <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                      <span><i class="ion-ios-menu"></i></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Paginate -->
          <div class="row mt-5">
            <div class="col text-center">
              <div class="block-27">
                <ul>
                  <li><a href="#">&lt;</a></li>
                  <li class="active"><span>1</span></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li><a href="#">&gt;</a></li>
                </ul>
              </div>
            </div>
          </div>
        <!-- Paginate -->
      </div>
    </section>
  <!-- Menu -->
@endsection