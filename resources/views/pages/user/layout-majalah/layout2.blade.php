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
                <img src="{{ asset('assets/img/foto6.png') }}" alt="Deskripsi gambar" class="potrait img-fluid m-2 d-block rounded">
            </div>
            <div class="text-center">
                <h2 class="text-dark">Topik 2</h2>
                <p class="fst-italic">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, unde. </p>
            </div>
            <br>
            <p style="text-align: justify; text-indent: 25px;">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, officiis? Est, recusandae. Praesentium neque ea tempore, ullam delectus magnam quibusdam perspiciatis nostrum molestiae quia culpa blanditiis enim placeat iusto repellendus nobis. Numquam molestias cumque earum vel provident blanditiis labore, vitae mollitia voluptatum. Ipsam labore nesciunt hic asperiores esse iste perferendis rerum quidem, iure aperiam quas laboriosam doloribus. Numquam vel nobis labore recusandae eius molestiae illum mollitia, fugiat blanditiis tenetur ipsam saepe sint minus qui facilis amet? Blanditiis libero error vero tenetur ipsa dolorum voluptates ad velit, corporis vel accusantium quam maiores nam rerum porro iusto asperiores ea, provident quidem facilis numquam iste. Neque accusamus adipisci quasi laborum labore ipsa dolor omnis! Mollitia maiores earum consequatur iure molestiae dolorum perferendis vel voluptatibus, iste minus necessitatibus, ex voluptatum neque a, sequi ut sunt nostrum dolorem. Voluptate iste, dolores sequi obcaecati a cumque porro odit! Autem corporis voluptas magni reprehenderit amet ipsum dicta omnis, saepe officia explicabo ab, optio corrupti nam? Sit, ducimus laudantium nihil nemo harum vel unde molestiae, possimus totam blanditiis sint accusantium qui ipsam ad dolore vitae tempore dolor tempora culpa porro? Iusto, totam veritatis dignissimos autem saepe, quisquam quam debitis qui quae, pariatur eaque aperiam iure itaque? Nisi ullam architecto expedita ea quibusdam fugit, quam maxime rem, ut ad, illum animi aspernatur. Eveniet, odit sapiente! Nostrum nobis soluta atque illum veritatis totam optio distinctio debitis voluptas laboriosam dicta asperiores numquam doloribus iure voluptatibus architecto amet velit, impedit quod hic odit a quisquam. Soluta totam impedit, atque reiciendis autem illo!
            </p>
            <p style="text-align: justify; text-indent: 25px;">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime, culpa eum blanditiis, sit repudiandae mollitia aspernatur debitis provident consequatur reprehenderit autem? Perspiciatis, doloribus earum? Hic quisquam fugit et nobis perferendis recusandae debitis odit fugiat a similique quas sint ad molestias tempora, aperiam repellat beatae consequatur? Minus beatae animi sapiente sed! Voluptates minima cumque esse quasi accusamus consequuntur, similique odio quo qui, neque perspiciatis ex minus nam eaque! Accusantium illum, natus optio incidunt non sed minus.
            </p>
       </div>
    </div>
    
    <div class="row my-4">
        <div class="col-12">
            <div class="float-start">
                <img src="{{ asset('assets/img/foto1.jpg') }}" alt="Deskripsi gambar" class="landscape img-fluid m-3 d-block rounded">
            </div>
            <p style="text-align: justify; text-indent: 25px;">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, officiis? Est, recusandae. Praesentium neque ea tempore, ullam delectus magnam quibusdam perspiciatis nostrum molestiae quia culpa blanditiis enim placeat iusto repellendus nobis. Numquam molestias cumque earum vel provident blanditiis labore, vitae mollitia voluptatum. Ipsam labore nesciunt hic asperiores esse iste perferendis rerum quidem, iure aperiam quas laboriosam doloribus. Numquam vel nobis labore recusandae eius molestiae illum mollitia, fugiat blanditiis tenetur ipsam saepe sint minus qui facilis amet? Blanditiis libero error vero tenetur ipsa dolorum voluptates ad velit, corporis vel accusantium quam maiores nam rerum porro iusto asperiores ea, provident quidem facilis numquam iste. Neque accusamus adipisci quasi laborum labore ipsa dolor omnis! Mollitia maiores earum consequatur iure molestiae dolorum perferendis vel voluptatibus, iste minus necessitatibus, ex voluptatum neque a, sequi ut sunt nostrum dolorem. Voluptate iste, dolores sequi obcaecati a cumque porro odit! Autem corporis voluptas magni reprehenderit amet ipsum dicta omnis, saepe officia explicabo ab, optio corrupti nam? Sit, ducimus laudantium nihil nemo harum vel unde molestiae, possimus totam blanditiis sint accusantium qui ipsam ad dolore vitae tempore dolor tempora culpa porro? Iusto, totam veritatis dignissimos autem saepe, quisquam quam debitis qui quae, pariatur eaque aperiam iure itaque? Nisi ullam architecto expedita ea quibusdam fugit, quam maxime rem, ut ad, illum animi aspernatur. Eveniet, odit sapiente! Nostrum nobis soluta atque illum veritatis totam optio distinctio debitis voluptas laboriosam dicta asperiores numquam doloribus iure voluptatibus architecto amet velit, impedit quod hic odit a quisquam. Soluta totam impedit, atque reiciendis autem illo!
            </p>
       </div>
    </div>

    <div class="row my-4">
        <img src="{{ asset('assets/img/foto4.JPG') }}" class="img-fluid" alt="">
    </div>

    <div class="row my-4">
        <div class="col-lg-6 col-12">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam velit eveniet ullam maxime excepturi accusantium rerum obcaecati exercitationem nulla necessitatibus dolorum expedita harum id, mollitia unde aliquid, quas magni adipisci?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum ad eveniet alias illum maxime, at assumenda excepturi voluptates officiis, reprehenderit quisquam quis nobis fuga quos nulla dolore placeat veritatis incidunt?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, eligendi aut? Laboriosam repellat sed repellendus, deleniti accusantium earum. Similique soluta consequuntur dolorum enim accusamus voluptatem porro, labore doloremque esse at.
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo necessitatibus quae perferendis quasi consequatur nulla impedit asperiores iusto ullam iste atque architecto libero, harum laboriosam, sapiente eaque deserunt facere dolor.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam velit eveniet ullam maxime excepturi accusantium rerum obcaecati exercitationem nulla necessitatibus dolorum expedita harum id, mollitia unde aliquid, quas magni adipisci?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum ad eveniet alias illum maxime, at assumenda excepturi voluptates officiis, reprehenderit quisquam quis nobis fuga quos nulla dolore placeat veritatis incidunt?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, eligendi aut? Laboriosam repellat sed repellendus, deleniti accusantium earum. Similique soluta consequuntur dolorum enim accusamus voluptatem porro, labore doloremque esse at.
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo necessitatibus quae perferendis quasi consequatur nulla impedit asperiores iusto ullam iste atque architecto libero, harum laboriosam, sapiente eaque deserunt facere dolor.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam velit eveniet ullam maxime excepturi accusantium rerum obcaecati exercitationem nulla necessitatibus dolorum expedita harum id, mollitia unde aliquid, quas magni adipisci?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum ad eveniet alias illum maxime, at assumenda excepturi voluptates officiis, reprehenderit quisquam quis nobis fuga quos nulla dolore placeat veritatis incidunt?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, eligendi aut? Laboriosam repellat sed repellendus, deleniti accusantium earum. Similique soluta consequuntur dolorum enim accusamus
        </div>

        <div class="col-lg-6 col-12">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam velit eveniet ullam maxime excepturi accusantium rerum obcaecati exercitationem nulla necessitatibus dolorum expedita harum id, mollitia unde aliquid, quas magni adipisci?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum ad eveniet alias illum maxime, at assumenda excepturi voluptates officiis, reprehenderit quisquam quis nobis fuga quos nulla dolore placeat veritatis incidunt?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, eligendi aut? Laboriosam repellat sed repellendus, deleniti accusantium earum. Similique soluta consequuntur dolorum enim accusamus voluptatem porro, labore doloremque esse at.
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo necessitatibus quae perferendis quasi consequatur nulla impedit asperiores iusto ullam iste atque architecto libero, harum laboriosam, sapiente eaque deserunt facere dolor.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam velit eveniet ullam maxime excepturi accusantium rerum obcaecati exercitationem nulla necessitatibus dolorum expedita harum id, mollitia unde aliquid, quas magni adipisci?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum ad eveniet alias illum maxime, at assumenda excepturi voluptates officiis, reprehenderit quisquam quis nobis fuga quos nulla dolore placeat veritatis incidunt?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, eligendi aut? Laboriosam repellat sed repellendus, deleniti accusantium earum. Similique soluta consequuntur dolorum enim accusamus voluptatem porro, labore doloremque esse at.
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo necessitatibus quae perferendis quasi consequatur nulla impedit asperiores iusto ullam iste atque architecto libero, harum laboriosam, sapiente eaque deserunt facere dolor.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam velit eveniet ullam maxime excepturi accusantium rerum obcaecati exercitationem nulla necessitatibus dolorum expedita harum id, mollitia unde aliquid, quas magni adipisci?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum ad eveniet alias illum maxime, at assumenda excepturi voluptates officiis, reprehenderit quisquam quis nobis fuga quos nulla dolore placeat veritatis incidunt?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, eligendi aut? Laboriosam repellat sed repellendus, deleniti accusantium earum. Similique soluta consequuntur dolorum enim accusamus
        </div>
    </div>

@endsection