@extends('layout.head')

@section('container')
    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Tentang Saya</h2>
                    {{-- <p></p> --}}
                </div>

                <div class="row">
                    <div class="col-lg-3 ">
                        <img src="{{ url('assets/img/4X6.jpg') }}" class="img-thumbnail" alt="">
                        {{-- <img id="foto" src="{{ $profile->foto}}" class="img-thumbnail" alt="..." style="max-width: 151px; max-height: 227px;"> --}}
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content">
                       {!! @$profile->about_me !!}

                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Kemampuan</h2>
                </div>

                @foreach ($skills as $skill)
                    @if ($loop->index % 5 === 0)
                        <div class="row skills-content justify-content-center text-center mb-3"> {{-- Baris baru --}}
                    @endif

                    <div class="col-lg-2">
                        <div class="progress">
                            {!! @$skill->icon !!}
                            <span class="skill">{{ @$skill->name }}</span>
                        </div>
                    </div>

                    @if ($loop->index % 5 === 4 || $loop->last)
                        </div> {{-- Tutup baris --}}
                    @endif
                @endforeach
            </div>
        </section><!-- End Skills Section -->

        <!-- ======= Resume Section ======= -->
        <section id="resume" class="resume">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Resume</h2>
                    <p>Singkat tentang pendidikan, pengalaman organisasi dan pengalam kerja saya</p>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="resume-title">Pendidikan</h3>
                        <div class="resume-item">
                            <h4>SMAN 5 Karawang</h4>
                            {{-- <p><em>Innovative and deadline-driven Graphic Designer with 3+ years of experience designing and
                                    developing user-centered digital/print marketing material from initial concept to final,
                                    polished deliverable.</em></p> --}}
                            <ul>
                                <li>IPA</li>
                                <li>2013 - 2016</li>
                            </ul>
                        </div>
                        <div class="resume-item">
                            <h4>Universitas Singaperbangsa Karawang</h4>
                            {{-- <p><em>Innovative and deadline-driven Graphic Designer with 3+ years of experience designing and
                                    developing user-centered digital/print marketing material from initial concept to final,
                                    polished deliverable.</em></p> --}}
                            <ul>
                                <li>S1 Teknik Informatika</li>
                                <li>2016 - 2022</li>
                                <li>IPK 3.55</li>
                            </ul>
                        </div>

                        <h3 class="resume-title">Pengalaman Organisasi</h3>
                        <div class="resume-item">
                            <h4>Pengurus BEM Fakultas Ilmu Komputer</h4>
                            <ul>
                                <li>2018</li>
                                <li>Dpt. Pendidikan dan Keilmuan</li>
                            </ul>
                        </div>
                        <div class="resume-item">
                            <h4>Ketua Acara DoIT 2.0</h4>
                            <ul>
                                <li>2018</li>
                            </ul>
                        </div>
                        <div class="resume-item">
                            <h4>Pengurus BEM Fakultas Ilmu Komputer</h4>
                            <ul>
                                <li>2019</li>
                                <li>Koordinator Bidang Kemahasiswaan</li>
                            </ul>
                        </div>
                        <h3 class="resume-title">Sertifikasi</h3>
                        <div class="resume-item">
                            <h4>Belajar dasar pemrograman WEB</h4>
                            <ul>
                                <li>Dicoding</li>
                                <li>berlaku sampai 23 November 2023</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h3 class="resume-title">Pengalaman Bekerja</h3>
                        <div class="resume-item">
                            <h4>PT. Toyota Motor Manufacturing Indonesia Plant III</h4>
                            <h5>Juli - Agustus 2018</h5>
                            <p>Mahasiswa Magang</p>
                            <p>Memperbaharui aplikasi andon berbasis desktop menggunakan VB.NET</p>
                        </div>
                        <div class="resume-item">
                            <h4>RS. Permata Keluarga Karawang</h4>
                            <h5>Februari 2021 - Juli 2022</h5>
                            <p>IT Support</p>
                            <ul>
                                <li>Troubleshooting Hardware dan Softaware</li>
                                <li>Memeriksa permintaan barang yang berkaitan dengan IT</li>
                                <li>Menyiapkan keperluan yang berkaitan dengan IT</li>
                            </ul>
                        </div>
                        <div class="resume-item">
                            <h4>PT. Duta Visual Nusantara Tivi Tujuh (Trans7)</h4>
                            <h5>Juli 2022 - Sekarang</h5>
                            <p>Software Developer</p>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Resume Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Portfolio</h2>
                    <p>Beberapa project yang pernah saya kerjakan.</p>
                </div>


                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-6 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ url('assets/img/portfolio/antrian.jpg') }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Antrian pengambilan obat pada instalasi farmasi rumah sakit</h4>
                                <div class="portfolio-links">
                                    <a href="{{ url('assets/img/portfolio/antrian.jpg') }}" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox"><i class="fa-solid fa-magnifying-glass-plus"></i></a>
                                    <a href="https://antrian-apotek.mruhiyat.my.id/" target="_blank"><i
                                            class="fa-solid fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{ url('assets/img/portfolio/webkoni.jpg') }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Web KONI Karawang</h4>
                                <div class="portfolio-links">
                                    <a href="{{ url('assets/img/portfolio/webkoni.jpg') }}"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox"><i
                                            class="fa-solid fa-magnifying-glass-plus"></i></a>
                                    <a href="http://koni-karawang.org/" class="portfolio-details-lightbox"
                                        data-glightbox="type: external" title="Portfolio Details"><i
                                            class="fa-solid fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ url('assets/img/portfolio/telegrambot.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Project Skripsi Bot Telegram
                                    Manajemen Administrasi Indihome
                                    Telkom Witel Karawang</h4>
                                <div class="portfolio-links">
                                    <a href="{{ url('assets/img/portfolio/telegrambot.jpg') }}"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox"><i
                                            class="fa-solid fa-magnifying-glass-plus"></i></a>
                                    {{-- <a href="portfolio-details.html" class="portfolio-details-lightbox"
                                        data-glightbox="type: external" title="Portfolio Details"><i
                                            class="fa-solid fa-eye"></i></a> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="{{ url('assets/img/portfolio/dashboard admin website.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Dashboard admin website</h4>
                                <div class="portfolio-links">
                                    <a href="{{ url('assets/img/portfolio/dashboard admin website.jpg') }}"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox"><i
                                            class="fa-solid fa-magnifying-glass-plus"></i></a>
                                    {{-- <a href="portfolio-details.html" class="portfolio-details-lightbox"
                                        data-glightbox="type: external" title="Portfolio Details"><i
                                            class="fa-solid fa-eye"></i></a> --}}
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Kontak</h2>
                </div>

                <div class="row mt-1">

                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Alamat:</h4>
                                <p>Karawang, Jawa Barat</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>{{ @$profile->kontak['email'] }}</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Telepon:</h4>
                                <p>{{ @$profile->kontak['hp'] }}</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
@endsection
