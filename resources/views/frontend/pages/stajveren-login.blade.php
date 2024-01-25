<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Staj pusulam ile öğrenciler artık staj başvurularını Staj pusulam üzerinden yaparak iş ve kariyer hayatlarına daha hızlı staj deneyimlerinden sonra ulaşabilecekler.">
    <meta name="keywords"
        content="staj pusulam, staj, staj basvuru, staj basvurusu, staj deneyimi,staj bul, staj ara, staj arama, staj pusulasi, pusula staj, ogrenci staj">
    <meta name="author" content="Staj Pusulam">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Staj Pusulam</title>
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="{{ asset('css') }}/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />

    <style>
        .popover-header {
            background-color: #5400db;
            color: white;
            font-weight: bold;
        }
    </style>

</head>

<body>
    <div class="App">
        <div class='main'>
            <div class="wrapper-login">
                <form action="{{ route('stajveren-login') }}" method="POST">
                    @csrf
                    <h1 style="color: white;text-align: center" class="form-title">Staj Veren Girişi</h1>
                    <div class="form-login">
                        <div class="form-group">
                            <span data-bs-toggle="popover" data-bs-placement="right"
                                data-bs-custom-class="custom-popover" data-bs-title="BİLGİLENDİRME"
                                data-bs-content="Bu alana, proje geliştiricisi tarafından firmanıza özel oluşturulan kodu girin.">
                                <input type="text" name="empcode" required placeholder='Firma Kodu' minlength="6"
                                    data-bs-toggle="popover" />
                            </span>
                        </div>

                        <div class="form-group">
                            <input type="password" required name="password" placeholder='Şifre' />
                        </div>
                        <button type="submit" class="btn-type">Yetkili Giriş</button>
                        <a href="{{route('home')}}" class='btn-type'>Anasayfa</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <footer style="position: fixed; bottom: 0; width: 100%; ">
        <div class="mb-2">
            <a href="https://github.com/sametaltundag" class='mx-2 social' target="_blank">
                <i class="fa-brands fa-linkedin"></i>
            </a>
            <a href="https://www.linkedin.com/in/sametaltundag/" target="_blank" class='social'>
                <i class="fa-brands fa-github"></i>
            </a>
        </div>
      <p class='text-center'><code style="color: #00a8ff">Developed by</code> Samet ALTUNDAĞ &copy; {{date('Y')}}</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
        const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))
    </script>
    @if (session('error'))
        <script>
            toastr.error('{{ session('error') }}', 'Hatalı deneme!', {
                timeOut: 3000,
                closeButton: true,
                progressBar: true,
                iconClass: 'toast-error-icon',
                toastClass: 'toast-error'
            });
        </script>
    @endif
</body>

</html>
