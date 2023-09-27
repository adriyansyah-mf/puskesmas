<!DOCTYPE html>
<html lang="zxx">

<head>

    <!-- ** Basic Page Needs ** -->
    <meta charset="utf-8">
    <title>Puskesmas Gubug2</title>

    <!-- ** Mobile Specific Metas ** -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Medical HTML Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Themefisher">
    <meta name="generator" content="Themefisher Medical HTML Template v1.0">

    <!-- ** Plugins Needed for the Project ** -->
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/bootstrap.min.css') }}">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="{{ asset('plugins/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/slick/slick-theme.css') }}">
    <!-- FancyBox -->
    <link rel="stylesheet" href="{{ asset('plugins/fancybox/jquery.fancybox.min.css') }}">
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/all.min.css') }}">
    <!-- animate.css -->
    <link rel="stylesheet" href="{{ asset('plugins/animation/animate.min.css') }}">
    <!-- jquery-ui -->
    <link rel="stylesheet" href="{{ asset('plugins/jquery-ui/jquery-ui.css') }}">
    <!-- timePicker -->
    <link rel="stylesheet" href="{{ asset('plugins/timePicker/timePicker.css') }}">

    <!-- Stylesheets -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!--Favicon-->
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

</head>


<body>
    <div class="page-wrapper">



        <!--header top-->
        <div class="header-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="top-left text-center text-md-left">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="top-right text-center text-md-right">
                            <ul class="social-links">

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header top-->

        <!--Header Upper-->
        <section class="header-uper">
            <div class="container ">
                <div class="row align-items-center">
                    <div class="col-xl-4 col-lg-4">
                        <div class="logo">
                            <a href="/">
                                <img loading="lazy" class="img-fluid" src="{{ asset('images/logo_coba_.png') }}"
                                    alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-9">
                        <div class="right-side float-right">
                            <ul class="contact-info pl-0 mb-4 mb-md-0 text-lg-right">
                                <li class="item text-left">
                                    <div class="icon-box">
                                        <i class="far fa-envelope"></i>
                                    </div>
                                    <strong>Email</strong>
                                    <br>
                                    <a href="mailto:info@medic.com">
                                        <span>puskesmas_gubug_2@gmail.com</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="contact-info pl-0 mb-4 mb-md-0 text-lg-right">
                                <li class="item text-left">
                                    <div class="icon-box">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <strong>Call Now</strong>
                                    <br>
                                    <span>+ (0292) 5135 488</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Header Upper-->


        <!--Main Header-->
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarLinks"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarLinks">
                    <ul class="navbar-nav">
                        <li class="nav-item @@home">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        {{-- <li class="nav-item @@about">
                            <a class="nav-link" href="/about">About</a>
                        </li> --}}

                        {{-- drop down 1 --}}

                        <li class="nav-item dropdown @@essensial">
                            <a class="nav-link dropdown-toggle" href="#!" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">UMK Essensial</a>

                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li class="dropdown dropdown-submenu dropright">
                                    <a class="dropdown-item dropdown-toggle" href="#!" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Gizi</a>

                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        {{-- <li><a class="dropdown-item" href="index.html">Dokument</a>
                                        
                                        </li>
                                        <li><a class="dropdown-item" href="index.html">Regulasi</a></li> --}}
                                        
                                        <li class="dropdown dropdown-submenu dropright">
                                            <a class="dropdown-item dropdown-toggle" href="#!" id="navbarDropdown"
                                                role="button" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">Dokument</a>
        
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <li class="dropdown dropdown-submenu dropright">
                                                    <a class="dropdown-item dropdown-toggle" href="#!" id="navbarDropdown"
                                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">evaluasi</a>
                
                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <li><a class="dropdown-item" href="\eval\gizi">Evaluasi kinerja program UKM</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown dropdown-submenu dropright">
                                                    <a class="dropdown-item dropdown-toggle" href="#!" id="navbarDropdown"
                                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">Jadwal</a>
                
                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <li><a class="dropdown-item" href="\jadwal\gizi">Jadwal kegiatan ke desa</a></li>
                                                        <li><a class="dropdown-item" href="\reschedule\gizi">Perubahan jadwal </a></li>
                                                    </ul>
                                                </li>
                                    
                                                <li class="dropdown dropdown-submenu dropright">
                                                    <a class="dropdown-item dropdown-toggle" href="#!" id="navbarDropdown"
                                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">Laporan</a>
                
                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <li><a class="dropdown-item" href="\report\gizi">Laporan kinerja UKM pelayanan gizi masyarakat</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown dropdown-submenu dropright">
                                                    <a class="dropdown-item dropdown-toggle" href="#!" id="navbarDropdown"
                                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">Lokmun Linprok Linsek</a>
                
                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <li><a class="dropdown-item" href="lokmun/gizi_lokmun_notulen/notulen">Notulen</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown dropdown-submenu dropright">
                                                    <a class="dropdown-item dropdown-toggle" href="#!" id="navbarDropdown"
                                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">Rapat Internal</a>
                
                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <li><a class="dropdown-item" href="rapat/gizi/dokumentasi">Dokumentasi</a></li>
                                                        <li><a class="dropdown-item" href="rapat/gizi/notulen">Notulen</a></li>
                                                        <li><a class="dropdown-item" href="rapat/gizi/undangan">Undangan</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>

                                    </ul>
                                </li>
                                <li class="dropdown dropdown-submenu dropright">
                                    <a class="dropdown-item dropdown-toggle" href="#!" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Kesling</a>

                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li class="dropdown dropdown-submenu dropright">
                                            <a class="dropdown-item dropdown-toggle" href="#!" id="navbarDropdown"
                                                role="button" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">Dokument</a>
        
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <li class="dropdown dropdown-submenu dropright">
                                                    <a class="dropdown-item dropdown-toggle" href="#!" id="navbarDropdown"
                                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">evaluasi</a>
                
                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <li><a class="dropdown-item" href="\eval\kesling">Evaluasi kinerja program UKM</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown dropdown-submenu dropright">
                                                    <a class="dropdown-item dropdown-toggle" href="#!" id="navbarDropdown"
                                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">Jadwal</a>
                
                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <li><a class="dropdown-item" href="\jadwal\kesling">Jadwal kegiatan ke desa</a></li>
                                                        <li><a class="dropdown-item" href="\reschedule\kesling">Perubahan jadwal </a></li>
                                                    </ul>
                                                </li>
                                    
                                                <li class="dropdown dropdown-submenu dropright">
                                                    <a class="dropdown-item dropdown-toggle" href="#!" id="navbarDropdown"
                                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">Laporan</a>
                
                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <li><a class="dropdown-item" href="\report\kesling">Laporan kinerja UKM pelayanan kesling masyarakat</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown dropdown-submenu dropright">
                                                    <a class="dropdown-item dropdown-toggle" href="#!" id="navbarDropdown"
                                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">Lokmun Linprok Linsek</a>
                
                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <li><a class="dropdown-item" href="lokmun/kesling_lokmun_notulen/kesling">notulen</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown dropdown-submenu dropright">
                                                    <a class="dropdown-item dropdown-toggle" href="#!" id="navbarDropdown"
                                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">Rapat Internal</a>
                
                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <li><a class="dropdown-item" href="{{route('KeslingDokumentasi')}}">Dokumentasi</a></li>
                                                        <li><a class="dropdown-item" href="rapat/kesling/notulen">Notulen</a></li>
                                                        <li><a class="dropdown-item" href="rapat/kesling/undangan">Undangan</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-submenu dropright">
                                    <a class="dropdown-item dropdown-toggle" href="#!" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Kia</a>

                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li class="dropdown dropdown-submenu dropright">
                                            <a class="dropdown-item dropdown-toggle" href="#!" id="navbarDropdown"
                                                role="button" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">Dokument</a>
        
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <li class="dropdown dropdown-submenu dropright">
                                                    <a class="dropdown-item dropdown-toggle" href="#!" id="navbarDropdown"
                                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">evaluasi</a>
                
                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <li><a class="dropdown-item" href="\eval\kia">Evaluasi kinerja program UKM</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown dropdown-submenu dropright">
                                                    <a class="dropdown-item dropdown-toggle" href="#!" id="navbarDropdown"
                                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">Jadwal</a>
                
                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <li><a class="dropdown-item" href="\jadwal\kia">Jadwal kegiatan ke desa</a></li>
                                                        <li><a class="dropdown-item" href="\reschedule\kia">Perubahan jadwal </a></li>
                                                    </ul>
                                                </li>
                                    
                                                <li class="dropdown dropdown-submenu dropright">
                                                    <a class="dropdown-item dropdown-toggle" href="#!" id="navbarDropdown"
                                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">Laporan</a>
                
                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <li><a class="dropdown-item" href="\report\kia">Laporan kinerja UKM pelayanan kia masyarakat</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown dropdown-submenu dropright">
                                                    <a class="dropdown-item dropdown-toggle" href="#!" id="navbarDropdown"
                                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">Lokmun Linprok Linsek</a>
                
                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <li><a class="dropdown-item" href="lokmun/kia_lokmun_notulen/kia">Notulen</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown dropdown-submenu dropright">
                                                    <a class="dropdown-item dropdown-toggle" href="#!" id="navbarDropdown"
                                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">Rapat Internal</a>
                
                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <li><a class="dropdown-item" href="{{route('KiaDokumentasi')}}">Dokumentasi</a></li>
                                                        <li><a class="dropdown-item" href="rapat/kia/notulen">Notulen</a></li>
                                                        <li><a class="dropdown-item" href="rapat/kia/undangan">Undangan</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-submenu dropright">
                                    <a class="dropdown-item dropdown-toggle" href="#!" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">P2P</a>

                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li class="dropdown dropdown-submenu dropright">
                                            <a class="dropdown-item dropdown-toggle" href="#!" id="navbarDropdown"
                                                role="button" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">Dokument</a>
        
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <li class="dropdown dropdown-submenu dropright">
                                                    <a class="dropdown-item dropdown-toggle" href="#!" id="navbarDropdown"
                                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">evaluasi</a>
                
                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <li><a class="dropdown-item" href="\eval\p2p">Evaluasi kinerja program UKM</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown dropdown-submenu dropright">
                                                    <a class="dropdown-item dropdown-toggle" href="#!" id="navbarDropdown"
                                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">Jadwal</a>
                
                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <li><a class="dropdown-item" href="\jadwal\p2p">Jadwal kegiatan ke desa</a></li>
                                                        <li><a class="dropdown-item" href="\reschedule\p2p">Perubahan jadwal </a></li>
                                                    </ul>
                                                </li>
                                    
                                                <li class="dropdown dropdown-submenu dropright">
                                                    <a class="dropdown-item dropdown-toggle" href="#!" id="navbarDropdown"
                                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">Laporan</a>
                
                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <li><a class="dropdown-item" href="\report\p2p">Laporan kinerja UKM pelayanan p2p masyarakat</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown dropdown-submenu dropright">
                                                    <a class="dropdown-item dropdown-toggle" href="#!" id="navbarDropdown"
                                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">Lokmun Linprok Linsek</a>
                
                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <li><a class="dropdown-item" href="lokmun/p2p_lokmun_notulen/p2p">Notulen</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown dropdown-submenu dropright">
                                                    <a class="dropdown-item dropdown-toggle" href="#!" id="navbarDropdown"
                                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">Rapat Internal</a>
                
                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <li><a class="dropdown-item" href="{{route('P2pDokumentasi')}}">Dokumentasi</a></li>
                                                        <li><a class="dropdown-item" href="rapat/p2p/notulen">Notulen</a></li>
                                                        <li><a class="dropdown-item" href="rapat/p2p/undangan">Undangan</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-submenu dropright">
                                    <a class="dropdown-item dropdown-toggle" href="#!" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Perkesmas</a>

                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li class="dropdown dropdown-submenu dropright">
                                            <a class="dropdown-item dropdown-toggle" href="#!" id="navbarDropdown"
                                                role="button" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">Dokument</a>
        
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <li class="dropdown dropdown-submenu dropright">
                                                    <a class="dropdown-item dropdown-toggle" href="#!" id="navbarDropdown"
                                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">evaluasi</a>
                
                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <li><a class="dropdown-item" href="\eval\perkesmas">Evaluasi kinerja program UKM</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown dropdown-submenu dropright">
                                                    <a class="dropdown-item dropdown-toggle" href="#!" id="navbarDropdown"
                                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">Jadwal</a>
                
                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <li><a class="dropdown-item" href="\jadwal\perkesmas">Jadwal kegiatan ke desa</a></li>
                                                        <li><a class="dropdown-item" href="\reschedule\perkesmas">Perubahan jadwal </a></li>
                                                    </ul>
                                                </li>
                                    
                                                <li class="dropdown dropdown-submenu dropright">
                                                    <a class="dropdown-item dropdown-toggle" href="#!" id="navbarDropdown"
                                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">Laporan</a>
                
                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <li><a class="dropdown-item" href="\report\perkesmas">Laporan kinerja UKM pelayanan perkesmas masyarakat</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown dropdown-submenu dropright">
                                                    <a class="dropdown-item dropdown-toggle" href="#!" id="navbarDropdown"
                                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">Lokmun Linprok Linsek</a>
                
                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <li><a class="dropdown-item" href="lokmun/perkesmas_lokmun_notulen/perkesmas">Notulen</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown dropdown-submenu dropright">
                                                    <a class="dropdown-item dropdown-toggle" href="#!" id="navbarDropdown"
                                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">Rapat Internal</a>
                
                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <li><a class="dropdown-item" href="{{route('PerkesmasDokumentasi')}}">Dokumentasi</a></li>
                                                        <li><a class="dropdown-item" href="rapat/perkesmas/notulen">Notulen</a></li>
                                                        <li><a class="dropdown-item" href="rapat/perkesmas/undangan">Undangan</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-submenu dropright">
                                    <a class="dropdown-item dropdown-toggle" href="#!" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Promkes</a>

                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li class="dropdown dropdown-submenu dropright">
                                            <a class="dropdown-item dropdown-toggle" href="#!" id="navbarDropdown"
                                                role="button" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">Dokument</a>
        
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <li class="dropdown dropdown-submenu dropright">
                                                    <a class="dropdown-item dropdown-toggle" href="#!" id="navbarDropdown"
                                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">evaluasi</a>
                
                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <li><a class="dropdown-item" href="\eval\promkles">Evaluasi kinerja program UKM</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown dropdown-submenu dropright">
                                                    <a class="dropdown-item dropdown-toggle" href="#!" id="navbarDropdown"
                                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">Jadwal</a>
                
                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <li><a class="dropdown-item" href="\jadwal\promkes">Jadwal kegiatan ke desa</a></li>
                                                        <li><a class="dropdown-item" href="\reschedule\promkes">Perubahan jadwal </a></li>
                                                    </ul>
                                                </li>
                                    
                                                <li class="dropdown dropdown-submenu dropright">
                                                    <a class="dropdown-item dropdown-toggle" href="#!" id="navbarDropdown"
                                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">Laporan</a>
                
                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <li><a class="dropdown-item" href="\report\promkes">Laporan kinerja UKM pelayanan promkes masyarakat</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown dropdown-submenu dropright">
                                                    <a class="dropdown-item dropdown-toggle" href="#!" id="navbarDropdown"
                                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">Lokmun Linprok Linsek</a>
                
                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <li><a class="dropdown-item" href="lokmun/promkes_lokmun_notulen/promkes">Notulen</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown dropdown-submenu dropright">
                                                    <a class="dropdown-item dropdown-toggle" href="#!" id="navbarDropdown"
                                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">Rapat Internal</a>
                
                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <li><a class="dropdown-item" href="{{route('PromkesDokumentasi')}}">Dokumentasi</a></li>
                                                        <li><a class="dropdown-item" href="rapat/promkes/notulen">Notulen</a></li>
                                                        <li><a class="dropdown-item" href="rapat/promkes/undangan">Undangan</a></li>
                                                  
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                        </li>

                        {{-- end drop down 1 --}}


                        {{-- drop down 2 --}}

                        <li class="nav-item dropdown @@blogs">
                            <a class="nav-link dropdown-toggle" href="#!" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">UMK
                                Pengembangan</a>

                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li class="dropdown dropdown-submenu dropright">
                                    <a class="dropdown-item dropdown-toggle" href="#!" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Kesjiwa</a>

                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li class="dropdown dropdown-submenu dropright">
                                            <a class="dropdown-item dropdown-toggle" href="#!" id="navbarDropdown"
                                                role="button" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">Dokument</a>
        
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <li class="dropdown dropdown-submenu dropright">
                                                    <a class="dropdown-item dropdown-toggle" href="#!" id="navbarDropdown"
                                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">evaluasi</a>
                
                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <li><a class="dropdown-item" href="\eval\kesjiwa">Evaluasi kinerja program UKM</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown dropdown-submenu dropright">
                                                    <a class="dropdown-item dropdown-toggle" href="#!" id="navbarDropdown"
                                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">Jadwal</a>
                
                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <li><a class="dropdown-item" href="\jadwal\kesjiwa">Jadwal kegiatan ke desa</a></li>
                                                        <li><a class="dropdown-item" href="\reschedule\kesjiwa">Perubahan jadwal </a></li>
                                                    </ul>
                                                </li>
                                    
                                                <li class="dropdown dropdown-submenu dropright">
                                                    <a class="dropdown-item dropdown-toggle" href="#!" id="navbarDropdown"
                                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">Laporan</a>
                
                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <li><a class="dropdown-item" href="\report\kesjiwa">Laporan kinerja UKM pelayanan kesjiwa masyarakat</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown dropdown-submenu dropright">
                                                    <a class="dropdown-item dropdown-toggle" href="#!" id="navbarDropdown"
                                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">Lokmun Linprok Linsek</a>
                
                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <li><a class="dropdown-item" href="lokmun/kesjiwa">Notulen</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown dropdown-submenu dropright">
                                                    <a class="dropdown-item dropdown-toggle" href="#!" id="navbarDropdown"
                                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">Rapat Internal</a>
                
                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <li><a class="dropdown-item" href="index.html">Dokumentasi</a></li>
                                                        <li><a class="dropdown-item" href="index.html">Notulen</a></li>
                                                        <li><a class="dropdown-item" href="index.html">Undangan</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-submenu dropright">
                                    <a class="dropdown-item dropdown-toggle" href="#!" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">PKPR</a>

                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li class="dropdown dropdown-submenu dropright">
                                            <a class="dropdown-item dropdown-toggle" href="#!" id="navbarDropdown"
                                                role="button" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">Dokument</a>
        
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <li class="dropdown dropdown-submenu dropright">
                                                    <a class="dropdown-item dropdown-toggle" href="#!" id="navbarDropdown"
                                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">evaluasi</a>
                
                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <li><a class="dropdown-item" href="\eval\pkpr">Evaluasi kinerja program UKM</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown dropdown-submenu dropright">
                                                    <a class="dropdown-item dropdown-toggle" href="#!" id="navbarDropdown"
                                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">Jadwal</a>
                
                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <li><a class="dropdown-item" href="\jadwal\pkpr">Jadwal kegiatan ke desa</a></li>
                                                        <li><a class="dropdown-item" href="\reschedule\pkpr">Perubahan jadwal </a></li>
                                                    </ul>
                                                </li>
                                    
                                                <li class="dropdown dropdown-submenu dropright">
                                                    <a class="dropdown-item dropdown-toggle" href="#!" id="navbarDropdown"
                                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">Laporan</a>
                
                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <li><a class="dropdown-item" href="\report\pkpr">Laporan kinerja UKM pelayanan pkpr masyarakat</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown dropdown-submenu dropright">
                                                    <a class="dropdown-item dropdown-toggle" href="#!" id="navbarDropdown"
                                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">Lokmun Linprok Linsek</a>
                
                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <li><a class="dropdown-item" href="lokmun/pkpr">Notulen</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown dropdown-submenu dropright">
                                                    <a class="dropdown-item dropdown-toggle" href="#!" id="navbarDropdown"
                                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">Rapat Internal</a>
                
                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <li><a class="dropdown-item" href="index.html">Dokumentasi</a></li>
                                                        <li><a class="dropdown-item" href="index.html">Notulen</a></li>
                                                        <li><a class="dropdown-item" href="index.html">Undangan</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                        </li>

                        {{-- end drop down 2 --}}

                        <li class="nav-item @@appointment">
                            <a class="nav-link" href="/spm/spm">SPM</a>
                        </li>
                    </ul>

                    {{-- profile menu --}}

                    <div class="ml-auto">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#!" id="navbarDropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i> Profil</a>
                                <ul class="dropdown-menu tex-align-center" aria-labelledby="navbarDropdown">

                                    @auth
                                    @php
                                        $userRoles = auth()->user()->role;
                                    @endphp

                                    @if ( $userRoles == 'admin')
                                        <li><a class="dropdown-item" href="/user" style="text-align: center">Admin</a>
                                            <div class="col-md-8" style="margin-left:1rem; background-color: #48bdc5;height: 1px;">
                                            </div>
                                    @endif

                                    @endauth
        
                                    </li>
                                    <li><a class="dropdown-item"
                                            href="/logout" style="text-align: center">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <!--End Main Header -->

        @yield('container')


        <!--footer-main-->
        <footer class="footer-main">
            <div class="footer-top">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-lg-4 mb-5 mb-lg-0">
                            <div class="about-widget">
                                {{-- <div class="footer-logo">
            </div> --}}
                                <h5>Puskesmas Gubug II</h5>
                                <ul class="location-link">
                                    <li class="item">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <p>Jl. Jeketro - Gubug, Kabupaten Grobogan</p>
                                    </li>
                                    <li class="item">
                                        <i class="far fa-envelope" aria-hidden="true"></i>
                                        <a href="mailto:support@medic.com">
                                            <p>puskesmas_gubug_2@gmail.com</p>
                                        </a>
                                    </li>
                                    <li class="item">
                                        <i class="fas fa-phone" aria-hidden="true"></i>
                                        <p>+ (0292) 5135488</p>
                                    </li>
                                </ul>
                                <ul class="list-inline social-icons">
                                    <li class="list-inline-item"><a href="https://facebook.com/themefisher"
                                            aria-label="facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="list-inline-item"><a href="https://twitter.com/themefisher"
                                            aria-label="twitter"><i class="fab fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="https://instagram.com/themefisher"
                                            aria-label="instagram"><i class="fab fa-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="https://github.com/themefisher"
                                            aria-label="github"><i class="fab fa-github"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        {{-- visi misi --}}

                        <div class="col-lg-4 col-md-7">
                            <div class="social-links">
                                <ul>
                                    <li class="item">
                                        <div class="media">
                                            <div class="media-body">
                                                <h5>Visi :</h5>
                                                <p>Mewujudkan Puskesmas Yang Berkualitas Menuju Masyarakat Sehat Dan
                                                    Mandiri.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <div class="media">
                                            <div class="media-body">
                                                <h5>Misi :</h5>
                                                <p> - Meningkatkan Kualitas Sumber Daya Manusia</p>
                                                <p> - Meningkatkan Kualitas Pelayanan</p>
                                                <p> - Meningkatkan Pembinaan Peran serta Masyarakat</p>
                                                <p> - Membangun Sistem Informasi Dan Managemen Puskesmas</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container clearfix">
                    <div class="copyright-text">
                        <p>&copy; Copyright 2023. Developed by <a>Fariz</a></p>
                    </div>
                </div>
            </div>
        </footer>
        <!--End footer-main-->

        <!-- scroll-to-top -->
        <div id="back-to-top" class="back-to-top">
            <i class="fa fa-angle-up"></i>
        </div>

    </div>
    <!--End pagewrapper-->


    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target=".header-top">
    <div class="scroll-to-top scroll-to-target" data-target=".header-top">
        <span class="icon fa fa-angle-up"></span>
    </div>


    {{-- <!-- jquery -->
    <script src="plugins/jquery.min.js"></script>
    <!-- bootstrap -->
    <script src="plugins/bootstrap/bootstrap.min.js"></script>
    <!-- Slick Slider -->
    <script src="plugins/slick/slick.min.js"></script>
    <script src="plugins/slick/slick-animation.min.js"></script>
    <!-- FancyBox -->
    <script src="plugins/fancybox/jquery.fancybox.min.js" defer></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
    <script src="plugins/google-map/gmap.js" defer></script>

    <!-- jquery-ui -->
    <script src="plugins/jquery-ui/jquery-ui.js" defer></script>
    <!-- timePicker -->
    <script src="plugins/timePicker/timePicker.js" defer></script>

    <!-- script js -->
    <script src="js/script.js"></script> --}}
</body>

</html>
