@extends('layouts.user.majalah.main')

@section('content')

    <style>
        .images {
            width: 350px;
            height: 450px;
        }
        @media (max-width: 768px) {
        .images {
            width: 175px;
            height: 300px;
        }
        }
    </style>

    <div class="heading py-4 section-title">
        <h2 class="text-dark text-center"> {{ $data->judul }} </h2>
        <p class="fst-italic"> {{ $data->sub_judul }} </p>
    </div>

        <div class="row my-3 justify-content-center align-items-center m-0 p-0">
            <div class="col-lg-8 col-md-10">
                <p style="text-indent: 25px;">
                    {{ $isi->isi_konten_1 }}
                </p>
            </div>
        </div>

        <div class="row my-3 justify-content-end align-items-end">
            <div class="col-10">
                <img src="{{ asset('assets/img/'.$isi->gambar_1) }}" class="img-fluid" alt="" style="height: 80%; width: 100%">
            </div>
        </div>

        <div class="row my-3">
            <div class="col-12" style="text-align: justify; text-indent: 25px;">
                <div class="float-end">
                    <hr style="border: 5px solid black; margin: 15px 0;">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-6">
                            <img src="{{ asset('assets/img/'.$isi->gambar_2) }}" class="img-fluid rounded images" alt="">
                        </div>
                        <div class="col-6">
                            <img src="{{ asset('assets/img/'.$isi->gambar_3) }}" class="img-fluid rounded images" alt="">
                        </div>
                    </div>
                </div>
                <p style="text-indent: 25px;">
                    {{ $isi->isi_konten_2 }}
                </p>
            </div>
        </div>

        <div class="row my-4">
            <div class="col-lg-3 col-md-6 col-6 mt-2">
                <img src="{{ asset('assets/img/'.$isi->gambar_4) }}" class="img-fluid" alt="Gambar 1">
            </div>
            <div class="col-lg-3 col-md-6 col-6 mt-2">
                <img src="{{ asset('assets/img/'.$isi->gambar_5) }}" class="img-fluid" alt="Gambar 2">
            </div>
            <div class="col-lg-3 col-md-6 col-6 mt-2">
                <img src="{{ asset('assets/img/'.$isi->gambar_6) }}" class="img-fluid" alt="Gambar 3">
            </div>
            <div class="col-lg-3 col-md-6 col-6 mt-2">
                <img src="{{ asset('assets/img/'.$isi->gambar_7) }}" class="img-fluid" alt="Gambar 4">
            </div>
        </div>        

        <div class="row my-4">
            <div class="col-lg-6 col-12">
                <p style="text-indent: 25px;">
                    {{ $isi->isi_konten_3 }}
                </p>
            </div>
            <div class="col-lg-6 col-12">
                <p style="text-indent: 25px;">
                    {{ $isi->isi_konten_4 }}
                </p>
            </div>
        </div>

        <div class="row my-4">
            <div class="col-lg-3 col-md-6 col-6 mt-2">
                <img src="{{ asset('assets/img/'.$isi->gambar_8) }}" class="img-fluid" alt="Gambar 1">
            </div>
            <div class="col-lg-3 col-md-6 col-6 mt-2">
                <img src="{{ asset('assets/img/'.$isi->gambar_9) }}" class="img-fluid" alt="Gambar 2">
            </div>
            <div class="col-lg-3 col-md-6 col-6 mt-2">
                <img src="{{ asset('assets/img/'.$isi->gambar_10) }}" class="img-fluid" alt="Gambar 3">
            </div>
            <div class="col-lg-3 col-md-6 col-6 mt-2">
                <img src="{{ asset('assets/img/'.$isi->gambar_11) }}" class="img-fluid" alt="Gambar 4">
            </div>
        </div>
        

        <div class="row my-4">
            <div class="col">
                <p style="text-indent: 25px;">
                    {{ $isi->isi_konten_5 }}
            </div>
            <div class="col">
                <p style="text-indent: 25px;">
                    {{ $isi->isi_konten_6 }}
                </p>
            </div>
        </div>


    </div>

@endsection