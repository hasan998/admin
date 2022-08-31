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
    <!-- Keranjang -->
      <section class="ftco-section ftco-cart">
        <div class="container">
          <div class="row justify-content-center mb-3 pb-3">
            <div class="col-md-12 mb-5 heading-section text-center ftco-animate">
              <span class="subheading">Keranjang</span>
              <h2 class="mb-4">Pesanan Kamu</h2>
            </div>
          </div>   		
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-12 ftco-animate">
              <div class="cart-list">
                <table class="table">
                  <thead class="thead-primary">
                    <tr class="text-center">
                      <th>&nbsp;</th>
                      <th>Product name</th>
                      <th>Price</th>
                      <th>Quantity</th>
                      <th>Total</th>
                      <th>&nbsp;</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="text-center">
                      
                      <td class="image-prod"><div class="img" style="background-image:url({{ asset('assets/front-end/images/product-3.jpg') }});"></div></td>
                      
                      <td class="product-name">
                        <h3>Bell Pepper</h3>
                        <p>Far far away, behind the word mountains, far from the countries</p>
                      </td>
                      
                      <td class="price">$4.90</td>
                      
                      <td class="quantity">
                        <div class="input-group mb-3">
                          <input type="text" name="quantity" class="quantity form-control input-number" value="1" disabled>
                        </div>
                      </td>
                      
                      <td class="total">$4.90</td>
                      <td class="total">&nbsp;</td>
                      <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>
                    </tr><!-- END TR-->
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          
          <div class="row justify-content-end">
            <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
              <div class="cart-total mb-3">
                <h3>Cart Totals</h3>
                <p class="d-flex">
                  <span>Subtotal</span>
                  <span>$20.60</span>
                </p>
                <p class="d-flex">
                  <span>Delivery</span>
                  <span>$0.00</span>
                </p>
                <p class="d-flex">
                  <span>Discount</span>
                  <span>$3.00</span>
                </p>
                <hr>
                <p class="d-flex total-price">
                  <span>Total</span>
                  <span>$17.60</span>
                </p>
              </div>
              <p><a href="checkout.html" class="btn btn-primary py-3 px-4">Pesan Sekarang</a></p>
            </div>
          </div>
        </div>
      </section>
    <!-- Keranjang -->
@endsection