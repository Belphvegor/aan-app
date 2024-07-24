<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />

    <!-- fether icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- end -->

    <!-- style -->
    <link rel="stylesheet" href="{{asset('build/landing-page/Untitled-1.css')}}" />
    <!-- end -->

    <title>Coffe Code</title>
  </head>

  <body>
    <!-- Navbar Start -->
    <nav class="navbar">
      <a href="#" class="navbar-logo">Coffee <span>Code</span></a>

      <div class="navbar-nav">
        <a href="#Home">Home</a>
        <a href="#about">Tentang Kami</a>
        <a href="#menu">Menu</a>
        <a href="#products">Produk</a>
        <a href="#contact">Kontak</a>
        <a href="{{url('customer-login')}}"><span>Login</span></a>
      </div>

      <div class="navbar-extra">
        <a href="#" id="search-btn"><i data-feather="search"></i></a>
        <a href="#" id="shoping-cart-btn"
          ><i data-feather="shopping-cart"></i
        ></a>
        <a href="#" id="humburger-menu"><i data-feather="menu"></i></a>
      </div>

      <!-- Start Search Form -->
      <div class="search-form">
        <input type="search" id="search-box" placeholder="Search Here..." />
        <label for="search-box"><i data-feather="search"></i></label>
      </div>
      <!-- End Search Form -->

      <!-- Start Shopping Cart -->
      <div class="shopping-cart">
        <div class="cart-item">
          <img src="build/landing-page/products/product-coffe-codewith-orange-color.jpg" alt="" />
          <div class="item-deatil">
            <h3>Coffee Code Blue Mountain Zenith</h3>
            <div class="item-harga">IDR 750K</div>
          </div>
          <i data-feather="trash-2" class="remove-item"></i>
        </div>
      </div>
      <!-- End Shopping Cart -->
    </nav>
    <!-- Navbar End -->

    <!-- Hero Section Start -->

    <section class="Hero" id="Home">
      <main class="content">
        <h1>Nikmati Secangkir <span> Kopi </span></h1>
        <p>Tempat Di Mana Teknologi dan Kopi Bertemu</p>
        <a href="#" class="cta">Beli Sekarang</a>
      </main>
    </section>

    <!-- Hero Section End -->

    <!-- About Section Start -->
    <section class="about" id="about">
      <h2><span>Tentang</span> Kami</h2>
      <div class="row">
        <div class="about-img">
          <img src="build/landing-page/img/About.jpg" alt="Tentang Kami" />
        </div>

        <div class="content">
          <h3>Coffee Dengan kualitas Terbaik</h3>
          <p>
            Selamat datang di "Coffee Code" - tempat di mana aroma kopi segar
            bertemu dengan atmosfer yang penuh inspirasi untuk membawa
            pengalaman kopi Anda ke level berikutnya.Kami adalah destinasi utama
            bagi para pencinta kopi yang juga mengejar kecanggihan
            teknologi.Dengan suasana yang nyaman dan hangat, kami menawarkan
            beragam kopi berkualitas tinggi dari seluruh penjuru dunia, disertai
            dengan suasana yang membangkitkan kreativitas dan konsep inovatif
            yang menarik.
          </p>
        </div>
      </div>
    </section>
    <!-- About Section End -->

    <!-- Menu Section Start -->
    <section id="menu" class="menu">
      <h2><span>Menu</span>Kami</h2>
      <p>
        Nikmati ragam kopi spesial kami, dari espresso yang kuat hingga latte
        yang lembut, disertai dengan kue-kue segar dan sarapan bergizi.
      </p>

      <div class="row">
        <div class="menu-card">
          <img src="build/landing-page/Menu/espresso.jpg" alt="Espresso" class="menu-card-img" />
          <h3 class="menu-card-title">-Espresso-</h3>
          <p class="menu-card-price">IDR 20K</p>
        </div>
        <div class="menu-card">
          <img src="build/landing-page/Menu/Cappuccino.jpg" alt="Espresso" class="menu-card-img" />
          <h3 class="menu-card-title">-Cappuccino-</h3>
          <p class="menu-card-price">IDR 25K</p>
        </div>
        <div class="menu-card">
          <img src="build/landing-page/Menu/Mocha.jpg" alt="Espresso" class="menu-card-img" />
          <h3 class="menu-card-title">-Mocha-</h3>
          <p class="menu-card-price">IDR 28K</p>
        </div>
        <div class="menu-card">
          <img src="build/landing-page/Menu/kopiTubruk.jpg" alt="Espresso" class="menu-card-img" />
          <h3 class="menu-card-title">-Kopi Tubruk-</h3>
          <p class="menu-card-price">IDR 15K</p>
        </div>
        <div class="menu-card">
          <img src="build/landing-page/Menu/Muffin.jpg" alt="Espresso" class="menu-card-img" />
          <h3 class="menu-card-title">-Muffin-</h3>
          <p class="menu-card-price">IDR 15K</p>
        </div>
        <div class="menu-card">
          <img src="build/landing-page/Menu/Brownies.jpg" alt="Espresso" class="menu-card-img" />
          <h3 class="menu-card-title">-Brownies-</h3>
          <p class="menu-card-price">IDR 18K</p>
        </div>
        <div class="menu-card">
          <img src="build/landing-page/Menu/Cookies.jpg" alt="Espresso" class="menu-card-img" />
          <h3 class="menu-card-title">-Cookies Coklat-</h3>
          <p class="menu-card-price">IDR 10K</p>
        </div>
        <div class="menu-card">
          <img src="build/landing-page/Menu/Croissant.jpg" alt="Espresso" class="menu-card-img" />
          <h3 class="menu-card-title">-Croissant-</h3>
          <p class="menu-card-price">IDR 12K</p>
        </div>
      </div>
    </section>
    <!-- End Menu Section  -->

    <!-- Start Product Section -->
    <section class="products" id="products">
      <h2><span>Product Unggulan</span> Kami</h2>
      <p>
        Setiap biji kopi kami dipilih dari perkebunan terbaik, menjamin cita
        rasa dan kualitas tak tertandingi
      </p>

      <div class="row">
        <div class="product-card" data-name="p-1">
          <div class="product-icons">
            <a href="#"><i data-feather="shopping-cart"></i></a>
            <a href="#" class="item-detail-button"
              ><i data-feather="eye"></i
            ></a>
          </div>

          <div class="product-image">
            <img
              src="build/landing-page/products/product-coffe-codewith-orange-color.jpg"
              alt="produk1"
            />
          </div>
          <div class="product-content">
            <h3>Coffee Code Blue Mountain Zenith</h3>
            <div class="product-stars">
              <i data-feather="star"></i>
              <i data-feather="star"></i>
              <i data-feather="star"></i>
              <i data-feather="star"></i>
              <i data-feather="star"></i>
            </div>
            <div class="product-price">IDR 750K</div>
          </div>
        </div>
        <!-- p-2 -->
        <div class="product-card" data-name="p-2">
          <div class="product-icons">
            <a href="#"><i data-feather="shopping-cart"></i></a>
            <a href="#" class="item-detail-button"
              ><i data-feather="eye"></i
            ></a>
          </div>

          <div class="product-image">
            <img
              src="build/landing-page/products/product-coffe-codewith-orange-color.jpg"
              alt="produk1"
            />
          </div>
          <div class="product-content">
            <h3>Coffee Code Kenya AA Radiance</h3>
            <div class="product-stars">
              <i data-feather="star"></i>
              <i data-feather="star"></i>
              <i data-feather="star"></i>
              <i data-feather="star"></i>
              <i data-feather="star"></i>
            </div>
            <div class="product-price">IDR 225K</div>
          </div>
        </div>
        <div class="product-card" data-name="p-3">
          <div class="product-icons">
            <a href="#"><i data-feather="shopping-cart"></i></a>
            <a href="#" class="item-detail-button"
              ><i data-feather="eye"></i
            ></a>
          </div>

          <div class="product-image">
            <img
              src="build/landing-page/products/product-coffe-codewith-orange-color.jpg"
              alt="produk1"
            />
          </div>
          <div class="product-content">
            <h3>Coffee Code Yirga Inspiration</h3>
            <div class="product-stars">
              <i data-feather="star"></i>
              <i data-feather="star"></i>
              <i data-feather="star"></i>
              <i data-feather="star"></i>
              <i data-feather="star"></i>
            </div>
            <div class="product-price">IDR 180K</div>
          </div>
        </div>
        <div class="product-card" data-name="p-4">
          <div class="product-icons">
            <a href="#"><i data-feather="shopping-cart"></i></a>
            <a href="#" class="item-detail-button"
              ><i data-feather="eye"></i
            ></a>
          </div>

          <div class="product-image">
            <img
              src="build/landing-page/products/product-coffe-codewith-orange-color.jpg"
              alt="produk1"
            />
          </div>
          <div class="product-content">
            <h3>Coffee Code Antigua Harmony</h3>
            <div class="product-stars">
              <i data-feather="star"></i>
              <i data-feather="star"></i>
              <i data-feather="star"></i>
              <i data-feather="star"></i>
              <i data-feather="star"></i>
            </div>
            <div class="product-price">IDR 225K</div>
          </div>
        </div>
        <div class="product-card" data-name="p-5">
          <div class="product-icons">
            <a href="#"><i data-feather="shopping-cart"></i></a>
            <a href="#"
              ><i data-feather="eye" class="item-detail-button"></i
            ></a>
          </div>

          <div class="product-image">
            <img
              src="build/landing-page/products/product-coffe-codewith-orange-color.jpg"
              alt="produk1"
            />
          </div>
          <div class="product-content">
            <h3>Coffee Code Sumatra Essence</h3>
            <div class="product-stars">
              <i data-feather="star"></i>
              <i data-feather="star"></i>
              <i data-feather="star"></i>
              <i data-feather="star"></i>
              <i data-feather="star"></i>
            </div>
            <div class="product-price">IDR 195K</div>
          </div>
        </div>
        <div class="product-card" data-name="p-6">
          <div class="product-icons">
            <a href="#"><i data-feather="shopping-cart"></i></a>
            <a href="#" class="item-detail-button"
              ><i data-feather="eye"></i
            ></a>
          </div>

          <div class="product-image">
            <img
              src="build/landing-page/products/product-coffe-codewith-orange-color.jpg"
              alt="produk1"
            />
          </div>
          <div class="product-content">
            <h3>Coffee Code Kona Lava Bliss</h3>
            <div class="product-stars">
              <i data-feather="star"></i>
              <i data-feather="star"></i>
              <i data-feather="star"></i>
              <i data-feather="star"></i>
              <i data-feather="star"></i>
            </div>
            <div class="product-price">IDR 600K</div>
          </div>
        </div>
        <div class="product-card" data-name="p-7">
          <div class="product-icons">
            <a href="#"><i data-feather="shopping-cart"></i></a>
            <a href="#" class="item-detail-button"
              ><i data-feather="eye"></i
            ></a>
          </div>

          <div class="product-image">
            <img
              src="build/landing-page/products/product-coffe-codewith-orange-color.jpg"
              alt="produk1"
            />
          </div>
          <div class="product-content">
            <h3>Coffee Code Lifeboost Elevate</h3>
            <div class="product-stars">
              <i data-feather="star"></i>
              <i data-feather="star"></i>
              <i data-feather="star"></i>
              <i data-feather="star"></i>
              <i data-feather="star"></i>
            </div>
            <div class="product-price">IDR 300K</div>
          </div>
        </div>
        <div class="product-card" data-name="p-8">
          <div class="product-icons">
            <a href="#"><i data-feather="shopping-cart"></i></a>
            <a href="#" class="item-detail-button"
              ><i data-feather="eye"></i
            ></a>
          </div>

          <div class="product-image">
            <img
              src="build/landing-page/products/product-coffe-codewith-orange-color.jpg"
              alt="produk1"
            />
          </div>
          <div class="product-content">
            <h3>Coffee Code Hair Bender Fusion</h3>
            <div class="product-stars">
              <i data-feather="star"></i>
              <i data-feather="star"></i>
              <i data-feather="star"></i>
              <i data-feather="star"></i>
              <i data-feather="star"></i>
            </div>
            <div class="product-price">IDR 195K</div>
          </div>
        </div>
        <div class="product-card" data-name="p-9">
          <div class="product-icons">
            <a href="#"><i data-feather="shopping-cart"></i></a>
            <a href="#" class="item-detail-button"
              ><i data-feather="eye"></i
            ></a>
          </div>

          <div class="product-image">
            <img
              src="build/landing-page/products/product-coffe-codewith-orange-color.jpg"
              alt="produk1"
            />
          </div>
          <div class="product-content">
            <h3>Coffee Code Black Cat Harmony</h3>
            <div class="product-stars">
              <i data-feather="star"></i>
              <i data-feather="star"></i>
              <i data-feather="star"></i>
              <i data-feather="star"></i>
              <i data-feather="star"></i>
            </div>
            <div class="product-price">IDR 225K</div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Product Section -->

    <!-- Start contact section -->
    <section id="contact" class="contact">
      <h2><span>Kontak</span> Kami</h2>
      <p>
        Kami senang mendengar dari Anda! Jika Anda memiliki pertanyaan, saran,
        atau ingin berbagi pengalaman kopi Anda, jangan ragu untuk menghubungi
        kami. Tim kami selalu siap membantu Anda dengan segala kebutuhan Anda.
        Berikut adalah cara Anda dapat menghubungi kami
      </p>
      <div class="row">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.6736834804237!2d119.44000187570327!3d-5.156105152102511!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee2c0bf1e89ff%3A0x242e432b4e6d9655!2sJl.%20Boulevard%2C%20Masale%2C%20Kec.%20Panakkukang%2C%20Kota%20Makassar%2C%20Sulawesi%20Selatan!5e0!3m2!1sid!2sid!4v1717055833568!5m2!1sid!2sid"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          class="map"
        ></iframe>

        <form action="">
          <div class="input-group">
            <i data-feather="user"></i>
            <input type="text" placeholder="nama" />
          </div>
          <div class="input-group">
            <i data-feather="mail"></i>
            <input type="text" placeholder="email" />
          </div>
          <div class="input-group">
            <i data-feather="phone"></i>
            <input type="text" placeholder="no hp" />
          </div>
          <div class="input-group">
            <i data-feather="message-square"></i>
            <input type="text" placeholder="Review" />
          </div>
          <button type="submit" class="btn">Kirim Pesan</button>
        </form>
      </div>
    </section>
    <!-- End contact section -->

    <!-- Start Footer Section -->
    <!-- <footer>
      <div class="socials">
        <a href="#">
          <i data-feather="instagram"></i>
        </a>
        <a href="#">
          <i data-feather="twitter"></i>
        </a>
        <a href="#">
          <i data-feather="facebook"></i>
        </a>
      </div>

      <div class="link">
        <a href="#Home">Home</a>
        <a href="#about">Tentang Kami</a>
        <a href="#menu">Menu</a>
        <a href="#contact">Kontak</a>
      </div>

      <div class="credit">
        <p>created by <a href="">Alwan Irfan</a> | &copf; 2024</p>
      </div>
    </footer> -->
    <!-- End Footer Section -->

    <!-- Start Other Footer section -->
    <footer>
      <div class="footer-container">
        <div class="footer-left">
          <div class="social-icons">
            <a href="https://instagram.com" target="_blank"
              ><i data-feather="instagram"></i
            ></a>
            <a href="https://twitter.com" target="_blank"
              ><i data-feather="twitter"></i
            ></a>
            <a href="https://facebook.com" target="_blank"
              ><i data-feather="facebook"></i
            ></a>
          </div>
        </div>
        <div class="footer-right">
          <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">Tentang Kami</a></li>
            <li><a href="#menu">Menu</a></li>
            <li><a href="#contact">Kontak</a></li>
          </ul>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2024 Alwan Irfan</p>
      </div>
    </footer>
    <!-- End Other Footer Section -->

    <!-- Start item detail section -->
    <div class="modal" id="item-detail-modal">
      <div class="modal-container">
        <a href="#" class="close-icon"><i data-feather="x"></i></a>
        <div class="modal-content">
          <img src="build/landing-page/products/product-coffe-codewith-orange-color.jpg" alt="" />
          <div class="product-content">
            <h3>Product</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Aspernatur, quos corrupti laudantium architecto animi voluptate.
            </p>
            <div class="product-content">
              <h3>Coffee Code Blue Mountain Zenith</h3>
              <div class="product-stars">
                <i data-feather="star"></i>
                <i data-feather="star"></i>
                <i data-feather="star"></i>
                <i data-feather="star"></i>
                <i data-feather="star"></i>
              </div>
              <div class="product-price">IDR 750K</div>
              <a href="#"><i data-feather="shopping-cart"></i> add to cart</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End item detail section -->

    <!-- fether icons -->
    <script>
      feather.replace();
    </script>
    <!-- end  -->

    <!-- my javascript -->
    <script src="build/landing-page/Untitled-1.js"></script>
  </body>
</html>
