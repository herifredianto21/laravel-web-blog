@extends('index')
@section('template.header')
@section('content')

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs" data-aos="fade-in">
    <div class="container">
        <h2>Details Berita</h2>
        {{-- <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p> --}}
    </div>
</div><!-- End Breadcrumbs -->

<!-- ======= Cource Details Section ======= -->
<section id="course-details" class="course-details">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-8">
                 
                {{-- @foreach ($datadetail as $datadetails) --}}
                    <img src="https://rumahsakitginjal.com/layouts/images/layanan/Penanganan_kanker/penanganan_kanker_satu.JPG" class="img-fluid" alt=""> 
                    <h3>{{ $datadetail['0']['judul'] }}</h3>
                    <p class="justify" style="line-weight: 30px;">{{ $datadetail['0']['isi_artikel'] }}</p>
                    
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
                    {{-- <p>{{ $datadetails['tagar'] }}</p> --}}
                {{-- @endforeach --}}
                  
                {{-- {{ $datadetail['isi_artikel'] }} --}}
            </div>
            <div class="col-lg-4">
                <div class="course-info d-flex justify-content-between align-items-center">
                    <h5>Tranding artikel</h5>
                    <p><a href="#">Gagal ginjal</a></p>
                </div>
                <div class="course-info d-flex justify-content-between align-items-center">
                    <!-- ======= Popular Courses Section ======= -->
                
                </div>
                <div class="course-info d-flex justify-content-between align-items-center">
                    {{-- <h5>Available Seats</h5>
                    <p>30</p> --}}
                </div>
                <div class="course-info d-flex justify-content-between align-items-center">
                    {{-- <h5>Schedule</h5>
                    <p>5.00 pm - 7.00 pm</p> --}}
                </div>
            </div>
        </div>
    </div>
</section><!-- End Cource Details Section -->

@endsection