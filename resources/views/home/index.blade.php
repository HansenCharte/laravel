@extends('layouts.app-master')

@section('content')
@if (session()->has('err'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">

        {{ session('err') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
@if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">

        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<div class="bg-light p-5 rounded">
        @auth
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Tanggal</th>
                <th scope="col">Jam</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Number</th>
                <th scope="col">Message</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($konsumen as $konsum)
                <tr>
                    <td>{{date('d-m-Y', strtotime($konsum->Tanggal))}}</td>
                    <td>{{ $konsum->Waktu  }}</td>
                    <td>{{ $konsum->Nama }}</td>
                    <td>{{ $konsum->Email }}</td>
                    <td>{{ $konsum->Number }}</td>
                    <td>{{ $konsum->Message }}</td>
                    <td class="text-nowrap"><form action="/konsumen/delete/{{ $konsum->id }}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <a href="/konsumen/edit/{{ $konsum->id }}" class="btn btn-success border-0"
                        >Edit
                    </a>
                        <button type="submit" class="btn btn-danger border-0"
                            onclick="return confirm('Apa Anda Yakin?')">
                            Hapus
                        </button>
                    </form></td>
                  </tr>
                @endforeach
              
            </tbody>
          </table>
        @endauth

        @guest
            <!-- start jumbotron -->
    <div class="jumbotron" id="home">
        <div class="container">
            <div class="text-center">
                <img src="{{ asset("images/Decorindo.svg") }}" class="rounded-circle img-thumbnail">
                <h1 class="display-4">CV.Artha Decorindo</h1>
                <h3 class="lead">Interior Design and Almunium Specialist</h3>
            </div>
        </div>
    </div>
    <!-- end jumbotron -->

    <!-- Start About -->
    <section class="about" id="about">
        <div class="container">
            <div class="row mb-4">
                <div class="col text-center">
                    <h2>About</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <p>Best Team Experience For Planning Dream House.</p>
                </div>
                <div class="col-md-5">
                    <p>Fokus Artha Decorindo adalah bisa membantu Anda dalam mewujudkan desain interior yang paling tepat dan berkualitas meliputi:

                        Tepat secara desain yang Anda inginkan, tepat sesuai budget yang Anda anggarkan, dengan material yang berkualitas hingga tahap produksi dan instalasi oleh tenaga ahli yang berpengalaman. Garansi jika perlu perbaikan atau penambahan kapan saja anda bisa minta</p>
                </div>
            </div>
        </div>
    </section>
    <!-- end about -->

    <div id="service" class="service">
        <div class="container">
        <div class="row">
        <div class="col-md-12">
        <div class="col text-center">
        <div class="titlepage">
        <h2>Bahan</h2>
        Ini adalah beberapa gaya bahan design interior yang dapat dipilih dan disesuaikan dengan
        keinginan customer. Ini adalah beberapa bahan design interior yang dapat kami tawarkan.</div>
        </div>
        </div>
        </div>
        <div class="container margin-r-l">
        <div class="row">
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 thumb">
        <div class="service-box">
        <figure>
        <a href={{ asset("images/bahan1.jpeg") }} class="fancybox" rel="ligthbox">
        <img src={{ asset("images/bahan1.jpeg") }} class="zoom img-fluid" alt="">
        </a>
        <span class="hoverle">
        <a href={{ asset("images/bahan1.jpeg") }} class="fancybox" rel="ligthbox">Multiplek</a>
        </span>
        </figure>
        </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 thumb">
        <div class="service-box">
        <figure>
        <a href="images/bahan2.jpg" class="fancybox" rel="ligthbox">
        <img src="images/bahan2.jpg" class="zoom img-fluid" alt="">
        </a>
        <span class="hoverle">
        <a href="images/bahan2.jpg" class="fancybox" rel="ligthbox">Pvcboard</a>
        </span>
        </figure>
        </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 thumb">
        <div class="service-box">
        <figure>
        <a href="images/bahan3.jpg" class="fancybox" rel="ligthbox">
        <img src="images/bahan3.jpg" class="zoom img-fluid" alt="">
        </a>
        <span class="hoverle">
        <a href="images/bahan3.jpg" class="fancybox" rel="ligthbox">Blockboard</a>
        </span>
        </figure>
        </div>
        
        </div>
        </div>
        </div>
        </div>
        </div>

    <!-- start portfolio -->
    <section class="portfolio bg-light" id="portfolio">
        <div class="container">
            <div class="row pt-4 mb-4">
                <div class="col text-center">
                    <h2>Design</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md mb-4">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset("images/images1.jpeg") }}" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Desain Tata Ruang Keluarga Yang Simple Minimalis Dan Nyaman</p>
                            <p>Design and build by Artha Decorindo. </p>
                            <p>Lokasi : HM residence </p>
                            <p>Proses : 2 bulan</p>
                            <p>Note : Full Build Luxury Style</p>
                            <p>Owner : Bapak Randy</p>
                            <p>Harga : 2-3Jt</p>
                        </div>
                    </div>
                </div>
                <div class="col-md mb-4">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset("images/images2.jpg") }}" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Desain Cafe Yang Cocok Untuk Bersantai Bersama Keluarga Maupun Teman</p>
                            <p>Design and build by Artha Decorindo. </p>
                            <p>Lokasi : Cibinong Mayor Oking </p>
                            <p>Proses : 4 bulan</p>
                            <p>Note : Full Build Style</p>
                            <p>Owner : Bapak Andy</p>
                            <p>Harga : 5-6Jt</p>
                        </div>
                    </div>
                </div>
                <div class="col-md mb-4">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset("images/images3.jpg") }}" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Bedroom Set Yang Elegant Dan Nyaman</p>
                            <p>Design and build by Artha Decorindo. </p>
                            <p>Lokasi : Cystal Garden residence </p>
                            <p>Proses : 1.5 bulan</p>
                            <p>Note : Full Build Luxury Style</p>
                            <p>Owner : Bu Eli</p>
                            <p>Harga : 2-4Jt</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md mb-4">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset("images/images4.jpg") }}" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Clothing Set Room Yang Luas Dan Nyaman</p>
                            <p>Design and build by Artha Decorindo. </p>
                            <p>Lokasi : Cystal Garden residence </p>
                            <p>Proses : 2 Minggu</p>
                            <p>Note : Full Build Luxury Style</p>
                            <p>Owner : Bu Anie</p>
                            <p>Harga : 3Jt</p>
                        </div>
                    </div>
                </div>
                <div class="col-md mb-4">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset("images/images5.jpg") }}" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Kitchen Set Yang Modern Dan Elegant</p>
                            <p>Design and build by Artha Decorindo. </p>
                            <p>Lokasi : Pabuaran residence </p>
                            <p>Proses : 1 bulan</p>
                            <p>Note : Full Build Style</p>
                            <p>Owner : Bu Ana</p>
                            <p>Harga : 4Jt</p>
                        </div>
                    </div>
                </div>
                <div class="col-md mb-4">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset("images/images6.jpg") }}" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Clothing Set Yang Berdesain Modern Dengan Warna Yang Menarik</p>
                            <p>Design and build by Artha Decorindo. </p>
                            <p>Lokasi : Pabuaran residence </p>
                            <p>Proses : 1 bulan</p>
                            <p>Note : Luxury Style</p>
                            <p>Owner : Bu Susie</p>
                            <p>Harga : 3.5Jt</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end portofolio -->

    <!-- start contact -->
    <section class="contact" id="contact">
        <div class="container">
            <div class="col text-center">
            <h3>Alamat</h3>
            <p><i></i>Jl. KH. Nawawi No.112, Cirimekar, Kec. Cibinong, Kabupaten Bogor, Jawa Barat 16917</p>
            </div>
                        </div>
                        <div class="address">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63430.322584797526!2d106.82574680775502!3d-6.471526080899452!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c1a9b155e3e3%3A0x96343bc5b67a4bdc!2sArtha%20Decor!5e0!3m2!1sid!2sid!4v1669202431617!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 320px;" allowfullscreen=""></iframe>                        
                        </ul>
                    <<div id="contact" class="contact">
                        <div class="container">
                        <div class="row">
                        <div class="col-lg-12">
                        <div class="col text-center">
                        <div class="titlepage">
                        <h3>Contact Us</h3>
                        </div>
                        </div>
                        </div>
                        <div class="row">
                        <p> Apabila anda tertarik untuk mendapatkan konsultasi secara gratis / ingin menanyakan hal lainnya. Anda dapat meninggalkan kontak informasi anda di bawah. Tim kami akan menguhubungi anda dalam waktu 1x24 jam. Mohon cantumkan pesan dan pertanyaan anda secara lengkap di form di bawah.
                        <br>
                        </p><div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 offset-md-3">
                        <div class="contact">
                        <br>
                <div class="col-lg-12">
                    <form method="POST" action="/submit">
                        @csrf
                        <div class="form-group">
                            <label for="Nama">Nama</label>
                            <input name="Nama" type="text" class="form-control" id="Nama">
                        </div>
                        <div class="form-group">
                            <label for="Email">Email</label>
                            <input name="Email" type="text" class="form-control" id="Email">
                        </div>
                        <div class="form-group">
                            <label for="Number">Phone Number</label>
                            <input name="Number" type="text" class="form-control" id="Number">
                        </div>
                        <div class="form-group">
                            <label for="Message">Message</label>
                            <textarea name="Message" class="form-control" id="Message" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="Waktu">Jam</label>
                            <input name="Waktu" type="number" class="form-control" id="Waktu">
                        </div>
                        <div class="form-group">
                            <label for="Tanggal">Tanggal</label>
                            <input name="Tanggal" type="date" class="form-control" id="Tanggal">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="mt-3 btn btn-primary">Send Message</button>
                        </div>
                        </div>                        
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact -->

    <!--  start footer -->
    <footer class="bg-dark text-white mt-5">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <p>Artha Decorindo.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->

    <!-- load javascript -->
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
        @endguest
    </div>
@endsection