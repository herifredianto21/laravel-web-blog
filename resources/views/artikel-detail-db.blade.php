@extends('index')
@section('template.header')
@section('content')

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
            <h2>Details Article</h2> 
            <p><a href="{{ url('/') }}" style="color: black;"> Home </a>  &nbsp; &nbsp;  > &nbsp; &nbsp; <strong> Detail artikel</strong> </p>
        </div>
        
    </div><!-- End Breadcrumbs -->

    <section class="section blog-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-12 mb-5">
                            <div class="single-blog-item">
                                <img src="images/blog/blog-1.jpg" alt="" class="img-fluid">

                                <div class="blog-item-content mt-5">
                                    <div class="blog-item-meta mb-3">
                                        <span class="text-muted text-capitalize mr-3"><i class="icofont-comment mr-2"></i>5 Comments</span>
                                        <span class="text-black text-capitalize mr-3"><i class="icofont-calendar mr-2"></i> 28th January 2019</span>
                                        
                                        <span class="text-color-2 text-capitalize mr-3" style="margin-left: 465px;"><i class="icofont-book-mark mr-2"></i> Total View : {{ $artikel->total_views }}</span>
                                    </div> 

                                    <h2 class="mb-4 text-md"><a href="blog-single.html">{{ $artikel->judul }}</a></h2>

                                    <p class="lead mb-4">asdansdkjasn asdna nka nklajnsd asdnaj dn akndkasnd  njand andjkan dkajs lasd jndaks ndjas!</p>

                                    <p style="text-align: justify;">{{ $artikel->isi_artikel }}</p>

                                    <blockquote class="quote">
                                        Lalu, bagaimana jika ginjal rusak ? 
                                    </blockquote>

                                    
                                    <p class="lead mb-4 font-weight-normal text-black">Apabila ginjal mengalami kerusakan, maka organ tubuh yang lain pun akan merasakan dampaknya.</p>

                                    <p style="text-align: justify;">{{ $artikel->isi_artikel }}</p>

                                    <div class="mt-5 clearfix">
                                        <ul class="float-left list-inline tag-option"> 
                                            <li class="list-inline-item"><a href="#">{{ $artikel->tagar }}</a></li>
                                        </ul>        

                                        <ul class="float-right list-inline">
                                            <li class="list-inline-item"> Share: </li>
                                            <li class="list-inline-item"><a href="#" target="_blank"><i class="icofont-facebook" aria-hidden="true"></i></a></li>
                                            <li class="list-inline-item"><a href="#" target="_blank"><i class="icofont-twitter" aria-hidden="true"></i></a></li>
                                            <li class="list-inline-item"><a href="#" target="_blank"><i class="icofont-pinterest" aria-hidden="true"></i></a></li>
                                            <li class="list-inline-item"><a href="#" target="_blank"><i class="icofont-linkedin" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="comment-area mt-4 mb-5">
                                <h4 class="mb-4">1 Comments on Healthy environment... </h4>
                                <ul class="comment-tree list-unstyled">
                                    <li class="mb-5">
                                        <div class="comment-area-box">
                                            <div class="comment-thumb float-left">
                                                <img alt="" src="images/blog/testimonial1.jpg" class="img-fluid">
                                            </div>

                                            <div class="comment-info">
                                                <h5 class="mb-1">Slamet Ryanto Nugroho</h5>
                                                <span>Purbalingga</span>
                                                <span class="date-comm">| Posted April 22, 2022</span>
                                            </div>
                                            <div class="comment-meta mt-2">
                                                <a href="#"><i class="icofont-reply mr-2 text-muted"></i>Reply</a>
                                            </div>

                                            <div class="comment-content mt-3">
                                                <p>Apakah perlu cuci darah seumur hidup bagi pengidap gagal ginjal ?  </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>


                        <div class="col-lg-12">
                            <form class="comment-form my-5" id="comment-form">
                                <h4 class="mb-4">Write a comment</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="name" id="name" placeholder="Name:">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="mail" id="mail" placeholder="Email:">
                                        </div>
                                    </div>
                                </div>

                                <br>
                                <textarea class="form-control mb-4" name="comment" id="comment" cols="30" rows="5" placeholder="Comment"></textarea>

                                <input class="btn btn-main-2 btn-round-full" type="submit" name="submit-contact" id="submit_contact" value="Submit Message">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-wrap pl-lg-4 mt-5 mt-lg-0">
                        <div class="sidebar-widget search  mb-3 ">
                            <h5>Search Here</h5>
                            <form action="#" class="search-form">
                                <input type="text" class="form-control" placeholder="search">
                                <i class="ti-search"></i>
                            </form>
                        </div>


                        <div class="sidebar-widget latest-post mb-3">
                            <h5>Popular Posts</h5>

                            @if(isset($post_art))
                                @foreach ($post_art as $post_arts)
                                <div class="py-2">
                                    <span class="text-sm text-muted">{{ $post_arts->created_at }}</span>
                                    <h6 class="my-2"><a href="{{ url('artikel-detail/'.$post_arts->id) }}">{{ $post_arts->judul }}</a></h6>
                                </div>
                                @endforeach
                                @endif
                            {{-- <div class="py-2">
                                <span class="text-sm text-muted">21 April 2022</span>
                                <h6 class="my-2"><a href="#">Nobel untuk transplantasi ginjal sukses pertama di dunia</a></h6>
                            </div>

                            <div class="py-2">
                                <span class="text-sm text-muted">21 April 2022</span>
                                <h6 class="my-2"><a href="#">Bahaya merokok yang mengakibatkan resiko terkena penyakit gagal ginjal</a></h6>
                            </div> --}}
                        </div>

                        <div class="sidebar-widget category mb-3">
                            <h5 class="mb-4">Categories</h5>

                            <ul class="list-unstyled">
                            <li class="align-items-center">
                                <a href="#">Medicine</a>
                                <span>(14)</span>
                            </li>
                            <li class="align-items-center">
                                <a href="#">Equipments</a>
                                <span>(2)</span>
                            </li>
                            <li class="align-items-center">
                                <a href="#">Heart</a>
                                <span>(10)</span>
                            </li>
                            <li class="align-items-center">
                                <a href="#">Free counselling</a>
                                <span>(5)</span>
                            </li>
                            <li class="align-items-center">
                                <a href="#">Lab test</a>
                                <span>(5)</span>
                            </li>
                            </ul>
                        </div>


                        <div class="sidebar-widget tags mb-3">
                            <h5 class="mb-4">Tags</h5>

                            <a href="#">Ginjal</a>
                            <a href="#">TransplantasiGinjal </a>
                            <a href="#">TransaksiGinjalIlegal</a>
                            <a href="#">JualGinjal</a>
                            <a href="#">CuciDarah</a>
                            <a href="#">KenaliPenyebabGagalGinjal</a>
                            <a href="#">KontroversiJualGinjal</a>
                            <a href="#">PengobatanAlaIbnuSina</a>
                            <a href="#">OknumJualGinjal</a>
                        </div>


                        <div class="sidebar-widget schedule-widget mb-3">
                            <h5 class="mb-4">Time Schedule</h5>

                            <ul class="list-unstyled">
                            <li class="d-flex justify-content-between align-items-center">
                                <a href="#">Monday - Friday</a>
                                <span>9:00 - 17:00</span>
                            </li>
                            <li class="d-flex justify-content-between align-items-center">
                                <a href="#">Saturday</a>
                                <span>9:00 - 16:00</span>
                            </li>
                            <li class="d-flex justify-content-between align-items-center">
                                <a href="#">Sunday</a>
                                <span>Closed</span>
                            </li>
                            </ul>

                            <div class="sidebar-contatct-info mt-4">
                                <p class="mb-0">Need Urgent Help?</p>
                                <h3>+23-4565-65768</h3>
                            </div>
                        </div>

                    </div>
                </div>   
            </div>
        </div>
    </section>

@endsection