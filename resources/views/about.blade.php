@extends('main')


@section('container')
    <!--Page Title-->
    <section class="page-title text-center" style="background-image:url(images/background/3.jpg);">
        <div class="container">
            <div class="title-text">
                <h1>{{ $title }}</h1>
                <ul class="title-menu clearfix">
                    <li>
                        <a href="index.html">home &nbsp;/</a>
                    </li>
                    <li>{{ $path }}</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <section class="story">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <img loading="lazy" src="images/gallery/gallery-04.jpg" class="responsive" alt="story">
                </div>
                <div class="col-lg-7 pt-0">
                    <div class="story-content">
                        <h5 class="tagline">Selamat Datang di Puskesmas Gubug 2: Mengutamakan Kesehatan dan Pelayanan</h6>
                        <p> Kami di Puskesmas Gubug 2 dengan bangga melayani komunitas kami dengan layanan kesehatan yang
                            berkualitas dan berfokus pada kepedulian terhadap kesejahteraan semua orang.Sebagai pusat
                            pelayanan kesehatan masyarakat, tujuan utama kami adalah memastikan bahwa setiap individu
                            memiliki akses terhadap perawatan kesehatan yang berkualitas, tanpa memandang latar belakang
                            atau status.</p>
                        <h6>Missi :</h6>
                        <p>Mewujudkan Puskesmas Yang Berkualitas Menuju Masyarakat Sehat Dan Mandiri.</p>
                        <h6>Visi :</h6>
                        <p> - Meningkatkan Kualitas Sumber Daya Manusia <br> 
                            - Meningkatkan Kualitas Pelayanan <br> 
                            - Meningkatkan Pembinaan Peran serta Masyarakat <br> 
                            - Membangun Sistem Informasi Dan Managemen Puskesmas
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
