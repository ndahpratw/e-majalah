@extends('layouts.user.majalah.main')

@section('content') 

    <div class="heading py-4 section-title text-center">
        <h2 class="text-dark"> {{ $data->judul }} </h2>
        <p class="fst-italic"> {{ $data->sub_judul }} </p>
    </div>

    <div class="row d-flex justify-content-center align-items-center">
        <img src="{{ asset('assets/img/'.$isi->gambar_1) }}" class="img-fluid" alt="" style="max-height: 50%">                  
        <div class="col-12">  
        </div>
    </div>

    <div class="row my-4">
        <div class="col-lg-6 col-12">
            <p>
                {{ $isi->isi_konten_1 }}
            </p>
        </div>
        <div class="col-lg-6 col-12">
            <p>
                {{ $isi->isi_konten_2 }}
            </p>
            <div class="row my-2">
                <div class="col-6" style="height: 100%;">
                    <img src="{{ asset('assets/img/'.$isi->gambar_2) }}" class="img-fluid" alt="" style="max-height: 100%;">
                </div>
                <div class="col-6" style="height: 100%;">
                    <img src="{{ asset('assets/img/'.$isi->gambar_3) }}" class="img-fluid" alt="" style="max-height: 100%;">
                </div>
            </div>
        </div>
    </div>

    <div class="row d-flex justify-content-center align-items-center">
        <img src="{{ asset('assets/img/'.$isi->gambar_4) }}" class="img-fluid" alt="" style="max-height: 50%">                  
        <div class="col-12">  
        </div>
    </div>
    
    <div class="row my-4">
        <div class="col-lg-6 col-12">
            <p>
                {{ $isi->isi_konten_3 }}                
            </p>
        </div>
        <div class="col-lg-6 col-12">
            <div class="row my-4 d-flex justify-content-center align-items-center p-0 mx-0">
                <div class="col d-flex justify-content-center align-items-center" style="width: 75%;">
                    <img src="{{ asset('assets/img/'.$isi->gambar_5) }}" class="img-fluid" alt="" style="max-width: 75%;">
                </div>
            </div>
            <b> CARA MEMENUHI KEBUTUHAN VITAMIN B KOMPLEKS </b>
            <p>
                {{ $isi->isi_konten_4 }}
            </p>
        </div>
    </div>
@endsection