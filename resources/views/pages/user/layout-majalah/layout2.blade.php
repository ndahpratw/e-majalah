@extends('layouts.user.majalah.main')

@section('content')

    <style>
        .potrait {
            width: 350px;
            height: 600px;
        }
        .landscape {
            width: 600px;
            height: 400px;
        }
        @media (max-width: 768px) {
            .potrait {
            width: 175px;
            height: 300px;
        }
        .landscape {
            width: 175px;
            height: 125px;
        }
        }
    </style>

    <div class="row my-4">
        <div class="col-12">
            <div class="float-end">
                <img src="{{ asset('assets/img/konten/' . $isi->detail_konten->konten->topik . '/' . $isi->gambar_1) }}" alt="{{ $isi->gambar_1 }}" class="potrait img-fluid m-2 d-block rounded">
            </div>
            <div class="text-center">
                <h2 class="text-dark">{{ $data->judul }}</h2>
                <p class="fst-italic"> {{ $data->sub_judul }} </p>
            </div>
            <br>
            <p style="text-align: justify;">
                {!! $isi->isi_konten_1 !!}
            </p>
       </div>
    </div>
    
    <div class="row my-4">
        <div class="col-12">
            <div class="float-start">
                <img src="{{ asset('assets/img/konten/' . $isi->detail_konten->konten->topik . '/' . $isi->gambar_2) }}" alt="{{ $isi->gambar_2 }}" class="landscape img-fluid m-3 d-block rounded">
            </div>
            <p style="text-align: justify;">
                {!! $isi->isi_konten_2 !!}
            </p>
       </div>
    </div>

    <div class="row my-4">
        <img src="{{ asset('assets/img/konten/' . $isi->detail_konten->konten->topik . '/' . $isi->gambar_3) }}" class="img-fluid" alt="{{ $isi->gambar_3 }}">
    </div>

    <div class="row my-4">
        <div class="col-lg-6 col-12">
            {!! $isi->isi_konten_3 !!}
        </div>

        <div class="col-lg-6 col-12">
            {!! $isi->isi_konten_4 !!}
        </div>
    </div>

@endsection