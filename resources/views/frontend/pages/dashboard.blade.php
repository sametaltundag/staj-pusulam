@extends('frontend.layouts.app')

@section('title')
    Anasayfa
@endsection

@section('customcss')
    <style>
        .card-img-top {
            background-color: rgba(128, 128, 128, 0.384);
        }

        .card {
            height: 430px;
            font-family: var(--font-poppins);
        }

        .carousel-control-next-icon,
        .carousel-control-prev-icon {
            background-color: black;
        }

        .carousel-control-next,
        .carousel-control-prev {
            align-items: start;
        }

        ul.feature-list li {
            list-style-type: none
        }

        ul {
            padding-left: 0;
        }

        .ilan-btn {
            height: 55px;
            background-color: #00A8FF;
            color: white;
            border-radius: 5px;
            align-items: center;
            display: inline-flex;
            padding: 0 25px;
            transition: all ease 0.4s;
            cursor: pointer;
            text-decoration: none;
        }

        .ilan-btn:hover{
            background-color: #000;
            color: #fff
        }
    </style>
@endsection

@section('content')
    <div class="dashboard d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row" style="font-family: var(--font-poppins)">
                <div class="col-lg-5 col-md-12 col-sm-12" style="margin-top: 7%">
                    <h1 class="display-4 fw-bold">StajPusula'na</h1>
                    <span class="display-6 fs-4">Hoşgeldin {{ explode(' ', Auth::user()->name)[0] }}!</span>
                    <p class="mt-4">Günlerce staj aramaya son! Sana özel kodlanmış bu yazılım projesi ile profilini doldur, ve
                        kendine uygun stajı, <br> <b style="color: #00a8ff">bul, başvur ve çalış!</b></p>


                    <ul class="feature-list">
                        <li><i class="fab fa-searchengin mb-3 fa-1x"></i> Profilini doldur, ilanı yakala!</li>
                        <li><i class="fas fa-child mb-3 "></i> Genç yeteneklerin, odak noktası</li>
                        <li><i class="fas fa-bolt mb-3"></i> İK'lar ile hızlı etkileşim</li>
                    </ul>

                    <a href="{{ route('adverts') }}" class="ilan-btn">İlanları İncele</a>

                </div>

                <div class="col-lg-7 col-md-12 col-sm-12">
                    <img src="{{ asset('images/dash4.png') }}" width="100%" class="img-fluid" alt="">
                </div>
            </div>

            <section>

            </section>
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
