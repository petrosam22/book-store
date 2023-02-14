 @extends('layouts.body')
 
 <link rel="stylesheet" href="{{ asset('trend.css') }}">
@section('content')
<h1>sad</h1>
 <div class="row text-center p-5 mt-5">
    <h1 class="trend-title">Trending this week</h1>
    <p class="trend-desctiption">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque  consequatur minima beatae <br> impedit perspiciatis? Perspiciatis vero molestiae placeat ab.</p>
    <div class="col-xl-3 col-lg-4 my-5 col-md-6 col-sm-12">
        <div class="book-overlay">
 <!-- <h1>s</h1> -->
        </div>

        <div class="trend-book mb-5">
            <div class="rate text-start position-absolute">
                <i class="fas fa-star " id="star" ></i>
                <span class="text-light fw-bold">3.5</span>
            </div>
            <img src="{{ asset('img/book.jpeg') }}" class="book-cover">
          <span class="caegory">nature</span>
           <h3 class="book-name">Real life</h3>
           <span class="text-secondary">David Johanson</span>
         </div>


    </div>
 </div>
</div> 
 


 @endsection
