<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESA KOM C</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-grid.css') }}">
    <script src="https://kit.fontawesome.com/bc3cf86588.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>

</head>

<body style="font-family: serif;">

    <!--  NAVBAR -->

    @include('navbar')



    <!--Body-->
    <div class=" container py-5">
        <marquee behavior="slide">
            <p class="tulisan"> <img style="height:55px;width:80px;" src="img/desa.png" alt=""> SELAMAT DATANG
                DI WEBSITE DESA KOM C </p>
        </marquee>

        <div class="col-md-8 mb-3">
            <form method="get" action="">
                <div class="input-group">
                    <input type="search" name="search" placeholder="Cari berita" class="form-control mr-3">
                    <div class="input-group-append mx-3">
                        <button type="submit" class="btn btn-success">Cari</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="row">
            <div class="col-8 ">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <img style="width:500px;height:380px;" src="img/contohsidang.jpeg" class="d-block w-100"
                                alt="...">
                        </div>
                        @foreach ($gambars as $gambar)
                            <div class="carousel-item">
                                <img style="width:500px;height:380px;" src="{{ asset('img/' . $gambar) }}" class="d-block w-100"
                                    alt="...">
                            </div>
                        @endforeach

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <br><br>

                <!-- ARTIKEL TERKINI-->
                <div class="d-grid gap-2">
                    <button style="border-radius: 10px;box-shadow: 10px 1px 10px  #ffa500;height: 50px;color:#ffa500;"
                        class="btn btn-outline" type="button"><b>K E G I A T A N &nbsp; T E R K I N I </b></button>
                </div><br>


                <!--button 1-->
                @foreach ($beritas as $berita)
                    <div class="d-grid gap-2">
                        <a href="{{ route('detail', ['id' => $berita->id]) }}"
                            style="border-radius: 10px;box-shadow: 10px 1px 10px gray; background-color:#327a6d;"
                            class="btn " type="button"><b>{{ $berita->judul }}</b></a>
                    </div><br>

                    <!--card 1-->
                    <div class="card mb-3" style="max-width: 800px;border-radius: 10px;box-shadow: 10px 1px 10px gray;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img style="width: 400px;height:200px;" src="{{ asset('img/' . $berita->gambar) }}"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <p class="card-text">{{ $berita->excerpt }}</p>
                                </div>
                            </div>
                        </div>
                    </div><br>
                @endforeach
                <div class="d-flex justify-content-center">
                    {{ $beritas->links() }}
                </div>
                <!--button 2-->



            </div>
            <!--tag penutup col-8-->

            <!--SEBELAH KANAN-->

            <!--Waktu dan kalender-->
            <div class="col-4">
                <div class="datetime">
                    <div class="time"></div>
                    <div class="date"></div>
                </div>
                <br>

                <!--layanan Pengaduan desa-->
                <div class="col-4">
                    <div class="sudes">
                        <div class="bacaan"><i class="fa-solid fa-envelope" style="color: #327a6d;"></i> LAYANAN
                            PENGADUAN DESA</div>
                        <div class="">
                            <a href="Pengaduan.php"><button style=" background-color:#327a6d;" class="btn"
                                    type="button"><b>LAPOR DISINI</b></button></a>
                        </div><br>
                    </div><br>

                    <!--Statistik-->
                    <div class="sts px-5">
                        <img class="statistik" src="img/statistik.png" alt="" srcset="">
                    </div><br>

                    <!--Pengumuman-->
                    <div class="pemberitahuan px-5">
                        <div> <i class="fa-solid fa-link" style="color: #327a6d;"></i><b> TAUTAN PENTING</b></div>
                        <hr>
                        <div class=""><a
                                href="https://www.ekon.go.id/publikasi/detail/4600/program-kartu-prakerja-berlanjut-di-tahun-2023-dengan-skema-normal-yang-memberikan-bantuan-pelatihan-lebih-besar">Pendaftaran
                                Program PraKerja</a></div>
                        <div class=""><a href="https://gemari.id/gemari/2019/8/12/bpjs-desa-yang-mandiri">BPJS
                                Desa Mandiri</a></div>
                        <div class=""><a
                                href="https://rbtv.disway.id/read/8928/daftar-7-blt-yang-cair-juni-2023-pencairan-melalui-bank-himbara-dan-kantor-pos-cek-di-sini">Pembagian
                                BLT</a></div>
                        <div class=""><a
                                href="https://litbangkespangandaran.litbang.kemkes.go.id/program-sanitasi-perdesaan-padat-karya/">Program
                                Sanitasi Desa</a></div>
                        <div class=""><a
                                href="https://blog.olahkarsa.com/program-pemberdayaan-masyarakat-desa/">Pemberdaan
                                Masyarakat Desa</a></div>
                        <div class=""><a
                                href="https://www.masterplandesa.com/wisata/desa-wisata-sebuah-wadah-pengembangan-wilayah-dan-pemberdayaan-masyarakat/">Desa
                                Wisata</a></div>
                    </div>

                    <!--Perangkat Desa-->

                    <div class="pemberitahuan1 px-5">
                        <p style="text-align: center;"><i class="fa-solid fa-user" style="color: #327a6d;"></i>
                            <b>PERANGKAT DESA</b>
                        </p>
                        <hr>
                        <div class="slideshow-container">
                            <div class="mySlides fade">
                                <img class="foto" src="img/Rifqy.jpg" style="width:100%">
                                <div class="text">Rifqy Jabrah Rhae- Kepala Desa</div>
                            </div>

                            <div class="mySlides fade">
                                <img class="foto" src="img/Jessindy.jpg" style="width:100%">
                                <div class="text">Jessyndy Tanuwijaya-W.Kepala Desa</div>
                            </div>

                            <div class="mySlides fade">
                                <img class="foto" src="img/Yohana.jpg" style="width:100%">
                                <div class="text">Yohana Marbun-Sekretaris Desa</div>
                            </div>

                            <div class="mySlides fade">
                                <img class="foto" src="img/Aliya.jpg" style="width:100%">
                                <div class="text">Aliya Afifah-Bendahara Desa</div>
                            </div>

                            <div class="mySlides fade">
                                <img class="foto" src="img/Marss.jpg" style="width:100%">
                                <div class="text">Marsyaloan Siburian- Kepala Dusun</div>
                            </div>
                        </div>

                        <div style="text-align:center">
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                        </div>
                    </div><br>

                    <!--maps-->
                    <div class="pemberitahuan1 px-5">
                        <p><i class=" fa-sharp fa-solid fa-map" style="color: #327a6d;"></i> <b> PETA WILAYAH DESA</b>
                        </p>
                        <hr>
                        <iframe class="maps"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.1150028419165!2d98.5719838742212!3d3.560982750484596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312f61a43f17af%3A0x63b82c475cf9c21f!2sDESA%20SUKAMAJU%20KECAMATAN%20SUNGGAL%20KAB.DELI%20SERDANG!5e0!3m2!1sen!2sid!4v1685125890692!5m2!1sen!2sid"
                            width="350" height="460" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>


                </div>
                <!--tag penutup col-4-->

            </div>
            <!--tag penutup row-->

            <!--Gallery-->
            <div>
                <hr>
                <h2 style="text-align: center;color:#327a6d;">GALLERY DESA SUKA MAJU</h2>
                <hr>
                <div class="container gallery-container">
                    <div class="tz-gallery">
                        <div class="row">

                            @foreach ($galleris as $galleri)
                                <div class="col-sm-6 col-md-4">
                                    <a class="lightbox" href="{{ asset('img/' . $galleri) }}">
                                        <img src="{{ asset('img/' . $galleri) }}" alt="galery"
                                            style="width: 360px; height: 200px">
                                    </a>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--tag penutup container-->
        <br><br>

        @include('footer')



        <script>
            let slideIndex = 0;
            showSlides();

            function showSlides() {
                let i;
                let slides = document.getElementsByClassName("mySlides");
                let dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > slides.length) {
                    slideIndex = 1
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
                setTimeout(showSlides, 2000); // Change image every 2 seconds

                baguetteBox.run('.tz-gallery');
            }
        </script>
        <script src="https://kit.fontawesome.com/bc3cf86588.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/bootstrap.js') }}"></script>
        <script src="{{ asset('js/style.js') }}"></script>

</body>

</html>
