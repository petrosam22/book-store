@extends('layouts.auth')

@section('content')


<section class=" py-5">
    <div class="container h-100">

      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11 " style="width:100%;">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
            @if($errors->any())
  <div class="alert alert-primary">
  <ul>
       @foreach($errors->all() as $error)
          <li>{{$error}}</li>

      @endforeach
      </ul>
  </div>

  @endif

                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Login  </p>

                  <form class="mx-1 mx-md-4" action="{{ route('users.login') }}" method="POST">
                  @csrf



                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-envelope fa-lg me-3 fa-fw  "></i>
                      <div class="form-outline flex-fill mb-0">
                        <input  name="email" type="email" id="form3Example3c" class="form-control" placeholder="Your Email" />
                       </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-lock fa-lg me-3 fa-fw   "></i>
                      <div class="form-outline flex-fill mb-0">
                        <input name="password"  type="password" id="form3Example4c" class="form-control" placeholder="Password" />
                       </div>
                    </div>


                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                      <button type="submit" class="btn btn-primary btn-lg">Register</button>
                    </div>

                  </form>
                 </div>
                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                  <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                    class="img-fluid" alt="Sample image">

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>






@endsection


git add .
git commit -m ""
git push
