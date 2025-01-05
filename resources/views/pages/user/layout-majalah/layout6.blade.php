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
            <h2 class="text-dark">Topik 6</h2>
            <p class="fst-italic">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, unde. Quidem fugit vero ipsum quos, qui eligendi, aut atque distinctio officiis suscipit ad enim, voluptatem veniam corporis reprehenderit deserunt non.</p>
        </div>
    </div>
</div>

<div class="row my-3 justify-content-end align-items-end">
    <div class="col">
        <img src="{{ asset('assets/img/konten/catatan redaksi.jpg') }}" class="img-fluid" alt="" style="height: 60%; width:100%; float: right;">
    </div>
</div>

<div class="row">
    <div class="col-lg-6 col-12">
        <p style="text-align: justify;">
            Pada tahun 2023 ini proses automasi menjadi salah satu
            tren industri yang diperhitungkan. Menurut survei
            dari McKinsey, 83% dari para pembuat keputusan
            percaya bahwa proses automasi sangat diperlukan dalam
            proses transformasi digital. Sementara, 57% dari 1.300
            institusi menyatakan sudah mengimplementasikan proses
            automasi sebagai bagian dari transformasi digital. Data ini
            juga menyebutkan bahwa 45% dari seluruh proses bisnis
            di perusahaan sudah bisa diautomasi. Untuk membantu
            memerangi perubahan iklim dan mendukung Tujuan
            Pembangunan Berkelanjutan, maka saat ini teknologi telah
            diubah agar lebih ramah lingkungan, dikenal dengan sebutan
            teknologi hijau. Secara sederhana, teknologi hijau bisa diartikan
            sebagai bentuk teknologi apa pun, baik berupa produk atau
            jasa, yang dirancang agar ramah lingkungan, mulai dari
            proses produksi, rantai pasokan, sampai ke penggunaannya.
            Teknologi hijau juga diciptakan untuk mengurangi dampak
            negatif dari aktivitas manusia.
            Dalam pengimplementasiannya, salah satu yang teknologi
            automasi yang pertumbuhannya pesat belakangan ini adalah
            Robotic Process Automation (RPA). Sederhananya, RPA adalah
            perangkat automasi dalam proses bisnis menggunakan
        </p>
    </div>
    <div class="col-lg-6 col-12">
        <p style="text-align: justify;">
            tenaga robotik. RPA ibarat karyawan virtual yang bertugas
            membaca dokumen, menginput data, mengekstrak data dari
            email, atau menginstal software. Pekerjaannya dilakukan di
            bawah pengawasan dan kontrol manusia.
            Lebih dalam, RPA sebenarnya teknologi software
            yang memungkinkan kita membuat alur kerja otomatis,
            untuk mengautomasi tugas-tugas berulang keseharian
            yang biasanya dikerjakan oleh manusia. Teknologi ini
            menggunakan skrip (berisi baris program) automasi untuk
            bekerja dengan aplikasi software, seperti yang manusia
            lakukan saat menggunakan keyboard dan mouse dengan
            aplikasi Excell, misalnya.
            RPA sanggup berintegrasi dengan aplikasi enterprise, serta
            memiliki kemampuan administrasi, konfigurasi, pengawasan,
            serta sekuriti. Dalam bekerja, RPA mengakses sistem melalui
            API (application programming interface), konektor terintegrasi,
            atau pemanggilan/penggunaan fungsi pemrograman secara
            langsung.
            CONTOH NYATA PENERAPAN RPA
            DI KESEHARIAN
            RPA diciptakan buat membantu manusia mengerjakan tugas
        </p>
    </div>
</div>

<div class="row my-3 justify-content-start align-items-start">
    <div class="col">
        <img src="{{ asset('assets/img/konten/catatan redaksi.jpg') }}" class="img-fluid" alt="" style="height: 60%; width:100%; float: left;">
    </div>
</div>

