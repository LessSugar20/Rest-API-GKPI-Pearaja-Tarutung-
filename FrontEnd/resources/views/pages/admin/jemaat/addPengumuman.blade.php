@extends('layouts.admin.master')
@section('title', 'Dashboard')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js" integrity="sha512-lbwH47l/tPXJYG9AcFNoJaTMhGvYWhVM9YI43CT+uteTRRaiLCui8snIgyAN8XWgNjNhCqlAUdzZptso6OCoFQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@section('content')
<!-- Main content -->
<div class="content-wrapper">

       <!-- Inner content -->
       <div class="content-inner">

              <!-- Page header -->
              <div class="page-header page-header-light shadow">
                     <div class="page-header-content d-lg-flex">
                            

                            
                     </div>

                     <div class="page-header-content d-lg-flex border-top py-1">
                            <div class="d-flex">
                                   <div class="breadcrumb py-2">
                                        @hasrole('admin')
								<a href="{{url('admin/')}}" class="breadcrumb-item"><i class="ph-house"></i></a>
								@else
								<a href="{{url('sek/')}}" class="breadcrumb-item"><i class="ph-house"></i></a>
								@endhasrole
                                          <span href="#" class="breadcrumb-item">Jemaat</span>
                                          <span class="breadcrumb-item active">Pengumuman</span>
                                          <span class="breadcrumb-item active">Tambah Pengumuman</span>
                                   </div>

                                   <a href="#breadcrumb_elements" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
                                          <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                                   </a>
                            </div>

                            <div class="collapse d-lg-block ms-lg-auto" id="breadcrumb_elements">
                                   <div class="d-lg-flex mb-2 mb-lg-0">
                                                 
                                   </div>
                            </div>
                     </div>
              </div>
              <!-- /page header -->


              <!-- Content area -->
              <div class="content">

                     <!-- Main charts -->
                     <div class="row">
                            <div class="col-xl-7">

                            </div>
                            
                            <div class="col-xl-5">
                                   
                            </div>
                     </div>
                     <!-- /main charts -->
                     
                     

                     <!-- Dashboard content -->
                     <div class="card">
                         <div class="card-header">
                              <h5 class="mb-0">Tambah Jemaat</h5>
                         </div>                        

                         <div class="card-body border-top">
                              <form action="#">
                                   <div class="mb-3">
                                        <label class="form-label">Name:</label>
                                        <input type="text" class="form-control" placeholder="Eugene Kopyov">
                                   </div>

                                   <div class="mb-3">
                                        <label class="form-label">Password:</label>
                                        <input type="password" class="form-control" placeholder="Your strong password">
                                   </div>

                                   <div class="mb-3">
                                        <label class="form-label">Your state:</label>
                                        <select class="form-control form-control-select2">
                                             <optgroup label="Alaskan/Hawaiian Time Zone">
                                                  <option value="AK">Alaska</option>
                                                  <option value="HI">Hawaii</option>
                                             </optgroup>
                                             <optgroup label="Pacific Time Zone">
                                                  <option value="CA">California</option>
                                                  <option value="NV">Nevada</option>
                                                  <option value="WA">Washington</option>
                                             </optgroup>
                                             <optgroup label="Mountain Time Zone">
                                                  <option value="AZ">Arizona</option>
                                                  <option value="CO">Colorado</option>
                                                  <option value="WY">Wyoming</option>
                                             </optgroup>
                                             <optgroup label="Central Time Zone">
                                                  <option value="AL">Alabama</option>
                                                  <option value="AR">Arkansas</option>
                                                  <option value="KY">Kentucky</option>
                                             </optgroup>
                                             <optgroup label="Eastern Time Zone">
                                                  <option value="CT">Connecticut</option>
                                                  <option value="DE">Delaware</option>
                                                  <option value="FL">Florida</option>
                                             </optgroup>
                                        </select>
                                   </div>

                                   <div class="mb-3">
                                        <label class="form-label">Gender:</label>
                                        <div>
                                             <label class="form-check form-check-inline">
                                                  <input type="radio" class="form-check-input" name="gender" checked>
                                                  <span class="form-check-label">Male</span>
                                             </label>

                                             <label class="form-check form-check-inline">
                                                  <input type="radio" class="form-check-input" name="gender">
                                                  <span class="form-check-label">Female</span>
                                             </label>
                                        </div>
                                   </div>

                                   <div class="mb-3">
                                        <label class="form-label">Your avatar:</label>
                                        <input type="file" class="form-control">
                                        <div class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</div>
                                   </div>

                                   <div class="mb-3">
                                        <label class="form-label">Your message:</label>
                                        <textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
                                   </div>

                                   <div class="text-end">
                                        <button type="submit" class="btn btn-primary">Submit form <i class="ph-paper-plane-tilt ms-2"></i></button>
                                   </div>
                              </form>
                         </div>
                    </div>
                     <!-- /dashboard content -->

              </div>
              <!-- /content area -->


              <!-- Footer -->
              <div class="navbar navbar-sm navbar-footer border-top">
               <div class="container-fluid">
                    <span>&copy; 2023 HKBP Pearaja Tarutung</span>
                    
               </div>
          </div>
              <!-- /footer -->

       </div>
       <!-- /inner content -->

</div>
@endsection
<!-- /main content -->
<script>
       @if(session()->has('success'))
       toastr.options = {
           "closeButton": true
       }
       toastr.success("{{ session()->get('success') }}")
       @endif
</script>