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
        <h2 class="text-dark">Topik 1</h2>
        <p class="fst-italic">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, unde. Quidem fugit vero ipsum quos, qui eligendi, aut atque distinctio officiis suscipit ad enim, voluptatem veniam corporis reprehenderit deserunt non.</p>
    </div>

    <div class="row my-4">
        <div class="col-lg-6 col-12">
            <p style="text-align: justify; text-indent: 25px;">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam velit eveniet ullam maxime excepturi accusantium rerum obcaecati exercitationem nulla necessitatibus dolorum expedita harum id, mollitia unde aliquid, quas magni adipisci?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum ad eveniet alias illum maxime, at assumenda excepturi voluptates officiis, reprehenderit quisquam quis nobis fuga quos nulla dolore placeat veritatis incidunt?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, eligendi aut? Laboriosam repellat sed repellendus, deleniti accusantium earum. Similique soluta consequuntur dolorum enim accusamus voluptatem porro, labore doloremque esse at.
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo necessitatibus quae perferendis quasi consequatur nulla impedit asperiores iusto ullam iste atque architecto libero, harum laboriosam, sapiente eaque deserunt facere dolor.
            </p>
        </div>

        <br>

        <div class="col-lg-6 col-12">
            <p style="text-align: justify; text-indent: 25px;">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam velit eveniet ullam maxime excepturi accusantium rerum obcaecati exercitationem nulla necessitatibus dolorum expedita harum id, mollitia unde aliquid, quas magni adipisci?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum ad eveniet alias illum maxime, at assumenda excepturi voluptates officiis, reprehenderit quisquam quis nobis fuga quos nulla dolore placeat veritatis incidunt?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, eligendi aut? Laboriosam repellat sed repellendus, deleniti accusantium earum. Similique soluta consequuntur dolorum enim accusamus voluptatem porro, labore doloremque esse at.
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo necessitatibus quae perferendis quasi consequatur nulla impedit asperiores iusto ullam iste atque architecto libero, harum laboriosam, sapiente eaque deserunt facere dolor.
            </p>
        </div>
    </div>

    <div class="row my-4">
        <div class="col-6">
            <img src="{{ asset('assets/img/foto1.jpg') }}" class="img-fluid m-2" alt="">
        </div>
        <div class="col-6">
            <img src="{{ asset('assets/img/foto3.jpg') }}" class="img-fluid m-2" alt="">
        </div>
        <div class="col-lg-6 col-12">
            <img src="{{ asset('assets/img/foto6.png') }}" class="img-fluid m-2" alt="">
        </div>
        <div class="col-lg-6 col-12">
            <div class="row">
                <div class="col-lg-12 col-6">
                    <img src="{{ asset('assets/img/foto4.JPG') }}" class="img-fluid m-2" alt="">
                </div>
                <div class="col-lg-12 col-6">
                    <img src="{{ asset('assets/img/foto1.jpg') }}" class="img-fluid m-2" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="row my-4">
        <div class="col-12">
             <div class="float-end">
                 <img src="{{ asset('assets/img/foto4.JPG') }}" alt="Deskripsi gambar" class="images m-3 d-block rounded">
                 <img src="{{ asset('assets/img/foto1.jpg') }}" alt="Deskripsi gambar" class="images m-3 d-block rounded">
             </div>
             <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam velit eveniet ullam maxime excepturi accusantium rerum obcaecati exercitationem nulla necessitatibus dolorum expedita harum id, mollitia unde aliquid, quas magni adipisci? Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum ad eveniet alias illum maxime, at assumenda excepturi voluptates officiis, reprehenderit quisquam quis nobis fuga quos nulla dolore placeat veritatis incidunt? Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, eligendi aut? Laboriosam repellat sed repellendus, deleniti accusantium earum. Similique soluta consequuntur dolorum enim accusamus voluptatem porro, labore doloremque esse at. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo necessitatibus quae perferendis quasi consequatur nulla impedit asperiores iusto ullam iste atque architecto libero, harum laboriosam, sapiente eaque deserunt facere dolor. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam velit eveniet ullam maxime excepturi accusantium rerum obcaecati exercitationem nulla necessitatibus dolorum expedita harum id, mollitia unde aliquid, quas magni adipisci? Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum ad eveniet alias illum maxime, at assumenda excepturi voluptates officiis, reprehenderit quisquam quis nobis fuga quos nulla dolore placeat veritatis incidunt? Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, eligendi aut? Laboriosam repellat sed repellendus, deleniti accusantium earum. Similique soluta consequuntur dolorum enim accusamus voluptatem porro, labore doloremque esse at. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo necessitatibus quae perferendis quasi consequatur nulla impedit asperiores iusto ullam iste atque architecto libero, harum laboriosam, sapiente eaque deserunt facere dolor. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam velit eveniet ullam maxime excepturi accusantium rerum obcaecati exercitationem nulla necessitatibus dolorum expedita harum id, mollitia unde aliquid, quas magni adipisci? Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum ad eveniet alias illum maxime, at assumenda excepturi voluptates officiis, reprehenderit quisquam quis nobis fuga quos nulla dolore placeat veritatis incidunt? Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, eligendi aut? Laboriosam repellat sed repellendus, deleniti accusantium earum. Similique soluta consequuntur dolorum enim accusamus
             </p>
        </div>
    </div>

    <div class="row my-4">
        <div class="col-12">
            <!-- Gambar pertama dengan teks mengalir -->
             <div class="float-start">
                 <img src="{{ asset('assets/img/foto4.JPG') }}" alt="Deskripsi gambar" class="images m-3 d-block rounded">
                 <!-- Gambar kedua dengan teks mengalir -->
                 <img src="{{ asset('assets/img/foto1.jpg') }}" alt="Deskripsi gambar" class="images m-3 d-block rounded">
             </div>
             <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam velit eveniet ullam maxime excepturi accusantium rerum obcaecati exercitationem nulla necessitatibus dolorum expedita harum id, mollitia unde aliquid, quas magni adipisci? Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum ad eveniet alias illum maxime, at assumenda excepturi voluptates officiis, reprehenderit quisquam quis nobis fuga quos nulla dolore placeat veritatis incidunt? Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, eligendi aut? Laboriosam repellat sed repellendus, deleniti accusantium earum. Similique soluta consequuntur dolorum enim accusamus voluptatem porro, labore doloremque esse at. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo necessitatibus quae perferendis quasi consequatur nulla impedit asperiores iusto ullam iste atque architecto libero, harum laboriosam, sapiente eaque deserunt facere dolor. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam velit eveniet ullam maxime excepturi accusantium rerum obcaecati exercitationem nulla necessitatibus dolorum expedita harum id, mollitia unde aliquid, quas magni adipisci? Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum ad eveniet alias illum maxime, at assumenda excepturi voluptates officiis, reprehenderit quisquam quis nobis fuga quos nulla dolore placeat veritatis incidunt? Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, eligendi aut? Laboriosam repellat sed repellendus, deleniti accusantium earum. Similique soluta consequuntur dolorum enim accusamus voluptatem porro, labore doloremque esse at. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo necessitatibus quae perferendis quasi consequatur nulla impedit asperiores iusto ullam iste atque architecto libero, harum laboriosam, sapiente eaque deserunt facere dolor. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam velit eveniet ullam maxime excepturi accusantium rerum obcaecati exercitationem nulla necessitatibus dolorum expedita harum id, mollitia unde aliquid, quas magni adipisci? Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum ad eveniet alias illum maxime, at assumenda excepturi voluptates officiis, reprehenderit quisquam quis nobis fuga quos nulla dolore placeat veritatis incidunt? Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, eligendi aut? Laboriosam repellat sed repellendus, deleniti accusantium earum. Similique soluta consequuntur dolorum enim accusamus
             </p>
        </div>
    </div>
@endsection