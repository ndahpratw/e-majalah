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

        <div class="heading py-4 section-title">
            <h2 class="text-dark text-center">TREN BUSANA <br> OVERSIZE <br> MASIH BELUM </h2>
            <p class="fst-italic">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, unde. Quidem fugit vero ipsum quos, qui eligendi, aut atque distinctio officiis suscipit ad enim, voluptatem veniam corporis reprehenderit deserunt non.</p>
        </div>

        <div class="content my-4" style="text-indent: 15px; text-align: justify">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-8">
                    <p>
                        Di sampul majalah Harper’s Bazaar edisi November 2022, terlihat aktris Emily Ratajkowski mengenakan busana koleksi Balenciaga yang diprediksi akan menjadi tren pada 2023, yaitu denim dan oversize. Dari berbagai busana koleksi spring/summer 2023 dan fall/winter 2023, juga sudah terlihat bahwa tren busana oversize masih akan berlanjut pada tahun ini bahkan mungkin sampai 2024 nanti.
                    </p>
                    <p>
                        Busana oversize, yang bisa diartikan sebagai busana yang ukurannya terlampau besar atau longgar, sebenarnya masih menjadi perdebatan para pelaku industri, pengamat, dan pecinta fashion. Di satu sisi, busana oversize dinilai tidak flattering karena seakan mengabaikan ukuran dan bentuk tubuh orang yang mengenakannya, karena memiliki potongan kotak dan lurus serta siluet yang bulky. Namun di sisi lain, busana ini membuat orang mengenakannya merasa nyaman tapi tetap gaya, dua hal yang sering sulit bersatu jika menyangkut fashion.
                    </p>
                    <b>
                        TERUS DIGEMARI SEJAK PANDEMI
                    </b>
                    <p>
                        Sebelum pandemi berlangsung, busana oversize sebenarnya sudah diprediksi akan menjadi tren. Perkiraan ini berdasarkan tren athleisure yang menampilkan busana busana sporty, baik yang kasual untuk dikenakan sehari-hari sampai yang estetik untuk dikenakan pada saat berkegiatan di luar rumah. Kebanyakan busana yang masuk kategori athleisure memiliki ukuran oversize, potongan longgar, dan sangat nyaman dikenakan. Selama beberapa tahun, busana athleisure seperti oversized hoodie dan jersey, celana jogger, legging, jaket sporty, dan sneakers menjadi street style yang dikenakan baik oleh orang biasa sampai ke public figure.
                    </p>
                    
                </div>
            </div>

            <div class="row my-4 d-flex justify-content-end align-items-end">
                <div class="col-8">
                    <img src="{{ asset('assets/img/foto2.png') }}" class="img-fluid" alt="" style="max-height: 80%">
                </div>
            </div>

            <div class="row my-4">
                <div class="col">
                    <p>
                        Saat pandemi berlangsung, kegiatan masyarakat di luar rumah pun dibatasi sehingga bekerja harus dilakukan dari rumah. Kenyamanan yang identik dengan busana athleisure diterapkan untuk busana sehari-hari saat beraktivitas di rumah. Busana kerja berupa kemeja slim fit, blus, gaun, tailored suit, blazer, cigarette pants, dan rok pensil, disimpan dulu dalam lemari. Sebagai gantinya, busana-busana yang lebih kasual dan nyaman seperti oversized sweater, hoodie, dan T-shirt yang ditutupi kardigan longgar menjadi pilihan, dipasangkan dengan celana jogger, lounge, atau jeans.
                    </p>
                    <p>
                        Begitu pandemi mereda dan masyarakat sudah banyak beraktivitas di luar rumah, busana oversize tetap dipertahankan karena faktor kenyamanan saat dikenakan. Celana-celana kerja yang fitted ditukar dengan yang bersiluet longgar model baggy, palazzo, dan kulot dengan pinggang berkaret, dipadukan dengan atasan oversize. Begitu juga dengan blazer, outer, dan jaket yang serba oversize dan berpotongan boxy.
                    </p>
                </div>
                <div class="col d-flex flex-column" style="justify-content: space-between;">
                    <hr style="border: 5px solid black">
                    <div class="row h-100">
                        <div class="col d-flex align-items-stretch">
                            <img src="{{ asset('assets/img/foto2.png') }}" class="img-fluid" style="height: 100%; object-fit: cover;" alt="">
                        </div>
                        <div class="col d-flex align-items-stretch">
                            <img src="{{ asset('assets/img/foto2.png') }}" class="img-fluid" style="height: 100%; object-fit: cover;" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row my-4 d-flex justify-content-center align-items-center p-0 mx-0" style="border: 1px solid black">
                <div class="col d-flex justify-content-center align-items-center" style="height: 100%;">
                    <img src="{{ asset('assets/img/foto2.png') }}" class="img-fluid" alt="" style="max-height: 100%;">
                </div>
                <div class="col d-flex justify-content-center align-items-center" style="height: 100%;">
                    <img src="{{ asset('assets/img/foto2.png') }}" class="img-fluid" alt="" style="max-height: 100%;">
                </div>
                <div class="col d-flex justify-content-center align-items-center" style="height: 100%;">
                    <img src="{{ asset('assets/img/foto2.png') }}" class="img-fluid" alt="" style="max-height: 100%;">
                </div>
                <div class="col d-flex justify-content-center align-items-center" style="height: 100%;">
                    <img src="{{ asset('assets/img/foto2.png') }}" class="img-fluid" alt="" style="max-height: 100%;">
                </div>
            </div>
            
            <div class="row my-4">
                <div class="col">
                    <p>
                        Untuk gaya kasual, celana kargo oversize dengan kantong kantong besar atau celana jeans dengan pipa lebar dipadu dengan T-shirt, blus, atau sweater ukuran oversize. Gaun-gaun ukuran midi dan maksi dengan potongan boxy atau dibuat mode tier tampak dikenakan di mana-mana karena memberi kenyamanan optimal sekaligus rasa tenang karena perut yang sedikit membuncit setelah makan siang tidak akan terlihat.
                    </p>
                    <b> TAMPILAN OVERSIZE DI KOLEKSI FALL/WINTER 2023 </b>
                    <p>
                        Dari street style lalu diadopsi ke panggung runway saat fashion week. Beberapa tren dari koleksi fall/winter 2023 berikut ini ikut menyertakan busana berukuran oversize di dalamnya. 
                        <ol>
                            <li>
                                <b>POWER SUITS</b> 
                                Tahun ini, berbagai busana kerja hadir dengan desain yang klasik dan kuat. Ini ditampilkan lewat oversize blazer dengan padding tebal di bagian bahu. Untuk bawahannya, bisa berupa rok pensil pendek atau celana palazzo. Jika ingin tampil lebih maskulin, bisa pilih yang bermotif garis.
                            </li>
                            <li>
                                <b> QUIET LUXURY </b> 
                                Tak perlu mengenakan busana yang “berteriak” lewat logo besar atau desain yang rumit untuk tampil berkelas. Bergaya sederhana mengenakan busana yang basic, seperti celana jeans dengan oversized sweater, bisa terlihat mahal jika busananya memiliki potongan yang bagus dan terbuat dari bahan berkualitas. 
                            </li>
                            <li>
                                <b>BERVOLUME</b>
                                Puffer jacket berukuran oversize, outer yang menggembung, serta rok yang lebar dan mengembang seperti memakai petticoat, memberi tambahan volume pada busana yang sebenarnya sudah berukuran jumbo. 
                            </li>
                            <li>
                                <b> OVERSIZED SCARF </b>
                                Pada musim dingin tahun ini, scarf tak hanya dapat digunakan untuk menghangatkan leher. Karena ukurannya yang super besar dan panjang, scarf juga dapat digunakan untuk menghangatkan tubuh bagian atas.
                            </li>
                        </ol>
                    </p>
                </div>
                <div class="col">
                    <p>
                        <ol start="5">
                            <li>
                                <b> KEMEJA PUTIH </b>
                                Busana yang satu ini paling aman untuk dikenakan di segala suasana, baik kasual maupun profesional. Untuk dikenakan ke kantor, sebaiknya pilih kemeja putih dengan potongan f itted. Sementara untuk hangout, kemeja putih berukuran oversize bisa menjadi pilihan untuk dikenakan bersama celana jeans bahkan celana pendek. 
                            </li>
                            <li>
                                <b> POP OF COLORS </b>
                                Untuk mencerahkan musim gugur dan musim dingin yang biasanya suram, warna-warna cerah diselipkan di sela-sela warna hitam, biru tua, cokelat, abu-abu, dan marun. Warna oranye menjadi pilihan banyak desainer, disusul kuning dan biru elektrik
                            </li>
                        </ol>
                    </p>

                    <b> TIPS MENGENAKAN BUSANA OVERSIZE </b>
                    <p>
                        Tak semua orang mau mengenakan busana oversize karena ukurannya yang besar dan potongan yang longgar relatif tidak flattering bagi tubuh. Ada juga yang lebih menyukai mengenakan busana dengan potongan fitted walaupun sedikit terasa tidak nyaman. Ini dikarenakan busana oversize cenderung menambah volume, sehingga tubuh Anda akan terlihat lebih besar dari ukuran sebenarnya. Seperti kata Tim Gunn, sosok ternama di industri fashion Amerika Serikat, “Jika dikaitkan dengan berbusana, rasa nyaman itu dinilai berlebihan. Sedikit ketidaknyamanan berarti bahwa busana Anda pas di tubuh dan berarti bahwa busana yang Anda kenakan bukan piyama.” Namun jika Anda tetap tertarik mengikuti tren fashion ini, maka ada beberapa tips yang dapat Anda simak agar tidak “tenggelam” saat mengenakan busana oversize
                        <ul>
                            <li>
                                Pilih busana dengan ukuran Anda tapi potongannya oversize. Biasanya pada busana oversize, lingkar dada akan dibuat lebih lebar dan panjang baju ditambah, tapi lingkar lengan dan panjang tangan dibuat tetap. Begitu juga dengan celana; lebih baik Anda memilih celana ukuran Anda tapi memiliki model baggy atau wide leg sehingga lingkar pinggang tetap sesuai ukuran Anda. Hindari memaksakan untuk 
                            </li>
                        </ul>
                    </p>
                </div>
            </div>


            <div class="row my-4 d-flex justify-content-center align-items-center p-0 mx-0" style="border: 1px solid black">
                <div class="col d-flex justify-content-center align-items-center" style="height: 100%;">
                    <img src="{{ asset('assets/img/foto2.png') }}" class="img-fluid" alt="" style="max-height: 100%;">
                </div>
                <div class="col d-flex justify-content-center align-items-center" style="height: 100%;">
                    <img src="{{ asset('assets/img/foto2.png') }}" class="img-fluid" alt="" style="max-height: 100%;">
                </div>
                <div class="col d-flex justify-content-center align-items-center" style="height: 100%;">
                    <img src="{{ asset('assets/img/foto2.png') }}" class="img-fluid" alt="" style="max-height: 100%;">
                </div>
                <div class="col d-flex justify-content-center align-items-center" style="height: 100%;">
                    <img src="{{ asset('assets/img/foto2.png') }}" class="img-fluid" alt="" style="max-height: 100%;">
                </div>
            </div>

            <div class="row my-4">
                <div class="col">
                    <p>
                        <ul>
                            <li>
                                Untuk pemula, sebaiknya pilih busana yang minim detail terlebih dahulu agar Anda tidak kewalahan. Hindari dulu layering karena akan menambah volume sehingga tubuh terlihat semakin besar. Pilih warna monokrom dari atasan, bawahan, sampai ke sepatu agar tubuh terlihat lebih panjang
                            </li>
                            <li>
                                Untuk menghindari Anda terlihat “tenggelam” saat berbusana oversize, maka Anda harus cerdas dalam padu padannya agar proporsional. Misalnya Anda ingin mengenakan oversize blazer. Padding pada blazer akan membuat bahu menjadi lebih lebar. Untuk mengimbanginya, Anda bisa mengenakan celana pensil dengan panjang melebihi mata kaki ditambah mengenakan high heels. Ini akan memberi ilusi kaki Anda lebih panjang sehingga seimbang dengan bahu yang terlihat lebih lebar.
                            </li>
                            <li>
                                Mengenakan busana oversize juga sebaiknya memperhatikan bentuk tubuh. Salah memilih bisa membuat bagian tubuh Anda yang sudah besar menjadi lebih besar. Jika Anda memiliki bentuk tubuh apel yang besar di atas dan mengecil ke bawah, misalnya, maka Anda bisa mengenakan celana atau rok yang oversize dipadu dengan atasan yang lebih pas badan. Sebaliknya, jika Anda memiliki bentuk tubuh pir yang kecil di atas dan besar di bawah, maka Anda bisa mengenakan atasan oversize dengan bawahan yang fitted. 
                            </li>
                        </ul>
                    </p>
                </div>
                <div class="col">
                    <p>
                        <ul>
                            <li>
                                Jika Anda mengenakan kemeja oversize dengan celana berpipa lebar, maka Anda sebaiknya memberi break di pinggang. Anda bisa melakukan French tuck, yaitu memasukkan hanya bagian depan kemeja Anda ke dalam celana dan membiarkan bagian belakang tetap di luar. French tuck akan memperlihatkan di mana garis pinggang Anda, sehingga Anda tidak terlihat tenggelam di antara dua busana oversize. 
                            </li>
                            <li>
                                Cara lain yang bisa Anda lakukan jika mengenakan T-shirt atau kemeja oversize dengan celana atau rok yang oversize adalah dengan membuat simpul di bagian pinggang. Caranya adalah dengan mengikat bagian bawah T-shirt atau kemeja, tapi pastikan agar jatuhnya di pinggang untuk menegaskan garis pinggang Anda. 
                            </li>
                            <li>
                                Hal terpenting yang menjadi kunci kesuksesan Anda dalam mengenakan busana oversize adalah rasa percaya diri. Jangan ragu untuk mencoba padu padan yang pas dan terlihat menarik untuk Anda kenakan. Dengan demikian, Anda tetap bisa tampil trendi dan nyaman dengan busana oversize.
                            </li>
                        </ul>
                    </p>
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
