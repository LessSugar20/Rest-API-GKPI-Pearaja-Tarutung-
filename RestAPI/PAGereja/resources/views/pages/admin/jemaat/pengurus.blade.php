@extends('layouts.admin.master')
@section('title', 'Jemaat')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js" integrity="sha512-lbwH47l/tPXJYG9AcFNoJaTMhGvYWhVM9YI43CT+uteTRRaiLCui8snIgyAN8XWgNjNhCqlAUdzZptso6OCoFQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{asset('assetss/js/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assetss/demo/demo_configurator.js')}}"></script>
<script src="{{asset('assetss/js/app.js')}}"></script>
<script src="{{asset('assetss/js/bootstrap/bootstrap.bundle.min.jss')}}"></script>
<link href="{{asset('assetss/fonts/inter/inter.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('assetss/icons/phosphor/styles.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('assetss/css/all.min.css')}}" id="stylesheet" rel="stylesheet" type="text/css">
<script src="{{asset('assetss/demo/pages/datatables_basic.js')}}"></script>     
<script src="{{asset('assetss/js/vendor/tables/datatables/datatables.min.js')}}"></script>
@section('content')
<!-- Main content -->
{{-- <div class="content-wrapper"> --}}
     <div class="page-content">


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
								<span class="breadcrumb-item active">Data Pengurus</span>
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

					<!-- Basic datatable -->
					<div class="card">
						<div class="card-header row">
							<h5 class="col mt-1 mb-0 text-nowrap">Data Pengurus</h5>
							<div class="col offset-lg-5 text-end ">
								<a href="#" class="btn btn-success text-nowrap">
									  <i class="ph-file-pdf me-2"></i>
									  Lihat Laporan
								</a>
						   	</div>
							   @hasrole('admin')
							   <div class="col mb-0 text-end">
								   <a href="{{url('admin/jemaat/pengurus/create')}}" class="btn btn-info text-nowrap">
									  <i class="ph-plus me-2"></i>
									  Tambah Pengurus
								   </a>
							    </div>
							   @else
							   <div class="col mb-0 text-end">
								   <a href="{{url('sek/jemaat/pengurus/create')}}" class="btn btn-info text-nowrap">
									  <i class="ph-plus me-2"></i>
									  Tambah Pengurus
								   </a>
							    </div>
							   @endhasrole
						</div>

						<table class="table datatable-basic">
							<thead>
								<tr>
									<th>No</th>
									<th class="col-3">Nama Lengkap</th>
									<th>Sektor</th>
									<th>Umur</th>
									<th class="col-2">Jabatan</th>
									<th>Periode</th>
									<th class="text-center col-1">Actions</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Marth</td>
									<td><a href="#">Enright</a></td>
									<td>Traffic Court Referee</td>
									<td>22 Jun 1972</td>
									<td><span class="badge bg-success bg-opacity-10 text-success">Active</span></td>
									<td class="text-center">
										<div class="d-inline-flex">
											<div class="dropdown">
												<a href="#" class="text-body" data-bs-toggle="dropdown">
													<i class="ph-list"></i>
												</a>

												<div class="dropdown-menu dropdown-menu-end">
													<a href="#" class="dropdown-item">
														<i class="ph-file-pdf me-2"></i>
														Export to .pdf
													</a>
													<a href="#" class="dropdown-item">
														<i class="ph-file-xls me-2"></i>
														Export to .csv
													</a>
													<a href="#" class="dropdown-item">
														<i class="ph-file-doc me-2"></i>
														Export to .doc
													</a>
												</div>
											</div>
										</div>
									</td>
								</tr>
								
							</tbody>
						</table>
					</div>
					<!-- /basic datatable -->
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
		<!-- /main content -->

	</div>

{{-- </div> --}}
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