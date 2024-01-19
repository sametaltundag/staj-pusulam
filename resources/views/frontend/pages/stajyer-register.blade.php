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

</head>
<body>
    <div class="App">
        <div class='main'>
            <div class="wrapper-login">
                <form action="" onSubmit={formik.handleSubmit}>
                    <h1 style="color: white;text-align: center" class="form-title">Pusulam'a Gel - Stajını Bul</h1>
                    <div class="form-login">
                        <div class="form-group">
                            <input
                                type="text"
                                name='name'
                                required
                                placeholder='Tam Adınız'
                            />
                        </div>

                        <div class="form-group">
                            <input
                                type="email"
                                name='email'
                                required
                                placeholder='E-Posta'
                            />
                        </div>

                        <div class="form-group">
                            <input
                                type="tel"
                                maxlength="10"
                                name='phone'
                                required
                                placeholder='GSM (5** *** ** **)'
                                onInput="validatePhone(this)"
                                onBlur="validatePhone(this)"
                            />
                        </div>
                        <div class="form-group">
                            <input
                                type="password"
                                required
                                name='password'
                                id="password"
                                placeholder='Şifre'
                            />
                        </div>

                        <div class="form-group">
                            <input
                                type="password"
                                name='password2'
                                required
                                id="password2"
                                placeholder='Şifreyi onayla'
                                onInput="validatePassword(this)"
                            />
                        </div>


                        <div class="form-group">
                            <select name="gender" >
                                <option value="0">Kadın</option>
                                <option value="1">Erkek</option>
                            </select>
                        </div>

                        <button type="submit" class="btn-type" disabled>Pusulam'a Kaydol</button>
                        <a href="/" class='btn-type'>Vazgeç</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <footer>
        <div class="mb-2">
            <a href="https://github.com/sametaltundag" class='mx-2 social' target="_blank">
                <i class="fa-brands fa-linkedin"></i>
            </a>
            <a href="https://www.linkedin.com/in/sametaltundag/" target="_blank" class='social'>
                <i class="fa-brands fa-github"></i>
            </a>
        </div>
      <p class='text-center'>Samet ALTUNDAĞ &copy; {{date('Y')}}</p>
    </footer>

    <script>
        const submitButton = document.querySelector('button[type="submit"]');
const phoneInput = document.getElementsByName('phone')[0];
const passwordInput = document.getElementById('password');
const password2Input = document.getElementById('password2');

// Başlangıçta butonu devre dışı bırak ve stilini değiştir
submitButton.disabled = true;
submitButton.style.opacity = 0.5;

// Numara inputuna herhangi bir tuşa basıldığında kontrol yapısını değerlendir
phoneInput.addEventListener('input', validatePhone);

// Şifre inputlarından herhangi biri değiştiğinde kontrol yapısını değerlendir
passwordInput.addEventListener('input', validatePassword);
password2Input.addEventListener('input', validatePassword);

function validatePhone() {
    // Eğer numara inputunun ilk karakteri 5 değilse, sadece 5'i kabul et
    if (!phoneInput.value.startsWith('5')) {
        phoneInput.value = '5';
    }

    // Telefon numarasının tam olarak 10 karakter olduğunu kontrol et
    if (phoneInput.value.length !== 10) {
        phoneInput.setCustomValidity('Telefon numarası 10 karakter olmalı');
    } else {
        phoneInput.setCustomValidity('');
    }

    // Butonu kontrol et
    validateButton();
}

function validatePassword() {
    // Şifreler aynı değilse hata göster
    if (passwordInput.value !== password2Input.value) {
        password2Input.setCustomValidity('Şifreler eşleşmiyor');
    } else {
        password2Input.setCustomValidity('');
    }

    // Butonu kontrol et
    validateButton();
}

function validateButton() {
    // Şifrelerin ve telefon numarasının durumunu kontrol et
    const password1 = passwordInput.value;
    const password2 = password2Input.value;

    // Butonu etkinleştir veya devre dışı bırak
    submitButton.disabled = password1 !== password2 || phoneInput.value.length !== 10;

    // Butonun stilini değiştir
    submitButton.style.opacity = submitButton.disabled ? 0.5 : 1;
}

    </script>
</body>
</html>
