<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Staj pusulam ile öğrenciler artık staj başvurularını Staj pusulam üzerinden yaparak iş ve kariyer hayatlarına daha hızlı staj deneyimlerinden sonra ulaşabilecekler.">
    <meta name="keywords" content="staj pusulam, staj, staj basvuru, staj basvurusu, staj deneyimi,staj bul, staj ara, staj arama, staj pusulasi, pusula staj, ogrenci staj">
    <meta name="author" content="Staj Pusulam">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Staj Pusulam</title>
    <link rel="shortcut icon" href="{{asset('images/logo.png')}}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="{{asset('css')}}/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>

    @yield('customcss')
</head>
<body>
    @include('frontend.inc.header')
    <div class="main-app">
        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    @yield('customjs')
</body>
</html>
