<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="http://cdn.arabul.us/bootstrap/css/bootstrap.min.css?123">
    <link rel="stylesheet" href="/assets/css/how-it-works.css">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    .barlow-thin {
        font-family: "Barlow", sans-serif;
        font-weight: 100;
        font-style: normal;
    }

    .barlow-extralight {
        font-family: "Barlow", sans-serif;
        font-weight: 200;
        font-style: normal;
    }

    .barlow-light {
        font-family: "Barlow", sans-serif;
        font-weight: 300;
        font-style: normal;
    }

    .barlow-regular {
        font-family: "Barlow", sans-serif;
        font-weight: 400;
        font-style: normal;
    }

    .barlow-medium {
        font-family: "Barlow", sans-serif;
        font-weight: 500;
        font-style: normal;
    }

    .barlow-semibold {
        font-family: "Barlow", sans-serif;
        font-weight: 600;
        font-style: normal;
    }

    .barlow-bold {
        font-family: "Barlow", sans-serif;
        font-weight: 700;
        font-style: normal;
    }

    .barlow-extrabold {
        font-family: "Barlow", sans-serif;
        font-weight: 800;
        font-style: normal;
    }

    .barlow-black {
        font-family: "Barlow", sans-serif;
        font-weight: 900;
        font-style: normal;
    }

    .barlow-thin-italic {
        font-family: "Barlow", sans-serif;
        font-weight: 100;
        font-style: italic;
    }

    .barlow-extralight-italic {
        font-family: "Barlow", sans-serif;
        font-weight: 200;
        font-style: italic;
    }

    .barlow-light-italic {
        font-family: "Barlow", sans-serif;
        font-weight: 300;
        font-style: italic;
    }

    .barlow-regular-italic {
        font-family: "Barlow", sans-serif;
        font-weight: 400;
        font-style: italic;
    }

    .barlow-medium-italic {
        font-family: "Barlow", sans-serif;
        font-weight: 500;
        font-style: italic;
    }

    .barlow-semibold-italic {
        font-family: "Barlow", sans-serif;
        font-weight: 600;
        font-style: italic;
    }

    .barlow-bold-italic {
        font-family: "Barlow", sans-serif;
        font-weight: 700;
        font-style: italic;
    }

    .barlow-extrabold-italic {
        font-family: "Barlow", sans-serif;
        font-weight: 800;
        font-style: italic;
    }

    .barlow-black-italic {
        font-family: "Barlow", sans-serif;
        font-weight: 900;
        font-style: italic;
    }

    .container-section {
        display: none;
    }

    .container-section.active {
        display: block;
    }

    .arrowBoxover,
    .arrowBoxRight {
        z-index: 10;
        /* Diğer elemanların üstüne çıkar */
        cursor: pointer;
        /* Tıklanabilir olduğunu belirt */
    }

    .hidden {
        display: none !important;
    }

    @media only screen and (max-width: 768px) {
        .mobileClass {
            margin-top: 100px !important;
        }
    }

    body {
        font-family: Barlow;
        min-height: 100vh;
        overflow-y: auto;

    }

    body {
        background-image: url('/public/assets/img/vecteezy_green-abstract-background-with-wavy-lines_.jpg');
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
        background-image: url('/public/assets/img/vecteezy_green-abstract-background-with-wavy-lines_.jpg');

        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        filter: blur(10px);
        /* Blur efekti */
        z-index: 0;
        /* Arka planda kalması için */
    }

    .customizedNavbar {
        background-color: transparent !important;
        /* Arka planı şeffaf yapar */
        box-shadow: none;
        /* Gölgeyi kaldırır */
        border-bottom: none;
        /* Alt çizgiyi kaldırır (varsa) */
    }

    .img {
        width: 300px;
    }

    .customizedNavbar {
        padding: 20px !important;
        background: #fefeff;
    }

    .nav-link {
        font-size: 18px !important;
        font-weight: 600;
        color: #1A1A1A;
    }

    .nav-link:hover {
        color: #00D6A3 !important;
        transition: 0.2s;
    }

    .nav-link.active {
        color: #00D6A3 !important;
    }

    .rightSide {
        position: absolute;
        top: 85.44px;
        width: 966px;
        height: 100%;
        right: 0px;
        z-index: 0;
        background-repeat: no-repeat !important;
        background-image: url(/public/assets/img/LeftImage.png);
    }

    .leftSide {
        position: absolute;
        top: 85.44px;
        width: 966px;
        background-position-x: -100px;
        max-height: 100%;
        height: auto;
        left: 0px;
        z-index: 0;
        height: 100%;
        background-repeat: no-repeat !important;
        background-image: url(/public/assets/img/LeftImage.png);
    }

    .customizedBoxes {
        display: flex;
        flex-direction: column;
        gap: 5px;
        position: relative;
        top: -50px;
    }

    .customizedBoxes p:nth-child(1) {
        font-weight: bold;
        font-size: 49px;
        color: #333;
    }

    .customizedBoxes p:nth-child(2) {
        font-weight: 500;
        font-size: 30px;
        color: #333;
    }

    .customizedBoxes p:nth-child(3) {
        font-weight: 500;
        font-size: 30px;
        color: #333;
    }


    .btn-navbar {
        padding: 8px 40px;
        border-radius: 8px;
        display: flex;
        justify-content: center;
        align-items: center;
        background: #00D6A3;
        width: max-content;
        border: 2px solid #0dc99d !important;
        transition: 0.3s;
        font-weight: 600;
        color: #3a3636;
        font-size: 20px;
        margin-left: 10px;
    }

    .modal-btn {
        padding: 12px 25px;
        /* Butonun içindeki metin için boşluk */
        font-size: 20px;
        border-radius: 8px;
        display: block;
        justify-content: center;
        align-items: center;
        background: white;
        width: max-content;
        border: 2px solid #00D6A3 !important;
        transition: 0.3s;
        font-weight: 600;
        color: #3a3636;
    }

    .modal-btn:hover {
        transform: translateY(-10px);
        border: 2px solid #0dc99d !important;
        color: #3a3636;
        background: #00D6A3;
    }

    .btn-navbar:hover {
        transform: translateX(10px);
        border: 2px solid #00D6A3 !important;
        color: #3a3636;
        background-color: white;
    }

    .primary-button:hover {
        transform: translateY(-10px);
        border: 2px solid #00D6A3 !important;
        color: #3a3636;
        background-color: white;
    }

    .modal-pri-button:hover {
        transform: translateY(-10px);
        border: 2px solid #0dc99d !important;
        color: #3a3636;
        background: #00D6A3;
    }

    .primaryBoxesContent {
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        gap: 5px;
    }

    .primary-box {
        padding: 10px;
        border-radius: 8px;
        display: flex;
        gap: 5px;
        width: 100%;
        border: 2px solid #0dc99d !important;
        transition: 0.2s;
        font-weight: 600;
        color: #3a3636;
        font-size: 20px;
    }

    .primary-box#secondary {
        width: 100%;
        gap: 3px;
        flex-direction: column;
        font-size: 15px;
    }

    .primary-box#secondary p {
        font-size: 20px;
    }

    .primary-box#stars {
        width: 100%;
        display: flex;
        flex-direction: row;
        gap: 5px;
    }

    .ratings {
        margin-right: 10px;
    }

    .ratings i {

        color: #cecece;
        font-size: 32px;
    }

    .rating-color {
        color: #fbc634 !important;
    }

    .arrowBoxLeft {
        position: absolute;
        top: 50%;
        left: 1%;
        z-index: 50;
        width: 64px;
        height: 64px;
        background: #00d6a467;
        border-radius: 8px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 20px;
        font-weight: bolder;
        cursor: pointer;
    }

    .arrowBoxRight {
        position: absolute;
        top: 50%;
        right: 1%;
        z-index: 50;
        width: 64px;
        height: 64px;
        background: #fff;
        border-radius: 8px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 20px;
        font-weight: bolder;
        cursor: pointer;

    }

    .modal-header {
        display: flex;
        flex-direction: column;
        align-items: center;
        /* Yatayda ortala */
        padding: 20px;
        /* Her yerden padding */
        position: relative;
        border-bottom: none;
    }

    .btn-circle {
        background-color: #00D6A3;
        /* Yeşil arka plan */
        color: white;
        /* Beyaz yazı */
        width: 100px;
        /* Çap genişliği */
        height: 100px;
        /* Çap yüksekliği */
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        /* Yuvarlak görünüm */
        font-size: 16px;
        /* Yazı boyutu */
        font-weight: bold;
        /* Kalın yazı */
        margin: 0 auto;
        /* Yatay ortalama */
        cursor: pointer;
        /* Tıklanabilir göstergesi */
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        /* Hafif gölge */
        border: none;
        /* Çerçeve yok */
        padding: 10px;
        /* Yuvarlak içinde padding */
    }

    .btn-circle:hover {
        background-color: #218838;
        /* Hover durumda daha koyu yeşil */
    }

    .modal-header .btn-close {
        position: absolute;
        top: 10px;
        right: 10px;
    }

    .form-label {
        font-size: 18px !important;
        font-weight: 600;
        color: #1A1A1A;
    }

    .form-control {
        font-size: 18px !important;
    }

    .form-check {
        margin-top: 1.5rem;
        /* Üstten 2rem boşluk ekle */
        display: flex;
        /* Checkbox ve etiketi yatayda hizalamak için flexbox kullan */
        align-items: center;
        /* Yatayda hizalama */
        justify-content: center;
        /* Ortalamak için */
    }

    .form-check-label {
        margin-left: 8px;
        /* Checkbox ile etiket arasına mesafe ekle */
    }


    @media only screen and (max-width: 768px) {
        .leftSide {
            display: none !important;
        }

        .mobileClass {
            margin-top: 100px !important;
        }

        body {
            overflow: auto !important;
        }

        .arrowBoxRight {
            background: #00d6a467;
        }

        .stdimg {
            width: 100% !important;
            margin: auto;
            margin-left: 0px !important;
        }
    }

    .card-body {
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        /* İçeriği başa hizala */
        height: 100%;
    }

    .card-body img {
        margin-top: 5px;
        width: 200px;
        /* Sabit genişlik */
        height: 200px;
        /* Sabit yükseklik */
        object-fit: cover;
        /* Görselleri orantılı şekilde kırp */
        margin-bottom: 20px;
        /* Görsellerin altına boşluk */
    }

    .card-body p {
        margin-top: 10px;
        /* Üstten boşluğu sıfırlıyoruz */
        margin-bottom: 20px;
        /* Alt boşluğu eşit yapıyoruz */
        text-align: center;
        align-self: flex-start;
        /* Metni kartın üst kısmına hizalar */
    }

    .container {
        position: relative;
    }
    .card {
    background: rgba(255, 255, 255, 0.7); /* Beyaz arka plan, %10 şeffaf */
    border-radius: 10px;                  /* Köşe yuvarlama */
    padding: 20px;                        /* İç boşluk */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Hafif gölge */
}
    .eslesme-yazi,
    .alt-yazi {
        position: relative;
        z-index: 10;
        /* Yazıların arka planın üstünde görünmesini sağlar */
        color: black;
        /* Yazı rengi beyaz */
    }

    .button-group {
        display: flex;
        /* Flexbox düzeni */
        justify-content: center;
        /* Yatayda ortalama */
        align-items: center;
        /* Dikeyde ortalama */
        margin-top: 50px;
        /* Kartlarla arasına boşluk ekler */
        position: relative;
        /* Pozisyonlama için */
        width: 100%;
        /* Genişlik tüm sayfaya yayılır */
    }
