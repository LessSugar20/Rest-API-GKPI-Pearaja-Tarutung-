<div class="sidebar sidebar-dark sidebar-main sidebar-expand-lg">

       <!-- Sidebar content -->
       <div class="sidebar-content">

              <!-- Sidebar header -->
              <div class="sidebar-section">
                     <div class="sidebar-section-body d-flex justify-content-center">
                            <h5 class="sidebar-resize-hide flex-grow-1 my-auto">Navigation Bar</h5>

                            <div>
                                   <button type="button" class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
                                          <i class="ph-arrows-left-right"></i>
                                   </button>

                                   <button type="button" class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-mobile-main-toggle d-lg-none">
                                          <i class="ph-x"></i>
                                   </button>
                            </div>
                     </div>
              </div>
              <!-- /sidebar header -->


              <!-- Main navigation -->
              <div class="sidebar-section">
                     <ul class="nav nav-sidebar" data-nav-type="accordion">
                            @hasrole('admin')
                            <!-- Main -->
                            <li class="nav-item-header pt-0">
                                   <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Main</div>
                                   <i class="ph-dots-three sidebar-resize-show"></i>
                            </li>
                            <li class="nav-item">
                                   <a href="{{url('admin/')}}" class="nav-link {{Request::is('admin') ? 'active' : ''}}">
                                          <i class="ph-house"></i>
                                          <span>
                                                 Dashboard                                                
                                          </span>
                                   </a>
                            </li>
                            <li class="nav-item nav-item-submenu {{Request::is('admin/jemaat/jemaat', 'admin/jemaat/pengurus', 'admin/jemaat/distrik', 'admin/jemaat/pengumuman', 'admin/jemaat/jadwal','admin/jemaat/keuangan') ? 'nav-item-open' : ''}}">
                                   <a href="#" class="nav-link">
                                          <i class="ph-user-circle-gear"></i>
                                          <span>Jemaat</span>
                                   </a>
                                   <ul class="nav-group-sub collapse {{Request::is('admin/jemaat/jemaat', 'admin/jemaat/pengurus', 'admin/jemaat/distrik', 'admin/jemaat/pengumuman', 'admin/jemaat/jadwal','admin/jemaat/keuangan') ? 'show' : ''}}">
                                          <li class="nav-item"><a href="{{url('admin/jemaat/jemaat')}}" class="nav-link {{Request::is('admin/jemaat/jemaat') ? 'active' : ''}}"><i class="ph-users-three"></i>Data Jemaat</a></li>
                                          <li class="nav-item"><a href="{{url('admin/jemaat/pengurus')}}" class="nav-link {{Request::is('admin/jemaat/pengurus') ? 'active' : ''}}""><i class="ph-user-gear"></i>Data Pengurus</a></li>
                                          <li class="nav-item"><a href="{{url('admin/jemaat/distrik')}}" class="nav-link {{Request::is('admin/jemaat/distrik') ? 'active' : ''}}""><i class="ph-map-pin-line"></i>Data Distrik</a></li>
                                          <li class="nav-item"><a href="{{url('admin/jemaat/keuangan')}}" class="nav-link {{Request::is('admin/jemaat/keuangan') ? 'active' : ''}}""><i class="ph-coins"></i>Data Keuangan</a></li>
                                          <li class="nav-item"><a href="{{url('admin/jemaat/pengumuman')}}" class="nav-link {{Request::is('admin/jemaat/pengumuman') ? 'active' : ''}}""><i class="ph-newspaper"></i>Pengumuman</a></li>                                          
                                          <li class="nav-item"><a href="{{url('admin/jemaat/jadwal')}}" class="nav-link {{Request::is('admin/jemaat/jadwal') ? 'active' : ''}}""><i class="ph-clock"></i>Jadwal</a></li>                                          
                                   </ul>
                            </li>
                            <li class="nav-item nav-item-submenu {{Request::is('admin/pendaftaran/tardidi', 'admin/pendaftaran/malua','admin/pendaftaran/menikah') ? 'active' : ''}}">
                                   <a href="#" class="nav-link">
                                          <i class="ph-file-plus"></i>
                                          <span>Pendaftaran</span>
                                   </a>
                                   <ul class="nav-group-sub collapse {{Request::is('admin/pendaftaran/tardidi', 'admin/pendaftaran/malua','admin/pendaftaran/menikah') ? 'show' : ''}}">
                                          <li class="nav-item"><a href="{{url('admin/pendaftaran/tardidi')}}" class="nav-link {{Request::is('admin/pendaftaran/tardidi') ? 'active' : ''}}""><i class="ph-notebook"></i>Tardidi</a></li>
                                          <li class="nav-item"><a href="{{url('admin/pendaftaran/malua')}}" class="nav-link {{Request::is('admin/pendaftaran/malua') ? 'active' : ''}}""><i class="ph-notebook"></i>Malua/Sidi</a></li>
                                          <li class="nav-item"><a href="{{url('admin/pendaftaran/menikah')}}" class="nav-link {{Request::is('admin/pendafatan/menikah') ? 'active' : ''}}""><i class="ph-notebook"></i>Menikah</a></li>
                                   </ul>
                            </li>
                            <li class="nav-item">
                                   <a href="{{url('admin/ayat')}}" class="nav-link {{Request::is('admin/ayat') ? 'active' : ''}}"">
                                          <i class="ph-quotes"></i>
                                          <span>Ayat Harian</span>
                                         
                                   </a>
                            </li>
                            
                            <li class="nav-item">
                                   <a href="{{url('admin/akun')}}" class="nav-link {{Request::is('admin/akun') ? 'active' : ''}}"">
                                          <i class="ph-user-list"></i>
                                          <span>Akun</span>
                                          
                                   </a>
                            </li>  
                            @else
                            <!-- Main -->
                            <li class="nav-item-header pt-0">
                                   <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Main</div>
                                   <i class="ph-dots-three sidebar-resize-show"></i>
                            </li>
                            <li class="nav-item">
                                   <a href="{{url('sek/')}}" class="nav-link {{Request::is('sek') ? 'active' : ''}}">
                                          <i class="ph-house"></i>
                                          <span>
                                                 Dashboard                                                
                                          </span>
                                   </a>
                            </li>
                            <li class="nav-item nav-item-submenu {{Request::is('sek/jemaat/jemaat', 'sek/jemaat/pengurus', 'sek/jemaat/distrik', 'sek/jemaat/pengumuman', 'sek/jemaat/jadwal','sek/jemaat/keuangan') ? 'nav-item-open' : ''}}">
                                   <a href="#" class="nav-link">
                                          <i class="ph-user-circle-gear"></i>
                                          <span>Jemaat</span>
                                   </a>
                                   <ul class="nav-group-sub collapse {{Request::is('sek/jemaat/jemaat', 'sek/jemaat/pengurus', 'sek/jemaat/distrik', 'sek/jemaat/pengumuman', 'sek/jemaat/jadwal','sek/jemaat/keuangan') ? 'show' : ''}}">
                                          <li class="nav-item"><a href="{{url('sek/jemaat/jemaat')}}" class="nav-link {{Request::is('sek/jemaat/jemaat') ? 'active' : ''}}"><i class="ph-users-three"></i>Data Jemaat</a></li>
                                          <li class="nav-item"><a href="{{url('sek/jemaat/pengurus')}}" class="nav-link {{Request::is('sek/jemaat/pengurus') ? 'active' : ''}}""><i class="ph-user-gear"></i>Data Pengurus</a></li>
                                          <li class="nav-item"><a href="{{url('sek/jemaat/distrik')}}" class="nav-link {{Request::is('sek/jemaat/distrik') ? 'active' : ''}}""><i class="ph-map-pin-line"></i>Data Distrik</a></li>
                                          <li class="nav-item"><a href="{{url('sek/jemaat/keuangan')}}" class="nav-link {{Request::is('sek/jemaat/keuangan') ? 'active' : ''}}""><i class="ph-coins"></i>Data Keuangan</a></li>
                                          <li class="nav-item"><a href="{{url('sek/jemaat/pengumuman')}}" class="nav-link {{Request::is('sek/jemaat/pengumuman') ? 'active' : ''}}""><i class="ph-newspaper"></i>Pengumuman</a></li>                                          
                                          <li class="nav-item"><a href="{{url('sek/jemaat/jadwal')}}" class="nav-link {{Request::is('sek/jemaat/jadwal') ? 'active' : ''}}""><i class="ph-clock"></i>Jadwal</a></li>                                          
                                   </ul>
                            </li>
                            <li class="nav-item nav-item-submenu {{Request::is('sek/pendaftaran/tardidi', 'sek/pendaftaran/malua','sek/pendaftaran/menikah') ? 'active' : ''}}">
                                   <a href="#" class="nav-link">
                                          <i class="ph-file-plus"></i>
                                          <span>Pendaftaran</span>
                                   </a>
                                   <ul class="nav-group-sub collapse {{Request::is('sek/pendaftaran/tardidi', 'sek/pendaftaran/malua','sek/pendaftaran/menikah') ? 'show' : ''}}">
                                          <li class="nav-item"><a href="{{url('sek/pendaftaran/tardidi')}}" class="nav-link {{Request::is('sek/pendaftaran/tardidi') ? 'active' : ''}}""><i class="ph-notebook"></i>Tardidi</a></li>
                                          <li class="nav-item"><a href="{{url('sek/pendaftaran/malua')}}" class="nav-link {{Request::is('sek/pendaftaran/malua') ? 'active' : ''}}""><i class="ph-notebook"></i>Malua/Sidi</a></li>
                                          <li class="nav-item"><a href="{{url('sek/pendaftaran/menikah')}}" class="nav-link {{Request::is('sek/pendafatan/menikah') ? 'active' : ''}}""><i class="ph-notebook"></i>Menikah</a></li>
                                   </ul>
                            </li>
                            <li class="nav-item">
                                   <a href="{{url('sek/ayat')}}" class="nav-link {{Request::is('sek/ayat') ? 'active' : ''}}"">
                                          <i class="ph-quotes"></i>
                                          <span>Ayat Harian</span>
                                         
                                   </a>
                            </li>                           
                            @endhasrole

                     </a>                   
              </div>
              <!-- /main navigation -->

       </div>
       <!-- /sidebar content -->
       
</div>