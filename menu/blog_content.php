<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Content</title>

    <!-- Font CSS From Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link
        rel="https://cdn.rawgit.com/mfd/f3d96ec7f0e8f034cc22ea73b3797b59/raw/856f1dbb8d807aabceb80b6d4f94b464df461b3e/gotham.css">

    <!-- Boostrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- Line Awesome CSS From https://icons8.com/line-awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" rel="stylesheet"
        media="all">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <!-- Hover Effect CSS -->
    <link rel="stylesheet" href="../css/hover-min.css">

    <!-- Animate on Scroll CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Costum CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="../css/blog.css">
</head>

<body>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="d-flex justify-content-between row">
                <!-- Kontak Bar -->
                <div class="contact col-md-9 col-sm-12">
                    <div class="telepon">
                        <img src="../img/header/chat-icon.png" alt="">
                        <div class="text">
                            <p class="judul">Hubungi Kami</p>
                            <a href="tel:+6281252200089" class="isi">081252200089</a>
                        </div>
                    </div>

                    <div class="email">
                        <img src="../img/header/email-icon.png" alt="">
                        <div class="text">
                            <p class="judul">Email Kami</p>
                            <a href="mailto:info@codepanstudio.com" target="_blank"
                                class="isi">info@codepanstudio.com</a>
                        </div>
                    </div>
                </div>

                <!-- Icon Karir, Blog, Kontak -->
                <ul class="d-flex justify-content-md-end col-md-3 col-sm-12">
                    <li>
                        <a href="./karir.php">
                            <img src="../img/header/karir-icon.png" alt="">
                            <p>Karir</p>
                        </a>
                    </li>
                    <li>
                        <a href="./blog.php">
                            <img src="../img/header/blog-icon.png" alt="">
                            <p>Blog</p>
                        </a>
                    </li>
                    <li>
                        <a href="./kontak.php">
                            <img src="../img/header/contact-icon.png" alt="">
                            <p>Kontak</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!--  Bar Navigasi -->
        <nav id="navbar" class="mt-4 mb-0 navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand display-logo-left" href="#"><img class="logo mr-auto"
                        src="../img/navbar/logo-codepan.png" alt="" class=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <ul class="navbar-nav mr-5">
                        <li class="nav-item">
                            <a class="nav-link" href="../index.php" onclick="moveMenuNav(this)">BERANDA <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" onclick="moveMenuNav(this)">TENTANG KAMI <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./portofolio.php" onclick="moveMenuNav(this)">PORTOFOLIO <span
                                    class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item dropdown menu-area">
                            <a class="nav-link dropdown-toggle" href="#" onclick="moveMenuNav(this)" id="mega-one"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                LAYANAN IT
                            </a>
                            <div class="dropdown-menu mega-area" aria-labelledby="mega-one">
                                <div class="row">
                                    <div class="col-sm-6 col-lg-2 dropdown-item">
                                        <a href="#">
                                            <i class="fas fa-laptop"></i>
                                            <h5>Sistem Informasi</h5>
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-lg-2 dropdown-item">
                                        <a href="#">
                                            <i class="fas fa-mobile-alt"></i>
                                            <h5>Aplikasi Mobile</h5>
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-lg-2 dropdown-item">
                                        <a href="#">
                                            <i class="las la-chart-bar"></i>
                                            <h5>Aplikasi E-Gov</h5>
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-lg-2 dropdown-item">
                                        <a href="#">
                                            <i class="fas fa-sync"></i>
                                            <h5>Aplikasi E-Gov</h5>
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-lg-2 dropdown-item">
                                        <a href="#">
                                            <i class="fas fa-file-alt"></i>
                                            <h5>Pengadaan IT</h5>
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-lg-2 dropdown-item">
                                        <a href="./layanan_it.php">
                                            <i class="las la-plus-circle"></i>
                                            <h5>Semua layanan</h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <a href="#" class="d-flex justify-content-center display-logo-center"><img class="logo mr-auto"
                            src="../img/navbar/logo-codepan.png" alt="" class=""></a>

                    <ul class="d-flex justify-content-md-start ml-auto p-icon-sosmed">
                        <li>
                            <a href="" class="fb">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="" class="ig">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="" class="in">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <!-- End of Bar Navigasi -->
    </header>
    <!-- End of Header -->

    <!-- Fixed Button WA -->
    <a href="" class="wa-button hvr-icon-pop">
        <i class="fab fa-whatsapp hvr-icon"></i>
        <p>Silahkan Konsultasi di Nomor Whatsapp Kami</p>
    </a>
    <!-- End Fixed Button WA -->

    <!-- Isi Blog  -->
    <div id="mt" class="container-isi-blog">
        <div class="padding-screen">
            <div class="container">
                <!-- Container Judul Blog -->
                <div class="container-judul text-center">
                    <h1>BLOG</h1>
                    <nav style="--bs-breadcrumb-divider: &#xf061" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item" aria-current="page"><a href="#">Blog</a></li>
                            <li class="breadcrumb-item" aria-current="page"><a href="#">Artikel</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Memastikan Keamanan Jaringan dengan
                                Teknologi Firewall</li>
                        </ol>
                    </nav>
                </div>
                <!-- End of Container Judul Blog -->

                <div class="row content" data-aos="fade-up">
                    <div class="col-md-9 right-content">
                        <div class="img-container">
                            <img src="../img/page-blog/img-isiBlog.png" alt="">
                        </div>
                        <div class="judul-blog text-center">
                            <p class="sub-judul">Artikel ??? Teknologi</p>
                            <h2>Memastikan Keamanan Jaringan dengan Teknologi Firewall</h2>
                            <p class="creator">By Reza Arindra ??? 02/02/2021</p>
                        </div>
                        <div class="blog-main text-justify">
                            <p class="isi-blog">
                                <?php
                      include("isi_blog.php");
                    ?>
                                <b>Share Artikel Ini : <br></b>
                                <!-- AddToAny BEGIN -->
                            <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                                <a class="a2a_button_facebook"></a>
                                <a class="a2a_button_copy_link"></a>
                                <a class="a2a_button_twitter"></a>
                                <a class="a2a_button_whatsapp"></a>
                                <a class="a2a_button_telegram"></a>
                                <a class="a2a_button_email"></a>
                                <a class="a2a_button_line"></a>
                                <a class="a2a_button_facebook_messenger"></a>
                                <a class="a2a_button_linkedin"></a>
                                <a class="a2a_button_google_gmail"></a>
                                <a class="a2a_button_wechat"></a>
                            </div>
                            <script async src="https://static.addtoany.com/menu/page.js"></script>
                            <!-- AddToAny END -->
                            </p>


                        </div>

                        <p class="tag">Tags : <a href="">#Firewall</a></p>
                    </div>
                    <div class="col-md-3 left-widget">
                        <div class="kategori">
                            <h5>KATEGORI</h5>
                            <p><a href="#">Artikel</a></p>
                            <p><a href="#">Berita</a></p>
                            <p><a href="#">Info</a></p>
                            <p><a href="#">Teknologi</a></p>
                            <p><a href="#">Tips</a></p>
                            <p><a href="#">Tutorial</a></p>
                            <p><a href="#">Video</a></p>
                        </div>
                        <div class="popular">
                            <h5>POPULAR</h5>
                            <div class="popular-item row">
                                <div class="col-4 img-popular">
                                    <img src="../img/page-blog/img-isiBlog.png" alt="">
                                </div>
                                <div class="col-8">
                                    <a href="" class="hvr-underline-from-left">Memastikan Keamanan Sistem dengan
                                        Firewall</a>
                                </div>
                            </div>
                            <div class="popular-item row">
                                <div class="col-4 img-popular">
                                    <img src="../img/page-blog/img-isiBlog.png" alt="">
                                </div>
                                <div class="col-8">
                                    <a href="" class="hvr-underline-from-left">Memastikan Keamanan Sistem dengan
                                        Firewall</a>
                                </div>
                            </div>
                            <div class="popular-item row">
                                <div class="col-4 img-popular">
                                    <img src="../img/page-blog/img-isiBlog.png" alt="">
                                </div>
                                <div class="col-8">
                                    <a href="" class="hvr-underline-from-left">Memastikan Keamanan Sistem dengan
                                        Firewall</a>
                                </div>
                            </div>
                            <div class="popular-item row">
                                <div class="col-4 img-popular">
                                    <img src="../img/page-blog/img-isiBlog.png" alt="">
                                </div>
                                <div class="col-8">
                                    <a href="" class="hvr-underline-from-left">Memastikan Keamanan Sistem dengan
                                        Firewall</a>
                                </div>
                            </div>
                            <div class="popular-item row">
                                <div class="col-4 img-popular">
                                    <img src="../img/page-blog/img-isiBlog.png" alt="">
                                </div>
                                <div class="col-8">
                                    <a href="" class="hvr-underline-from-left">Memastikan Keamanan Sistem dengan
                                        Firewall</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row prev-next-bar">
                    <a href="#" class="col-md-5 col-sm-12 row pl-0 mb-3">
                        <div class="col-2 button">
                            <div class="btn-prev"><i class="fas fa-caret-left"></i></div>
                        </div>
                        <div class="col-10 text-left text-btn">
                            Previous Post<br>
                            <b>Tak Kenal Maka Kenalan:Codepan Studio itu sia...</b>
                        </div>
                    </a>
                    <a href="./blog.php" class="col-md-2 col-sm-12 oval mb-3">
                        <div class="cover">
                            <i class="fas fa-circle"></i>
                            <i class="fas fa-circle"></i>
                            <i class="fas fa-circle"></i>
                        </div>
                    </a>
                    <a href="#" class="col-md-5 col-sm-12 row pr-0 mb-3">
                        <div class="col-10 text-right text-btn">
                            Next Post <br>
                            <b>Tak Kenal Maka Kenalan:Codepan Studio itu sia...</b>
                        </div>
                        <div class="col-2 button">
                            <div class="btn-next"><i class="fas fa-caret-right"></i></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#4540FF" fill-opacity="0.3"
                d="M0,160L24,149.3C48,139,96,117,144,122.7C192,128,240,160,288,181.3C336,203,384,213,432,202.7C480,192,528,160,576,154.7C624,149,672,171,720,197.3C768,224,816,256,864,234.7C912,213,960,139,1008,96C1056,53,1104,43,1152,69.3C1200,96,1248,160,1296,170.7C1344,181,1392,139,1416,117.3L1440,96L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z">
            </path>
        </svg>
    </div>
    <!-- End of Isi Blog -->

    <!-- Lates Update -->
    <div class="last-update">
        <div class="container">
            <h1 class="text-center">Lastest Update</h1>
            <!-- Container Blog -->
            <div class="container-card-blog row">
                <!-- Card Blog 1 -->
                <div class="col-lg-4 col-md-6 margin-blog" data-aos="zoom-out-down">
                    <div class="card hvr-underline-reveal">
                        <img src="../img/page-blog/Foto-Blog1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="sub-judul">04/10/2020</p>
                            <h5 class="card-title">Memastikan Keamanan Jaringan dengan Teknologi Firewall</h5>
                            <p class="card-text">Teknologi firewall adalah salah satu dari sekian banyak sistem keamanan
                                yang dapat di terapkan pada jaringan private inte???</p>
                        </div>
                    </div>
                </div>

                <!-- Card Blog 2 -->
                <div class="col-lg-4 col-md-6 margin-blog" data-aos="zoom-out-down" data-aos-delay="300">
                    <div class="card hvr-underline-reveal">
                        <img src="../img/page-blog/Foto-Blog2.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="sub-judul">04/10/2020</p>
                            <h5 class="card-title">Memastikan Keamanan Jaringan dengan Teknologi Firewall</h5>
                            <p class="card-text">Teknologi firewall adalah salah satu dari sekian banyak sistem keamanan
                                yang dapat di terapkan pada jaringan private inte???</p>
                        </div>
                    </div>
                </div>

                <!-- Card Blog 3 -->
                <div class="col-lg-4 col-md-6 margin-blog" data-aos="zoom-out-down" data-aos-delay="600">
                    <div class="card hvr-underline-reveal">
                        <img src="../img/page-blog/Foto-Blog3.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="sub-judul">04/10/2020</p>
                            <h5 class="card-title">Memastikan Keamanan Jaringan dengan Teknologi Firewall</h5>
                            <p class="card-text">Teknologi firewall adalah salah satu dari sekian banyak sistem keamanan
                                yang dapat di terapkan pada jaringan private inte???</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Container Blog -->
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#2926A9" fill-opacity="1"
                d="M0,192L34.3,176C68.6,160,137,128,206,138.7C274.3,149,343,203,411,192C480,181,549,107,617,80C685.7,53,754,75,823,106.7C891.4,139,960,181,1029,208C1097.1,235,1166,245,1234,240C1302.9,235,1371,213,1406,202.7L1440,192L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
            </path>
        </svg>
    </div>
    <!-- End of Lates Update -->

    <!-- Footer -->
    <footer>
        <div class="container">
            <!-- Page Mari Bermitra -->
            <div class="mari-bermitra" data-aos="fade-up" data-aos-delay="200">
                <div class="background text-center">
                    <h1>Mari Bermitra</h1>
                    <p>
                        Ketika berkaitan dengan teknologi IT untuk perusahaan, Anda membutuhkan seseorang yang ahli.
                        Izinkan kami menunjukkan kepada Anda sebuah layanan IT yang responsif, amanah, dan dapat
                        diandalkan.
                    </p>
                    <a href="">MULAI KONSULTASI GRATIS</a>
                </div>
            </div>
            <!-- End of Page Mari Bermitra -->

            <!-- Menu Footer -->
            <div class="menu">
                <div class="row">
                    <div class="col-lg-3 col-md-6 panjang-footer mb-3" data-aos="fade-right">
                        <ul>
                            <li>
                                <h5>Produk</h5>
                            </li>
                            <li>Twins Robo Apps</li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 panjang-footer mb-3" data-aos="fade-right" data-aos-delay="200">
                        <ul>
                            <li>
                                <h5>Layanan IT</h5>
                            </li>
                            <li>Sistem Informasi</li>
                            <li>Aplikasi Mobile</li>
                            <li>Aplikasi E-Gov</li>
                            <li>Intergrasi Sistem</li>
                            <li>Pengadaan IT</li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 panjang-footer mb-3" data-aos="fade-right" data-aos-delay="400">
                        <ul>
                            <li>
                                <h5>Perusahaan</h5>
                            </li>
                            <li>Tentang Kami</li>
                            <li>Pakta Integritas</li>
                            <li>Aturan Layanan</li>
                            <li>Kontak Kami</li>
                            <li>Karir</li>
                            <li>Blog</li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 panjang-footer mb-3" data-aos="fade-right" data-aos-delay="600">
                        <ul>
                            <li>
                                <h5>Akun Kami</h5>
                            </li>
                            <li>Facebook</li>
                            <li>Instagram</li>
                            <li>Linkedin</li>
                            <li>Youtube</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Of Menu Footer -->

            <!-- Contact -->
            <div class="contact" data-aos="fade-left">
                <p>Alamat : Jl. Sidosermo VI No.7, Sidosermo, Kec. Wonocolo, Kota SBY, Jawa Timur 60285 </p>
                <p>Telepon: <a href="tel:+620318437588" class="hvr-underline-from-left">(031) 8437588</a> | Email: <a
                        href="mailto:info@codepanstudio.com" class="hvr-underline-from-left"
                        target="_blank">info@codepanstudio.com</a> | GMAPS : <a href="https://bit.ly/GMAPSCodepanStudio"
                        class="hvr-underline-from-left" target="_blank">https://bit.ly/GMAPSCodepanStudio</a> </p>
            </div>
            <!-- End of Contact -->

            <!-- Copyright -->
            <div class="copyright text-center">
                <p>Copyright ?? 2021 CV. Arindra Production</p>
            </div>
        </div>
    </footer>


    <!-- Boostrap Bundle CSS include JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
    </script>

    <!-- Header Effect .js -->
    <script src="../js/headerEffect/main.js"></script>
    <script src="../js/headerEffect/modernizr.js"></script>

    <!-- Animate on Scroll .js -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Pagination -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/simplePagination.js/1.4/jquery.simplePagination.min.js">
    </script>

    <!-- Costum Main.js -->
    <script src="../js/main.js"></script>

    <script>
    topNavBar();
    $(function() {
        AOS.init({
            duration: 600,
            anchorPlacement: 'top-bottom',
            once: false,
        });
        window.addEventListener("load", AOS.refresh);
    });
    </script>
</body>

</html>