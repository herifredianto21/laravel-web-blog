@extends('index')
@section('template.header')
@section('content')

    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs" data-aos="fade-in">
            <div class="container">
                <h2>Contact Us</h2>
                {{-- <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p> --}}
            </div>
        </div><!-- End Breadcrumbs -->
        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div data-aos="fade-up">
                <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.065141878728!2d107.6170251152389!3d-6.882800195026391!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68bfa8371dbd07%3A0x96602a59adfec6bc!2sKlinik%20Utama%20CMI%20-%20Klinik%20Kanker%2C%20Jantung%2C%20Gagal%20Ginjal%20dan%20Diabetes!5e0!3m2!1sid!2sid!4v1648442294817!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="container" data-aos="fade-up">
                <div class="row mt-5">
                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p> Jalan Tubagus Ismail VII No. 21 Dago, <br> 
                                    Bandung, Jawa Barat 40134 <br>
                                    Indonesia
                                </p>
                            </div>
                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>infocmihospital@gmail.com</p>
                            </div>
                            <br>
                            <div class="iklan">
                                <i class="bi bi-envelope"></i>
                                <h4>Periklanan:</h4>
                                <p>ads@cmihospital.com</p>
                            </div>
                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>Phone : (022) 2531000</p>
                                <p>Whatsapp : 0811 9161 166</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 mt-5 mt-lg-0">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section><!-- End Contact Section -->
    </main><!-- End #main -->
@endsection