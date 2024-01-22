@extends('frontend.layouts.app')

@section('title')
    Profilim
@endsection

@section('content')
    <div class='main'>
        <div class="wrapper-login">
            <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-profile" style="margin-top: 80px">
                    <h1 style="color: white; text-align: center" class="form-title rounded">Profil Bilgilerim</h1>
                    <img src="{{ $user->photo ? asset('images/users') . '/' . $user->photo : asset('images/users/user.png') }}" alt="{{ $user->name }}" id="image-preview" style="object-fit: cover; object-position: center;"
                        height="200">

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <input type="file" id="file-input" name="photo" onchange="previewImage()" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <input type="text" name="name" required placeholder='Tam Adım'
                                    value="{{ $user->name }}" />
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <input type="text" required name="email" placeholder='E-Postam'
                                    value="{{ $user->email }}" />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <input type="tel" name="phone" placeholder='GSM (5** *** ** **)'
                                    value="{{ $user->phone }}" />
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <input type="text" name="age" required min="18" max="65" placeholder='Yaşım' value="{{ $user->age }}" />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <select name="city">
                                    @foreach (config('cities') as $sehirId => $sehirAdi)
                                        <option value="{{ $sehirId }}"
                                            {{ $user->city == $sehirId ? 'selected' : '' }}>
                                            {{ $sehirAdi }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <select name="university">
                                    @foreach (config('universities') as $uniId => $uniAdi)
                                        <option value="{{ $uniId }}"
                                            {{ $user->university == $uniId ? 'selected' : '' }}>
                                            {{ $uniAdi }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <select name="university_dep" style="width: 100% !important">
                                    @foreach (config('department') as $depId => $depAd)
                                        <option value="{{ $depId }}"
                                            {{ $user->university_dep == $depId ? 'selected' : '' }}>
                                            {{ $depAd }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <select name="degree" style="width: 100% !important">
                                    @foreach([
                                        0 => 'Seç',
                                        1 => 'Ön Lisans',
                                        2 => 'Ön Lisans Mezunu',
                                        3 => 'Lisans',
                                        4 => 'Lisans Mezunu',
                                        5 => 'Yüksek Lisans',
                                        6 => 'Yüksek Lisans Mezunu',
                                        7 => 'Doktora',
                                        8 => 'Doktora Mezunu',
                                    ] as $value => $label)
                                        <option value="{{ $value }}" {{ $user->degree == $value ? 'selected' : '' }}>
                                            {{ $label }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="form-group">
                                <select name="job_id" style="width: 100% !important">
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
                                        <option value="{{ $value }}" {{ $user->job_id == $value ? 'selected' : '' }}>
                                            {{ $label }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <input type="text" name="address" required min="18" max="65" placeholder='Adresim' value="{{ $user->address }}" style="width:600px  !important"/>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <textarea name="about" cols="30" rows="10" style="width: 600px !important; height: 100px; padding-top: 5px">{{ $user->about }}</textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn-type">Profilimi Güncelle</button>
                </div>
            </form>
        </div>
    </div>



    <script>
        function previewImage() {
            var fileInput = document.getElementById('file-input');
            var imagePreview = document.getElementById('image-preview');

            // Dosya seçilip seçilmediğini kontrol et
            if (fileInput.files && fileInput.files[0]) {
                var reader = new FileReader();

                // Dosyayı okuyup önizlemeyi güncelle
                reader.onload = function(e) {
                    imagePreview.src = e.target.result;
                };

                reader.readAsDataURL(fileInput.files[0]);
            }
        }

    </script>

@endsection

@section('customjs')
    @if (session('success'))
        <script>
            toastr.success('{{ session('success') }}', `İşlem Başarılı!`, {
                timeOut: 5000,
                closeButton: true,
                progressBar: true,
                iconClass: 'toast-success-icon',
                toastClass: 'toast-success'
            });
        </script>
    @endif
@endsection
