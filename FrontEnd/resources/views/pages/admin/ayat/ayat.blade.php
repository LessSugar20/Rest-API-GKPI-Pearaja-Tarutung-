@extends('layouts.admin.master')
@section('title', 'Malua')
<script src="{{asset('sweetalert2/dist/sweetalert2.all.min.js')}}"></script>
<script src="{{asset('assetss/js/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assetss/demo/demo_configurator.js')}}"></script>
<script src="{{asset('assetss/js/app.js')}}"></script>
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
								<span href="#" class="breadcrumb-item">Ayat Harian</span>
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
							<h5 class="col mt-1 mb-0">Ayat Harian</h5>
							@hasrole('admin')
							   <div class="col mb-0 text-end">
								   <a href="{{url('admin/ayat/create')}}" class="btn btn-info text-nowrap">
									  <i class="ph-plus me-2"></i>
									  Tambah Ayat
								   </a>
							    </div>
							   @else
							   <div class="col mb-0 text-end">
								   <a href="{{url('sek/ayat/create')}}" class="btn btn-info text-nowrap">
									  <i class="ph-plus me-2"></i>
									  Tambah Ayat
								   </a>
							    </div>
							   @endhasrole
						</div>

						<table class="table datatable-basic">
							<thead>
								<tr>
									<th class="col-1">No</th>
									<th class="col-2">Nats</th>
									<th>Ayat</th>
									<th>Tanggal</th>
									<th class="text-center col-1">Actions</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($ayat as $a)
								
								<tr class="">
									<td class="col-1 ">{{$loop->iteration}}</td>
								
									
									<td class="text-center">
										<div class="d-inline-flex ">
											<form action="{{route('ayat.destroy', $a['ID'])}}" method="POST">
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
@section('custom_js')
<script type="text/javascript">
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
</script>
@endsection