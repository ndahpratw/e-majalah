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
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">        
        {{-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> --}}
      
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

            .wawasan {
                font-size: 10rem !important;
                line-height: 1.2;
            }

            .pacifico-regular {
                font-family: "Pacifico", serif;
                font-weight: 400;
                font-style: normal;
                /* color: white; Warna isi teks */
                text-shadow: 
                    2px 2px 0px blue,  /* Bayangan di kanan bawah */
                    -2px 2px 0px blue, /* Bayangan di kiri bawah */
                    2px -2px 0px blue, /* Bayangan di kanan atas */
                    -2px -2px 0px blue, /* Bayangan di kiri atas */
                    0px 2px 0px blue,  /* Bayangan di bawah */
                    2px 0px 0px blue,  /* Bayangan di kanan */
                    -2px 0px 0px blue, /* Bayangan di kiri */
                    0px -2px 0px blue; /* Bayangan di atas */
            }


            .rock {
                height: 175px;;
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

                .rock {
                    height: 225px;
                }

                .wawasan {
                    font-size: 5rem !important;
                    line-height: 1.2;
                }
            }
        </style>
        
    </head>
    <body>
        <!-- ======= Hero Section ======= -->

        {{-- satu --}}
        <section id="hero" style="background-image: url({{ asset('assets/img/index.jpeg') }}); background-size: cover; background-position: center; height: 100vh; position: relative; margin: 0;">
            <div class="container-fluid" style="height: 100%; padding: 0;">
                <!-- Row untuk pojok kiri atas -->
                <div class="row" style="position: absolute; top: 0; left: 0; width: 100%; margin: 0; display: flex; justify-content: space-between;">
                    <!-- Kolom kiri -->
                    <div class="col-5 bg-dark rock"></div>
                    <!-- Kolom kanan -->
                    <div class="col-1 bg-dark" style="height: 225px"></div>
                </div>

                <!-- Elemen di tengah -->
                <div class="row" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); margin: 0; text-align: center; display: flex; justify-content: center; align-items: center; white-space: nowrap;">
                    <h1 class="wawasan text-white fw-bold mb-0">Wawasan</h1>
                    <h1 class="pacifico-regular text-white d-inline ms-2 mb-0">Tak Terbatas</h1>
                    <a href="#" class="btn btn-secondary rounded-circle btn-lg ms-3 d-flex justify-content-center align-items-center" style="width: 60px; height: 60px;">
                        <i class="bi bi-play-fill"></i>
                    </a>
                </div>
                
                <!-- Row untuk pojok kiri bawah -->
                <div class="row" style="position: absolute; bottom: 0; left: 0; width: 100%; margin: 0; display: flex; justify-content: space-between;">
                    <!-- Kolom kiri -->
                    <div class="col-5 bg-dark rock"></div>
                </div>
        
            </div>
        </section>
        
        {{-- dua --}}
        {{-- <section id="hero" class="d-flex align-items-center" style="background-color:black; height:100vh;" alt="">
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
        </section><!-- End Hero --> --}}
    </body>
</html>