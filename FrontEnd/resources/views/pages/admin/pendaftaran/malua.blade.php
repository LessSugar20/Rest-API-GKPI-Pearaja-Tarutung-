@extends('layouts.admin.master')
@section('title', 'Malua')
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
								<span href="#" class="breadcrumb-item">Pendaftaran</span>
								<span class="breadcrumb-item active">Data Malua</span>
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
						<div class="row card-header">
							<h5 class="col mt-1 mb-0 text-start">Data Malua</h5>
							<div class="col offset-lg-4 text-end ">
								<a href="#" class="btn btn-success">
									  <i class="ph-file-pdf me-2"></i>
									  Lihat Laporan
								</a>
						   	</div>
						</div>

						<table class="table datatable-basic">
							<thead>
								<tr>
									<th>ID</th>
									<th>Tempat Lahir</th>
									<th>Tanggal Lahir</th>
									<th>Tanggal Baptis</th>
									<th class="text-center">Actions</th>
								</tr>
							</thead>
							<tbody>
								@foreach($malua as $l)
								<tr>
								<td>{{$loop->iteration}}</td>
								<td>{{$l['tempat_lahir']}}</td>
								<td>{{$l['tanggal_lahir']}}</td>
								<td>{{$l['tanggal_baptis']}}</td>
								<td class="text-center">
										<div class="d-inline-flex ">
											<form action="{{route('malua.destroy', $l['ID'])}}" method="POST">
												@csrf
												@method('DELETE')
												<a type="button" method="GET" href="{{route('malua.edit', $l['ID'])}}" data-bs-popup="tooltip" title="Edit" class="btn btn-warning btn-icon" style="margin-bottom: -1rem">
													<i class="ph-note-pencil"></i>
												</a>
												<button type="submit" href="" data-bs-popup="tooltip" title="Delete" class="btn btn-danger btn-icon" style="margin-bottom: -1rem">
													<i class="ph-trash"></i>
												</button>
											</form>
										</div>
									</td>
								</tr>
								@endforeach
								
							</tbody>
						</table>
					</div>
					<!-- /basic datatable -->
				</div>
				<!-- /content area -->


				<!-- Footer -->
				<div class="navbar navbar-sm navbar-footer border-top">
					<div class="container-fluid">
						<span>&copy; 2022 <a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328">Limitless Web App Kit</a></span>

						<ul class="nav">
							<li class="nav-item">
								<a href="https://kopyov.ticksy.com/" class="navbar-nav-link navbar-nav-link-icon rounded" target="_blank">
									<div class="d-flex align-items-center mx-md-1">
										<i class="ph-lifebuoy"></i>
										<span class="d-none d-md-inline-block ms-2">Support</span>
									</div>
								</a>
							</li>
							<li class="nav-item ms-md-1">
								<a href="https://demo.interface.club/limitless/demo/Documentation/index.html" class="navbar-nav-link navbar-nav-link-icon rounded" target="_blank">
									<div class="d-flex align-items-center mx-md-1">
										<i class="ph-file-text"></i>
										<span class="d-none d-md-inline-block ms-2">Docs</span>
									</div>
								</a>
							</li>
							<li class="nav-item ms-md-1">
								<a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov" class="navbar-nav-link navbar-nav-link-icon text-primary bg-primary bg-opacity-10 fw-semibold rounded" target="_blank">
									<div class="d-flex align-items-center mx-md-1">
										<i class="ph-shopping-cart"></i>
										<span class="d-none d-md-inline-block ms-2">Purchase</span>
									</div>
								</a>
							</li>
						</ul>
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
@section('custom_js')
<script>
       @if(session()->has('success'))
		Swal.fire(
			'Berhasil!',
			'{{session('success')}}',
			'success'
		)
	@endif
	@if(session()->has('sdelete'))
		Swal.fire(
			'Berhasil!',
			'{{session('sdelete')}}',
			'success'
		)
	@endif
	@if(session()->has('update'))
		Swal.fire(
			'Berhasil!',
			'{{session('sdelete')}}',
			'success'
		)
	@endif
</script>
@endsection