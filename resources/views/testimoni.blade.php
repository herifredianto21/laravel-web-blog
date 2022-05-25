@extends('index')
@section('template.header')
@section('content')

    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs" data-aos="fade-in">
            <div class="container">
                <h2>Testimoni</h2>
                <!-- <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p> -->
            </div>
        </div><!-- End Breadcrumbs -->
        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts section-bg">
            <div class="container">
                <div class="row counters">
                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="1232" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Pasien</p>
                    </div>
                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="6" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Spesialis</p>
                    </div>
                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Dokter</p>
                    </div>
                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Layanan</p>
                    </div>
                </div>
            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Testimonials</h2>
                    <p>What are they saying</p>
                </div>
                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="https://www.cmihospital.com/cmiadministrator/assets/gambar_artikel/782Artikel%202%20%20foto%202.jpg" class="testimonial-img" title="" alt="">
                                    <h3>Suyanti</h3>
                                    <h4>Umur 72 tahun</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Menurut Ibu Suyanti pengobatan jantung di Klinik Utama CMI adalah solusi tepat bagi pasien penyakit jantung untuk mengatasi penyakit jantung yang dialaminya tanpa perlu menjalani tindakan operasi dimana dalam masa pengobatannya pun pasien merasa nyaman, tetap dapat beraktivitas seperti biasa, dan mendapatkan pelayanan yang sangat baik dari tim medis maupun non medis Klinik Utama CMI.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->
                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="https://www.cmihospital.com/cmiadministrator/assets/gambar_artikel/914Foto%2002.jpg" class="testimonial-img" title="" alt="">
                                    <h3>Salman</h3>
                                    <h4>Umur 15 tahun</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Kemoterapi memang menyebabkan efek buruk pada pasien karena pengobatannya yang tidak hanya menghancurkan sel kanker saja, tetapi ikut menghancurkan sel normal di sekitar kanker, meskipun begitu Salman tidak ingin kalah dari kanker yang dialaminya, Salman percaya Ia akan kembali sehat dan bisa hidup seperti sedia kala, walau saat ini harus menahan rasa sakit.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->
                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="https://www.cmihospital.com/cmiadministrator/assets/gambar_artikel/73Ginjal%20Foto%201.jpg" class="testimonial-img" title="" alt="">
                                    <h3>Ruriyanti</h3>
                                    <h4>Umur 38 tahun</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Ruriyanti kini sudah jera setelah berkali-kali merasakan keluhan dan menjalani tindakan operasi yang sama, Ia menyesali gaya hidupnya dahulu, sekarang Ia harus menjaga pola hidupnya dengan sangat baik, seperti menjaga pola makan, memenuhi kebutuhan air putih, istirahat cukup, mengelola stres dengan baik, dan membatasi diri untuk tidak melakukan pekerjaan berat karena kondisinya yang mudah lemas. Ruriyanti berpesan untuk kita semua akan pentingnya menjaga pola hidup, jangan sampai sudah sakit dan menjalani tindakan medis berkali-kali baru menyadari pentingnya menjaga pola hidup untuk kesehatan.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->
                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="https://www.cmihospital.com/cmiadministrator/assets/gambar_artikel/174Foto%201.jpg" class="testimonial-img" title="" alt="">
                                    <h3>Erna</h3>
                                    <h4>Umur 69 tahun</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Ibu Erna tak lupa menyampaikan pesan bagi teman-teman yang saat ini sedang mengalami kanker untuk harus optimis karena setiap penyakit pasti ada obatnya, tak terkecuali penyakit kanker. Ia menyarankan pasien kanker untuk datang ke Klinik Utama CMI sebagai upaya dapat sembuh dari kanker, ikuti segala prosesnya dan insyaallah bisa sembuh.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section><!-- End Testimonials Section -->
    </main><!-- End #main -->
@endsection