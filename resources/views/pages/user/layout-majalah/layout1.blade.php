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
                {!! $isi->isi_konten_1 !!}
            </p>
        </div>

        <br>

        <div class="col-lg-6 col-12">
            <p style="text-align: justify; text-indent: 25px;">
                {!! $isi->isi_konten_2 !!}
            </p>
        </div>
    </div>

    <div class="row my-4">
        <div class="col-6">
            <img src="{{ asset('assets/img/konten/'. $isi->detail_konten->konten->topik . '/' . $isi->gambar_1) }}" class="img-fluid m-2" alt="{{ $isi->gambar_1 }}">
        </div>
        <div class="col-6">
            <img src="{{ asset('assets/img/konten/'. $isi->detail_konten->konten->topik . '/' . $isi->gambar_2) }}" class="img-fluid m-2" alt="{{ $isi->gambar_2 }}">
        </div>
        <div class="col-lg-6 col-12">
            <img src="{{ asset('assets/img/konten/'. $isi->detail_konten->konten->topik . '/' . $isi->gambar_3) }}" class="img-fluid m-2" alt="{{ $isi->gambar_3 }}">
        </div>
        <div class="col-lg-6 col-12">
            <div class="row">
                <div class="col-lg-12 col-6">
                    <img src="{{ asset('assets/img/konten/'. $isi->detail_konten->konten->topik . '/' . $isi->gambar_4) }}" class="img-fluid m-2" alt="{{ $isi->gambar_4 }}">
                </div>
                <div class="col-lg-12 col-6">
                    <img src="{{ asset('assets/img/konten/'. $isi->detail_konten->konten->topik . '/' . $isi->gambar_5) }}" class="img-fluid m-2" alt="{{ $isi->gambar_5 }}">
                </div>
            </div>
        </div>
    </div>

    <div class="row my-4">
        <div class="col-12">
             <div class="float-end">
                 <img src="{{ asset('assets/img/konten/'. $isi->detail_konten->konten->topik . '/' . $isi->gambar_6) }}" alt="{{ $isi->gambar_6 }}" class="images m-3 d-block rounded">
                 <img src="{{ asset('assets/img/konten/'. $isi->detail_konten->konten->topik . '/' . $isi->gambar_7) }}" alt="{{ $isi->gambar_7 }}" class="images m-3 d-block rounded">
             </div>
             <p>
                {!! $isi->isi_konten_3 !!}
             </p>
        </div>
    </div>

    <div class="row my-4">
        <div class="col-12">
            <!-- Gambar pertama dengan teks mengalir -->
             <div class="float-start">
                 <img src="{{ asset('assets/img/konten/'. $isi->detail_konten->konten->topik . '/' . $isi->gambar_8) }}" alt="{{ $isi->gambar_8 }}" class="images m-3 d-block rounded">
                 <!-- Gambar kedua dengan teks mengalir -->
                 <img src="{{ asset('assets/img/konten/'. $isi->detail_konten->konten->topik . '/' . $isi->gambar_9) }}" alt="{{ $isi->gambar_9 }}" class="images m-3 d-block rounded">
             </div>
             <p>
                {!! $isi->isi_konten_4 !!}
             </p>
        </div>
    </div>
@endsection