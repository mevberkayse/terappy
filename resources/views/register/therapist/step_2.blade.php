<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="http://cdn.arabul.us/bootstrap/css/bootstrap.min.css?123">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/therapist/step_2.css">
    <style>
        body {
            background-image: url('/assets/img/duvarkagidi8.jpg');
            /* JPG dosyasını buraya ekleyin */
            background-size: cover;
            /* Arkaplanın tam olarak kapsamasını sağlar */
            background-position: center;
            /* Ortalar */
            background-repeat: no-repeat;
    
        }
        .blurred-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('/assets/img/duvarkagidi8.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            filter: blur(10px); /* Blur efekti */
            z-index: 0; /* Arka planda kalması için */
        }
        .customizedNavbar{
            background-color: transparent;
        }
        .centered-container{
            z-index: 1;
            background: rgba(255, 255, 255, 0.8); /* Yarı saydam bir arka plan */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); /* Hafif gölge */
        }
        .button-group{
        z-index:2;
    }
    </style>
</head>


<body><div class="blurred-background"></div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light customizedNavbar">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img style="height:35px"
                    src="http://webdemo2.risegraph.net/wp-content/uploads/2021/03/cropped-cropped-Untitled-1-1.png"
                    alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <!-- Ortalanan container -->
    <div class="container centered-container">
        <h2 class="text-center mb-4">İletişim Bilgileri</h2>
        <form>
            <!-- İsim -->
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="firstName" class="form-label">İsim</label>
                    <input type="text" class="form-control" id="firstName" placeholder="İsminizi giriniz" required>
                </div>
                <div class="col-md-6">
                    <label for="lastName" class="form-label">Soy İsim</label>
                    <input type="text" class="form-control" id="lastName" placeholder="Soy isminizi giriniz" required>
                </div>
            </div>
            <!-- Yaş -->
            <div class="mb-3">
                <label for="age" class="form-label">Yaş</label>
                <input type="number" class="form-control" id="age" placeholder="Yaşınızı giriniz" required>
            </div>
            <div class="mb-3">
                <!-- Ülke Form Alanı -->
                <label for="country" class="form-label">Ülke</label>
                <div class="form-select" id="countrySelect" data-bs-toggle="modal" data-bs-target="#countryModal">
                    Ülkenizi seçiniz
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <!-- Telefon -->
                    <label for="phone" class="form-label">Telefon Numarası</label>
                    <input type="tel" class="form-control" id="phone" placeholder="Telefon numaranızı giriniz" required>
                </div>
                <!-- E-posta -->
                <div class="col-md-6">
                    <label for="email" class="form-label">E-posta</label>
                    <input type="email" class="form-control" id="email" placeholder="E-posta adresinizi giriniz"
                        required>
                </div>
            </div>
                <!-- Cinsiyet -->
                <div class="mb-3">
                    <!-- Cinsiyet Form Alanı -->
                    <label for="gender" class="form-label">Cinsiyet</label>
                    <div class="form-select" id="genderSelect" data-bs-toggle="modal" data-bs-target="#genderModal">
                        Cinsiyetinizi Seçiniz
                </div>
                <div class="row mb-3 mt-3">
                    <div class="col-md-6">
                    <!-- Sosyal Form Alanı -->
                        <label for="social" class="form-label">Sosyal Medya</label>
                        <div class="form-select" id="socialSelect" data-bs-toggle="modal" data-bs-target="#socialModal">
                            Sosyal Medya 
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="social" class="form-label">Hesap veya website adı</label>
                        <input type="text" class="form-control" id="socail" placeholder="@Adres giriniz" required>
                    </div>
                </div>
        </form>
    </div>
    </div>

    <!-- Butonlar -->
    <div class="button-group">
        <button type="button" class="modal-btn">Geri</button>
        <button type="button" class="primary-button">Devam Et</button>
    </div>
    <!-- Cinsiyet Seçimi Modal -->
    <div class="modal fade" id="genderModal" tabindex="-1" aria-labelledby="genderModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="genderModalLabel">Cinsiyet Seçimi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Kapat"></button>
                </div>
                <div class="modal-body">
                    <ul class="list-group">
                        <li class="list-group-item" data-bs-dismiss="modal" id="femaleOption">Kadın</li>
                        <li class="list-group-item" data-bs-dismiss="modal" id="maleOption">Erkek</li>
                        <li class="list-group-item" data-bs-dismiss="modal" id="otherOption">Belirtmek İstemiyorum</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="socialModal" tabindex="-1" aria-labelledby="socialModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="socialModalLabel">Cinsiyet Seçimi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Kapat"></button>
                </div>
                <div class="modal-body">
                    <ul class="list-group">
                        <li class="list-group-item" data-bs-dismiss="modal" id="instaOption">Instagram</li>
                        <li class="list-group-item" data-bs-dismiss="modal" id="linkedInOption">LinkedIn</li>
                        <li class="list-group-item" data-bs-dismiss="modal" id="websiteOption">Website</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="countryModal" tabindex="-1" aria-labelledby="countryModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="countryModalLabel">Ülke Seçimi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Kapat"></button>
                </div>
                <div class="modal-body">
                    <ul class="list-group">
                        <li class="list-group-item" data-bs-dismiss="modal" id="turkeyOption">Türkiye</li>
                        <li class="list-group-item" data-bs-dismiss="modal" id="usaOption">Amerika Birleşik Devletleri
                        </li>
                        <li class="list-group-item" data-bs-dismiss="modal" id="ukOption">Birleşik Krallık</li>
                        <li class="list-group-item" data-bs-dismiss="modal" id="germanyOption">Almanya</li>
                        <li class="list-group-item" data-bs-dismiss="modal" id="franceOption">Fransa</li>
                        <li class="list-group-item" data-bs-dismiss="modal" id="italyOption">İtalya</li>
                        <li class="list-group-item" data-bs-dismiss="modal" id="japanOption">Japonya</li>
                        <li class="list-group-item" data-bs-dismiss="modal" id="chinaOption">Çin</li>
                        <li class="list-group-item" data-bs-dismiss="modal" id="indiaOption">Hindistan</li>
                        <li class="list-group-item" data-bs-dismiss="modal" id="brazilOption">Brezilya</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Modal seçimlerini işleme
        document.getElementById("femaleOption").addEventListener("click", function () {
            document.getElementById("genderSelect").innerText = "Kadın";
        });
        document.getElementById("maleOption").addEventListener("click", function () {
            document.getElementById("genderSelect").innerText = "Erkek";
        });
        document.getElementById("otherOption").addEventListener("click", function () {
            document.getElementById("genderSelect").innerText = "Belirtmek İstemiyorum";
        });
    </script>
     <script>
        // Modal seçimlerini işleme
        document.getElementById("instaOption").addEventListener("click", function () {
            document.getElementById("socialSelect").innerText = "Instagram";
        });
        document.getElementById("linkedInOption").addEventListener("click", function () {
            document.getElementById("socialSelect").innerText = "LinkedIn";
        });
        document.getElementById("websiteOption").addEventListener("click", function () {
            document.getElementById("socialSelect").innerText = "Website";
        });
    </script>
    <script>
        // Modal seçimlerini işleme (Ülke için)
        document.getElementById("turkeyOption").addEventListener("click", function () {
            document.getElementById("countrySelect").innerText = "Türkiye";
        });
        document.getElementById("usaOption").addEventListener("click", function () {
            document.getElementById("countrySelect").innerText = "Amerika Birleşik Devletleri";
        });
        document.getElementById("ukOption").addEventListener("click", function () {
            document.getElementById("countrySelect").innerText = "Birleşik Krallık";
        });
        document.getElementById("germanyOption").addEventListener("click", function () {
            document.getElementById("countrySelect").innerText = "Almanya";
        });
        document.getElementById("franceOption").addEventListener("click", function () {
            document.getElementById("countrySelect").innerText = "Fransa";
        });
        document.getElementById("italyOption").addEventListener("click", function () {
            document.getElementById("countrySelect").innerText = "İtalya";
        });
        document.getElementById("japanOption").addEventListener("click", function () {
            document.getElementById("countrySelect").innerText = "Japonya";
        });
        document.getElementById("chinaOption").addEventListener("click", function () {
            document.getElementById("countrySelect").innerText = "Çin";
        });
        document.getElementById("indiaOption").addEventListener("click", function () {
            document.getElementById("countrySelect").innerText = "Hindistan";
        });
        document.getElementById("brazilOption").addEventListener("click", function () {
            document.getElementById("countrySelect").innerText = "Brezilya";
        });
    </script>

    <!-- Bootstrap JS ve Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0-alpha1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.arabul.us/fontawesome/js/all.min.js"></script>
</body>

</html>