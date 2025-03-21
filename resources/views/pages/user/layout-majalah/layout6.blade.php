@extends('layouts.user.majalah.main')

@section('content')

<style>
    .potrait {
        width: 550px;
        height: 600px;
    }
    @media (max-width: 768px) {
        .potrait {
        width: 125px;
        height: 300px;
    }
    }
</style>

<div class="row justify-content-center align-items-center">
    <div class="col-8">
        <div class="heading py-4 text-center section-title">
            <h2 class="text-dark">{{ $data->judul }}</h2>
            <p class="fst-italic">{{ $data->sub_judul }}</p>
        </div>
    </div>
</div>

<div class="row my-3 justify-content-end align-items-end">
    <div class="col">
        <img src="{{ asset('assets/img/konten/'. $isi->detail_konten->konten->topik . '/' .$isi->gambar_1) }}" alt="{{ $isi->gambar_1 }}" class="images m-3 d-block rounded">
    </div>
</div>

<div class="row">
    <div class="col-lg-6 col-12">
        <p style="text-align: justify;">
            {!! $isi->isi_konten_1 !!}
        </p>
    </div>
    <div class="col-lg-6 col-12">
        <p style="text-align: justify;">
            {!! $isi->isi_konten_2 !!}
        </p>
    </div>
</div>

<div class="row my-3 justify-content-start align-items-start">
    <div class="col">
        <img src="{{ asset('assets/img/konten/'. $isi->detail_konten->konten->topik . '/' .$isi->gambar_2) }}" alt="{{ $isi->gambar_2 }}" class="images m-3 d-block rounded">
    </div>
</div>

<div class="row">
    <div class="col-lg-6 col-12">
        <p style="text-align: justify;">
            {!! $isi->isi_konten_3 !!}
        </p>
    </div>
    <div class="col-lg-6 col-12">
        <p style="text-align: justify;">
            {!! $isi->isi_konten_4 !!}
        </p>
    </div>
</div>

<div class="row my-4">
    <div class="col-12">
        <div class="float-start">
            <img src="{{ asset('assets/img/konten/'. $isi->detail_konten->konten->topik . '/' .$isi->gambar_3) }}" alt="{{ $isi->gambar_3 }}" class="images m-3 d-block rounded">
        </div>
        <p style="text-align: justify;">
            {!! $isi->isi_konten_5 !!}
        </p>
   </div>
</div>

@endsection