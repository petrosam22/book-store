<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
     <link rel="stylesheet" href="{{asset('style.css')}}">


    <title>home</title>

</head>
<body>
<div class="container mt-4 col-md-12 text-center">
<div class="row align-items-baseline">
<div class="col-lg-3  md-5">
    <img src="{{asset('img/book.jpeg')}}" class="book-logo">
    <h3 class="d-inline fw-bold" style="color:#6c5dd4;">Books</h3>
 </div>
<div class="col-lg-6  	 ">
<div class="input-group rounded">
  <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
  <span class="input-group-text border-0" id="search-addon">
    <i class="fas fa-search"></i>
  </span>
</div>
</div>
<div class="col-lg-3  d-lg-flex">
    <div class="md-5 mt-2 ">

        <i class="fas fa-cart-plus px-3 pt-2" style="color:#6c5dd4;"></i>
    </div>

    <div class="md-5 mt-2 ">
        <button class="account text-decoration-none" >
            <a class=" text-decoration-none text-light border border-0" href="{{route('users.reg')}}">
                sign up
            </a>
                </button>
      </div>
    <div class="md-5 mt-2 mx-3">

        <button  class="account " >
         <a class=" text-decoration-none text-light border border-0" href="{{ route('login.page') }}">
            sign in
        </a>
        </button>
    </div>





</div>




</div>
</div>


<!-- NAV BAR START  -->
<nav>
     <ul>
        <li>
            <a class="active" href="{{ url('/') }}">Home</a>
        </li>
              <li><a href="#">Books</a></li>
      <li><a href="#">Textbooks</a></li>
      <li><a href="#">Audiobooks</a></li>
      <li><a href="#">Sale</a></li>
      <li><a href="#">Blog</a></li>
      <li><a href="#">Feedback</a></li>
      <a href="">Author</a>

     </ul>
     <label id="icon">
      <i class="fas fa-bars" id="bars"></i>
     </label>
  </nav>

<!-- NAV BAR END  -->

<!-- start cover section -->




<!-- end cover section -->



 <div class="container">
 @yield('content')
 </div>

<!-- footer  -->
<!-- store section  -->
<div class="sore w-100 " id="stores">
 <div class="container text-center">
    <div class="row">
        <div class="col-lg-4  text-start col-md-6 col-sm-12">
            <i class="fas fa-store text-light fs-1 pe-3"></i> <span class="text-light fs-1 fw-bold">268</span>
            <h5 class="text-dark">our stores around the world</h5>
        </div>
        <div class="col-lg-4  text-start col-md-6 col-sm-12">
            <i class="fas fa-users  text-light fs-1 pe-3"></i><span class="text-light fs-1 fw-bold"> 25,634</span>
           <h5 class="text-dark" style="    padding-left: 4px;           "> our Customer</h5>
        </div>
        <div class="col-lg-4  text-start col-md-6 col-sm-12">
            <i class="fas fa-book  text-light fs-1 pe-3"></i><span class="text-light fs-1 fw-bold">68K</span>
            <h5 class="text-dark">Book collection</h5>
        </div>
    </div>
 </div>
</div>
<!-- store section  -->

<!-- Subscribe section -->
<div class="scrip-section w-100 p-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 md-12">
                <h3 class="text-light">Subscribe our newsletter</h3>
                <h3 class="text-light">for newest books update</h3>

            </div>
            <div class="col-lg-6 md-12 p-0">
                <div class="input-group mb-3 pt-3">
                    <input type="text" class="form-control py-3 bg-transparent  " placeholder="Type your Email" aria-label="Recipient's username" aria-describedby="basic-addon2" id="email-input">
                  </div>

            </div>
            <div class="col-lg-2   md-12">
<div class="subscrip-btn ">

    <a class="" id="Subscribe">Subscribe</a>
</div>

             </div>
        </div>
    </div>

</div>
<!-- Subscribe section -->

<!-- footer -->
<footer>
<div class="container mt-5 pt-5">
<div class="row col-sm-12  text-center">
    <div class="col-xl-3 col-lg-4 my-3   col-md-6 col-sm-12 py-5">
        <img src="{{asset('img/book.jpeg')}}" class="book-logo">
        <h3 class="d-inline fw-bold" style="color:#6c5dd4;">Books</h3>
        <span class="d-block text-secondary py-4">
            Books os a online bookstore website who sells all genres of book from around the world find
            your book here now
        </span>
        <h4 class="">Follow Us</h4>
        <div class="social">
            <i class="fab fa-facebook   rounded-circle" style="     padding: 6px 7px;" id="social-media"></i>
            <i class="fab fa-twitter  rounded-circle" style="    padding: 6px 7px;" id="social-media"></i>
            <i class="fab fa-youtube   rounded-circle" style="    font-size: 14px;padding: 6px 5px;" id="social-media"></i>
            <i class="fab fa-linkedin   rounded-circle" style="    padding: 6px 7px;" id="social-media"></i>
            <i class="fab fa-instagram-square   rounded-circle" style="     padding: 6px 7px;" id="social-media" ></i>
        </div>
    </div>
    <div class="col-xl-3 col-lg-4 my-3   col-md-6 col-sm-12 py-5">
        <h3>Quick links</h3>
        <span class="d-block text-secondary pt-3">About us</span>
        <span class="d-block text-secondary pt-3">Contact us</span>
        <span class="d-block text-secondary pt-3">Products</span>
        <span class="d-block text-secondary pt-3">Login</span>
        <span class="d-block text-secondary pt-3">Sign Up</span>
    </div>
    <div class="col-xl-3 col-lg-4 my-3   col-md-6 col-sm-12 py-5">
        <h3>
            Customer Area
        </h3>
        <span class="d-block text-secondary pt-3">
        My Account
        </span>
        <span class="d-block text-secondary pt-3">
Orders
        </span>
        <span class="d-block text-secondary pt-3">
Tracking List
        </span>
        <span class="d-block text-secondary pt-3">
Terms
        </span>
        <span class="d-block text-secondary pt-3">
        Privacy Policy
        </span>
        <span class="d-block text-secondary pt-3">
           FAQ
            </span>

    </div>
    <div class="col-xl-3 col-lg-4 my-3   col-md-6 col-sm-12 py-5">
        <h3 class="mb-2">Don't Miss the newest books</h3>
        <span class="d-block text-secondary pt-3">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem voluptatibus provident sint!
        </span>


        <div class="input-group input-group-sm mb-3 mt-3  w-100">
            <input type="text" class="form-control"
            >
            <span class="input-group-text"  id="footer-email">Subscribe</span>
          </div>




    </div>
</div>
</div>

</div>

 </footer>
<!-- footer -->

<script src="{{asset('main.js')}}"></script>
</body>
</html>


