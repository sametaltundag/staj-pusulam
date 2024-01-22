<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Staj pusulam ile öğrenciler artık staj başvurularını Staj pusulam üzerinden yaparak iş ve kariyer hayatlarına daha hızlı staj deneyimlerinden sonra ulaşabilecekler.">
    <meta name="keywords" content="staj pusulam, staj, staj basvuru, staj basvurusu, staj deneyimi,staj bul, staj ara, staj arama, staj pusulasi, pusula staj, ogrenci staj">
    <meta name="author" content="Staj Pusulam">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Staj Pusulam</title>
    <link rel="shortcut icon" href="{{asset('images/logo.png')}}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="{{asset('css')}}/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" >

</head>
<body>
    <div class="App">
        <div class='main'>
            <div class="wrapper">
                <div class="wrapper-text" >
                    <h1 class='wrapper-title'><span style="color: #00a8ff">Staj</span>Pusulam <i class="fa-regular fa-compass"></i></h1>

                    <h2 class='wrapper-subtitle'>Sana uygun olanı <span style="color: #00a8ff">bul, başvur, çalış!</span></h2>
                </div>

                <div class="select-section">
                    <div class="select-item">
                        <a href="{{route('stajyer-login')}}" class="user-type">
                            <i class="fa-solid fa-people-carry-box"></i>
                        <p class='select-item-text'>Staj Arayan</p>
                        </a>
                    </div>
                    <div class="select-item">
                        <a href="{{route('stajveren-login')}}" class="user-type">
                            <i class="fa-solid fa-people-arrows"></i>
                        <p class='select-item-text'>Staj Veren</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="question-btn" data-bs-toggle="modal" data-bs-target="#question">
        <i class="fa-regular fa-circle-question"></i>
    </div>

    <div class="modal fade" id="question" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">AMAÇ</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <span class="lead">
                            <b>StajPusula</b>'nın temel amacı, öğrencilerle işverenleri bir araya getirerek eğitim ve iş dünyası arasındaki köprüyü güçlendirmektir. Bu sayede, gençler gelecekteki kariyerlerine daha sağlam bir temelle adım atabilirken, işverenler de potansiyel yeteneklere erişim sağlayarak iş güçlerini güçlendirebilirler.
                        </span>
                    </div>
                </div>

                <hr class="my-4">
                <div class="row">
                    <div class="col-12">
                        <span class="lead"><b>Öğrenci Perspektifi:</b> StajPusula, öğrencilere kendi alanlarında gerçek dünya deneyimi kazanma fırsatı sunar. Platform üzerinden öğrenciler, ilgi alanlarına uygun staj pozisyonlarını kolayca bulabilir, başvuruda bulunabilir ve kariyerlerine değerli bir başlangıç yapabilirler.</span>
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-12">
                        <span class="lead"><b>İşveren Perspektifi:</b> İşverenler için <b>StajPusula</b>, yetenek avında etkili bir araç oluşturur. Platform, işverenlere potansiyel stajyerleri belirleme ve onlarla iletişim kurma imkanı sağlar. Bu, işverenlere genç yetenekleri keşfetme ve gelecekteki çalışanlarına stajyer olarak deneyim kazandırma şansı verir. Aynı zamanda, iş dünyasındaki genç yeteneklere mentorluk yaparak sektöre katkıda bulunma fırsatı sunar.</span>
                    </div>
                </div>


            </div>
            <div class="modal-footer">
              <button type="button" class="btn text-white" style="background-color: #00a8ff" data-bs-dismiss="modal">Anladım</button>
            </div>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
