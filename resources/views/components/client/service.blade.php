<section id="services" class="services">
            <div class="container">

                <div class="section-title">
                    <h2>Informasi Dan Layanan</h2>
                    <p>Informasi Dan Layanan Dari Sekolah Kami</p>
                </div>

                <div class="row">
                    <div class="content col-xl-5 d-flex flex-column justify-content-center">
                        <img src="{{asset('cln/assets/img/services.png')}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-xl-7">
                        <div class="icon-boxes d-flex flex-column ">
                            <div class="row">
                            
                                @foreach($info as $i)
                                <div class="col-lg-6 mt-5 mt-lg-4" data-aos="zoom-in"
                                    data-aos-delay="200">
                                    <div class="icon-box iconbox-orange ">
                                        <div class="icon">
                                            <svg width="100" height="100" viewBox="0 0 600 600"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                                    d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426">
                                                </path>
                                            </svg>
                                            <i class="bx bx-file"></i>
                                        </div>
                                        <h4><a href="">{{$i->judul}}</a></h4>
                                        <a href="{{route('baca_info', $i->slug_info)}}" class="link">Baca Selengkapnya <i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                                @endforeach
                                

                            </div>
                            <div class="row">
                                <div class="col-md-12 mt-3 d-flex flex-column">
                                    <a href="{{route('selengkapnya')}}" class="btn btn-outline-info shadow-sm" style="border-radius: 50px; background-color: white; border-color:#5A5AF3; color:#5A5AF3">Info Selengkapnya</a>
                                </div>
                            </div>
                        </div><!-- End .content-->
                    </div>
                </div>

            </div>
        </section><!-- End Services Section -->
