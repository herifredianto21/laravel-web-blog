<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Ginjalsembuh.com</title>
  <meta name="description" content="mengobati gagal ginjal kronis tanpa cuci darah">
  <meta name="keywords" content="terapi yang diberikan mampu merevitalisasi organ ginjal dan memperbaiki sel ginjal yang sudah rusak sehingga dapat berfungsi normal kembali">

  @include('template.styling')

  <style>
    .justify { text-align: justify; }

    .my-card{
        position:absolute;
        left:40%;
        top:-20px;
        border-radius:50%;
    }

    .section {
        padding: 100px 0;
    }

    .section-sm {
        padding: 70px 0;
    }

    .section-title {
        margin-bottom: 70px;
    }

    .section-title .title {
        font-size: 50px;
        line-height: 50px;
    }

    .section-title p {
        color: #666;
        font-family: "Poppins", sans-serif;
    }


    .page-item.active .page-link{
        z-index: 3;
        color: #fff !important  ;
        background-color: #B80257 !important;
        border-color: #B80257 !important;
        border-radius: 50%;
        padding: 6px 12px;
    }
    .page-link{
        z-index: 3;
        color: #8a0040 !important;
        background-color: #fff;
        border-color: #B80257;
        border-radius: 50%;
        padding: 6px 12px !important;
    }
    .page-item:first-child .page-link{
        border-radius: 30% !important;
    }
    .page-item:last-child .page-link{
        border-radius: 30% !important;   
    }
    .pagination li{
        padding: 3px;
    }
    .disabled .page-link{
        color: #212529 !important;
        opacity: 0.5 !important;
    }

    /*--------------------------------------------------------------
# About
--------------------------------------------------------------*/
.about .icon-boxes h4 {
  font-size: 18px;
  color: #7f6d68;
  margin-bottom: 15px;
}
.about .icon-boxes h3 {
  font-size: 28px;
  font-weight: 700;
  color: #554945;
  margin-bottom: 15px;
}
.about .icon-box {
  margin-top: 40px;
}
.about .icon-box .icon {
  float: left;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 64px;
  height: 64px;
  border: 2px solid #ffcbba;
  border-radius: 50px;
  transition: 0.5s;
  background: #fff;
}
.about .icon-box .icon i {
  color: #ff5821;
  font-size: 32px;
}
.about .icon-box:hover .icon {
  background: #ff5821;
  border-color: #ff5821;
}
.about .icon-box:hover .icon i {
  color: #fff;
}
.about .icon-box .title {
  margin-left: 85px;
  font-weight: 700;
  margin-bottom: 10px;
  font-size: 18px;
}
.about .icon-box .title a {
  color: #343a40;
  transition: 0.3s;
}
.about .icon-box .title a:hover {
  color: #ff5821;
}
.about .icon-box .description {
  margin-left: 85px;
  line-height: 24px;
  font-size: 14px;
}
.about .video-box {
  background: url("https://cmihospital.com/cmiadministrator/assets/gambar_artikel/37801%20Gambar%201%20-%20Ilustrasi%20glomerulusnefritis.jpg") center center no-repeat;
  background-size: cover;
  min-height: 500px;
}
.about .play-btn {
  width: 94px;
  height: 94px;
  background: radial-gradient(#ff5821 50%, rgba(255, 88, 33, 0.4) 52%);
  border-radius: 50%;
  display: block;
  position: absolute;
  left: calc(50% - 47px);
  top: calc(50% - 47px);
  overflow: hidden;
}
.about .play-btn::after {
  content: "";
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translateX(-40%) translateY(-50%);
  width: 0;
  height: 0;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  border-left: 15px solid #fff;
  z-index: 100;
  transition: all 400ms cubic-bezier(0.55, 0.055, 0.675, 0.19);
}
.about .play-btn::before {
  content: "";
  position: absolute;
  width: 120px;
  height: 120px;
  -webkit-animation-delay: 0s;
  animation-delay: 0s;
  -webkit-animation: pulsate-btn 2s;
  animation: pulsate-btn 2s;
  -webkit-animation-direction: forwards;
  animation-direction: forwards;
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
  -webkit-animation-timing-function: steps;
  animation-timing-function: steps;
  opacity: 1;
  border-radius: 50%;
  border: 5px solid rgba(255, 88, 33, 0.7);
  top: -15%;
  left: -15%;
  background: rgba(198, 16, 0, 0);
}
.about .play-btn:hover::after {
  border-left: 15px solid #ff5821;
  transform: scale(20);
}
.about .play-btn:hover::before {
  content: "";
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translateX(-40%) translateY(-50%);
  width: 0;
  height: 0;
  border: none;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  border-left: 15px solid #fff;
  z-index: 200;
  -webkit-animation: none;
  animation: none;
  border-radius: 0;
}

@-webkit-keyframes pulsate-btn {
  0% {
    transform: scale(0.6, 0.6);
    opacity: 1;
  }
  100% {
    transform: scale(1, 1);
    opacity: 0;
  }
}

@keyframes pulsate-btn {
  0% {
    transform: scale(0.6, 0.6);
    opacity: 1;
  }
  100% {
    transform: scale(1, 1);
    opacity: 0;
  }
}

/*--------------------------------------------------------------
# Sections General
--------------------------------------------------------------*/
section {
  padding: 60px 0;
  overflow: hidden;
}

.section-bg {
  /* background-color: rgb(236, 236, 236); */
}

.section-title {
  text-align: center;
  padding-bottom: 30px;
}
.section-title h2 {
  font-size: 32px;
  font-weight: 500;
  margin-bottom: 20px;
  padding-bottom: 0;
  font-family: "Poppins", sans-serif;
  color: #635551;
}
.section-title p {
  margin-bottom: 0;
}

    </style>

</head>

<body>
    

    @include('template.header')

    @yield('content')

    @include('template.footer')

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{!! asset('assets/vendor/purecounter/purecounter.js') !!}"></script>
    <script src="{!! asset('assets/vendor/aos/aos.js') !!}"></script>
    <script src="{!! asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
    <script src="{!! asset('assets/vendor/swiper/swiper-bundle.min.js') !!}"></script>
    <script src="{!! asset('assets/vendor/php-email-form/validate.js') !!}"></script>

    <!-- Template Main JS File -->
    <script src="{!! asset('assets/js/main.js') !!}"></script>
    
    
    {{-- <script>
        $(document).ready(function(){
            $('#formSubmit').click(function(e){
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                $.ajax({
                    url: "{{ url('/books') }}",
                    method: 'post',
                    data: {
                        name: $('#name').val(),
                        auther_name: $('#auther_name').val(),
                        description: $('#description').val(),
                    },
                    success: function(result){
                        if(result.errors)
                        {
                            $('.alert-danger').html('');

                            $.each(result.errors, function(key, value){
                                $('.alert-danger').show();
                                $('.alert-danger').append('<li>'+value+'</li>');
                            });
                        }
                        else
                        {
                            $('.alert-danger').hide();
                            $('#exampleModal').modal('hide');
                        }
                    }
                });
            });
        });
    </script> --}}

</body>

</html>