<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARTIKEL DESA SUKAMAJU</title>
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

    @include('navbar')
    <br><br><br>

    <!--Sebelah Kiri-->

    <div class="row">
        <div class="col-8">
            <div class="artikel1">
                <h2>{{ $berita->judul }}</h2><br>
                <div><img class="gambar1" src="{{ asset('img/' . $berita->gambar) }}" alt=""></div><br>
                <p>
                    {!! $berita->excerpt !!}
                </p>
                <p>
                    {!! $berita->konten !!}
                </p>

            </div>


            <!--Comment-->
            <br><br><br><br><br>
            <br><br><br><br><br>
            <br><br><br><br><br>
            <br><br><br><br><br>
            <br><br><br><br><br>

            <h3>Komentar</h3>
            <hr>
            <div class="komentar">

                @foreach ($komentar as $komentar)
                    <div class="media-body">
                        <h5 class="mt-0">
                            {{ $komentar->user->nama }}<br />
                            <span style="font-size:11px;"><b>at</b> {{ $komentar->created_at }}</span>
                        </h5>

                        {{ $komentar->komentar }}
                    </div>
                    <hr>
                @endforeach

            </div>

            @auth
                <div class="pengaduan1">
                    <h5 style="text-align: start;">Berikan Komentar : </h5>
                    <form action="{{ route('komentar') }}" method="post">
                        @csrf
                        <input type="hidden" name="berita_id" value="{{ $berita->id }}">
                        <div class="form-floating">
                            <textarea class="form-control" name="komentar" placeholder="Leave a comment here" id="floatingTextarea2"
                                style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Tulis Komentar Anda</label>
                        </div><br>
                        <div><button type="submit"
                                style="color: #ffa500; border-radius:5px; outline-color:#327a6d; background-color:#327a6d;">KIRIM
                                KOMENTAR</button></div>
                    </form>
                </div>
            @else
                <h5>
                    Login untuk berkomentar
                </h5>
                <div class="col-md-3">
                    <a href="{{ route('login_user') }}" class="btn btn-success">
                        Login
                    </a>
                </div>
            @endauth



        </div>
        <!--col-8-->

        <!--SEBELAH KANAN-->

        <!--Waktu dan kalender-->
        <div class="col-4">
            <div class="datetime">
                <div class="time"></div>
                <div class="date"></div>
            </div>
            <br>

            <!--layanan pengaduan desa-->
            <div class="col-4">
                <div class="sudes">
                    <div class="bacaan"><i class="fa-solid fa-envelope" style="color: #327a6d;"></i> LAYANAN
                        PENGADUAN
                        DESA</div>
                    <div class="">
                        <a href="Pengaduan.php"><button style=" background-color:#327a6d;" class="btn"
                                type="button"> <b>LAPOR DISINI</b></button></a>
                    </div><br>
                </div><br>

                <!--Statistik-->
                <div class="sts px-5">
                    <img class="statistik" src="img/statistik.png" alt="" srcset="">
                </div><br>

                <!--Pengumuman-->
                <div class="pemberitahuan px-5">
                    <div> <i class="fa-solid fa-link" style="color: #327a6d;"></i> <b> TAUTAN PENTING</b></div>
                    <hr>
                    <div class=""><a
                            href="https://www.ekon.go.id/publikasi/detail/4600/program-kartu-prakerja-berlanjut-di-tahun-2023-dengan-skema-normal-yang-memberikan-bantuan-pelatihan-lebih-besar">Pendaftaran
                            Program PraKerja</a></div>
                    <div class=""><a href="https://gemari.id/gemari/2019/8/12/bpjs-desa-yang-mandiri">BPJS
                            Desa
                            Mandiri</a></div>
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
                        <b>PERANGKAT
                            DESA</b>
                    </p>
                    <hr>
                    <div class="slideshow-container">
                        <div class="mySlides fade">
                            <img class="foto" src="{{ asset('img/Rifqy.jpg') }}" style="width:100%">
                            <div class="text">Rifqy Jabrah Rhae- Kepala Desa</div>
                        </div>

                        <div class="mySlides fade">
                            <img class="foto" src="{{ asset('img/Jessindy.jpg') }}" style="width:100%">
                            <div class="text">Jessyndy Tanuwijaya-W.Kepala Desa</div>
                        </div>

                        <div class="mySlides fade">
                            <img class="foto" src="{{ asset('img/Yohana.jpg') }}" style="width:100%">
                            <div class="text">Yohana Marbun-Sekretaris Desa</div>
                        </div>

                        <div class="mySlides fade">
                            <img class="foto" src="{{ asset('img/Aliya.jpg') }}" style="width:100%">
                            <div class="text">Aliya Afifah-Bendahara Desa</div>
                        </div>

                        <div class="mySlides fade">
                            <img class="foto" src="img/Yohana.jpg" style="width:100%">
                            <div class="text">Caption Three</div>
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
        <!--penutup row-->
    </div>
    <!--penutup container-->
    <br><br><br>
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
