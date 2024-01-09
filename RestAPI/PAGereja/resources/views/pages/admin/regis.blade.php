<!DOCTYPE html>
<html lang="en" dir="ltr">
@include('layouts.admin.head')
@include('layouts.admin.js')
<title>Admin - {{ config('app.name') . ' : Login' }}</title>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-dark navbar-static py-2">
		<div class="container-fluid">
			<div class="navbar-brand">
				<a href="index.html" id="sweet2" class="d-inline-flex align-items-center">
					<img src="{{asset('assetss/images/logo_icon.svg')}}" alt="">
					<img src="{{asset('assetss/images/logo_text_light.svg')}}" class="d-none d-sm-inline-block h-16px ms-3" alt="">
				</a>
			</div>			
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Inner content -->
			<div class="content-inner">

				<!-- Content area -->
				<div class="content d-flex justify-content-center align-items-center">

					<!-- Registration form -->
					<form class="login-form" action="{{route('reg.action')}}">
                              @csrf
						<div class="card mb-0">
							<div class="card-body">
								<div class="text-center mb-3">
									<div class="d-inline-flex align-items-center justify-content-center mb-4 mt-2">
										<img src="{{asset('assetss/images/logo_icon.svg')}}" class="h-48px" alt="">
									</div>
									<h5 class="mb-0">Create account</h5>
								</div>

								<div class="text-center text-muted content-divider mb-3">
									<span class="px-2">Your credentials</span>
								</div>

                                        <div class="mb-3">
									<label class="form-label">Fullname</label>
									<div class="form-control-feedback form-control-feedback-start">
										<input type="text" class="form-control" placeholder="Fullname">
										<div class="form-control-feedback-icon">
											<i class="ph-identification-card text-muted"></i>
										</div>
									</div>
									
								</div>

								<div class="mb-3">
									<label class="form-label">Username</label>
									<div class="form-control-feedback form-control-feedback-start">
										<input type="text" class="form-control" placeholder="Username">
										<div class="form-control-feedback-icon">
											<i class="ph-user-circle text-muted"></i>
										</div>
									</div>
									{{-- <div class="form-text text-danger"><i class="ph-x-circle me-1"></i> This username is already taken</div> --}}
								</div>

								<div class="mb-3">
									<label class="form-label">Password</label>
									<div class="form-control-feedback form-control-feedback-start">
										<input type="password" class="form-control" placeholder="•••••••••••">
										<div class="form-control-feedback-icon">
											<i class="ph-lock text-muted"></i>
										</div>
									</div>
								</div>
								<button type="submit" class="btn btn-teal w-100">Register</button>
							</div>
						</div>
					</form>
					<!-- /registration form -->

				</div>
				<!-- /content area -->


				<!-- Footer -->
				<div class="navbar navbar-sm navbar-footer border-top">
					<div class="container-fluid">
						<span>&copy; 2022 <a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328">Limitless Web App Kit</a></span>						
					</div>
				</div>
				<!-- /footer -->

			</div>
			<!-- /inner content -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->


	<!-- Demo config -->
	<div class="offcanvas offcanvas-end" tabindex="-1" id="demo_config">
		<div class="position-absolute top-50 end-100 visible">
			<button type="button" class="btn btn-primary btn-icon translate-middle-y rounded-end-0" data-bs-toggle="offcanvas" data-bs-target="#demo_config">
				<i class="ph-gear"></i>
			</button>
		</div>

		<div class="offcanvas-header border-bottom py-0">
			<h5 class="offcanvas-title py-3">Theme configuration</h5>
			<button type="button" class="btn btn-light btn-sm btn-icon border-transparent rounded-pill" data-bs-dismiss="offcanvas">
				<i class="ph-x"></i>
			</button>
		</div>

		<div class="offcanvas-body">
			<div class="fw-semibold mb-2">Theme mode</div>
			<div class="list-group mb-3">
				<label class="list-group-item list-group-item-action form-check border-width-1 rounded mb-2">
					<div class="d-flex flex-fill my-1">
						<div class="form-check-label d-flex me-2">
							<i class="ph-sun ph-lg me-3"></i>
							<div>
								<span class="fw-bold">Light theme</span>
								<div class="fs-sm text-muted">Set light theme or reset to default</div>
							</div>
						</div>
						<input type="radio" class="form-check-input cursor-pointer ms-auto" name="main-theme" value="light" checked>
					</div>
				</label>

				<label class="list-group-item list-group-item-action form-check border-width-1 rounded mb-2">
					<div class="d-flex flex-fill my-1">
						<div class="form-check-label d-flex me-2">
							<i class="ph-moon ph-lg me-3"></i>
							<div>
								<span class="fw-bold">Dark theme</span>
								<div class="fs-sm text-muted">Switch to dark theme</div>
							</div>
						</div>
						<input type="radio" class="form-check-input cursor-pointer ms-auto" name="main-theme" value="dark">
					</div>
				</label>

				<label class="list-group-item list-group-item-action form-check border-width-1 rounded mb-0">
					<div class="d-flex flex-fill my-1">
						<div class="form-check-label d-flex me-2">
							<i class="ph-translate ph-lg me-3"></i>
							<div>
								<span class="fw-bold">Auto theme</span>
								<div class="fs-sm text-muted">Set theme based on system mode</div>
							</div>
						</div>
						<input type="radio" class="form-check-input cursor-pointer ms-auto" name="main-theme" value="auto">
					</div>
				</label>
			</div>			
		</div>		
	</div>
	<!-- /deo config -->
	<script type="text/javascript">
	@if(session()->has('success'))
		Swal.fire(
			'Login Berhasil!',
			'{{session('success')}}',
			'success'
		)
	@endif
	@if(session()->has('loginError'))
		Swal.fire(
			'Login Gagal!',
			'{{session('loginError')}}',
			'error'
		)
	@endif
	</script>
</body>
</html>
