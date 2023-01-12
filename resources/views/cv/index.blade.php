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
                        <img src="{{ url('assets/img/4X6.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content">
                        <h3>Software Developer &amp; IT Support.</h3>
                        <p>
                            Saya Muhammad Ruhiyat, Lulusan S1 Teknik Informatika Universitas Singaperbangsa Karawang, saya
                            seorang Software Developer dan juga IT Support. Saya memiliki
                            pengalaman bekerja sebagai IT Support selama satu tahun disalah satu rumah sakit di Karawang,
                            mejabat sebagi Koordinator IT selama sembilan bulan. Dan saat ini saya bekerja sebagai Software
                            Developer pada PT. Duta Visual Nusantara Tivi Tujuh (Trans7). Saya memiliki keahlian dalam
                            programing, troubleshooting hardware dan software .
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Tanggal Lahir :</strong> <span>2
                                            September 1998</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Tempat Tinggal :</strong>
                                        <span>Karawang</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Pendidikan :</strong> <span>S1 Teknik
                                            Informatika</span></li>
                                </ul>
                            </div>
                        </div>
                        {{-- <p>
              Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
              Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.
            </p> --}}
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Kemampuan</h2>
                    {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                        consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                        fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
                </div>

                <div class="row skills-content">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-3">

                        <div class="progress">
                            <i class="fa fa-brands fa-laravel" style="font-size: 50px; color: #d50000;"></i>
                            <span class="skill">LARAVEL</span>
                            {{-- <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div> --}}
                        </div>

                        <div class="progress">
                            <i class="fa fa-sharp fa-solid fa-fire" style="font-size: 50px; color: red;"></i>
                            <span class="skill">CODEIGNITER</span>
                            {{-- <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div> --}}
                        </div>

                        <div class="progress">
                            <i class="fa fa-brands fa-square-js" style="font-size: 50px; color: #ffee58;"></i>
                            <span class="skill">JavaScript</span>
                            {{-- <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div> --}}
                        </div>
                        <div class="progress">
                            <i class="fa fa-brands fa-css3-alt" style="font-size: 50px; color: #1c87e5;"></i>
                            <span class="skill">CSS</span>
                            {{-- <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div> --}}
                        </div>

                    </div>

                    <div class="col-lg-3">

                        <div class="progress">
                            <i class="fa fa-brands fa-php" style="font-size: 50px; color: #aab6fe;"></i>
                            <span class="skill">PHP</span>
                            {{-- <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div> --}}
                        </div>

                        <div class="progress">
                            <i class="fa fa-brands fa-html5" style="font-size: 50px; color: #ff8f00;"></i>
                            <span class="skill">HTML5</span>
                            {{-- <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div> --}}
                        </div>

                        <div class="progress">
                            <i class="fa fa-brands fa-bootstrap" style="font-size: 50px; color: #6a1b9a;"></i>
                            <span class="skill">Bootstrap</span>
                            {{-- <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div> --}}
                        </div>
                        <div class="progress">
                            <i class="fa fa-thin fa-screwdriver-wrench" style="font-size: 50px;"></i>
                            <span class="skill">Troubleshooting</span>
                            {{-- <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div> --}}
                        </div>

                    </div>
                    <div class="col-lg-3"></div>

                </div>

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
                            <img src="{{ url('assets/img/portfolio/antrian.png') }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Antrian pengambilan obat pada instalasi farmasi rumah sakit</h4>
                                <div class="portfolio-links">
                                    <a href="{{ url('assets/img/portfolio/antrian.png') }}" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox"><i class="fa-solid fa-magnifying-glass-plus"></i></a>
                                    <a href="https://antrian-apotek.mruhiyat.my.id/" target="_blank"><i
                                            class="fa-solid fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{ url('assets/img/portfolio/webkoni.png') }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Web KONI Karawang</h4>
                                <div class="portfolio-links">
                                    <a href="{{ url('assets/img/portfolio/webkoni.png') }}"
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
                            <img src="{{ url('assets/img/portfolio/telegrambot.png') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Project Skripsi Bot Telegram
                                    Manajemen Administrasi Indihome
                                    Telkom Witel Karawang</h4>
                                <div class="portfolio-links">
                                    <a href="{{ url('assets/img/portfolio/telegrambot.png') }}"
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
                            <img src="{{ url('assets/img/portfolio/dashboard admin website.png') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Dashboard admin website</h4>
                                <div class="portfolio-links">
                                    <a href="{{ url('assets/img/portfolio/dashboard admin website.png') }}"
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
                                <p>muhammadruhiyat020998@gmail.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Telepon:</h4>
                                <p>+6283815797662</p>
                                <p>+6285155277881</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
@endsection
