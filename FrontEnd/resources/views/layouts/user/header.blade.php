<header class="position-absolute w-100">
       <div class="gradient-5 text-white fw-bold fs-15 mb-2 position-relative" style="z-index: 1;">
         
         <!-- /.container -->
       </div>
       <nav class="navbar navbar-expand-lg center-nav transparent navbar-light">
         <div class="container flex-lg-row flex-nowrap align-items-center">
           <div class="navbar-brand w-100">
             <a href="{{route('home')}}">
               <img src="{{asset('assets/img/logo-dark.png')}}" srcset="{{asset('assets/img/logo-dark.png 1x')}}" alt="logo" />
             </a>
           </div>
           <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
             <div class="offcanvas-header d-lg-none">
               <h3 class="text-white fs-30 mb-0">Sandbox</h3>
               <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
             </div>
             <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
               <ul class="navbar-nav">
                 <li class="nav-item dropdown dropdown-mega">
                   <a class="nav-link" href="{{route('home')}}">Beranda</a>                   
                 </li>
                 <li class="nav-item dropdown">
                   <a class="nav-link " href="#" data-bs-toggle="dropdown">Jemaat</a>
                   <ul class="dropdown-menu">                     
                     <li class="nav-item"><a class="dropdown-item" href="{{route('jemaat')}}">Data Jemaat</a></li>
                     <li class="nav-item"><a class="dropdown-item" href="{{route('pengurus')}}">Data Pengurus</a></li>
                     <li class="nav-item"><a class="dropdown-item" href="{{route('distrik')}}">Data Distrik</a></li>
                     <li class="nav-item"><a class="dropdown-item" href="{{route('keuangan')}}">Data Keuangan</a></li>
                   </ul>
                 </li>
                 <li class="nav-item dropdown">
                  <a class="nav-link "href="{{route('ibadah.index')}}" >Jadwal</a>                 
                </li>
                 
                 <li class="nav-item dropdown">
                   <a class="nav-link" href="#" data-bs-toggle="dropdown">Pendaftaran</a>
                   <ul class="dropdown-menu">
                     <li class="nav-item"><a class="dropdown-item" href="{{route('tardidi')}}">Tardidi</a></li>
                     <li class="nav-item"><a class="dropdown-item" href="{{route('malua')}}">Malua/Sidi</a></li>
                     <li class="nav-item"><a class="dropdown-item" href="{{route('menikah')}}">Menikah</a></li>
                     
                   </ul>
                 </li>
                 <li class="nav-item dropdown dropdown-mega">
                   <a class="nav-link" href="{{route('about')}}" >Tentang</a>                   
                 </li>
                 <li class="nav-item dropdown dropdown-mega">
                   <a class="nav-link" href="{{route('pengumuman')}}" >Pengumuman</a>                                      
                 </li>
               </ul>
               <!-- /.navbar-nav -->
               <div class="offcanvas-footer d-lg-none">
                 <div>
                   <a href="cdn-cgi/l/email-protection.html#f19798838285df9d908285b1949c90989ddf929e9c" class="link-inverse"><span class="__cf_email__" data-cfemail="264f48404966434b474f4a0845494b">[email&#160;protected]</span></a>
                   <br /> 00 (123) 456 78 90 <br />
                   <nav class="nav social social-white mt-4">
                     <a href="#"><i class="uil uil-twitter"></i></a>
                     <a href="#"><i class="uil uil-facebook-f"></i></a>
                     <a href="#"><i class="uil uil-dribbble"></i></a>
                     <a href="#"><i class="uil uil-instagram"></i></a>
                     <a href="#"><i class="uil uil-youtube"></i></a>
                   </nav>
                   <!-- /.social -->
                 </div>
               </div>
               <!-- /.offcanvas-footer -->
             </div>
             <!-- /.offcanvas-body -->
           </div>
           <!-- /.navbar-collapse -->
           <div class="navbar-other w-100 d-flex ms-auto">
             
             <!-- /.navbar-nav -->
           </div>
           <!-- /.navbar-other -->
         </div>
         <!-- /.container -->
       </nav>
       <!-- /.navbar -->
</header>