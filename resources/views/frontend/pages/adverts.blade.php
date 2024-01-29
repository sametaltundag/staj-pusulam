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
                  <li class="breadcrumb-item">İlanlar</li>
                </ol>
              </nav>
        </div>
        <div class="row g-4">
            <div class="col-md-3 d-none d-md-block">
                <nav class="navbar navbar-expand-lg mx-0 shadow d-none d-md-block">
					<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasSideNavbar">
						<div class="offcanvas-header">
							<button type="button" class="btn-close text-reset ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"></button>
						</div>

						<div class="offcanvas-body d-block px-2 px-lg-0">
							<div class="card overflow-hidden">
									<div class="card-body pt-0">
										<div class="text-center">
										<div class="avatar avatar-lg mt-n5 mb-3">
											<a href="#!"><img class="avatar-img rounded border border-white border-3" src="{{asset('images/users/').'/'.Auth::user()->photo}}" height="75" alt=""></a>
										</div>
										<h5 class="mb-0"> <span>{{ Auth::user()->name }}</span> </h5>
										<small>{{ Auth::user()->email }}</small>
										<p class="mt-3 text-secondary">{{ Auth::user()->about }}</p>

                                        <hr>
                                        <h6 class="mb-3">İlanlar</h6>
										<div class="hstack gap-2 gap-xl-3 justify-content-center">
											<div>
                                                @php
                                                    $appealCount = App\Models\Appeal::where('users_id', Auth::user()->id)->count();
                                                @endphp
												<h6 class="mb-0"><span class="badge" style="background-color: #00a8ff;">{{$appealCount}}</span></h6>
												<small>Başvurulan</small>
											</div>
											<!-- Divider -->
											<div class="vr"></div>
											<!-- User stat item -->
											<div>
                                                @php
                                                    $advertCount = App\Models\Advert::where('job_id', Auth::user()->job_id)->count();
                                                @endphp
												<h6 class="mb-0"><span class="badge" style="background-color: #00a8ff;">{{$advertCount}}</span></h6>
												<small>Pusulam ile eşleşen</small>
											</div>
										</div>
									</div>
									<hr>
                                    <div class="d-flex justify-content-center align-items-center gap-2">
                                        <a class="nav-link px-2 btn btn-sm btn-dark text-white py-2" href="{{route('profile')}}">Profilim</a>
                                        <a class="nav-link px-2 btn btn-sm text-white py-2" style="background-color: #00a8ff" href="{{route('myappeals')}}">Başvurularım</a>
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
                @foreach ($adverts as $advert)

                @php
                    $user = $advert->users_id;
                    $dataUser = App\Models\User::find($user);

                    $userAlreadyApplied = App\Models\Appeal::where('users_id', Auth::user()->id)
                                                ->where('adverts_id', $advert->id)
                                                ->exists();
                @endphp
                <form action="{{route('makeappeal', $advert->id)}}" method="post">
                    @csrf
                <div class="row mt-3 shadow-sm">
                    <div class="col-3">
                        <img src="{{asset('images/employers').'/'.$dataUser->photo}}"  class="img-fluid rounded" alt="{{$dataUser->name}}" style="height: 100%; width: 100%; object-fit: contain; object-position: center;">
                    </div>

                    <div class="col-9">
                        <div class="row mb-3">
                            <div class="col-9">
                                <h3 class="mt-3">{{$advert->title}}</h3>
                                <p class="text-secondary">{{Str::limit($advert->description, 85)}}</p>
                                <span class="badge bg-secondary text-white p-1">{{$dataUser->name}}</span>
                            </div>
                            <div class="col-3 d-flex justify-content-center flex-column gap-2">
                                <a href="{{route('adverts')}}" class="btn btn-sm btn-dark">İlana Git <i class="fas fa-share-square"></i></a>
                                @if (!$userAlreadyApplied)
                                <button type="submit" class="btn btn-sm btn-primary w-100">Başvur <i class="fas fa-bolt"></i></button>
                                @else
                                    {{-- Başvuru yapılmışsa pasif buton göster --}}
                                    <button type="button" class="btn btn-sm btn-secondary w-100" disabled>Başvuruldu <i class="fas fa-check"></i></button>
                                @endif
                                <span class="mb-2">{{date('Y-m-d', strtotime($advert->created_at))}}</span>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
                @endforeach

                <div class="row mt-3">
                    <div class="col-12  d-flex justify-content-center">
                        {{ $adverts->withQueryString()->links('pagination::bootstrap-4') }}
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

                                @php
                                    $counter = 0;
                                @endphp

                                @foreach ($adverts as $item)
                                    @if ($item->job_id == Auth::user()->job_id)
                                        @if ($counter < 5)
                                            <div class="hstack gap-2 mb-3">
                                                <div class="overflow-hidden">
                                                    <a class="mb-0 text-black" href="#!">{{$item->title}}</a>
                                                    <p class="mb-0 small text-truncate"><span class="badge badge-dark bg-dark">{{$item->user->name}}</span></p>
                                                </div>
                                                <a class="btn btn-primary-soft rounded-circle icon-md ms-auto" href="" title="İlanı Gör"><i class="fas fa-eye"></i></a>
                                            </div>
                                            @php
                                                $counter++;
                                            @endphp
                                        @endif
                                    @endif
                                @endforeach

                                @if ($counter == 0)
                                    <span>Sana uygun ilan oluşturulmadı!</span>
                                @endif
							</div>
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
                                @foreach ($lastAdverts as $lastItem)

                                <div class="hstack gap-2 mb-3">
									<div class="overflow-hidden">
										<a class="mb-0 text-black" href="#!">{{$lastItem->title}} </a>
										<p class="mb-0 small text-truncate"><span class="badge badge-dark bg-dark">{{$lastItem->user->name}}</span></p>
									</div>
									<a class="btn btn-primary-soft rounded-circle icon-md ms-auto" href="" title="İlanı Gör"><i class="fas fa-eye"></i></a>
								</div>

                                @endforeach
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
            toastr.success('{{ session('success') }}', `Tebrikler!!`, {
                timeOut: 5000,
                closeButton: true,
                progressBar: true,
                iconClass: 'toast-success-icon',
                toastClass: 'toast-success'
            });
        </script>
    @endif

    @if (session('error'))
        <script>
            toastr.error('{{ session('error') }}', `Başvuru yapabilmek için giriş yapmalısınız..`, {
                timeOut: 5000,
                closeButton: true,
                progressBar: true,
                iconClass: 'toast-error-icon',
                toastClass: 'toast-error'
            });
        </script>
    @endif
@endsection
