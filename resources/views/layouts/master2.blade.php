<!DOCTYPE html>
<html>
  <head>
    <title>TimeSphere - Jam Premium</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="css/vendor.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.mins.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Upright:wght@300;400;500;600;700&family=Sora:wght@100..800&display=swap" rel="stylesheet">
    <!-- script
      ================================================== -->
    <script src="js/modernizr.js"></script>
  </head>
  <body>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
      <symbol xmlns="http://www.w3.org/2000/svg" id="angle-right" viewBox="0 0 32 32">
        <path fill="currentColor" d="M12.969 4.281L11.53 5.72L21.812 16l-10.28 10.281l1.437 1.438l11-11l.687-.719l-.687-.719z"/>
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="angle-left" viewBox="0 0 32 32">
        <path fill="currentColor" d="m19.031 4.281l-11 11l-.687.719l.687.719l11 11l1.438-1.438L10.187 16L20.47 5.719z"/>
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="chevron-down" viewBox="0 0 24 24">
        <path fill="currentColor" d="M7.41 8.58L12 13.17l4.59-4.59L18 10l-6 6l-6-6l1.41-1.42Z"/>
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="arrow-right" viewBox="0 0 32 32">
        <path fill="currentColor" d="M18.719 6.781L17.28 8.22L24.063 15H4v2h20.063l-6.782 6.781l1.438 1.438l8.5-8.5l.687-.719l-.687-.719z"/>
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="arrow-left" viewBox="0 0 32 32">
        <path fill="currentColor" d="m13.281 6.781l-8.5 8.5l-.687.719l.687.719l8.5 8.5l1.438-1.438L7.938 17H28v-2H7.937l6.782-6.781z"/>
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="play" viewBox="0 0 24 24">
        <path fill="currentColor" d="M8 5.14v14l11-7l-11-7Z"/>
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="facebook" viewBox="0 0 24 24">
        <path fill="currentColor" d="M9.198 21.5h4v-8.01h3.604l.396-3.98h-4V7.5a1 1 0 0 1 1-1h3v-4h-3a5 5 0 0 0-5 5v2.01h-2l-.396 3.98h2.396v8.01Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="youtube" viewBox="0 0 32 32">
        <path fill="currentColor" d="M29.41 9.26a3.5 3.5 0 0 0-2.47-2.47C24.76 6.2 16 6.2 16 6.2s-8.76 0-10.94.59a3.5 3.5 0 0 0-2.47 2.47A36.13 36.13 0 0 0 2 16a36.13 36.13 0 0 0 .59 6.74a3.5 3.5 0 0 0 2.47 2.47c2.18.59 10.94.59 10.94.59s8.76 0 10.94-.59a3.5 3.5 0 0 0 2.47-2.47A36.13 36.13 0 0 0 30 16a36.13 36.13 0 0 0-.59-6.74ZM13.2 20.2v-8.4l7.27 4.2Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="twitter" viewBox="0 0 256 256">
        <path fill="currentColor" d="m245.66 77.66l-29.9 29.9C209.72 177.58 150.67 232 80 232c-14.52 0-26.49-2.3-35.58-6.84c-7.33-3.67-10.33-7.6-11.08-8.72a8 8 0 0 1 3.85-11.93c.26-.1 24.24-9.31 39.47-26.84a110.93 110.93 0 0 1-21.88-24.2c-12.4-18.41-26.28-50.39-22-98.18a8 8 0 0 1 13.65-4.92c.35.35 33.28 33.1 73.54 43.72V88a47.87 47.87 0 0 1 14.36-34.3A46.87 46.87 0 0 1 168.1 40a48.66 48.66 0 0 1 41.47 24H240a8 8 0 0 1 5.66 13.66Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="instagram" viewBox="0 0 256 256">
        <path fill="currentColor" d="M128 80a48 48 0 1 0 48 48a48.05 48.05 0 0 0-48-48Zm0 80a32 32 0 1 1 32-32a32 32 0 0 1-32 32Zm48-136H80a56.06 56.06 0 0 0-56 56v96a56.06 56.06 0 0 0 56 56h96a56.06 56.06 0 0 0 56-56V80a56.06 56.06 0 0 0-56-56Zm40 152a40 40 0 0 1-40 40H80a40 40 0 0 1-40-40V80a40 40 0 0 1 40-40h96a40 40 0 0 1 40 40ZM192 76a12 12 0 1 1-12-12a12 12 0 0 1 12 12Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="linkedin" viewBox="0 0 24 24">
        <path fill="currentColor" d="M6.94 5a2 2 0 1 1-4-.002a2 2 0 0 1 4 .002zM7 8.48H3V21h4V8.48zm6.32 0H9.34V21h3.94v-6.57c0-3.66 4.77-4 4.77 0V21H22v-7.93c0-6.17-7.06-5.94-8.72-2.91l.04-1.68z" />
      </symbol>
    </svg>
    
    <div id="preloader">
      <div id="loader"></div>
    </div>
    @include('layouts.header2')
    @yield('main-content')
    {{-- <section id="billboard" class="position-relative overflow-hidden">
      <div class="swiper main-swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide" style="background-image: url(images/banner-image.jpg); background-size: cover; background-repeat: no-repeat; height: 100vh; background-position: center;">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="banner-content">
                    <h2>Natural Handmade Soap</h2>
                    <p class="fs-5">This is a luxurious handmade soaps crafted with care and love.</p>
                    <a href="single-product.html" class="btn btn-outline">Shop Now</a>
                  </div>
                </div>
                <div class="col-md-5"></div>
              </div>
            </div>
          </div>
          <div class="swiper-slide" style="background-image: url(images/banner-image1.jpg); background-size: cover; background-repeat: no-repeat; height: 100vh; background-position: center;">
            <div class="container">
              <div class="row">
                <div class="offset-md-6 col-md-6">
                  <div class="banner-content">
                    <h2>Summer Scented Soap</h2>
                    <p class="fs-5">This is a luxurious handmade soaps crafted with care and love.</p>
                    <a href="single-product.html" class="btn btn-outline">Shop Now</a>
                  </div>
                </div>
                <div class="col-md-5"></div>
              </div>
            </div>
          </div>
          <div class="swiper-slide" style="background-image: url(images/banner-image2.jpg); background-size: cover; background-repeat: no-repeat; height: 100vh; background-position: center;">
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <div class="banner-content">
                    <h2>Herbal Handmade Soap</h2>
                    <p class="fs-5">This is a luxurious handmade soaps crafted with care and love.</p>
                    <a href="single-product.html" class="btn btn-outline">Shop Now</a>
                  </div>
                </div>
                <div class="col-md-5"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="main-slider-pagination position-absolute text-center"></div>
      </div>
    </section>
    <section id="about" class="padding-xlarge">
      <div class="container">
        <div class="row">
          <div class="offset-md-2 col-md-8">
            <h3 class="py-3" data-aos="fade" data-aos-easing="ease-in" data-aos-duration="1500" data-aos-once="true">Welcome to Soapy, your one-stop destination for luxurious, handmade soaps.</h3>
            <p data-aos="fade" data-aos-easing="ease-in" data-aos-duration="1800" data-aos-once="true">We believe in the power of natural ingredients to nourish and rejuvenate your skin. Our soaps are crafted with care, using only the finest botanicals and essential oils. Each bar is a testament to our commitment to quality and sustainability. Join us on a journey to rediscover experience the difference of Soapy.</p>
            <a href="about.html" class="btn me-5">Read More</a>
          </div>
        </div>
      </div>
    </section>
    
    <section id="products" class="product-store position-relative">
      <div class="container display-header d-flex flex-wrap justify-content-between pb-4">
        <h3 class="mt-3">Best selling Items</h3>
        <div class="btn-right d-flex flex-wrap align-items-center">
          <a href="shop.html" class="btn me-5">View all items</a>
          <div class="swiper-buttons">
            <button class="swiper-prev product-carousel-prev me-2">
              <svg width="41" height="41"><use xlink:href="#angle-left"></use></svg>
            </button>
            <button class="swiper-next product-carousel-next">
              <svg width="41" height="41"><use xlink:href="#angle-right"></use></svg>
            </button>
          </div>
        </div>
      </div>
      <div class="swiper product-swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="product-card position-relative">
              <div class="image-holder zoom-effect">
                <img src="images/product-item1.jpg" alt="product-item" class="img-fluid zoom-in">
                <div class="cart-concern position-absolute">
                  <div class="cart-button">
                    <a href="#" class="btn">Add to Cart</a>
                  </div>
                </div>
              </div>
              <div class="card-detail text-center pt-3 pb-2">
                <h5 class="card-title fs-5 text-uppercase">
                  <a href="single-product.html">Gentle Lavender Bliss</a>
                </h5>
                <span class="item-price text-primary fs-3 fw-light">$870</span>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product-card position-relative">
              <div class="image-holder zoom-effect">
                <img src="images/product-item2.jpg" alt="product-item" class="img-fluid zoom-in">
                <div class="cart-concern position-absolute">
                  <div class="cart-button">
                    <a href="#" class="btn">Add to Cart</a>
                  </div>
                </div>
              </div>
              <div class="card-detail text-center pt-3 pb-2">
                <h5 class="card-title fs-5 text-uppercase">
                  <a href="single-product.html">Citrus Splash Delight</a>
                </h5>
                <span class="item-price text-primary fs-3 fw-light">$680</span>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product-card position-relative">
              <div class="image-holder zoom-effect">
                <img src="images/product-item3.jpg" alt="product-item" class="img-fluid zoom-in">
                <div class="cart-concern position-absolute">
                  <div class="cart-button">
                    <a href="#" class="btn">Add to Cart</a>
                  </div>
                </div>
              </div>
              <div class="card-detail text-center pt-3 pb-2">
                <h5 class="card-title fs-5 text-uppercase">
                  <a href="single-product.html">Minty Fresh Revival</a>
                </h5>
                <span class="item-price text-primary fs-3 fw-light">$750</span>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product-card position-relative">
              <div class="image-holder zoom-effect">
                <img src="images/product-item4.jpg" alt="product-item" class="img-fluid zoom-in">
                <div class="cart-concern position-absolute">
                  <div class="cart-button">
                    <a href="#" class="btn">Add to Cart</a>
                  </div>
                </div>
              </div>
              <div class="card-detail text-center pt-3 pb-2">
                <h5 class="card-title fs-5 text-uppercase">
                  <a href="single-product.html">Coconut Cream Dream</a>
                </h5>
                <span class="item-price text-primary fs-3 fw-light">$650</span>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product-card position-relative">
              <div class="image-holder zoom-effect">
                <img src="images/product-item5.jpg" alt="product-item" class="img-fluid zoom-in">
                <div class="cart-concern position-absolute">
                  <div class="cart-button">
                    <a href="#" class="btn">Add to Cart</a>
                  </div>
                </div>
              </div>
              <div class="card-detail text-center pt-3 pb-2">
                <h5 class="card-title fs-5 text-uppercase">
                  <a href="single-product.html">Honey Almond Glow</a>
                </h5>
                <span class="item-price text-primary fs-3 fw-light">$750</span>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product-card position-relative">
              <div class="image-holder zoom-effect">
                <img src="images/product-item2.jpg" alt="product-item" class="img-fluid zoom-in">
                <div class="cart-concern position-absolute">
                  <div class="cart-button">
                    <a href="#" class="btn">Add to Cart</a>
                  </div>
                </div>
              </div>
              <div class="card-detail text-center pt-3 pb-2">
                <h5 class="card-title fs-5 text-uppercase">
                  <a href="single-product.html">Oatmeal Soothing Bar</a>
                </h5>
                <span class="item-price text-primary fs-3 fw-light">$750</span>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product-card position-relative">
              <div class="image-holder zoom-effect">
                <img src="images/product-item4.jpg" alt="product-item" class="img-fluid zoom-in">
                <div class="cart-concern position-absolute">
                  <div class="cart-button">
                    <a href="#" class="btn">Add to Cart</a>
                  </div>
                </div>
              </div>
              <div class="card-detail text-center pt-3 pb-2">
                <h5 class="card-title fs-5 text-uppercase">
                  <a href="single-product.html">Eucalyptus Zest Awakening</a>
                </h5>
                <span class="item-price text-primary fs-3 fw-light">$750</span>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product-card position-relative">
              <div class="image-holder zoom-effect">
                <img src="images/product-item3.jpg" alt="product-item" class="img-fluid zoom-in">
                <div class="cart-concern position-absolute">
                  <div class="cart-button">
                    <a href="#" class="btn">Add to Cart</a>
                  </div>
                </div>
              </div>
              <div class="card-detail text-center pt-3 pb-2">
                <h5 class="card-title fs-5 text-uppercase">
                  <a href="single-product.html">Rose Petal Infusion</a>
                </h5>
                <span class="item-price text-primary fs-3 fw-light">$750</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  

    <section id="faqs" class="padding-xlarge">
      <div class="container">
        <div class="row">
          <div class="offset-md-2 col-md-8">
            <h3 class="text-center mb-5" data-aos="fade" data-aos-easing="ease-in" data-aos-duration="1000" data-aos-once="true">Some FAQs</h3>
            <div class="accordion accordion-flush" id="accordionFlush" data-aos="fade" data-aos-easing="ease-in" data-aos-duration="1500" data-aos-once="true">
              <div class="accordion-item">
                <h4 class="accordion-header" id="flush-headingOne3">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
                    Are your soaps suitable for sensitive skin?
                  </button>
                </h4>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <p>Yes, our soaps are gentle and suitable for sensitive skin. They are free from harsh chemicals and artificial fragrances.</p>
                  </div>
                </div>
              </div>
      
              <div class="accordion-item">
                <h4 class="accordion-header" id="flush-headingTwo3">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="true" aria-controls="flush-collapseTwo">
                    Do you offer international shipping?
                  </button>
                </h4>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <p>Yes, we offer international shipping. Please check our shipping policy for more details.</p>
                  </div>
                </div>
              </div>
      
              <div class="accordion-item">
                <h4 class="accordion-header" id="flush-headingThree3">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="true" aria-controls="flush-collapseThree">
                    Can I return or exchange a product?
                  </button>
                </h4>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <p>Yes, we accept returns and exchanges within 30 days of purchase. Please refer to our returns policy for more information.</p>
                  </div>
                </div>
              </div>
      
            </div>      
          </div>
        </div>
      </div>
    </section>     --}}
    {{-- <section id="banner" data-aos="fade" data-aos-once="true">
      <div class="banner-content-1 position-relative" style="background:url('images/banner-img1.jpg') no-repeat left; background-size: cover; background-position: center; height: 100%;">
        <div class="banner-content-text position-absolute" data-aos="fade" data-aos-delay="1000" data-aos-easing="ease-in" data-aos-duration="1000" data-aos-once="true">
          <h2>Bar Soaps</h2>
          <a href="shop.html" class="btn">Shop it now</a>
        </div>
      </div>
      <div class="banner-content-2 position-relative" style="background:url('images/banner-img2.jpg') no-repeat left; background-size: cover; background-position: center; height: 100%;">
        <div class="banner-content-text position-absolute" data-aos="fade" data-aos-delay="1000" data-aos-easing="ease-in" data-aos-duration="1000" data-aos-once="true">
          <h2>Specialty Soaps</h2>
          <a href="shop.html" class="btn">Shop collection</a>
        </div>
      </div>
      <div class="banner-content-3 position-relative" style="background:url('images/banner-img3.jpg') no-repeat left; background-size: cover; background-position: left; height: 100%;">
        <div class="banner-content-text position-absolute" data-aos="fade" data-aos-delay="1000" data-aos-easing="ease-in" data-aos-duration="1000" data-aos-once="true">
          <h2>Gift Sets</h2>
          <a href="shop.html" class="btn">Shop collection</a>
        </div>
      </div>
    </section> --}}
    {{-- <section id="blog-posts" class="padding-xlarge pb-0" data-aos="fade" data-aos-easing="ease-in" data-aos-duration="1000" data-aos-once="true">
      <div class="container">
        <div class="display-header d-flex flex-wrap justify-content-between align-items-center pb-4">
          <h3 class="display-7 mt-3">Blog Posts</h3>
          <a href="blog.html" class="btn">Read Blog</a>
        </div>
        <div class="row">
          <div class="col-lg-4 mb-2">
            <div class="card border-0 rounded-0">
              <div class="card-image zoom-effect">
                <img src="images/post-item1.jpg" alt="blog-img" class="zoom-in img-fluid">
              </div>
            </div>
            <div class="card-body text-capitalize">
              <div class="card-meta fs-6">
                <span class="meta-date">Feb 22, 2024</span>
                <span class="meta-category">/ <a href="blog.html">Tips</a></span>
              </div>
              <h4 class="card-title">
                <a href="single-post.html">The Benefits of Handmade Soap Over Commercial Brands</a>
              </h4>
            </div>
          </div>
          <div class="col-lg-4 mb-2">
            <div class="card border-0 rounded-0">
              <div class="card-image zoom-effect">
                <img src="images/post-item3.jpg" alt="blog-img" class="zoom-in img-fluid">
              </div>
            </div>
            <div class="card-body text-capitalize">
              <div class="card-meta fs-6">
                <span class="meta-date">Feb 22, 2024</span>
                <span class="meta-category">/ <a href="blog.html">Tips</a></span>
              </div>
              <h4 class="card-title">
                <a href="single-post.html">How to Choose the Right Soap for Your Skin Type</a>
              </h4>
            </div>
          </div>
          <div class="col-lg-4 mb-2">
            <div class="card border-0 rounded-0">
              <div class="card-image zoom-effect">
                <img src="images/post-item2.jpg" alt="blog-img" class="zoom-in img-fluid">
              </div>
            </div>
            <div class="card-body text-capitalize">
              <div class="card-meta fs-6">
                <span class="meta-date">Feb 22, 2024</span>
                <span class="meta-category">/ <a href="blog.html">Tips</a></span>
              </div>
              <h4 class="card-title">
                <a href="single-post.html">DIY Soap Making: A Beginner's Guide</a>
              </h4>
            </div>
          </div>
        </div>
      </div>
    </section> --}}

    @include('layouts.footer2')

    {{-- <div id="footer-bottom">
      <div class="container">
        <div class="row d-flex flex-wrap justify-content-between">
          <div class="col-12">
            <div class="copyright">
              <p>© Copyright 2024 Soapy. Template by <a href="https://templatesjungle.com/" target="_blank"><b>TemplatesJungle</b></a></p>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
    
    <!-- Video Popup -->
    {{-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">

          <div class="modal-content">
            
              <div class="modal-body">
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><svg class="bi" width="40" height="40"><use xlink:href="#close-sharp"></use></svg></button>
                  <div class="ratio ratio-16x9">
                    <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                  </div>
              </div>

          </div>

      </div>
    </div> --}}
    <script src="js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
  </body>
</html>