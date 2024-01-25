@extends('frontend.layouts.app')

@section('title')
    İlanlar
@endsection

@section('customcss')
<style>
.card-img-top{
    background-color: rgba(128, 128, 128, 0.384);
}

.card{
    height: 430px;
    font-family: var(--font-poppins);
}

.carousel-control-next-icon,
.carousel-control-prev-icon{
    background-color: black;
}

.carousel-control-next,
.carousel-control-prev{
    align-items: start;
}

html{
    background-color: white !important;
}
.main-app{
    background-color: white !important;
    height: 100%;
}
</style>
@endsection

@section('content')
    <div class="container">
        <div class="row pt-2">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Anasayfa</a></li>
                  <li class="breadcrumb-item">İlanlar</li>
                </ol>
              </nav>
        </div>
        <div class="row g-4">
            <div class="col-md-3 d-none d-md-block">
                <nav class="navbar navbar-expand-lg mx-0 shadow d-none d-md-block">
					<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasSideNavbar">
						<!-- Offcanvas header -->
						<div class="offcanvas-header">
							<button type="button" class="btn-close text-reset ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"></button>
						</div>

						<!-- Offcanvas body -->
						<div class="offcanvas-body d-block px-2 px-lg-0">
							<!-- Card START -->
							<div class="card overflow-hidden">
									<!-- Card body START -->
									<div class="card-body pt-0">
										<div class="text-center">
										<!-- Avatar -->
										<div class="avatar avatar-lg mt-n5 mb-3">
											<a href="#!"><img class="avatar-img rounded border border-white border-3" src="{{asset('images/users/').'/'.Auth::user()->photo}}" height="75" alt=""></a>
										</div>
										<!-- Info -->
										<h5 class="mb-0"> <span>{{ Auth::user()->name }}</span> </h5>
										<small>{{ Auth::user()->email }}</small>
										<p class="mt-3 text-secondary">{{ Auth::user()->about }}</p>

                                        {{-- Divider --}}
                                        <hr>
                                        <h6 class="mb-3">İlanlar</h6>
										<!-- User stat START -->
										<div class="hstack gap-2 gap-xl-3 justify-content-center">
											<!-- User stat item -->
											<div>
												<h6 class="mb-0">256</h6>
												<small>Başvurulan</small>
											</div>
											<!-- Divider -->
											<div class="vr"></div>
											<!-- User stat item -->
											<div>
												<h6 class="mb-0">2.5K</h6>
												<small>Pusulam ile eşleşen</small>
											</div>
										</div>
									</div>
									<hr>
                                    <div class="d-flex justify-content-center align-items-center gap-2">
                                        <a class="nav-link px-2 btn btn-sm btn-dark text-white py-2" href="{{route('profile')}}">Profilim'e Git</a>
                                    <a class="nav-link px-2 btn btn-sm btn-danger text-white py-2" href="{{route('logout')}}">Çıkış Yap</a>
                                    </div>
								</div>
							</div>
							<p class="small text-center mt-1">{{date('Y')}} &copy;<a class="text-reset" target="_blank" href="https://github.com/sametaltundag/staj-pusulam">StajPusulam</a></p>
						</div>
					</div>
				</nav>
            </div>


            <div class="col-md-6">
                <h2 class="my-2">Tüm İlanlar</h2>
                <div class="row mt-3 shadow-sm">
                    <div class="col-3">
                        <img src="{{asset('images/logo.png')}}" height="75" class="img-fluid rounded" alt="">
                    </div>

                    <div class="col-9">
                        <div class="row">
                            <div class="col-9">
                                <h5 class="mt-3">StajPusulam</h5>
                                <span class="fw-bold text-secondary">Logo Yazılım</span>
                                <p class="text-secondary">Ankara merkezli firmamızda yazılım teknolojilerini ve performans optimizasyonlarını yapacak yeni yazılımcı adaylarımızı bekliyoruz.</p>
                            </div>
                            <div class="col-3 d-flex justify-content-center flex-column gap-2">
                                <a href="{{route('adverts')}}" class="btn btn-sm btn-dark">İlana Git <i class="fas fa-share-square"></i></a>
                                <a href="{{route('profile')}}" class="btn btn-sm text-white" style="background-color: #00a8ff">Başvur <i class="fas fa-bolt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3 shadow-sm">
                    <div class="col-3">
                        <img src="{{asset('images/logo.png')}}" height="75" class="img-fluid rounded" alt="">
                    </div>

                    <div class="col-9">
                        <div class="row">
                            <div class="col-9">
                                <h3 class="mt-3">StajPusulam</h3>
                                <p class="text-secondary">Ankara merkezli firmamızda yazılım teknolojilerini ve performans optimizasyonlarını yapacak yeni yazılımcı adaylarımızı bekliyoruz.</p>
                            </div>
                            <div class="col-3 d-flex justify-content-center flex-column gap-2">
                                <a href="{{route('adverts')}}" class="btn btn-sm btn-dark">İlana Git <i class="fas fa-share-square"></i></a>
                                <a href="{{route('profile')}}" class="btn btn-sm btn-primary">Başvur <i class="fas fa-bolt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3 shadow-sm">
                    <div class="col-3">
                        <img src="{{asset('images/logo.png')}}" height="75" class="img-fluid rounded" alt="">
                    </div>

                    <div class="col-9">
                        <div class="row">
                            <div class="col-9">
                                <h3 class="mt-3">StajPusulam</h3>
                                <p class="text-secondary">Ankara merkezli firmamızda yazılım teknolojilerini ve performans optimizasyonlarını yapacak yeni yazılımcı adaylarımızı bekliyoruz.</p>
                            </div>
                            <div class="col-3 d-flex justify-content-center flex-column gap-2">
                                <a href="{{route('adverts')}}" class="btn btn-sm btn-dark">İlana Git <i class="fas fa-share-square"></i></a>
                                <a href="{{route('profile')}}" class="btn btn-sm btn-primary">Başvur <i class="fas fa-bolt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3 shadow-sm">
                    <div class="col-3">
                        <img src="{{asset('images/logo.png')}}" height="75" class="img-fluid rounded" alt="">
                    </div>
                    <div class="col-9">
                        <div class="row">
                            <div class="col-9">
                                <h3 class="mt-3">StajPusulam</h3>
                                <p class="text-secondary">Ankara merkezli firmamızda yazılım teknolojilerini ve performans optimizasyonlarını yapacak yeni yazılımcı adaylarımızı bekliyoruz.</p>
                            </div>
                            <div class="col-3 d-flex justify-content-center flex-column gap-2">
                                <a href="{{route('adverts')}}" class="btn btn-sm btn-dark">İlana Git <i class="fas fa-share-square"></i></a>
                                <a href="{{route('profile')}}" class="btn btn-sm btn-primary">Başvur <i class="fas fa-bolt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3 shadow-sm">
                    <div class="col-3">
                        <img src="{{asset('images/logo.png')}}" height="75" class="img-fluid rounded" alt="">
                    </div>

                    <div class="col-9">
                        <div class="row">
                            <div class="col-9">
                                <h3 class="mt-3">StajPusulam</h3>
                                <p class="text-secondary">Ankara merkezli firmamızda yazılım teknolojilerini ve performans optimizasyonlarını yapacak yeni yazılımcı adaylarımızı bekliyoruz.</p>
                            </div>
                            <div class="col-3 d-flex justify-content-center flex-column gap-2">
                                <a href="{{route('adverts')}}" class="btn btn-sm btn-dark">İlana Git <i class="fas fa-share-square"></i></a>
                                <a href="{{route('profile')}}" class="btn btn-sm btn-primary">Başvur <i class="fas fa-bolt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3 shadow-sm">
                    <div class="col-3">
                        <img src="{{asset('images/logo.png')}}" height="75" class="img-fluid rounded" alt="">
                    </div>

                    <div class="col-9">
                        <div class="row">
                            <div class="col-9">
                                <h3 class="mt-3">StajPusulam</h3>
                                <p class="text-secondary">Ankara merkezli firmamızda yazılım teknolojilerini ve performans optimizasyonlarını yapacak yeni yazılımcı adaylarımızı bekliyoruz.</p>
                            </div>
                            <div class="col-3 d-flex justify-content-center flex-column gap-2">
                                <a href="{{route('adverts')}}" class="btn btn-sm btn-dark">İlana Git <i class="fas fa-share-square"></i></a>
                                <a href="{{route('profile')}}" class="btn btn-sm btn-primary">Başvur <i class="fas fa-bolt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3 shadow-sm">
                    <div class="col-3">
                        <img src="{{asset('images/logo.png')}}" height="75" class="img-fluid rounded" alt="">
                    </div>

                    <div class="col-9">
                        <div class="row">
                            <div class="col-9">
                                <h3 class="mt-3">StajPusulam</h3>
                                <p class="text-secondary">Ankara merkezli firmamızda yazılım teknolojilerini ve performans optimizasyonlarını yapacak yeni yazılımcı adaylarımızı bekliyoruz.</p>
                            </div>
                            <div class="col-3 d-flex justify-content-center flex-column gap-2">
                                <a href="{{route('adverts')}}" class="btn btn-sm btn-dark">İlana Git <i class="fas fa-share-square"></i></a>
                                <a href="{{route('profile')}}" class="btn btn-sm btn-primary">Başvur <i class="fas fa-bolt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3 shadow-sm">
                    <div class="col-3">
                        <img src="{{asset('images/logo.png')}}" height="75" class="img-fluid rounded" alt="">
                    </div>

                    <div class="col-9">
                        <div class="row">
                            <div class="col-9">
                                <h3 class="mt-3">StajPusulam</h3>
                                <p class="text-secondary">Ankara merkezli firmamızda yazılım teknolojilerini ve performans optimizasyonlarını yapacak yeni yazılımcı adaylarımızı bekliyoruz.</p>
                            </div>
                            <div class="col-3 d-flex justify-content-center flex-column gap-2">
                                <a href="{{route('adverts')}}" class="btn btn-sm btn-dark">İlana Git <i class="fas fa-share-square"></i></a>
                                <a href="{{route('profile')}}" class="btn btn-sm btn-primary">Başvur <i class="fas fa-bolt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3 shadow-sm">
                    <div class="col-3">
                        <img src="{{asset('images/logo.png')}}" height="75" class="img-fluid rounded" alt="">
                    </div>

                    <div class="col-9">
                        <div class="row">
                            <div class="col-9">
                                <h3 class="mt-3">StajPusulam</h3>
                                <p class="text-secondary">Ankara merkezli firmamızda yazılım teknolojilerini ve performans optimizasyonlarını yapacak yeni yazılımcı adaylarımızı bekliyoruz.</p>
                            </div>
                            <div class="col-3 d-flex justify-content-center flex-column gap-2">
                                <a href="{{route('adverts')}}" class="btn btn-sm btn-dark">İlana Git <i class="fas fa-share-square"></i></a>
                                <a href="{{route('profile')}}" class="btn btn-sm btn-primary">Başvur <i class="fas fa-bolt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <div class="col-lg-3 d-none d-md-block pt-1 px-3">
				<div class="row g-4">
					<div class="col-sm-6 col-lg-12 sh">
						<div class="card shadow">
							<!-- Card header START -->
							<div class="card-header border-0 " style="background-color: #00a8ff;">
								<h6 class="card-title mb-0 text-white">Pusulan ile eşleşen ilanlar</h6>
							</div>
							<!-- Card header END -->
							<!-- Card body START -->
							<div class="card-body">
								<div class="hstack gap-2 mb-3">
									<!-- Title -->
									<div class="overflow-hidden">
										<a class="mb-0 text-black" href="#!">Judy Nguyen </a>
										<p class="mb-0 small text-truncate"><span class="badge badge-dark bg-dark">Judy Nguyen</span></p>
									</div>
									<!-- Button -->
									<a class="btn btn-primary-soft rounded-circle icon-md ms-auto" href="" title="İlanı Gör"><i class="fas fa-eye"></i></a>
								</div>

                                <div class="hstack gap-2 mb-3">
									<!-- Title -->
									<div class="overflow-hidden">
										<a class="mb-0 text-black" href="#!">Judy Nguyen </a>
										<p class="mb-0 small text-truncate"><span class="badge badge-dark bg-dark">Judy Nguyen</span></p>
									</div>
									<!-- Button -->
									<a class="btn btn-primary-soft rounded-circle icon-md ms-auto" href="" title="İlanı Gör"><i class="fas fa-eye"></i></a>
								</div>
                                <div class="hstack gap-2 mb-3">
									<!-- Title -->
									<div class="overflow-hidden">
										<a class="mb-0 text-black" href="#!">Judy Nguyen </a>
										<p class="mb-0 small text-truncate"><span class="badge badge-dark bg-dark">Judy Nguyen</span></p>
									</div>
									<!-- Button -->
									<a class="btn btn-primary-soft rounded-circle icon-md ms-auto" href="" title="İlanı Gör"><i class="fas fa-eye"></i></a>
								</div>
                                <div class="hstack gap-2 mb-3">
									<!-- Title -->
									<div class="overflow-hidden">
										<a class="mb-0 text-black" href="#!">Judy Nguyen </a>
										<p class="mb-0 small text-truncate"><span class="badge badge-dark bg-dark">Judy Nguyen</span></p>
									</div>
									<!-- Button -->
									<a class="btn btn-primary-soft rounded-circle icon-md ms-auto" href="" title="İlanı Gör"><i class="fas fa-eye"></i></a>
								</div>
                                <div class="hstack gap-2 mb-3">
									<!-- Title -->
									<div class="overflow-hidden">
										<a class="mb-0 text-black" href="#!">Judy Nguyen </a>
										<p class="mb-0 small text-truncate"><span class="badge badge-dark bg-dark">Judy Nguyen</span></p>
									</div>
									<!-- Button -->
									<a class="btn btn-primary-soft rounded-circle icon-md ms-auto" href="" title="İlanı Gör"><i class="fas fa-eye"></i></a>
								</div>
                                <div class="hstack gap-2 mb-3">
									<!-- Title -->
									<div class="overflow-hidden">
										<a class="mb-0 text-black" href="#!">Judy Nguyen </a>
										<p class="mb-0 small text-truncate"><span class="badge badge-dark bg-dark">Judy Nguyen</span></p>
									</div>
									<!-- Button -->
									<a class="btn btn-primary-soft rounded-circle icon-md ms-auto" href="" title="İlanı Gör"><i class="fas fa-eye"></i></a>
								</div>
							</div>
							<!-- Card body END -->
						</div>
					</div>


					<div class="col-sm-6 col-lg-12">
						<div class="card shadow">
							<!-- Card header START -->
							<div class="card-header  border-0" style="background-color: #00a8ff;">
								<h6 class="card-title mb-0 text-white">Son ilanlar</h6>
							</div>
							<!-- Card header END -->
							<!-- Card body START -->
							<div class="card-body">
                                <div class="hstack gap-2 mb-3">
									<div class="overflow-hidden">
										<a class="mb-0 text-black" href="#!">Judy Nguyen </a>
										<p class="mb-0 small text-truncate"><span class="badge badge-dark bg-dark">Judy Nguyen</span></p>
									</div>
									<a class="btn btn-primary-soft rounded-circle icon-md ms-auto" href="" title="İlanı Gör"><i class="fas fa-eye"></i></a>
								</div>

								<div class="hstack gap-2 mb-3">
									<div class="overflow-hidden">
										<a class="mb-0 text-black" href="#!">Judy Nguyen </a>
										<p class="mb-0 small text-truncate"><span class="badge badge-dark bg-dark">Judy Nguyen</span></p>
									</div>
									<a class="btn btn-primary-soft rounded-circle icon-md ms-auto" href="" title="İlanı Gör"><i class="fas fa-eye"></i></a>
								</div>

								<div class="hstack gap-2 mb-3">
									<div class="overflow-hidden">
										<a class="mb-0 text-black" href="#!">Judy Nguyen </a>
										<p class="mb-0 small text-truncate"><span class="badge badge-dark bg-dark">Judy Nguyen</span></p>
									</div>
									<a class="btn btn-primary-soft rounded-circle icon-md ms-auto" href="" title="İlanı Gör"><i class="fas fa-eye"></i></a>
								</div>

								<div class="hstack gap-2 mb-3">
									<div class="overflow-hidden">
										<a class="mb-0 text-black" href="#!">Judy Nguyen </a>
										<p class="mb-0 small text-truncate"><span class="badge badge-dark bg-dark">Judy Nguyen</span></p>
									</div>
									<a class="btn btn-primary-soft rounded-circle icon-md ms-auto" href="" title="İlanı Gör"><i class="fas fa-eye"></i></a>
								</div>

								<div class="hstack gap-2 mb-3">
									<div class="overflow-hidden">
										<a class="mb-0 text-black" href="#!">Judy Nguyen </a>
										<p class="mb-0 small text-truncate"><span class="badge badge-dark bg-dark">Judy Nguyen</span></p>
									</div>
									<a class="btn btn-primary-soft rounded-circle icon-md ms-auto" href="" title="İlanı Gör"><i class="fas fa-eye"></i></a>
								</div>

                                <div class="hstack gap-2 mb-3">
									<div class="overflow-hidden">
										<a class="mb-0 text-black" href="#!">Judy Nguyen </a>
										<p class="mb-0 small text-truncate"><span class="badge badge-dark bg-dark">Judy Nguyen</span></p>
									</div>
									<a class="btn btn-primary-soft rounded-circle icon-md ms-auto" href="" title="İlanı Gör"><i class="fas fa-eye"></i></a>
								</div>
							</div>
							<!-- Card body END -->
						</div>
					</div>
				</div>
			</div>
        </div>
    </div>
