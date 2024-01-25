@extends('frontend.layouts.app')

@section('title')
    Profilim
@endsection

@section('content')
    <div class='main'>
        <div class="wrapper-login">
            <form action="{{ route('employer.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-profile" style="margin-top: 80px">
                    <h1 style="color: white; text-align: center" class="form-title rounded">#{{ $employer->empcode }} - Firma Bilgileri</h1>
                    <img src="{{ $employer->photo ? asset('images/employers') . '/' . $employer->photo : asset('images/users/user.png') }}" alt="{{ $employer->name }}" class="rounded" id="image-preview" style="object-fit: cover; object-position: center;"
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
                                    value="{{ $employer->name }}" />
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <input type="text" required name="email" placeholder='E-Postam'
                                    value="{{ $employer->email }}" />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <input type="tel" name="phone" placeholder='GSM (5** *** ** **)'
                                    value="{{ $employer->phone }}" />
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <select name="city">
                                    @foreach (config('cities') as $sehirId => $sehirAdi)
                                        <option value="{{ $sehirId }}"
                                            {{ $employer->city == $sehirId ? 'selected' : '' }}>
                                            {{ $sehirAdi }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <select name="job_id" >
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
                        </div>

                        <div class="col-6">
                            <div class="form-group" >
                                <input type="text"  style="opacity: 75%;" disabled readonly placeholder='İlan sayısı: 0' />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <input type="text" name="address" required min="18" max="65" placeholder='Firma adresi' value="{{ $employer->address }}" style="width:600px  !important"/>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control" name="about" style="width: 600px !important; min-height: 150px; padding-top: 5px"  placeholder="Firma Hakkında" >{{ $employer->about }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex gap-3">
                    <button type="submit" class="btn-type p-2">Güncelle</button>
                    <a href="{{ route('employer.index') }}" class="btn-type p-2">Anasayfa</a>

                    </div>
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
