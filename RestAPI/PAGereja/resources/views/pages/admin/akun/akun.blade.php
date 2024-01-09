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
								<span href="#" class="breadcrumb-item">Akun</span>
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
							<h5 class="col mt-1 mb-0">Daftar Akun</h5>							
							@hasrole('admin')
							   <div class="col mb-0 text-end">
								   <a href="{{url('admin/akun/create')}}" class="btn btn-info text-nowrap">
									  <i class="ph-plus me-2"></i>
									  Tambah Akun
								   </a>
							    </div>
							   @else
							   <div class="col mb-0 text-end">
								   <a href="{{url('sek/akun/create')}}" class="btn btn-info text-nowrap">
									  <i class="ph-plus me-2"></i>
									  Tambah Akun
								   </a>
							    </div>
							   @endhasrole
						</div>

						<table class="table datatable-basic">
							<thead>
								<tr>
									<th class="col-1">No</th>
									<th>Username</th>
									<th>Fullname</th>
									<th>Created at</th>
									<th>Status</th>
									<th class="text-center col-1">Actions</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($akun as $a)
								
								<tr class="">
									<td class="col-1">{{$i++}}</td>
									<td>{{$a->username}}</td>
									<td>{{$a->fullname}}</td>
									<td>{{ \Carbon\Carbon::parse($a->created_at)->isoFormat('D MMMM Y') }}</td>
									@if ($a->status == 'aktif')									
									<td><span class="badge bg-success bg-opacity-10 text-success">Aktif</span></td>
									@else
									<td><span class="badge bg-danger bg-opacity-10 text-danger">Non-Aktif</span></td>
									@endif
									<td class="text-center">
										<div class="d-inline-flex">
											<form action="{{route('akun.destroy', $a->id)}}" method="POST">
												@csrf
												@method('DELETE')
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