@endsection

@section('customjs')
    @if (session('success'))
        <script>
            toastr.success('{{ session('success') }}', `Pusulam'a Giriş yapıldı!`, {
                timeOut: 5000,
                closeButton: true,
                progressBar: true,
                iconClass: 'toast-success-icon',
                toastClass: 'toast-success'
            });
        </script>
    @endif
@endsection


{{-- <section >
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2">
                <div class="col">
                    <p class="text-center fs-5 fw-bold">Pusulana göre Staj İlanları</p>
                    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="col">
                                    <div class="card shadow-sm">
                                        <div class="card-img-top">
                                            <img src="{{asset('images/logo.png')}}" class="card-img-top img-fluid" style="height: 150px;object-fit: contain" alt="">
                                        </div>
                                        <div class="card-body mt-1 text-center">
                                            <div class="card-title">
                                                <h4>PHP Developer</h4>
                                            </div>
                                            <p class="card-text">Firmamız bünyesinde bulunan yazılım teknolojilerini ve performans optimizasyonlarını yapacak yeni yazılımcı adaylarımızı bekliyoruz.</p>
                                            <div class="d-flex justify-content-center align-items-center">
                                                <div class="btn-group">
                                                    <button type="button"
                                                        class="btn btn-sm btn-outline-secondary">İlanı Gör</button>
                                                    <form action="" method="POST">
                                                        @csrf
                                                        <button type="button" class="btn btn-sm  btn-outline-secondary">Başvur</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer d-flex justify-content-between align-items-center">
                                            <small class="fw-bold">Yayınlanma Tarih: <span class="badge bg-success p-1 fs-6"> 10.01.2024</span></small>
                                            <span class="badge bg-dark text-white p-2 fs-6">Logo Yazılım</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col">
                                    <div class="card shadow-sm">
                                        <div class="card-img-top">
                                            <img src="{{asset('images/logo.png')}}" class="card-img-top img-fluid" style="height: 150px;object-fit: contain" alt="">
                                        </div>
                                        <div class="card-body mt-1 text-center">
                                            <div class="card-title">
                                                <h4>PHP Developer</h4>
                                            </div>
                                            <p class="card-text">Firmamız bünyesinde bulunan yazılım teknolojilerini ve performans optimizasyonlarını yapacak yeni yazılımcı adaylarımızı bekliyoruz.</p>
                                            <div class="d-flex justify-content-center align-items-center">
                                                <div class="btn-group">
                                                    <button type="button"
                                                        class="btn btn-sm btn-outline-secondary">İlanı Gör</button>
                                                    <form action="" method="POST">
                                                        @csrf
                                                        <button type="button" class="btn btn-sm  btn-outline-secondary">Başvur</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer d-flex justify-content-between align-items-center">
                                            <small class="fw-bold">Yayınlanma Tarih: <span class="badge bg-success p-1 fs-6"> 10.01.2024</span></small>
                                            <span class="badge bg-dark text-white p-2 fs-6">Logo Yazılım</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Geri</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">İleri</span>
                        </button>
                    </div>
                </div>

                <div class="col">
                    <p class="text-center fs-5 fw-bold">En son yayınlanan Staj İlanları</p>
                    <div id="carouselExample2" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="col">
                                    <div class="card shadow-sm">
                                        <div class="card-img-top">
                                            <img src="{{asset('images/logo.png')}}" class="card-img-top img-fluid" style="height: 150px;object-fit: contain" alt="">
                                        </div>
                                        <div class="card-body mt-1 text-center">
                                            <div class="card-title">
                                                <h4>PHP Developer</h4>
                                            </div>
                                            <p class="card-text">Firmamız bünyesinde bulunan yazılım teknolojilerini ve performans optimizasyonlarını yapacak yeni yazılımcı adaylarımızı bekliyoruz.</p>
                                            <div class="d-flex justify-content-center align-items-center">
                                                <div class="btn-group">
                                                    <button type="button"
                                                        class="btn btn-sm btn-outline-secondary">İlanı Gör</button>
                                                    <form action="" method="POST">
                                                        @csrf
                                                        <button type="button" class="btn btn-sm  btn-outline-secondary">Başvur</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer d-flex justify-content-between align-items-center">
                                            <small class="fw-bold">Yayınlanma Tarih: <span class="badge bg-success p-1 fs-6"> 10.01.2024</span></small>
                                            <span class="badge bg-dark text-white p-2 fs-6">Logo Yazılım</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col">
                                    <div class="card shadow-sm">
                                        <div class="card-img-top">
                                            <img src="{{asset('images/logo.png')}}" class="card-img-top img-fluid" style="height: 150px;object-fit: contain" alt="">
                                        </div>
                                        <div class="card-body mt-1 text-center">
                                            <div class="card-title">
                                                <h4>PHP Developer</h4>
                                            </div>
                                            <p class="card-text">Firmamız bünyesinde bulunan yazılım teknolojilerini ve performans optimizasyonlarını yapacak yeni yazılımcı adaylarımızı bekliyoruz.</p>
                                            <div class="d-flex justify-content-center align-items-center">
                                                <div class="btn-group">
                                                    <button type="button"
                                                        class="btn btn-sm btn-outline-secondary">İlanı Gör</button>
                                                    <form action="" method="POST">
                                                        @csrf
                                                        <button type="button" class="btn btn-sm  btn-outline-secondary">Başvur</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer d-flex justify-content-between align-items-center">
                                            <small class="fw-bold">Yayınlanma Tarih: <span class="badge bg-success p-1 fs-6"> 10.01.2024</span></small>
                                            <span class="badge bg-dark text-white p-2 fs-6">Logo Yazılım</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample2"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Geri</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample2"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">İleri</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="album py-5 bg-body-tertiary">
                <div class="container">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        <div class="col">
                            <div class="card shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: صورة مصغرة"
                                    preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%"
                                        fill="#eceeef" dy=".3em">صورة مصغرة</text>
                                </svg>
                                <div class="card-body">
                                    <p class="card-text">هذه بطاقة أوسع مع نص داعم أدناه كمقدمة طبيعية لمحتوى إضافي. هذا
                                        المحتوى أطول قليلاً.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">عرض</button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary">تعديل</button>
                                        </div>
                                        <small class="text-body-secondary">9 دقائق</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                    xmlns="http://www.w3.org/2000/svg" role="img"
                                    aria-label="Placeholder: صورة مصغرة" preserveAspectRatio="xMidYMid slice"
                                    focusable="false">
                                    <title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%"
                                        fill="#eceeef" dy=".3em">صورة مصغرة</text>
                                </svg>
                                <div class="card-body">
                                    <p class="card-text">هذه بطاقة أوسع مع نص داعم أدناه كمقدمة طبيعية لمحتوى إضافي. هذا
                                        المحتوى أطول قليلاً.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">عرض</button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary">تعديل</button>
                                        </div>
                                        <small class="text-body-secondary">9 دقائق</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                    xmlns="http://www.w3.org/2000/svg" role="img"
                                    aria-label="Placeholder: صورة مصغرة" preserveAspectRatio="xMidYMid slice"
                                    focusable="false">
                                    <title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%"
                                        fill="#eceeef" dy=".3em">صورة مصغرة</text>
                                </svg>
                                <div class="card-body">
                                    <p class="card-text">هذه بطاقة أوسع مع نص داعم أدناه كمقدمة طبيعية لمحتوى إضافي. هذا
                                        المحتوى أطول قليلاً.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">عرض</button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary">تعديل</button>
                                        </div>
                                        <small class="text-body-secondary">9 دقائق</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                    xmlns="http://www.w3.org/2000/svg" role="img"
                                    aria-label="Placeholder: صورة مصغرة" preserveAspectRatio="xMidYMid slice"
                                    focusable="false">
                                    <title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%"
                                        fill="#eceeef" dy=".3em">صورة مصغرة</text>
                                </svg>
                                <div class="card-body">
                                    <p class="card-text">هذه بطاقة أوسع مع نص داعم أدناه كمقدمة طبيعية لمحتوى إضافي. هذا
                                        المحتوى أطول قليلاً.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">عرض</button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary">تعديل</button>
                                        </div>
                                        <small class="text-body-secondary">9 دقائق</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                    xmlns="http://www.w3.org/2000/svg" role="img"
                                    aria-label="Placeholder: صورة مصغرة" preserveAspectRatio="xMidYMid slice"
                                    focusable="false">
                                    <title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%"
                                        fill="#eceeef" dy=".3em">صورة مصغرة</text>
                                </svg>
                                <div class="card-body">
                                    <p class="card-text">هذه بطاقة أوسع مع نص داعم أدناه كمقدمة طبيعية لمحتوى إضافي. هذا
                                        المحتوى أطول قليلاً.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">عرض</button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary">تعديل</button>
                                        </div>
                                        <small class="text-body-secondary">9 دقائق</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                    xmlns="http://www.w3.org/2000/svg" role="img"
                                    aria-label="Placeholder: صورة مصغرة" preserveAspectRatio="xMidYMid slice"
                                    focusable="false">
                                    <title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%"
                                        fill="#eceeef" dy=".3em">صورة مصغرة</text>
                                </svg>
                                <div class="card-body">
                                    <p class="card-text">هذه بطاقة أوسع مع نص داعم أدناه كمقدمة طبيعية لمحتوى إضافي. هذا
                                        المحتوى أطول قليلاً.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">عرض</button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary">تعديل</button>
                                        </div>
                                        <small class="text-body-secondary">9 دقائق</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                    xmlns="http://www.w3.org/2000/svg" role="img"
                                    aria-label="Placeholder: صورة مصغرة" preserveAspectRatio="xMidYMid slice"
                                    focusable="false">
                                    <title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%"
                                        fill="#eceeef" dy=".3em">صورة مصغرة</text>
                                </svg>
                                <div class="card-body">
                                    <p class="card-text">هذه بطاقة أوسع مع نص داعم أدناه كمقدمة طبيعية لمحتوى إضافي. هذا
                                        المحتوى أطول قليلاً.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">عرض</button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary">تعديل</button>
                                        </div>
                                        <small class="text-body-secondary">9 دقائق</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                    xmlns="http://www.w3.org/2000/svg" role="img"
                                    aria-label="Placeholder: صورة مصغرة" preserveAspectRatio="xMidYMid slice"
                                    focusable="false">
                                    <title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%"
                                        fill="#eceeef" dy=".3em">صورة مصغرة</text>
                                </svg>
                                <div class="card-body">
                                    <p class="card-text">هذه بطاقة أوسع مع نص داعم أدناه كمقدمة طبيعية لمحتوى إضافي. هذا
                                        المحتوى أطول قليلاً.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">عرض</button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary">تعديل</button>
                                        </div>
                                        <small class="text-body-secondary">9 دقائق</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                    xmlns="http://www.w3.org/2000/svg" role="img"
                                    aria-label="Placeholder: صورة مصغرة" preserveAspectRatio="xMidYMid slice"
                                    focusable="false">
                                    <title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%"
                                        fill="#eceeef" dy=".3em">صورة مصغرة</text>
                                </svg>
                                <div class="card-body">
                                    <p class="card-text">هذه بطاقة أوسع مع نص داعم أدناه كمقدمة طبيعية لمحتوى إضافي. هذا
                                        المحتوى أطول قليلاً.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">عرض</button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary">تعديل</button>
                                        </div>
                                        <small class="text-body-secondary">9 دقائق</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
