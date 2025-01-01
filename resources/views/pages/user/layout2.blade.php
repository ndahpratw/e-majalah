<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/layout.css') }}">
</head>

<body class="py-5">
    <!-- Sidebar -->
    <div id="mySidebar" class="sidebar">
        <span class="close-btn" onclick="closeSidebar()">&times;</span>
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Portfolio</a>
        <a href="#">Contact</a>
    </div>

    <!-- Menu Icon -->
    <div class="menu-icon" onclick="openSidebar()">&#9776;</div>

    <div id="mainContent" class="container">

        <div class="content text-justify mt-5">
            <div class="row">
                <div class="col">
                    <div class="image-container">
                        <img src="{{ asset('assets/img/foto6.png') }}" class="potrait" alt="">
                    </div>
                </div>

                <div class="col">
                    <div class="heading py-4 section-title">
                        <h2 class="text-dark text-center">Topik 1</h2>
                        <p class="fst-italic">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, unde. Quidem fugit vero ipsum quos, qui eligendi, aut atque distinctio officiis suscipit ad enim, voluptatem veniam corporis reprehenderit deserunt non.</p>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet reiciendis fuga in neque sint vero, tempora dicta quasi sequi modi excepturi tempore alias quo nihil. Autem neque eos aliquam deleniti.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur nobis ut quibusdam officia excepturi eveniet maxime expedita distinctio odio laudantium obcaecati aperiam perferendis culpa illum ipsa nesciunt, quis vero harum!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea rem officiis eos expedita amet itaque unde esse temporibus quam excepturi error maiores accusantium nostrum dolore ratione sint, fugiat quibusdam? In?
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error quo sunt, totam enim maxime minus, voluptates deleniti corrupti deserunt sed, nihil voluptate reprehenderit voluptatum aut iure consectetur incidunt quasi excepturi.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam velit eveniet ullam maxime excepturi accusantium rerum obcaecati exercitationem nulla necessitatibus dolorum expedita harum id, mollitia unde aliquid, quas magni adipisci?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum ad eveniet alias illum maxime, at assumenda excepturi voluptates officiis, reprehenderit quisquam quis nobis fuga quos nulla dolore placeat veritatis incidunt?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, eligendi aut? Laboriosam repellat sed repellendus, deleniti accusantium earum. Similique soluta consequuntur dolorum enim accusamus voluptatem porro, labore doloremque esse at.
                    </p>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam velit eveniet ullam maxime excepturi accusantium rerum obcaecati exercitationem nulla necessitatibus dolorum expedita harum id, mollitia unde aliquid, quas magni adipisci?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum ad eveniet alias illum maxime, at assumenda excepturi voluptates officiis, reprehenderit quisquam quis nobis fuga quos nulla dolore placeat veritatis incidunt?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, eligendi aut? Laboriosam repellat sed repellendus, deleniti accusantium earum. Similique soluta consequuntur dolorum enim accusamus voluptatem porro, labore doloremque esse at.
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo necessitatibus quae perferendis quasi consequatur nulla impedit asperiores iusto ullam iste atque architecto libero, harum laboriosam, sapiente eaque deserunt facere dolor.

                    <div class="image-container">
                        <img src="{{ asset('assets/img/foto1.jpg') }}" class="landscape mt-4" alt="">
                    </div>
                </div>

                <div class="col">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet reiciendis fuga in neque sint vero, tempora dicta quasi sequi modi excepturi tempore alias quo nihil. Autem neque eos aliquam deleniti.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur nobis ut quibusdam officia excepturi eveniet maxime expedita distinctio odio laudantium obcaecati aperiam perferendis culpa illum ipsa nesciunt, quis vero harum!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea rem officiis eos expedita amet itaque unde esse temporibus quam excepturi error maiores accusantium nostrum dolore ratione sint, fugiat quibusdam? In?
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error quo sunt, totam enim maxime minus, voluptates deleniti corrupti deserunt sed, nihil voluptate reprehenderit voluptatum aut iure consectetur incidunt quasi excepturi.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam velit eveniet ullam maxime excepturi accusantium rerum obcaecati exercitationem nulla necessitatibus dolorum expedita harum id, mollitia unde aliquid, quas magni adipisci?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum ad eveniet alias illum maxime, at assumenda excepturi voluptates officiis, reprehenderit quisquam quis nobis fuga quos nulla dolore placeat veritatis incidunt?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, eligendi aut? Laboriosam repellat sed repellendus, deleniti accusantium earum. Similique soluta consequuntur dolorum enim accusamus voluptatem porro, labore doloremque esse at.
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo necessitatibus quae perferendis quasi consequatur nulla impedit asperiores iusto ullam iste atque architecto libero, harum laboriosam, sapiente eaque deserunt facere dolor.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste, hic illum ex optio deleniti quod ad iusto inventore dignissimos. Porro quis molestias laudantium consectetur maiores ipsum quaerat nemo quos id.
                </div>
            </div>

            <div class="heading py-4 section-title">
                <div class="image-container">
                    <img src="{{ asset('assets/img/foto4.JPG') }}" class="landscape mt-4" alt="">
                </div>
            </div>

            <div class="row mt-4">
                <div class="col">
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

                <div class="col">
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
        </div>
    </div>

<script>
    function openSidebar() {
        // Buka sidebar
        document.getElementById("mySidebar").style.width = "250px";

        // Geser konten utama
        document.getElementById("mainContent").classList.add("shifted");
    }

    function closeSidebar() {
        // Tutup sidebar
        document.getElementById("mySidebar").style.width = "0";

        // Kembalikan konten utama
        document.getElementById("mainContent").classList.remove("shifted");
    }
</script>


</body>
</html>
