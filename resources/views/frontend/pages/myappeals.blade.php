@extends('frontend.layouts.app')

@section('title')
    Başvurularım
@endsection

@section('customcss')
<style>
.card-img-top{
    background-color: rgba(128, 128, 128, 0.384);
}

.card{
    height: max-content;
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
                  <li class="breadcrumb-item">Başvurularım</li>
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

                                        <hr>
										<div class="hstack gap-2 gap-xl-3 justify-content-center">
											<div>
												<h6 class="mb-0"><span class="badge" style="background-color: #00a8ff;">{{count($appeals)}}</h6>
												<small>Başvurulan İlan</small>
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
                <h2 class="my-2">Başvurularım <span class="badge" style="background-color: #00a8ff;">{{count($appeals)}}</span></h2>
                @if ($appeals && count($appeals) > 0)
                @foreach ($appeals as $appeal)
                @php
                    $advert = $appeal->adverts_id;
                    $dataAdvert = App\Models\Advert::find($advert);
                    $dataUser = App\Models\User::find($dataAdvert->users_id);
                @endphp
                <div class="row mt-3 shadow-sm">
                    <div class="col-3">
                        <img src="{{asset('images/employers').'/'.$dataUser->photo}}" height="75" class="img-fluid rounded" alt="">
                    </div>
                    <div class="col-9">
                        <div class="row">
                            <div class="col-9">
                                <h3 class="mt-3">{{$dataAdvert->title}}</h3>
                                <p class="text-secondary">{{Str::limit($dataAdvert->description, 85)}}</p>
                            </div>
                            <div class="col-3 d-flex justify-content-center flex-column gap-2">
                                <a href="{{route('adverts')}}" class="btn btn-sm btn-dark">İlana Git <i class="fas fa-share-square"></i></a>
                                <a href="{{route('myappeals.delete', $appeal->id)}}" class="btn btn-sm btn-danger">Başvuruyu Sil</a>
                                <span class="badge bg-dark mb-2">Başvuru Tarihi: <br> {{date('Y-m-d', strtotime($appeal->created_at))}}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                    <span class="badge bg-danger fs-6">Henuz başvurunuz yok.</span>
                @endif
            </div>

        </div>
    </div>
@endsection

@section('customjs')
    @if (session('success'))
        <script>
            toastr.success('{{ session('success') }}', `Tebrikler!`, {
                timeOut: 5000,
                closeButton: true,
                progressBar: true,
                iconClass: 'toast-success-icon',
                toastClass: 'toast-success'
            });
        </script>
    @endif
@endsection
