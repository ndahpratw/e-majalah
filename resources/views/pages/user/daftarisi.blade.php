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

            <div class="col-lg-3 col-md-6 portfolio-item isotope-item">
              <img src="assets/img/konten/catatan redaksi.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="row">
                  <div class="col-2 d-flex align-items-center pt-2 rounded-end" style="background-color: #37517e">
                    <h4 class="text-light">01<h4>
                  </div>
                  <div class="col-10">
                    <h4>Catatan Redaksi</h4>
                    <div class="d-flex justify-content-between align-items-center">
                      <h5 class="badge rounded-pill bg-secondary">
                        Lorem ipsum dolor sit amet.
                        <a href=""> <i class="text-light bi bi-arrow-up-right-circle-fill"></i> </a>
                      </h5>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                      <h5 class="badge rounded-pill bg-secondary">
                        Lorem ipsum dolor sit amet.
                        <a href=""> <i class="text-light bi bi-arrow-up-right-circle-fill"></i> </a>
                      </h5>
                    </div>
                    <div class="d-flex justify-content-end align-items-center">
                      <h6>
                       <a href="" class="link-primary btn link-offset-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                          More
                          <i class="bi bi-caret-right-fill"></i>
                       </a>
                      </h6>
                    </div>
                    {{-- <a href="portfolio-details.html" title="Selengkapnya" class="details-link"><i class="bi bi-link-45deg"></i></a> --}}
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 portfolio-item isotope-item">
              <img src="assets/img/konten/cerita hidup.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
              <div class="row">
                  <div class="col-2 d-flex align-items-center pt-2 rounded-end" style="background-color: #37517e">
                    <h4 class="text-light">02<h4>
                  </div>
                  <div class="col-10">
                    <h4>Cerita Hidup</h4>
                    <p class="text-truncate w-75">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut perferendis ratione deleniti necessitatibus iste tempore eius inventore doloribus consectetur dicta?</p>
                    {{-- <a href="portfolio-details.html" title="Selengkapnya" class="details-link"><i class="bi bi-link-45deg"></i></a> --}}
                  </div>
                </div>
              </div>
            </div>
            
            <!-- End Portfolio Item -->

            <div class="col-lg-3 col-md-6 portfolio-item isotope-item">
              <img src="assets/img/konten/map malang.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <div class="row">
                  <div class="col-2 d-flex align-items-center pt-2 rounded-end" style="background-color: #37517e">
                    <h4 class="text-light">03<h4>
                  </div>
                  <div class="col-10">
                    <h4>Map Kota Malang & Bali</h4>
                    <p class="text-truncate w-75">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum vero nostrum reiciendis ullam quas deserunt illum omnis doloribus, alias quo?</p>
                    {{-- <a href="portfolio-details.html" title="Selengkapnya" class="details-link"><i class="bi bi-link-45deg"></i></a> --}}
                  </div>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-3 col-md-6 portfolio-item isotope-item">
              <img src="assets/img/konten/Kilas Wisata.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
              <div class="row">
                  <div class="col-2 d-flex align-items-center pt-2 rounded-end" style="background-color: #37517e">
                    <h4 class="text-light">04<h4>
                  </div>
                  <div class="col-10">
                    <h4>Kilas Wisata</h4>
                    <p class="text-truncate w-75">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt dolore eveniet impedit sit vitae officia cum odio perspiciatis qui alias.</p>
                    {{-- <a href="portfolio-details.html" title="Selengkapnya" class="details-link"><i class="bi bi-link-45deg"></i></a> --}}
                  </div>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-3 col-md-6 portfolio-item isotope-item">
              <img src="assets/img/konten/Kuliner.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
              <div class="row">
                  <div class="col-2 d-flex align-items-center pt-2 rounded-end" style="background-color: #37517e">
                    <h4 class="text-light">05<h4>
                  </div>
                  <div class="col-10">
                    <h4>Kuliner</h4>
                    <p class="text-truncate w-75">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum vero nostrum reiciendis ullam quas deserunt illum omnis doloribus, alias quo?</p>
                    {{-- <a href="portfolio-details.html" title="Selengkapnya" class="details-link"><i class="bi bi-link-45deg"></i></a> --}}
                  </div>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-3 col-md-6 portfolio-item isotope-item">
              <img src="assets/img/konten/Solusi Sehat.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
              <div class="row">
                  <div class="col-2 d-flex align-items-center pt-2 rounded-end" style="background-color: #37517e">
                    <h4 class="text-light">06<h4>
                  </div>
                  <div class="col-10">
                    <h4>Tips dan Solusi Sehat</h4>
                    <p class="text-truncate w-75">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, veritatis voluptas magni fuga distinctio labore molestiae ipsam necessitatibus at excepturi.</p>
                    {{-- <a href="portfolio-details.html" title="Selengkapnya" class="details-link"><i class="bi bi-link-45deg"></i></a> --}}
                  </div>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-3 col-md-6 portfolio-item isotope-item">
              <img src="assets/img/konten/Peluang Usaha.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
              <div class="row">
                  <div class="col-2 d-flex align-items-center pt-2 rounded-end" style="background-color: #37517e">
                    <h4 class="text-light">07<h4>
                  </div>
                  <div class="col-10">                   
                    <h4>Peluang Usaha</h4>
                    <p class="text-truncate w-75">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia tenetur quia possimus eum vitae, excepturi sed voluptatum ratione placeat minima!</p>
                    {{-- <a href="portfolio-details.html" title="Selengkapnya" class="details-link"><i class="bi bi-link-45deg"></i></a> --}}
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 portfolio-item isotope-item">
              <img src="assets/img/konten/Jasa Titip.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
              <div class="row">
                  <div class="col-2 d-flex align-items-center pt-2 rounded-end" style="background-color: #37517e">
                    <h4 class="text-light">08<h4>
                  </div>
                  <div class="col-10">
                    <h4>Jasa Titip</h4>
                    <p class="text-truncate w-75">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia tenetur quia possimus eum vitae, excepturi sed voluptatum ratione placeat minima!</p>
                    {{-- <a href="portfolio-details.html" title="Selengkapnya" class="details-link"><i class="bi bi-link-45deg"></i></a> --}}
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 portfolio-item isotope-item">
              <img src="assets/img/konten/Kecantikan.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
              <div class="row">
                  <div class="col-2 d-flex align-items-center pt-2 rounded-end" style="background-color: #37517e">
                    <h4 class="text-light">09<h4>
                  </div>
                  <div class="col-10">
                    <h4>Kecantikan</h4>
                    <p class="text-truncate w-75">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia tenetur quia possimus eum vitae, excepturi sed voluptatum ratione placeat minima!</p>
                    {{-- <a href="portfolio-details.html" title="Selengkapnya" class="details-link"><i class="bi bi-link-45deg"></i></a> --}}
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 portfolio-item isotope-item">
              <img src="assets/img/konten/Loker.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
              <div class="row">
                  <div class="col-2 d-flex align-items-center pt-2 rounded-end" style="background-color: #37517e">
                    <h4 class="text-light">10<h4>
                  </div>
                  <div class="col-10">
                    <h4>Loker</h4>
                    <p class="text-truncate w-75">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia tenetur quia possimus eum vitae, excepturi sed voluptatum ratione placeat minima!</p>
                    {{-- <a href="portfolio-details.html" title="Selengkapnya" class="details-link"><i class="bi bi-link-45deg"></i></a> --}}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 portfolio-item isotope-item">
              <img src="assets/img/konten/Ketenangan Jiwa.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
              <div class="row">
                  <div class="col-2 d-flex align-items-center pt-2 rounded-end" style="background-color: #37517e">
                    <h4 class="text-light">11<h4>
                  </div>
                  <div class="col-10">
                    <h4>Ketenangan Jiwa</h4>
                    <p class="text-truncate w-75">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia tenetur quia possimus eum vitae, excepturi sed voluptatum ratione placeat minima!</p>
                    {{-- <a href="portfolio-details.html" title="Selengkapnya" class="details-link"><i class="bi bi-link-45deg"></i></a> --}}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 portfolio-item isotope-item">
              <img src="assets/img/konten/Jendela Promosi.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
              <div class="row">
                  <div class="col-2 d-flex align-items-center pt-2 rounded-end" style="background-color: #37517e">
                    <h4 class="text-light">12<h4>
                  </div>
                  <div class="col-10">
                    <h4>Jendela Promosi</h4>
                    <p class="text-truncate w-75">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia tenetur quia possimus eum vitae, excepturi sed voluptatum ratione placeat minima!</p>
                    {{-- <a href="portfolio-details.html" title="Selengkapnya" class="details-link"><i class="bi bi-link-45deg"></i></a> --}}
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 portfolio-item isotope-item">
              <img src="assets/img/konten/Laporan Khusus.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
              <div class="row">
                  <div class="col-2 d-flex align-items-center pt-2 rounded-end" style="background-color: #37517e">
                    <h4 class="text-light">13<h4>
                  </div>
                  <div class="col-10">
                    <h4>Laporan Khusus</h4>
                    <p class="text-truncate w-75">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia tenetur quia possimus eum vitae, excepturi sed voluptatum ratione placeat minima!</p>
                    {{-- <a href="portfolio-details.html" title="Selengkapnya" class="details-link"><i class="bi bi-link-45deg"></i></a> --}}
                  </div>
                </div>
              </div>
            </div>
            <!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>


      {{-- modals --}}
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Catatan Redaksi</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body fs-3">
              <div class="d-flex justify-content-between align-items-center">
                <h5 class="badge rounded-pill bg-secondary">
                  Lorem ipsum dolor sit amet.
                  <a href=""> <i class="text-light bi bi-arrow-up-right-circle-fill"></i> </a>
                </h5>
              </div>
              <div class="d-flex justify-content-between align-items-center">
                <h5 class="badge rounded-pill bg-secondary">
                  Lorem ipsum dolor sit amet.
                  <a href=""> <i class="text-light bi bi-arrow-up-right-circle-fill"></i> </a>
                </h5>
              </div>
              <div class="d-flex justify-content-between align-items-center">
                <h5 class="badge rounded-pill bg-secondary">
                  Lorem ipsum dolor sit amet.
                  <a href=""> <i class="text-light bi bi-arrow-up-right-circle-fill"></i> </a>
                </h5>
              </div>
              <div class="d-flex justify-content-between align-items-center">
                <h5 class="badge rounded-pill bg-secondary">
                  Lorem ipsum dolor sit amet.
                  <a href=""> <i class="text-light bi bi-arrow-up-right-circle-fill"></i> </a>
                </h5>
              </div>
              <div class="d-flex justify-content-between align-items-center">
                <h5 class="badge rounded-pill bg-secondary">
                  Lorem ipsum dolor sit amet.
                  <a href=""> <i class="text-light bi bi-arrow-up-right-circle-fill"></i> </a>
                </h5>
              </div>
            </div>
          </div>
        </div>
      </div>


    </section><!-- /Portfolio Section -->
@endsection