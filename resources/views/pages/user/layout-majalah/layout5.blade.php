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

<div class="heading py-4 section-title text-center">
    <h2 class="text-dark"> {{ $data->judul }} </h2>
    <p class="fst-italic"> {{ $data->sub_judul }} </p>
</div>


<div class="row my-4">
    <div class="col-lg-6 col-12">
        <p style="text-align: justify;">
            {{ $isi->isi_konten_1 }}
        </p>
    </div>
    <div class="col-lg-6 col-12">
        <p style="text-align: justify;">
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
</div>

<div class="row my-4">
    <div class="col-12">
         <div class="float-end">
             <img src="{{ asset('assets/img/'.$isi->gambar_3) }}" alt="Deskripsi gambar" class="images m-3 d-block rounded">
             <img src="{{ asset('assets/img/'.$isi->gambar_4) }}" alt="Deskripsi gambar" class="images m-3 d-block rounded">
         </div>
         <p style="text-align: justify;">
            {{ $isi->isi_konten_3 }}
        </p>
    </div>
</div>

<div class="row my-4">
    <div class="col-lg-6 col-12">
        <p style="text-align: justify;">
            {{ $isi->isi_konten_4 }}
        </p>
    </div>
    <div class="col-lg-6 col-12">
         <p style="text-align: justify;">
            {{ $isi->isi_konten_5 }}
        </p>
        @if ($isi->quote != null)            
            <div class="d-flex justify-content-center align-items-center">
                <p class="quote" style="text-align: center;">
                <i class="bi bi-quote quote-icon-left"></i><br>
                <span>
                    {{ $isi->quote }}
                </span><br>
                <i class="bi bi-quote quote-icon-right"></i>
                </p>
            </div>
        @endif
    </div>
</div>

@endsection