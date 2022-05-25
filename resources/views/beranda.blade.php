@extends('index')
@section('template.header')
@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center" style="background-image: linear-gradient(to left, rgb(162, 0, 81), rgb(231, 4, 102));">
      <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
          <h1>Solusi paling akurat <br> untuk Penyakit Ginjalaa</h1>
          {{-- <p>Berakar dari medis modern Father of the Doctor “dr. Ibnu Sina”, CekKanker.com memberi solusi akurat bagi penderita Penyakit Kanker. Konsultasikan dengan dokter anda.</p> --}}
          <a href="courses.html" class="btn-get-started">Get Started</a>
      </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    {{-- <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/tarik_saputangan.jpg" style="width: 100%;" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>FORMULA IBNU SINA.</h3>
            <p class="justify"  style="line-weight: 30px;">
              Terapi untuk Penyakit Diabetes sudah dibuat dengan sistematis berdasarkan ilmu Qanun (Canon of Medicinae) karya Ibnu Sina, Bapak Kedokteran Dunia. Terapi CMI yang lebih dikenal dengan julukan Formula Ibnu Sina ini telah menjadi incaran semua pasien yang datang ke kami secara khusus, dan juga memikat dunia medis secara umum. Formula Ibnu Sina menjadi primadona di kalangan para medis Kami sebagai langkah untuk memberikan terapi kepada seluruh pasien penderita penyakit yang mematikan seperti Penyakit Diabetes, sehingga tingkat kesuksesan yang dicapai menjadi lebih tinggi (hingga 80%). Pihak medis kami bersatu padu memberikan terapi medis kedokteran modern dan kedokteran klasik timur berbasis formula Ibnu Sina dengan tujuan untuk meningkatkan setinggi-tingginya kualitas kesehatan setiap pasien yang berkunjung.
            </p>
            <p class="justify" style="line-weight: 30px;">
              Faktor Risiko Ketoasidosis Diabetik Pasien diabetes melitus tipe-1 lebih beresiko terjangkit 
              ketoasidosis diabetik dibandingkan dengan pasien diabetes melitus tipe-2. Akan tetapi, tidak 
              semua pasien diabetes melitus mengalami ketoasidosis diabetik. Ada beberapa faktor resiko 
              yang dapat menyebabkan pasien diabetes mengalami ketoasidosis diabetes, yaitu:
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> Lupa mengonsumsi/menggunakan  insulin atau dosis insulin terlalu rendah.</li>
              <li><i class="bi bi-check-circle"></i> Kecanduan alkohol atau penyalahgunaan NAPZA, terutama kokain.</li>
              <li><i class="bi bi-check-circle"></i> Mengalami serangan jantung, stroke, dan pankreatitis atau radang pankreas.</li>
              <li><i class="bi bi-check-circle"></i> Tidak mengonsumsi obat diabetes sesuai dengan resep diberikan oleh dokter.</li>
              <li><i class="bi bi-check-circle"></i> dan mengalami cedera atau trauma emosional.</li>
            </ul>
            <!-- <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
            </p> -->

          </div>
        </div>

      </div>
    </section><!-- End About Section --> --}}

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch-center">
            <div class="content" style="border-radius: 15px 50px 30px 5px" style="background-color: #e80368;">
              <h3>Konsultasi Kesehatan Segera</h3>
              {{-- <p>
                Mengapa Rumah Sakit Diabetes Indonesia ?
              </p> --}}
              <div class="text-center">
                <a href="https://cmihospital.com/id" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-3 d-flex align-items-stretch">
                    <div class="icon-box mt-4 mt-xl-0" style="background-color: #a23565; 
                                                                                border-radius: 15px 50px; 
                                                                                box-shadow: 10px 10px 5px rgb(196, 196, 196);
                                                                                border: 1px solid #a23565;
                                                                                ">
                      <a href="https://api.whatsapp.com/send?phone=+6282121590000">
                        <i class="bx bx-receipt"></i>
                        <p style="color: white;">Periksa Ginjal</p>
                        {{-- <p>Terapi yang diberikan mampu merevitalisasi sel beta pankreas sehingga dapat memproduksi hormon insulin kembali.</p> --}}
                      </a>
                    </div>
                </div>
                <div class="col-xl-3 d-flex align-items-stretch">
                    <div class="icon-box mt-4 mt-xl-0" style="background-color: #a23565; 
                                                                                border-radius: 15px 50px; 
                                                                                box-shadow: 10px 10px 5px rgb(196, 196, 196);
                                                                                border: 1px solid #a23565;
                                                                                ">
                      <a href="https://api.whatsapp.com/send?phone=+6282121590000">
                        <i class="bx bx-cube-alt"></i>
                        <p style="color: white;">Testimoni Pasien</p>
                        {{-- <p>Memperbaiki reseptor insulin sehingga sensitivitasnya dapat meningkat</p> --}}
                      </a>
                    </div>
                  </a>
                </div>
                <div class="col-xl-3 d-flex align-items-stretch">
                    <div class="icon-box mt-4 mt-xl-0" style="background-color: #a23565; 
                                                              border-radius: 15px 50px; 
                                                              box-shadow: 10px 10px 5px rgb(196, 196, 196);
                                                              border: 1px solid #a23565;
                                                            ">
                      <a href="https://api.whatsapp.com/send?phone=+6282121590000">
                        <i class="bx bx-images"></i>
                        <p style="color: white;">Konsultasi Pasien</p>
                        {{-- <p>Memperbaiki pembuluh darah yang rusak sehingga dapat menghindari dan mengobati komplikasi akibat diabetes (katarak dan impotensi).</p> --}}
                      </a>
                    </div>
                </div>
                <div class="col-xl-3 d-flex align-items-stretch">
                    <div class="icon-box mt-4 mt-xl-0" style="background-color: #a23565; 
                                                              border-radius: 15px 50px; 
                                                              box-shadow: 10px 10px 5px rgb(196, 196, 196);
                                                              border: 1px solid #a23565;
                                                              ">
                      <a href="https://api.whatsapp.com/send?phone=+6282121590000">
                        <i class="bx bx-images"></i>
                        <p style="color: white;">Seputar Ginjal</p>
                        {{-- <p>Memperbaiki pembuluh darah yang rusak sehingga dapat menghindari dan mengobati komplikasi akibat diabetes (katarak dan impotensi).</p> --}}
                      </a>
                    </div>
                  </a>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>
        
        <br> <br> <br>
        <div class="row">
          <div class="col-lg-8 d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
            {{-- <div class="icon-boxes d-flex flex-column justify-content-center"> --}}
              <div class="row w-100" style="margin-left: 3px; margin-bottom: 10px; margin-top: 50px;">
                <div class="col-md-3">
                    <div class="card border-info mx-sm-1 p-3">
                        <div class="card border-info shadow text-info p-3 my-card" ><span class="fa fa-heartbeat" aria-hidden="true"></span></div>
                        <div class="text-info text-center mt-3"><h4>Diabetes</h4></div>
                        <div class="text-info text-center mt-2">
                            {{-- <a href="https://www.cmihospital.com/id" class="more-btn" style="background-color: #4233ff;">Learn More <i class="bx bx-chevron-right"></i></a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-success mx-sm-1 p-3">
                        <div class="card border-success shadow text-success p-3 my-card"><span class="fa fa-wheelchair" aria-hidden="true"></span></div>
                        <div class="text-success text-center mt-3"><h4>Kanker</h4></div>
                        <div class="text-success text-center mt-2">
                          {{-- <a href="https://www.cmihospital.com/id" class="more-btn" style="background-color: #4233ff;">Learn More <i class="bx bx-chevron-right"></i></a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-danger mx-sm-1 p-3">
                        <div class="card border-danger shadow text-danger p-3 my-card" ><span class="fa fa-heart" aria-hidden="true"></span></div>
                        <div class="text-danger text-center mt-3"><h4>Ginjal</h4></div>
                        <div class="text-danger text-center mt-2">
                          {{-- <a href="https://www.cmihospital.com/id" class="more-btn" style="background-color: #4233ff;">Learn More <i class="bx bx-chevron-right"></i></a> --}}
                        </div> 
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-warning mx-sm-1 p-3">
                        <div class="card border-warning shadow text-warning p-3 my-card" ><span class="fa fa-stethoscope" aria-hidden="true"></span></div>
                        <div class="text-warning text-center mt-3"><h4>Jantung</h4></div>
                        <div class="text-warning text-center mt-2"> 
                          {{-- <a href="https://www.cmihospital.com/id" class="more-btn" style="background-color: #4233ff;">Learn More <i class="bx bx-chevron-right"></i></a> --}}
                        </div>
                    </div>
                </div>
              </div>
            {{-- </div><!-- End .content--> --}}
          </div>
          
          <div class="col-lg-4 d-flex align-items-stretch-center">
            <div class="content" style="border-radius: 50px 15px 5px 30px;">
              <h3>Layanan Konsultasi Online</h3>
              {{-- <p>
                Mengapa Rumah Sakit Diabetes Indonesia ?
              </p> --}}
              <div class="text-center">
                <a href="/registrasi-pasien" class="more-btn"> Daftar <i class="bx bx-chevron-right"></i> </a>
                {{-- <a href="/register" class="more-btn" data-toggle="modal" data-target="#exampleModal"> Daftar <i class="bx bx-chevron-right"></i> </a> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Why Us Section -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
      
      {{-- <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registerModal">{{ __('Register') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" id="registerForm">
                    @csrf

                    <div class="form-group row">
                        <label for="namaInput" class="col-md-4 col-form-label text-md-right">{{ __('Nama Lengkap') }}</label>

                        <div class="col-md-6">
                            <input id="namaInput" type="text" class="form-control" name="nama" value="{{ old('nama') }}"  autocomplete="nama lengkap" autofocus>

                            <span class="invalid-feedback" role="alert" id="namaError">
                                <strong></strong>
                            </span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="umurInput" class="col-md-4 col-form-label text-md-right">{{ __('umur') }}</label>

                        <div class="col-md-6">
                            <input id="umurInput" type="text" class="form-control" name="umur" required autocomplete="umur">

                            <span class="invalid-feedback" role="alert" id="umurError">
                                <strong></strong>
                            </span>
                        </div>
                    </div> <br>
                    
                    <div class="form-group row">
                      <label for="domisiliInput" class="col-md-4 col-form-label text-md-right">{{ __('Domisili') }}</label>

                      <div class="col-md-6">
                          <input id="domisiliInput" type="text" class="form-control" name="domisili" value="{{ old('domisili') }}" required autocomplete="domisili">

                          <span class="invalid-feedback" role="alert" id="domisiliError">
                              <strong></strong>
                          </span>
                      </div>
                  </div> <br>

                    <div class="form-group row">
                        <label for="no_telp" class="col-md-4 col-form-label text-md-right">{{ __('no_telp') }}</label>

                        <div class="col-md-6">
                            <input type="tel" id="phone" pattern="^\d{10}$" class="form-control" name="no_telp" required autocomplete="no_wa">
                        </div>
                    </div> <br>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}
      
      
      {{-- <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Daftar Konsultasi Online Gratis</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                  </button>
              </div>
              <div class="content" style="margin-left: 15px;">
                <br>
                <p> Ingin membuat janji Konsultasi dengan kami ? <br>
                Silahkan isi terlebih dahulu fomulir di bawah ini <br>
                kami akan balas via whatsapp</p>
              </div>
              <div class="modal-body">
                  <div class="alert alert-danger" style="display:none"></div>
                  <form class="image-upload" method="post" action="" enctype="multipart/form-data">  --}}
                    {{-- <form class="image-upload" method="post" action="{{ route('books.store') }}" enctype="multipart/form-data"> --}} 
                      {{-- @csrf
                      <div class="form-group">
                          <label>Nama Lengkap</label>
                          <input type="text" name="name" id="name" class="form-control"/>
                      </div>  
                      <div class="form-group">
                          <label>Domisili</label>
                          <input type="text" name="auther_name" id="auther_name" class="form-control"/>
                      </div>
                      <div class="form-group">
                          <label>Usia</label>
                          <input type="text" name="usia" id="usia" class="form-control"/>
                      </div>
                      <div class="form-group">
                        <label>Nomor WhatsApp</label>
                        <input type="text" name="no_wa" id="no_wa" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Keluhan</label>
                      <textarea name="description" class="textarea form-control" id="description" cols="40" rows="5"></textarea>
                  </div>
                  <div class="form-group">
                    <label>Lama Keluhan</label>
                    <input type="text" name="lama_keluhan" id="lama_keluhan" class="form-control"/>
                </div> --}}
                  {{-- </form> --}}
              {{-- </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-success" id="formSubmit">Save</button>
              </div>
          </div>
      </div> --}}
        {{-- <div class="container py-5 h-100">
          <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
              <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                <div class="card-body p-4 p-md-5">
                  <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
                  
                  <form>
      
                    <div class="row">
                      <div class="col-md-6 mb-4">
      
                        <div class="form-outline">
                          <label class="form-label" for="firstName">Nama Lengkap</label>
                          <input type="text" id="nama_lengkap" name="nama_lengkap" class="form-control form-control-lg" />
                        </div>
      
                      </div>
                      <div class="col-md-6 mb-4">
      
                        <div class="form-outline">
                          <label class="form-label" for="lastName">Domisili</label>
                          <input type="text" id="domisili" name="domisili" class="form-control form-control-lg" />
                        </div>
      
                      </div>
                    </div>
      
                    <div class="row">
                      <div class="col-md-6 mb-4 d-flex align-items-center">
      
                        <div class="form-outline datepicker w-100">
                          <label for="usia" class="form-label">Usia</label>
                          <input type="text" class="form-control form-control-lg" id="usia" name="usia" />
                        </div>
      
                      </div> --}}
                      {{-- <div class="col-md-6 mb-4">
      
                        <h6 class="mb-2 pb-1">Gender: </h6>
      
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender"
                            value="option1" checked />
                          <label class="form-check-label" for="femaleGender">Female</label>
                        </div>
      
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender"
                            value="option2" />
                          <label class="form-check-label" for="maleGender">Male</label>
                        </div>
      
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="otherGender"
                            value="option3" />
                          <label class="form-check-label" for="otherGender">Other</label>
                        </div>
      
                      </div> --}}
                      {{-- <div class="col-md-6 mb-4 d-flex align-items-center">
      
                        <div class="form-outline datepicker w-100">
                          <label for="usia" class="form-label">Nomor WhatsApp</label>
                          <input type="tel" class="form-control form-control-lg" id="usia" name="usia" />
                        </div>
      
                      </div>
                    </div>
      
                    <div class="row">
                      <div class="col-md-6 mb-4 pb-2">
      
                        <div class="form-outline">
                          <label class="form-label" for="keluhan">Keluhan</label>
                          <input type="text" id="keluhan" class="form-control form-control-lg" />
                        </div>
      
                      </div>
                      <div class="col-md-6 mb-4 pb-2">
      
                        <div class="form-outline">
                          <label class="form-label" for="lama_keluhan">Lama Keluhan</label>
                          <input type="text" id="lama_keluhan" class="form-control form-control-lg" />
                        </div>
      
                      </div>
                    </div>
       --}}
                    {{-- <div class="row">
                      <div class="col-12">
      
                        <select class="select form-control-lg">
                          <option value="1" disabled>Choose option</option>
                          <option value="2">Subject 1</option>
                          <option value="3">Subject 2</option>
                          <option value="4">Subject 3</option>
                        </select>
                        <label class="form-label select-label">Choose option</label>
      
                      </div>
                    </div> --}}
      
                    {{-- <div class="modal-footer">
                        <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                    
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div> --}}
  </div>

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative" data-aos="fade-right" style="border-radius: 25px;">
            <a href="https://www.youtube.com/watch?v=ruioaDuiahc" class="glightbox play-btn mb-4"></a>
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5 gray-bg">
            {{-- <h4 data-aos="fade-up">About us</h4> --}}
            <h3 data-aos="fade-up">Keunggulan Pengobatan Kami</h3>
            {{-- <p data-aos="fade-up">Esse voluptas cumque vel exercitationem. Reiciendis est hic accusamus. Non ipsam et sed minima temporibus laudantium. Soluta voluptate sed facere corporis dolores excepturi. Libero laboriosam sint et id nulla tenetur. Suscipit aut voluptate.</p> --}}

            <div class="icon-box" data-aos="fade-up">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">Merevitalisasi organ ginjal</a></h4>
              <p class="description">Merevitalisasi organ ginjal dan memperbaiki sel ginjal yang sudah rusak sehingga dapat berfungsi normal kembali.</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">Hemodialisa</a></h4>
              <p class="description">Secara perlahan melepas ketergantungan cuci darah atau hemodialisa</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <h4 class="title"><a href="">Meningkatkan angka GFR</a></h4>
              <p class="description">Mengembalikan kemampuan ginjal dalam menyaring darah</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <section class="section about" data-aos="fade-right">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-4 col-sm-6">
            <div class="about-img">
              <img src="assets/img/bg2.jpg" title="" alt="" class="img-fluid">
              <img src="assets/img/bg3.jpg" title="" alt="" class="img-fluid mt-4">
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="about-img mt-4 mt-lg-0">
              <img src="assets/img/tarik_saputangan.jpg" title="" alt="" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-4">
            <div class="about-content pl-4 mt-4 mt-lg-0">
              <h2 class="title-color">Personal care <br>& healthy living</h2>
              <p class="mt-4 mb-5">Memberikan pelayanan kesehatan dengan mengusung dua keilmuan kedokteran, yaitu ilmu kedokteran modern dan ilmu kedokteran komplementer dari Timur berdasarkan buku The Canon Of Medicinae (Al-Qanun fil al-tibb) karya Ibnu Sina.</p>
              <a href="service.html" class="btn btn-main-2 btn-round-full btn-icon">Services<i class="icofont-simple-right ml-3"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="counts" class="counts gray-bg">
      <div class="container">
          <div class="row counters">
              <div class="col-lg-3 col-6 text-center">
                  <span data-purecounter-start="0" data-purecounter-end="2398" data-purecounter-duration="1" class="purecounter"></span>
                  <p>Pasien</p>
              </div>
              <div class="col-lg-3 col-6 text-center">
                  <span data-purecounter-start="0" data-purecounter-end="6" data-purecounter-duration="1" class="purecounter"></span>
                  <p>Spesialis</p>
              </div>
              <div class="col-lg-3 col-6 text-center">
                  <span data-purecounter-start="0" data-purecounter-end="6" data-purecounter-duration="1" class="purecounter"></span>
                  <p>Dokter</p>
              </div>
              <div class="col-lg-3 col-6 text-center">
                  <span data-purecounter-start="0" data-purecounter-end="6" data-purecounter-duration="1" class="purecounter"></span>
                  <p>Layanan</p>
              </div>
          </div>
      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Trainers Section ======= -->
    <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/dokter/dr_haidar.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Dr Haidar</h4>
                <span>Dokter Umum</span>
                <p>
                  Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/dokter/dr_siska.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Dr Siska</h4>
                <span>Dokter Umum</span>
                <p>
                  Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/dokter/dr_wildan.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Dr Wildan</h4>
                <span>Dokter Umum</span>
                <p>
                  Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Trainers Section -->

    <section class="section service gray-bg">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-7 text-center">
            <div class="section-title">
              <h1 class="text-center lg-6" style="color: black;" data-aos="fade-up">Layanan Rumah Sakit CMI </h1>
              <div class="divider mx-auto my-4" data-aos="fade-up"></div>
              <h4 data-aos="fade-up">Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt molestias nostrum laudantium. Maiores porro cumque quaerat.</h4>
            </div>
          </div>
        </div>
    
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-6" data-aos="fade-down">
            <div class="service-item mb-4">
              <div class="icon d-flex align-items-center">
                <i class="icofont-laboratory text-lg"></i>
                <h4 class="mt-3 mb-3">Laboratory services</h4>
              </div>
    
              <div class="content">
                <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
              </div>
            </div>
          </div>
    
          <div class="col-lg-4 col-md-6 col-sm-6" data-aos="fade-down">
            <div class="service-item mb-4">
              <div class="icon d-flex align-items-center">
                <i class="icofont-heart-beat-alt text-lg"></i>
                <h4 class="mt-3 mb-3">Heart Disease</h4>
              </div>
              <div class="content">
                <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 col-sm-6" data-aos="fade-down">
            <div class="service-item mb-4">
              <div class="icon d-flex align-items-center">
                <i class="icofont-tooth text-lg"></i>
                <h4 class="mt-3 mb-3">Dental Care</h4>
              </div>
              <div class="content">
                <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
              </div>
            </div>
          </div>
    
          <div class="col-lg-4 col-md-6 col-sm-6" data-aos="fade-down">
            <div class="service-item mb-4">
              <div class="icon d-flex align-items-center">
                <i class="icofont-crutch text-lg"></i>
                <h4 class="mt-3 mb-3">Body Surgery</h4>
              </div>
    
              <div class="content">
                <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
              </div>
            </div>
          </div>
    
          <div class="col-lg-4 col-md-6 col-sm-6" data-aos="fade-down">
            <div class="service-item mb-4">
              <div class="icon d-flex align-items-center">
                <i class="icofont-brain-alt text-lg"></i>
                <h4 class="mt-3 mb-3">Neurology Sargery</h4>
              </div>
              <div class="content">
                <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 col-sm-6" data-aos="fade-down">
            <div class="service-item mb-4">
              <div class="icon d-flex align-items-center">
                <i class="icofont-dna-alt-1 text-lg"></i>
                <h4 class="mt-3 mb-3">Gynecology</h4>
              </div>
              <div class="content">
                <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

      <br> <br>

        <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Artikel Berita Kesehatan Populer</h2>
            <p style="font-size: 23px">Baca 100+ Artikel Terbaru</p>
        </div>
          <div class="row" data-aos="zoom-in" data-aos-delay="100" style="margin-top: -70px;">
            @if(isset($data))
              @foreach ($data as $dat)
                <div class="col-lg-4 col-md-4 mb-5">
                  <div class="blog-item">
                    <div class="blog-thumb">
                      <img src="https://admincmiartikel.cmihospital.com/gambar_artikel/{{ $dat['gambar_artikel'] }}" title="" alt="" class="img-fluid">
                    </div>
                    <div class="blog-item-content">
                      <h1 class="mt-3 mb-3" style="font-size: 20px;"><a href="{{ url('artikel-detail/'.$dat['slug']) }}">{{ $dat['judul'] }}</a></h1>
                      <!--<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis aliquid architecto facere commodi cupiditate omnis voluptatibus inventore atque velit cum rem id assumenda quam recusandae ipsam ea porro, dicta ad.</p>-->
                      <div class="blog-item-meta mb-3 mt-4">
                        {{-- <span class="text-muted text-capitalize mr-3"><i class="icofont-comment mr-2"></i>5 Comments</span> --}}
                        <span class="text-black text-capitalize mr-3"><i class="icofont-user mr-2"></i>{{ $dat['nama_pegawai'] }}</span> &nbsp
                        {{-- <span class="text-muted text-capitalize mr-3"><i class="icofont-calendar mr-1"></i> {{$dat['created_at']->format('d-m-Y')}}</span> --}}
                        <span class="text-muted text-capitalize mr-3"><i class="icofont-calendar mr-1"></i> {{ $date = DateTime::createFromFormat('d-m-Y', $dat['created_at']) }}</span>
                      </div>
                      <a href="{{ url('artikel-detail/'.$dat['slug']) }}" class="btn btn-main btn-icon btn-round-full">Read More <i class="icofont-simple-right ml-2  "></i></a>
                    </div>
                  </div>
                </div>
              @endforeach
            @endif
          </div>
      </div>
    </section><!-- End Popular Courses Section -->

    <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Artikel Berita Kesehatan Populer</h2>
            <p style="font-size: 23px">Baca 100+ Artikel Terbaru</p>
        </div>
          <div class="row" data-aos="zoom-in" data-aos-delay="100" style="margin-top: -70px;">
            @if(isset($artikel))
              @foreach ($artikel as $artikels)
                <div class="col-lg-4 col-md-4 mb-5">
                  <div class="blog-item">
                    <div class="blog-thumb">
                      <img src="assets/img/1.jpg" title="" alt="" class="img-fluid">
                    </div>
                    <div class="blog-item-content">
                      <h1 class="mt-3 mb-3" style="font-size: 20px;"><a href="{{ url('artikel-detail-db/'.$artikels->id) }}">{{ $artikels->judul }}</a></h1>
                      <!--<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis aliquid architecto facere commodi cupiditate omnis voluptatibus inventore atque velit cum rem id assumenda quam recusandae ipsam ea porro, dicta ad.</p>-->
                      <div class="blog-item-meta mb-3 mt-4">
                        {{-- <span class="text-muted text-capitalize mr-3"><i class="icofont-comment mr-2"></i>5 Comments</span> --}}
                        <span class="text-black text-capitalize mr-3"><i class="icofont-user mr-2"></i>{{$artikels->penulis_artikel}}</span> &nbsp
                        <span class="text-muted text-capitalize mr-3"><i class="icofont-calendar mr-1"></i> {{$artikels->created_at->format('d-m-Y')}}</span>
                      </div>
                      <a href="{{ url('artikel-detail-db/'.$artikels->id) }}" class="btn btn-main btn-icon btn-round-full">Read More <i class="icofont-simple-right ml-2  "></i></a>
                    </div>
                  </div>
                </div>
              @endforeach
            @endif
          </div>
      </div>
    </section><!-- End Popular Courses Section -->
  </main><!-- End #main -->
@endsection