<div class="row">
    <div class="col-lg-6 col-12">
        <p style="text-align: justify;">
            dan kegiatannya. Berikut ini beberapa contoh penggunaan RPA
            dalam kehidupan manusia saat ini.
            • Pembayaran tagihan-tagihan bulanan
            Ini dia contoh penggunaan RPA yang dekat dengan
            keseharian kita. Tiap bulan, Anda punya tagihan yang mesti
            dibayar, bukan? Kini dengan memanfaatkan smartphone,
            dengan sekali sentuhan sidik jari, proses pembayaran semua
            tagihan bisa diselesaikan secara otomatis. Hmmm… tanpa
            disadari, kita telah memanfaatkan RPA.
            • Pelayanan oleh help desk
            Sering kali help desk melakukan pekerjaan berulang:
            menjawab pertanyaan yang sama berkali-kali, atau
            menangani keluhan yang sama dari beberapa pelanggan.
            Dulu tugas ini dikerjakan oleh orang-orang di balik layar,
            yang kini terbantu karena sebagian persoalan, yang
            repetitif, ditangani oleh teknologi RPA.
            • Meringankan tugas-tugas di kantor, tentunya
            Area yang satu ini dapat memperoleh paling banyak
            manfaat dari RPA. Di samping beberapa contohnya sudah
            disebut di atas, termasuk pula pembuatan laporan yang
            kompleks secara otomatis dan lebih cepat.
        </p>
    </div>
    <div class="col-lg-6 col-12">
        <p style="text-align: justify;">
            KUNCI PENDORONG TUMBUHNYA RPA,
            JUGA KONSEKUENSINYA
            Ada alasan tersendiri mengapa penggunaan robotik dan
            automasi kian dilirik oleh bisnis dan industri akhir-akhir ini. RPA
            sanggup menerjemahkan serangkaian data menjadi sebuah
            hasil pekerjaan, sehingga proses bisnis lebih efisien. Di sisi lain,
            penggunaan RPA juga mampu mengurangi potensi kesalahan
            yang dibuat oleh manusia (human error).
            Produktivitas perusahaan meningkat karena RPA dapat
            menghemat waktu pengerjaan tugas sehari-hari yang repetitif,
            sementara pekerja manusia dapat menangani pekerjaan yang
            membutuhkan tanggung jawab lebih tinggi menggunakan
            kemampuan kognitif.
            Penekanan biaya-biaya tentunya juga menjadi salah satu daya
            tarik dari penerapan RPA. Rekam jejak membuktikan efisiensi
            biaya yang bisa dicapai hingga 80%, menurut perusahaan
            software UiPath.
            Di luar ranah komersial perusahaan, implementasi RPA yang
            serba digital dan transparan pun mendukung implementasi tata
            kelola perusahaan yang semakin baik. Seperti diungkap oleh
            Survey Global RPA yang dilakukan Deloitte, adopsi teknologi
            RPA telah meningkatkan kepatuhan (compliance) sebesar
        </p>
    </div>
</div>

<div class="row my-4">
    <div class="col-12">
        <div class="float-start">
            <img src="{{ asset('assets/img/konten/map malang.jpg') }}" alt="Deskripsi gambar" class="potrait img-fluid m-3 d-block rounded">
        </div>
        <p style="text-align: justify;">
            terbesar se-Asia Tenggara itu tidak semudah yang Ibnu
            bayangkan. Sempat nyasar di blok lain dan ditolak di sanasini, keberuntungan Ibnu justru menjemputnya
            ketika
            hendak pulang. Turun dari lift ia melihat sebuah toko kecil
            dan mencoba menawarkan kain batik yang ia bawa. Ibnu pun
            merasa seperti mendapat durian runtuh ketika sekitar 100
            lembar kain batik yang ia bawa diborong oleh toko tersebut
            senilai Rp20-an juta.
            Merasa pede dengan kemampuan menjualnya, Ibnu
            mencoba pasar lain: Medan. Ia berangkat bersama istri dan
            anaknya yang baru berusia tiga bulan serta adik ipar dua
            minggu kemudian. Di sana ia pun meraup sukses menjual
            kain produksinya. Sepulang dari Medan itulah ia mulai
            mengibarkan brand untuk batiknya dengan nama Batik
            Trusmi dan menjualnya ke luar Jawa.
            Tentang nama brand yang ia pilih, pria pengagum Elon
            Musk ini berujar, “Saya ingin mengangkat nama daerah
            kelahiran saya sebagai salah satu pusat batik di Indonesia.”
            BERKEMBANG PESAT
            Usaha batik yang dikelola Ibnu dan istrinya itu pun tumbuh dan
            berkembang dengan cepat. Berawal dari membuka toko kecilkecilan di ruang tamu berukuran 4X3 meter pada
            2008, empat
            tahun kemudian Ibnu sudah membangun sebuah toko seluas
            hampir 5.000 meter persegi. Pada Maret 2013 Museum Rekor
            Dunia Indonesia (MURI) pun mengganjar penghargaan kepada Ibnu atas rekor “Pemilik Toko Batik Terluas
            pada Usia Termuda, 22
            Tahun 3 Bulan 11 Hari.”
        </p>
   </div>
</div>

@endsection