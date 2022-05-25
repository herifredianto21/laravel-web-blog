@extends('index')
@section('template.header')
@section('content')

<main id="main">
    
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container" data-aos="fade-up" style="margin-top: 100px;">
            
                <div class="row">
                    <div class="col">
                        <div class="contact-form">
                            <h2 style="text-align: center">Buat Janji</h2>
                            <br> <br> <br>
                            <form action="{{ url('registrasi-pasien') }}" method="post">
                            {{ csrf_field() }}
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="i">Nama Lengkap</label>
                                        <input type="text" class="form-control" name="nama" id="nama">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputDomisili">Domisili</label>
                                        <input type="text" class="form-control" name="domisili" id="domisili">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="umur">Usia</label>
                                        <input type="text" class="form-control" name="umur" id="umur">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="no_telp">Nomor WhatsApp</label>
                                        <input type="text" class="form-control" name="no_telp" id="no_telp">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="keluhan">Keluhan</label>
                                    <textarea class="form-control" name="keluhan" id="keluhan" rows="6"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="lama_penyakit">Lama Keluhan</label>
                                    <input type="text" class="form-control" name="lama_penyakit" id="lama_penyakit">
                                </div>
                                <button type="submit" class="default-btn">Buat Janji</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        
    </section><!-- End Testimonials Section -->
</main><!-- End #main -->
@endsection