@extends('layouts.user.majalah.main')

@section('content') 

    <style>
        .images {
            width: 600px;
            height: 400px;
        }
        @media (max-width: 768px) {
            .images {
            width: 175px;
            height: 125px;
        }
        }
    </style>

    <div class="heading py-4 text-center section-title">
        <h2 class="text-dark">{{ $data->judul }}</h2>
        <p class="fst-italic">{{ $data->sub_judul }}</p>
    </div>

    <div class="row my-4">
        <div class="col-lg-6 col-12">
            <p style="text-align: justify; text-indent: 25px;">
                {{ $isi->isi_konten_1 }}
            </p>
        </div>

        <br>

        <div class="col-lg-6 col-12">
            <p style="text-align: justify; text-indent: 25px;">
                {{ $isi->isi_konten_2 }}
            </p>
        </div>
    </div>

    <div class="row my-4">
        <div class="col-6">
            <img src="{{ asset('assets/img/'.$isi->gambar_1) }}" class="img-fluid m-2" alt="">
        </div>
        <div class="col-6">
            <img src="{{ asset('assets/img/'.$isi->gambar_2) }}" class="img-fluid m-2" alt="">
        </div>
        <div class="col-lg-6 col-12">
            <img src="{{ asset('assets/img/'.$isi->gambar_3) }}" class="img-fluid m-2" alt="">
        </div>
        <div class="col-lg-6 col-12">
            <div class="row">
                <div class="col-lg-12 col-6">
                    <img src="{{ asset('assets/img/'.$isi->gambar_4) }}" class="img-fluid m-2" alt="">
                </div>
                <div class="col-lg-12 col-6">
                    <img src="{{ asset('assets/img/'.$isi->gambar_5) }}" class="img-fluid m-2" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="row my-4">
        <div class="col-12">
             <div class="float-end">
                 <img src="{{ asset('assets/img/'.$isi->gambar_6) }}" alt="Deskripsi gambar" class="images m-3 d-block rounded">
                 <img src="{{ asset('assets/img/'.$isi->gambar_7) }}" alt="Deskripsi gambar" class="images m-3 d-block rounded">
             </div>
             <p>
                {{ $isi->isi_konten_3 }}
             </p>
        </div>
    </div>

    <div class="row my-4">
        <div class="col-12">
            <!-- Gambar pertama dengan teks mengalir -->
             <div class="float-start">
                 <img src="{{ asset('assets/img/'.$isi->gambar_8) }}" alt="Deskripsi gambar" class="images m-3 d-block rounded">
                 <!-- Gambar kedua dengan teks mengalir -->
                 <img src="{{ asset('assets/img/'.$isi->gambar_9) }}" alt="Deskripsi gambar" class="images m-3 d-block rounded">
             </div>
             <p>
                {{ $isi->isi_konten_4 }}
             </p>
        </div>
    </div>
@endsection