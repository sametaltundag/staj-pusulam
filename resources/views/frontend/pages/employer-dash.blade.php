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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" >

</head>
<body>
    <div class="App">
        <div class='main'>
            <div class="wrapper">
                <div class="wrapper-text" >
                    <h1 class='wrapper-title'> < Hoşgeldiniz /> <i class="fa-regular fa-compass"></i></h1>
                    <p class="lead fw-bold">#{{Auth::user()->empcode}} - {{Auth::user()->name}}</p>

                    <h2 class='wrapper-subtitle mt-5'><span style="color: #00a8ff">Devam etmek için işlem seç!</span></h2>
                </div>

                <div class="d-flex justify-content-center align-items-center gap-5 flex-wrap">
                    <div class="select-item">
                        <a href="{{route('employer.profile')}}" class="user-type">
                            <i class="far fa-user-circle"></i>
                        <p class='select-item-text'>Profili Düzenle</p>
                        </a>
                    </div>

                    @php
                    $styleCode = '';
                    $hoverCode = '';

                    if (Auth::user()->job_id == null) {
                        $styleCode = 'style="opacity: 0.5;"';
                        $hoverCode = 'onmouseover="showAlert()"';
                    }
                @endphp

                <div class="select-item" id="ilanBtn" {!! $styleCode !!} data-bs-toggle="modal" data-bs-target="#ilanolustur" {!! $hoverCode !!}>
                    <a class="user-type">
                        <i class="fas fa-plus"></i>
                        <p class='select-item-text'>İlan Oluştur</p>
                    </a>
                </div>
                    <div class="select-item" data-bs-toggle="modal" data-bs-target="#question">
                        <a class="user-type">
                            <i class="fas fa-chart-pie"></i>
                        <p class='select-item-text'>İlanlarım</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- İlanları Gör Modal --}}
    <div class="modal fade modal-lg" id="question"  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">İlan Seç</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col" style="width: 25%;">Başlık</th>
                        <th scope="col">Başvuru</th>
                        <th scope="col">Tarih</th>
                        <th scope="col">İşlemler</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Yazılım Uzmanı</td>
                        <td>314 Kişi</td>
                        <td>26.02.2024</td>
                        <td>
                            <a href="" class="btn btn-sm text-white" style="background-color: #00a8ff">Gör <i class="far fa-eye"></i></a>
                            <a href="" class="btn btn-sm text-white bg-danger" onclick="return confirm('{{ 'Yazılımcı adayı' }} adlı ilanı silmek istediğinizden emin misiniz?')">Sil <i class="fas fa-trash-alt"></i></a>
                        </td>
                      </tr>

                      <tr>
                        <th scope="row">1</th>
                        <td>Yazılım Uzmanı</td>
                        <td>314 Kişi</td>
                        <td>26.02.2024</td>
                        <td>
                            <a href="" class="btn btn-sm text-white" style="background-color: #00a8ff">Gör <i class="far fa-eye"></i></a>
                            <a href="" class="btn btn-sm text-white bg-danger" onclick="return confirm('{{ 'Yazılımcı adayı' }} adlı ilanı silmek istediğinizden emin misiniz?')">Sil <i class="fas fa-trash-alt"></i></a>
                        </td>
                      </tr>

                      <tr>
                        <th scope="row">1</th>
                        <td>Yazılım Uzmanı</td>
                        <td>314 Kişi</td>
                        <td>26.02.2024</td>
                        <td>
                            <a href="" class="btn btn-sm text-white" style="background-color: #00a8ff">Gör <i class="far fa-eye"></i></a>
                            <a href="" class="btn btn-sm text-white bg-danger" onclick="return confirm('{{ 'Yazılımcı adayı' }} adlı ilanı silmek istediğinizden emin misiniz?')">Sil <i class="fas fa-trash-alt"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">1</th>
                        <td>Yazılım Uzmanı</td>
                        <td>314 Kişi</td>
                        <td>26.02.2024</td>
                        <td>
                            <a href="" class="btn btn-sm text-white" style="background-color: #00a8ff">Gör <i class="far fa-eye"></i></a>
                            <a href="" class="btn btn-sm text-white bg-danger" onclick="return confirm('{{ 'Yazılımcı adayı' }} adlı ilanı silmek istediğinizden emin misiniz?')">Sil <i class="fas fa-trash-alt"></i></a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn text-white" style="background-color: #00a8ff" data-bs-dismiss="modal">Anladım</button>
            </div>
          </div>
        </div>
      </div>


      {{-- İlan Oluştur Modal --}}
      <div class="modal fade" id="ilanolustur" tabindex="-1" aria-labelledby="ilanolusturLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="ilanolusturLabel">Yeni İlan Oluştur</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="POST" action="{{route('advert.add')}}">
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">İlan Başlığı</label>
                  <input type="text" class="form-control" id="recipient-name">
                </div>

                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">İlan Kategorisi (Profilden otomatik seçilir)</label>
                    <select name="city" class="form-select" disabled>
                        @foreach([
                            0 => 'Seç',
                            1 => 'Bilişim',
                            2 => 'Üretim',
                            3 => 'Eğitim',
                            4 => 'Enerji',
                            5 => 'Gıda',
                            6 => 'Sağlık',
                            7 => 'Tekstil',
                            8 => 'Ticaret',
                        ] as $value => $label)
                            <option value="{{ $value }}" {{ $employer->job_id == $value ? 'selected' : '' }}>
                                {{ $label }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                  <label for="message-text" class="col-form-label">Açıklama:</label>
                  <textarea class="form-control" id="message-text"></textarea>
                </div>
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Maaş Aralığı</label>
                    <input type="text" class="form-control" id="recipient-name" placeholder="30.000 TL - 35.000 TL (Boş geçilebilir)">
                </div>

                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Konum</label>
                    <select name="city" class="form-select">
                        @foreach (config('cities') as $sehirId => $sehirAdi)
                            <option value="{{ $sehirId }}">
                                {{ $sehirAdi }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="d-flex justify-content-end gap-2">
                    <button type="submit" class="btn text-white" style="background-color: #00a8ff;">Oluştur <i class="fas fa-plus"></i></button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Vazgeç</button>
                </div>
              </form>
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
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    var ilanBtn = document.getElementById('ilanBtn');

    function showAlert() {
        ilanBtn.setAttribute('style', 'pointer-events: none;opacity: 0.5;');
        toastr.error('', `Profilinizden kategori seçmelisiniz!`, {
                timeOut: 3000,
                closeButton: true,
                progressBar: true,
                iconClass: 'toast-error-icon',
                toastClass: 'toast-error'
            });
    }
</script>
</body>
</html>
