 @extends('layouts.body')

 <link rel="stylesheet" href="{{ asset('trend.css') }}">
 <link rel="stylesheet" href="{{ asset('category.css') }}">
 <link rel="stylesheet" href="{{ asset('fetured.css') }}">
@section('content')

<!-- trend section  -->
  <div class="row text-center p-5 mt-5">
    <h1 class="trend-title">Trending this week</h1>
    <p class="trend-desctiption">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque  consequatur minima beatae <br> impedit perspiciatis? Perspiciatis vero molestiae placeat ab.</p>
    <div class="col-xl-3 my-5 py-3 col-lg-4 my-5 col-md-6 col-sm-12">
        <div class="book-overlay">
         </div>

        <div class="trend-book mb-5">
                <div class="rate text-start position-absolute">
                    <i class="fas fa-star " id="star" ></i>
                    <span class="text-light fw-bold">3.5</span>
                </div>
                <img src="{{ asset('img/book.jpeg') }}" class="book-cover">
                <span class="category fw-bold fs-5 pt-3">nature</span>
                <h3 class="book-name">Real life</h3>
                <h5 class="text-secondary">David Johanson</span>
                <span class="book-price mt-3">50$</span>
                <span class="book-sprice mt-3 text-decoration-line-through">60$</span>
        </div>


    </div>
 </div>
</div>
<!-- trend section  -->


<!-- sevice section -->
<div class="service-section w-100 bg-light my-5 py-3" >
<div class="container ">
    <div class="row">
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">

            <i class="fas fa-clock" id="service-icon"></i>
            <h5 class=" py-2">Quick Delivery</h5>
            <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum aliquam qui sapiente fugit aperiam quasi porro neque ipsam obcaecati!</p>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
            <i class="fas fa-money-check" id="service-icon"></i>
            <h5 class=" py-2">Secure Payment</h5>

            <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum aliquam qui sapiente fugit aperiam quasi porro neque ipsam obcaecati!</p>

        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
            <i class="fas fa-award" id="service-icon"></i>
              <h5 class=" py-2">Best Quality</h5>

            <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum aliquam qui sapiente fugit aperiam quasi porro neque ipsam obcaecati!</p>

            </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
            <i class="fas fa-shield-alt" id="service-icon"></i>
            <h5 class=" py-2">Return Guarantee</h5>

            <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum aliquam qui sapiente fugit aperiam quasi porro neque ipsam obcaecati!</p>

          </div>

    </div>

</div>
</div>
<!-- sevice section -->



<div class="container my-5">
    <h3>best seller</h3>
        <div class="row">
            <div class="d-flex   col-xl-3 col-lg-4 col-md-6 col-sm-7" id="seller-section">

                <div class="photo">
                    <img src="{{ asset('img/book.jpeg') }}" class="book-cover">
                </div>
                        <div class="px-3">
                           <div class=" border border-1 px-2 py-1 star-rate">
                                <i class="fas fa-star " id="star" ></i>
                                <span class=" text-dark fw-bold">3.5</span>

                           </div>
                                <h5 class="category  pt-3">nature</span>
                                <h3 class="book-name fs-5" >Real life</h3>
                                <h3 class="text-secondary fs-5">David Johanson</h3>
                                <span class="book-price mt-3 d-block border border-0">50$</span>

                        </div>


            </div>

        </div>
</div>


<!-- best seller section -->



<!-- start categories section  -->
<div class="position-relative">

        <div class="container position-relative " style="z-index:999;">
               <h3>Categories</h3>
            <div class="row">
                    <div class="  col-xl-3 col-lg-4 col-md-6 my-3 col-sm-12 position-relative">

                        <div class="category-name">
                            <p class="m-0 fw-bold"  >Arts</p>
                            <span class="bookscategories">240item</h3>

                        </div>
                    <div class="category-overlay">
                    </div>

                    <div class="category-img">

                        <img src="{{ asset('img/book.jpeg') }}" class="category-cover">
                    </div>







        </div>
    </div>
</div>
</div>





<!-- end categories section  -->




<!--start  featured book  -->
<div class="position-relative">
<div class="container position-relative  my-5">
    <h3>featured book</h3>
<div class="row">
    <div class="d-flex col-xl-6 col-lg-12 my-3  col-md-12    col-sm-12   position-relative  " id="featured-section">
            <div class="photo">
                <img src="{{ asset('img/book.jpeg') }}" class="featured-cover">

            </div>
            <div class="feturd-overla">
                <p class="overlay-show">Show</p>
                <i class="fas fa-search" id="search"></i>

            </div>
            <div class="book-cart px-3 ">

              <div class="book-deatils">

                    <a href="" class="categorybook rounded-3 px-1 text-decoration-none  ">biography</a>
                    <i class="fas fa-star " id="star-rate" ></i>
                    <i class="fas fa-star " id="star-rate" ></i>
                    <i class="fas fa-star " id="star-rate" ></i>
                    <i class="fas fa-star " id="star-rate" ></i>
                    <i class="fas fa-star " id="star-rate" ></i>

                    <span class="review px-2 text-secondary">888 Review</span>
              </div>

              <div>
                       <h3 class="book-name   fs-4 pt-3">Email and the backbone</h2>
              </div>

              <div class="book-descrip ">
                        <p class="p-0 m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam officia quos aspernatur eveniet modi quas vero minima itaque error.</p>
              </div>


              <div class="pricedeta d-flex ">
                        <h1 class="f-price mx-2  ">20</h1>
                        <h5 class="s-price text-decoration-line-through   text-secondary pt-3">30</h5>
              </div>
              <div class="book-deta">
                        <a href="" class="addcart">
                            <i class="fas fa-cart-plus px-1 pt-2" style="color:white;"></i>
                            add cart</a>
                            <i class="fas fa-heart text-danger border border-1 p-2 mx-2"></i>
                        <a href="http://" class="showdetails">View details</a>
              </div>
        </div>
        </div>

    </div>
</div>
</div>
</div>






  <!--end  featured book  -->

<!--start blog section  -->
<div class="container my-3">
    <div class="bog-content text-center">
        <h1>letest News</h1>
        <p class="text-secondary">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus voluptas earum voluptatum <br>est laboriosam, beatae tenetur! Quasi quam alias sapiente?
        </p>
    </div>
    <div class="row  blog-container">
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 py-4">
            <img src="{{ asset('img/book.jpeg') }}" class="post-photo">
            <h3 class="post-title">
                why reading is so important for ypu children
            </h3>

            <p class="desription text-secondary ">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo modi culpa quos alias.</p>
             <div class="postowner ">
               <img src="{{ asset('img/book.jpeg') }}" class="user_img">
               <div class="USER MX-3">

                <p class="px-2 fw-bold M-0">peter</p>
                <!-- <br> -->
                <span >create at 2022</span>
               </div>

              </div>


        </div>
        <div class="text-center">
            <button class="allpost">
                <a href="http://" class="view">View More</a></button>

           </div>
    </div>
</div>
<!--end blog section  -->

@endsection