</style>

<body>
    <div class="blurred-background"></div>
    <!-- Navbar Başlangıcı -->
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
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto gap-5">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Anasayfa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Nasıl Çalışır</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Hakkımızda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Danışmanlarımız</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Testler</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">İletişim</a>
                    </li>
                </ul>
                <button class="btn-navbar">Kaydol/Giriş Yap</button>
                <!-- Modal -->
                <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header justify-content-center">
                                <div class="btn-circle mt-3">Terappy</div>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <!-- E-posta -->
                                    <div class="mb-3">
                                        <label for="email" class="form-label">E-posta</label>
                                        <input type="email" class="form-control" id="email"
                                            placeholder="E-postanızı girin">
                                    </div>

                                    <!-- Şifre -->
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Şifre</label>
                                        <input type="password" class="form-control" id="password"
                                            placeholder="Şifrenizi girin">
                                        <a href="#"
                                            class="d-block mt-3 text-decoration-none nav-link text-center">Şifremi
                                            Unuttum</a>
                                    </div>
                                    <!-- Beni Hatırla -->
                                    <div class="form-check mb-3">
                                        <input type="checkbox" class="form-check-input" id="rememberMe">
                                        <label class="form-check-label" for="rememberMe">Beni Hatırla</label>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <!-- Giriş Yap Butonu -->
                                <button type="button" class="primary-button w-100">Giriş Yap</button>
                                <!-- Kayıt Ol Butonu -->
                                <button type="button" class=" modal-btn w-100 mt-3">Hesabınız yoksa lütfen kayıt
                                    olun</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <h2 class="eslesme-yazi" style="margin-top: 50px; text-align: center; ">Nasıl Çalışır</h2>
    <h2 class="alt-yazi" style="margin-top: 20px; text-align: center; font-size: 18px;">3 adımda en uygun psikologunuzla
        tanışın.</h2>
    <div class="container eslesme-container" style="margin-top: 70px;">
        <div class="row">
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="img-container">
                            <img src="/public/assets/img/kindpng_2738804.png" alt="Örnek Resim">
                        </div>
                        <p>1 - Kayıt ol kısmından profilinizi oluşturun.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="img-container">
                            <img src="/public/assets/img/hero-sec-banner.png" alt="Örnek Resim">
                        </div>
                        <p>2 - Psikologlarımızı inceleyin ve size en uygun psikologlar için kaydınızı oluşturun.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="img-container">
                            <img src="/public/assets/img/pngtree-therapist-conduct-psychotherapy-counseling-png-image_11961647.png"
                                alt="Örnek Resim">
                        </div>
                        <p>3 - Sizin için en uygun 3 psikologumuzu bulalım.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="button-group text-center mt-4">
        <button type="button" class="modal-btn">Terapiye Başlayın</button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.arabul.us/fontawesome/js/all.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Modal elementini seç
            const modalElement = document.getElementById("loginModal");

            // Bootstrap modal nesnesini oluştur
            const bootstrapModal = new bootstrap.Modal(modalElement);

            // Modal açmak için kullanılan buton
            const openModalBtn = document.querySelector(".btn-navbar"); // Kaydol/Giriş Yap butonu sınıfı

            // Butona tıklayınca modalı aç
            if (openModalBtn) {
                openModalBtn.addEventListener("click", function () {
                    bootstrapModal.show();
                });
            }
        });

        // Bootstrap için gerekli olan scriptleri dinamik olarak ekleme (eğer eksikse)
        (function () {
            const popperScript = document.createElement('script');
            popperScript.src = 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js';
            popperScript.defer = true;
            document.body.appendChild(popperScript);

            const bootstrapScript = document.createElement('script');
            bootstrapScript.src = 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js';
            bootstrapScript.defer = true;
            document.body.appendChild(bootstrapScript);
        })();
    </script>


</body>

</html>