<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <title>Login Sistem</title>
</head>
<body style="background-color: #fae6c4">
    <section class="my-5">
        <div class="container d-flex align-items-center justify-content-center">
          <div class="rows">
            <div class="col-lg-8d-flex align-items-center justify-content-center">
              <div class="card text-black" style="border-radius: 25px;">
                <div class="card-body p-md-5">
                  <div class="row justify-content-center">

                    <div class="col-md-10 col-lg-6 col-xl-5 order-lg-1">
                      <img src="{{ asset('assets/img/logo.jpg') }}" class="img-fluid" alt="Sample image">
                    </div>

                    <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center justify-content-center order-lg-2">
                      <div>
                        <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Login</p>
                        @if(session('wrong'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="bi bi-exclamation-octagon me-1"></i>
                            {{ session('wrong') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @elseif(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="bi bi-check-circle me-1"></i>
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        <form  method="post" action="/login" >
                            @csrf
                        
              
                            <!-- Email input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                            <input type="email" id="form3Example3" class="form-control form-control-lg @error('email') is-invalid @enderror shadow-none" name="email" placeholder="Enter a email address" />
                            <label class="form-label" for="form3Example3">Email address</label>
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                
                            <!-- Password input -->
                            <div data-mdb-input-init class="form-outline mb-3">
                            <input type="password" id="form3Example4" class="form-control form-control-lg @error('password') is-invalid @enderror shadow-none" name="password" placeholder="Enter password" />
                            <label class="form-label" for="form3Example4">Password</label>
                            @error('password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                
                        
                
                            <div class="text-center text-lg-start mt-4 pt-2">
                            <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-warning btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="/register"
                                class="link-primary">Register</a></p>
                            </div>
              
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
</html>