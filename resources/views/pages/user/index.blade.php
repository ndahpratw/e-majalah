<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>Home</title>
        <meta content="" name="description">
        <meta content="" name="keywords">
      
        <!-- Favicons -->
        <link href="{{ asset('assets/img/logo.png') }}" rel="icon">
        <link href="{{ asset('assets/img/logo.png') }}" rel="logo">
      
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
      
        <!-- Vendor CSS Files -->
        <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="{{ asset('assets/css/style-user.css') }}" rel="stylesheet">
        <style>
            /* Default styling */
            .overlap-title {
                top: 20px; /* Jarak dari atas untuk desktop */
                z-index: 2;
                font-size: 2.5rem;
                text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
            }
        
            .center-button {
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                z-index: 3;
            }
        
            button {
                padding: 10px 20px;
                font-size: 1.25rem;
            }
        
            /* Styling khusus untuk mode ponsel */
            @media (max-width: 576px) {
                .overlap-title {
                    top: -20px; /* Pindahkan ke atas */
                    font-size: 5rem; /* Perkecil ukuran font */
                }
        
                .center-button {
                    top: 60%; /* Atur tombol sedikit lebih ke bawah untuk proporsi yang baik */
                }
            }
        </style>
        
    </head>
    <body>
        <!-- ======= Hero Section ======= -->
        {{-- <section id="hero" class="d-flex align-items-center" style="background-image: url({{ asset('assets/img/index.jpeg')}}); background-size: cover; background-position: center; height:100vh;" alt=""> --}}
        <section id="hero" class="d-flex align-items-center" style="background-color:black; height:100vh;" alt="">
            <div class="container position-relative">
                <!-- Judul -->
                <h1 class="text-center text-white position-absolute w-100 overlap-title">
                    Wawasan <br> 
                    <p>Tak Terbatas</p>
                </h1>
                
                <!-- Kontainer gambar -->
                <div class="row justify-content-center align-items-center">
                    <div class="col-6 hero-img">
                        <picture>
                            <source media="(max-width: 576px)" srcset="{{ asset('assets/img/bg-a2.jpeg') }}" class="w-100">
                            <img src="{{ asset('assets/img/bg-a.jpeg') }}" class="img-fluid w-100" alt="">
                        </picture>
                    </div>
                    <div class="col-6 hero-img">
                        <picture>
                            <source media="(max-width: 576px)" srcset="{{ asset('assets/img/bg-b2.jpeg') }}" class="w-100">
                            <img src="{{ asset('assets/img/bg-b.jpeg') }}" class="img-fluid w-100" alt="">
                        </picture>
                    </div>
                </div>
                
                <!-- Tombol di tengah -->
                <a href="" class="btn btn-secondary rounded-circle btn-lg position-absolute center-button"><i class="bi bi-play-fill"></i></a>
            </div>            
        </section><!-- End Hero -->
    </body>
</html>