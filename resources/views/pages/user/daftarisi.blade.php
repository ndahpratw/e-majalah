@extends('layouts.user.daftarisi.main')

@section('konten')

<div class="row section-title mt-5" data-aos="fade-right" data-aos-delay="100">
  <h2 class="text-uppercase fs-1 fw-bolder" style="letter-spacing: 15px;">Daftar Isi</h2>
</div>

<!-- Daftar Isi Section -->
<section id="portfolio" class="portfolio section">

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            @foreach ($konten as $item)        
              <div class="col-lg-3 col-md-6 portfolio-item isotope-item">
                <img src="{{ asset('assets/img/konten/'. $item->gambar) }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <div class="row">
                    <div class="col-2 d-flex align-items-center pt-2 rounded-end" style="background-color: #37517e">
                      <h4 class="text-light">{{ $no++ }}<h4>
                    </div>
                    <div class="col-10">
                      <h4>{{ $item->topik }}</h4>
                      @foreach ($detail_konten->where('id_konten',$item->id)->take(2) as $items)
                        <div class="d-flex justify-content-between align-items-center">
                          <h5 class="badge rounded-pill bg-secondary">
                            {{ $items->judul }}
                            <a href=""> <i class="text-light bi bi-arrow-up-right-circle-fill"></i> </a>
                          </h5>
                        </div>
                      @endforeach
                      <div class="d-flex justify-content-end align-items-center">
                        <h6>
                          @if ($detail_konten->where('id_konten',$item->id)->count() > 2)
                            <a href="" class="link-primary btn link-offset-2" data-bs-toggle="modal" data-bs-target="#detail-konten{{ $item->id }}">
                                More
                                <i class="bi bi-caret-right-fill"></i>
                            </a>
                          @endif
                        </h6>
                      </div>
                      {{-- <a href="portfolio-details.html" title="Selengkapnya" class="details-link"><i class="bi bi-link-45deg"></i></a> --}}
                    </div>
                  </div>
                </div>
              </div>

              {{-- modals --}}
              <div class="modal fade" id="detail-konten{{ $item->id }}" tabindex="-1" aria-labelledby="detail-kontenLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="detail-kontenLabel">{{ $item->topik }}</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body fs-3">
                      @foreach ($detail_konten->where('id_konten',$item->id) as $items)
                        <div class="d-flex justify-content-between align-items-center">
                          <h5 class="badge rounded-pill bg-secondary">
                            {{ $items->judul }}
                            <a href=""> <i class="text-light bi bi-arrow-up-right-circle-fill"></i> </a>
                          </h5>
                        </div>
                      @endforeach
                    </div>
                  </div>
                </div>
              </div>
            @endforeach

            <!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>
    </section><!-- /Portfolio Section -->
@endsection