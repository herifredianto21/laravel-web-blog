@extends('index')
@section('template.header')
@section('content')

    <!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
        <h1>Solusi paling akurat <br> untuk Penyakit Ginjal</h1>
        {{-- <p>Berakar dari medis modern Father of the Doctor “dr. Ibnu Sina”, CekKanker.com memberi solusi akurat bagi penderita Penyakit Kanker. Konsultasikan dengan dokter anda.</p> --}}
        <a href="courses.html" class="btn-get-started">Get Startedaaaaaaaaaa</a>
    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= Cource Details Section ======= -->
    <section id="course-details" class="course-details">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-8">
            {{-- <img src="https://rumahsakitginjal.com/layouts/images/layanan/Penanganan_kanker/penanganan_kanker_satu.JPG" style="width: 90%;" class="img-fluid" alt=""> --}}
            <h3>Penyebab dan Gejala Gagal Ginjal, dan Tips Bagaimana cara mengobatinya</h3>
            {{-- <h3>Ini Penyebab dan Gejala Gagal Ginjal, Bisa Fatal kalau Tak Ditangani</h3> --}}
            {{-- <div class="container">
                  <table class="table">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Kode Artikel</th>
                          <th scope="col">Judul</th>
                          <th scope="col">Isi Artikel</th>
                          <th scope="col">Tagar</th>
                        </tr>
                      </thead>
                      <tbody> --}}
                      {{-- @if(isset($data)) 
                      @foreach ($data as $datas)   
                        <tr>
                          <th scope="row">1</th>
                          <td>{{ $datas['kode_artikel'] }}</td>
                          <td>{{ $datas['judul'] }}</td>
                          <td>{{ $datas['isi_artikel'] }}</td>
                          <td>{{ $datas['tagar'] }}</td>
                        </tr>
                      @endforeach 
                      @endif --}}
                      {{-- </tbody>
                  </table>
                </div> --}}
            <p class="justify" style="line-height:30px;">
                <strong> Bandung </strong> - Penyakit ginjal kronis, juga disebut gagal ginjal, menyebabkan hilangnya fungsi ginjal secara bertahap. Fungsi ginjal adalah menyaring limbah dan kelebihan cairan dari darah, yang kemudian dikeluarkan melalui urin. Penyakit gagal ginjal dapat menyebabkan tingkat cairan, elektrolit, dan limbah yang berbahaya menumpuk di tubuh seseorang. Maka, penyakit ini tidak bisa disepelekan.
            </p>
            <p class="justify" style="line-height:30px;">
              Penyakit ginjal adalah kelainan yang mengenai organ ginjal yang timbul akibat berbagai faktor, misalnya infeksi, tumor, kelainan bawaan, penyakit metabolik atau degeneratif, dan lain-lain. Penyakit ginjal kronis, biasanya timbul secara perlahan dan sifatnya menahun.
            </p>
            
            <p class="justify" style="line-height:30px;">
                Pada tahap awal penyakit gagal ginjal, pengidap bisa memiliki beberapa tanda atau gejala. Pengidap mungkin tidak akan menyadari bahwa dia memiliki penyakit ginjal sampai kondisinya sudah menjadi parah.
                Pengobatan untuk penyakit gagal ginjal biasanya akan memperlambat perkembangan kerusakan ginjal dengan mengendalikan penyebabnya. Tetapi dengan mengendalikan penyebabnya juga tidak dapat mencegah kerusakan ginjal.
            </p>
            <p class="justify" style="line-height:30px;">
                Penyakit gagal ginjal dapat berkembang menjadi gagal ginjal stadium akhir, yang berakibat fatal tanpa adanya penyaringan buatan (dialisis) atau transplantasi ginjal. 
            </p> <br>
            <h5>
              <strong> Berikut Penyebab Utama Penyakit Gagal Ginjal Kronik? </strong>
            </h5>
            <p class="justify" style="line-height:30px;">Penyakit Gagal ginjal kronik dapat disebabkan oleh kondisi kesehatan lain yang membebani ginjal dan dapat merupakan akibat dari beberapa penyakit. Penyakit dan kondisi yang menyebabkan penyakit gagal ginjal antara lain:</p>
            <ul style="line-height:40px;">
                <li><i class="bi bi-check-circle"></i> Diabetes tipe 1 atau tipe 2</li>
                <li><i class="bi bi-check-circle"></i> Tekanan darah tinggi</li>
                <li><i class="bi bi-check-circle"></i> Glomerulonefritis, atau peradangan pada unit penyaringan ginjal</li>
                <li><i class="bi bi-check-circle"></i> Nefritis interstisial, peradangan pada tubulus ginjal dan struktur di sekitarnya</li>
                <li><i class="bi bi-check-circle"></i> Penyakit ginjal polikistik atau penyakit ginjal bawaan lainnya</li>
                <li><i class="bi bi-check-circle"></i> Obstruksi saluran kemih yang berkepanjangan, mulai dari kondisi pembesaran prostat, batu ginjal dan beberapa jenis kanker</li>
                <li><i class="bi bi-check-circle"></i> Vesicoureteral reflux, atau suatu kondisi yang menyebabkan urin kembali ke ginjal</li>
                <li><i class="bi bi-check-circle"></i> Infeksi ginjal berulang, atau juga disebut dengan pielonefritis</li>
            </ul>
            <br>
            <h5>
                <strong> Lantas Apa saja Gejala Penyakit Gagal Ginjal Kronis ? </strong>
            </h5>
            <p class="justify" style="line-height:30px;">
                Tanda dan gejala penyakit ginjal kronis dapat berkembang dari waktu ke waktu jika kerusakan ginjal tidak diatasi. Hilangnya fungsi ginjal dapat menyebabkan penumpukan cairan atau limbah tubuh. Biasanya, gejala gagal ginjal antara lain:
            </p>
            <ul style="line-height:30px;">
                <li><i class="bi bi-check-circle"></i> Mual</li>
                <li><i class="bi bi-check-circle"></i> Muntah</li>
                <li><i class="bi bi-check-circle"></i> Kehilangan Selera Makan</li>
                <li><i class="bi bi-check-circle"></i> Kelelahan</li>
                <li><i class="bi bi-check-circle"></i> Susah Tidur</li>
                <li><i class="bi bi-check-circle"></i> Kelebihan buang air kecil</li>
                <li><i class="bi bi-check-circle"></i> Kekurangan buang air kecil</li>
                <li><i class="bi bi-check-circle"></i> Ketajaman mental menurun</li>
                <li><i class="bi bi-check-circle"></i> Kram Otot</li>
                <li><i class="bi bi-check-circle"></i> Pembengkakan kaki dan pergelangan kaki</li>
                <li><i class="bi bi-check-circle"></i> Tekanan darah tinggi (hipertensi) yang sulit dikendalikan</li>
                <li><i class="bi bi-check-circle"></i> Sesak napas, jika cairan menumpuk di paru-paru</li>
            </ul>
            <br>
            <h5>
              <strong> Diagnosis Penyakit Ginjal Kronis </strong>
            </h5>
            <p class="justify" style="line-height:30px;">
              Penyakit gagal ginjal kronik dapat dikenali secara dini, maka pengobatan dapat segera dimulai, dengan demikian penyakit ini dapat dicegah. Demikian pula pengenalan dan pengobatan hipertensi dan Diabetes Melitus secara awal serta berkesinambungan dapat mencegah penyakit gagal ginjal kronik. 
            </p>
            <ul style="line-height:30px;">
              <li><i class="bi bi-check-circle"></i> Pemeriksaan Darah</li>
              <p>Dilakukan pemeriksaan darah dengan melihat kadar kreatin, ureum, Laju Filtrasi Glomerulus (LFG).</p>
              <li><i class="bi bi-check-circle"></i> Pemeriksaan Urin </li>
              <p>Dilakukan urin dengan melihat kadar albumin atau protein.</p>
            </ul>
            <br>
            <h5> <strong> Pengobatan Gagal ginjal kronis </strong> </h5>
            <p>Namun, ada beberapa cara mengobati gagal ginjal untuk membantu meringankan gejala penyakit dan meningkatkan harapan hidup pasiennya. Berikut beberapa di antaranya:</p>
            <ul style="line-height:30px;">
              <i class="bi bi-check-circle"></i> Terapi obat untuk mencegah komplikasi <br>
              <p>Terapi obat untuk mencegah komplikasi gagal ginjal kronis, diantaranya:</p>
              <ul>
                <li>Obat untuk menurunkan kolesterol</li>
                <li>Obat untuk mengatasi anemia</li>
                <li>Obat untuk meredakan Pembengkakan</li>
                <li>Suplemen untuk membantu meningkatkan produksi sel darah merah</li>
                <li></li>
              </ul>
              <i class="bi bi-check-circle"></i> Cuci darah <br>
              <i class="bi bi-check-circle"></i> Transplantasi ginjal <br>
              <i class="bi bi-check-circle"></i> Perubahan gaya hidup
              <p style="line-height:30px;"> &nbsp; &nbsp; &nbsp; Salah satunya dengan menjalankan diet sehat agar kinerja ginjal tidak berat, antara lain dengan 
                <br> &nbsp; &nbsp; &nbsp; melakukan:
                <ul>
                  <li>Menghindari makanan siap saji, makanan instan, makanan beku, makanan kalengan, sampai makanan ringan</li>
                  <li>Membatasi asupan garam, sodium, dan natrium</li>
                  <li>Membatasi makanan tinggi kalium seperti pisang, jeruk, kentang, bayam, tomat</li>
                  <li>Mengonsumsi makanan rendah kalium seperti apel, kubis, wortel, kacang hijau, anggur, stroberi</li>
                  <li>Membatasi protein sesuai rekomendasi dokter dan pilih sayur, buah, nasi merah, serealia</li>
                </ul>
              </p>
          </ul>
        </div>
          
        <div class="col-lg-4">
            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Tranding Topic</h5>
              <p><a href="#">Gagal Ginjal Kronis</a></p>
            </div>
            {{-- <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Course Fee</h5>
              <p>$165</p>
            </div>
            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Available Seats</h5>
              <p>30</p>
            </div>
            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Schedule</h5>
              <p>5.00 pm - 7.00 pm</p>
            </div> --}}
          </div>
        </div>

      </div>

      {{-- Komentar --}}
      <br><br><br>
      <div class="container">
        <h3 style="width:860px;">Tanya Dokter</h3>
        <div class="row">
            <div class="col-md-8">
                <div class="media g-mb-30 media-comment">
                    <img class="d-flex g-width-50 g-height-50 rounded-circle g-mt-3 g-mr-15" src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Yanti Purnama Sari">
                    <div class="media-body u-shadow-v18 g-bg-secondary g-pa-30">
                      <div class="g-mb-15">
                        <h5 class="h5 g-color-gray-dark-v1 mb-0">Yanti Purnama Sari</h5>
                        <span class="g-color-gray-dark-v4 g-font-size-12">5 days ago</span>
                      </div>
                      
                      <p>Dok, suami saya mengalami penyakit gagal ginjal kronis apakah masih ada kesempatan untuk punya keturunan,, dan apakah mengganggu janin ketika saya hamil,, saya nikah sudah 2 th dan suami saya menderita penykit tersebut selama 5 tahun,,,makasih dok</p>
                
                      <ul class="list-inline d-sm-flex my-0">
                        <li class="list-inline-item g-mr-20">
                          <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                            <i class="fa fa-thumbs-up g-pos-rel g-top-1 g-mr-3"></i>
                            8
                          </a>
                        </li>
                        <li class="list-inline-item g-mr-20">
                          <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                            <i class="fa fa-thumbs-down g-pos-rel g-top-1 g-mr-3"></i>
                            2
                          </a>
                        </li>
                        <li class="list-inline-item ml-auto">
                          <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                            <i class="fa fa-reply g-pos-rel g-top-1 g-mr-3"></i>
                            Reply
                          </a>
                        </li>
                      </ul>
                    </div>
                </div>
            </div>
        
            <div class="col-md-8">
                <div class="media g-mb-30 media-comment">
                    <img class="d-flex g-width-50 g-height-50 rounded-circle g-mt-3 g-mr-15" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Ferdiansyah Gunawan">
                    <div class="media-body u-shadow-v18 g-bg-secondary g-pa-30">
                      <div class="g-mb-15">
                        <h5 class="h5 g-color-gray-dark-v1 mb-0">Ferdiansyah Gunawan</h5>
                        <span class="g-color-gray-dark-v4 g-font-size-12">9 days ago</span>
                      </div>
                
                      <p>Berapa persen tingkat kesembuhan pasien gagal ginjal tahap awal ?</p>
                
                      <ul class="list-inline d-sm-flex my-0">
                        <li class="list-inline-item g-mr-20">
                          <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                            <i class="fa fa-thumbs-up g-pos-rel g-top-1 g-mr-3"></i>
                            178
                          </a>
                        </li>
                        <li class="list-inline-item g-mr-20">
                          <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                            <i class="fa fa-thumbs-down g-pos-rel g-top-1 g-mr-3"></i>
                            34
                          </a>
                        </li>
                        <li class="list-inline-item ml-auto">
                          <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                            <i class="fa fa-reply g-pos-rel g-top-1 g-mr-3"></i>
                            Reply
                          </a>
                        </li>
                      </ul>
                    </div>
                </div>
            </div>
        </div>
      </div>
      {{-- End Komentar --}}
      

    </section><!-- End Cource Details Section -->

    <!-- ======= Cource Details Tabs Section ======= -->
    <section id="cource-details-tabs" class="cource-details-tabs">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Modi sit est</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Unde praesentium sed</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Pariatur explicabo vel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Nostrum qui quasi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Iusto ut expedita aut</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Architecto ut aperiam autem id</h3>
                    <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                    <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/course-details-tab-1.png" alt="Architecto" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Et blanditiis nemo veritatis excepturi</h3>
                    <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                    <p>Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et reiciendis sunt sunt est. Non aliquid repellendus itaque accusamus eius et velit ipsa voluptates. Optio nesciunt eaque beatae accusamus lerode pakto madirna desera vafle de nideran pal</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/course-details-tab-2.png" alt="Et blanditiis" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Impedit facilis occaecati odio neque aperiam sit</h3>
                    <p class="fst-italic">Eos voluptatibus quo. Odio similique illum id quidem non enim fuga. Qui natus non sunt dicta dolor et. In asperiores velit quaerat perferendis aut</p>
                    <p>Iure officiis odit rerum. Harum sequi eum illum corrupti culpa veritatis quisquam. Neque necessitatibus illo rerum eum ut. Commodi ipsam minima molestiae sed laboriosam a iste odio. Earum odit nesciunt fugiat sit ullam. Soluta et harum voluptatem optio quae</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/course-details-tab-3.png" alt="Impedit facilis" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Fuga dolores inventore laboriosam ut est accusamus laboriosam dolore</h3>
                    <p class="fst-italic">Totam aperiam accusamus. Repellat consequuntur iure voluptas iure porro quis delectus</p>
                    <p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam quia a laborum inventore</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/course-details-tab-4.png" alt="Fuga dolores" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Est eveniet ipsam sindera pad rone matrelat sando reda</h3>
                    <p class="fst-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p>
                    <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/course-details-tab-5.png" alt="Est eveniet" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Cource Details Tabs Section -->

    <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">
          <div class="section-title">
              <h2>Artikel</h2>
              <p> Artikel Kesehatan Populer</p>
          </div>
          <div class="row" data-aos="zoom-in" data-aos-delay="100">
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                  <div class="course-item">
                      
                      @if(isset($data))
                      @foreach ($data as $dat) 
                      <img src="https://cmihospital.com/cmiadministrator/assets/gambar_artikel/851Foto%201%20-%20Ilustrasi%20gejala%20penyakit%20jantung%20kardiomiopati.jpg" class="img-fluid" alt="...">
                      <div class="course-content">
                          <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4>{{ $dat['tagar'] }}</h4>
                              <!-- <p class="price">$169</p> -->
                          </div>
                          {{-- <h3><a href="course-details.html">{{ $dat['judul'] }}</a></h3> --}}
                          <h3><a href="{{ url('artikel-detail/{id}') }}">{{ $dat['judul'] }}</a></h3>
                          <p>{{ $dat['isi_artikel'] }}</p>
                          <div class="trainer d-flex justify-content-between align-items-center">
                              <div class="trainer-profile d-flex align-items-center">
                                  <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                                  <span>{{ $dat['id_domain'] }}</span>
                              </div>
                              <div class="trainer-rank d-flex align-items-center">
                                  <i class="bx bx-user"></i>&nbsp;50
                                  &nbsp;&nbsp;
                                  <i class="bx bx-heart"></i>&nbsp;65
                              </div>
                          </div>
                      </div>
                      @endforeach
                      @endif
                  </div>
              </div> <!-- End Course Item-->
              {{-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                  <div class="course-item">
                      <img src="https://cmihospital.com/cmiadministrator/assets/gambar_artikel/54001%20Bypass%201%20-%20Ilustrasi%20bypass%20jantung.jpg" class="img-fluid" alt="...">
                          <div class="course-content">
                              <div class="d-flex justify-content-between align-items-center mb-3">
                                  <h4>Tentang Jantung</h4>
                              </div>
                              <h3><a href="course-details.html">Operasi Bypass Jantung bagi Pasien PJK</a></h3>
                              <p>Sama halnya seperti tindakan pemasangan ring, operasi bypass jantung adalah tindakan yang dilakukan untuk menangani kondisi penyumbatan...</p>
                              <div class="trainer d-flex justify-content-between align-items-center">
                                  <div class="trainer-profile d-flex align-items-center">
                                      <img src="assets/img/trainers/trainer-2.jpg" class="img-fluid" alt="">
                                      <span>Lana</span>
                                  </div>
                                  <div class="trainer-rank d-flex align-items-center">
                                      <i class="bx bx-user"></i>&nbsp;35
                                      &nbsp;&nbsp;
                                      <i class="bx bx-heart"></i>&nbsp;42
                                  </div>
                              </div>
                          </div>
                  </div>
              </div> <!-- End Course Item--> --}}
              {{-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                  <div class="course-item">
                      <img src="https://cmihospital.com/cmiadministrator/assets/gambar_artikel/35001%20Ring%201%20-%20Ilustrasi%20pemasangan%20ring%20jantung.jpg" class="img-fluid" alt="...">
                      <div class="course-content">
                          <div class="d-flex justify-content-between align-items-center mb-3">
                              <h4>Tentang Jantung</h4>
                              <!-- <p class="price">$180</p> -->
                          </div>
                          <h3><a href="course-details.html">Pemasangan Ring Jantung bagi Pasien PJK</a></h3>
                          <p>Pemasangan ring atau stent jantung merupakan salah satu pengobatan jantung yang paling umum dan efektif untuk menangani penyakit jantung koroner akibat...</p>
                          <div class="trainer d-flex justify-content-between align-items-center">
                              <div class="trainer-profile d-flex align-items-center">
                                  <img src="assets/img/trainers/trainer-3.jpg" class="img-fluid" alt="">
                                  <span>Brandon</span>
                              </div>
                              <div class="trainer-rank d-flex align-items-center">
                                  <i class="bx bx-user"></i>&nbsp;20
                                  &nbsp;&nbsp;
                                  <i class="bx bx-heart"></i>&nbsp;85
                              </div>
                          </div>
                      </div>
                  </div>
              </div> <!-- End Course Item--> --}}
          </div>
      </div>
  </section><!-- End Popular Courses Section -->

  <!-- ======= Popular Courses Section ======= -->
  <section id="popular-courses" class="courses">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Artikel</h2>
            <p> Artikel Berita Kesehatan Populer</p>
        </div>

        {{-- <form action="" method="post"> --}}
          <div class="row" data-aos="zoom-in" data-aos-delay="100">

            @if(isset($datas)) 
            @foreach ($datas['articles'] as $datasa)
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                  <div class="course-item">
                    <img src="{{ $datasa['urlToImage'] }}" class="img-fluid" alt="...">
                      <div class="course-content">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                          <h4>{{ $datasa['publishedAt'] }}</h4>
                          <!-- <p class="price">$169</p> -->
                        </div>
                        {{-- <h1>{{ $datas['status'] }}</h1>  --}}
                        
                        
                        <h3><a href="{{ url('artikel-detail') }}">{{ $datasa['title'] }}</a></h3>
                        {{-- <h3><a href="{{ url('artikel-detail', $datadetail->id) }}">{{ $datasa['title'] }}</a></h3> --}}
                        
                        {{-- <h3><a href="{{ url('detail-artikel') }}">{{ $datasa['title'] }}</a></h3> --}}
                        <p>{{ $datasa['description'] }}</p> 
                        <div class="trainer d-flex justify-content-between align-items-center">
                          <div class="trainer-profile d-flex align-items-center">
                            <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                            {{-- <span>{{ $datas['articles']['url'] }}</span>  --}}
                          </div>
                          <div class="trainer-rank d-flex align-items-center">
                            <i class="bx bx-user"></i>&nbsp;50
                              &nbsp;&nbsp;
                            <i class="bx bx-heart"></i>&nbsp;65
                          </div>
                        </div>
                      </div>
                  </div>
              </div> <!-- End Course Item-->
            @endforeach
            @endif
          </div>
        {{-- </form> --}}
        
    </div>
</section><!-- End Popular Courses Section -->

  </main><!-- End #main -->
@endsection
