@extends('layouts.user.master')
@section('title', 'Dashboard')
@section('content')
    <section class="wrapper overflow-hidden">
      <div class="container pt-19 pt-md-21 pb-16 pb-md-18 text-center position-relative">
        <div class="position-absolute" style="top: -12%; left: 50%; transform: translateX(-50%);" data-cue="fadeIn"><img src="{{asset('assets/img/photos/blurry.png')}}" alt=""></div>
        <div class="row position-relative">
          <div class="col-lg-8 col-xxl-7 mx-auto position-relative">
            <div class="position-absolute shape grape w-5 d-none d-lg-block" style="top: -5%; left: -15%;" data-cue="fadeIn" data-delay="1500"><img src="{{asset('assets/img/svg/pie.svg')}}" class="svg-inject icon-svg w-100 h-100" alt="" /></div>
            <div class="position-absolute shape violet w-10 d-none d-lg-block" style="bottom: 30%; left: -20%;" data-cue="fadeIn" data-delay="1500"><img src="{{asset('assets/img/svg/scribble.svg')}}" class="svg-inject icon-svg w-100 h-100" alt="" /></div>
            <div class="position-absolute shape fuchsia w-6 d-none d-lg-block" style="top: 0%; right: -25%; transform: rotate(70deg);" data-cue="fadeIn" data-delay="1500"><img src="{{asset('assets/img/svg/tri.svg')}}" class="svg-inject icon-svg w-100 h-100" alt="" /></div>
            <div class="position-absolute shape yellow w-6 d-none d-lg-block" style="bottom: 25%; right: -17%;" data-cue="fadeIn" data-delay="1500"><img src="{{asset('assets/img/svg/circle.svg')}}" class="svg-inject icon-svg w-100 h-100" alt="" /></div>
            <div data-cues="slideInDown" data-group="page-title">
              @foreach ($ayat as $a)
              <h1 class="display-1 fs-64 mb-5 mx-md-10 mx-lg-0">{{ \Carbon\Carbon::parse($a->tanggal)->isoFormat('D MMMM Y') }} <br /><span class="rotator-fade text-primary">{{ucfirst($a->kitab)}}, Pasal {{$a->pasal}}, Ayat {{$a->ayat}} , {{ucfirst($a->kitab)}} {{$a->pasal}} : {{$a->ayat}}</span></h1>
              <p class="lead fs-24 mb-8">"{{$a->firman}}"</p>
                  
              @endforeach
            </div>
            <div class="d-md-flex justify-content-center" data-cues="slideInDown" data-delay="600">
              <span><a href="#demos" class="btn btn-lg btn-primary btn-icon btn-icon-end rounded-xl mx-md-1 mb-2 mb-md-0 scroll">Tata Ibadah <i class="uil uil-arrow-right"></i></a></span>
            </div>
            <!-- /div -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
      <div class="swiper-container swiper-auto swiper-auto-xs mb-8" data-margin="40" data-nav="false" data-dots="false" data-centered="true" data-loop="true" data-items-auto="true" data-autoplay="true" data-autoplaytime="1" data-drag="false" data-resizeupdate="false" data-speed="7000">
        <div class="swiper overflow-visible pe-none">
          <div class="swiper-wrapper ticker">
            <div class="swiper-slide">
              <figure class="rounded-xl shadow-xl"><img src="{{asset('assets/img/photos/ma8.jpg')}}" srcset="{{asset('assets/img/photos/ma8.jpg 1x')}}" alt="" /></figure>
            </div>
            <div class="swiper-slide">
              <figure class="rounded-xl shadow-xl"><img src="{{asset('assets/img/photos/ma9.jpg')}}" srcset="{{asset('assets/img/photos/ma9.jpg 1x')}}" alt="" /></figure>
            </div>
            <div class="swiper-slide">
              <figure class="rounded-xl shadow-xl"><img src="{{asset('assets/img/photos/ma10.jpg')}}" srcset="{{asset('assets/img/photos/ma10.jpg 1x')}}" alt="" /></figure>
            </div>
            <div class="swiper-slide">
              <figure class="rounded-xl shadow-xl"><img src="{{asset('assets/img/photos/ma11.jpg')}}" srcset="{{asset('assets/img/photos/ma11.jpg 1x')}}" alt="" /></figure>
            </div>
            <div class="swiper-slide">
              <figure class="rounded-xl shadow-xl"><img src="{{asset('assets/img/photos/ma12.jpg')}}" srcset="{{asset('assets/img/photos/ma12.jpg 1x')}}" alt="" /></figure>
            </div>
            <div class="swiper-slide">
              <figure class="rounded-xl shadow-xl"><img src="{{asset('assets/img/photos/ma13.jpg')}}" srcset="{{asset('assets/img/photos/ma13.jpg 1x')}}" alt="" /></figure>
            </div>
            <div class="swiper-slide">
              <figure class="rounded-xl shadow-xl"><img src="{{asset('assets/img/photos/ma14.jpg')}}" srcset="{{asset('assets/img/photos/ma14.jpg 1x')}}" alt="" /></figure>
            </div>
          </div>
          <!--/.swiper-wrapper -->
        </div>
        <!-- /.swiper -->
      </div>
      <!-- /.swiper-container -->
      <div class="swiper-container swiper-auto swiper-auto-xs mb-10 mb-md-12" data-margin="40" data-nav="false" data-dots="false" data-centered="true" data-loop="true" data-items-auto="true" data-autoplay="true" data-autoplaytime="1" data-drag="false" data-resizeupdate="false" data-speed="7000">
        <div class="swiper overflow-visible pe-none" dir="rtl">
          <div class="swiper-wrapper ticker">
            <div class="swiper-slide">
              <figure class="rounded-xl shadow-xl"><img src="assets/img/photos/ma1.jpg" srcset="./assets/img/photos/ma1@2x.jpg 2x" alt="" /></figure>
            </div>
            <div class="swiper-slide">
              <figure class="rounded-xl shadow-xl"><img src="assets/img/photos/ma2.jpg" srcset="./assets/img/photos/ma2@2x.jpg 2x" alt="" /></figure>
            </div>
            <div class="swiper-slide">
              <figure class="rounded-xl shadow-xl"><img src="assets/img/photos/ma3.jpg" srcset="./assets/img/photos/ma3@2x.jpg 2x" alt="" /></figure>
            </div>
            <div class="swiper-slide">
              <figure class="rounded-xl shadow-xl"><img src="assets/img/photos/ma4.jpg" srcset="./assets/img/photos/ma4@2x.jpg 2x" alt="" /></figure>
            </div>
            <div class="swiper-slide">
              <figure class="rounded-xl shadow-xl"><img src="assets/img/photos/ma5.jpg" srcset="./assets/img/photos/ma5@2x.jpg 2x" alt="" /></figure>
            </div>
            <div class="swiper-slide">
              <figure class="rounded-xl shadow-xl"><img src="assets/img/photos/ma6.jpg" srcset="./assets/img/photos/ma6@2x.jpg 2x" alt="" /></figure>
            </div>
            <div class="swiper-slide">
              <figure class="rounded-xl shadow-xl"><img src="assets/img/photos/ma7.jpg" srcset="./assets/img/photos/ma7@2x.jpg 2x" alt="" /></figure>
            </div>
          </div>
          <!--/.swiper-wrapper -->
        </div>
        <!-- /.swiper -->
      </div>
      <!-- /.swiper-container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-soft-primary overflow-hidden" id="demos">
      <div class="container pt-16 pt-mb-18">
        <div class="row mb-10">
          <div class="col-md-9 col-lg-8 col-xl-7 col-xxl-6 mx-auto">
            <div class="counter-wrapper">
              <h3 class="fs-70 mb-3 text-primary text-center counter">34</h3>
            </div>
            <h2 class="display-2 mb-3 text-center mb-0 px-xxl-8">Functional, impressive and rich demos to start with</h2>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="demos-wrapper text-center mb-16 mb-md-18">
          <h2 class="fs-17 text-uppercase text-muted mb-6">New Demos</h2>
          <div class="row mb-10 gx-md-8 gy-12">
            <div class="col-md-6 col-lg-4">
              <figure class="lift rounded-xl mb-6" title='<h5 class="mb-0">Click to see the demo</h5>'><a href="demo18.html" target="_blank"><img class="shadow-xl" src="assets/img/demos/d18.jpg" srcset="./assets/img/demos/d18@2x.jpg 2x" alt="" /></a></figure>
              <h2 class="fs-22 mb-0"><a href="demo18.html" class="link-dark">Layout 18</a></h2>
            </div>
            <!-- /column -->
            <div class="col-md-6 col-lg-4">
              <figure class="lift rounded-xl mb-6" title='<h5 class="mb-0">Click to see the demo</h5>'><a href="demo19.html" target="_blank"><img class="shadow-xl" src="assets/img/demos/d19.jpg" srcset="./assets/img/demos/d19@2x.jpg 2x" alt="" /></a></figure>
              <h2 class="fs-22 mb-0"><a href="demo19.html" class="link-dark">Layout 19</a></h2>
            </div>
            <!-- /column -->
            <div class="col-md-6 col-lg-4">
              <figure class="lift rounded-xl mb-6" title='<h5 class="mb-0">Click to see the demo</h5>'><a href="demo20.html" target="_blank"><img class="shadow-xl" src="assets/img/demos/d20.jpg" srcset="./assets/img/demos/d20@2x.jpg 2x" alt="" /></a></figure>
              <h2 class="fs-22 mb-0"><a href="demo20.html" class="link-dark">Layout 20</a></h2>
            </div>
            <!-- /column -->
            <div class="col-md-6 col-lg-4">
              <figure class="lift rounded-xl mb-6" title='<h5 class="mb-0">Click to see the demo</h5>'><a href="demo21.html" target="_blank"><img class="shadow-xl" src="assets/img/demos/d21.jpg" srcset="./assets/img/demos/d21@2x.jpg 2x" alt="" /></a></figure>
              <h2 class="fs-22 mb-0"><a href="demo21.html" class="link-dark">Layout 21</a></h2>
            </div>
            <!-- /column -->
            <div class="col-md-6 col-lg-4">
              <figure class="lift rounded-xl mb-6" title='<h5 class="mb-0">Click to see the demo</h5>'><a href="demo22.html" target="_blank"><img class="shadow-xl" src="assets/img/demos/d22.jpg" srcset="./assets/img/demos/d22@2x.jpg 2x" alt="" /></a></figure>
              <h2 class="fs-22 mb-0"><a href="demo22.html" class="link-dark">Layout 22</a></h2>
            </div>
            <!-- /column -->
            <div class="col-md-6 col-lg-4">
              <figure class="lift rounded-xl mb-6" title='<h5 class="mb-0">Click to see the demo</h5>'><a href="demo23.html" target="_blank"><img class="shadow-xl" src="assets/img/demos/d23.jpg" srcset="./assets/img/demos/d23@2x.jpg 2x" alt="" /></a></figure>
              <h2 class="fs-22 mb-0"><a href="demo23.html" class="link-dark">Layout 23</a></h2>
            </div>
            <!-- /column -->
            <div class="col-md-6 col-lg-4">
              <figure class="lift rounded-xl mb-6" title='<h5 class="mb-0">Click to see the demo</h5>'><a href="demo24.html" target="_blank"><img class="shadow-xl" src="assets/img/demos/d24.jpg" srcset="./assets/img/demos/d24@2x.jpg 2x" alt="" /></a></figure>
              <h2 class="fs-22 mb-0"><a href="demo24.html" class="link-dark">Layout 24</a></h2>
            </div>
            <!-- /column -->
            <div class="col-md-6 col-lg-4">
              <figure class="lift rounded-xl mb-6" title='<h5 class="mb-0">Click to see the demo</h5>'><a href="demo25.html" target="_blank"><img class="shadow-xl" src="assets/img/demos/d25.jpg" srcset="./assets/img/demos/d25@2x.jpg 2x" alt="" /></a></figure>
              <h2 class="fs-22 mb-0"><a href="demo25.html" class="link-dark">Layout 25</a></h2>
            </div>
            <!-- /column -->
            <div class="col-md-6 col-lg-4">
              <figure class="lift rounded-xl mb-6" title='<h5 class="mb-0">Click to see the demo</h5>'><a href="demo26.html" target="_blank"><img class="shadow-xl" src="assets/img/demos/d26.jpg" srcset="./assets/img/demos/d26@2x.jpg 2x" alt="" /></a></figure>
              <h2 class="fs-22 mb-0"><a href="demo26.html" class="link-dark">Layout 26</a></h2>
            </div>
            <!-- /column -->
            <div class="col-md-6 col-lg-4">
              <figure class="lift rounded-xl mb-6" title='<h5 class="mb-0">Click to see the demo</h5>'><a href="demo27.html" target="_blank"><img class="shadow-xl" src="assets/img/demos/d27.jpg" srcset="./assets/img/demos/d27@2x.jpg 2x" alt="" /></a></figure>
              <h2 class="fs-22 mb-0"><a href="demo27.html" class="link-dark">Layout 27</a></h2>
            </div>
            <!-- /column -->
            <div class="col-md-6 col-lg-4">
              <figure class="lift rounded-xl mb-6" title='<h5 class="mb-0">Click to see the demo</h5>'><a href="demo28.html" target="_blank"><img class="shadow-xl" src="assets/img/demos/d28.jpg" srcset="./assets/img/demos/d28@2x.jpg 2x" alt="" /></a></figure>
              <h2 class="fs-22 mb-0"><a href="demo28.html" class="link-dark">Layout 28</a></h2>
            </div>
            <!-- /column -->
            <div class="col-md-6 col-lg-4">
              <figure class="lift rounded-xl mb-6" title='<h5 class="mb-0">Click to see the demo</h5>'><a href="demo29.html" target="_blank"><img class="shadow-xl" src="assets/img/demos/d29.jpg" srcset="./assets/img/demos/d29@2x.jpg 2x" alt="" /></a></figure>
              <h2 class="fs-22 mb-0"><a href="demo29.html" class="link-dark">Layout 29</a></h2>
            </div>
            <!-- /column -->
            <div class="col-md-6 col-lg-4">
              <figure class="lift rounded-xl mb-6" title='<h5 class="mb-0">Click to see the demo</h5>'><a href="demo30.html" target="_blank"><img class="shadow-xl" src="assets/img/demos/d30.jpg" srcset="./assets/img/demos/d30@2x.jpg 2x" alt="" /></a></figure>
              <h2 class="fs-22 mb-0"><a href="demo30.html" class="link-dark">Layout 30</a></h2>
            </div>
            <!-- /column -->
            <div class="col-md-6 col-lg-4">
              <figure class="lift rounded-xl mb-6" title='<h5 class="mb-0">Click to see the demo</h5>'><a href="demo31.html" target="_blank"><img class="shadow-xl" src="assets/img/demos/d31.jpg" srcset="./assets/img/demos/d31@2x.jpg 2x" alt="" /></a></figure>
              <h2 class="fs-22 mb-0"><a href="demo31.html" class="link-dark">Layout 31</a></h2>
            </div>
            <!-- /column -->
            <div class="col-md-6 col-lg-4">
              <figure class="lift rounded-xl mb-6" title='<h5 class="mb-0">Click to see the demo</h5>'><a href="demo32.html" target="_blank"><img class="shadow-xl" src="assets/img/demos/d32.jpg" srcset="./assets/img/demos/d32@2x.jpg 2x" alt="" /></a></figure>
              <h2 class="fs-22 mb-0"><a href="demo32.html" class="link-dark">Layout 32</a></h2>
            </div>
            <!-- /column -->
            <div class="col-md-6 col-lg-4">
              <figure class="lift rounded-xl mb-6" title='<h5 class="mb-0">Click to see the demo</h5>'><a href="demo33.html" target="_blank"><img class="shadow-xl" src="assets/img/demos/d33.jpg" srcset="./assets/img/demos/d33@2x.jpg 2x" alt="" /></a></figure>
              <h2 class="fs-22 mb-0"><a href="demo33.html" class="link-dark">Layout 33</a></h2>
            </div>
            <!-- /column -->
            <div class="col-md-6 col-lg-4">
              <figure class="lift rounded-xl mb-6" title='<h5 class="mb-0">Click to see the demo</h5>'><a href="demo34.html" target="_blank"><img class="shadow-xl" src="assets/img/demos/d34.jpg" srcset="./assets/img/demos/d34@2x.jpg 2x" alt="" /></a></figure>
              <h2 class="fs-22 mb-0"><a href="demo34.html" class="link-dark">Layout 34</a></h2>
            </div>
          </div>
        </div>
        <!-- /.demos-wrapper -->
       
        <!-- /.row -->
      </div>
      <!-- /.container -->
      <div class="container-fluid px-xl-0 pb-16 pb-md-18">
        <div class="swiper-container swiper-auto" data-margin="40" data-nav="false" data-centered="true" data-loop="true" data-items-auto="true">
          <div class="swiper overflow-visible">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <figure class="rounded-xl shadow-xl"><img src="{{asset('assets/img/photos/bp1.jpg')}}" srcset="{{asset('assets/img/photos/bp1.jpg 1x')}}" alt="" /></figure>
              </div>
              <!--/.swiper-slide -->
              <div class="swiper-slide">
                <figure class="rounded-xl shadow-xl"><img src="{{asset('assets/img/photos/bp2.jpg')}}" srcset="{{asset('assets/img/photos/bp2.jpg 1x')}}" alt="" /></figure>
              </div>
              <!--/.swiper-slide -->
              <div class="swiper-slide">
                <figure class="rounded-xl shadow-xl"><img src="{{asset('assets/img/photos/bp3.jpg')}}" srcset="{{asset('assets/img/photos/bp3.jpg 1x')}}" alt="" /></figure>
              </div>
              <!--/.swiper-slide -->
              <div class="swiper-slide">
                <figure class="rounded-xl shadow-xl"><img src="{{asset('assets/img/photos/bp4.jpg')}}" srcset="{{asset('assets/img/photos/bp4.jpg 1x')}}" alt="" /></figure>
              </div>
              <!--/.swiper-slide -->
              <div class="swiper-slide">
                <figure class="rounded-xl shadow-xl"><img src="{{asset('assets/img/photos/bp5.jpg')}}" srcset="{{asset('assets/img/photos/bp5.jpg 1x')}}" alt="" /></figure>
              </div>
              <!--/.swiper-slide -->
              <div class="swiper-slide">
                <figure class="rounded-xl shadow-xl"><img src="{{asset('assets/img/photos/bp6.jpg')}}" srcset="{{asset('assets/img/photos/bp6.jpg 1x')}}" alt="" /></figure>
              </div>
              <!--/.swiper-slide -->
            </div>
            <!--/.swiper-wrapper -->
          </div>
          <!-- /.swiper -->
        </div>
        <!-- /.swiper-container -->
      </div>
      <!-- /.container -->
      <div class="container pb-6 pb-md-8">        
        <!--/.row -->
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
          <div class="col-lg-7 position-relative">
            <div class="position-absolute" style="top: 50%; left: 50%; width: 130%; height: auto; transform: translate(-50%,-50%); z-index:0"><img class="w-100" src="assets/img/photos/blurry.png" alt=""></div>
            <div class="row gx-md-5 gy-5">
              <div class="col-md-6 col-xl-5 align-self-end">
                <div class="card shadow-xl rounded-xl">
                  <div class="card-body">
                    <blockquote class="icon mb-0">
                      <p>“Sandbox is really attractive and it saves my time. The support team is really amazing.”</p>
                      <div class="blockquote-details">
                        <div class="info p-0">
                          <h5 class="mb-0">stevenstrange</h5>
                        </div>
                      </div>
                    </blockquote>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.card -->
              </div>
              <!--/column -->
              <div class="col-md-6 align-self-end">
                <div class="card shadow-xl rounded-xl">
                  <div class="card-body">
                    <blockquote class="icon mb-0">
                      <p>“This is just next level stuff in terms of quality, docs and features. I don't think I'm going to need or tolerate any other template from now on.”</p>
                      <div class="blockquote-details">
                        <div class="info p-0">
                          <h5 class="mb-0">70656e6973</h5>
                        </div>
                      </div>
                    </blockquote>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.card -->
              </div>
              <!--/column -->
              <div class="col-md-6 col-xl-5 offset-xl-1">
                <div class="card shadow-xl rounded-xl">
                  <div class="card-body">
                    <blockquote class="icon mb-0">
                      <p>“I've been a Themeforest user for almost 10 years and I have purchased well over 100 themes during my time. This theme is amongst the best here.”</p>
                      <div class="blockquote-details">
                        <div class="info p-0">
                          <h5 class="mb-0">bmwe92m3</h5>
                        </div>
                      </div>
                    </blockquote>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.card -->
              </div>
              <!--/column -->
              <div class="col-md-6 align-self-start">
                <div class="card shadow-xl rounded-xl">
                  <div class="card-body">
                    <blockquote class="icon mb-0">
                      <p>“Simply the best templates that I have bought so far. Super clean code, intuitive documentations, and most important of all the best design.”</p>
                      <div class="blockquote-details">
                        <div class="info p-0">
                          <h5 class="mb-0">oziuji</h5>
                        </div>
                      </div>
                    </blockquote>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.card -->
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </div>
          <!--/column -->
          <div class="col-lg-4">
            <h2 class="display-2 mb-4 mt-lg-n6">Our top priority is ensuring customer satisfaction.</h2>
            <p class="lead fs-22 mb-6">Don't take our word for it. Hear from customers about Sandbox.</p>
            <a href="https://1.envato.market/Rygn0y" class="btn btn-lg btn-primary btn-icon btn-icon-end rounded-xl" target="_blank">All Reviews <i class="uil uil-arrow-up-right"></i></a>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!--/.container -->
    </section>
    <!-- /section -->
    <!-- /section -->  
@endsection
  
