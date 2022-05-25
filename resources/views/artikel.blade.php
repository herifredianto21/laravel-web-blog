@extends('index')
@section('template.header')
@section('content')

    <main id="main" data-aos="fade-in">
        
        <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in" style="margin-bottom: -80px; ">
        <div class="container">
            <h2>Articles</h2> 
            <p><a href="{{ url('/') }}" style="color: black;"> Home </a>  &nbsp; &nbsp;  > &nbsp; &nbsp; <strong> Articles </strong> </p>
        </div>
        
    </div><!-- End Breadcrumbs -->

        <section class="section blog-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row" data-aos="fade-right">
                            @if(isset($artikel))
                                @foreach ($artikel as $artikels)
                                    <div class="col-lg-6 col-md-6 mb-5">
                                        <div class="blog-item">
                                            <div class="blog-thumb">
                                                <img src="assets_website/img/blog/blog-6.jpg" title="" alt="" class="img-fluid ">
                                            </div>
                                            <div class="blog-item-content">
                                                <div class="blog-item-meta mb-3 mt-4">
                                                    {{-- <span class="text-muted text-capitalize mr-3"><i class="icofont-comment mr-2"></i>5 Comments</span> --}}
                                                    {{-- <span class="text-black text-capitalize mr-3"><i class="icofont-calendar mr-1"></i> {{ $artikelss->created_at->format('d-m-Y') }}</span> --}}
                                                    <span class="text-black text-capitalize mr-3"><i class="icofont-user mr-2"></i>{{ $artikels['nama_pegawai'] }}</span> &nbsp
                                                    <span class="text-muted text-capitalize mr-3"><i class="icofont-calendar mr-1"></i>{{ $artikels['created_at'] }}</span>
                                                </div> 
                                                <h1 class="mt-3 mb-3" style="font-size: 20px;"><a href="{{ url('artikel-detail/'.$artikels['slug']) }}">{{ $artikels['judul'] }}</a></h1>
                                                <!--<p class="mb-4" style="font-size: 15px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis aliquid architecto facere commodi cupiditate omnis voluptatibus inventore atque velit cum rem id assumenda quam recusandae ipsam ea porro, dicta ad.</p>-->
                                                <a href="{{ url('artikel-detail/'.$artikels['id']) }}" class="btn btn-main btn-icon btn-round-full">Read More <i class="icofont-simple-right ml-2  "></i></a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <nav class="pagination py-2 d-inline-block" data-aos="fade-right">
                            {{-- {{ $artikel->links('custome')}} --}}
                        </nav>
                    </div>
                    <div class="col-lg-4" data-aos="fade-left">
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
                                            <span class="text-sm text-muted">{{ $post_arts->created_at->format('d-m-Y') }}</span>
                                            <h6 class="my-2" style="
                                            font-weight: 700;
                                            line-height: 1.3;
                                            margin-bottom: 0px;
                                            color: #000;"><a href="{{ url('artikel-detail/'.$post_arts->id) }}">{{ $post_arts->judul }}</a></h6>
                                        </div>
                                    @endforeach
                                @endif

                                {{-- <div class="py-2">
                                    <span class="text-sm text-muted">03 Mar 2018</span>
                                    <h6 class="my-2"><a href="#">Vivamus molestie gravida turpis.</a></h6>
                                </div>
        
                                <div class="py-2">
                                    <span class="text-sm text-muted">03 Mar 2018</span>
                                    <h6 class="my-2"><a href="#">Fusce lobortis lorem at ipsum semper sagittis</a></h6>
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
                                @if(isset($post_art))
                                    @foreach ($post_art as $post_arts)
                                        <a href="#">{{ $post_arts->tagar}}</a>
                                    @endforeach
                                @endif
                                {{-- <a href="#">TransplantasiGinjal </a>
                                <a href="#">TransaksiGinjalIlegal</a>
                                <a href="#">JualGinjal</a>
                                <a href="#">CuciDarah</a>
                                <a href="#">KenaliPenyebabGagalGinjal</a>
                                <a href="#">KontroversiJualGinjal</a>
                                <a href="#">PengobatanAlaIbnuSina</a>
                                <a href="#">OknumJualGinjal</a> --}}
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
        
                {{-- <div class="row mt-5">
                    <div class="col-lg-8">
                        <nav class="pagination py-2 d-inline-block">
                            <div class="nav-links">
                                <span aria-current="page" class="page-numbers current">1</span>
                                <a class="page-numbers" href="#">2</a>
                                <a class="page-numbers" href="#">3</a>
                                <a class="page-numbers" href="#"><i class="icofont-thin-double-right"></i></a>
                            </div>
                        </nav>
                    </div>
                </div> --}}
            </div>
        </section>

    </main><!-- End #main -->

@endsection